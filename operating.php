<?php
/*
 * Template Name: Operating
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="operating">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="overlay-2">
            <div class="trans-bg">
            <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/runnymede-memorial.png" ></a>
            </div>
        </div>
    </div>

    <div class="fixed-nav">
        <p class="pg-title">Mission</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">5 / 6</p>
    </div>

    <section>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Noor was the first female radio operator to be sent to France. She was part of a group – or ‘circuit’
    – of undercover agents called ‘PROSPER’, which covered a vast area of northern France. However,
    the circuit of closely-interconnected agents had become so successful and large that it was
    vulnerable to collapse – like Dominoes, if one or two key figures were captured, everything would
    come crashing down.</p>

    <p>And that’s exactly what happened when four agents were arrested at a roadblock on 21 June 1943,
    carrying non-coded messages with the contact details of the PROSPER network’s main players.
    There was also a double-agent, Henri Déricourt, in their midst, who passed crucial information on to
    the Germans. Within a week of Noor’s arrival in Paris, PROSPER’s top agents had been arrested and
    her circuit had collapsed. Hundreds of French Resistance fighters were arrested and interrogated.</p>

    <div class="lower">
        <div class="carousel">
            <div class="owl-carousel owl-theme">
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
            </div>
        </div>
    </div>

    <p>The SOE urged Noor to return to England due to the danger she faced, but she insisted on staying.
    Noor had become the last wireless operator left in Paris, transmitting messages to the free world.
    She gradually tried to rebuild the circuit, and frequently transmitted messages from a car to prevent
    being detected by the Gestapo’s tracking vans. Calling on old family friends, Noor moved from
    house to house to send messages, and even dyed her hair. For three months she sent more than
    twenty communications back to London, and arranged parachute drops of arms and money to aid
    the Resistance. Throughout this time Noor’s transmissions were also received by the Germans, but
    they could not pinpoint her exact location.</p>

    <p>As the net closed in, Noor realised the pressure of her situation was becoming unbearable. After
    one near-capture, she wept and lamented to a friend: “I wish I was with my mother.” In October
    1943 Buckmaster told her she would finally be replaced, and she prepared to head back to the UK.</p>

    <div class="border-white"></div>
        <div class="links-inline">
            <a onclick="window.history.go(-1); return false;" class="btn-back">
                <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
            </a>
            <a onclick="window.history.go(1); return false;" class="btn-back">
                <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
            </a>
        </div>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>