<div class="link">
    <div class="container">
        <div class="title-top">
            <div class="title-left">
                <h2 class="title-name">
                    友情链接
                    <span>/Links</span>
                </h2>
            </div>
            <div class="title-right">
                <a href="javascript:;">
                    <img src="{!! cdn('jsjdz/images/zxzt-more.png') !!}" alt="">
                </a>
            </div>
        </div>
        <div class="link-box">
            <ul>
                @forelse($links as $link)
                    <li>
                        <a href="{!! $link->url !!}" target="_blank">
                            <p>{!! $link->name !!}</p>
                        </a>
                    </li>
                @empty
                    <p class="no_data"></p>
                @endforelse
            </ul>
        </div>
    </div>
</div>