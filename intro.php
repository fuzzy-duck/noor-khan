<?php
/*
 * Template Name: Intro
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="intro">
    <header>
        <a href="<?php echo home_url(); ?>" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>

    <div class="upper">
        <h2>This memorial commemorates airmen and women of the Commonwealth
        forces of the Second World War who, like Noor, died during operations in
        northern and western Europe and have no known grave.</h2>
    </div>

    <div class="lower">

        <p>It was designed by Sir Edward Maufe, the Commonwealth War Graves
        Commission’s Principal Architect for the UK after 1945. Thousands of
        relatives of those whose names are on the walls attended its unveiling by
        Queen Elizabeth II in 1953.</p>

        <p>It takes the form of a shrine and cloister. The shrine is a quiet place to think;
        the cloister carries the names of the missing. Their names are engraved on
        a series of stone ‘books’, bathed in the light from the nearby windows.</p>

        <p>Richly decorated with carved, sculpted, painted and etched symbols of
        flight and the flying services, it’s a special place to remember those who
        died so we could be free.</p>

        <div class="links">
            <a href="<?php echo home_url(); ?>//chapter-01-who-was-noor-inayat-khan/" class="btn-link"><button><span>Discover Noor's Story</span><div class="icon-box"><div class="icon"></div></div></button></a>
            <a href="<?php echo home_url(); ?>/runnymede" class="btn-link"><button><span>Explore Runnymede</span><div class="icon-box"><div class="icon"></div></div></button></a>
        </div>
        
    </div>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>