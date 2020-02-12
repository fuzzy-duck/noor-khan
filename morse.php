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
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 5: Mission</p>
        <a href="<?php echo home_url(); ?>/chapter-05-mission/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <div class="title">
        <div class="decoded">
            <div class="img animated zoomIn"></div>
        </div>
        <p>Well done! You cracked the code. <br>Now have a go tapping out a message on the key.</p>

        <a class="cheat-sheet-link" data-modal="modalOne"><div class="img"></div></a>
    </div>

    <div class="morse-foo">
        <div class="img"></div>
        <audio id="audio" src="http://www.soundjay.com/button/beep-07.wav" autostart="false" ></audio>
        <button onclick="PlaySound()" class="test-btn"></button>
        <script>
        function PlaySound() {
            var sound = document.getElementById("audio");
            sound.play()
        }
        </script>
        
        <div id="modalOne" class="modal">
        <div class="modal-content">
            <div class="contact-form">
                <a class="close"><span></span></a>
                    <div class="morse-cheat">
                        <div class="img"></div>
                    </div>
                </div>
            </div>
        </div>

        <script>
        
        var modalBtns = [...document.querySelectorAll(".cheat-sheet-link")];
            modalBtns.forEach(function(btn){
            btn.onclick = function() {
                var modal = btn.getAttribute('data-modal');
                document.getElementById(modal).style.display = "block";
            }
        });

        var closeBtns = [...document.querySelectorAll(".close")];
            closeBtns.forEach(function(btn){
            btn.onclick = function() {
                var modal = btn.closest('.modal');
                modal.style.display = "none";
            }
        });

        window.onclick = function(event) {
            if (event.target.className === "modal") {
                event.target.style.display = "none";
            }
        }
        </script>
        </div>

    </section>

    <a href="<?php echo home_url(); ?>/runnymede" class="nav-banner">
        <div class="content">
            <div class="img"></div>
            <div class="text">Return to Map</div>
        </div>
    </a>

</main>

<?php get_footer(); ?>