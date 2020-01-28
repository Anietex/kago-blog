<?php require 'partials/header.php' ?>


<main class="main pt-4">

    <div class="container">

        <div class="row">
            <div class="col-md-9">

                <article class="card mb-4">
                    <header class="card-header text-center">
                        <div class="card-meta">
                            <a href="#"><time class="timeago" datetime="2019-10-26 20:00">26 october 2019</time></a> in <a href="page-category.html">Journey</a>
                        </div>
                        <a href="post-image.html">
                            <h1 class="card-title"><?=$post['title']?></h1>
                        </a>
                    </header>
                    <a href="post-image.html">
                        <img class="card-img" src="/posts/<?=$post['post_image'] ?>" alt="" />
                    </a>
                    <div class="card-body">

                        <p><?=$post['body'] ?></p>
                        <hr />

                        <h3>4 comments</h3>
                        <div id="disqus_thread"></div>





                    </div>
                </article><!-- /.card -->

            </div>
            <div class="col-md-3 ml-auto">

                <aside class="sidebar">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">About</h4>
                            <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam <a href="#">semper libero</a>, sit amet adipiscing sem neque sed ipsum. </p>
                        </div>
                    </div><!-- /.card -->
                </aside>

                <aside class="sidebar sidebar-sticky">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Tags</h4>
                            <a class="btn btn-light btn-sm mb-1" href="page-category.html">Journey</a>
                            <a class="btn btn-light btn-sm mb-1" href="page-category.html">Work</a>
                            <a class="btn btn-light btn-sm mb-1" href="page-category.html">Lifestype</a>
                            <a class="btn btn-light btn-sm mb-1" href="page-category.html">Photography</a>
                            <a class="btn btn-light btn-sm mb-1" href="page-category.html">Food & Drinks</a>
                        </div>
                    </div><!-- /.card -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h4 class="card-title">Popular stories</h4>

                            <a href="post-image.html" class="d-inline-block">
                                <h4 class="h6">The blind man</h4>
                                <img class="card-img" src="img/articles/2.jpg" alt="" />
                            </a>
                            <time class="timeago" datetime="2019-10-03 20:00">3 october 2019</time> in Lifestyle

                            <a href="post-image.html" class="d-inline-block mt-3">
                                <h4 class="h6">Crying on the news</h4>
                                <img class="card-img" src="img/articles/3.jpg" alt="" />
                            </a>
                            <time class="timeago" datetime="2019-07-16 20:00">16 july 2019</time> in Work

                        </div>
                    </div><!-- /.card -->
                </aside>

            </div>
        </div>
    </div>

</main>

<?php require 'partials/footer.php' ?>
