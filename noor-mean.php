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
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Execution</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">6 / 6</p>
    </div>

    <section>

    <div class="video-container">
        <iframe id="myvideo" onclick="openFullscreen();" width="560" height="315" src="https://www.youtube.com/embed/Y7zyB7rsvHU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div class="border-white"></div>
        <div class="links-inline">
            <a onclick="window.history.go(-1); return false;" class="btn-back">
                <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
            </a>
        </div>

    </section>

    </main>

    <?php get_footer(); ?>