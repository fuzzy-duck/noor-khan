<?php
/*
 * Template Name: Becoming an agent
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="becoming">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat Khan</h3>
            <h5><span>A</span> Women <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Training</p>
        <div class="pg-nav">

        </div>
        <p class="pg-num">4 / 6</p>
    </div>

    <section>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Noor was sent to several training schools to learn the technical, tactical and physical skills required for undercover work.</p>
    <h6>Tap a number to reveal more.</h6>

    <div class="map">
        <div class="map-bg">
            <div class="number button" data-modal="modalOne">1</div>
            <div class="number button" data-modal="modalTwo">2</div>
            <div class="number button" data-modal="modalThree">3</div>

            <div id="text">
            <h2>Wanborough Manor, Surrey</h2>
            <div class="border-white"></div>
            <p>This was one of 41 aristocratic homes across England and Scotland taken over by the SOE to prepare
            agents.<br><br> Here the emphasis was on physical and military training: Noor was taught how to shoot,
            throw grenades and handle explosives, as well as map-reading, assembling Allied and German
            weapons, and transmitting in Morse code. <br><br>Agents were closely watched to see how they behaved
            when they drank alcohol, whether they gambled – as they carried large sums of money undercover –
            and even whether they talked in their sleep.</p>
            </div>

            <script>
            function changeText() {
                document.getElementById("text").innerHTML = '';
            }
            </script>
        
        <!-- 
            <div id="modalOne" class="modal">
                <div class="modal-content">
                    <div class="contact-form">
                    <a class="close"><span></span></a>
                    <h2>Wanborough Manor, Surrey</h2>
                    <div class="border-white"></div>
                    <p>This was one of 41 aristocratic homes across England and Scotland taken over by the SOE to prepare
                    agents.<br><br> Here the emphasis was on physical and military training: Noor was taught how to shoot,
                    throw grenades and handle explosives, as well as map-reading, assembling Allied and German
                    weapons, and transmitting in Morse code. <br><br>Agents were closely watched to see how they behaved
                    when they drank alcohol, whether they gambled – as they carried large sums of money undercover –
                    and even whether they talked in their sleep.</p>
                    </div>
                </div>
            </div>
        -->

            <div id="modalTwo" class="modal">
                <div class="modal-content">
                    <div class="contact-form">
                    <a class="close"><span></span></a>
                    <h2>Thame Park, Oxfordshire</h2>
                    <div class="border-white"></div>
                    <p>In March 1943 Noor was sent here for specialist signals training. She was the first woman ever to
                    be selected for this course.</p>
                    <h6>Agents learnt about:</h6>
                    <ul>
                        <li>The mechanics of their wireless set – how it worked and how to repair it</li>
                        <li>Wavelengths, radio jamming and atmospherics – bad weather could garble Morse messages</li>
                        <li>How to hide radio sets and set up aerials – ideally in attic apartments, where aerials could be unobserved and avoided radio interference</li>
                        <li>How to transmit messages quickly – the Nazi secret police, known as the Gestapo, had radio detection vans that patrolled the streets, narrowing down the location of an agent’s radio</li>
                        <li>The different types of code used by the SOE to send messages securely</li>
                        <li>How to incorporate personalised security checks into their radio transmissions, to warn home station if they were captured</li>
                    </ul>
                    </div>
                </div>
            </div>

            <div id="modalThree" class="modal">
                <div class="modal-content">
                    <div class="contact-form">
                    <a class="close"><span></span></a>
                    <h2>Beaulieu, New Forest, Hampshire</h2>
                    <div class="border-white"></div>
                    <p>Known as ‘The Finishing School’, Beaulieu taught recruits how to survive behind enemy lines, including:</p>
                        <ul>
                            <li>Recognising enemy units and different elements of the police and security services</li>
                            <li>Working out whether you were being followed and how to evade enemy agents</li>
                            <li>How to act when being searched or questioned</li>
                            <li>Contacting a source and passing messages</li>
                            <li>Housebreaking and burglary</li>
                            <li>Acting like a French person, from table manners and local slang to fashion and hairstyles</li>
                            <li>The way of life and latest regulations in Occupied France, such as curfew times, rationing and types of identity card</li>
                        </ul>
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
        <h2 class="quote">“To live happily is to live hidden.”</h2>
        <h5>Motto of Beaulieu Training School</h5>
    </div>

    <div class="border-white"></div>
        <div class="links-inline">
            <a onclick="window.history.go(-1); return false;" class="btn-back">
                <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
            </a>
            <a href="<?php echo home_url(); ?>/chapter-04-training/struggles-doubts/" class="btn-back">
                <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
            </a>
        </div>

    </section>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>