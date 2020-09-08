<?php get_header(); ?>
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-md-offset-2 section-heading mb50 text-center">
            <h2>Our Products</h2>
            <p class="lead">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        </div>
        </div>
        <?php
            query_posts([
                'post_type' => 'our-products',
                'publish' => true
            ]);
        ?>
        <div class="row">
        <?php if ( have_posts() ) { ?> 
            <?php while ( have_posts() ) : the_post() ?>       
            <div class="col-md-4 col-sm-6 col-xs-12">
                <h3 class="mb30"><?php the_title() ?></h3>
                <p><?php the_content() ?></p>
                <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>
            <?php endwhile ?>
        <?php } else { ?>
            <div class="col-12 text-center">
                <p>This is empty</p>
            </div>     
        <?php } ?>
        </div>
    </div>
</section>
<!-- END: section -->
<?php get_footer(); ?>