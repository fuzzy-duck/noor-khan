<?php
/*
 * Template Name: Noor Unlikely Spy
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="spy">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="overlay-2">
            <div class="trans-bg">
            <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>Noor on holiday The Hague in her early 20s</h5><p>S. Basu</p>" href="<?php bloginfo('template_directory');?>/assets/img/holiday.png" ></a>
            </div>
        </div>
    </div>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 1: <br>Noor Inayat-Khan</p>
        <a href="<?php echo home_url(); ?>/chapter-02-before-the-war/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>


    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>A young Muslim woman, Noor was many things: a dutiful daughter, a
    musician, an artist, a poet fluent in several languages and a published
    writer. Later, she was a vital part of the fight against Nazism, as a wireless
    telephonist in the Women’s Auxiliary Air Force.</p>
    <p>She was quiet and timid, and this meant people sometimes doubted her
    abilities. But she worked hard to gain the right skills to be a wireless
    operator behind enemy lines and held together the tattered remains of the
    Paris resistance in some of the darkest hours of the Second World War. She
    did a highly dangerous job, usually alone, evading capture for months. She
    is still celebrated today in the city as;</p>  
    
    <div class="head">
        <h2 class="quote">“Madeleine of the Resistance.”</h2>
    </div>

    </section>

    <a href="<?php echo home_url(); ?>/chapter-01-who-was-noor-inayat-khan/contribution/" class="btn-back">
        <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
    </a>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>