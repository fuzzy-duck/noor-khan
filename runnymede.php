<?php
/*
 * Template Name: Runnymede
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<div id="turn"><?php include ("turn.php"); ?></div>

<main id="runnymede">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="trans-bg">
        <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="<?php echo home_url(); ?>/assets/img/runnymede-memorial.png"></a>
        </div>
    </div>

    <div class="upper">
        <div class="border"></div>
        <div class="head">
        <h2 class="quote">“<?php the_field('quote_title'); ?>”</h2>
        </div>
        <h2><?php the_title() ?></h2>
        <div class="border-dup"></div>
        <p><?php the_field('body_paragraph'); ?></p>
    </div>

    <div class="lower">
        <h2>Symbolism<br />at Runnymede</h2>
        <div class="border-dup"></div>
        <h5>Tap a hotspot to learn more</h5>
        <div class="map">
            <div class="map-grid">
                <div class="number">1</div>
                <div class="number">2</div>
                <div class="number">3</div>
                <div class="number">4</div>
                <div class="number">5</div>
                <div class="number">6</div>
            </div>
        </div>
        <div class="border-white"></div>

        <a href="<?php echo home_url(); ?>/intro"class="btn-back">
            <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
        </a>

    </div>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>