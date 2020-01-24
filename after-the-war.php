<?php
/*
 * Template Name: After the war
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="after">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Execution</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">6 / 6</p>
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

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>The SOE stopped operating in 1946, a few months after the end of the Second World War. Stories
    began to emerge of its secret activities and heroic agents. Citations for medals were published in
    the press, and books and films soon followed.</p>

    <p>In 1949 Noor was awarded the George Cross, the highest civilian honour for bravery in Britain. She
    was one of only three female SOE agents to be recognised in this way, along with Violette Szabo and
    Odette Sansom. The first biography of Noor was published in 1952, which one of Noor’s SOE
    instructors felt captured her.</p>

    <div class="head">
        <h2 class="quote">“intelligence and warmth, timidity and courage, simplicity and love of truth.”</h2>
    </div>

    <p>Because Noor has no known grave, she is commemorated on memorials in London, Dachau and the
    Paris suburb where she lived before the war. Her name is inscribed on the Runnymede Air Forces
    Memorial in Surrey, which was built and is cared for by the Commonwealth War Graves Commission.</p>

    <p>The story of Noor’s life and death has valuable lessons to teach us about perseverance in difficult
    circumstances, and how making the most of your unique talents can help to change the world.</p>

    <div class="border-white"></div>
        <div class="links-inline">
            <a onclick="window.history.go(-1); return false;" class="btn-back">
                <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
            </a>
            <a href="<?php echo home_url(); ?>/chapter-06-death-legacy/what-does-noor-mean-to-you/" class="btn-back">
                <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
            </a>
        </div>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>