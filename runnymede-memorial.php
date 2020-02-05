<?php
/*
 * Template Name: Runnymede Memorial
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="runny-mem">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="overlay-2">
            <div class="trans-bg">
            <a class="zoom fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="/assets/img/runnymede-memorial.png" ></a>
            </div>
        </div>
    </div>
    <section>


    <div class="head">
        <h2 class="quote">THEIR NAME LIVETH FOR EVERMORE</h2>
        <h5>CWGC Stone of Remembrance</h5>
    </div>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>The Runnymede Memorial commemorates airmen and women of the Commonwealth forces of the Second World War who, like Noor, died during operations in northern and western Europe and have no known grave.</p>

    <p>It was designed by Sir Edward Maufe, the Commonwealth War Graves Commission’s Principal Architect for the UK after 1945. Thousands of relatives of those whose names are on the walls attended its unveiling by Queen Elizabeth II in 1953. </p>

    <p>It takes the form of a shrine and cloister. The shrine – or chapel - is a quiet place to think; the cloister carries the names of the missing. Their names are engraved on a series of stone ‘books’, open and bathed in the light from their windows.</p>

    <p>Richly decorated with carved, sculpted, painted and etched symbols of flight and the flying services, it’s a special place to remember those who died so we could be free.</p>

    <div class="inner">
        <video class="video-container" autoplay loop muted playsinline controls>
            <source src='http://ducknest.co.uk/noor-khan/wp-content/uploads/2020/video/Runnymede%20Memorial%20v1.0.mp4'>
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

        <div class="border"></div>
        <h5>FILM - RUNNYMEDE</h5>

    </div>
            <a onclick="window.history.go(-1); return false;" class="btn-back">
                <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
            </a>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>