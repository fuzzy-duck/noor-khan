<?php
/*
 * Template Name: SOE
 * Template Post Type: page
 */
?>

<?php get_header(); ?>
<main id="soe">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 3: Recruitment</p>
        <a href="<?php echo home_url(); ?>/chapter-03-recruitment/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>
    <section>
    <div class="tile">
        <div class="img"></div>
    </div>
    <h2>What was the SOE?</h2>
    <div class="border-dup"></div>
    <p>The Special Operations Executive, or SOE, was formed in July 1940 as an organisation conducting
    covert missions behind enemy lines. Its secret agents were tasked with performing acts of sabotage
    and subversion, co-ordinating networks of resistance fighters and transmitting information back to
    London via encoded radio messages.</p>
    <p>The SOE established branches in France, the Netherlands, Belgium, Norway, Denmark, Poland,
    Czechoslovakia, Yugoslavia, Greece, Italy and Southeast Asia, among others. France was the largest
    section, and by 1944 over 400 men and women had been sent there. Agents arrived by plane, boat
    and even submarine; many parachuted in under the cover of darkness.</p>
    <h5>The SOE established branches across the world.</h5>
    <div class="inner-tile">
        <div class="img"></div>
    </div>
    <p>Most agents were employed after their details were passed to recruitment officers. An officer
    would speak to the candidate and assess whether they were suitable for the SOE; the candidate
    would then have a week to consider whether they would be willing to join. If they agreed, they had
    to sign the Official Secrets Act – vowing to tell no one about the nature of their work.</p>

    <div class="border"></div>
    <div class="head">
    <h2 class="quote">"Set Europe<br/>ablaze!"</h2>
    <h5>Prime Minister Winston Churchill to the SOE</h5>
    </div>

    <p>From early 1942 the government allowed the SOE to use female agents, arguing that they would be
    less conspicuous than men when performing daily errands undercover, like shopping.</p>

    </section>

    <a href="<?php echo home_url(); ?>/chapter-03-recruitment/noor-signs-up/" class="btn-back">
        <button><span>Next</span><div class="icon-box"><div class="icon-fwd"></div></div></button>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>