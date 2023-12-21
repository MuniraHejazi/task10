<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','laravel')</title>
    <style>
       
 </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid" style="margin: 20px;">
              <a class="navbar-brand" href=" {{route( 'posts.index' )}} ">laravel blog</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('posts.index')}} ">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('posts.create')}}">creat</a>
                  </li>
              </div>
            </div>
          </nav>
    </header>
    <main >
        <div class="container-fluid">
        @yield('content')
    </div>
    </main>
      <footer>
        
    </footer>
     
</body>
</html>