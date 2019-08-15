<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>


    <link href="{{asset('css/app.css')}}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('posts.index')}}">Головна</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('posts.create') }}" }>Додати пост
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <main>
                @yield('content')
            </main>
        </div>
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            <form method="POST" action="{{ route('posts.search')}}" enctype="multipart/form-data">
            @csrf
            <!-- Search Widget -->
                <div class="card my-4">
                    <h5 class="card-header">Пошук</h5>
                    <div class="card-body">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for..." name="search">
                            <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit">Go!</button>
              </span>
                        </div>
                    </div>
                </div>
            </form>


        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Blog</p>
    </div>
    <!-- /.container -->
</footer>

<script src="{{asset('js/app.js')}}"></script>

</body>

</html>
