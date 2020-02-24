<?php
/*
 * Template Name: Radio Setup
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="radio-setup-1">
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
        <div id="pg-1">
        <a href="<?php echo home_url(); ?>/radio-setup-pt2/" class="outer">
        <div class="img"></div>
        </a>
        </div>
    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>