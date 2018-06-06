<!-- 轮播图 -->
<div class="banner big" id="banner">
    @foreach($banners as $banner)
        <div>
            <a href="{!! $banner->url !!}" target="_blank">
                <img src="{!! image_url($banner->image) !!}">
                <div class="text">
                    <div class="mask"></div>
                    <h2>{{ $banner->title or '' }}</h2>
                </div>
            </a>
        </div>
    @endforeach
</div>