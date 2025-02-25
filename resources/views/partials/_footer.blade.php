<footer>
    <div class="grid-container fluid">
        <div class="grid-x social">
            <div>
                <ul class="social">
                    <li><a href="https://www.youtube.com/@apdigitalasia" class="youtube" target="_blank"></a></li>
                    <li><a href="https://www.linkedin.com/company/apdigitalasia/" class="linkedin" target="_blank"></a></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
        </div>
        <div class="grid-x links">
            <div class="cell auto">
                <ul class="menu">
                    @include('partials._navigation_left')
                    @include('partials._navigation_right')
                    <li>
                        <a class="changePage" data-link="/privacy-policy">Privacy Policy</a>
                    </li>
                    <li class="contact">
                        <a class="changePage" data-link="/contact">Contact</a>
                    </li>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/snap.svg/0.5.1/snap.svg.js" integrity="sha512-2B4yJ2DGhmYITzY51PcSK5pxQilqi1Cl3wgI8dq8phWjbVAw9SmcaTZp+QsSCdV/xKkxttyYolU0usNNG1ICbQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

        //More (Expand) or Less (Collapse)
        jQuery('.categories-menu.menu.nested').each(function() {
            var filterAmount = $(this).find('li').length;
            if (filterAmount > 5) {
                jQuery('li', this).eq(4).nextAll().hide().addClass('toggleable');
                jQuery(this).append('<li class="more">More</li>');
            }
        });

        jQuery('.categories-menu.menu.nested').on('click', '.more', function() {
            if (jQuery(this).hasClass('less')) {
                jQuery(this).text('More').removeClass('less');
            } else {
                jQuery(this).text('Less').addClass('less');
            }
            jQuery(this).siblings('li.toggleable').slideToggle();
        });





    });
</script>

</body>

</html>