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
        <div class="pg-nav">

        </div>
        <p class="pg-num">5 / 6</p>
    </div>

    <section>

    <div class="head">
        <h2 class="quote">“She glared at me as if she was a caged tiger, but she wouldn’t speak.”</h2>
        <h5>A Gestapo officer recalling Noor’s first interrogation</h5>
    </div>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Noor never made it home. Just as she was preparing to leave Paris she was betrayed by a woman
    who is thought to have been jealous over Noor’s close relationship with a fellow agent.</p>
    
    <p>On 13 October Noor returned to her flat and found a Gestapo officer waiting for her. After putting
    up a fierce physical and verbal fight, she was eventually overpowered and arrested.</p>

    <h2>Imprisonment at the Gestapo headquarters in Paris</h2>

    <p>On arriving at the Gestapo HQ Noor angrily refused to answer any questions, and even tried to
    escape by climbing out of a bathroom window. However, her silence didn’t prevent the enemy from
    obtaining useful information: she had kept a log of her messages, which were seized from her
    apartment. Using her notebook and her radio, the Germans began transmitting messages to London
    as though from Noor. It was not until March 1944 that SOE realised she had been captured, after a
    group of elite agents were arrested at a meeting arranged through Noor’s radio.</p>

    <p>While imprisoned in Paris Noor again tried to escape. She communicated with two other prisoners
    by tapping Morse messages on her cell wall; one night the three of them managed to loosen the bars
    on their skylight windows and climbed out. But just as they raced across the roof an air-raid siren
    sounded and guards found they were missing from their cells. The trio made it out onto the street
    but a cordon had been set up and they were recaptured. They returned to the prison after being
    beaten, but she refused to sign an agreement promising not to escape again. She defiantly told the
    Gestapo officer that it was her duty to make escape attempts.</p>

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

    <p>On 26 November 1943 Noor was sent to Pforzheim Prison in Germany. Classed as a ‘dangerous’
    prisoner – perhaps because of her escape attempts – she was kept in constant isolation, shackled by
    her hands and feet. Despite being starved and weeping to herself each night, she was sustained by
    her Sufi philosophy and even meditated for some of the day. She was also able to communicate
    with fellow prisoners through messages scratched into food bowls, letting them know her name and
    address. She was heartened when they told her the Allies had invaded France in June 1944, marking
    the beginning of the end of the war.</p>

    <div class="border-white"></div>
        <div class="links-inline">
            <a onclick="window.history.go(-1); return false;" class="btn-back">
                <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
            </a>
            <a href="#" class="btn-back">
                <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
            </a>
        </div>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>
