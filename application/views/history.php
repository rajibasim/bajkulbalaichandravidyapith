<?php 
include 'header.php';
?>
<section class="sec-quotes sec-facilities-quotes">
    <div class="overlay-innerBanner"></div>
    <div class="container">
        <div class="bx-cotedContent">
            <div class="bx-Quotes">
                <p><span>"</span> 
                   <?php
                      $desc = json_decode($page_data['json_data']);
                      echo strip_tags($desc->description);
                   ?>
                <span>"</span></p>
                <h6><?=$page_data['name'];?></h6>
            </div>
        </div>
    </div>
</section>
<?php
if(isset($history) && $history){
    foreach ($history as $key => $value) {
        $desc = json_decode($value['json_data']);
        if(($key+1) % 2 == 0){
        ?>
            <section class="sec-qualityEducation sec-about-qualityEducation">
               <div class="container">
                  <div class="bx-qualityEducation">
                     <div class="bximg-qualityEducation">
                        <?php
                         if($value['image']){
                         ?>
                            <img src="<?=base_url()?>backend/data_image/<?=$value['image'];?>" />
                         <?php
                         }else{
                         ?>
                            <img src="<?=base_url()?>backend/admin/images/nopic.jpg" />
                         <?php  
                         }
                         ?>
                     </div>
                     <div class="content-qualityEducation">
                        <div class="title-qualityEducation">
                           <h2><?=$desc->name?></h2>
                           <?=$desc->description?>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
        <?php
        }else{
        ?>  <section class="sec-ourmission sec-aboutus">
               <div class="container">
                  <div class="title-ourteacher">
                     <div class="content-ourteacher">
                        <h2><?=$desc->name?></h2>
                     </div>
                  </div>
                  <div class="bx-ourmission">
                     <div class="content-ourmission">
                        <?=$desc->description?>
                     </div>
                     <div class="img-ourmission">
                        <?php
                         if($value['image']){
                         ?>
                            <img src="<?=base_url()?>backend/data_image/<?=$value['image'];?>" />
                         <?php
                         }else{
                         ?>
                            <img src="<?=base_url()?>backend/admin/images/nopic.jpg" />
                         <?php  
                         }
                         ?>
                     </div>
                  </div>
               </div>
            </section>
            
        <?php  
        }
    }
}
?>
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