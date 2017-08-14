<div id='location-comment{{ $comment->comment_id }}'>
    <div class="media">
        <a href="javascript:void(0)" class="pull-left">
        {{ Html::image(($comment->user->avatar_image_link) ? '/assets/uploads/' . $comment->user->avatar_image_link : config('settings.avatar_default_path'), trans('title.this-is-avatar'), ['class' => 'customer-avatar ',]) }}
        </a>
        <a href="">
            <strong>{{ $comment->user->name }}</strong>
        </a><br>
        <span class="text-muted pull-right">
        @if (auth()->check() && (Auth::user()->id == $comment->user_id))
        <a href="" class=" text-muted edit-comment" id="{{ $comment->comment_id }}"> <i class="fa fa-pencil"></i></a>
        <a href="{{ action('CommentController@destroy', $comment->comment_id) }}" class="delete-comment text-muted"> <i class="fa fa-trash"></i></a>
        @endif
        </span>
        <span class="text-muted"><small><em>{{ $comment->created_at }}</em></small></span>
        <div id='content-comment' data-content-comment = "{{ $comment->content }}"></div>
        <p id="content-comment{{ $comment->comment_id }}">{{ $comment->content }}</p>
    </div>
</div>
