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

    <div class="carousel">
        <div class="owl-carousel owl-theme">
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="<?php bloginfo('template_directory');?>/assets/img/holiday.png"></a></div></div>
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="<?php bloginfo('template_directory');?>/assets/img/holiday.png"></a></div></div>
            <div class="item"><div class="img"><a class="zoom" class="fancybox" data-fancybox="gallery" data-caption="<div class='border'></div><br/><h5>This is the caption</h5><p>Credit goes here</p>" href="<?php bloginfo('template_directory');?>/assets/img/holiday.png"></a></div></div>
        </div>
    </div>

    <h2>Commonwealth Contribution</h2>
    <div class="border-dup"></div>
    
    <div class="tiles-grid">
        <div class="tile">
            <div class="img img-01"></div>
            <div class="text-01">
            <div class="info">
            <div class="text">
                    <div class="col">
                        <p></p>
                    </div>
                    <div class="col">
                        <p><span>15253</span></p>
                        <p> United Kingdom</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="tiles-grid">
        <div class="tile">
            <div class="text-02">
                <p><span>3,031</span></p>
                <p>Canadian</p>
            </div>
            <div class="img img-02"></div>
        </div>
    </div>

    <div class="tiles-grid">
        <div class="tile">
            <div class="img img-03"></div>
            <div class="text-03">
                <p><span>1,383</span></p>
                <p>Australian</p>
            </div>
        </div>
    </div>

    <div class="tiles-grid">
        <div class="tile">
            <div class="text-04">
                <p><span>573</span></p>
                <p>New Zeland</p>
            </div>
            <div class="img img-04"></div>
        </div>
    </div>

    <div class="tiles-grid">
        <div class="tile">
            <div class="img img-05"></div>
            <div class="text-05">
                <p><span>167</span></p>
                <p>South African</p>
            </div>
        </div>
    </div>

    <div class="tiles-grid">
        <div class="tile">
            <div class="text-06">
                <p><span>7</span></p>
                <p>Indian</p>
            </div>
            <div class="img img-06"></div>
        </div>
    </div>
    
    <!--

    <div class="info">
        <div class="text">
            <div class="col" data-aos="slide-left" data-aos-offset="0">
                <p>4</p>
                <p>10</p>
                <p>7</p>
                <p>9</p>
            </div>
            <div class="col" data-aos="slide-right" data-aos-offset="0">
                <p> Air Training Corps</p>
                <p> Air Transport Auxiliary</p>
                <p> British Overseas Airways Corporation</p>
                <p> Ferry Command</p>
            </div>
        </div>
    </div>

    <div class="bars">
        <div class="bg">
            <div class="bar" style="width: 40%;"><p>Rank</p><span style="margin-left: 30px">000</span></div> 
        </div>
        <div class="bg">
            <div class="bar" style="width: 2%; color: #FFC600;"><p>Rank</p><span>00</span></div>
        </div>
        <div class="bg">
            <div class="bar" style="width: 90%;"><p><span>000</span>Rank</p></div>
        </div>
        <div class="bg">
            <div class="bar" style="width: 18%;"><p><span>000</span></p></div>
        </div>
    </div>
    <div class="bars">
        <div class="bar-chart primary" data-total="76" animated>
            <span class="bar-chart--inner" style="width:76%;"><span class="bar-chart--text">00</span> <span class="bar-chart--text">Rank</span></span>
        </div>

        <div class="bar-chart secondary" data-total="42" animated>
            <span class="bar-chart--inner" style="width:42%;"><span class="bar-chart--text">00</span> <span class="bar-chart--text">Rank</span></span>
        </div>

        <div class="bar-chart tertiary" data-total="82" animated>
            <span class="bar-chart--inner" style="width:82%;"><span class="bar-chart--text">00</span> <span class="bar-chart--text">Rank</span></span>
        </div>

        <div class="bar-chart tertiary" data-total="42" animated>
            <span class="bar-chart--inner" style="width:42%;"><span class="bar-chart--text">00</span> <span class="bar-chart--text">Rank</span></span>
        </div>
    </div> -->

    <script>
    
    var app = {
        init: function(){
            this.cacheDOM();
            this.handleCharts();
        },
        cacheDOM: function(){
            this.$chart = $(".bar-chart");
        },
        cssSelectors: {
            chartBar: "bar-chart--inner"
        },
        handleCharts: function(){
            /* 
                iterate through charts and grab total value
                then apply that to the width of the inner bar
            */
            $.each(this.$chart, function(){
                var $this = $(this),
                        total = $this.data("total"),
                        $targetBar = $this.find("."+app.cssSelectors.chartBar);
                        $targetBar.css("width","0%"); // zero out for animation
                        setTimeout(function(){
                            $targetBar.css("width",total+"%");
                        },400);
            });
        }
    }

    app.init();

    </script>


    </section>

    <div class="barz">
        <h5>Number Died Commemorated Here</h5>

        <div class="bar-section">
            <div class="img"></div>
        </div>

        <h5 class="low">Total</h5>
        <h2>20,264</h2>

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
                    <span>9</span><p>SOE Agents</p>
                    <span>5</span><p>are women</p>
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
                <span>15</span>
                <div class="img img-01"></div>
            </div>
            <div class="col">
                <p>Oldest</p>
                <span>51</span>
                <div class="img img-02"></div>
            </div>
        </div>
        <div class="sub">
            <span>2,483</span><p>Under 21</p>
        </div>
        <div class="btm">

        </div>
    </div>

    <div class="info-btm">
        <div class="text">
                <span>14</span> <p>Women named on Runnymede</p>
                <span>39</span> <p>Different Ranks</p>
        </div>
    </div>


    <a href="<?php echo home_url(); ?>/runnymede" class="nav-banner">
        <div class="content">
            <div class="img"></div>
            <div class="text">Return to Map</div>
        </div>
    </a>

</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>