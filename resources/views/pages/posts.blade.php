@extends('layouts.main')

@section('my_content')
<section class="top_news" id="top_news">
    <div class="container-fluid">
        <h1 class="top_news_header">Jaunumi</h1>
        <div class="row no-gutters">

            <div class="col-lg-12">

                <div class="card ">
                    <a href="/news/{{$first_post->id}}"> <img class="card-img-top img-fluid" alt="#"
                            src="{{$first_post->img}}" /></a>
                    <div class="card-body top-body">
                        <h2>{{$first_post->title}}</h2>
                        <p>{{$first_post->excerp}}</p>
                        <a class="first_post" href="/news/{{$first_post->id}}">Lasīt tālāk</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="old_news">
    <div class="container">
        {{-- <h2>Senāki ieraksti</h2> --}}

        <div class="row">
                @foreach ($myposts as $post)
            <div class="col-lg-3 col-md-6 news-col">
                <div class="card h-100 card_middle">
                    <div class="card-image">

                        <img class="card-img-top img-fluid h-40" alt="#" src={{$post->img}} />
                    </div>

                    <div class="card-body">
                        <div class="news-heading">

                            <h4>{{$post->title}}</h4><br>

                        </div>
                        <div class="news-text">
                            <p>{{$post->excerp}} <a class="old_news_posts" href="/news/{{$post->id}}">Lasīt tālāk</a> </p>
                        </div>

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{$post->published_at}}</small>
                    </div>
                </div>
            </div>
@endforeach

                <a href="/news"><div class="center-block"> <button type="button" class="arhiva_poga">Uz arhīvu</button></a></div>

            </div>

</section>

@endsection
