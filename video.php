<?php
/*
 * Template Name: Video
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="video">
    <a href="<?php echo home_url(); ?>/chapter-01-who-was-noor-inayat-khan/" class="close"><span></span></a>
    <div class="inner">

        <video class="video-container" autoplay loop muted playsinline>
            <source src='<?php the_field('video'); ?>'>
        </video>

        <script>
            // JS Full screen onClick control
            var elem = document.getElementById("myvideo");
                function openFullscreen() {
                if (elem.requestFullscreen) {
                    elem.requestFullscreen();
                } else if (elem.mozRequestFullScreen) { /* Firefox */
                    elem.mozRequestFullScreen();
                } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
                    elem.webkitRequestFullscreen();
                } else if (elem.msRequestFullscreen) { /* IE/Edge */
                    elem.msRequestFullscreen();
                }
            }
        </script>

    </div>
</main>

<?php get_footer(); ?>