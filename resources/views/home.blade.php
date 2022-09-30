<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>MOVIE WEB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/mycss.css')}}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <body>
<header>
</head>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#">
        <h3> MOVIE WEB </h3>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll " aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#now">Now playing </a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#popular">Popular</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#top">Top rated</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="#up">Up Coming</a>
            </li>
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li> -->
        </ul>
        </div>
    </div>
    </nav>

    <!-- Page Content -->
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-bold">Movie Web</h1>
        <h3 class="">Get New Movie Update everyday</p>
        <h3>
          <a href="#" class="btn btn-primary my-2">get movie list</a>
        </p>
      </div>
    </div>
  </section>
  <section class="now" id="now">
  <div class="album py-5 bg-dark">
    <div class="container col-md-8 offset-md-2">
      <h2 class="text-white">NOW PLAYING </h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class=" imageMov card shadow-sm p-2 ">
                <img src="{{asset('/assets/all-movie/movie1.jpg')}}">
            <div class="card-body">
              <p class="card-text">The Old Guard is a 2020 American superhero film directed . . . </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" imageMov card shadow-sm p-2">
            <img src="{{asset('/assets/all-movie/movie2.jpg')}}">

            <div class="card-body">
              <p class="card-text">The Astronauts is a television film, or rather a live television play . . .</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov2">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" imageMov card shadow-sm p-2 ">
                <img src="{{asset('/assets/all-movie/movie3.jpg')}}">
            <div class="card-body">
              <p class="card-text">Dune (titled onscreen as Dune: Part One) is a 2021 American epic science fiction film . . . </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov3">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </section>

  <section class="popular" id="popular">
  <div class="album py-5 bg-dark">
    <div class="container col-md-8 offset-md-2">
      <h2 class="text-white">popular </h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class=" imageMov card shadow-sm p-2 ">
                <img src="{{asset('/assets/all-movie/movie1.jpg')}}">
            <div class="card-body">
              <p class="card-text">The Old Guard is a 2020 American superhero film directed . . . </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" imageMov card shadow-sm p-2">
            <img src="{{asset('/assets/all-movie/movie2.jpg')}}">

            <div class="card-body">
              <p class="card-text">The Astronauts is a television film, or rather a live television play . . .</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov2">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" imageMov card shadow-sm p-2 ">
                <img src="{{asset('/assets/all-movie/movie3.jpg')}}">
            <div class="card-body">
              <p class="card-text">Dune (titled onscreen as Dune: Part One) is a 2021 American epic science fiction film . . . </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov3">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </section>

  <section class="toprated" id="top">
  <div class="album py-5 bg-dark">
    <div class="container col-md-8 offset-md-2">
      <h2 class="text-white">Top rated </h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class=" imageMov card shadow-sm p-2 ">
                <img src="{{asset('/assets/all-movie/movie1.jpg')}}">
            <div class="card-body">
              <p class="card-text">The Old Guard is a 2020 American superhero film directed . . . </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" imageMov card shadow-sm p-2">
            <img src="{{asset('/assets/all-movie/movie2.jpg')}}">

            <div class="card-body">
              <p class="card-text">The Astronauts is a television film, or rather a live television play . . .</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov2">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" imageMov card shadow-sm p-2 ">
                <img src="{{asset('/assets/all-movie/movie3.jpg')}}">
            <div class="card-body">
              <p class="card-text">Dune (titled onscreen as Dune: Part One) is a 2021 American epic science fiction film . . . </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov3">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </section>

  <section class="upcoming" id="up">
  <div class="album py-5 bg-dark">
    <div class="container col-md-8 offset-md-2">
      <h2 class="text-white">Up coming </h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class=" imageMov card shadow-sm p-2 ">
                <img src="{{asset('/assets/all-movie/movie1.jpg')}}">
            <div class="card-body">
              <p class="card-text">The Old Guard is a 2020 American superhero film directed . . . </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" imageMov card shadow-sm p-2">
            <img src="{{asset('/assets/all-movie/movie2.jpg')}}">

            <div class="card-body">
              <p class="card-text">The Astronauts is a television film, or rather a live television play . . .</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov2">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class=" imageMov card shadow-sm p-2 ">
                <img src="{{asset('/assets/all-movie/movie3.jpg')}}">
            <div class="card-body">
              <p class="card-text">Dune (titled onscreen as Dune: Part One) is a 2021 American epic science fiction film . . . </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#descMov3">View More</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  </section>
  

  <!--This is modal----------------------------------------------------------->
      <!-- ModalMov1 -->
      <div class="modal fade" id="descMov" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">The Old Guard 2020</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('/assets/all-movie/movie1.jpg')}}" style="width: 300px; height:auto;">
                    </div>
                    
                </div>
                <p class="p-2 justify-content-center">The Old Guard is a 2020 American superhero film directed by Gina Prince-Bythewood and written by Greg Rucka, based on his comic book of the same name. The film stars Charlize Theron, KiKi Layne, Matthias Schoenaerts, Marwan Kenzari, Luca Marinelli, Harry Melling, Veronica Ngo, and Chiwetel Ejiofor, and follows a team of immortal mercenaries on a revenge mission.
The Old Guard was released on July 10, 2020, on Netflix. It received generally positive reviews from critics, with praise for the action sequences and Theron's performance. A sequel is in production with Victoria Mahoney directing the film</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <!-- ModalMov2 -->
      <div class="modal fade" id="descMov2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">The Astronauts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('/assets/all-movie/movie2.jpg')}}" style="width: 300px; height:auto;">
                    </div>
                    
                </div>
                <p class="p-2 justify-content-center">The Astronauts is a television film, or rather a live television play, which aired in Australia during 1960 on ABC. Broadcast originally in Melbourne on 18 May 1960, a kinescope recording was made of the broadcast and shown in Sydney on 27 July 1960 (it is not known if it was also shown on ABC's stations in Brisbane, Adelaide and Perth).[3] FilmInk magazine said it may be the only Australian drama about the space race</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
         <!-- ModalMov3 -->
      <div class="modal fade" id="descMov3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">The Astronauts</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="d-flex justify-content-center">
                        <img src="{{asset('/assets/all-movie/movie3.jpg')}}" style="width: 300px; height:auto;">
                    </div>
                    
                </div>
                <p class="p-2 justify-content-center">Dune (titled onscreen as Dune: Part One) is a 2021 American epic science fiction film directed by Denis Villeneuve from a screenplay by Villeneuve, Jon Spaihts, and Eric Roth. It is the first part of a two-part adaptation of the 1965 novel by Frank Herbert, primarily covering the first half of the book. Set in the distant future, the film follows Paul Atreides as his family, the noble House Atreides, is thrust into a war for the deadly and inhospitable desert planet Arrakis.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
<!--This is modal----------------------------------------------------------->

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#"><button type="button" class="btn btn-primary">Back to top</button></a>
    </p>
    <p class="mb-1">Contact us</p>
    <p class="mb-0">Email : movieweb@gmail.com  Website:www.movieweb.com</a></p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
      
  </body>
</html>
