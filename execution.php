<?php
/*
 * Template Name: Execution
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="execution">
    <header>
        <div class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </div>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Death & legacy</p>
        <a href="<?php echo home_url(); ?>/chapter-06-death-legacy/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <div class="head">
        <h2 class="quote">“Of all the captured agents, Noor had most completely disappeared.”</h2>
        <h5>Historian Sarah Helm</h5>
    </div>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Secret agents were not protected by international agreements to treat prisoners respectfully – they could be tortured and executed at any time. The likelihood of this happening increased after D-Day in June 1944, as the Nazis lost their grip on France and were on the defensive for the first time.</p>

    <div class="thumb">
        <div class="img">
            <div class="gradientz"> <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/runnymede-memorial.png" ></a></div>
        </div>
    </div>

    <p>In the early hours of 13 September 1944, with no warning, Noor and three other female agents were
    taken by train to Dachau Concentration Camp. This was one of many places across Europe where
    people were imprisoned by the Nazis and killed on a mass scale. The women were locked in cells
    and beaten, but Noor remained silent. </p>
    
    <div class="thumb">
        <div class="img-2">
            <div class="gradientz"> <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/crematorium.png" ></a></div>
        </div>
    </div>
    
    <p>There are different accounts of Noor’s death, from the nature of the violence/brutality she faced to whether she died alone in her cell or alongside the
    other prisoners out in the courtyard. It is almost certain though that Noor was shot after being told
    to kneel down. One report stated that her last word was “Liberté” – French for ‘liberty’.</p>

    <p>Soon afterwards, Noor’s mother and brother experienced the same dream: a smiling Noor, dressed
    in uniform, appeared to them surrounded by a blue light and said she was free. Noor was cremated
    at Dachau and it is not known what happened to her remains.</p>

            <a href="<?php echo home_url(); ?>/chapter-06-death-legacy/after-the-war/" class="btn-back">
                <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
            </a>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>