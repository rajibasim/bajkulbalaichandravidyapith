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
<?php
if(isset($notice) && $notice){
?>
<section class="sec-noticeBoxes">
   <div class="container">
      <div class="title-ourteacher">
         <div class="content-ourteacher">
            <h2>Our Notice</h2>
         </div>
      </div>
      <ul>
        <?php
          foreach ($notice as $key => $value) {
            $desc = json_decode($value['json_data']);
          ?>
         <li>
            <h4><?=$desc->date?></h4>
            <p><?=$desc->name?></p>
            <div class="btn-readmore">
               <a target="_blank" href="<?=base_url()?>backend/data_image/<?=$value['image'];?>">Download</a>
            </div>
         </li>
         <?php
          }
          ?>
      </ul>
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