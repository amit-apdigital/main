@include('partials._header')
<section>
    <div class="callout large">
        <div class="row column text-center">
            <h1>Search Videos</h1>

        </div>
    </div>

    <article class="grid-container">

        <div class="grid-x grid-margin-x">

            <div class="cell">
                <h3>Videos will go here.</h3>

                @foreach ($videos as $video)
                <div>
                    <h3>{{$video->title}}</h3>
                    <p>{{$video->description}}</p>
                    <p>{{$video->duration}}</p>
                    <p>{{$video->tags}}</p>
                </div>
                @endforeach

            </div>
        </div>        

    </article>
</section>

@include('partials._footer')