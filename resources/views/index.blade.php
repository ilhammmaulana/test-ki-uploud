<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

        <title>Blog</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="album.css" rel="stylesheet">
    </head>

    <body>
        <style>
            * {
                /* border: 1px solid green; */
            }
        </style>

        <header>
            <div class="collapse bg-dark" id="navbarHeader">
                <div class="container ">
                    <div class="row">
                        <div class="col-sm-8 col-md-7 py-4">
                            <h4 class="text-white">About</h4>
                            <p class="text-muted">Add some information about the album below, the author, or any other
                                background context. Make it a few sentences long so folks can pick up some informative
                                tidbits. Then, link them off to some social networking sites or contact information.</p>
                        </div>
                        <div class="col-sm-4 offset-md-1 py-4">
                            <h4 class="text-white">Contact</h4>
                            <ul class="list-unstyled">
                                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                                <li><a href="#" class="text-white">Like on Facebook</a></li>
                                <li><a href="#" class="text-white">Email me</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark box-shadow">
                <div class="container d-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">

                        <strong>Ilham Blogs</strong>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
                        aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </header>

        <main role="main">
            <section class="text-center d-flex align-items-center justify-center" style="height: 428px">
                <div class="container m-auto  m-auto">
                    <h1 class="jumbotron-heading">{{ __('article.welcome') }}</h1>
                    <p class="lead text-muted">{{ __('article.sub_heading') }}</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">{{ __('article.subscription') }}</a>
                        <a href="#" class="btn btn-secondary my-2">{{ __('article.latest_news') }}</a>
                    </p>
                </div>
            </section>

            <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top" src="https://via.placeholder.com/640x480.png"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <h4>{{ __('article.title_article') }}</h4>
                                    <p class="card-text">
                                        {{ __('article.description_article') }}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <div class="btn btn-primary">{{ __('article.visit') }}</div>
                                        </div>
                                        <small class="text-muted">{{ __('article.time_uploud') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main> 

        <footer class="text-muted pt-5">
            <div class="container">
                <a href="{{ url('id') }}">Indonesia</a>
                <a href="{{ url('en') }}">English</a>
                <p class="float-right">
                    <a href="#">{{ __('article.back_to_top') }}</a>
                </p>
                <p>Copyright 2024 &copy; {Ilham Maulana}</p>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </body>

</html>


{{-- Thanks to : https://github.com/ilhammmaulana/ki.resource.middle/ --}}