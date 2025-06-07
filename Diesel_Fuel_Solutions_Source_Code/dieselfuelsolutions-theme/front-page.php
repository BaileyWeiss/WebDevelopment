<?php get_header();

 $hero = get_field('hero');
 $body = get_field('body');

?>


<div class="hero-img">
            <div class="wrapper">
             
               <div class="hero1" data-aos="fade-up" data-aos-duration="2000">
                <img src="<?php bloginfo('template_directory');?>/img/Diesel_Logo_Just_Words.png" class="hero-logo" alt="Diesel Fuel Solutions Logo">
               </div>
               
               <div class="hero2" data-aos="zoom-in" data-aos-duration="2000">
                <img src="<?php bloginfo('template_directory');?>/img/Credit_Card_Icon_2_With_Shadow.png" alt="Diesel Fuel Solutions Card Image">
               </div>
               
               <div class="hero3" data-aos="zoom-in" data-aos-duration="2000">
                 <a href="<?php echo $hero['button_link'];?>" target=blank>
                   <div class="applybtn">
                       <h3><b><?php echo $hero['button_text']?></b></h3>
                   </div>
                 </a>
               </div>
            </div>
            
</div>
       
      
        
<section class="home_content fadein">
 
<?php the_content();?>

   <section id="testimonials" class="testimonials-section">
    <div class="container">
        <div class="testimonials-slider">
            <div class="testimonials-wrapper">
                <?php
                // Query for testimonials
                $args = array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => 5,
                );
                
                $testimonials_query = new WP_Query($args);
                
                if ($testimonials_query->have_posts()) :
                    while ($testimonials_query->have_posts()) : $testimonials_query->the_post();
                ?>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                                </svg>
                            </div>
                            <p class="testimonial-text"><?php echo get_the_content(); ?></p>
                            <div class="testimonial-author">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="author-image">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="author-info">
                                    <h4 class="author-name"><?php the_title(); ?></h4>
                                    <?php if (get_post_meta(get_the_ID(), 'testimonial_position', true)) : ?>
                                        <p class="author-position"><?php echo get_post_meta(get_the_ID(), 'testimonial_position', true); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path d="M4.583 17.321C3.553 16.227 3 15 3 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179zm10 0C13.553 16.227 13 15 13 13.011c0-3.5 2.457-6.637 6.03-8.188l.893 1.378c-3.335 1.804-3.987 4.145-4.247 5.621.537-.278 1.24-.375 1.929-.311 1.804.167 3.226 1.648 3.226 3.489a3.5 3.5 0 0 1-3.5 3.5c-1.073 0-2.099-.49-2.748-1.179z"/>
                                </svg>
                            </div>
                            <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula.</p>
                            <div class="testimonial-author">
                                <div class="author-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-avatar.png" alt="Default Author">
                                </div>
                                <div class="author-info">
                                    <h4 class="author-name">John Doe</h4>
                                    <p class="author-position">CEO, Example Company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="testimonial-controls">
                <button class="prev-testimonial" aria-label="Previous testimonial">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                    </svg>
                </button>
                <div class="testimonial-dots"></div>
                <button class="next-testimonial" aria-label="Next testimonial">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>
        
</section>

<?php get_footer();?>