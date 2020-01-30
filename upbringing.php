<?php
/*
 * Template Name: Upbringing 
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="upbringing">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Before the war</p>
        <a href="<?php echo home_url(); ?>/chapter-02-before-the-war/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>
        <h2><?php the_title() ?></h2>
        <div class="border-dup"></div>
        <h5>Tap a hotspot to learn more<br/>About Noor's Heritage</h5>

        <div class="map">
            <div class="img">
                <div class="number button" data-modal="modalOne">1</div>
                <div class="number button" data-modal="modalTwo">2</div>
                <div class="number button" data-modal="modalThree">3</div>
                <div class="number button" data-modal="modalFour">4</div>
                <div class="number button" data-modal="modalFive">5</div>
                <div class="number button" data-modal="modalSix">6</div>

                <div id="modalOne" class="modal">
                    <div class="modal-content">
                        <div class="contact-form">
                        <a class="close"><span></span></a>
                        <h2>Moscow</h2>
                        <div class="border-white"></div>
                        <p>1st January 1914: Noor was born in Moscow, Russia, to an Indian father and
                            American mother.</p>
                        </div>
                    </div>
                </div>


                <div id="modalTwo" class="modal">
                    <div class="modal-content">
                        <div class="contact-form">
                        <a class="close"><span></span></a>
                        <h2>India</h2>
                        <div class="border-white"></div>
                        <p>Noor’s father was born into a family that ran a music academy in Vadodara, Gujarat, and grew into an accomplished musician. A Sufi teacher encouraged him to combine his music and his beliefs and tour the West sharing both.</p>
                        </div>
                    </div>
                </div>

                <div id="modalThree" class="modal">
                    <div class="modal-content">
                        <div class="contact-form">
                        <a class="close"><span></span></a>
                        <h2>San Francisco</h2>
                        <div class="border-white"></div>
                        <p>Noor’s parents had met at a religious retreat in San Francisco, USA. Her father
                        Hazrat was a Sufi Muslim preacher, a mystical branch of Islam that values innocence, honesty and
                        inward-looking reflection. Noor and her three siblings were raised in a very spiritual household.</p>
                        </div>
                    </div>
                </div>

                <div id="modalFour" class="modal">
                    <div class="modal-content">
                        <div class="contact-form">
                        <a class="close"><span></span></a>
                        <h2>Paris</h2>
                        <div class="border-white"></div>
                        <p>Noor’s family had to leave Moscow when political tensions worsened, so they moved to
                        Paris.</p>
                        </div>
                    </div>
                </div>

                <div id="modalFive" class="modal">
                    <div class="modal-content">
                        <div class="contact-form">
                        <a class="close"><span></span></a>
                        <h2>London</h2>
                        <div class="border-white"></div>
                        <p>However, when the First World War broke out in July 1914 the family fled to London.
                        Here Noor’s father founded the Sufi Order of England, and as a musician also performed at concerts.
                        But there was some suspicion of his Indian background, and the family were pressured to leave.</p>
                        </div>
                    </div>
                </div>

                <div id="modalSix" class="modal">
                    <div class="modal-content">
                        <div class="contact-form">
                        <a class="close"><span></span></a>
                        <h2>Paris</h2>
                        <div class="border-white"></div>
                        <p>In 1922, Noor’s family settled in a Paris suburb, overlooking the famous Eiffel Tower, Sacré Coeur and Notre Dame. Noor’s father called their home Fazal Manzil, ‘the house of blessing’. Noor became fluent in French at school.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <script>
        
        var modalBtns = [...document.querySelectorAll(".button")];
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

        <div class="head">
            <div class="border"></div>
            <h2 class="quote">“Everybody loved Nora”</h2>
            <h5>Friend Nancy Roberts</h5>
        </div>

        <p>Noor’s family was loving, and she was particularly close to her younger brother Vilayat. Their father
        would often sing them to sleep – and to wake them up! He taught his children that kindness and
        religious tolerance were very important. Noor was frequently described as a shy, quiet and
        thoughtful child, but she was also playful and strong-willed. One of her friends described her as
        having “a lively intelligence and sense of fun”.</p>

        <div class="head">
        <div class="border"></div>
            <h2 class="quote">“She combined strength with sweetness in her character”</h2>
            <h5>Historian MRD Foot</h5>
        </div>
    
    </section>

    <a href="<?php echo home_url(); ?>/chapter-02-before-the-war/an-artistic-life/" class="btn-back">
        <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>