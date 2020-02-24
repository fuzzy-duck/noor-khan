<?php
/*
 * Template Name: What does Noor mean to you
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="meaning">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 6:<br>Death & legacy</p>
        <a href="<?php echo home_url(); ?>/chapter-06-death-legacy/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <video class="video-container" loop muted playsinline controls>
        <source type='video/mp4' src='http://ducknest.co.uk//noor-khan/wp-content/uploads/2020/video/Noor%20-%20Modern%20Role%20Model%20v1.0.mp4'>
    </video>


    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>The Brownies, Guides and Rangers from areas surrounding the Runnymede Memorial learned about Noor’s story, and discovered that many aspects of the life of this shy, spiritual artist and careful technician inspire them today. Find out what Noor’s story means to them.</p>

    </section>

    <a href="<?php echo home_url(); ?>/end-screen/" class="nav-banner">
        <div class="content">
            <div class="text">Finish</div>
            <div class="img"></div>
        </div>
    </a>

    </main>

    <?php get_footer(); ?>