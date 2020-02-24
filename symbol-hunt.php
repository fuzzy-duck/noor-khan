<?php
/*
 * Template Name: Symbol Hunt
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="symbol">
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

    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto corrupti dignissimos ducimus doloremque!</p>

    <h5>Tap an image to find out more.</h5>
    <h5>Tap the tick when you’ve found it!</h5>

    <form class="grid">

        <div class="box">
            <div class="img" data-modal="modalOne"></div>
            <input type="checkbox" id="checkbox-1">
            <label for="checkbox-1"></label>
        </div>
        <div class="box">
            <div class="img" data-modal="modalTwo"></div>
            <input type="checkbox" id="checkbox-2">
            <label for="checkbox-2"></label>
        </div>
        <div class="box">
            <div class="img" data-modal="modalThree"></div>
            <input type="checkbox" id="checkbox-3">
            <label for="checkbox-3"></label>
        </div>
        <div class="box">
            <div class="img" data-modal="modalFour"></div>
            <input type="checkbox" id="checkbox-4">
            <label for="checkbox-4"></label>
        </div>
        <div class="box">
            <div class="img" data-modal="modalFive"></div>
            <input type="checkbox" id="checkbox-5">
            <label for="checkbox-5"></label>
        </div>
        <div class="box">
            <div class="img" data-modal="modalSix"></div>
            <input type="checkbox" id="checkbox-6">
            <label for="checkbox-6"></label>
        </div>
        <div class="box">
            <div class="img" data-modal="modalSeven"></div>
            <input type="checkbox" id="checkbox-7">
            <label for="checkbox-7"></label>
        </div>
        <div class="box">
            <div class="img" data-modal="modalEight"></div>
            <input type="checkbox" id="checkbox-8">
            <label for="checkbox-8"></label>
        </div>
        <div class="box">
            <div class="img" data-modal="modalNine"></div>
            <input type="checkbox" id="checkbox-9">
            <label for="checkbox-9"></label>
        </div>
        <div class="box">
            <div class="img" data-modal="modalTen"></div>
            <input type="checkbox" id="checkbox-10">
            <label for="checkbox-10"></label>
        </div>

    </form>

    <!-- Models -->
    <div id="modalOne" class="modal">
        <div class="modal-content">
            <div class="contact-form">
            <a class="close"><span></span></a>
            <h2>Astral crown</h2>
            <div class="border-white"></div>
            <p>This crown is a symbol of the air force, having both wings and stars – the two most well-known symbols for flight and the sky. Stars are everywhere in this memorial: how many places can you find them?</p>
            </div>
        </div>
    </div>

    <div id="modalTwo" class="modal">
        <div class="modal-content">
            <div class="contact-form">
            <a class="close"><span></span></a>
            <h2>RAF badge</h2>
            <div class="border-white"></div>
            <p>Esmond Burton sculpted this version of the badge of the RAF, an eagle across a circlet surmounted by the British Royal crown. An eagle is a large, powerful bird that flies high and hunts prey. It is often associated with war, but also with strength and bravery.</p>
            </div>
        </div>
    </div>

    <div id="modalThree" class="modal">
        <div class="modal-content">
            <div class="contact-form">
            <a class="close"><span></span></a>
            <h2>Compass</h2>
            <div class="border-white"></div>
            <p>This is a compass rose: a shape that tells us the cardinal directions (north, south, east, west) relative to where we are. It reminds us of the importance of finding your way, as a flier, but also that the people remembered here came from all over the world, and that they died in many different places.</p>
            </div>
        </div>
    </div>

    <div id="modalFour" class="modal">
        <div class="modal-content">
            <div class="contact-form">
            <a class="close"><span></span></a>
            <h2>Contrails</h2>
            <div class="border-white"></div>
            <p>Remembering the contrails (vapour trails) that fighter planes made in the skies of southern England as they fought the Battle of Britain, John Hutton etched permanent contrails into the Great North Window.</p>
            </div>
        </div>
    </div>

    <div id="modalFive" class="modal">
        <div class="modal-content">
            <div class="contact-form">
            <a class="close"><span></span></a>
            <h2>Dove</h2>
            <div class="border-white"></div>
            <p>This dove was sculpted by Esmond Burton. Doves often symbolise love or peace. Several sculptures, paintings and etchings in this memorial have wings, as the building is dedicated to men and women of the flying services. How many sets of wings are there in this room alone?</p>
            </div>
        </div>
    </div>

    <div id="modalSix" class="modal">
        <div class="modal-content">
            <div class="contact-form">
            <a class="close"><span></span></a>
            <h2>Seal</h2>
            <div class="border-white"></div>
            <p>This is seal shows a leek, a symbol of Wales, one of the countries that make up the United Kingdom. Can you find the seals for the other three countries? What symbols are used for them?</p>
            </div>
        </div>
    </div>

    <div id="modalSeven" class="modal">
        <div class="modal-content">
            <div class="contact-form">
            <a class="close"><span></span></a>
            <h2>Door Lion</h2>
            <div class="border-white"></div>
            <p>These lions, made of nickel, are stylised versions of the lions in the Royal Arms of the United Kingdom. They symbolise the Queen who is the head of the Commonwealth, and this is a memorial to men and women of the Commonwealth.</p>
            </div>
        </div>
    </div>

    <div id="modalEight" class="modal">
        <div class="modal-content">
            <div class="contact-form">
            <a class="close"><span></span></a>
            <h2>Night Sky</h2>
            <div class="border-white"></div>
            <p>Many of the airmen commemorated here knew the night sky best of all. They flew bombing missions at night or flew night fighters to protect Britain from enemy bombers. The moon and its light were a huge part of war-time night flying, and the ceiling painting by Alix Stone here in the shrine reminds us of these airmen and their experience of war.</p>
            </div>
        </div>
    </div>

    <div id="modalNine" class="modal">
        <div class="modal-content">
            <div class="contact-form">
            <a class="close"><span></span></a>
            <h2>Coat of Arms</h2>
            <div class="border-white"></div>
            <p>Coats of Arms are painted on the ceiling of the cloisters to represent all the member governments of the CWGC. Each coat of arms is full of symbols connected to the country in question. This one represents India, using the ancient Lion Capital of Ashoka, a great Indian emperor. The four lions symbolise the ‘Four Noble Truths’ of Buddhism. Look for the wheel beneath them: a version of the ‘wheel of law’ you will also find on the Indian flag. The ribbon reads ‘truth alone triumphs’, India’s motto.</p>
            </div>
        </div>
    </div>

    <div id="modalTen" class="modal">
        <div class="modal-content">
            <div class="contact-form">
            <a class="close"><span></span></a>
            <h2>Shell</h2>
            <div class="border-white"></div>
            <p>At this memorial, shells symbolise immortality – living forever. Names are carved on the ‘books’ above the shells so that the people named can live forever in our memories.</p>
            </div>
        </div>
    </div>

    <script>
        
        var modalBtns = [...document.querySelectorAll(".img")];
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

    </section>

</main>

<a onclick="window.history.go(-1); return false;" class="btn-back">
        <button><div class="icon-box"><div class="icon-bk"></div></div><span>Back</span></button>
    </a>


<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>