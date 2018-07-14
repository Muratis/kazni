


<div class="brd">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3 class="brd-h3">НОВОСТИ</h3>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <span class="bd"></span>
        </div>
    </div>
</div>
<section class="container" id="blog">
    <div class="row">
    <div class=" js-masonry"  data-masonry-options='{ "columnWidth": 10, "itemSelector": ".item" }' >
    @foreach($news as $article)

        @include('/blog/preview', array('article' => $article))

    @endforeach

</div>
    </div>
    <div class="row">
        <div class="pag">
            {{  $news->links() }}
        </div>

    </div>

</section>


