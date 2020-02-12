<?php
/*
 * Template Name: Answer (template)
 * Template Post Type: page
 */
?>

<?php get_header(); ?>
<main id="answer">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 3: <br>Recruitment</p>
        <a href="<?php echo home_url(); ?>/chapter-03-recruitment/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>
    <section>

    <div class="recruited">
        <div class="img animated zoomIn"></div>
        <h1><?php the_title() ?></h1>
    </div>

    <div class="character-img">
        <?php if( get_field('image') ): ?>
            <img src="<?php the_field('image'); ?>" />
        <?php endif; ?>
    </div>

    <p><?php the_field('description'); ?></p>

    <a href="<?php echo home_url(); ?>/chapter-03-recruitment/soe-2/" class="btn-back">
        <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
    </a>
    
    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>