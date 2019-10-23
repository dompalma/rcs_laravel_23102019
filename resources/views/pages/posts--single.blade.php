@extends('layouts.main')

@section('my_content')
<section class="fullPost">
    <div class="container-fluid">
        <div class="row">

            <div class="col">
                <div class="card fullPost_card">
                    <img class="card-img-top img-fluid" alt="#"
                            src="{{$my_one_post->img}}" />
                    <div class="card-body top-body">
                        <h2>{{$my_one_post->title}}</h2>
                        <h5>{{$my_one_post->published_at}}</h5>
                        <p>{{$my_one_post->body}}</p>

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <a href="/news"><div class="center-block"><button type="button" class="arhiva_poga">Citi raksti</button></a></div>

        </div>
    </div>

</section>
@endsection
