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
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </div>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Recruitment</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">3 / 6</p>
    </div>
    <section>

    <h2><?php the_field('question'); ?></h2>
    <div class="border-dup"></div>

    <div class="links">
        <a class="answer-1 btn-link"><button><span><?php the_field('answer_1'); ?></span><div class="icon-box"><div class="icon"></div></div></button></a>
        <a class="answer-2 btn-link"><button><span><?php the_field('answer_2'); ?></span><div class="icon-box"><div class="icon"></div></div></button></a>
        <a class="answer-3 btn-link"><button><span><?php the_field('answer_3'); ?></span><div class="icon-box"><div class="icon"></div></div></button></a>
        <a class="answer-4 btn-link"><button><span><?php the_field('answer_4'); ?></span><div class="icon-box"><div class="icon"></div></div></button></a>
    </div>


    <div class="border-white"></div>
    <div class="links-inline">
        <a onclick="window.history.go(-1); return false;" class="btn-back">
            <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
        </a>
    </div>
    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>