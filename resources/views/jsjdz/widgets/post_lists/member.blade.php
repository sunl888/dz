<div class="garden-right col-lg-7 col-md-6 col-sm-6 col-xs-12">
    <div class="title-top">
        <div class="title-left">
            <h2 class="title-name">
                优秀党员
                <span>/Excellent Party Member</span>
            </h2>
        </div>
        <div class="title-right">
            <a {!! $category->getPresenter()->linkAttribute() !!}>
                <img src="{!! cdn('jsjdz/images/zxzt-more.png') !!}" alt="">
            </a>
        </div>
    </div>
    <ul>
        @forelse($posts as $post)
            <li>
                <a href="{!! $post->getPresenter()->url() !!}" target="_blank" title="{!! $post->title !!}">
                    <div class="time">
                        <div class="day">{!! $post->published_at->format('d') !!}</div>
                        <div class="month">{!! month_convert($post->published_at->format('m')) !!}</div>
                    </div>
                    <div class="data">
                        <p class="data-title">{!! $post->title !!}</p>
                        <p class="explain">{!! $post->excerpt !!}</p>
                    </div>
                </a>
            </li>
        @empty
            <p class="no_data"></p>
        @endforelse
    </ul>
</div>