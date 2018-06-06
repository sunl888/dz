@extends(THEME_NP.'.layouts.app')

@section('keywords'){!! $page->getKeywords() !!}@endsection
@section('description'){!! $page->getDescription() !!}@endsection
@section('title'){!! $page->title !!}@endsection

@section('content')

    @include(THEME_NP.'.layouts.particals.header')

    @widget('navigation_bar', ['view'=>'navigation_bars.navigation_bar'])

    <!-- banner -->
    <div class="banner-img">
        <div class="title">
            <div class="mask"></div>
            <h2>{!! $category->cate_name !!}</h2>
        </div>
    </div>

    <div class="list-box">
        <div class="container">
            <!-- 侧边导航 -->
            @widget('navigation_bar', ['view'=>'navigation_bars.side_navigation'])
            <!-- 列表内容 -->
            <div class="right-list col-lg-9 col-md-8 col-sm-6 col-xs-12">
                <!-- 面包屑导航 -->
                {{ Breadcrumbs::render('category', $category) }}

                <div class="page-data">
                    <h2>{!! $page->title !!}</h2>
                    <div class="content">
                        {!! $page->postContent->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include(THEME_NP.'.layouts.particals.footer')
@endsection

@push('js')
    <script type="text/javascript" src="{!! cdn('jsjdz/lib/slick/slick.min.js') !!}"></script>
    <script>
        // 子导航
        $('.hid-nav').hover(function () {
            $(this).find('.sub-nav').stop().slideToggle(300);
        }, function () {
            $(this).find('.sub-nav').stop().slideToggle(300);
        });
    </script>
@endpush