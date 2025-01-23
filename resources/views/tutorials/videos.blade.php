@include('partials._header')
<section>

    <div class="grid-container">
        <div class="searchBar grid-x grid-padding-x">
            <div class="cell">
                <label>
                    <input type="text" placeholder="Enter kekeyword...">
                </label>
            </div>
        </div>
    </div>




    <article class="grid-container">
        <div class="directory grid-x grid-margin-x">

            <div class="leftColumn cell shrink">
                <div class="card-filters">
                    <ul class="mobile-card-filters vertical menu show-for-small-only" data-accordion-menu>
                        <li>
                            <a href="#">
                                <h2>Filters</h2>
                            </a>
                            <ul class="vertical menu" data-accordion-menu>
                                <li class="card-filters-tab">
                                    <a href="#">Tags</a>
                                    <ul class="categories-menu menu vertical nested">
                                        <a href="#" class="clear-all" id="category-clear-all">Clear All</a>
                                        <li><input class="category-clear-selection" id="category-checkbox1" type="checkbox"><label for="category-checkbox1">Category 1</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox2" type="checkbox"><label for="category-checkbox2">Category 2</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox3" type="checkbox"><label for="category-checkbox3">Category 3</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox4" type="checkbox"><label for="category-checkbox4">Category 4</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox5" type="checkbox"><label for="category-checkbox5">Category 5</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox6" type="checkbox"><label for="category-checkbox6">Category 6</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox7" type="checkbox"><label for="category-checkbox7">Category 7</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox8" type="checkbox"><label for="category-checkbox8">Category 8</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox9" type="checkbox"><label for="category-checkbox9">Category 9</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox10" type="checkbox"><label for="category-checkbox10">Category 10</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox11" type="checkbox"><label for="category-checkbox11">Category 11</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox12" type="checkbox"><label for="category-checkbox12">Category 12</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox13" type="checkbox"><label for="category-checkbox13">Category 13</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox14" type="checkbox"><label for="category-checkbox14">Category 14</label></li>
                                        <li><input class="category-clear-selection" id="category-checkbox15" type="checkbox"><label for="category-checkbox15">Category 15</label></li>
                                    </ul>
                                </li>
                                <li class="card-filters-tab">
                                    <a href="#">Upload Date</a>
                                    <ul class="categories-menu menu vertical nested">
                                        <a href="#" class="clear-all" id="size-clear-all">Clear All</a>
                                        <li><input id="size-checkbox1" type="checkbox"><label for="size-checkbox1">Small</label></li>
                                        <li><input id="size-checkbox2" type="checkbox"><label for="size-checkbox2">Medium</label></li>
                                        <li><input id="size-checkbox3" type="checkbox"><label for="size-checkbox3">Large</label></li>
                                        <li><input id="size-checkbox3" type="checkbox"><label for="size-checkbox3">X-Large</label></li>
                                        <li><input id="size-checkbox3" type="checkbox"><label for="size-checkbox3">XX-Large</label></li>
                                    </ul>

                                </li>
                                <li class="card-filters-tab">
                                    <a href="#">Features</a>
                                    <ul class="categories-menu menu vertical nested">
                                        <a href="#" class="clear-all" id="color-clear-all">Clear All</a>
                                        <li><input id="color-checkbox1" type="checkbox"><label for="color-checkbox1">All Color</label></li>
                                        <li><input id="color-checkbox2" type="checkbox"><label for="color-checkbox2">Black</label></li>
                                        <li><input id="color-checkbox3" type="checkbox"><label for="color-checkbox3">White</label></li>
                                        <li><input id="color-checkbox4" type="checkbox"><label for="color-checkbox4">Grey</label></li>
                                        <li><input id="color-checkbox5" type="checkbox"><label for="color-checkbox5">Red</label></li>
                                        <li><input id="color-checkbox6" type="checkbox"><label for="color-checkbox6">Blue</label></li>
                                        <li><input id="color-checkbox7" type="checkbox"><label for="color-checkbox7">Green</label></li>
                                        <li><input id="color-checkbox8" type="checkbox"><label for="color-checkbox8">Purple</label></li>
                                        <li><input id="color-checkbox8" type="checkbox"><label for="color-checkbox8">Multi-color</label></li>
                                    </ul>
                                </li>
                                <li class="card-filters-tab">
                                    <a href="#">Duration</a>
                                    <ul class="categories-menu menu vertical nested">
                                        <a href="#" class="clear-all" id="price-clear-all">Clear All</a>
                                        <li><input id="price-checkbox1" type="checkbox"><label for="price-checkbox1">Under $25</label></li>
                                        <li><input id="price-checkbox2" type="checkbox"><label for="price-checkbox2">$25–$50</label></li>
                                        <li><input id="price-checkbox3" type="checkbox"><label for="price-checkbox3">$50–$250</label></li>
                                        <li><input id="price-checkbox4" type="checkbox"><label for="price-checkbox4">$250–$600</label></li>
                                        <li><input id="price-checkbox4" type="checkbox"><label for="price-checkbox4">$600–$1,000</label></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <h1 class="card-filters-header hide-for-small-only">Filters</h1>
                    <ul class="vertical menu hide-for-small-only" data-accordion-menu>
                        <li class="card-filters-tab">
                            <a href="#">Tags</a>
                            <ul class="categories-menu menu vertical nested is-active">
                                <a href="#" class="clear-all" id="category-clear-all">Clear All</a>
                                <li><input id="category-checkbox1" type="checkbox"><label for="category-checkbox1">Category 1</label></li>
                                <li><input id="category-checkbox2" type="checkbox"><label for="category-checkbox2">Category 2</label></li>
                                <li><input id="category-checkbox3" type="checkbox"><label for="category-checkbox3">Category 3</label></li>
                                <li><input id="category-checkbox4" type="checkbox"><label for="category-checkbox4">Category 4</label></li>
                                <li><input id="category-checkbox5" type="checkbox"><label for="category-checkbox5">Category 5</label></li>
                                <li><input id="category-checkbox6" type="checkbox"><label for="category-checkbox6">Category 6</label></li>
                                <li><input id="category-checkbox7" type="checkbox"><label for="category-checkbox7">Category 7</label></li>
                                <li><input id="category-checkbox8" type="checkbox"><label for="category-checkbox8">Category 8</label></li>
                                <li><input id="category-checkbox9" type="checkbox"><label for="category-checkbox9">Category 9</label></li>
                                <li><input id="category-checkbox10" type="checkbox"><label for="category-checkbox10">Category 10</label></li>
                                <li><input id="category-checkbox11" type="checkbox"><label for="category-checkbox11">Category 11</label></li>
                                <li><input id="category-checkbox12" type="checkbox"><label for="category-checkbox12">Category 12</label></li>
                                <li><input id="category-checkbox13" type="checkbox"><label for="category-checkbox13">Category 13</label></li>
                                <li><input id="category-checkbox14" type="checkbox"><label for="category-checkbox14">Category 14</label></li>
                                <li><input id="category-checkbox15" type="checkbox"><label for="category-checkbox15">Category 15</label></li>
                            </ul>
                        </li>
                        <li class="card-filters-tab">
                            <a href="#">Upload Date</a>
                            <ul class="categories-menu menu vertical nested ">
                                <a href="#" class="clear-all" id="size-clear-all">Clear All</a>
                                <li><input id="size-checkbox1" type="checkbox"><label for="size-checkbox1">Small</label></li>
                                <li><input id="size-checkbox2" type="checkbox"><label for="size-checkbox2">Medium</label></li>
                                <li><input id="size-checkbox3" type="checkbox"><label for="size-checkbox3">Large</label></li>
                                <li><input id="size-checkbox3" type="checkbox"><label for="size-checkbox3">X-Large</label></li>
                                <li><input id="size-checkbox3" type="checkbox"><label for="size-checkbox3">XX-Large</label></li>
                            </ul>
                        </li>
                        <li class="card-filters-tab">
                            <a href="#">Features</a>
                            <ul class="categories-menu menu vertical nested">
                                <a href="#" class="clear-all" id="color-clear-all">Clear All</a>
                                <li><input id="color-checkbox1" type="checkbox"><label for="color-checkbox1">All Color</label></li>
                                <li><input id="color-checkbox2" type="checkbox"><label for="color-checkbox2">Black</label></li>
                                <li><input id="color-checkbox3" type="checkbox"><label for="color-checkbox3">White</label></li>
                                <li><input id="color-checkbox4" type="checkbox"><label for="color-checkbox4">Grey</label></li>
                                <li><input id="color-checkbox5" type="checkbox"><label for="color-checkbox5">Red</label></li>
                                <li><input id="color-checkbox6" type="checkbox"><label for="color-checkbox6">Blue</label></li>
                                <li><input id="color-checkbox7" type="checkbox"><label for="color-checkbox7">Green</label></li>
                                <li><input id="color-checkbox8" type="checkbox"><label for="color-checkbox8">Purple</label></li>
                                <li><input id="color-checkbox8" type="checkbox"><label for="color-checkbox8">Multi-color</label></li>
                            </ul>
                        </li>
                        <li class="card-filters-tab">
                            <a href="#">Duration</a>
                            <ul class="categories-menu menu vertical nested">
                                <a href="#" class="clear-all" id="price-clear-all">Clear All</a>
                                <li><input id="price-checkbox1" type="checkbox"><label for="price-checkbox1">Under $25</label></li>
                                <li><input id="price-checkbox2" type="checkbox"><label for="price-checkbox2">$25–$50</label></li>
                                <li><input id="price-checkbox3" type="checkbox"><label for="price-checkbox3">$50–$250</label></li>
                                <li><input id="price-checkbox4" type="checkbox"><label for="price-checkbox4">$250–$600</label></li>
                                <li><input id="price-checkbox4" type="checkbox"><label for="price-checkbox4">$600–$1,000</label></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="rightColumn cell auto">
                <div class="results grid-x grid-margin-x">
                    @foreach ($videos as $video)

                    <div class="listing cell shrink">
                        <div class="card">
                            <div class="card-thumbnail">
                                <a href="{{$video->url}}" target="_blank"><img src="https://img.youtube.com/vi/{{$video->youTubeId}}/0.jpg" /></a>
                            </div>
                            <h2 class="card-title"><a href="#">{{$video->title}}</a></h2>
                            <span class="card-desc">{{$video->description}}</span>
                            <span class="card-duration">{{$video->duration}}</span>
                            <div class="card-colors">
                                <button href="#" class="card-color-option">{{$video->tags}}</button>
                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>

    </article>
</section>

@include('partials._footer')