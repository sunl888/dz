<div class="hand col-lg-4 hidden-md hidden-sm col-xs-12">
    <div class="title-top">
        <div class="title-left">
            <h2 class="title-name">手拉手心连心
                <span>/Hand in hand</span>
            </h2>
        </div>
        <div class="title-right">
            <a {!! $category->getPresenter()->linkAttribute() !!}>
                <img src="{!! cdn('jsjdz/images/jz-xs-more.png') !!}" alt="">
            </a>
        </div>
    </div>
    <div class="modular-box">
        <div class="modular-img">
            <div class="img-border"></div>
            <img src="{!! cdn('jsjdz/images/4.jpg') !!}" alt="">
        </div>
        <div class="box-list">
            <div class="mask-box"></div>
            <ul>
                @forelse($posts as $post)
                    <li>
                        <a href="{!! $post->getPresenter()->url() !!}" target="_blank" title="{!! $post->title !!}">
                            <p>{!! $post->title !!}</p>
                        </a>
                        <span>{!! $post->published_at->format('m/d') !!}</span>
                    </li>
                @empty
                    <p class="no_data"></p>
                @endforelse
            </ul>
        </div>
    </div>
</div>