@extends('layouts.main')

@section('my_content')
<section id="home_page">
    <div class="row">
        <div class="col-lg-6">

            <h1 class="home_page_slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
            <button type="button" class="btn-lg btn btn-outline-dark poga">Lasīt vairāk</button>

        </div>

        <div class="col-lg-6 d-none d-lg-block">
            <img class="title-image" src="https://picsum.photos/id/1059/500/700" alt="#">
        </div>
    </div>

</section>
<section id="features">
    <div class="container">
        <div class="row">
            <div class="feature-box col-lg-4">
                <i class="icon fa fa-heart fa-4x"></i>

                <h3>Konsultācija</h3>
                <p>Bez maksas konsultējam par drošu seksu</p>
            </div>
            <div class="feature-box col-lg-4">

                <i class="icon fa fa-check-circle fa-4x"></i>
                <h3>HIV testēšana</h3>
                <p>Veicam anonīmus bezmaksas HIV eksprestestus</p>
            </div>
            <div class="feature-box col-lg-4">
                <i class="icon fa fa-users fa-4x"></i>

                <h3>Sadarbība</h3>
                <p>Esam lielisks projektu partneris</p>
            </div>

        </div>
    </div>
</section>
<section class="news" id="home_news">
    <h1>Jaunumi</h1>
    <div class="container">
        <div class="row news-card">
            @foreach ($myposts as $post)

            <div class="col-lg-4 news-col">
                <div class="card h-100">
                    <div class="card-image">
                        <!-- <div class="card-image-date"> <span class="mon">18.septembris</span> </div>  -->
                        <img class="card-img-top img-fluid h-40" alt="#" src={{$post->img}} />
                    </div>

                    <div class="card-body">
                        <div class="news-heading">
                            <a href="#">
                                <h2>{{$post->title}}</h2><br>
                            </a>
                        </div>
                        <div class="news-text">
                            <p>{{$post->body}} </p>
                        </div>
                        <a href="/news/{{$post->id}}"><button type="button" class="btn btn-outline-dark project-button">Lasīt vairāk</button></a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

</section>
<section id="projects">
    <div class="projects">
        <h1>Projekts</h1>
    </div><br>
    <div id="project_carousel" class="carousel slide" data-ride="carousel" data-interval="3000" data-pause="hover">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <h2>Mauris ex nulla, molestie eu aliquet nec, finibus ut felis</h2><br>

                <p>Nam vehicula a magna a consectetur. Sed lacinia non arcu in condimentum. Sed sit amet imperdiet dui.
                    Aliquam consectetur convallis metus eget ultrices. Suspendisse consectetur pellentesque lacus,
                    in interdum augue placerat et. Ut commodo justo quis porta eleifend. Curabitur quis elit
                    condimentum,
                    ullamcorper nulla et, condimentum libero. Pellentesque viverra ac ipsum eget condimentum.
                    Pellentesque nec est sit amet lacus egestas semper. Fusce fermentum leo euismod nisl convallis
                    finibus.
                    Nullam pretium neque sit amet venenatis posuere. Pellentesque tempus urna ultricies erat egestas,
                    maximus sollicitudin
                    nisl fringilla. Proin pretium quam quis justo dignissim, vitae fermentum arcu auctor.</p><i>
                    <!-- <i class="fa fa-eye fa-4x"></i><br> -->
                    <button type="button" class="btn-lg btn btn-outline-dark project-button">Lasīt vairāk</button>
            </div>
            <div class="carousel-item">
                <h2>Fusce non euismod tortor, maximus tincidunt orci</h2><br>

                <p>Pellentesque non laoreet nunc. Mauris ex nulla, molestie eu aliquet nec, finibus ut felis. Donec
                    vitae consectetur dolor, faucibus laoreet eros. Aliquam sagittis pellentesque pellentesque. Etiam
                    pharetra, nisi quis tincidunt dignissim, enim leo congue augue, ac placerat mi nisl quis quam.
                    Aenean imperdiet lacinia felis, id dignissim risus consequat sed.</p><i>
                    <!-- <i class="fa fa-eye fa-4x"></i><br> -->
                    <button type="button" class="btn-lg btn btn-outline-dark project-button">Lasīt vairāk</button>
            </div>
            <div class="carousel-item">
                <h2>Nullam egestas varius odio, id tristique dolor pretium in</h2><br>

                <p>Nam vehicula a magna a consectetur. Sed lacinia non arcu in condimentum. Sed sit amet imperdiet dui.
                    Aliquam consectetur convallis metus eget ultrices. Suspendisse consectetur pellentesque lacus,
                    in interdum augue placerat et. Ut commodo justo quis porta eleifend. Curabitur quis elit
                    condimentum,
                    ullamcorper nulla et, condimentum libero. Pellentesque viverra ac ipsum eget condimentum.
                    Pellentesque nec est sit amet lacus egestas semper. Fusce fermentum leo euismod nisl convallis
                    finibus.
                    Nullam pretium neque sit amet venenatis posuere. Pellentesque tempus urna ultricies erat egestas,
                    maximus sollicitudin
                    nisl fringilla. Proin pretium quam quis justo dignissim, vitae fermentum arcu auctor.</p><i>
                    <!-- <i class="fa fa-eye fa-4x"></i><br> -->
                    <button type="button" class="btn-lg btn btn-outline-dark project-button">Lasīt vairāk</button>
            </div>
        </div>
        <a class="carousel-control-prev" href="#project_carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#project_carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</section>

@endsection
