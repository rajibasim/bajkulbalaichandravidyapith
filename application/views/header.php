<?php
 $ci = &get_instance();
 $funcName = $this->router->fetch_method(); 
 $contrName = $this->router->fetch_class();
 $url = $contrName.'/'.$funcName; 
 $this->load->model('Common_model');
 $cms = $this->Common_model->select('dmb_data',array("type" => 'cms',"status" => 'Yes'),'','','','','','');
 $seo = $this->Common_model->select('dmb_seo','','','','','','','');
 $settings = $this->Common_model->select('dmb_settings','','','','','','','');
 $service = $this->Common_model->select('dmb_data',array("type" => 'service',"status" => 'Yes'),'','','','','','');
 $settingsArray = array();
 foreach($settings as $row){
   $settingsArray[$row['config_type']] = stripslashes($row['config_val']);
 }

 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
      <link rel="stylesheet" href="<?=base_url()?>frontend/Assets/css/header.css"/>
      <link rel="stylesheet" href="<?=base_url()?>frontend/Assets/css/common.css"/>
      <link rel="stylesheet" href="<?=base_url()?>frontend/Assets/css/style.css"/>
      <link rel="stylesheet" href="<?=base_url()?>frontend/Assets/css/gallery.css"/>
      <title>Bajkul Balai Chandra Vidyapith (H.S) || <?php echo $title; ?></title>
      <meta name="title" content="Bajkul Balai Chandra Vidyapith (H.S)">
      <meta name="description" content="<?php echo strip_tags($seo[0]['meta_data']) ?>" />
      <meta name="keywords" content="<?php echo strip_tags($seo[0]['meta_key']) ?>" />
      <meta name="application-name" content="bajkulbalaichandravidyapith.co.in" />
      <meta name="copyright" content="©️ <?php echo date('Y'); ?> Bajkul Balai Chandra Vidyapith (H.S). All rights reserved." />

      <meta property="og:url" content="https://www.bajkulbalaichandravidyapith.co.in/" />
      <meta property="og:title" content="Bajkul Balai Chandra Vidyapith (H.S)" />
      <meta property="og:description" content="<?php echo strip_tags($seo[0]['meta_data']) ?>." />
      <meta property="og:image" content="<?=base_url()?>frontend/Assets/Images/logo.png" />
      <meta property="og:sitename" content="bajkulbalaichandravidyapith.co.in" />

      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:url" content="https://www.bajkulbalaichandravidyapith.co.in/" />
      <meta name="twitter:site" content="Bajkul Balai Chandra Vidyapith (H.S)" />
      <meta name="twitter:domain" content="//bajkulbalaichandravidyapith.co.in" />
      <meta name="twitter:creator" content="Bajkul Balai Chandra Vidyapith (H.S)" />
      <meta name="twitter:title" content="Bajkul Balai Chandra Vidyapith (H.S)" />
      <meta name="twitter:description" content="<?php echo strip_tags($seo[0]['meta_data']) ?>" />

   </head>
   <body>
      <header>
         <!-- sec-headtop -->
         <section class="sec-headtop">
            <div class="container">
               <div class="content-headtop">
                  <ul>
                     <li class="estd">ESTD- 1972</li>
                     <li class="headAddress">Bajkul, Purba Mednipur, Pin- 721655</li>
                  </ul>
               </div>
            </div>
         </section>
         <!-- sec-photoandlogo -->
         <section class="sec-photoandlogo">
            <div class="container">
               <div class="headerImage">
                  <img src="<?=base_url()?>frontend/Assets/Images/header-yellow.png" alt="" />
               </div>
            </div>
         </section>
         <!-- nav -->
         <nav>
            <div class="container">
               <div class="bxNav">
                  <div id="navigation" class="navigation">
                     <ul>
                        <li><a href="<?=base_url();?>" <?=$contrName=='home' ? 'class="active"' : ''; ?>>Home</a></li>
                        <li><a href="<?=base_url();?>about-us" <?=$contrName=='about' ? 'class="active"' : ''; ?>>About Us </a></li>
                        <li><a href="<?=base_url();?>history" <?=$contrName=='history' ? 'class="active"' : ''; ?>>History</a></li>
                        <li><a href="<?=base_url();?>facuilty" <?=$contrName=='facuilty' ? 'class="active"' : ''; ?>>Faculty</a></li>
                        <li><a href="<?=base_url();?>gallery" <?=$contrName=='gallery' ? 'class="active"' : ''; ?>>Gallery</a></li>
                        <li><a href="<?=base_url();?>hostel" <?=$contrName=='hostel' ? 'class="active"' : ''; ?>>Hostel</a></li>
                        <li><a href="<?=base_url();?>academic" <?=$contrName=='academic' ? 'class="active"' : ''; ?>>Academic</a></li>
                        <li><a href="<?=base_url();?>contact-us" <?=$contrName=='contact' ? 'class="active"' : ''; ?>>Contact Us</a></li>
                     </ul>
                  </div>
                  <div id="nav-humberger" class="nav-humberger" onclick="openHumberger()"><i class="fa fa-bars" aria-hidden="true"></i></div>
                  <div id="closeNav" class="close-nav" onclick="closeHumberger()"><i class="fa fa-times" aria-hidden="true"></i></div>
               </div>
            </div>
         </nav>
      </header>

