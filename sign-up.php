<?php
/*
 * Template Name: Noor Sign Up
 * Template Post Type: page
 */
?>

<?php get_header(); ?>
<main id="sign-up">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Recruitment</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">3 / 6</p>
    </div>
    <section>

    <div class="carousel">
        <div class="owl-carousel owl-theme">
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/uniform-noor.png"></a></div></div>
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/uniform-noor.png"></a></div></div>
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/uniform-noor.png"></a></div></div>
        </div>
    </div>

    <div class="tile">
        <div class="img"></div>
    </div>
    <h2>Noor signs up</h2>
    <div class="border-dup"></div>

    <p>On 10 November 1942 Noor was invited to interview for the SOE due to her language skills,
    especially her fluency in French. The recruiter described her as “sure and confident…I had not the
    slightest doubt she could do it.” He felt she would be careful and patient – vital qualities in a
    wireless operator. Three months later Noor was attached to the Air Ministry Unit for service under
    Air Intelligence, and on 15 February 1943 she signed the Official Secrets Act.</p>
        
    <p>A WAAF colleague of Noor’s later recalled how the young woman “disappeared. Just like that. No
    word, no sign, no letter to explain a sudden posting. Just her blankets stacked neatly on the
    bedspring.” She had entered the shadowy world of the SOE, and her ultimate fate would be
    shrouded in mystery.</p>

    <div class="border"></div>
    
    <div class="head">
        <h2 class="quote">“Of them all…I find myself constantly remembering her with a curious and very personal vividness
        which outshines the rest…the small, still features, the dark quiet eyes, the soft voice, and the fine
        spirit glowing in her.”</h2>
        <h5>Captain Selwyn Jepson, SOE recruiting officer</h5>
    </div>

    <div class="border-white"></div>
    <div class="links-inline">
        <a onclick="window.history.go(-1); return false;" class="btn-back">
            <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
        </a>
        <a href="<?php echo home_url(); ?>/chapter-03-recruitment/what-role-quiz/" class="btn-back">
            <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
        </a>
    </div>
    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>


<?php get_footer(); ?>