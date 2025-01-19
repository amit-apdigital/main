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
                <div class="listing">
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