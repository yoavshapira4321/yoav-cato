<!DOCTYPE html>
<html lang="en">
  <?

  ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php the_title(); ?></title>    
</head>
<body>

<header>
    <div class="logo">
      <a  href="<?php echo esc_url(home_url('/')); ?>">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/CATO LOGO 2019-svg 1.png' ); ?>" alt="Your Logo">
      </a>
    </div> 
  <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_class' => 'nav_container',
        'depth' => 1,

    ));  
?>
<div class="new_header">
  <div class="row">
  <div class="grey-circle"></div>
  <h2>Merlon Williams</h2>
  </div>
  <p>Profile settings</p>
  <p>My requests</p>
  <p>My contribution</p>
  <p>Sign out</p>
  <div class="teal-line"></div>
  <div class="row">
    <p>Cato Management Application</p>
    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M14.367 3.89844L9.97656 8.236" stroke="#006ADC" stroke-opacity="0.65" stroke-miterlimit="10"/>
    <path d="M11.0508 3.89844H14.368V7.17571" stroke="#006ADC" stroke-opacity="0.65" stroke-miterlimit="10"/>
    <path d="M11.9274 12.0901V16.3312C11.9274 16.8132 11.5371 17.1987 11.0493 17.1987H1.87809C1.39026 17.1987 1 16.8132 1 16.3312V7.17415C1 6.6922 1.39026 6.30664 1.87809 6.30664H6.07342" stroke="#006ADC" stroke-opacity="0.65" stroke-miterlimit="10"/>
    <path d="M16.1215 1.19922H6.95036C6.46253 1.19922 6.07227 1.68117 6.07227 2.16312V11.2238C6.07227 11.7058 6.46253 12.0913 6.95036 12.0913H16.1215C16.6094 12.0913 16.9996 11.7058 16.9996 11.2238V2.16312C16.9996 1.68117 16.6094 1.19922 16.1215 1.19922Z" stroke="#006ADC" stroke-opacity="0.65" stroke-miterlimit="10"/>
  </svg>
  </div>





</div>

<div class="special_button">
  <button class="release_note">Release Notes</button>
  <button class="sign_in">Sign In</button>
  <div class="humburger">
  <span class="l1"></span>
  <span class="l2"></span>
  <span class="l3"></span>
  </div>

</div>
</header>
 <main>
 