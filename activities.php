<?php
/*
 * Template Name: Activities
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="activites">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>

    <section>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <div class="lower">


            <a href="<?php echo home_url(); ?>/#" class="link" data-aos="fade-right" data-aos-duration="500" data-aos-offset="100">
                <div class="img" style="background: url(<?php bloginfo('template_directory');?>/assets/img/eagle@2x.png) no-repeat center center;"></div>
                <a href="<?php echo home_url(); ?>/#" class="btn-link" data-aos="fade-up" data-aos-duration="500" data-aos-offset="-100"><button><span><p>Symbol Hunt</p></span>
                <div class="icon-box"><div class="icon"></div></button></a></div>
            </a>

            <a href="<?php echo home_url(); ?>/#" class="link" data-aos="fade-right" data-aos-duration="500" data-aos-offset="100">
                <div class="img" style="background: url(<?php bloginfo('template_directory');?>/assets/img/radiobox.png) no-repeat center center;"></div>
                <a href="<?php echo home_url(); ?>/#" class="btn-link" data-aos="fade-up" data-aos-duration="500" data-aos-offset="-100"><button><span><p>Which job might you have done?</p></span>
                <div class="icon-box"><div class="icon"></div></button></a></div>
            </a>

            <a href="<?php echo home_url(); ?>/#" class="link" data-aos="fade-right" data-aos-duration="500" data-aos-offset="100">
                <div class="img" style="background: url(<?php bloginfo('template_directory');?>/assets/img/morse-cheat-sheet.png) no-repeat center center;"></div>
                <a href="<?php echo home_url(); ?>/#" class="btn-link" data-aos="fade-up" data-aos-duration="500" data-aos-offset="-100"><button><span><p>Radio Training</p></span><div class="icon-box">
                    <div class="icon"></div></button></a>
                </div>
            </a>

            <a href="<?php echo home_url(); ?>/#" class="link" data-aos="fade-right" data-aos-duration="500" data-aos-offset="100">
                <div class="img" style="background: url(<?php bloginfo('template_directory');?>/assets/img/da-role.png) no-repeat center center;"></div>
                <a href="<?php echo home_url(); ?>/#" class="btn-link" data-aos="fade-up" data-aos-duration="500" data-aos-offset="-100"><button><span><p>Can you crack the code?</p></span><div class="icon-box">
                    <div class="icon"></div></button></a>
                </div>
            </a>

    </div>

    </section>

</main>

<a onclick="window.history.go(-1); return false;" class="btn-back">
        <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
    </a>


<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>