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
        <h3><?php the_field('sub_title'); ?></h3>
        <div class="signature"><div class="img"></div>
        <div class="border"></div>
        <h1><span>A</span> Women <span>of</span><br />Conspicuous<br />Courage</h1>
        <p class="body-para"><?php the_field('para'); ?></p>
        <a href="<?php echo home_url(); ?>/intro"><div class="begin"></div></a>
    </section>
    <section class="logos">
        <div class="logo-1"></div>
        <div class="logo-2"></div>
        <div class="logo-3"></div>
    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>