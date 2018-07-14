<div id="blog-section" class="item" >

<figure class="overlay">
    <a href="/blog/{{$article->post_id}}">
        <img src="/{{$article->preview_image}}">
    </a>
</figure>
    <div class="meta">
        <div class="date_article">{{$article->created_at->toDateString()}}</div>
        <div class="comments_article">
            <a href="/blog/{{$article->post_id}}#comments" title="Comments">
                <i class="fa fa-comments" ></i> {{$article->comments}}</a>
        </div>
    </div>

    <div class="content_article">
        <h4>
            <a href="/blog/{{$article->post_id}}">{{$article->title}} </a>
        </h4>
        <p>
            {{$article->preview_text}}
        </p>
    </div>





</div>