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
        <a href="<?php echo home_url(); ?>/chapter-05-mission/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Noor was the first female radio operator to be sent to France. She was part of a group – or ‘circuit’ – of undercover agents called ‘PROSPER’, which covered a vast area of northern France. However, the circuit of closely-interconnected agents had become so large that it was vulnerable to collapse – like dominoes, if one or two key figures were captured, everything would come crashing down.</p>

    <p> Within a week of Noor’s arrival in Paris, PROSPER’s top agents had been arrested and her circuit had collapsed. Hundreds of French Resistance fighters were picked up and interrogated.</p>

    <div class="lower">
        <div class="carousel">
            <div class="owl-carousel owl-theme">
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
                <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/noor-famalam.png"></a></div></div>
            </div>
        </div>
    </div>

    <p>Noor had become the SOE’s last wireless operator left in Paris, and the Gestapo were hunting her. She tried to rebuild the circuit, and frequently transmitted messages from a car to prevent being detected by the Gestapo’s tracking vans. Calling on old family friends, Noor moved from house to house to send messages, and even dyed her hair. Over three months she sent more than twenty communications back to London, and arranged parachute drops of arms and money to aid the Resistance. As the net closed in, the pressure of her situation must have been unbearable. After one near-capture, she wept to a friend: “I wish I was with my mother.” In October 1943 she heard she could finally be replaced so she agreed to return to England.</p>

            <a href="<?php echo home_url(); ?>/chapter-05-mission/radio-training-pt-1/" class="btn-back">
                <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
            </a>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>