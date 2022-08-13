<?php
get_header();?>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!----- left div -->


      <div class="header-top-text">
      <?php 
           $comp_nme = new WP_Query(array(
            'post_type' => 'companyname'
             ));

             while($comp_nme->have_posts()){
              $comp_nme->the_post();
                ?>
                 <h1><?php the_title(); ?></h1>
                <span class="first-icon-text">
                <span class="first-icon"><img src="<?php echo get_theme_file_uri('/images/address-card-svgrepo-com.svg'); ?>" alt="image"></span>
                 <?php echo get_post_meta(get_the_ID(),'address', true); ?>
                 <span class="first-icon"><img src="<?php echo get_theme_file_uri('/images/email-svgrepo-com.svg'); ?>" alt="image"></span> 
                <?php echo get_post_meta(get_the_ID(),'email', true); ?>
                <span class="first-icon"><img src="<?php echo get_theme_file_uri('/images/telephone-svgrepo-com.svg'); ?>" alt="image"></span>
                <?php echo get_post_meta(get_the_ID(),'telephone', true); ?>
                <span class="first-icon"><img src="<?php echo get_theme_file_uri('/images/connect-link-category-svgrepo-com.svg'); ?>" alt="image"></span>
                <?php echo get_post_meta(get_the_ID(),'category', true); ?>
                <span class="first-icon"><img src="<?php echo get_theme_file_uri('/images/internet-svgrepo-com.svg'); ?>" alt="image"></span>
                <?php  echo get_post_meta(get_the_ID(),'website', true); ?>
              </span>
                
         <?php   }
      

     ?>
  </div>

</div>

      
<header>
<div class="header-back">
<img src="<?php echo get_theme_file_uri('/images/header.jpg'); ?>" alt="image" class="header-image">
<div>
    <?php 
           $comp_nme = new WP_Query(array(
            'post_type' => 'companyname'
             ));

             while($comp_nme->have_posts()){
              $comp_nme->the_post();?>
              <div class="header-black">
                <?php
                $img= get_field('logo');
                
                ?>
            
              <img class="header-logo" src="<?php echo get_theme_file_uri('/images/logo.png'); ; ?>"?>
            <?php }

     ?>
          
     </div>
     </div>
 
</header>


    </div>
  </div>
</div>

<div class="container mobile_item">
  <!-------- responsive sidebar ------------->
  <div class="col-12">
    <div class="row mt-4">
      <div class="col-4"><a href="#"></a><span class="mobile-icon-back"><img src="<?php echo get_theme_file_uri('images/phone-solid.svg'); ?>" alt="image"></span></a></div>
      <div class="col-4"><a href="#"><span class="mobile-icon-back"><img src="<?php echo get_theme_file_uri('/images/globe-asia-solid.svg'); ?>" alt="image"></span></a></div>
      <div class="col-4"><a href="#"><span class="mobile-icon-back"><img src="<?php echo get_theme_file_uri('/images/bookmark-regular.svg'); ?>" alt="image"></span></a></div>
    </div>
    <div class="col-md-12"><a href="#"><span class="mobile-contact-back"><img src="<?php echo get_theme_file_uri('/images/envelope-solid.svg'); ?>" alt="image">CONTACT</span></a></div>
  </div>
</div>

<!----------------------- tab conatiner ----------------->
<div class="container">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-8">

<!------------------------ tabs line ---------------------------->

<div class="tabs" id="#wrap">
  <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified nav-tabs-dropdown" role="tablist">
    <li id="tab1" role="presentation" class="active"><a href="#Information" aria-controls="Information" role="tab" data-toggle="tab" class="active" aria-selected="true">Information</a></li>
    <li id="tab2" role="presentation"><a href="#Products" aria-controls="Products" role="tab" data-toggle="tab">Products (397)</a></li>
    <li id="tab3" role="presentation"><a href="#News" aria-controls="News" role="tab" data-toggle="tab">News</a></li>
    <li id="tab4" role="presentation"><a href="#Documents" aria-controls="Documents" role="tab" data-toggle="tab">Documents (36)</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Information">Every success story starts with an idea. From standardised components to tooling systems, 
      norelem offers its expertise to meet your machine construction and installation objectives. 
      For over 60 years, we have been constantly developing our product ranges to ensure that each application 
      has its place. Our design office will also help you find the perfect solution for your needs. 
      Norelem also has an established sales network present on five continents, and offers high-quality services: 24-hour delivery, 
      online product availability checks, online shop, technical and commercial hotline in France. Norelem manufactures standard mechanical components.</div>
    <div role="tabpanel" class="tab-pane" id="Products">Every success story starts with an idea. From standardised components to tooling systems, 
      norelem offers its expertise to meet your machine construction and installation objectives. 
      For over 60 years, we have been constantly developing our product ranges to ensure that each application 
      has its place. Our design office will also help you find the perfect solution for your needs. 
      Norelem also has an established sales network present on five continents, and offers high-quality services: 24-hour delivery, 
      online product availability checks, online shop, technical and commercial hotline in France. Norelem manufactures standard mechanical components.</div>
    <div role="tabpanel" class="tab-pane" id="News">Every success story starts with an idea. From standardised components to tooling systems, 
      norelem offers its expertise to meet your machine construction and installation objectives. 
      For over 60 years, we have been constantly developing our product ranges to ensure that each application 
      has its place. Our design office will also help you find the perfect solution for your needs. 
      Norelem also has an established sales network present on five continents, and offers high-quality services: 24-hour delivery, 
      online product availability checks, online shop, technical and commercial hotline in France. Norelem manufactures standard mechanical components.</div>
    <div role="tabpanel" class="tab-pane" id="Documents">Every success story starts with an idea. From standardised components to tooling systems, 
      norelem offers its expertise to meet your machine construction and installation objectives. 
      For over 60 years, we have been constantly developing our product ranges to ensure that each application 
      has its place. Our design office will also help you find the perfect solution for your needs. 
      Norelem also has an established sales network present on five continents, and offers high-quality services: 24-hour delivery, 
      online product availability checks, online shop, technical and commercial hotline in France. Norelem manufactures standard mechanical components.</div>
  </div>

  
  
  <style>

  </style>


<!--------------- product slider-section ---------------->
<div class="product-slider-section mt-4">
  <h1><span>Product catalogue preview</span></h1>


        <div class="owl-carousel owl-theme mt-3">
          <!------------ slider-1-box ----------->
           <div class="item">
            <a href="#"><div class="slider-first-box">
              <span class="image1"><img src="<?php echo get_theme_file_uri('/images/Sicherheitsschalter-magnetisch-codiert_ca86e13a.jpg') ?>" class="product-image" alt="image"></span>
              <span><img src="<?php echo get_theme_file_uri('images/bookmark-regular.svg'); ?>" class="bookmark-icon" alt="image"></span>

              <h5 class="product-heading">Actuator for magnetically coded...</h5>
              <p class="product-company">PALMOIL DIRECTORY</p>
             
              <p class="country">
                <span><img src="<?php echo get_theme_file_uri('/images/france.png'); ?>" alt="image" class="country-image"></span>
                <span class="country-name">France</span>
              </p>

              <p class="product-text">Material:Housing steel plate.Wheelswith thermoplastic rubber tread.Wheel body polypropylene.......</p>
            </div></a>
           
          </div>
          
            <!------------ slider-1-box ----------->
            <div class="item">
              <a href="#"><div class="slider-first-box">
                <span class="image1"><img src="<?php echo get_theme_file_uri('/images/Sicherheitsschalter-magnetisch-codiert_ca86e13a.jpg'); ?>" class="product-image" alt="image"></span>
                <span><img src="<?php echo get_theme_file_uri('/images/bookmark-regular.svg'); ?>" class="bookmark-icon" alt="image"></span>
  
                <h5 class="product-heading">Actuator for magnetically coded...</h5>
                <p class="product-company">PALMOIL DIRECTORY</p>
               
                <p class="country">
                  <span><img src="<?php echo get_theme_file_uri('/images/france.png'); ?>" alt="image" class="country-image"></span>
                  <span class="country-name">France</span>
                </p>
  
                <p class="product-text">Material:Housing steel plate.Wheelswith thermoplastic rubber tread.Wheel body polypropylene.......</p>
              </div></a>
             
            </div>

           <!------------ slider-1-box ----------->
           <div class="item">
            <a href="#"><div class="slider-first-box">
              <span class="image1"><img src="<?php echo get_theme_file_uri('/images/Sicherheitsschalter-magnetisch-codiert_ca86e13a.jpg'); ?>" class="product-image" alt="image"></span>
              <span><img src="<?php echo get_theme_file_uri('/images/bookmark-regular.svg'); ?>" class="bookmark-icon" alt="image"></span>

              <h5 class="product-heading">Actuator for magnetically coded...</h5>
              <p class="product-company">PALMOIL DIRECTORY</p>
             
              <p class="country">
                <span><img src="<?php echo get_theme_file_uri('/images/france.png'); ?>" alt="image" class="country-image"></span>
                <span class="country-name">France</span>
              </p>

              <p class="product-text">Material:Housing steel plate.Wheelswith thermoplastic rubber tread.Wheel body polypropylene.......</p>
            </div></a>
           
          </div>

            <!------------ slider-1-box ----------->
            <div class="item">
              <a href="#"><div class="slider-first-box">
                <span class="image1"><img src="<?php echo get_theme_file_uri('/images/Sicherheitsschalter-magnetisch-codiert_ca86e13a.jpg'); ?>" class="product-image" alt="image"></span>
                <span><img src="<?php echo get_theme_file_uri('/images/bookmark-regular.svg'); ?>" class="bookmark-icon" alt="image"></span>
  
                <h5 class="product-heading">Actuator for magnetically coded...</h5>
                <p class="product-company">PALMOIL DIRECTORY</p>
               
                <p class="country">
                  <span><img src="<?php echo get_theme_file_uri('/images/france.png'); ?>" alt="image" class="country-image"></span>
                  <span class="country-name">France</span>
                </p>
  
                <p class="product-text">Material:Housing steel plate.Wheelswith thermoplastic rubber tread.Wheel body polypropylene.......</p>
              </div></a>
             
            </div>
         
</div><!------ owl-carousel end -->

<div class="orange_btn mt-3">
  <a href="#" class="orange-btn-back">
    View the whole product catalogue
  <span class="orange-btn-icon"><img src="<?php echo get_theme_file_uri('/images/arrow-right-solid.svg'); ?>" alt="image"></span></a>
</div>

</div><!--- product slider-section end----->

<!--------------- website section ---------------->
<div class="website-section mt-5">
  <h1><span>Websites</span></h1>

<div class="col-md-12 mt-5">
  <div class="row">
    <div class="col-md-4 col-sm-3 mb-2">
     <a href="#" class="link-section"><span class="link_image"><img src="<?php echo get_theme_file_uri('/images/link-solid.svg'); ?>" alt="image"></span>
      <span>Main site</span></a>
    </div>
    <div class="col-md-4 col-sm-3 mb-2">
      <a href="#" class="link-section"><span class="link_image"><img src="<?php echo get_theme_file_uri('/images/link-solid.svg'); ?>" alt="image"></span>
      <span>Blog</span></a>
    </div>
    <div class="col-md-4 col-sm-3 mb-2">
      <a href="#" class="link-section"><span class="link_image"><img src="<?php echo get_theme_file_uri('images/link-solid.svg'); ?>" alt="image"></span>
      <span>Event site</span></a>
    </div>
  </div>
</div>

<div class="social-icon">
  <a href="#"><img src="<?php echo get_theme_file_uri('/images/linkedin-in-brands.svg'); ?>" alt="image"></a>
  <a href="#"><img src="<?php echo get_theme_file_uri('/images/facebook-f-brands.svg'); ?>" alt="image"></a>
  <a href="#"><img src="<?php echo get_theme_file_uri('/images/twitter-brands.svg'); ?>" alt="image"></a>
</div>

</div><!--- website-section end----->

<!--------------- company-news section ---------------->
<div class="company-news-section mt-5">
  <h1><span>Latest company news</span></h1>

<div class="mt-5 company-news">
  <div class="d-flex mb-3"><span class="product"><img src="<?php echo get_theme_file_uri('images/23820310_8538a8a1.jpeg'); ?>" alt="image"></span>
  <span class="heading-text"><h4>Colonnes de levage norelem</h4>
  <p>Product launch<span>・ 10 Aug 2021</span></p></span></div>

  <p>Plus d ergonomie sur le poste de travail grâce aux colonnes de levage norelem</p>
  
  <p>Les systèmes sont composés de la colonne de levage elle même, d une unité de commande et d une télécommande.</p>

  <div class="viewmore-btn mt-4">
    <a href="#" class="viewmore-btn-back">VIEW MORE</a>
  </div>

  <div class="orange_btn mt-3">
    <a href="#" class="orange-btn-back">
      See all the news for this company
    <span class="orange-btn-icon"><img src="<?php echo get_theme_file_uri('/images/arrow-right-solid.svg'); ?>" alt="image"></span></a>
  </div>

</div>

</div><!--- company-news-section end----->

<!--------------- video-link section ---------------->
<div class="video-links-section mt-5">
  <h1><span>Video links</span></h1>

  <div class="col-md-12 mt-5">
    <div class="row">
      <div class="col-md-6 col-sm-4 mb-2">
       <a href="#" class="video-link-box"><span class="video-link_image"><img src="<?php echo get_theme_file_uri('/images/link-solid-orange.svg'); ?>" alt="image"></span>
        <span>Double bride pivotante à 90°</span></a>
      </div>
      <div class="col-md-6 col-sm-4 mb-2">
        <a href="#" class="video-link-box"><span class="video-link_image"><img src="<?php echo get_theme_file_uri('/images/link-solid-orange.svg'); ?>" alt="image"></span>
        <span>Anneau de levage articulé rotatifà 360°</span></a>
      </div>
    </div>
  </div>

  <div class="orange_btn mt-3">
    <a href="#" class="orange-btn-back">
      See all the documents
    <span class="orange-btn-icon"><img src="<?php echo get_theme_file_uri('images/arrow-right-solid.svg'); ?>" alt="image"></span></a>
  </div>

</div><!--- video-link section end----->

<!--------------- document section responsive ---------------->
<div class="slider-responsive mt-5">
  <h1><span>Documennts</span></h1>

  <div id="owl-demo-1" class="owl-carousel owl-theme mt-3 document-slider">
    <!------------ slider-1-box ----------->
     <div class="item">
         <span><img src="<?php echo get_theme_file_uri('/images/22304721_bff9c8e4.jpg'); ?>" alt="image" class="document-slider_img"></span>
         <p>norelem France</p>
    </div>
    
      <!------------ slider-2-box ----------->
      <div class="item"> 
        <span><img src="<?php echo get_theme_file_uri('/images/22304698_7bfd81a8.jpg'); ?>" alt="image" class="document-slider_img"></span>
        <p>THE BIG GREEN BOOK</p>
      </div>

     <!------------ slider-3-box ----------->
     <div class="item">
      <span><img src="<?php echo get_theme_file_uri('/images/22304721_bff9c8e4.jpg'); ?>" alt="image" class="document-slider_img"></span>
      <p>norelem France</p>
 </div>

      <!------------ slider-4-box ----------->
      <div class="item"> 
        <span><img src="<?php echo get_theme_file_uri('/images/22304698_7bfd81a8.jpg' ); ?>" alt="image" class="document-slider_img"></span>
        <p>THE BIG GREEN BOOK</p>
      </div>
   
</div><!------ owl-carousel end -->

</div>

<!--------------- document section desktop ---------------->
<div class="document-section mt-5">
<h1><span>Documennts</span></h1>

<div class=" col-md-12 mt-5">
  <div class="row">
    <div class="col-md-6">
      <span><img src="<?php echo get_theme_file_uri('/images/22304721_bff9c8e4.jpg'); ?>" alt="image"></span>
      <p>norelem France</p>
    </div>

    <div class="col-md-6">
      <span><img src="<?php echo get_theme_file_uri('/images/22304698_7bfd81a8.jpg'); ?>" alt="image"></span>
      <p>THE BIG GREEN BOOK</p>
    </div>
  </div>
</div>

</div>

<!--------------- company-info section ---------------->
<div class="company-info-section mt-5">
  <h1><span>Company info</span></h1>

  <div class="col-md-12">
    <div class="row">
      <div class="col-md-6 Key-figure-back mt-2">
        <span class="button_key pb-4">Key figures</span>
    <div class="row mb-1">
        <p class="col-2 text-center image_property"><img src="<?php echo get_theme_file_uri('/images/user-friends-solid.svg'); ?>" alt="image"></p>
        <div class="col-10 p-0">
          <p class="number">11 - 50</p>
        <p>Company headcount</p>
        </div>
    </div>

    <div class="row mb-1">
      <p class="col-2 text-center image_property"><img src="<?php echo get_theme_file_uri('/images/briefcase-solid.svg'); ?>" alt="image"></p>
      <div class="col-10 p-0">
        <p class="number">1 - 10</p>
      <p>Sales staff</p>
      </div>
  </div>
      </div><!---- col-md-6 end ----->

      <div class="col-md-6 Organisation-back mt-2">
        <span class="button_Organisation pb-4">Organisation</span>
        
        <div class="row mb-1">
          <p class="col-2 text-center image_property"><img src="<?php echo get_theme_file_uri('/images/hourglass-regular.svg'); ?>" alt="image"></p>
          <div class="col-10 p-0">
            <p class="number">1943</p>
          <p>Year established</p>
          </div>
      </div>

      <div class="row mb-1">
        <p class="col-2 text-center image_property"><img src="<?php echo get_theme_file_uri('/images/building-regular.svg'); ?>" alt="image"></p>
        <div class="col-10 p-0">
          <p class="number">Registered office Subsidiary</p>
        <p>Site status</p>
        </div>
    </div>

    <div class="row mb-1">
      <p class="col-2 text-center image_property"><img src="<?php echo get_theme_file_uri('/images/cog-solid.svg'); ?>" alt="image"></p>
      <div class="col-10 p-0">
        <p class="number">Manufacturer/Producer</p>
      <p>Main activity</p>
      </div>
  </div>

      </div><!---- col-md-6 end ----->
    </div>
  </div>

</div><!--------------- company-info section end ---------------->

<!--------------- Keywords ---------------->
<div class="key-words mt-5">
  <h1><span>Keywords associated with this company</span></h1>

  <ul class="keywords-button">
    <li id="more" class="px-3 py-2">Transmission elements </li>
    <li id="more" class="px-3 py-2">Industrial maintenance</li>
    <li id="more" class="px-3 py-2">zippers</li>
    <li id="more" class="px-3 py-2">Tube assembly</li>
    <li id="more" class="px-3 py-2">Standard mechanical components</li>
    <li id="more" class="px-3 py-2">Product innovation</li>
    <li id="more" class="px-3 py-2">Industrial subcontracting work</li>
    <li id="more" class="px-3 py-2"> Precision mechanical tools and industrial supplies</li>
    <li id="more" class="px-3 py-2">Modular clamping system</li>
    <li id="more" class="px-3 py-2">Pneumatic clamping system</li>

    <li id="less" class="px-3 py-2">Vices for clamping system</li>
    <li id="less" class="px-3 py-2">Tooling system</li>
    <li id="less" class="px-3 py-2">Flexible standardised parts system</li>
    <li id="less" class="px-3 py-2">Aluminium profile mounting components</li>
    <li id="less" class="px-3 py-2">Systems for machinery and plant construction</li>
    <li id="less" class="px-3 py-2">Measuring and testing equipment</li>
    <li id="less" class="px-3 py-2">Transport and handling components</li>
    <li id="less" class="px-3 py-2">Base components</li>
    <li id="less" class="px-3 py-2">Support components</li>
    <li id="less" class="px-3 py-2">Positioning equipment</li>
  </ul>

  <button class="view_more mt-2" onclick="myFunction()" id="myBtn">VIEW MORE</button>

</div><!--- Keywords end----->

 </div>
</div><!---------- tab div end -->

      </div><!------ div col-md-8 -->


      <!--- side bar div -->
      <div class="col-md-4 mt-5">
        <div class="side-bar-box">
<h4 class="heading">Contact the business</h4>
<p class="company_name">PALMOIL DIRECTORY</p>
<p class="text">France</p>
<p class="address_deatils">
  <span class="address">Address</span>
  <span class="details">5 RUE DES LIBELLULES 10280 Fontaines Les Gres</span>
</p>

<div class="col-12 btn_line">
  <div class="row">
<div class="col-6 buttons">
  <a href="#"><p class="icon"><img src="<?php echo get_theme_file_uri('images/phone-solid.svg'); ?>" alt="image"></p>
  <p class="text">PHONE</p></a>
</div>

<div class="col-6 buttons">
  <a href="#"><p class="icon"><img src="<?php echo get_theme_file_uri('/images/file-regular.svg'); ?>" alt="image"></p>
  <p class="text">WEBSITE</p></a>
</div>

</div>
</div>
<div class="contact_green_btn">
  <a href="#"><span><img src="<?php echo get_theme_file_uri('/images/envelope-solid.svg'); ?>" alt="image">CONTACT</span></a>
</div>

        </div><!--- side bar div end -->

      </div><!------ div col-md-4 -->

    </div>
  </div>
</div>





<? get_footer();

?>