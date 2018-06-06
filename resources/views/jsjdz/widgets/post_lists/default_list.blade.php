<ul class="list">
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
{!! $posts->fragment('list')->links() !!}