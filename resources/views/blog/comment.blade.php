{{--<input type="hidden" name="post_id" value="{{$comment->comment_id}}">--}}
<div class="comment">
    <div class="nameCreat">

        <p class="userComn">
           Оставил: {{$comment->name_users}}
        </p>
    </div>
    <hr>

    <div class="txtComment">
        <p>
            {{$comment->text_comment}}
        </p>
    </div>

</div>
{{--{{ $comment->text_comment}}--}}
{{--{{$comment->created_at}}--}}

