<?php

$slider = get_field('slider');

if ( empty($slider) ) $slider = get_field('slider');

if( !empty($slider) ):
	//wrap
    ?>

    <div class="slider-wrapper">
        <div id="owl-carousel-slider" class="owl-carousel">
            <?php
                foreach ($slider as $slide) {
                $image = wp_get_attachment_image_src( $slide['images'], 'full')[0];

            ?>
                 <div class="item">
                     <div class="aspect-ratio-holder aspect-ratio-holder--16-9">
                        <div class="aspect-ratio-holder__cover item-image" style="background: url(<?php echo $image; ?>) no-repeat center center / cover;"></div>
                    </div>
                </div>
             <?php
                }
            ?>
        </div>
    </div>
<?php
    else :

    endif;
?>