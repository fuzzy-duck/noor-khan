<?php
/*
 * Template Name: What Role
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="role">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 3: <br>Recruitment</p>
        <a href="<?php echo home_url(); ?>/chapter-03-recruitment/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>
        <div class="bg-container">
        <h5 class="h5-title">Quiz</h5>
        <h2>What role would you be?</h2>
        <div class="border"></div>

        <p>The WAAF was created to do the jobs RAF men did prior to the war, so that those men could move into front-line and flying jobs. By 1943, the WAAF has over 180,000 members doing hundreds of different kinds of jobs.</p>
        <h5>Take the quiz to find out what job you would have done...</h5>
        <a href="<?php echo home_url(); ?>/chapter-03-recruitment/what-role-quiz/qu1/"><div class="begin"></div></a>

        </div>

    </section>

    <div class="lower">
            <div class="img"></div>
        </div>

    </main>

    <div id="turn"><?php include ("turn.php"); ?></div>

    <?php get_footer(); ?>