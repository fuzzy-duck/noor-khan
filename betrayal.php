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
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>

    <div class="fixed-nav">
        <p class="pg-title">Mission</p>
        <a href="<?php echo home_url(); ?>/chapter-05-mission/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <div class="head">
        <h2 class="quote">“She glared at me as if she was a caged tiger, but she wouldn’t speak.”</h2>
        <h5>A Gestapo officer recalling Noor’s first interrogation</h5>
    </div>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Noor never made it home. Just as she was preparing to leave Paris, she was betrayed. On 13 October Noor returned to her flat and found an officer waiting for her. After putting up a fierce physical and verbal fight, she was overpowered and arrested.</p>

    <h2>Imprisonment at the Gestapo headquarters in Paris</h2>

    <p>Noor angrily refused to answer any questions and even tried to escape by climbing out of a bathroom window. </p>
        
    <p>Using her radio and a log of her sent messages they’d found, the Germans began transmitting messages to London pretending to be Noor. It took SOE months to realise they were being played via several captured agents’ sets, not just Noor’s.</p>
    
    <p>While imprisoned in Paris, Noor again tried to escape. She communicated with two other prisoners by tapping Morse messages on her cell wall; one night, the three of them managed to loosen the bars on their skylight windows and climb out. But just as they raced across the roof an air-raid siren sounded and guards found they were missing from their cells. The trio made it to the street but a cordon had been set up and they were caught and beaten.</p>

    <div class="lower">
        <div class="carousel">
            <div class="owl-carousel owl-theme">
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
            </div>
        </div>
    </div>

    <h2>Solitary confinement in Germany</h2>

    <p>The next day, 26 November 1943, Noor was sent to Pforzheim prison in Germany. Classed as a ‘dangerous’ prisoner – perhaps because of her escape attempts – she was kept in constant isolation, shackled by her hands and feet. Despite being starved, she meditated and her Sufi philosophy kept her going.</p>

    </section>

    <a href="<?php echo home_url(); ?>/runnymede" class="nav-banner">
        <div class="content">
            <div class="img"></div>
            <div class="text">Return to Map</div>
        </div>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>
