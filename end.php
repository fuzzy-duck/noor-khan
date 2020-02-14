<?php
/*
 * Template Name: End
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="intro">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="trans-bg">
        <h2 data-aos="fade-in" data-aos-duration="2000">Thank you for visiting Runnymede today and learning the story of Noor Inayat-Khan.</h2>
        </div>
    </div>


    <div class="lower">

        <p data-aos="fade-in" data-aos-duration="2500">Lorem ipsum dolor sit amet consectetur adipisicing elit. A ab totam praesentium odit sunt aperiam nostrum, eveniet nobis dolorem reiciendis nisi consectetur optio.</p>

        <p data-aos="fade-in" data-aos-duration="2500">Atque ullam voluptas ad unde eos maiores, a ab totam praesentium odit sunt aperiam nostrum, eveniet nobis dolorem reiciendis nisi consectetur optio.</p>

        
    </div>

</main>

<div class="end-btn">
    <a href="<?php echo home_url(); ?>/home" class="btn-back">
        <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back to start</span></button>
    </a>
</div>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>