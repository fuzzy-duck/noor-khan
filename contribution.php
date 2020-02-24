<?php
/*
 * Template Name: Contribution
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="contribution">
    <header>
        <a href="<?php echo home_url(); ?>/home" class="title">
            <h3>Noor Inayat-Khan</h3>
            <h5><span>A</span> Woman <span>of</span> Conspicuous Courage</h5>
        </a>
        <?php include ("nav.php"); ?>
    </header>
    <div class="fixed-nav">
        <p class="pg-title">Chapter 1: <br>Noor Inayat-Khan</p>
        <a href="<?php echo home_url(); ?>/chapter-01-who-was-noor-inayat-khan/" class="pg-alt-bk">
            <div class="img"></div>
        </a>
    </div>

    <section>

    <div class="border"></div>

    <div class="head">
        <h2 class="quote">“They fought from Britain and for Britain, but in doing so they were fighting for their own countries and for the cause of world freedom.”</h2>
        <h5>1953 Memorial Register Introduction</h5>
    </div>

    <h2>Commonwealth Contribution</h2>
    <div class="border-dup"></div>

    <p>Like Noor, thousands of people from outside the Commonwealth volunteered to join the fight against Nazism, serving in British or Commonwealth units like those named here.</p>
    
    <div class="tiles-grid">
        <div class="tile">
            <div class="img img-01" data-aos="slide-right" data-aos-offset="50"></div>
            <div class="text-01">
            <div class="info">
            <div class="text">
                    <div class="col">
                        <p></p>
                    </div>
                    <div class="col" data-aos="slide-left" data-aos-offset="50">
                        <p><span class='numscroller' data-min='1' data-max='15253' data-delay='5' data-increment='100'>15,253</span></p>
                        <p> United Kingdom</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="tiles-grid">
        <div class="tile">
            <div class="text-02" data-aos="slide-right" data-aos-offset="150">
                <p><span class='numscroller' data-min='1' data-max='3031' data-delay='5' data-increment='10'>3,031</span></p>
                <p>Canadian</p>
            </div>
            <div class="img img-02" data-aos="slide-left" data-aos-offset="150"></div>
        </div>
    </div>

    <div class="tiles-grid">
        <div class="tile">
            <div class="img img-03" data-aos="slide-right" data-aos-offset="100"></div>
            <div class="text-03" data-aos="slide-left" data-aos-offset="100">
                <p><span class='numscroller' data-min='1' data-max='1383' data-delay='5' data-increment='10'>1,383</span></p>
                <p>Australian</p>
            </div>
        </div>
    </div>

    <div class="tiles-grid">
        <div class="tile">
            <div class="text-04" data-aos="slide-right" data-aos-offset="100">
                <p><span class='numscroller' data-min='1' data-max='573' data-delay='5' data-increment='10'>573</span></p>
                <p>New Zealand</p>
            </div>
            <div class="img img-04" data-aos="slide-left" data-aos-offset="100"></div>
        </div>
    </div>

    <div class="tiles-grid">
        <div class="tile">
            <div class="img img-05" data-aos="slide-right" data-aos-offset="100"></div>
            <div class="text-05" data-aos="slide-left" data-aos-offset="100">
                <p><span class='numscroller' data-min='1' data-max='167' data-delay='2' data-increment='10'>167</span></p>
                <p>South African</p>
            </div>
        </div>
    </div>

    <div class="tiles-grid">
        <div class="tile">
            <div class="text-06" data-aos="slide-right" data-aos-offset="100">
                <p><span class='numscroller' data-min='1' data-max='7' data-delay='1' data-increment='1'>7</span></p>
                <p>Indian</p>
            </div>
            <div class="img img-06" data-aos="slide-left" data-aos-offset="100"></div>
        </div>
    </div>

    </section>

    <div class="barz">
        <h5>Number of missing commemorated here by year of death</h5>

        <div class="bar-section">
            <div class="img"></div>
        </div>

        <h5 class="low">Total</h5>
        <h2 class='numscroller' data-min='1' data-max='20264' data-delay='2' data-increment='100'>20,264</h2>

    </div>

    <section>

    <div class="tiles-grid foo">
        <div class="tile">
            <div class="img img-07"></div>
            <div class="text-01">
            <div class="info">
            <div class="text">
                    <div class="col">
    
                    </div>
                    <div class="col">
                    <span class='numscroller' data-min='1' data-max='9' data-delay='1' data-increment='2'>9</span><p>SOE Agents</p>
                    <span class='numscroller' data-min='1' data-max='5' data-delay='1' data-increment='1'>5</span><p>are women</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    </section>

    <div class="vert-bars">
        <div class="grid">
            <div class="col">
                <p>Youngest</p>
                <span class='numscroller' data-min='1' data-max='15' data-delay='1' data-increment='1'>15</span>
            </div>
            <div class="col">
                <p>Oldest</p>
                <span class='numscroller' data-min='1' data-max='51' data-delay='1' data-increment='5'>51</span>
            </div>
        </div>
        <div class="sub">
            <span class='numscroller' data-min='1' data-max='2483' data-delay='5' data-increment='10'>2,483</span><p>Under 21</p>
        </div>
        <div class="btm">

        </div>
    </div>

    <a href="<?php echo home_url(); ?>/intro/raf-eagle/" class="nav-banner">
        <div class="content">
            <div class="text">Go to Chapter 2</div>
            <div class="img"></div>
        </div>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>