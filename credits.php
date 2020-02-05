<?php
/*
 * Template Name: Credits
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="credits">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
</a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="credits">
        <h3>Credits</h3>
        <div class="border"></div>
        <div class="grid">
            <?php
                // check if the repeater field has rows of data
                if( have_rows('credits') ):
                // loop through the rows of data
                while ( have_rows('credits') ) : the_row();
            ?>
                <div class="content">
                    <h5><?php the_sub_field('title');?></h5>
                    <p><?php the_sub_field('name');?></p>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>
    <div class="images">
        <h3>Images</h3>
        <div class="border"></div>
        <div class="grid">
            <?php
                // check if the repeater field has rows of data
                if( have_rows('images') ):
                // loop through the rows of data
                while ( have_rows('images') ) : the_row();
            ?>

                <div class="content">
                    <h5><?php the_sub_field('title');?></h5>
                    <p><?php the_sub_field('name');?></p>
                </div>

                <?php endwhile; ?>
            <?php endif; ?>
        </div>

    </div>

</main>

    <a onclick="window.history.go(-1); return false;" class="btn-back">
        <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
    </a>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>