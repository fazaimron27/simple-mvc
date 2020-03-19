<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ BASEURL }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ BASEURL }}/css/datatables.min.css">

    <title>@yield('title')</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ BASEURL }}">MVC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="{{ BASEURL }}/user">User</a>
                    <a class="nav-item nav-link" href="{{ BASEURL }}/post">Post</a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ BASEURL }}/js/jquery-3.3.1.slim.min.js"></script>
    <script src="{{ BASEURL }}/js/popper.min.js"></script>
    <script src="{{ BASEURL }}/js/bootstrap.min.js"></script>
    <script src="{{ BASEURL }}/js/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#table_user').DataTable();
        });
    </script>
</body>

</html>