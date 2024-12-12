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
if(isset($facuilty) && $facuilty){
?>
<section class="sec-ourteacher">
   <div class="container">
      <div class="title-ourteacher">
         <div class="content-ourteacher">
            <h2>Our Teachers</h2>
         </div>
      </div>
      <div class="bx-teachers">
         <ul>
          <?php
          foreach ($facuilty as $key => $value) {
            $desc = json_decode($value['json_data']);
          ?>

            <li>
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
                <div class="name-teacher">
                    <h5><?=$desc->name?></h5>
                    <h6><?=$desc->designation?></h6>
                    <p><?=$desc->degree?></p>
                    <p><i>"<?=strip_tags($desc->description)?>"</i></p>
                </div>
            </li>
          <?php
          }
          ?>
         </ul>
      </div>
   </div>
</section>
<?php
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