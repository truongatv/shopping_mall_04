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
        <a href="" class=" text-muted edit-comment" id="{{ $comment->comment_id }}"><i class="fa fa-pencil"></i></a>
        <a href="{{ action('CommentController@destroy', $comment->comment_id) }}" class="delete-comment text-muted"> <i class="fa fa-trash"></i></a>
        <a href="" class=" text-muted reply-comment" id="{{ $comment->comment_id }}">{{ trans('comment.reply') }}</a>
        @endif
        </span>
        <span class="text-muted"><small><em>{{ $comment->created_at }}</em></small></span>
        <div id='content-comment' data-content-comment = "{{ $comment->content }}"></div>
        <p id="content-comment{{ $comment->comment_id }}">{{ $comment->content }}</p>
        {!! Form::open() !!}
            <div class="urlreplycomment" data-route="{{ url('replyComment') }}"></div>
            {!! Form::hidden('user_reply_id', Auth::user()->id, [
                'id' => 'user_reply_id',
            ]) !!}

            {!! Form::hidden('comment_id', $comment["comment_id"], [
                'id' => 'comment_parent_id',
            ]) !!}
        {!! Form::close() !!}
        @if ($comment->replies)
            <div id="reply-comment-aria{{ $comment->comment_id  }}">
            </div>
            <div id="before-reply-comment{{ $comment->comment_id }}"></div>
            @foreach($comment->replies as $rep1)
                <div id='location-comment{{ $rep1->comment_id }}' class="reply">
                    <div class="media">
                        <a href="javascript:void(0)" class="pull-left">
                        {{ Html::image(($rep1->user->avatar_image_link) ? '/assets/uploads/' . $rep1->user->avatar_image_link : config('settings.avatar_default_path'), trans('title.this-is-avatar'), ['class' => 'customer-avatar ',]) }}
                        </a>
                        <a href="">
                            <strong>{{ $rep1->user->name }}</strong>
                        </a><br>
                        <span class="text-muted pull-right">
                        @if (auth()->check() && (Auth::user()->id == $rep1->user_id))
                        <a href="" class=" text-muted edit-comment" id="{{ $rep1->comment_id }}"> <i class="fa fa-pencil"></i></a>
                        <a href="{{ action('CommentController@destroy', $rep1->comment_id) }}" class="delete-comment text-muted"> <i class="fa fa-trash"></i></a>
                        @endif
                        </span>
                        <span class="text-muted"><small><em>{{ $rep1->created_at }}</em></small></span>
                        <div id='content-comment' data-content-comment = "{{ $rep1->content }}"></div>
                        <p id="content-comment{{ $rep1->comment_id }}">{{ $rep1->content }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
