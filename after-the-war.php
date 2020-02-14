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
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="overlay-2">
            <div class="trans-bg">
            <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>Paris street scene, Bundesarchiv Bild</h5><p>Langhaus 1941</p>" href="<?php bloginfo('template_directory');?>/assets/img/george_cross.png" ></a>
            </div>
        </div>
    </div>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 6: <br>Death & legacy</p>
        <a href="<?php echo home_url(); ?>/chapter-06-death-legacy/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>The SOE stopped operating in 1946, a few months after the end of the Second World War. Stories began to emerge of its secret activities and heroic agents. Citations for medals were published in the press, and books and films soon followed.</p> 
        
    <p style="position: relative; z-index: 5;">In 1949 Noor was awarded the George Cross, Britain’s highest civilian honour for bravery. She was one of only three female SOE agents to be recognised in this way, along with Violette Szabo and Odette Sansom. The first biography of Noor was published in 1952, which one of Noor’s SOE instructors felt captured her:</p>

    <div class="underlay-thumb">
        <div class="img"></div>
    </div>

    <div class="lower">
        <div class="head">
            <h2 class="quote">“intelligence and warmth, timidity and courage, simplicity and love of truth.”</h2>
        </div>

        <p>Because Noor has no known grave, her name is inscribed here on CWGC’s Runnymede Air Forces Memorial in Surrey – just over there, on panel 243. She is commemorated in other places too: London, Dachau, and the Paris suburb where she lived before the war.</p> 
            
        <p>The story of Noor’s life and death has valuable lessons to teach us about perseverance in difficult circumstances, and how making the most of your unique talents can help to change the world.</p>

    </div>


            <a href="<?php echo home_url(); ?>/chapter-06-death-legacy/what-does-noor-mean-to-you/" class="btn-back">
                <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
            </a>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>