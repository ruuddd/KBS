<div class="col-md-4">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
</div>



<div class="col-md-4">
    <script type="text/javascript">
        function slideSwitch() {
            var $active = $('#slideshow div.active');

            if ($active.length == 0)
                $active = $('#slideshow div:last');

            var $next = $active.next().length ? $active.next()
                    : $('#slideshow div:first');

            $active.addClass('last-active');

            $next.css({opacity: 0.0})
                    .addClass('active')
                    .animate({opacity: 1.0}, 1000, function () {
                        $active.removeClass('active last-active');
                    });
        }

        $(function () {
            setInterval("slideSwitch()", 6000);
        });
    </script>

    <div id="slideshow">
        <div class="slide active"><a href="http://www.zelf-een-site-maken.nl"><img
                    src="http://www.zelf-een-site-maken.nl/slideshow/frankrijk1.jpg" alt="Slideshow Image 1" /></a></div>
        <div class="slide"><a href="http://www.zelf-een-site-maken.nl"><img
                    src="http://www.zelf-een-site-maken.nl/slideshow/frankrijk2.jpg" alt="Slideshow Image 2" /></a></div>
        <div class="slide"><a href="http://www.zelf-een-site-maken.nl"><img
                    src="http://www.zelf-een-site-maken.nl/slideshow/frankrijk3.jpg" alt="Slideshow Image 3" /></a></div>
    </div>
</div>



<div class="col-md-4">
    <h2>Heading</h2>
    <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
</div>