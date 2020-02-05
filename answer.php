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
        <div class="pg-nav">

        </div>
        <p class="pg-num">3 / 6</p>
    </div>
    <section>

    <div class="head">
    <h3>You would be...</h3>
    <h2 class="quote"><?php the_field('character'); ?></h2>
    </div>

    <div class="character-img">
        <?php if( get_field('image') ): ?>
            <img src="<?php the_field('image'); ?>" />
        <?php endif; ?>
    </div>

    <p><?php the_field('description'); ?></p>

    <div class="border-white"></div>
    <div class="links-inline">
        <a href="<?php echo home_url(); ?>/chapter-03-recruitment" class="btn-back">
            <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
        </a>
    </div>
    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>