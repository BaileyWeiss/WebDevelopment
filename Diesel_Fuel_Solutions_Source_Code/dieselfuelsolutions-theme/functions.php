<?php
//Load main.css
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_stylesheets(){
    wp_register_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('main');
}

//Load main.js
function theme_enqueue_scripts() {
    // Enqueue your JavaScript file
    wp_enqueue_script(
        'theme-main-js',                         // Handle
        get_template_directory_uri() . '/js/main.js', // Path to your JS file
        array('jquery'),                         // Dependencies (optional)
        '1.0.0',                                 // Version (for cache busting)
    );
    
    // If you need to pass data to your JavaScript
    wp_localize_script(
        'theme-main-js',
        'themeData',
        array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'siteUrl' => get_site_url()
        )
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

//Identify the menus needed for the theme
function navigation_menus(){
    
    $locations = array(
    'primary' => "Primary Left Sidebar",
    'footer' => "Footer Menu Items");

    //register the menus for use
    register_nav_menus($locations);
}

add_action('init', 'navigation_menus');


// Testimonials
//Register Testimonial Custom Post Type
function register_testimonial_post_type() {
    $args = array(
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonials'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-format-quote',
        'supports'           => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'labels'             => array(
            'name'               => _x('Testimonials', 'post type general name'),
            'singular_name'      => _x('Testimonial', 'post type singular name'),
            'menu_name'          => _x('Testimonials', 'admin menu'),
            'name_admin_bar'     => _x('Testimonial', 'add new on admin bar'),
            'add_new'            => _x('Add New', 'testimonial'),
            'add_new_item'       => __('Add New Testimonial'),
            'new_item'           => __('New Testimonial'),
            'edit_item'          => __('Edit Testimonial'),
            'view_item'          => __('View Testimonial'),
            'all_items'          => __('All Testimonials'),
            'search_items'       => __('Search Testimonials'),
            'parent_item_colon'  => __('Parent Testimonials:'),
            'not_found'          => __('No testimonials found.'),
            'not_found_in_trash' => __('No testimonials found in Trash.')
        ),
    );
    register_post_type('testimonial', $args);
}
add_action('init', 'register_testimonial_post_type');

/**
 * Add meta box for testimonial position
 */
function add_testimonial_meta_boxes() {
    add_meta_box(
        'testimonial_position_meta_box',
        'Testimonial Details',
        'testimonial_position_meta_box_callback',
        'testimonial',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'add_testimonial_meta_boxes');

/**
 * Meta box callback function
 */
function testimonial_position_meta_box_callback($post) {
    wp_nonce_field('testimonial_position_meta_box', 'testimonial_position_meta_box_nonce');
    $value = get_post_meta($post->ID, 'testimonial_position', true);
    ?>
    <p>
        <label for="testimonial_position">Position/Company:</label>
        <input type="text" id="testimonial_position" name="testimonial_position" value="<?php echo esc_attr($value); ?>" style="width: 100%;" />
        <span class="description">Enter the position and/or company of the person giving the testimonial.</span>
    </p>
    <?php
}

/**
 * Save meta box data
 */
function save_testimonial_meta_box_data($post_id) {
    if (!isset($_POST['testimonial_position_meta_box_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['testimonial_position_meta_box_nonce'], 'testimonial_position_meta_box')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['testimonial_position'])) {
        update_post_meta($post_id, 'testimonial_position', sanitize_text_field($_POST['testimonial_position']));
    }
}
add_action('save_post', 'save_testimonial_meta_box_data');


add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
function special_nav_class($classes, $item){
    if(in_array('current-menu-item', $classes) ) {
        
    }return $classes;
 }

//Enqueue scripts and styles for Salesforce form
function salesforce_form_scripts() {
    // Only load on the Salesforce form template
    if (is_page_template('page-salesforce-form.php')) {
        wp_enqueue_style('salesforce-form-style', get_template_directory_uri() . '/assets/css/salesforce-form.css');
        wp_enqueue_script('salesforce-form-script', get_template_directory_uri() . '/assets/js/salesforce-form.js', array('jquery'), '1.0', true);
    }
}
add_action('wp_enqueue_scripts', 'salesforce_form_scripts');

/**
 * Add Salesforce form shortcode
 */
function salesforce_form_shortcode() {
    ob_start();
    ?>
    <div class="salesforce-form-container">
        <iframe id="salesforce-form" 
                src="https://your-salesforce-form-url.com" 
                width="100%" 
                height="800px" 
                frameborder="0" 
                scrolling="yes">
        </iframe>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('salesforce_form', 'salesforce_form_shortcode');

//Register main sidebar widget area.
function modern_chic_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Main Sidebar', 'modern-chic' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here to appear in the main sidebar.', 'modern-chic' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'modern_chic_widgets_init' );

//Register additional widget areas that can be used throughout the theme.
function modern_chic_additional_widget_areas() {
    register_sidebar( array(
        'name'          => esc_html__( 'Widget Area 1', 'modern-chic' ),
        'id'            => 'widget-area-1',
        'description'   => esc_html__( 'Add widgets here to use in various template locations.', 'modern-chic' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Widget Area 2', 'modern-chic' ),
        'id'            => 'widget-area-2',
        'description'   => esc_html__( 'Add widgets here to use in various template locations.', 'modern-chic' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name'          => esc_html__( 'Widget Area 3', 'modern-chic' ),
        'id'            => 'widget-area-3',
        'description'   => esc_html__( 'Add widgets here to use in various template locations.', 'modern-chic' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'modern_chic_additional_widget_areas' );

/**
 * Add AJAX Contact Form Info
 */
// Add this to your theme's functions.php file as well
add_action('wp_enqueue_scripts', 'dfs_enqueue_scripts');
function dfs_enqueue_scripts() {
    wp_localize_script('jquery', 'dfs_ajax', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('dfs_contact_nonce')
    ));
}
// Updated PHP handler function for functions.php
add_action('wp_ajax_dfs_contact_form', 'handle_dfs_contact_form');
add_action('wp_ajax_nopriv_dfs_contact_form', 'handle_dfs_contact_form');

function handle_dfs_contact_form() {
    // Verify nonce for security
    if (!wp_verify_nonce($_POST['nonce'], 'dfs_contact_nonce')) {
        wp_send_json_error('Security check failed');
        wp_die();
    }
    
    // Get form data
    $name = sanitize_text_field($_POST['name'] ?? '');
    $company = sanitize_text_field($_POST['company'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $subject = sanitize_text_field($_POST['subject'] ?? '');
    $inquiry_type = sanitize_text_field($_POST['inquiry_type'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');
    $recipient = sanitize_email($_POST['recipient'] ?? '');
    
    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
        wp_send_json_error('Please fill in all required fields');
        wp_die();
    }
    
    // Validate email
    if (!is_email($email)) {
        wp_send_json_error('Please enter a valid email address');
        wp_die();
    }
    
    // Prepare email content
    $email_subject = "New Contact Form Submission: $subject";
    
    $email_body = "
    <h2>New Contact Form Submission</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Company:</strong> $company</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Phone:</strong> $phone</p>
    <p><strong>Subject:</strong> $subject</p>
    <p><strong>Inquiry Type:</strong> $inquiry_type</p>
    <p><strong>Message:</strong></p>
    <p>" . nl2br($message) . "</p>
    ";
    
    // Set email headers
    $headers = array(
        'Content-Type: text/html; charset=UTF-8',
        'From: ' . get_bloginfo('name') . ' <' . get_bloginfo('admin_email') . '>',
        'Reply-To: ' . $name . ' <' . $email . '>'
    );
    
    // Send email
    $mail_sent = wp_mail($recipient, $email_subject, $email_body, $headers);
    
    // Return response
    if ($mail_sent) {
        wp_send_json_success('Message sent successfully');
    } else {
        wp_send_json_error('Failed to send email. Please try again or contact us directly.');
    }
    
    wp_die();
}

?>