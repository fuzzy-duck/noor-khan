<?php
/*
 * Template Name: Artistic Life
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="artistic">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Before the War</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">2 / 6</p>
    </div>

    <section>
    <div class="upper">
        <div class="carousel">
            <div class="owl-carousel owl-theme">
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-sitar.png"></a></div></div>
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-sitar.png"></a></div></div>
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-sitar.png"></a></div></div>
            </div>
        </div>
    </div>

        <h2>An Artistic Life</h2>
        <div class="border-dup"></div>

        <p>Like her father, Noor was a talented musician and studied music at a leading institute in Paris. She
        played the harp, piano and veena – an Indian stringed instrument similar to a lute. She also enjoyed
        drawing, especially plants.</p>

        <div class="head">
        <div class="border"></div>
            <h2 class="quote">“Insert Quote Here”</h2>
            <h5>Caption Goes Here</h5>
        </div>

        <p>In 1932 Noor studied child psychology at the famous Sorbonne university. She invited local children
        to her home to hear magical tales from Indian mythology, and eventually began writing stories and
        poems for young people. She even read her work on the radio. In 1939 she published her English
        translation of The Jataka Tales, a collection of traditional Indian, which often focused on themes of
        sacrifice, duty and devotion to others. These were qualities which Noor herself would dramatically
        display after the Second World War broke out that very year.</p>

        <div class="links">
            <a href="#" class="btn-link"><button><span>Hear Poem</span><div class="icon-box"><div class="icon-ply"></div></div></button></a>
            <a href="<?php echo home_url(); ?>/runnymede" class="btn-link"><button><span>Hear Veena Music</span><div class="icon-box"><div class="icon-ply"></div></div></button></a>
        </div>

        <div class="lower">
            <div class="carousel">
                <div class="owl-carousel owl-theme">
                    <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
                    <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
                    <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
                </div>
            </div>
        </div>

        <div class="border-white"></div>
        <div class="links btm-links">
            <a href="<?php echo home_url(); ?>/chapter-02-before-the-war" class="btn-back">
                <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
            </a>
        </div>

    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>
