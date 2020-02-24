<?php
/*
 * Template Name: Runnymede Intro Nav
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<div id="turn"><?php include ("turn.php"); ?></div>

<main id="runnymede-nav">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="map">
            <div class="map-grid">
                <a href="<?php echo home_url(); ?>/intro/entrance" class="number" data-aos="zoom-in" data-aos-duration="50">1</a>
                <a href="<?php echo home_url(); ?>/intro/raf-eagle" class="number" data-aos="zoom-in" data-aos-duration="200">2</a>
                <a href="<?php echo home_url(); ?>/intro/date-panels" class="number" data-aos="zoom-in" data-aos-duration="450">3</a>
                <a href="<?php echo home_url(); ?>/intro/windows-in-shrine" class="number" data-aos="zoom-in" data-aos-duration="600">4</a>
                <a href="<?php echo home_url(); ?>/intro/tower" class="number" data-aos="zoom-in" data-aos-duration="850">5</a>
                <a href="<?php echo home_url(); ?>/intro/justice-victory-courage" class="number" data-aos="zoom-in" data-aos-duration="1000">6</a>
            </div>
        </div>
    </div>

    <section>
        <div class="sub-nav">
            <a href="<?php echo home_url(); ?>/the-air-forces-memorial/" class="btn" data-aos="zoom-in" data-aos-delay="500"><div class="icon-1"></div>The Memorial</a>
            <a href="<?php echo home_url(); ?>/symbol-hunt/" class="btn" data-aos="zoom-in" data-aos-delay="500"><div class="icon-2"></div>Symbol Hunt</a>
        </div>
        <div class="upper">

            <div class="feature-img">
                <?php 
                $pgImg = get_field('img'); 
                $btnLink = get_field('btn_link');
                ?>
                <div class="img" style="background: url(' <?php echo $pgImg['url']; ?> ') no-repeat center center;"></div>
            </div>
            <p><?php the_field('para'); ?></p>

            <div class="links">
                <a href="<?php echo $btnLink; ?>"  class="btn-link">
                <button><span><?php the_field('btn_text') ?></span>
                <div class="icon-box"><div class="icon"></div></div>
                </button>
            </div>

        </div>

    </section>

    </main>

    <a class="btn-back" onclick="window.history.go(-1); return false;">
        <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
    </a>



<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>