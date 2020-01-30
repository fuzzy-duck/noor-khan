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
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>

    <div class="header-bg">
        <div class="overlay"></div>
        <div class="overlay-2">
            <div class="trans-bg">
            <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/runnymede-memorial.png"></a>
            </div>
        </div>
    </div>

    <div class="fixed-nav">
        <p class="pg-title">Recruitment</p>
        <a href="<?php echo home_url(); ?>/chapter-03-recruitment/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>In September 1939 the Nazi forces of Germany overran Poland, sparking the Second World War.
    Under the command of Hitler, German troops were heading for France; Noor’s family had no choice
    but to escape to London in June 1940.</p>

    <p>Noor was desperate to help the war effort but struggled to reconcile fighting with her Sufi principles
    of pacifism and non-violence. She asked her beloved brother Vilayat for advice, declaring “I must do
    something but I don’t want to kill anyone.” Vilayat responded: “we have to involve ourselves in the
    most dangerous positions, which would mean no killing.” So Noor aimed to become an intelligence
    operative, and her brother joined the navy as a mine-sweeper. Later, he talked of how guilty he felt
    for recommending this course of action.</p>

    <div class="carousel">
        <div class="owl-carousel owl-theme">
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/1192.png"></a></div></div>
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/1192.png"></a></div></div>
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/1192.png"></a></div></div>
        </div>
    </div>

    <p>Noor wanted to be a role model for Indians, and to help unite her different national identities. She
    told her friend,</p>

    <div class="head">
        <h2 class="quote">“I wish some Indians would win high military distinctions in this war. If one or two
        could do something in the Allied services which was very brave and which everybody admired it
        would help to make a bridge between English people and Indians.”</h2>
        <h5>Noor Inayat Khan</h5>
    </div>

    <p>Noor joined the Women’s Auxiliary Air Force (WAAF) in November 1940 and trained as a radio
    operator. A year later, she applied to work in Intelligence for the Special Operations Executive (SOE),
    and in May 1942 she was sent on a seven-week Advanced Signals and Wireless Course. Radio
    operators suffered the highest casualties as secret agents in Nazi-occupied territory – their life
    expectancy was only 6 weeks – so the SOE was always in need of new recruits.</p>

    </section>

    <a href="<?php echo home_url(); ?>/chapter-03-recruitment/soe-2/" class="btn-back">
        <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>