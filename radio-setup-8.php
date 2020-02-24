<?php
/*
 * Template Name: Radio Setup 8
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="radio-setup-8">
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
        <!--
        <div class="dial">
            <div id="rotate-dial" class="img-dial rotate"></div>
        </div>
        -->


        <div class="inner">
        <div class="waveband">
            <div id="waveband-dial" class="img-dial rotate"></div>
        </div>
        <img src="<?php bloginfo('template_directory');?>/assets/video/radio-setup/Frame_6.gif">
        </div>

        <script>
            $(".rotate").click(function () {
                $(this).toggleClass("down");
            })
        </script>

        <div class="links">
            <a href="<?php echo home_url(); ?>/radio-setup-pt10/" class="btn-link"><button data-aos="fade-in" data-aos-delay="3000"><span>Next</span><div class="icon-box"><div class="icon"></div></div></button></a>
        </div>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>