<?php 
include 'header.php';
?>
<section class="sec-quotes sec-PNTB">
   <div class="overlay-innerBanner"></div>
   <div class="container">
      <div class="bx-cotedContent">
         <div class="bx-Quotes">
               <div class="pagename"> <?php echo $title; ?></div>
               <div class="breadcrump"><span><a href="<?=base_url()?>">Home</a></span><span>/</span><span> <?php echo $title; ?></span></div>
         </div>
      </div>
   </div>
</section>
<section class="sec-ourmission sec-contactpage-ourmission">
    <div class="container">
        <div class="title-ourteacher">
            <div class="content-ourteacher">
                <h2>Contact Us</h2>
            </div>
        </div>
        <div class="bx-ourmission">
            <div class="content-ourmission contentPage-ourmission">
                <p>
                  <?php
                     $desc = json_decode($cms[15]['json_data']);
                     echo strip_tags($desc->description);
                  ?>
                </p>
                <ul>
                    <li>
                        <div class="icon-mission">
                            <img src="<?=base_url()?>frontend/Assets/Images/icon-phone-1.png">
                        </div>
                        <div class="contact-content">
                            <h3>Email Id</h3>
                            <p><?=$settingsArray['contact_email']?></p>
                        </div>
                    </li>
                    <li>
                        <div class="icon-mission">
                            <img src="<?=base_url()?>frontend/Assets/Images/icon-envelope.png">
                        </div>
                        <div class="contact-content">
                            <h3>Mobile</h3>
                            <p><?=$settingsArray['contact_no_1']?></p>
                        </div>
                    </li>
                    
                    <li>
                        <div class="icon-mission">
                            <img src="<?=base_url()?>frontend/Assets/Images/icon-office.png">
                        </div>
                        <div class="contact-content">
                            <h3>Address</h3>
                            <p><?=$settingsArray['corporate_office_address']?></p>
                        </div>
                    </li>
                    
                </ul>
            </div>
            <div class="img-ourmission">
                <img src="<?=base_url()?>backend/data_image/<?=$cms[15]['image'];?>">
            </div>
        </div>
    </div>
</section>
<section class="sec-greenpatch">
  <div class="container">
     <div class="bx-greenpatch">
        <div class="content-greenpatch">
           <h2><?=$cms[3]['name'];?></h2>
           <p>
              <?php
                 $desc = json_decode($cms[3]['json_data']);
                 echo strip_tags($desc->description);
              ?>
           </p>
        </div>
        <div class="btn-greenpatch">
           <a href="<?=base_url('contact-us')?>">Apply now</a>
        </div>
     </div>
  </div>
</section>
<?php 
include 'footer.php';
?>