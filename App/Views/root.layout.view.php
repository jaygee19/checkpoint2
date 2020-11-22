
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="checkpoint2/public/styles/css.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!--    <a class="navbar-brand" href="#">Navbar</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li>
                    <a class="navbar-brand" href="#">
                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-headphones" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M8 3a5 5 0 0 0-5 5v4.5H2V8a6 6 0 1 1 12 0v4.5h-1V8a5 5 0 0 0-5-5z"/>
                            <path d="M11 10a1 1 0 0 1 1-1h2v4a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3zm-6 0a1 1 0 0 0-1-1H2v4a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-3z"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=Vote&a=results">Top 10 Chart </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=Vote">Vote</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=Vote&a=add">Add Song</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=Vote&a=edidel"> Edit / Delete </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?c=login">Login</a>
                </li>
                <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Results
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Monthly</a>
                        <a class="dropdown-item" href="music.html">Yearly</a>
                    </div>
                </li>-->
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">FIND YOUR TOP 10</h1>
        <p class="lead">Vote each month your top three songs in various genres. </p>
    </div>
</div>

<!--<div class="album py-5 bg-#3e3b3b">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">

                    <div class="djimage" id="trance">
                        <a href="#" ><h5 class="djimage-title">TRANCE</h5></a>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Vote</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Top 10</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">

                    <div class="djimage" id="progress">
                        <a href="#" ><h5 class="djimage-title">PROGRESS</h5></a>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Vote</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Top 10</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">

                    <div class="djimage" id="dnb">
                        <a href="#" ><h5 class="djimage-title">DNB</h5></a>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Vote</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Top 10</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">

                    <div class="djimage" id="bigroom">
                        <a href="#" ><h5 class="djimage-title">BIG ROOM</h5></a>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Vote</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Top 10</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">

                    <div class="djimage" id="hardstyle">
                        <a href="#" ><h5 class="djimage-title">HARDSTYLE</h5></a>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Vote</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Top 10</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">

                    <div class="djimage" id="psy">
                        <a href="#" ><h5 class="djimage-title">PSY TRANCE</h5></a>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">Vote</button>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Top 10</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="web-content">
    <?= $contentHTML ?>
</div>

</body>
</html>