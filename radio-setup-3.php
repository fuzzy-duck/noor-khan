<?php
/*
 * Template Name: Radio Setup 3
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="radio-setup-3">
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
        <img src="<?php bloginfo('template_directory');?>/assets/video/radio-setup/Frame_1.gif">
        </div>

        <div class="links">
            <a href="<?php echo home_url(); ?>/radio-setup-pt4/" class="btn-link"><button data-aos="fade-in" data-aos-delay="2000"><span>Next</span><div class="icon-box"><div class="icon"></div></div></button></a>
        </div>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>