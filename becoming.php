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
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 4: <br>Training</p>
        <a href="<?php echo home_url(); ?>/chapter-04-training/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <h2><?php the_title() ?></h2>
    <div class="border-dup"></div>

    <p>Noor was sent to several training schools to learn the technical, tactical and physical skills required for undercover work.</p>
    <h6>Tap a number to reveal more.</h6>

    <div class="map">
        <div class="map-bg">
            <div class="number button showSingle" target="1" type="button" value="Click">1</div>
            <div class="number button showSingle" target="3" type="button" value="Click">3</div>
            <div class="number button showSingle" target="2" type="button" value="Click">2</div>
        </div>
    </div>

    <div class="info">
        <div id="target1" class="map-target" style="display:none">
            <h2>Wanborough Manor, Surrey</h2>
            <div class="border-dup"></div>
            <p>This was one of 41 aristocratic homes across England and Scotland taken over by the SOE to prepare
            agents.<br><br> Here the emphasis was on physical and military training: Noor was taught how to shoot,
            throw grenades and handle explosives, as well as map-reading, assembling Allied and German
            weapons, and transmitting in Morse code. <br><br>Agents were closely watched to see how they behaved
            when they drank alcohol, whether they gambled – as they carried large sums of money undercover –
            and even whether they talked in their sleep.</p>
        </div>
        <div id="target2" class="map-target" style="display:none">
            <h2>Thame Park, Oxfordshire</h2>
            <div class="border-dup"></div>
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
        <div id="target3" class="map-target" style="display:none">
            <h2>Beaulieu, New Forest, Hampshire</h2>
            <div class="border-dup"></div>
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

    <script>
        jQuery(function(){
            jQuery('.showSingle').click(function(){
                jQuery('.map-target').hide();
                jQuery('#target'+$(this).attr('target')).show();
            });
        });
    </script>

    <div class="head">
        <h2 class="quote">“To live happily is to live hidden.”</h2>
        <h5>Motto of Beaulieu Training School</h5>
    </div>

    </section>

    <a href="<?php echo home_url(); ?>/chapter-04-training/struggles-doubts/" class="btn-back">
        <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>