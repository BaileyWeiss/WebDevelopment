     <?php
     $footer = get_field('footer');
     ?>
     
     <!-- Footer -->
      <footer>
        <div class="footerwrapper">
        
          <div class="footercontainer">
              <div class="header">
                <a href="https://dieselfuelsolutions.net/">
                  <span><h2>Diesel Fuel Solutions</h2></span>
                </a>
                <p>Fuel smarter. Spend less. Drive success with the CrossRoads Freight Card from Diesel Fuel Solutions, your all-in-one answer to fuel management. Say goodbye to fraud, manual reporting, and wasted time with real-time controls and nationwide acceptance. 					Power your fleet with the card that protects your bottom line and keeps your business moving forward.</p><br>
				  <p>No matter the size of your fleet, our card grows with you by delivering savings, security, and simplicity every mile of the way. Join the thousands of truckers already fueling with confidence.</p>
              </div>
      
      
              <div class="links">
                <h3>USEFUL LINKS</h3>
                <?php
                     // Check if the custom menu exists
                     if ( has_nav_menu( 'footer' ) ) {
                         wp_nav_menu(
                             array(
                                 'menu' => 'footer',
                                 'container' => '',
                                 'theme_location' => 'footer'
                                 
                             )
                         );
                     } else {
                         // Display a message if no menu is assigned
                         echo '<p class="no-menu-assigned">' . esc_html__( 'Please assign a menu to the Useful Links location', 'your-theme-textdomain' ) . '</p>';
                     }
                     ?>
              </div>
      
              <div class="social">
                <h3>STAY CONNECTED</h3>
                <div class="socialgrid">
				<a href="https://www.linkedin.com/in/nick-morris-aab9079/" target=blank><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
</svg></a>
				</div>
              </div>
      
              <div class="location">
                <p>
                  Minneapolis, MN. 55401<br>
                  United States of America<br><br>
                </p>
                <p><a href="tel:(763) 458-6388 ?>">(763) 458-6388</a></p>
                <br>
                <p><a href="mailto:nmorris@dieselfuelsolutions.net">nmorris@dieselfuelsolutions.net</a></p>
                  
                
              </div>
              
              <div class="copyright">
                   &copy; Copyright <strong><span>Diesel Fuel Solutions, LLC.</span></strong> All Rights Reserved  
               </div>
              
          </div>
          
        </div>
      </footer>
      <!-- Footer -->
  
  </div>
  
  
      <script>
      AOS.init();
    </script>
    
      <?php wp_footer();
      ?>
      
</body>

</html>