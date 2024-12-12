<div class="page-sidebar nav-collapse collapse">
   <!-- BEGIN SIDEBAR MENU -->        	
   <ul>
      <li>
         <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
         <div class="sidebar-toggler hidden-phone"></div>
         <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
      </li>
      <li>&nbsp;</li>
      <li class="start <?=isset($group['dashboard']) && $group['dashboard'] ? $group['dashboard'] : "";?>">
         <a href="dashboard.php">
         <i class="icon-home"></i> 
         <span class="title">Dashboard</span>
         <span class="<?=isset($selected['dashboard']) && $selected['dashboard'] ? $selected['dashboard'] : "";?>"></span>
         </a>
      </li>
      <li class="has-sub <?=isset($group['seo']) && $group['seo'] ? $group['seo'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">SEO</span>
         <span class="<?=isset($selected['seo']) && $selected['seo'] ? $selected['seo'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['seo']) && $arrowopen['seo'] ? $arrowopen['seo'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['seo']) && $activepage['seo'] ? $activepage['seo']:"";?>><a href="seo.php">Manage SEO</a></li>
         </ul>
      </li>
      <li class="has-sub <?=isset($group['cms']) && $group['cms'] ? $group['cms'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">CMS Page</span>
         <span class="<?=isset($selected['cms']) && $selected['cms'] ? $selected['cms'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['cms']) && $arrowopen['cms'] ? $arrowopen['cms'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['cms']) && $activepage['cms'] ? $activepage['cms']:"";?>><a href="cms.php">Manage CMS</a></li>
         </ul>
      </li>
      <li class="has-sub <?=isset($group['banner']) && $group['banner'] ? $group['banner'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">Banner</span>
         <span class="<?=isset($selected['banner']) && $selected['banner'] ? $selected['banner'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['banner']) && $arrowopen['banner'] ? $arrowopen['banner'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['banner']) && $activepage['banner'] ? $activepage['banner']:"";?>><a href="banner.php">Manage Banner</a></li>
         </ul>
      </li>
      <li class="has-sub <?=isset($group['headerbanner']) && $group['headerbanner'] ? $group['headerbanner'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">Header Banner</span>
         <span class="<?=isset($selected['headerbanner']) && $selected['headerbanner'] ? $selected['headerbanner'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['headerbanner']) && $arrowopen['headerbanner'] ? $arrowopen['headerbanner'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['headerbanner']) && $activepage['headerbanner'] ? $activepage['headerbanner']:"";?>><a href="headerbanner.php">Manage Header Banner</a></li>
         </ul>
      </li>
      <li class="has-sub <?=isset($group['category']) && $group['category'] ? $group['category'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">Gallery</span>
         <span class="<?=isset($selected['category']) && $selected['category'] ? $selected['category'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['category']) && $arrowopen['category'] ? $arrowopen['category'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['gallery']) && $activepage['gallery'] ? $activepage['gallery']:"";?>><a href="gallery.php">Manage Image</a></li>
         </ul>
      </li>
      <li class="has-sub <?=isset($group['about']) && $group['about'] ? $group['about'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">About</span>
         <span class="<?=isset($selected['about']) && $selected['about'] ? $selected['about'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['about']) && $arrowopen['about'] ? $arrowopen['about'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['about']) && $activepage['about'] ? $activepage['about']:"";?>><a href="about.php">Manage About</a></li>
         </ul>
      </li>
      
      <li class="has-sub <?=isset($group['testimonial']) && $group['testimonial'] ? $group['testimonial'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">Testimonial</span>
         <span class="<?=isset($selected['testimonial']) && $selected['testimonial'] ? $selected['testimonial'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['testimonial']) && $arrowopen['testimonial'] ? $arrowopen['testimonial'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['testimonial']) && $activepage['testimonial'] ? $activepage['testimonial']:"";?>><a href="testimonial.php">Manage Testimonial</a></li>
         </ul>
      </li>
       <li class="has-sub <?=isset($group['history']) && $group['history'] ? $group['history'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">History</span>
         <span class="<?=isset($selected['history']) && $selected['history'] ? $selected['history'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['history']) && $arrowopen['history'] ? $arrowopen['history'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['history']) && $activepage['history'] ? $activepage['history']:"";?>><a href="history.php">Manage History</a></li>
         </ul>
      </li>
       <li class="has-sub <?=isset($group['facuilty']) && $group['facuilty'] ? $group['facuilty'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">Facuilty</span>
         <span class="<?=isset($selected['facuilty']) && $selected['facuilty'] ? $selected['facuilty'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['facuilty']) && $arrowopen['facuilty'] ? $arrowopen['facuilty'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['facuilty']) && $activepage['facuilty'] ? $activepage['facuilty']:"";?>><a href="facuilty.php">Manage Facuilty</a></li>
         </ul>
      </li>
      <li class="has-sub <?=isset($group['notice']) && $group['notice'] ? $group['notice'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">Notice</span>
         <span class="<?=isset($selected['notice']) && $selected['notice'] ? $selected['notice'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['notice']) && $arrowopen['notice'] ? $arrowopen['notice'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['notice']) && $activepage['notice'] ? $activepage['notice']:"";?>><a href="notice.php">Manage Notice</a></li>
         </ul>
      </li>
      <li class="has-sub <?=isset($group['tools']) && $group['tools'] ? $group['tools'] : "";?>">
         <a href="javascript:;">
         <i class="icon-bookmark-empty"></i> 
         <span class="title">Tools</span>
         <span class="<?=isset($selected['tools']) && $selected['tools'] ? $selected['tools'] : "";?>"></span>
         <span class="arrow <?=isset($arrowopen['tools']) && $arrowopen['tools'] ? $arrowopen['tools'] : "";?>"></span>
         </a>
         <ul class="sub">
            <li <?=isset($activepage['settings']) && $activepage['settings'] ? $activepage['settings']:"";?>><a href="settings.php">Settings</a></li>
            <li <?=isset($activepage['changepass']) && $activepage['changepass'] ? $activepage['changepass']:"";?>><a href="changepass.php">Change Password</a></li>
            <li><a href="logout.php">Logout</a></li>
         </ul>
      </li>
   </ul>
   <!-- END SIDEBAR MENU -->
</div>