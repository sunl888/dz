<div class="special">
    <div class="container" s>
        <div class="title-top">
            <div class="title-left">
                <h2 class="title-name">
                    最新专题
                    <span>/Special</span>
                </h2>
            </div>
            <div class="title-right">
                <a href="javascript:;" target="_blank">
                    <img src="{!! cdn('jsjdz/images/zxzt-more.png') !!}" alt="">
                </a>
            </div>
        </div>
        <div class="special-box">
            @forelse($links as $link)
                <div class="item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <a href="{!! $link->url !!}" title="{!! $link->name !!}" target="_blank">
                        <img src="{!! image_url($link->logo) !!}" alt="">
                    </a>
                </div>
            @empty
                <p class="no_data"></p>
            @endforelse
        </div>
    </div>
</div>