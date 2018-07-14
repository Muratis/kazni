

<section id="portfolio">
    <div class="brd">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="brd-h3">ПОРТФОЛИО</h3>
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


    <div class="container">
        <div class="row">

        @foreach($portfolios as $project)
                <div class="portfolio_item col-md-4 col-sm-6 col-xs-12">
                    <div class="item_container">
                        <img src="/{{$project->meta_project_image}}" >
                        <div class="item_meta">
                            <div class="date_item_portfolio">
                                {{$project->created_at->format('Y')}}
                            </div>
                            <h3>{{$project->title}}</h3>

                            <p>
                                {{$project->meta_project}}
                            </p>

                            <a href="/portfolio/{{$project->id}}" class="detail_portfolio">Просмотреть</a>
                        </div>
                    </div>


                </div>
            @endforeach

        </div>
    </div>
</section>

