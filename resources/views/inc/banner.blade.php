<div class="banner">
    <div class="banner-slides" >
        @foreach($banner as $key => $baner)
        <div class="banner-slide-item" id="bannerid{{$key}}">
            <div class="banner-main-img">
                <div class="over-lay"></div>
                <img src="/storage/img/{{$baner->wallpaper}}" alt="" style="width: 100vw;">
            </div>
            <div class="banner-main-content">
                <div class="banner-main-l">
                    <span class="badge bg-danger">New</span>
                    <p class="main-name"><a href="{{ route('detail', ['id' => $baner->slug ])}}" class="a-w">{{ Str::substr($baner->title, 0, 14) }} </a></p>
                    <small class="main-desc">
                        {{ Str::substr($baner->content, 0, 200) }} ...
                    </small>
                    <b class="main-genres">Thể loại: </b> @foreach ($baner->genres as $item) {{ $item->name }} |@endforeach
                    <div class="main-rating d-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" style="margin-right: 10px;">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <p>{{$baner->imdb}} /</p>
                        <p style="color: white;"> 10</p>
                    </div>
                    <div class="main-btn">
                        <div class="btn btn-danger">
                            <a href="{{ route('detail', ['id' => $baner->slug ])}}" class="a-w">Xem ngay</a>
                        </div>
                        <div class="btn btn-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16" style="margin-right: 10px;">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                            </svg>
                            <a href="/" class="a-w">Xem sau</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </div>
    <div class="banner-main-r d-flex align-items-end">
        <div class="main-navi">
            <div class="" id="prev" onclick="prevSlide()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>
            </div>
            <div class="" id="next" onclick="nextSlide()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                </svg>
            </div>
        </div>

        <div class="main-mini-carts">
            @foreach($banner as $key => $ban)
            <div class="main-mini-cart" id="posterid{{$key}}">
                <img src="/storage/img/{{$ban->poster}}" alt="">
                <div class="mini-cart-content"><a href="" class="a-w">{{ Str::substr($ban->title, 0, 20) }}</a></div>
            </div>
            @endforeach
        </div>
    </div>

</div>