<?php
/*
 * Template Name: About
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="about">
    <header>
        <?php include ("nav.php"); ?>
    </header>
    <section class="upper">
        <h3>Noor Inayat Khan</h3>
        <div class="border"></div>
        <h1><span>A</span> Women <span>of</span><br />Conspicuous<br />Courage</h1>
    </section>
    <section class="logos">
        <div class="logo-1"></div>
        <div class="logo-2"></div>
        <div class="logo-3"></div>
    </section>
    <section class="lower">
        <p><?php the_field('body_paragraph'); ?></p>
        <div class="border-white"></div>

        <a href="<?php echo home_url(); ?>/intro" class="btn-back">
            <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
        </a>

    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>