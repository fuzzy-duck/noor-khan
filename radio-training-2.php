<?php
/*
 * Template Name: Radio Training 2
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="radio-game">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="header-bg">
        <div class="overlay"></div>
        <div class="morse-msg"><div class="img"></div></div>
        <a class="cheat-sheet-link" data-modal="modalOne"><div class="img"></div></a>
    </div>

    <div class="fixed-nav">
        <p class="pg-title">Mission</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">5 / 6</p>
    </div>

    <section>

    <div class="content">
        <h5>Transcribe the message</h5>

        <p id="ratefeld"></p>
        <form name="rateformular">
        <input name="ratezeichen" type="text" size="5" maxlength="1" placeholder="Guess your letter">
        <input name="ratebutton" type="button" value="Guess" onClick="pruefeZeichen()">

        <p id="gerateneBuchstaben">Wrong Letters:<br></p>

    </div>

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

    <div class="links">
        <a href="<?php echo home_url(); ?>/noor-khan/chapter-05-mission/morse-test/" class="btn-link"><button><span>Next</span><div class="icon-box"><div class="icon"></div></div></button></a>
    </div>


    <div class="border-white"></div>
        <div class="links-inline">
            <a onclick="window.history.go(-1); return false;" class="btn-back">
                <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
            </a>
        </div>


    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>