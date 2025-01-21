@include('partials._header')
<section>
    <div class="callout large">
        <div class="row column text-center">
            <h1>Search Videos</h1>

        </div>
    </div>

    <article class="grid-container">

        <div class="directory grid-x grid-margin-x">

            <div class="cell">

                @foreach ($videos as $video)

                <div class="product-card">
                    <div class="product-card-thumbnail">
                        <a href="{{$video->title}}"><img src="{{$video->title}}" /></a>
                    </div>
                    <h2 class="product-card-title"><a href="#">{{$video->title}}</a></h2>
                    <span class="product-card-desc">{{$video->description}}</span>
                    <span class="product-card-price">{{$video->duration}}</span>
                    <div class="product-card-colors">
                        <button href="#" class="product-card-color-option">$video->tags</button>
                    </div>
                </div>






                @endforeach

            </div>
        </div>

    </article>
</section>

@include('partials._footer')