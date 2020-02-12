<?php
/*
 * Template Name: Intro
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="intro">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="trans-bg">
        <h2>You are standing in front of the CWGC’s Runnymede Memorial</h2>
        </div>
    </div>


    <div class="lower">

        <p>The largest Second World War memorial in the UK. Here you can read the names of more than 20,000 airmen and women who died during the Second World War, who have no known grave.</p>

        <p>Noor Inayat-Khan – a secret agent who operated behind enemy lines - is one of 14 women whose names are carved here. Explore our memorial to learn more about Noor’s story through this digital exhibition.</p>

        <div class="links">
            <a href="<?php echo home_url(); ?>/runnymede" class="btn-link"><button><span>Next</span><div class="icon-box"><div class="icon"></div></div></button></a>
        </div>
        
    </div>

</main>

    <a href="<?php echo home_url(); ?>/home" class="btn-back">
        <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
    </a>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>