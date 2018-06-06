@extends(THEME_NP.'.layouts.app')

@section('keywords'){!! $post->getKeywords() !!}@endsection
@section('description'){!! $post->getDescription() !!}@endsection
@section('title'){!! $post->title !!}@endsection

@section('content')
    @include(THEME_NP.'.layouts.particals.header')

    @widget('navigation_bar', ['view'=>'navigation_bars.navigation_bar'])

    <!-- 文章详情 -->
    <div class="article-box">
        <div class="container content">
            <!-- 面包屑导航 -->
        {!! Breadcrumbs::render('post', $post) !!}

        <!-- 正文 -->
            <div class="data-title">
                <h2>{!! $post->title !!}</h2>
                <p class="info">
                    <span>{!! $post->published_at!!}</span>
                    <span>{!! $post->views_count !!} 人阅读</span>
                    <span>来源：{!! isset($post->user->nick_name)?$post->user->nick_name:$post->user->user_name !!}</span>
                </p>
            </div>
            <div class="body">
                {!! $post->postContent->content !!}
            </div>
        </div>
    </div>
    @include(THEME_NP.'.layouts.particals.footer')
@endsection