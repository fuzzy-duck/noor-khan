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
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Noor Inayat Khan</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">1 / 6</p>
    </div>

    <section>

    <div class="carousel">
        <div class="owl-carousel owl-theme">
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/holiday.png"></a></div></div>
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/holiday.png"></a></div></div>
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/holiday.png"></a></div></div>
        </div>
    </div>

    <div class="lower">

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Everyone named here on the walls of the Memorial has their own story.
    Noor Inayat-Khan is no exception.</p>
    <p>A young Muslim woman, she was many things: a dutiful daughter, a
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

        <div class="border-white"></div>
            <div class="links-inline">
                <a onclick="window.history.go(-1); return false;" class="btn-back">
                    <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
                </a>
                <a href="<?php echo home_url(); ?>/chapter-01-who-was-noor-inayat-khan/contribution/" class="btn-back">
                    <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
                </a>
            </div>
        </div>
    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>