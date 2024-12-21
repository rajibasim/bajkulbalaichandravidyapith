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
<section class="sec-tabsfilter">
   <div class="container">
      <div class="tab-panel">
         <div class="tab-panel__header">
            <ul>
               <li class="tab-active">
                  <a href="#tab1">Class Rutine</a>
               </li>
               <li>
                  <a href="#tab2">Exam Rutine</a>
               </li>
               <li>
                  <a href="#tab3">Result</a>
               </li>
               <li>
                  <a href="#tab4">Calender</a>
               </li>
               <li>
                  <a href="#tab5">Question Paper</a>
               </li>
               <li>
                  <a href="#tab6">Notice</a>
               </li>
               
            </ul>
            <div class="tab-panel__arrow"></div>
         </div>
         <div class="tab-panel__content">
            <div class="tab-panel__content-area">
               <div id="tab1" class="tab-panel__item tab-panel__item--active">
                  <div class="tab-panel__item__content">
                     <h2>Class Rutine</h2>
                     <div class="table-wrapper">
                        <table class="fl-table">
                           <thead>
                              <tr>
                                 <th>Class</th>
                                 <th>Description</th>
                                 <th>Download</th>
                              </tr>
                           </thead>
                           <tbody>
                            <?php
                            if(isset($rutine) && $rutine && count($rutine) > 0){
                              foreach ($rutine as $key => $value) {
                                $desc = json_decode($value['json_data']);
                                ?>
                                  <tr>
                                     <td><?=$desc->class?></td>
                                     <td><?=$desc->name?></td>
                                     <td>
                                        <a target="_blank" href="<?=base_url()?>backend/data_image/<?=$value['image'];?>">Download</a>
                                     </td>
                                  </tr>
                            <?php
                              }
                            }else{
                            ?>
                              <tr>
                                 <td colspan="3">No record found!</td>
                              </tr>
                            <?php
                            }
                            ?>
                            
                           <tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div id="tab2" class="tab-panel__item">
                  <div class="tab-panel__item__content">
                     <h2>Exam Rutine</h2>
                     <div class="table-wrapper">
                        <table class="fl-table">
                           <thead>
                              <tr>
                                 <th>Class</th>
                                 <th>Description</th>
                                 <th>Download</th>
                              </tr>
                           </thead>
                           <tbody>
                            <?php
                            if(isset($exam) && $exam && count($exam) > 0){
                              foreach ($exam as $key => $value) {
                                $desc = json_decode($value['json_data']);
                                ?>
                                  <tr>
                                     <td><?=$desc->class?></td>
                                     <td><?=$desc->name?></td>
                                     <td>
                                        <a target="_blank" href="<?=base_url()?>backend/data_image/<?=$value['image'];?>">Download</a>
                                     </td>
                                  </tr>
                            <?php
                              }
                            }else{
                            ?>
                              <tr>
                                 <td colspan="3">No record found!</td>
                              </tr>
                            <?php
                            }
                            ?>
                            
                           <tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div id="tab3" class="tab-panel__item">
                  <div class="tab-panel__item__content">
                     <h2>Result</h2>
                     <div class="table-wrapper">
                        <table class="fl-table">
                           <thead>
                              <tr>
                                 <th>Class</th>
                                 <th>Description</th>
                                 <th>Download</th>
                              </tr>
                           </thead>
                           <tbody>
                            <?php
                            if(isset($result) && $result && count($result) > 0){
                              foreach ($result as $key => $value) {
                                $desc = json_decode($value['json_data']);
                                ?>
                                  <tr>
                                     <td><?=$desc->class?></td>
                                     <td><?=$desc->name?></td>
                                     <td>
                                        <a target="_blank" href="<?=base_url()?>backend/data_image/<?=$value['image'];?>">Download</a>
                                     </td>
                                  </tr>
                            <?php
                              }
                            }else{
                            ?>
                              <tr>
                                 <td colspan="3">No record found!</td>
                              </tr>
                            <?php
                            }
                            ?>
                            
                           <tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div id="tab4" class="tab-panel__item">
                  <div class="tab-panel__item__content">
                     <h2>Calender</h2>
                     <div class="table-wrapper">
                        <table class="fl-table">
                           <thead>
                              <tr>
                                 <th>Class</th>
                                 <th>Description</th>
                                 <th>Download</th>
                              </tr>
                           </thead>
                           <tbody>
                            <?php
                            if(isset($calender) && $calender && count($calender) > 0){
                              foreach ($calender as $key => $value) {
                                $desc = json_decode($value['json_data']);
                                ?>
                                  <tr>
                                     <td><?=$desc->class?></td>
                                     <td><?=$desc->name?></td>
                                     <td>
                                        <a target="_blank" href="<?=base_url()?>backend/data_image/<?=$value['image'];?>">Download</a>
                                     </td>
                                  </tr>
                            <?php
                              }
                            }else{
                            ?>
                              <tr>
                                 <td colspan="3">No record found!</td>
                              </tr>
                            <?php
                            }
                            ?>
                            
                           <tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div id="tab5" class="tab-panel__item">
                  <div class="tab-panel__item__content">
                     <h2>Question Paper</h2>
                     <div class="table-wrapper">
                        <table class="fl-table">
                           <thead>
                              <tr>
                                 <th>Class</th>
                                 <th>Description</th>
                                 <th>Download</th>
                              </tr>
                           </thead>
                           <tbody>
                            <?php
                            if(isset($paper) && $paper && count($paper) > 0){
                              foreach ($paper as $key => $value) {
                                $desc = json_decode($value['json_data']);
                                ?>
                                  <tr>
                                     <td><?=$desc->class?></td>
                                     <td><?=$desc->name?></td>
                                     <td>
                                        <a target="_blank" href="<?=base_url()?>backend/data_image/<?=$value['image'];?>">Download</a>
                                     </td>
                                  </tr>
                            <?php
                              }
                            }else{
                            ?>
                              <tr>
                                 <td colspan="3">No record found!</td>
                              </tr>
                            <?php
                            }
                            ?>
                            
                           <tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div id="tab6" class="tab-panel__item">
                  <div class="tab-panel__item__content">
                     <h2>Notice</h2>
                     <div class="table-wrapper">
                        <table class="fl-table">
                           <thead>
                              <tr>
                                 <th>Date</th>
                                 <th>Description</th>
                                 <th>Download</th>
                              </tr>
                           </thead>
                           <tbody>
                            <?php
                            if(isset($notice) && $notice && count($notice) > 0){
                              foreach ($notice as $key => $value) {
                                $desc = json_decode($value['json_data']);
                                ?>
                                  <tr>
                                     <td><?=$desc->date?></td>
                                     <td><?=$desc->name?></td>
                                     <td>
                                        <a target="_blank" href="<?=base_url()?>backend/data_image/<?=$value['image'];?>">Download</a>
                                     </td>
                                  </tr>
                            <?php
                              }
                            }else{
                            ?>
                              <tr>
                                 <td colspan="3">No record found!</td>
                              </tr>
                            <?php
                            }
                            ?>
                            
                           <tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
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
 <script>
      $(function(){
         // set deault arrow position and tab
         moveArrow();
         moveTabs($('.tab-panel__header li.tab-active a'));      
         var tab = $('.tab-panel__header a').click(function(e){
            e.preventDefault();
            var target = $(this).attr('href');            
            //Remove tab-active class and add to current click tab     
            $('.tab-panel__header li').removeClass('tab-active');
            $(this).closest('li').addClass('tab-active');            
            //Move Current active tab
            moveTabs($(this));            
            //Move arrow shape
            moveArrow();            
         });
      });

      function moveTabs(target){
         var total_tabs = target.closest("li").index();
         $('.tab-panel__content-area').css({
            'transform':'translateX('+ -(100 * total_tabs) +'%)'
         });
      }

      function moveArrow(){
         var arrow_size = $('.tab-panel__arrow').outerWidth() / 2;
         var moving_position = $('.tab-active a').position().left + $('.tab-active   a').innerWidth()/2 - arrow_size;
         $('.tab-panel__arrow').css({
            'transform':'translateX('+ moving_position +'px)'
         });
      }
  </script>