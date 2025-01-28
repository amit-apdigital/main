@include('partials._header')
<section>

    @include('partials._hero_slider_home')

    <article class="consultancy grid-container full ">
        <div class="grid-container">

            <div class="grid-x grid-padding-x grid-padding-y">
                <div class="cell small-6">
                    <a class="cd-btn consult"><img src="/images/consultancy.jpg" title="Consultancy" /></a>
                </div>
                <div class="cell small-6">
                    <h2>LETS STEP UP YOUR BUSINESS IT SOLUTIONS</h2>
                    <p>We can design, develop, and implement end to end custom IT business solutions to improve business performance and reduce overheads, increasing that all important profit margin.</p>
                    <p>We offer affordable, straightforward solutions for your business whether its its early stages or already well established. </p>
                </div>
            </div>
        </div>
    </article>
    <article class="development grid-container full">
        <div class="grid-container">
            <div class="grid-x grid-padding-x grid-padding-y">
                <div class="cell small-6">
                    <h2>TIGHT BUDGET?<br />NO WORRIES!</h2>
                    <p>Why pay expensive ongoing monthly fees for software features you dont need?</p>
                    <p>We can  work together with you  and take your business software needs to new heights.</p>
                </div>
                <div class="cell small-6">
                    <a class="cd-btn devapp"><img src="/images/development.jpg" title="Development" /></a>

                </div>
            </div>
        </div>
    </article>
</section>






@include('partials._footer')