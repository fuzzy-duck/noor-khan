<?php
/*
 * Template Name: How could Noor Help
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="noor-help">
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
            <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>Badge of the Royal Air Force</h5><p>Credit goes here</p>" href="<?php bloginfo('template_directory');?>/assets/img/1192.png"></a>
            </div>
        </div>
    </div>

    <div class="fixed-nav">
        <p class="pg-title">Chapter 3: Recruitment</p>
        <a href="<?php echo home_url(); ?>/chapter-03-recruitment/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>In September 1939 the forces of Nazi Germany under Adolf Hitler overran Poland, sparking the Second World War. In May 1940, German troops invaded the Netherlands, Belgium, Luxembourg and France.</p>

    <p>Noor was desperate to help the war effort but struggled to reconcile fighting with her Sufi principles of pacifism and non-violence. She asked her beloved brother Vilayat for advice, declaring “I must do something, but I don’t want to kill anyone.” Vilayat responded: “we have to involve ourselves in the most dangerous positions, which would mean no killing.” Later in life, he talked of how guilty he felt for recommending this course of action.</p>

    <p>To take part in the fight against Nazism, they would have to leave France: Noor, Vilayat, their younger sister and their mother escaped to the UK in June, as France fell.</p>

    <div class="mid-img">
        <div class="img">
            <a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>Inayat Khan children older</h5><p>S. Basu</p>" href="<?php bloginfo('template_directory');?>/assets/img/khan-children.png"></a>
        </div>
    </div>

    <p>Noor joined the Women’s Auxiliary Air Force (WAAF) in November 1940 and trained as a wireless (radio) operator, using a radio to send and receive Morse messages. A linguist and musician, she quickly learned the language of Morse, where letters are made up of long and short sounds produced by tapping a Morse key. She became an efficient operator working for RAF Bomber Command.</p>

    <div class="border"></div>

    <div class="head">
        <h2 class="quote">“I wish some Indians would win high military distinctions in this war. If one or two
        could do something in the Allied services which was very brave and which everybody admired it
        would help to make a bridge between English people and Indians.”</h2>
        <h5>Noor to a friend</h5>
    </div>

    </section>

    <a href="<?php echo home_url(); ?>/chapter-03-recruitment/soe-2/" class="btn-back">
        <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>