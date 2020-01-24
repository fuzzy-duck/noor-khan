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
        <div class="video-container">
            <iframe id="myvideo" onclick="openFullscreen();" width="560" height="315" src="https://www.youtube.com/embed/Y7zyB7rsvHU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

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