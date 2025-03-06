@include('partials._header')
<section>
    @include('partials._hero_slider_home')
    <article class="headlineText grid-container full ">
        <div class="grid-container ">
            <div class="grid-x grid-padding-x grid-padding-y">
                <div class="cell small-6-auto">
                    <p>Custom IT business solutions</p>
                </div>
            </div>
    </article>
    <article class="consultancy grid-container full ">
        <div class="grid-container">
            <div class="grid-x grid-padding-x grid-padding-y">
                <div class="cell small-6">
                    <a data-link="/portfolio" id="consultancy" class="consult changePage"><img src="/images/consultancy-1.png" title="Consultancy" /></a>
                </div>
                <div class="cell small-6 vertically-centred">
                    <p>Improve business performance,reduce overheads and increasing that all important profit margin.</p>
                    <p>Affordable solutions for your business whether its its early stages or already established. </p>
                </div>
            </div>
        </div>
    </article>
    <article class="development grid-container full">
        <div class="grid-container">
            <div class="grid-x grid-padding-x">
                <div class="cell small-6 vertically-centred">
                    <a id="development"></a>
                    <h2>TIGHT BUDGET? NO WORRIES!</h2>
                    <p>Why pay expensive ongoing monthly fees for software features you dont need?</p>
                    <p>We can work together with you and take your business software needs to new heights.</p>
                </div>
                <div class="cell small-6">
                    <a data-link="/portfolio" class="devapp changePage"><img src="/images/development.jpg" title="Development" /></a>
                </div>
            </div>
        </div>
    </article>
</section>
@include('partials._footer')