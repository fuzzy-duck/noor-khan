<?php
/*
 * Template Name: Noor Chapters (template)
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<?php 

$img = get_field('bg_img'); 

?>

<main id="chapters">
    <div class="header">
    <div class="nav"><?php include ("nav.php"); ?></div>
        <div class="header-img" style="background: url(<?php echo $img['url']; ?>) no-repeat center center;">
            <div class="title animated fadeIn">
                <h5>Chapter <?php the_field('chapter_number'); ?></h5>
                <h3><?php the_field('title'); ?></h3>
            </div>
        </div>
    </div>
    <div class="scroll">
        <p>scroll</p>
        <div class="line"></div>
    </div>
    <div class="fixed-nav animated slideInUp">
        <p class="pg-title"><?php the_field('pg_title'); ?></p>
        <div class="pg-nav">
            <a href="<?php the_field('back_pg'); ?>" class="arrow-left"></a>
            <a href="<?php the_field('next_pg'); ?>" class="arrow-right"></a>
        </div>
        <p class="pg-num"><?php the_field('chapter_number'); ?> / 6</p>
    </div>

    <section class="lower">
        <?php

            if( have_rows('img_link') ):

            while ( have_rows('img_link') ) : the_row();
        
            $pgImg = get_sub_field('pg_img'); 
            $btnLink = get_sub_field('btn_link');
        
        ?>

            <div class="link">
                <div class="img" style="background: url(<?php echo $pgImg['url']; ?>) no-repeat center center;"></div>
                <!-- ACF True/False conditional icon display -->
                <a href="<?php echo $btnLink; ?>" class="btn-link"><button><span><p><?php the_sub_field('btn_text') ?></p></span><div class="icon-box">
                <?php if ( 'true' == get_sub_field('btn_icon') ): ?>
                    <div class="icon">
                <?php else: ?>
                    <div class="icon-ply">
                <?php endif; ?>
                </div></div></button></a>
                </div>
            </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </section>

    <a href="<?php echo home_url(); ?>/runnymede" class="nav-banner">
        <div class="content">
            <div class="img"></div>
            <div class="text">Return to Map</div>
        </div>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>