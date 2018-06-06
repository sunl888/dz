@extends(THEME_NP.'.layouts.app')

@section('keywords'){{ setting('default_keywords') }}@endsection
@section('description'){{ setting('default_description') }}@endsection
@section('title'){{ setting('site_name') }}@endsection

@section('content')

    @include(THEME_NP.'.layouts.particals.header')

    @widget('navigation_bar', ['view'=>'navigation_bars.navigation_bar'])

    @widget('banner', ['view'=>'banners.banner','type'=>'home_banner'])

    @widget('post_list', ['category'=>'新闻动态','limit'=>14,'view'=>'post_lists.news'])

    @include(THEME_NP.'.layouts.particals.splitter_bar')

    <!-- 通知公告 优秀党员 -->
    <div class="garden">
        <div class="container">
            @widget('post_list', ['category'=>'通知公告','limit'=>20,'view'=>'post_lists.notice'])
            @widget('post_list', ['category'=>'优秀党员','limit'=>5,'view'=>'post_lists.member'])
        </div>
    </div>

    <!-- 特色模块 -->
    <div class="modular">
        <div class="mask"></div>
        <div class="container">
            @widget('post_list', ['category'=>'理论导航','limit'=>6,'view'=>'post_lists.bulletin'])
            @widget('post_list', ['category'=>'主题实践','limit'=>6,'view'=>'post_lists.practice'])
            @widget('post_list', ['category'=>'手拉手心连心','limit'=>6,'view'=>'post_lists.hand'])
        </div>
    </div>

    <!-- 最新专题 -->
    @widget('link', ['type'=>'special','limit'=>3,'view'=>'links.special'])
    <!-- 友情链接 -->
    @widget('link', ['type'=>'friendship','limit'=>9,'view'=>'links.default'])

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
        // 通知公告
        $(function () {
            var $notice = $('#listbox');
            setInterval(function () {
                $notice.animate({
                    top: '-37px'
                }, 300, function () {
                    $notice.append($notice.children().first());
                    $notice.css('top', 0);
                })
            }, 3000)
        });
        // 轮播图
        $(function () {
            var $banner = $("#banner");
            if ($banner.children().length == 0)
                return;
            $banner.slick({
                dots: true,
                infinite: true,
                centerMode: true,
                variableWidth: true,
                autoplay: true,
                autoplaySpeed: 5000,
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: true
            });

            var $envBanner = $('#env_banner');
            if ($envBanner.children().length == 0)
                return;
            $envBanner.slick({
                dots: true,
                infinite: true,
                centerMode: true,
                variableWidth: true,
                autoplay: false,
                autoplaySpeed: 5000,
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: true
            });
            $envBannerTitle = $('#env_banner_title');
            setEnvCurrentText();
            $envBanner.on('afterChange', function (event, slick, currentSlide) {
                setEnvCurrentText();
            });

            function setEnvCurrentText() {
                var $currentText = $envBanner.find('.slick-current .text');
                $envBannerTitle.html($currentText.html());
            }
        })
    </script>
@endpush