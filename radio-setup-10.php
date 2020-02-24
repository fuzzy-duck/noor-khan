<?php
/*
 * Template Name: Radio Setup Final
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="radio-setup-10">
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
            <img src="<?php bloginfo('template_directory');?>/assets/video/radio-setup/Frame_8.gif">
        </div>
    </section>

    <a href="<?php echo home_url(); ?>/intro/tower/" class="nav-banner" style="margin-top: -100px; position: relative;">
        <div class="content">
            <div class="text">Go to Chapter 5</div>
            <div class="img"></div>
        </div>
    </a>

</main>


<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>