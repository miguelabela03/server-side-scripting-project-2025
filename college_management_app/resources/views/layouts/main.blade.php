<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Management System</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ assets('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ assets('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="student.html">
                <strong>Management System</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-toggler"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="navbar-toggler">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="student.html" class="nav-link">
                            <div class="nav-icon-text">
                                <ion-icon name="person-outline"></ion-icon>
                                <span>Students</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="college.html" class="nav-link">
                            <div class="nav-icon-text">
                                <ion-icon name="business-outline"></ion-icon>
                                <span>Colleges</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{ -- content -- }}

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ assets('js/custom.js') }}"></script>
    <script src="{{ assets('js/jquery.min.js') }}"></script>
    <script src="{{ assets('js/popper.min.js') }}"></script>
    <script src="{{ assets('js/bootstrap.min.js') }}"></script>
</body>

</html>