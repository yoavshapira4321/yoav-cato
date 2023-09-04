<?php 
get_header();
$cards_learning_center = get_field("learning_center_cards");
/**
 * Template Name: Cato education hp 
 */
?>

<div class="main_container">
    <div class="learning_center">
    <div class="image_container">
        <img src="<?php echo get_field("table_of_content_learning_center");?>" alt="">

    </div>
        <input type="text" placeholder="<?php echo get_field("learning_center_search_placeholder");?>">
        <div class="cards_container">
        <?php 
    foreach($cards_learning_center as $card){

        ?>
            <div class="card_container">
                <img src="<?php echo $card['image'];?>" alt="aasjkld">
                <h2><? echo $card['h2_title'];?></h2>
                <p><?php echo $card['plain_text'];?></p>

                
            </div>
        <?

    }
    
    
    ?>

        </div>


    </div>


    <div class="features_articles">
        <h1><?php echo get_field('h1_title_features_articles');?></h1>
        <p><?php echo get_field('plain_text_features_articles');?></p>
        <div class="cards_container">
        <?php
            $features_articles_cards = get_field("cards_features_articles");
        foreach ($features_articles_cards as $card){
            ?>
            <div class="card_container">
                <img src="<?echo $card['custom_image'];?>" alt="">
                <div class="colum">
                    <h4><?echo $card['h4_title'];?></h4>
                    <p><?echo $card['plain_text'];?></p>
                    <button><?echo $card['learn_more'];?></button>
                </div>
                
            </div>            
            <?
        }

        ?>

        </div>
    <div class="green-balls-container">
        <span></span>
        <span></span>
        <span></span>
    </div>
        
        
    </div>
    <div class="more_content">
        <h1><?php echo get_field("more_content_h1_title");?></h1>
        <p><?php echo get_field("more_content_plain_text");?></p>
        <div class="cards_container">

        <?
            $more_content_cards = get_field("more_content_cards");
            
            foreach ($more_content_cards as $card){
                ?>
                <div class="card_container">
                    <img src="<?php echo $card["image"];?>" alt="">
                    <div class="colum">

                    <h4><?php echo $card["h4"];?></h4>
                    <p><?php echo $card["plain_text"];?></p>

                    </div>
                    
                </div>
                <?
            }
        ?>

        </div>
        

    </div>
    <div class="sep_container">
        <div class="sep"></div>
    </div>
    <div class="table_of_content_column">
        <div class="images_container">
            <img src="<?php echo get_field("table_of_content_cato_logo");?>" alt="">
            <img src="<?php echo get_field("table_of_content_learning_center");?>" alt="">
        </div>
            <div class="cards_container">
            <?php

                $table_of_content_column = get_field('table_of_content_column');
                foreach( $table_of_content_column as $column){
                    ?>
                    <div class="column">
                    <?
                    $options = $column['options'];
                    ?>
                        <img src="<?php echo $column["icon"];?>" alt="">
                        <h5><?php echo $column["h5"];?></h5>                        
                    <?

                    foreach ($options as $option){
                        ?>
                        <p><?php echo $option['option'];?></p>
                        <?
                    }
                    ?>
                        
                    </div>
                    
                    <?
                }
?>
            </div>

       
    </div>

    <div class="sep"></div>
    <div class="footer_container">
    <?php
    $line_options = get_field("line_option");
    foreach ($line_options as $index => $option) {
        ?>
        <p><?php echo $option['option'];?></p>
        <?php
        echo $index;
        if ($index != count($line_options) - 1) {
            ?>
                    <span></span>

            <?
        }
    }

    ?>
    </div>

</div>


<?php

 get_footer();
 
 ?>
