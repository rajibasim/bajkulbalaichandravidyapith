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
<section class="sec-ourteacher sec-ourGallery">
   <div class="container">
      <div class="title-ourteacher">
         <div class="content-ourteacher">
            <h2>Our Gallery</h2>
         </div>
      </div>
   </div>
<?php
if(isset($gallery) && $gallery){
?>
   <section id="gallery">
      <div class="container">
         <div id="image-gallery">
            <div class="row bx-image-item">
               <div class="image-item image">
                  <div class="img-wrapper">
                     <a href="https://unsplash.it/500"><img src="https://unsplash.it/500" class="img-responsive"></a>
                     <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                     </div>
                  </div>
                  <div class="gallery-img-tag"> jelly-o brownie sweet</div>
               </div>
              <?php
              foreach ($gallery as $key => $value) {
                $desc = json_decode($value['json_data']);
              ?>
               <div class="image-item image">
                  <div class="img-wrapper">
                     <a href="<?=base_url()?>backend/data_image/<?=$value['image'];?>">
                       <?php
                       if($value['image']){
                       ?>
                          <img src="<?=base_url()?>backend/data_image/<?=$value['image'];?>" class="img-responsive" />
                       <?php
                       }else{
                       ?>
                          <img src="<?=base_url()?>backend/admin/images/nopic.jpg" class="img-responsive" />
                       <?php  
                       }
                       ?>
                     <div class="img-overlay">
                        <i class="fa fa-plus-circle" aria-hidden="true"></i>
                     </div>
                  </div>
                  <div class="gallery-img-tag"><?=$desc->name?></div>
               </div>
              <?php
              }
              ?>
            </div>
            <!-- End row -->
         </div>
         <!-- End image gallery -->
      </div>
      <!-- End container --> 
   </section>
<?php
}
?>
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