
    <script>
    $(document).ready(function() {
        $('a .fancybox').fancybox({
            beforeShow : function() {
            this.title =  this.title + " - " + $(this.element).data("caption");
            }
        });
    });
    </script>

    <script>
        //Cookies.set('name', 'value', { expires: 1 });
    </script>

    <!-- Owl Carousel -->
    <script src="<?php echo get_stylesheet_directory_uri(). '/vendor/owl.carousel.min.js' ?>"></script>
    <script src="<?php echo get_stylesheet_directory_uri(). '/js/custom-owl.js' ?>"></script>

    <!-- AOS -->
    <script src="<?php echo get_stylesheet_directory_uri(). '/vendor/aos.js' ?>"></script>
    <script>AOS.init();</script>
</body>
</html>