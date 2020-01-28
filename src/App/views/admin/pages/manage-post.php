<?php
require 'header.php';
require 'navbar.php';
?>

<div class="container">
    <div class="page-title">
        <span>Manage post</span>
    </div>
    <div class="row">
        <?php require 'sidebar.php' ?>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="post-list">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                <th>Excerpt</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>This is sample title for a blog post</td>
                                <td>This is sample body  for a blog post which is going to be cutoff..</td>
                                <td>
                                    <div class="btn btn-group btn-group-sm">
                                        <button class="btn btn-primary">Edit</button>
                                        <button class="btn btn-danger">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>