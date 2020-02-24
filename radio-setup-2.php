<?php
/*
 * Template Name: Radio Setup 2
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="radio-setup-2">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>

    <div class="fixed-nav">
        <p class="pg-title">Chapter 4: <br>Training</p>
        <a href="<?php echo home_url(); ?>/chapter-04-training/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

        <div class="inner">
        <img src="<?php bloginfo('template_directory');?>/assets/video/radio-setup/Frame_0.gif">
        </div>
        <div class="case-btns">
            <a href="<?php echo home_url(); ?>/radio-setup-pt3/" class="case-btn-1"></a><a href="<?php echo home_url(); ?>/radio-setup-pt3/" class="case-btn-2"></a>
        </div>
    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>