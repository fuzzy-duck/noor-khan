<?php
/*
 * Template Name: Betrayal
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="betrayal">
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
            <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>Noor with her veena</h5><p>S Basu</p>" 
            href="<?php bloginfo('template_directory');?>/assets/img/ave-foch.png" ></a>
            </div>
        </div>
    </div>

    <div class="fixed-nav">
        <p class="pg-title">Chapter 5: <br>Mission</p>
        <a href="<?php echo home_url(); ?>/chapter-05-mission/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Noor never made it home. Just as she was preparing to leave Paris, she was betrayed. On 13 October Noor returned to her flat and found an officer waiting for her. After putting up a fierce physical and verbal fight, she was overpowered and arrested.</p>

    <div class="border"></div>
    <div class="head">
        <h2 class="quote">“She glared at me as if she was a caged tiger, but she wouldn’t speak.”</h2>
        <h5>A Gestapo officer recalling Noor’s first interrogation</h5>
    </div>

    <h2>Imprisonment at the Gestapo headquarters in Paris</h2>
    <div class="border-dup"></div>

    <p>Noor angrily refused to answer any questions and even tried to escape by climbing out of a bathroom window. </p>
        
    <p>Using her radio and a log of her sent messages they’d found, the Germans began transmitting messages to London pretending to be Noor. It took SOE months to realise they were being played via several captured agents’ sets, not just Noor’s.</p>
    
    <p>While imprisoned in Paris, Noor again tried to escape. She communicated with two other prisoners by tapping Morse messages on her cell wall; one night, the three of them managed to loosen the bars on their skylight windows and climb out. But just as they raced across the roof an air-raid siren sounded and guards found they were missing from their cells. The trio made it to the street but a cordon had been set up and they were caught and beaten.</p>

    <div class="thumb-1"><div class="img"></div></div>
    <div class="second">
    <h2>Solitary confinement in Germany</h2>
    <div class="border-dup"></div>

    <p>The next day, 26 November 1943, Noor was sent to Pforzheim prison in Germany. Classed as a ‘dangerous’ prisoner – perhaps because of her escape attempts – she was kept in constant isolation, shackled by her hands and feet. Despite being starved, she meditated and her Sufi philosophy kept her going.</p>
    </div>
    <div class="thumb-2"><div class="img"></div></div>
    <h5>‘Nacht und Nebel’ (‘Night and Fog') which permitted Nazi authorities to 'disappear' people like Noor without a trace.</h5>

    <div class="border"></div>
    <div class="head">
        <h2 class="quote">“You are not alone, you have a friend, Cell No.1”</h2>
        <h5>(Noor to a fellow prisoner) She was able to communicate with fellow prisoners through messages scratched into food bowls. She was heartened when they told her the Allies had invaded France in June 1944; surely the war, and her captivity, would be over soon.</h5>
    </div>


</section>

<a href="<?php echo home_url(); ?>/chapter-06-death-legacy/" class="nav-banner">
        <div class="content">
            <div class="text">Go to Chapter 6</div>
            <div class="img"></div>
        </div>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>
