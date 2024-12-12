      <div class="footer">
         <div class="container">
            <div class="link-list-footer">
               <ul>
                  <li>
                     <!-- <h3>Useful Link</h3> -->
                     <div class="logo-footer">
                        <a href="/">
                           <img src="<?=base_url()?>frontend/Assets/Images/logo.png" />
                        </a>
                     </div>
                     <div class="footer-schoolname">
                        Bajkul Balai Chandra Vidyapith (H.S)
                     </div>
                  </li>
                  <li>
                     <h3>School Time</h3>
                     <ul>
                        <li>Mon - Fri : 10:00 - 16:00</li>
                        <li>Sat : 10:00 - 14:00</li>
                        <li>Sunday : Close</li>
                     </ul>
                  </li>
                  <li>
                     <h3>Quick Link</h3>
                     <ul>
                        <li><a href="<?=base_url();?>">Home</a></li>
                        <li><a href="<?=base_url();?>about-us">About Us </a></li>
                        <li><a href="<?=base_url();?>history">History</a></li>
                        <li><a href="<?=base_url();?>contact-us">Contact Us</a></li>
                     </ul>
                  </li>
                  <li>
                     <h3>About Us</h3>
                     <ul>
                        <li><?=$settingsArray['contact_no_1']?></li>
                        <li><?=$settingsArray['contact_email']?></li>
                        <li><?=$settingsArray['corporate_office_address']?></li>
                     </ul>
                     <div class="social-links">
                        <a target="_blank" href="<?=$settingsArray['facebook_link']?>"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        <a target="_blank" href="<?=$settingsArray['twitter_link']?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a target="_blank" href="<?=$settingsArray['googleplus_link']?>"><i class="fab fa-google" aria-hidden="true"></i></a>
                        <a target="_blank" href="<?=$settingsArray['youtube_link']?>"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="bx-copyright">
               <div class="left-copyright">
                  <p>Design & Developed by <a href="#">e-Sampark</a></p>
               </div>
               <div class="right-copyright">
                  <p>Copyright © <?php echo date('Y') ?>. All rights reserved.</p>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <link rel="stylesheet" type="text/css" charset="UTF-8" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css"/>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" ></script>
   <script src="<?=base_url()?>frontend/Assets/js/script.js" ></script>
   <script src="<?=base_url()?>frontend/Assets/js/galleryLightbox.js" ></script>
</html>