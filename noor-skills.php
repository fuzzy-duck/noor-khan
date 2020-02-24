<?php
/*
 * Template Name: Noor's Skills
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

    <h2>Life in the SOE</h2>
    <div class="border-dup"></div>

    <p>Members of the Guiding movement – Brownies, Guides and Rangers – from Maidenhead and surrounding areas learned about Noor’s story by doing as she did. They tried code making and cracking and learnt to send transmissions using a Morse key from the 1940s. Here’s what it taught them about Noor’s special technical skills.</p>

    <video class="video-container" loop muted playsinline controls>
        <source src='http://ducknest.co.uk/noor-khan/wp-content/uploads/2020/video/Noor%20-%20Life%20in%20SEO%20v1.0.mp4'>
    </video>

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