<?php
/*
 * Template Name: Noor's Cover
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="cover">
    <header>
        <div class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </div>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Training</p>
        <a href="<?php echo home_url(); ?>/chapter-04-training/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <div class="msg">
        <div class="img"></div>
    </div>

     
    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Despite it being the most dangerous place in France, Noor requested she be sent to Paris for her
    mission because she had lived there before the war. She was given a new name – Jeanne-Marie
    Renier – and a cover story as a children’s nurse. Her codename was Madeleine, which would be
    used in all radio transmissions.</p>

    <p>Like other agents, her clothes were faithful copies of those worn by refugees from Occupied Europe,
    which were aged to look as if they had been worn for years. No detail went unnoticed: continental-
    style stitching was used and labels from original garments were sewn in to add authenticity.</p>

    <p></p>

    <div class="border"></div>
    <div class="head">
        <h2 class="quote">“Jasmine is playing her flute”</h2>
        <h5>Code sent out on BBC Radio's Messages Personells service in French indicating that Noor would soon be arriving, <br/>16 June 1943</h5>
    </div>

    <p>As well as false papers, Noor would have been supplied with photographs of invented family and
    friends, ticket stubs, receipts, a ration card and other personal items to lend weight to her cover
    story. She was also given a money belt containing thousands of francs.</p>


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
    