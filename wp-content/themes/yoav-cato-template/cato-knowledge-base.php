<?php 
get_header();
/**
 * Template Name: Cato Knowledge Base
 */
?>

<div class="main_container">
    <div class="welcome">
    <img src="<?php echo get_field('cato_knowledge_image');?>" alt="asdsa">
        <div class="column">
            <h1><?php echo get_field('cato_knowledge_h1_main_title');?></h1>
            <input type="text" placeholder="<?php echo get_field('placeholder');?>">
        </div>
    </div>
    <div class="grid_container">
        <?php
            $grid_container = get_field('gird_container');
            foreach ($grid_container as $card){
                ?>
                <div class="card">
                    <div class="column_0">
                <img src="<?php echo $card['image'];?>" alt="">
                <h1><?php echo $card['h1_title'];?></h1>
                
                    </div>
                    <div class="down-pointing-arrow">
                    <div class="left-wing"></div>
                    <div class="right-wing"></div>

                </div>



                <div class="column">
                

                        <?
                        foreach ($card['options'] as $option){
                            ?>
                            <div class="row">
                            <img src="<?php echo $option['image'];?>" alt="asd">
                            <p><?php echo $option['plain_text'];?></p>
                            </div>
                            <?
                            
                        }                       
                        ?>
                </div>

                <div class="more">
                    <p><?php echo $card['more'];?></p>
                </div>
            </div>
            <?
            }
        ?>

    </div>
</div>

<?php

 get_footer();
 
 ?>
