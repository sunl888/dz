<!-- 导航 -->
<div class="nav">
    <div class="container">
        <ul class="nav-list">
            <li class="hid-nav{!! is_null($navigation->getActiveTopNav())?' active':'' !!}">
                <a href="{!! route('frontend.web.index')!!}">网站首页</a>
            </li>
            @foreach($allNav as $category)
                <li class="hid-nav{!! $category->is($navigation->getActiveTopNav())?' active':'' !!}">
                    <a {!! $category->getPresenter()->linkAttribute() !!}>{!! $category->cate_name !!}</a>
                    @if($category->hasChildren())
                        <ul class="sub-nav">
                            @foreach($category->children as $children)
                                <li>
                                    <a {!! $children->getPresenter()->linkAttribute() !!}>{!! $children->cate_name !!}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
</div>