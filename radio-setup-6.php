<?php
/*
 * Template Name: Radio Setup 6
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<main id="radio-setup-6">
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
            <h3 class="animated fadeInDownBig">Step 2</h5>
            <h3 class="sub animated fadeInDownBig delay-1s">Plug in the headphones</h3>
            <div class="bg-plug">
                <div class="img animated fadeInDownBig delay-2s"></div>
            </div>

            <svg id="svg" class="animated fadeInUpBig delay-2s"> 
            <path class="path" /> 
            <image id="draggable" class="handle ui-widget-content" xlink:href="<?php bloginfo('template_directory');?>/assets/img/plug.png" width="60px" height="60px" cx="0" cy="0" r="8" viewBox="0 0 4288 2848" preserveAspectRatio="xMidYMid slice"><circle  id="draggable" class="handle ui-widget-content" cx="0" cy="0" r="8" /></image>3 
                <circle class="handle" cx="0" cy="0" r="8" />
            </svg>
            
            <div id="droppable" class="ui-widget-header">
            </div>

        <script>

            // Amount to offset control points
            var bezierWeight = 0.675;

            var handles = document.querySelectorAll(".handle");
            var path = document.querySelector(".path");

            TweenLite.set(handles[0], { x: 320, y: 550 });
            TweenLite.set(handles[1], { x: 190, y: 400 });

            Draggable.create(handles, {
            onDrag: updatePath
            });

            updatePath();

            function updatePath() {
                
            var x1 = handles[0]._gsTransform.x;
            var y1 = handles[0]._gsTransform.y;
            
            var x4 = handles[1]._gsTransform.x;
            var y4 = handles[1]._gsTransform.y;
            
            var dx = Math.abs(x4 - x1) * bezierWeight;
            
            var x2 = x1 - dx;
            var x3 = x4 + dx;
            
            var data = `M${x1} ${y1} C ${x2} ${y1} ${x3} ${y4} ${x4} ${y4}`;
            
            path.setAttribute("d", data);
            }
        </script>

        <script>
        $( function() {
            $( "#draggable, #draggable-nonvalid" ).draggable();
            $( "#droppable" ).droppable({
            accept: "#draggable",
            classes: {
                "ui-droppable-active": "ui-state-active",
                "ui-droppable-hover": "ui-state-hover"
            },
            drop: function( event, ui ) {
                $( this )
                .console.log("foo")
                .addClass( "ui-state-highlight" )
                .find( "p" )
                    .html( "Dropped!" );
            }
            });
        } );
        </script>

        <div class="headphones animated fadeInUpBig delay-2s">
            <div class="img"></div>
        </div>

        <!--
        <div class="links">
            <a href="<?php echo home_url(); ?>#" class="btn-link"><button data-aos="fade-in" data-aos-delay="2000"><span>Next</span><div class="icon-box"><div class="icon"></div></div></button></a>
        </div>
        -->

    </section>
</main>

<div id="turn"><?php include ("turn.php"); ?></div>

<?php get_footer(); ?>