<?php
    require 'header.php';
    require 'navbar.php';
?>

<div class="container">
    <div class="page-title">
        <span>Create post</span>
    </div>
    <div class="row">
        <?php require 'sidebar.php' ?>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">

                    <form action="/admin/post/create" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-wrapper">
                                    <div class="form-group">
                                        <label for="title">Post title</label>
                                        <input type="text" id="title" name="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea rows="5" class="form-control" name="body" id="body"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="cover-photo">Cover Photo</label>
                                        <input type="file"  accept="image/*" name="post_image" class="form-control">
                                    </div>

                                    <div class="text-right">
                                        <button type="submit"  class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
