<?php
/*
 * Template Name: Radio Training 
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="radio-training">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="morse-head"><div class="img"></div></div>
    </div>

    <div class="fixed-nav">
        <p class="pg-title">Mission</p>
        <a href="<?php echo home_url(); ?>/chapter-05-mission/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

        <div class="title">
            <h5>S.O.E Assignment</h5>
            <h2>Can you crack the code?</h2>
            <p>The S.O.E. used Morse Code to transmit and receive messages in enemy territory. You’ve been sent a top secret briefing - can you work out what it says? 
                
            <p class="sub">Use the International Morse Code Alphabet to match the dots and dashes then guess a letter to see if it fits. Good luck!</p>
            <div class="bgn-btn"><a href="<?php echo home_url(); ?>/radio-training-2" class="begin"></a></div>
        </div>

        <div class="slantz">
            <div class="img"></div>
        </div>


    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>