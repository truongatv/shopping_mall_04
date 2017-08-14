@if ($comments->count())
<div class="row bootstrap snippets">
    <div class="col-md-12 col-md-offset-0 col-sm-12">
        <div class="comment-wrapper">
            <div class="panel panel-info">
                <div class="panel-heading">
                    {{ trans('title.comment') }}
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                    <div id = "edit-comment-aria"></div>
                    <div id = "comment2"></div>
                        @foreach ($comments as $comment)
                        <div id='location-comment{{ $comment->comment_id }}'>
                            <li class="media">
                                <span class="text-muted pull-right">
                                    @if (auth()->check() && (Auth::user()->id == $comment->user_id))
                                        <p>{{ trans('auth.edit') }}</p>
                                    @endif
                                </span>
                                <div class="media-body">
                                    <div id='content-comment' data-content-comment = "{{ $comment->content }}"></div>
                                    <strong class="text-success">{{ $comment->user->name }}</strong>
                                    <p id="content-comment{{ $comment->id }}">{{ $comment->content }}</p>
                                </div>
                            </li>
                        </div>
                        @endforeach
                    </ul>
                    <div class="col-md-12">{{ $comments->links() }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
