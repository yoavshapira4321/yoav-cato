<?php 
get_header();
/**
 * Template Name: Security
 */

 $custom_image_consistent_cecurity = get_field('custom_image');
 $h1_consistent_cecurity = get_field('h1_title');
 $plain_text_consistent_cecurity = get_field('plain_text');
 $green_button_consistent_cecurity = get_field('green_button');
 $buttons_Security_is_in_Our_DNA = get_field('buttons_security_is_in_our_dna');
 $cards_Security_is_in_Our_DNA = get_field('card_security_is_in_our_dna');
 $h1_cato_space = get_field('h1_title_cato_space');
 $h4_cato_space = get_field('h4_title_cato_space');
 $plain_text_cato_space = get_field('plain_text_cato_space');
 $custom_image_cato_space = get_field("cato_space_custom_image");
 $cards_Security_team = get_field("cards_security_team");
 $h1_title_resources = get_field("h1_title_resources");
 $resources = get_field('resources');





 
 ?>


<div class="Consistent-Security">
    <div class="colum">
    <h1><?php echo $h1_consistent_cecurity; ?></h1>
    <p><?php echo $plain_text_consistent_cecurity; ?></p>
    <button class="green-button"><?php echo $green_button_consistent_cecurity?></div>
</button>
    <img src="<?php echo $custom_image_consistent_cecurity; ?>" alt="">
</div>


<div class="mobile-Consistent-Security">
    <div class="colum">
    <h1><?php echo $h1_consistent_cecurity; ?></h1>
    <img src="<?php echo $custom_image_consistent_cecurity; ?>" alt="">

    <p><?php echo $plain_text_consistent_cecurity; ?></p>
    <button class="green-button"><?php echo $green_button_consistent_cecurity?></div>
</button>
</div>

<div class="button_container">
    <div class="button_wrapper">
    <?php

        if ($buttons_Security_is_in_Our_DNA) {
            foreach ($buttons_Security_is_in_Our_DNA as $button) {
                // Retrieve subfield values
                ?>
                <button><? echo $button['button']?></button>
                <?                
            }
        }
    
    ?>
    </div>



    </div>

<div class="Security_is_in_Our_DNA">
    
    <div class="center">
    <h1>Security is in Our DNA</h1>

    </div>
    <p>Cato delivers all security capabilities into 
        a single, cloud-native platform while our 
        expert security researchers work 24/7 to 
        ensure the best protection is in place for 
        our customers. Enjoy consistent policy and 
        inspection with always up-to-date security 
        engines and an experience that users love.</p>


    <div class="row">

    <?php 
            if ($cards_Security_is_in_Our_DNA) {
                foreach ($cards_Security_is_in_Our_DNA as $card) {
                    // Retrieve subfield values
                    ?>

                    <div class="card">
                        <div class="img_container">
                        <img src="<?php echo $card['custom_image']?>" alt="oijdjoia">

                        </div>
                        <div class="center">
                            <h1><?php echo $card['h1_title']?></h1>

                        </div>


                        <div class="green-background">
                        <div class="text_container">

                            <h4><?php echo $card['h4_title']?></h4>
                            <p><?php echo $card['plain_text']?></p>

                        </div>

                        
                        <button class="yellow-button"><?php echo $card['button_title']?></button>

                        </div>

                        


                    </div>
                    <?                
                }
            }
    ?>


    </div>




</div>

<div class="cato_space">

<h1><?php echo $h1_cato_space?></h1>
<h4><?php echo $h4_cato_space?></h4>
<p><?php echo $plain_text_cato_space?></p>
<img src="<?php echo $custom_image_cato_space ?>" alt="">




</div>


<div class="security_team">
<h1>
<?php echo get_field('h1_title_security_team'); ?>

</h1>

<p><?echo get_field('plain_text_security_team') ?></p>


<?php 
    foreach ($cards_Security_team as $index => $card) {
        // Retrieve subfield values
        $swapClass = $index % 2 === 0 ? 'swap' : ''; // Add 'swap' class every other iteration
?>

<div class="mobile_card <?php echo $swapClass; ?>">
    <img src="<?php echo $card['custom_image']?>" alt="oijdjoia">

        <div class="colum">
                <h1><?php echo $card['h1_title']?></h1>
                <h2><?php echo $card['h2_title']?></h2>
                <p><?php echo $card['plain_text']?></p>
                <button>
                    <h4>
                    <?php echo $card['button_title']?>
            </h4>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Component 7.svg' ); ?>" alt="">            
                </button>
        </div>       
</div>

<div class="card <?php echo $swapClass; ?>">
    <div class="colum">
        <h1><?php echo $card['h1_title']?></h1>
        <h2><?php echo $card['h2_title']?></h2>
        <p><?php echo $card['plain_text']?></p>
        <button>
            <h4>
            <?php echo $card['button_title']?>


    </h4>
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Component 7.svg' ); ?>" alt="">


        
        </button>
    </div>
                
    <img src="<?php echo $card['custom_image']?>" alt="oijdjoia">
</div>

<?php                
    }
?>


</div>

<div class="resources">
<h1><?php echo get_field("h1_title_resources");?></h1>


<?php 
foreach ($resources as $card) {
    // Retrieve subfield values
    ?>
    <div class="card">
        <div class="column">
            <h2><?php echo $card['h2_title']?></h2>
        </div>

        <div class="card-container">
            <?php 
            foreach ($card["resource"] as $sub_card) {
                // Retrieve subfield values
                ?>
                <div class="sub_card">
                    <div class="row">  
                    <img src="<?php echo $sub_card['custom_image']?>" alt="">
                  
                        <p><?php echo $sub_card['plain_text']?></p>
                        <span class="vector">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/Vector.svg' ); ?>" alt="">  
                        </span>

                    </div>
                </div>
                <?                
            }
            ?>
            <hr>
        </div>
    </div>
    <?                
}
?>




</div>


<script>
// Get the button container element
const buttonContainer = document.querySelector('.button_container');

// Define the scroll threshold where you want the color change to occur
const scrollThreshold = 480; // Adjust this value as needed

// Add a scroll event listener
window.addEventListener('scroll', () => {
    // Get the current scroll position
    const scrollPosition = window.scrollY;

    // Check if the scroll position is beyond the threshold
    if (scrollPosition >= scrollThreshold) {
        // Add a class to change the button container color
        buttonContainer.classList.add('scrolled');
    } else {
        // Remove the class to revert the color change
        buttonContainer.classList.remove('scrolled');
    }
});
</script>


<?



 get_footer();
 
 ?>