<?php
    /**
     * The main template file
     *
     * @package Gèidh.uk
     * @since Gèidh.uk 1.0
     */
?>

<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="page-header">
                <h2 style="text-align: center; text-transform: uppercase">Roinn-seòrsa: <?php single_cat_title(); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <a href="/tachartasan/"><img class="img-fluid" src="https://geidh.uk/wp-content/uploads/2008/03/cropped-LGBT_flag_square.svg_-1-1.png"></a>
                 </div>
                <div class="col-md-10">
                    <h5><a href="/tachartasan/">Tachartasan</a></h5>
                    <p>Liosta dhen fhèisean-pròise agus tachartasan LCDTE+ eile a tha ri thighinn san àm ri teachd.</p>
                </div>
            </div>
            <hr>
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="row">
                        <div class="col-md-2">
                            <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"></a>
                        </div>
                        <div class="col-md-10">
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p class="text-muted"><?php the_time('j F Y'); ?> le <?php the_author_posts_link(); ?></p>
                    <p><?php the_excerpt(); ?></p>
                    </div>
                    </div>
					<hr>
                <?php endwhile; ?>
            <?php endif; ?>
            <div class="navigation"><p style="text-align: center"><strong><?php posts_nav_link(' | '); ?></strong></p></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>