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
      <img src="<?php echo get_field('logo','options');?>" alt="Your Logo">
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
  <h2><?php echo get_field('humburger_h2_title','options');?></h2>
  </div>
  <?php
  $options = get_field('humburger_options','options');
  foreach ($options as $option){
    ?><?php echo $option['option'];?></p>
    <?
  }

  ?>

  <div class="teal-line"></div>
  <div class="row">
    <p><?php echo get_field('footer_plain_text','options');?></p>
    <img src="<?php echo get_field('footer_image','options');?>" alt="">
  </div>
</div>
<div class="left_header_container">
  <div class="left_header">
      <?php 
    $a = get_field('left_header_options','options');
    foreach ($a as $b){
      ?>
        <div class="option">
          <img src="<?php echo $b['image']?>" alt="">
          <p><?php echo $b['option']?></p>

        </div>

      <?
    }

      ?>
      <button>
        <div class="arrow">
          <div class="arrow-body"></div>
          <div class="arrow-top-wing"></div>
          <div class="arrow-bottom-wing"></div>
          <div class="arrow-roof"></div>
        </div>
      </button>
      <div class="sub_left_header">

        <?php
          $sub_left_header_options = get_field('sub_left_header_options','options');
          foreach ($sub_left_header_options as $level1){
            ?>
            <div class="level_1">

              <p><?php echo $level1['level_1_text'];?></p>
              <div class="down-pointing-arrow">
              <div class="left-wing"></div>
                    <div class="right-wing"></div>
              </div>
            <?php
            foreach ($level1['level_2'] as $level2){
              ?>
              <div class="level_2">

              <p><?php echo $level2['level_2_text'];?></p>
              <div class="down-pointing-arrow">
              <div class="left-wing"></div>
                    <div class="right-wing"></div>
              </div>

            <?php
              foreach ($level2['level_3'] as $level3){
                ?>
                <div class="level_3">
                <p><?php echo $level3['level_3_text'];?></p>
                

                </div>
              <?php
                }
                ?>
                </div>
                <?
            }
            ?>
              </div>
            <?
          }

        ?>
      </div>

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