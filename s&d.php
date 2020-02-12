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
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </div>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 4: <br>Training</p>
        <a href="<?php echo home_url(); ?>/chapter-04-training/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>
    <div class="border"></div>
    <div class="head">
        <h2 class="quote">“Noor always had a smile or a pleasant word for others, despite the hard knocks they had to take
        while training and the tedious nature of the job.”</h2>
        <h5>Dorothy Ryman, Colleague</h5>
    </div>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Throughout training, agents were assessed on their personality and psychological state as much as their practical skills. Enthusiasm and confidence counted for as much as technical ability. Although Noor had excellent radio skills, she struggled with physical tasks such as parachute jumping and regimental routines, and disliked handling weapons.</p>

    <p>Opinion was divided among her instructors; several praised her determination and perseverance despite perhaps a lack of natural talent and an emotional character:</p>

    <div class="msg">
        <img src="<?php bloginfo('template_directory');?>/assets/video/Quote-1-Alpha.gif">
    </div>

    <p>The hardest thing for her, though, was to pretend to be someone she was not.</p> 
    
    <p>Noor was honest and open and did not want to lie. Her instructors called it ‘lack of ruse’. They were also worried she could not disappear into a crowd. At Beaulieu, agents were subjected to mock interrogations held in the dead of night by people dressed in Gestapo uniforms. Under the glare of bright lights and in the face of intense shouting, Noor was so terrified she nearly lost her voice. </p>
    
    <p>At her final codes briefing, Noor did a poor job of encrypting a practice message; when encouraged to think of making mistakes as a form of lying, she did a perfect job second time around. She was told to think of one of her Jataka Tales, about a monkey chief who sacrificed himself by becoming a bridge that his followers could cross to flee from danger: “Every time you encode a message think of the letters in it as monkeys trying to cross a bridge between Paris and London.”</p>
    
    </section>

    <a href="<?php echo home_url(); ?>/chapter-04-training/creating-noors-cover/" class="btn-back">
        <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>