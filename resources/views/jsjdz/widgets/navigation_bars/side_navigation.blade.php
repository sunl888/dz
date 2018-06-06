<div class="left-nav col-lg-3 col-md-4 col-sm-6 col-xs-12">
    <ul>
        @foreach($navigation->getActiveChildrenNav() as $childNav)
            <li @if($childNav->equals($navigation->getActiveNav()))class="active"@endif>
                <a {!! $childNav->getPresenter()->linkAttribute() !!}>{!! $childNav->cate_name !!}</a>
            </li>
        @endforeach
    </ul>
</div>