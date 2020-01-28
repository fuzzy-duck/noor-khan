<?php
/*
 * Template Name: Morse Code
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="morse">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Noor Inayat Khan</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">1 / 6</p>
    </div>

    <section>

    <div class="title">
        <h5>S.O.E Assignment</h5>
        <h2>WELL DONE!</h2>
        <p>You cracked the code.<br>
        Now have a go tapping out a message on the key.</p>
    </div>

    <div class="morse-foo">
        <div class="img"></div>
        <audio id="audio" src="http://www.soundjay.com/button/beep-07.wav" autostart="false" ></audio>
        <a> <button onclick="PlaySound()" class="test-btn"></button></a>
        <script>
        function PlaySound() {
            var sound = document.getElementById("audio");
            sound.play()
        }
        </script>
    </div>


    <div class="border-white"></div>
            <div class="links-inline">
                <a onclick="window.history.go(-1); return false;" class="btn-back">
                    <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
                </a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>