<?php
get_header();
?>

<div class="page-container" id="blog-media">
    <div class="content-wrapper">
        <main id="primary" class="site-main">
            <div class="main-content">
                <?php
                while ( have_posts() ) :
                    the_post();
                    the_content();
                endwhile; // End of the loop.
                ?>
            </div>
        </main><!-- #main -->
        
        <aside class="cta-sidebar">
            <div class="cta-box">
                <h3>Ready to Take Control of Your Fuel Costs?</h3>
                <p>Apply now for the CrossRoads Freight Card and start saving at over 16,000 truck stops nationwide.</p>
                <ul class="cta-features">
                    <li>✅ Real-time expense tracking</li>
                    <li>✅ Driver-specific controls</li>
                    <li>✅ Nationwide acceptance</li>
                    <li>✅ Built-in fraud protection</li>
                </ul>
                <p class="cta-tagline">Fuel smarter. Spend less. Drive further.</p>
                <a href="https://wexinc.my.salesforce-sites.com/creditapplication/OTRBOCA?pgm=DieselFuelSolutionsCRF" class="cta-button">👉 Apply Today</a>
            </div>
            
            <!-- Back to Insights Button -->
            <a href="https://dieselfuelsolutions.net/insights/" class="back-to-insights">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="19" y1="12" x2="5" y2="12"></line>
                    <polyline points="12 19 5 12 12 5"></polyline>
                </svg>
                Back to Insights
            </a>
        </aside>
    </div>
</div>

<style>
    .page-container {
        width: 100%;
        max-width: 1400px;
        margin: 0 auto;
        padding: 20px;
        position: relative;
    }
    
    .content-wrapper {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 300px;
        gap: 30px;
    }
    
    .site-main {
        display: flex;
        justify-content: center;
    }
    
    .main-content {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }
    
    .cta-sidebar {
        width: 300px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        position: sticky;
        top: 25px; /* Adjusted to match the desired padding */
        align-self: start;
		padding-top: 150px;
    }
    
    .cta-box {
        background-color: var(--color-secondary);
        border-radius: 8px;
        padding: 25px;
        padding-top: 25px; /* Explicit padding-top */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border-left: 4px solid var(--color-primary);
        position: relative;
    }
    
    /* Add a pseudo-element for additional padding when scrolled */
    .cta-sidebar::before {
        content: '';
        position: absolute;
        top: -25px; /* Creates 25px space above the box */
        left: 0;
        right: 0;
        height: 25px;
        z-index: -1;
    }
    
    .cta-box h3 {
        color: var(--color-primary);
        margin-top: 0;
        font-size: 1.4rem;
    }
    
    .cta-features {
        list-style: none;
        padding-left: 0;
        margin: 20px 0;
    }
    
    .cta-features li {
        margin-bottom: 10px;
    }
    
    .cta-tagline {
        font-weight: bold;
        font-style: italic;
        margin: 20px 0;
    }
    
    .cta-button {
        display: inline-block;
        background-color: var(--color-primary);
        color: white;
        padding: 12px 24px;
        text-decoration: none;
        border-radius: 4px;
        font-weight: bold;
        transition: background-color 0.3s;
    }
    
    .cta-button:hover {
        background-color: var(--color-tertiary);
        color: white;
    }
    
    /* Back to Insights Button */
    .back-to-insights {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background-color: var(--color-primary);
        color: white;
        padding: 12px 15px;
        border-radius: 4px;
        text-decoration: none;
        font-weight: 500;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
        text-align: center;
    }
    
    .back-to-insights:hover {
        background-color: var(--color-tertiary);
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    
    .back-to-insights svg {
        width: 16px;
        height: 16px;
    }
    
    /* Mobile styles */
    @media (max-width: 1536px) {
        .content-wrapper {
            grid-template-columns: 1fr;
        }
        
        .cta-sidebar {
            width: 100%;
            grid-row: 2; /* Move CTA to bottom on mobile */
            position: static;
        }
        
        .site-main {
            grid-row: 1; /* Content first on mobile */
        }
        
        .cta-box::before {
            display: none; /* Remove the pseudo-element on mobile */
        }
    }
</style>

<script>
// Add a small script to ensure proper spacing when scrolling
document.addEventListener('DOMContentLoaded', function() {
    // This helps ensure the CTA box has proper spacing when sticky
    window.addEventListener('scroll', function() {
        const ctaSidebar = document.querySelector('.cta-sidebar');
        if (window.scrollY > 50) {
            ctaSidebar.classList.add('is-scrolled');
        } else {
            ctaSidebar.classList.remove('is-scrolled');
        }
    });
});
</script>

<?php
get_footer(); ?>