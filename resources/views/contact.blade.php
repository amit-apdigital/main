@include('partials._header')
<section>

    @include('partials._hero_slider_contact')

    <article class="grid-container fluid">
    </article>
</section>

<div class="full reveal" id="contactform" data-reveal>

    <div class="grid-x">
        <div class="small-6 cell">
            <div class="contact-col">
                <form>
                    <label for="email">Email address</label>
                    <input type="email" id="email" placeholder="Email">
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Name">
                    <label for="msg">Your Message</label>
                    <textarea id="msg" rows="5" placeholder="Message"></textarea>
                    <button type="button" class="button primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <div class="grid-x">
        <div class="cell small-6 white-bg">
            <h1>Lets Learn!</h1>
        </div>

        <div class="intro grid-x">
            <div class="medium-6 cell small-order-2 medium-order-1">
                <p>E mail : <a href="mailto:amit@apdigital.asia">amit@apdigital.asia</a></p>
                <p>Phone India : +91 991 362 5249</p>
                <p>Phone UK : +44 7477 464 060</p>

            </div>
        </div>
    </div>



    <button class="close-button" data-close aria-label="Close reveal" type="button">
        <span aria-hidden="true">&times;</span>
    </button>
</div>




@include('partials._footer')