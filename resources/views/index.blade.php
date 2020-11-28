<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="dicoding:email" content="doniwirawan166@gmail.com">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon/favicon-16x16.png') }}">
    <link rel="mask-icon" href="{{ asset('img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/08bec864c5.js" crossorigin="anonymous"></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>RumahTani.com</title>
</head>

<body>
    <div class="navbar-lg-hidden">
        <button id="showAside"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></button>
        <div class="logo-hidden">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>

    </div>
    <button id="hidden" class="onclickshow"><i class="fa fa-times fa-2x" aria-hidden="true"></i></button>

    <!-- Side navigation -->
    <div class="sidenav initoggle">
        <img src="{{ asset('img/logo.png') }}" alt="" class="logo">
        <a href="{{ url('/') }}" class="special {{ Request::is('/') ? 'active' : '' }} "><i class="fa fa-home mr-3" aria-hidden="true"></i> Beranda</a>

        <a href="{{ url('blog') }}" class="special {{ Request::is('blog') ? 'active' : '' }}"><i class="fa fa-globe mr-3" aria-hidden="true"></i> Blog</a>
        <p class="tips text-left greys text-uppercase mt-4">New Blog Post</p>

        <div class="blog">

            @foreach($artikel as $p)
                <div class="blog-post">
                    <img src="{{ $p->gambar}}"
                        alt="{{ $p->judul}}">
                    <p class="title"><a href="{{ url('blog') }}">{{ $p->judul}}</a> </p>

                </div>
            @endforeach
            <!-- @yield('side-menu') -->


        </div>
        <div class="column bottom">
            <div class="row">
                <p><a href="./index.html">&copyRumahtani.com</a></p>
            </div>
            <div class="row bawah">
                <p><a href="{{ url('/') }}#beranda" class="mr-2">Beranda</a></p>
                <p><a href="{{ url('/') }}#tentang" class="mr-2">Tentang</a></p>
                <p><a href="{{ url('/') }}#misi" class="mr-2">Misi</a></p>
                <p><a href="{{ url('/') }}#kontak" class="mr-2">Kontak</a></p>
                <p><a href="{{ url('blog') }}" class="mr-2">Blog</a></p>
            </div>
        </div>
    </div>

    <!-- Page content -->
    <div class="main p-3 pt-4 pl-4" id="beranda">
        @yield('konten')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="./assets/js/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="./assets/js/bootstrap.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"
        integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg=="
        crossorigin="anonymous"></script>
    <script src="./assets/js/all.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>