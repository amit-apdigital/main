@include('partials._header')
<section>

    @include('partials._hero_slider_home')

    <article class="consultancy grid-container full ">
        <div class="grid-container">

            <div class="grid-x grid-padding-x grid-padding-y">
                <div class="cell small-6-auto">
                    <a data-link="/portfolio" id="consultancy" class="cd-btn consult changePage"><img src="/images/consultancy.jpg" title="Consultancy" /></a>
                    <h2 style="position: relative;top: -120px;background: rgba(255, 255, 255, 0.25);display: inline;padding: 1rem;">LETS STEP UP YOUR BUSINESS IT SOLUTIONS</h2>
                </div>
                <div class="cell small-6-auto">
                    <p>We can design, develop, and implement end to end custom IT business solutions to improve business performance and reduce overheads, increasing that all important profit margin.</p>
                    <p>We offer affordable, straightforward solutions for your business whether its its early stages or already well established. </p>
                </div>
            </div>
        </div>
    </article>
    <article class="development grid-container full">
        <div class="grid-container">
            <div class="grid-x grid-padding-x grid-padding-y">
                <div class="cell small-6-auto">
                    <a id="development"></a>
                    <h2>TIGHT BUDGET? NO WORRIES!</h2>
                    <p>Why pay expensive ongoing monthly fees for software features you dont need?</p>
                    <p>We can work together with you and take your business software needs to new heights.</p>
                </div>
                <div class="cell small-6-auto">
                    <a data-link="/portfolio" class="cd-btn devapp changePage"><img src="/images/development.jpg" title="Development" /></a>

                </div>
            </div>
        </div>
    </article>
</section>






@include('partials._footer')