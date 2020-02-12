<?php
/*
 * Template Name: Runnymede
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<div id="turn"><?php include ("turn.php"); ?></div>

<main id="runnymede">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="upper">
        <div class="border"></div>
        <div class="head">
        <h2 class="quote">Per ardua ad astra (Through adversity to the stars)</h2>
        <h5>Motto of the RAF</h5>    
    </div>
        <p>This memorial’s design honours those who served in the air services. Watch today’s aircraft taking off and landing at Heathrow Airport from the tall tower, which mimics an RAF control tower. Explorers will find windows etched with angels, poems, and traces of flight trails. Look up to see domes filled with stars, while compasses are inlaid in the floor. </p>
        
        <p>Names appear by year of death, then by unit, then rank, and finally in alphabetical order.</p>
    
        <!--
        <div class="dl">
            <div class="border"></div>
            <h5>Who can you find?</h5>
            <h5>How many symbols can you track down?</h5> 
            <h5>Tap a hotspot on the map to learn more.</h5>
        </div>
        -->
        <div class="links">
            <a href="<?php echo home_url(); ?>/intro/entrance" class="btn-link"><button><span>Explore Runnymede</span><div class="icon-box"><div class="icon"></div></div></button></a>
        </div>

    </div>

</main>

    <a href="<?php echo home_url(); ?>/intro" class="btn-back">
        <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
    </a>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>