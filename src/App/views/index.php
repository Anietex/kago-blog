<?php require 'partials/header.php'; ?>

    <main class="main pt-4">
        <div class="container">
            <div class="row">

                <?php foreach ($posts as $post) : ?>
                <div class="col-md-3">
                    <article class="card mb-4">
                        <header class="card-header">
                            <div class="card-meta">
                                <a href="#"><time class="timeago" datetime="2019-10-26 20:00">26 october 2019</time></a> in <a href="page-category.html">Journey</a>
                            </div>
                            <a href="post/<?=$post['id'].'/'.$post['slug']?>">
                                <h4 class="card-title"><?=$post['title']?></h4>
                            </a>
                        </header>
                        <a href="post/<?=$post['id'].'/'.$post['slug']?>">
                            <img class="card-img" src="posts/<?=$post['post_image']?>" alt="" />
                        </a>
                        <div class="card-body">
                            <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                        </div>
                    </article><!-- /.card -->

                </div>

                <?php endforeach; ?>
                <div class="col-md-3">
                    <article class="card mb-4">
                        <header class="card-header">
                            <div class="card-meta">
                                <a href="#"><time class="timeago" datetime="2019-10-26 20:00">26 october 2019</time></a> in <a href="page-category.html">Journey</a>
                            </div>
                            <a href="post-image.html">
                                <h4 class="card-title">How can we sing about love?</h4>
                            </a>
                        </header>
                        <a href="post-image.html">
                            <img class="card-img" src="img/articles/22.jpg" alt="" />
                        </a>
                        <div class="card-body">
                            <p class="card-text">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. </p>
                        </div>
                    </article><!-- /.card -->

                </div>

            </div>
        </div>
    </main>
<?php require 'partials/footer.php'; ?>