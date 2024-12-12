<?php 
include 'header.php';
?>
   <section class="sec-mainHomeBanner">
      <section class="sec-HomeBannerContents">
         <div class="container">
            <div class="bxBannerContents">
               <h2><?=$page_data['name'];?></h2>
               <?php
                  $desc = json_decode($page_data['json_data']);
                  echo $desc->description;
               ?>
            </div>
         </div>
      </section>
      <section class="sec-HomeBannerListContents">
         <div class="container">
            <div class="bxHomeBannerListContents">
               <ul>
                  <li>
                     <div class="bxBannerListContents">
                        <div class="icon-listContents">
                           <img src="<?=base_url()?>frontend/Assets/Images/icon-school.png" alt="icon" />
                        </div>
                        <div class="text-listContents">
                           <h3><?=$cms[0]['name'];?></h3>
                           <p class="betellips betvl-2">
                           <?php
                              $desc = json_decode($cms[0]['json_data']);
                              echo strip_tags($desc->description);
                           ?>
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="bxBannerListContents">
                        <div class="icon-listContents">
                           <img src="<?=base_url()?>frontend/Assets/Images/icon-teacher.png" alt="icon" />
                        </div>
                        <div class="text-listContents">
                           <h3><?=$cms[1]['name'];?></h3>
                           <p class="betellips betvl-2">
                              <?php
                                 $desc = json_decode($cms[1]['json_data']);
                                 echo strip_tags($desc->description);
                              ?>
                           </p>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="bxBannerListContents">
                        <div class="icon-listContents">
                           <img src="<?=base_url()?>frontend/Assets/Images/icon-curriculam.png" alt="icon" />
                        </div>
                        <div class="text-listContents">
                           <h3><?=$cms[2]['name'];?></h3>
                           <p class="betellips betvl-2">
                              <?php
                                 $desc = json_decode($cms[2]['json_data']);
                                 echo strip_tags($desc->description);
                              ?>
                           </p>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section class="sec-homebanner">
         <div class="slick-carousel">
           <?php
           if(isset($banner) && $banner){
               foreach ($banner as $key => $value){
           ?>
               <div>
                  <div class="slide-content">
                     <img src="<?=base_url()?>backend/data_image/<?=$value['image'];?>"
                        alt="<?=$value['name'];?>"/>
                  </div>
               </div>
            <?php
               }
            }
            ?>
         </div>
      </section>
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
   <section class="sec-ourmission">
      <div class="container">
         <div class="bx-ourmission">
            <div class="img-ourmission">
               <img src="<?=base_url()?>backend/data_image/<?=$cms[4]['image'];?>" />
            </div>
            <div class="content-ourmission">
               <h2><?=$cms[4]['name'];?></h2>
               <p>
                  <?php
                     $desc = json_decode($cms[4]['json_data']);
                     echo strip_tags($desc->description);
                  ?>
               </p>
               <ul>
                  <li>
                     <div class="icon-mission">
                        <img src="<?=base_url()?>frontend/Assets/Images/icon-mission-1.png" />
                     </div>
                     <h3><?=$cms[5]['name'];?></h3>
                     <p>
                        <?php
                           $desc = json_decode($cms[5]['json_data']);
                           echo strip_tags($desc->description);
                        ?>
                     </p>
                  </li>
                  <li>
                     <div class="icon-mission">
                        <img src="<?=base_url()?>frontend/Assets/Images/icon-mission-2.png" />
                     </div>
                     <h3><?=$cms[6]['name'];?></h3>
                     <p>
                        <?php
                           $desc = json_decode($cms[6]['json_data']);
                           echo strip_tags($desc->description);
                        ?>
                     </p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </section>
   <section class="sec-facilities">
      <div class="overlay-facilities"></div>
      <div class="container">
         <div class="title-facilities">
            <h2><?=$cms[7]['name'];?></h2>
         </div>
         <div class="bx-facilities">
            <div class="content-facilities">
               <ul>
                  <li>
                     <div class="icon-facilities">
                        <img src="<?=base_url()?>frontend/Assets/Images/icon-facilities-1.png" />
                     </div>
                     <h4><?=$cms[8]['name'];?></h4>
                     <p>
                        <?php
                           $desc = json_decode($cms[8]['json_data']);
                           echo strip_tags($desc->description);
                        ?>
                     </p>
                  </li>
                  <li>
                     <div class="icon-facilities">
                        <img src="<?=base_url()?>frontend/Assets/Images/icon-facilities-1.png" />
                     </div>
                     <h4><?=$cms[9]['name'];?></h4>
                     <p>
                        <?php
                           $desc = json_decode($cms[9]['json_data']);
                           echo strip_tags($desc->description);
                        ?>
                     </p>
                  </li>
                  <li>
                     <div class="icon-facilities">
                        <img src="<?=base_url()?>frontend/Assets/Images/icon-facilities-1.png" />
                     </div>
                     <h4><?=$cms[10]['name'];?></h4>
                     <p>
                        <?php
                           $desc = json_decode($cms[10]['json_data']);
                           echo strip_tags($desc->description);
                        ?>
                     </p>
                  </li>
                  <li>
                     <div class="icon-facilities">
                        <img src="<?=base_url()?>frontend/Assets/Images/icon-facilities-1.png" />
                     </div>
                     <h4><?=$cms[11]['name'];?></h4>
                     <p>
                        <?php
                           $desc = json_decode($cms[11]['json_data']);
                           echo strip_tags($desc->description);
                        ?>
                     </p>
                  </li>
               </ul>
               <div class="btn-readmore">
                  <a href="<?=base_url('about-us')?>">Read More</a>
               </div>
            </div>
            <div class="img-facilities">
               <img src="<?=base_url()?>backend/data_image/<?=$cms[7]['image'];?>" />
            </div>
         </div>
      </div>
   </section>
   <section class="sec-qualityEducation">
      <div class="container">
         <div class="bx-qualityEducation">
            <div class="content-qualityEducation">
               <div class="title-qualityEducation">
                  <h2><?=$cms[12]['name'];?></h2>
                  <p>
                     <?php
                        $desc = json_decode($cms[12]['json_data']);
                        echo $desc->description;
                     ?>
                  </p>
               </div>
            </div>
            <div class="bximg-qualityEducation">
               <img src="<?=base_url()?>backend/data_image/<?=$cms[12]['image'];?>" />
            </div>
         </div>
      </div>
   </section>
   <section class="sec-elementor">
      <div class="overlay-elementor">&nbsp;</div>
      <div class="container">
         <ul>
            <li>
               <div class="icons">
                  <img src="<?=base_url()?>frontend/Assets/Images/icon-student.png" />
               </div>
               <h2>1,00,000 +</h2>
               <p>Students</p>
            </li>
            <li>
               <div class="icons">                            
                  <img src="<?=base_url()?>frontend/Assets/Images/icon-teacher.png" />
               </div>
               <h2>300 +</h2>
               <p>Teacher</p>
            </li>
            <li>
               <div class="icons">                            
                  <img src="<?=base_url()?>frontend/Assets/Images/icon-graduates.png" />
               </div>
               <h2>97 %</h2>
               <p>Graduates</p>
            </li>
            <li>
               <div class="icons">                            
                  <img src="<?=base_url()?>frontend/Assets/Images/icon-awards.png" />
               </div>
               <h2>100 +</h2>
               <p>Awards</p>
            </li>
         </ul>
      </div>
   </section>
   <section class="sec-testimonials">
      <div class="container">
         <div class="title-testimonials">
            <h2><?=$cms[13]['name'];?></h2>
            <p>
               <?php
                  $desc = json_decode($cms[13]['json_data']);
                  echo strip_tags($desc->description);
               ?>
            </p>
         </div>
         <div class="bx-testimonials">
            <?php
            if(isset($testimonial) && $testimonial){
            ?>
               <div class="slider-testimonials">
                  <div class="slick-carousel-testimonials">
                     <?php
                     foreach ($testimonial as $key => $value) {
                        $desc = json_decode($value['json_data']);
                     ?>
                        <div>
                           <div class="slide-content">
                              <div class="testi-item">
                                 <div class="testi-details">
                                    <div class="testi-icons">
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
                                    <div class="testi-details-content">
                                       <h4><?=$desc->name?></h4>
                                       <p><?=$desc->designation?></p>
                                    </div>
                                 </div>
                                 <div class="testi-contents">
                                    <p><?=strip_tags($desc->description)?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php
                     }
                     ?>
                  </div>
               </div>
            <?php
            }
            ?>
            <div class="photoDetails-testimonials">
               <div class="img-testimonials">
                  <img src="<?=base_url()?>backend/data_image/<?=$cms[12]['image'];?>" />
               </div>
               <div class="bx-photoDetails">
                  <div class="bxText-photoDetails">
                     <?php
                        $desc = json_decode($cms[14]['json_data']);
                        echo strip_tags($desc->description);
                     ?>
                  </div>
                  <h5><?=$cms[14]['name'];?></h5>
               </div>
            </div>
         </div>
      </div>
   </section>
<?php 
include 'footer.php';
?>
