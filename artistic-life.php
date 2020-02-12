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
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="overlay-2">
            <div class="trans-bg">
            <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>Noor with her veena</h5><p>S Basu</p>" href="<?php bloginfo('template_directory');?>/assets/img/noor-sitar.png" href="<?php bloginfo('template_directory');?>/assets/img/noor-sitar.png" ></a>
            </div>
        </div>
    </div>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 2: Before the war</p>
        <a href="<?php echo home_url(); ?>/chapter-02-before-the-war/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

        <h2>An Artistic Life</h2>
        <div class="border-dup"></div>

        <p>Like her father, Noor was a talented musician and studied music at a leading institute in Paris. She
        played the harp, piano and veena – an Indian stringed instrument similar to a lute. She also enjoyed
        drawing, especially plants.</p>

        <div class="lower">
            <div class="carousel">
                <div class="owl-carousel owl-theme">
                    <div class="item"><div class="img-01"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>Noor (on left big bow) family group inc 2 uncles behind</h5><p>S Basu</p>" href="<?php bloginfo('template_directory');?>/assets/img/noor-famalam.png"></a></div></div>
                    <div class="item"><div class="img-02"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>One of Noors illustrations</h5><p>S Basu</p>" href="<?php bloginfo('template_directory');?>/assets/img/noor-illus.jpg"></a></div></div>
                </div>
            </div>
        </div>

        <p>In 1932 Noor studied child psychology at the famous Sorbonne university. She invited local children
        to her home to hear magical tales from Indian mythology, and eventually began writing stories and
        poems for young people. She even read her work on the radio. In 1939 she published her English
        translation of The Jataka Tales, a collection of traditional Indian stories, which often focused on themes of
        sacrifice, duty and devotion to others. These were qualities which Noor herself would dramatically
        display after the Second World War broke out that very year.</p>

        <div class="links">
            <a href="http://ducknest.co.uk/noor-khan/wp-content/uploads/2020/audio/Noor%20Poem_CWGC.wav" class="btn-link"><button><span>Listen to poem</span><div class="icon-box"><div class="icon-ply"></div></div></button></a>
            <a href="#" class="btn-link"><button><span>Listen to veena music</span><div class="icon-box"><div class="icon-ply"></div></div></button></a>
        </div>

        <div class="head">
            <h2 class="quote">“I remember her as a very gentle girl, but she studied so hard that I thought she must have an inner fire which her quiet manner hid.”</h2>
            <h5>Henriette Renié, Noor’s harp teacher</h5>
        </div>

    </section>

    <a href="<?php echo home_url(); ?>/chapter-03-recruitment" class="nav-banner">
        <div class="content">
            <div class="text">Go to Chapter 3</div>
            <div class="img"></div>
        </div>
    </a>
    
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>
