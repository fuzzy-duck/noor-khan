<?php
/*
 * Template Name: Home
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="home">
    <section class="upper">
        <div class="noor-img">
            <div class="img"></div>
        </div>
        <?php include ("nav.php"); ?>
    </section>
    <section class="lower">
    <div class="main-img" data-aos="fade-up" data-aos-duration="1000">
            <div class="img" alt="Noor Khan logo"></div>
        </div>
        <p class="body-para" data-aos="fade-up" data-aos-duration="1000" ><?php the_field('para'); ?></p>
        <a href="<?php echo home_url(); ?>/intro"><div class="begin"></div></a>
        <div class="logos">
            <div class="logo-1"></div>
            <div class="logo-2"></div>
            <div class="logo-3"></div>
        </div>
    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>