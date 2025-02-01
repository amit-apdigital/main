@include('partials._header')
<section>

    @include('partials._hero_slider_portfolio')

    <article class="grid-container fluid white-bg">
        <div class="ecommerce-product-slider orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
            <ul class="orbit-container">
                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                <li class="is-active orbit-slide">
                    <div class="grid-x small-up-2 medium-up-4 large-up-5 align-center">
                        <div class="cell">
                            <div class="product-card">
                                <div class="product-card-thumbnail">
                                    <a href="#"><img src="/images/portfolio/client-1.png" /></a>
                                </div>
                                <h2 class="product-card-title"><a href="#">Product Name</a></h2>

                            </div>
                        </div>
                        <div class="cell">
                            <div class="product-card">
                                <div class="product-card-thumbnail">
                                    <a href="#"><img src="/images/portfolio/client-1.png" /></a>
                                </div>
                                <h2 class="product-card-title"><a href="#">Product Name</a></h2>

                            </div>
                        </div>
                        <div class="cell hide-for-small-only">
                            <div class="product-card">
                                <div class="product-card-thumbnail">
                                    <a href="#"><img src="/images/portfolio/client-1.png" /></a>
                                </div>
                                <h2 class="product-card-title"><a href="#">Product Name</a></h2>
                            </div>
                        </div>
                        <div class="cell show-for-large">
                            <div class="product-card">
                                <div class="product-card-thumbnail">
                                    <a href="#"><img src="/images/portfolio/client-1.png" /></a>
                                </div>
                                <h2 class="product-card-title"><a href="#">Product Name</a></h2>

                            </div>
                        </div>
                        <div class="cell show-for-large">
                            <div class="product-card">
                                <div class="product-card-thumbnail">
                                    <a href="#"><img src="/images/portfolio/client-1.png" /></a>
                                </div>
                                <h2 class="product-card-title"><a href="#">Product Name</a></h2>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="is-active orbit-slide">
                    <div class="grid-x small-up-2 medium-up-4 large-up-5 align-center">
                        <div class="cell">
                            <div class="product-card">
                                <div class="product-card-thumbnail">
                                    <a href="#"><img src="/images/portfolio/client-1.png" /></a>
                                </div>
                                <h2 class="product-card-title"><a href="#">Product Name</a></h2>

                            </div>
                        </div>
                        <div class="cell">
                            <div class="product-card">
                                <div class="product-card-thumbnail">
                                    <a href="#"><img src="/images/portfolio/client-1.png" /></a>
                                </div>
                                <h2 class="product-card-title"><a href="#">Product Name</a></h2>

                            </div>
                        </div>
                        <div class="cell hide-for-small-only">
                            <div class="product-card">
                                <div class="product-card-thumbnail">
                                    <a href="#"><img src="/images/portfolio/client-1.png" /></a>
                                </div>
                                <h2 class="product-card-title"><a href="#">Product Name</a></h2>

                            </div>
                        </div>
                        <div class="cell show-for-large">
                            <div class="product-card">
                                <div class="product-card-thumbnail">
                                    <a href="#"><img src="/images/portfolio/client-1.png" /></a>
                                </div>
                                <h2 class="product-card-title"><a href="#">Product Name</a></h2>

                            </div>
                        </div>
                        <div class="cell show-for-large">
                            <div class="product-card">
                                <div class="product-card-thumbnail">
                                    <a href="#"><img src="/images/portfolio/client-1.png" /></a>
                                </div>
                                <h2 class="product-card-title"><a href="#">Product Name</a></h2>

                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <nav class="orbit-bullets">
                <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
            </nav>
        </div>



    </article>
</section>

<!-- Dimple Radia -->

<div class="full reveal" id="dimpleradia" data-reveal>

    <div class="grid-x">
        <div class="medium-auto">
            <h3>Dimple Radia</h3>
            <p>Dr. Dimple Radia is a registered dietitian with a research background in body composition and weight management. She has delivered weight management services for adults and children within the NHS and private sector at a strategic and clinical level. </p>
        </div>
    </div>
    <div class="grid-x">
        <div class="medium-auto cell">
            <img class="thumbnail" src="/images/portfolio/client-1.png" alt=""><br />
            <img class="thumbnail" src="/images/portfolio/client-1-1.png" alt="">
        </div>
    </div>



    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>


<!-- conferenceWebsite -->

<div class="full reveal" id="conferenceWebsite" data-reveal>

    <div class="grid-x">
        <div class="medium-auto">
            <h3>Conference Website</h3>
            <p>Lorem Ipsum</p>
        </div>
    </div>
    <div class="grid-x">
        <div class="medium-auto cell">
            <img class="thumbnail" src="" alt=""><br />
            <img class="thumbnail" src="" alt="">
        </div>
    </div>



    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>




@include('partials._footer')