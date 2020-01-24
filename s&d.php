<?php
/*
 * Template Name: S&D
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="sd">
    <header>
        <div class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </div>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Training</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">4 / 6</p>
    </div>

    <section>
    
    <div class="head">
        <h2 class="quote">“Noor always had a smile or a pleasant word for others, despite the hard knocks they had to take
        while training and the tedious nature of the job.”</h2>
        <h5>Colleague Dorothy Ryman</h5>
    </div>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Throughout training, agents were assessed on their personality and psychological state as much as
    their practical skills. Enthusiasm and confidence counted for as much as technical ability. Although
    Noor had excellent radio skills, she struggled with physical demands such as parachute jumping and
    regimental routines, and disliked handling weapons.</p>

    <p>Opinion was divided on her suitability for undercover work. Several instructors praised her
    determination and perseverance despite perhaps a lack of natural talent and an emotional
    character:</p>

    <div class="msg">

        <img src="<?php bloginfo('template_directory');?>/assets/video/Quote-1-Alpha.gif">

    </div>

    <p>Noor’s biggest problem was that she was unable to lie, due to her Sufi upbringing. At Beaulieu
    agents were subjected to mock interrogations held in the dead of night by people dressed in
    Gestapo uniforms. Under the glare of bright lights and in the face of intense shouting, Noor
    struggled; one friend described her interrogation as “unbearable. She seemed absolutely
    terrified…She was so overwhelmed, she nearly lost her voice…When she came out afterwards, she
    was trembling.”</p>

    <p>In the lead-up to Noor’s planned departure for France, both she and her superiors became anxious
    about her suitability for the work. She hated saying goodbye to her mother and sister, who didn’t
    know the reality of her task, and was alarmed at being given a cyanide pill to kill herself if captured.
    She was offered the chance to back out, but was adamant it was her duty to go. At her final codes
    briefing, Noor did a poor job of encrypting a practice message; she was told to think of making
    mistakes as a form of lying, which spurred her on to do a perfect job second time around. She was
    told to think of one of her Jataka Tales, about a monkey chief who sacrificed himself by becoming a
    bridge that his followers could cross to flee from danger: “Every time you encode a message think of
    the letters in it as monkeys trying to cross a bridge between Paris and London.”</p>

    <div class="border-white"></div>
        <div class="links-inline">
            <a onclick="window.history.go(-1); return false;" class="btn-back">
                <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
            </a>
            <a href="<?php echo home_url(); ?>/chapter-04-training/creating-noors-cover/" class="btn-back">
                <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
            </a>
        </div>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>