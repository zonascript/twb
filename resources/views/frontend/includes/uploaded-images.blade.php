<div class="uk-child-width-1-3 uk-grid-small uk-margin" uk-grid>
    @if (count($user->coloringImages) > 0)
        @foreach($user->coloringImages as $image)
            <div>
                <div class="twb-color">
                    <a class="uk-cover-container thumb" onclick="zoomGallery(this)">
                        <img src="{!! asset($image->file_path) !!}" alt="Tini Wini Biti" uk-cover>
                    </a>
                    <div class="info uk-margin-small-top">
                        <h6 class="uk-margin-remove uk-text-uppercase">{{ $image->title }}</h6>
                        <div class="person"><strong>{{ $image->user_name }}</strong>, {{ getAge($image->user_birthdate) }}, {{ $image->user_city }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div><p>Tidak ada data.</p></div>
    @endif
</div>
{{--<ul class="uk-pagination twb-pagination" uk-margin>--}}
{{--<li><a href="#"><span uk-pagination-previous></span></a></li>--}}
{{--<li><a href="#">1</a></li>--}}
{{--<li><a href="#">4</a></li>--}}
{{--<li><a href="#">5</a></li>--}}
{{--<li><a href="#">6</a></li>--}}
{{--<li class="uk-active"><span>7</span></li>--}}
{{--<li><a href="#">8</a></li>--}}
{{--<li><a href="#">9</a></li>--}}
{{--<li><a href="#">10</a></li>--}}
{{--<li><a href="#">20</a></li>--}}
{{--<li><a href="#"><span uk-pagination-next></span></a></li>--}}
{{--</ul>--}}

{{--<div class="uk-position-top-right">--}}
{{--<a href="{!! url('/seru-mewarnai') !!}" class="uk-button uk-button-small uk-button-default" title="Upload Baru">UPLOAD BARU</a>--}}
{{--</div>--}}