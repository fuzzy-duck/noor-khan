<?php
/*
 * Template Name: Question (template)
 * Template Post Type: page
 */
?>

<?php get_header(); ?>
<main id="question">
    <header>
        <div class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </div>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 3: <br>Recruitment</p>
        <a href="<?php echo home_url(); ?>/chapter-03-recruitment/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>
    <section>
    <div class="inner">
        <h2><?php the_field('question'); ?></h2>
        <div class="border"></div>

        <div class="links">
            <a href="<?php the_field('link_page_a'); ?>" class="answer-1 btn-link"><button><span><?php the_field('answer_1'); ?></span></button></a>
            <a href="<?php the_field('link_page_b'); ?>" class="answer-2 btn-link"><button><span><?php the_field('answer_2'); ?></span></button></a>
        </div>
    </div>

    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>