<div class="services-wrapper">
    <h2>Services</h2>
    <div class="grid">
        <?php if( have_rows('services') ): ?>

            <?php while( have_rows('services') ): the_row(); 

                $size = 'full';
                $image = get_sub_field('service-image');
      
                ?>

                <div class="grid__col grid__col--1-of-3 item">
                    <div class="service-image">
                        <?php if( $image ) {
                            echo wp_get_attachment_image( $image, $size );
                        } ?>
                    </div>
                    <div class="service-name">
                        <h4><?php echo  $serviceName = the_sub_field('service-name'); ?></h4>
                    </div>

                    <div class="service-text">
                        <p><?php echo $serviceText = the_sub_field('service-text'); ?></p>
                    </div>
                </div>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</div>