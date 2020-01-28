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
                    <div class="row">
                        <div class="col-md-10">
                            <div class="form-wrapper">
                                <div class="form-group">
                                    <label for="title">Post title</label>
                                    <input type="text" id="title" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="body">Body</label>
                                    <textarea rows="5" class="form-control" id="body"></textarea>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
