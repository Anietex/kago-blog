<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 4 Magazine/Blog Theme">
    <meta name="author" content="Bootlab">

    <title><?=$title?></title>

    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-light bg-white absolute-top">
        <div class="container">

            <button class="navbar-toggler order-2 order-md-1" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-left navbar-right" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse order-3 order-md-2" id="navbar-left">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="home-onecolumn.html">One column</a>
                            <a class="dropdown-item" href="home-twocolumn.html">Two column</a>
                            <a class="dropdown-item" href="home-threecolumn.html">Three column</a>
                            <a class="dropdown-item" href="home-fourcolumn.html">Four column</a>
                            <a class="dropdown-item" href="home-featured.html">Featured posts</a>
                            <a class="dropdown-item" href="home-fullwidth.html">Full width</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Posts</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown02">
                            <a class="dropdown-item" href="post-image.html">Image</a>
                            <a class="dropdown-item" href="post-video.html">Video</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Components</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            <a class="dropdown-item" href="doc-alerts.html">Alerts</a>
                            <a class="dropdown-item" href="doc-buttons.html">Buttons</a>
                            <a class="dropdown-item" href="doc-cards.html">Cards</a>
                            <a class="dropdown-item" href="doc-forms.html">Forms</a>
                            <a class="dropdown-item" href="doc-icons.html">Icons</a>
                            <a class="dropdown-item" href="doc-pagination.html">Pagination</a>
                            <a class="dropdown-item" href="doc-tables.html">Tables</a>
                            <a class="dropdown-item" href="doc-typography.html">Typography</a>
                        </div>
                    </li>
                </ul>
            </div>

            <a class="navbar-brand mx-auto order-1 order-md-3" href="index.html">Milø</a>

            <div class="collapse navbar-collapse order-4 order-md-4" id="navbar-right">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="page-about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="page-contact.html">Contact</a>
                    </li>
                </ul>
                <form class="form-inline" role="search">
                    <input class="search js-search form-control form-control-rounded mr-sm-2" type="text" title="Enter search query here.." placeholder="Search.." aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
</header>

<main class="main">
