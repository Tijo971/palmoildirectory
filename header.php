<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
        <div class="container-fluid right_menu">
            <div class="row col-md-12 m-0">
          <input type="checkbox" id="main_menu" name="main_menu" />
          <a class="nav_logo col-md-4" href="#"><img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" alt="image"></a>

          <div class="search-wrapper">
            <div class="input-holder">
                <input type="text" class="search-input" required="">
                <label class="for-search-btn">Company, Activity, Product</label>
                <button class="search-icon" onclick="searchToggle(this, event);"><span><img src="<?php echo get_theme_file_uri('/images/search-solid.svg'); ?>" alt="image"></span></button>
          </div>
             <span class="close" onclick="searchToggle(this, event);"></span>
           </div>

           <form class="search_button col-md-4">
            <input type="text" required=""><button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
            <label class="for-search-btn">Company, Activity, Product</label>
          </form>

          <div id="destop-social-links" class="nav-social col-md-4">
            <a href="#" class="nav-first-box"><img src="<?php echo get_theme_file_uri('/images/building-regular-navbar.svg'); ?>" alt="image">Add my company</a>
            <a href="#" class="nav-second-box"><img src="<?php echo get_theme_file_uri('/images/user-circle-solid.svg');?>" alt="image">Login</a>
          </div>

          <label for="main_menu">
          <div class="hamburger hamburger--elastic" type="button"
                  aria-label="Menu" aria-controls="main_menu"> <span class="hamburger-box"> <span class="hamburger-inner"></span> </span> </div>
          </label>
          <nav class="navbar-main">
            <ul>
                <div class="nav-social">
            <a href="#" class="nav-first-box"><img src="<?php echo get_theme_file_uri('/images/building-regular-navbar.svg'); ?>" alt="image">Add my company</a>
            <a href="#" class="nav-second-box"><img src="<?php echo get_theme_file_uri('/images/user-circle-solid.svg');?>" alt="image">Login</a>
          </div>
            </ul>
          </nav>
        </div>
        </div>
        
      </div>