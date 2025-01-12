<footer>
    <div class="grid-container fluid">
        <div class="grid-x">
            <div>
                <ul class="social">
                    <li><a href="https://www.youtube.com/@apdigitaltraining" class="social youtube" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/company/apdigitalasia/" class="social linkedin-square" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="grid-x">
            <div class="cell auto">
                <ul class="menu">
                    @include('partials._navigation_left')
                    @include('partials._navigation_right')
                </ul>
            </div>
            <div class="cell auto">
                <ul class="copyright">
                <li class="text-right">Copyright 2024</li>
                </ul>
            </div>
        </div>
    </div>

    </div>
</footer>
<div id="preloader">

    <div class="panel-1 panel"></div>
    <div class="panel-2 panel"></div>

</div>


<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js"></script>
<script>
    $(document).foundation();
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg-min.js" integrity="sha512-Gk+uNk8NWN235mIkS6B7/424TsDuPDaoAsUekJCKTWLKP6wlaPv+PBGfO7dbvZeibVPGW+mYidz0vL0XaWwz4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('js/app.js') }}"></script>

<script>
    function openScreen(panelName) {

        cssClassName = '.' + panelName;
        jQuery(cssClassName).parent().removeAttr('style');
        jQuery(cssClassName).animate({
            width: "-=50vw",
            opacity: 0
        }, 750, function() {
            console.log(cssClassName);
            jQuery(cssClassName).parent().css("height", "0");
        });

    }

    function closeScreen(panelName) {
        cssClassName = '.' + panelName;
        jQuery(cssClassName).parent().removeAttr('style');
        jQuery(cssClassName).animate({
            width: "+=50vw",
            opacity: 1
        }, 750, function() {
            console.log(cssClassName);
            window.location.href = url; //relative to domain
        });

    }

    jQuery(document).ready(function() {
        // All Pages
        selector = "." + jQuery("#currentPage").val();
        openScreen("panel-1");
        openScreen("panel-2");
        jQuery(selector).addClass("selected");

        jQuery(".changePage ").on("click", function() {
            url = jQuery(this).attr("data-link");
            closeScreen("panel-1", url);
            closeScreen("panel-2");
        });

        // Home Page
        jQuery(".cd-btn.devapp ").on("click", function() {
            jQuery(".cd-slider-navigation li:nth-child(1) a").click();
        });

        jQuery(".cd-btn.learn ").on("click", function() {
            jQuery(".cd-slider-navigation li:nth-child(2) a").click();
        });

        jQuery(".cd-btn.consult ").on("click", function() {
            jQuery(".cd-slider-navigation li:nth-child(3) a").click();
        });

        // Tutorials Page
        jQuery(".cd-btn.video").on("click", function() {
            jQuery(".cd-slider-navigation li:nth-child(1) a").click();
        });

        //        jQuery(".cd-btn.learn ").on("click", function() {
        //            jQuery(".cd-slider-navigation li:nth-child(2) a").click();            
        //        });

        jQuery(".cd-btn.articles").on("click", function() {
            jQuery(".cd-slider-navigation li:nth-child(3) a").click();
        });

        // Portfolio Page
        jQuery(".cd-btn.webAndApplications").on("click", function() {
            jQuery(".cd-slider-navigation li:nth-child(1) a").click();
        });

        //        jQuery(".cd-btn.learn ").on("click", function() {
        //            jQuery(".cd-slider-navigation li:nth-child(2) a").click();            
        //        });

        jQuery(".cd-btn.infrastructure").on("click", function() {
            jQuery(".cd-slider-navigation li:nth-child(3) a").click();
        });





        // Contact Page
        jQuery(".cd-btn.collaboration ").on("click", function() {
            jQuery(".cd-slider-navigation li:nth-child(1) a").click();
        });

        //        jQuery(".cd-btn.learn ").on("click", function() {
        //            jQuery(".cd-slider-navigation li:nth-child(2) a").click();            
        //        });

        jQuery(".cd-btn.developmentAndConsultancy ").on("click", function() {
            jQuery(".cd-slider-navigation li:nth-child(3) a").click();
        });




    });
</script>

</body>

</html>