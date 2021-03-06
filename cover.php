<?php
/*
 * Template Name: Noor's Cover
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="cover">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 4: <br>Training</p>
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

    <p>Despite it being the most dangerous place in France, Noor requested she be sent to Paris for her mission because she knew it so well. She was given a new name – Jeanne-Marie Renier – and a cover story as a children’s nurse. Her codename was Madeleine, which would be used in all radio transmissions.</p>

    <p>Like other agents, her clothes were faithful copies of those worn by refugees from Occupied Europe, which were aged to look as if they had been worn for years. No detail went unnoticed: continental-style stitching was used and labels from original French clothes were sewn in.</p>

    <p>As well as false papers, Noor was supplied with photographs of invented family and friends, ticket stubs, receipts, a ration card and other personal items to make her cover story believable. She was also given a money belt hiding thousands of francs.</p>

    <div class="border"></div>
    <div class="head">
        <h2 class="quote">“Jasmine is playing her flute”</h2>
        <h5>Code sent out on BBC Radio's Messages Personells service in French indicating that Noor would soon be arriving, <br/>16 June 1943</h5>
    </div>

    <p>On the night of 16 June 1943 – a full moon – Noor was driven to an RAF airfield in Tangmere, Sussex, in a car nicknamed ‘the hearse’. Noor was described as quietly “serene”. She was given a silver bird brooch as a good luck token, and a Webley pistol for her handbag. She would be flown in a small Lysander aircraft to a field in the French countryside, and from there make her way to Paris.</p>

    <!-- 
    <div class="video-thumb">
        <div class="img"><div class="ply-btn"> </div></div>
    </div>
    -->

        </section>

        <a href="<?php echo home_url(); ?>/intro/tower/" class="nav-banner">
        <div class="content">
            <div class="text">Go to Chapter 5</div>
            <div class="img"></div>
        </div>
    </a>

    </main>

    <div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>
    