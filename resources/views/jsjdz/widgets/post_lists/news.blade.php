<!-- 新闻动态 -->
<div class="news">
    <div class="container">
        <div class="title-top">
            <div class="title-left">
                <h2 class="title-name">
                    新闻动态
                    <span>/News</span>
                </h2>
            </div>
            <div class="title-right">
                <a {!! $category->getPresenter()->linkAttribute() !!}>
                    <img src="{!! cdn('jsjdz/images/zxzt-more.png') !!}" alt="">
                </a>
            </div>
        </div>
        <div class="news-box">
            <div class="news-box-left col-md-6 col-lg-6 col-sm-6 hidden-xs">
                <div class="news-imgs">
                    <div class="banner big" id="env_banner">
                        @forelse($posts->take(4) as $post)
                            <div>
                                <a href="{!! $post->getPresenter()->url() !!}" target="_blank">
                                    <div class="img-box">
                                        <img src="{!! image_url($post->cover) !!}">
                                    </div>
                                    <div class="text">
                                        <h2>{!! $post->title !!}</h2>
                                    </div>
                                </a>
                            </div>
                            @php
                                $posts->shift();
                            @endphp
                        @empty
                            <p class="no_data"></p>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="news-box-right col-md-6 col-lg-6 col-sm-6 col-xs-12">
                <ul>
                    @forelse($posts as $post)
                        <li>
                            <a href="{!! $post->getPresenter()->url() !!}" title="{!! $post->title !!}" target="_blank">
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
</div>
