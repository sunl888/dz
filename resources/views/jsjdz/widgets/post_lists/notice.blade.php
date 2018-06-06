<div class="garden-left col-lg-5 col-md-6 col-sm-6 col-xs-12">
    <div class="title-top">
        <div class="title-left">
            <h2 class="title-name">
                通知公告
                <span>/Notice Bulletin</span>
            </h2>
        </div>
        <div class="title-right">
            <a {!! $category->getPresenter()->linkAttribute() !!}>
                <img src="{!! cdn('jsjdz/images/zxzt-more.png') !!}" alt="">
            </a>
        </div>
    </div>
    <div class="notice-box">
        <ul id="listbox">
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