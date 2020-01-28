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
                            <?php $sn = 1;?>
                            <?php foreach ($posts as $post){ ?>
                            <tr>
                                <td><?=$sn++?></td>
                                <td><?=$post['title']?></td>
                                <td><?=substr($post['body'],0,200).'...'?></td>
                                <td>
                                    <div class="btn btn-group btn-group-sm">
                                        <a href="<?='/admin/post/edit/'.$post['id']?>" class="btn btn-primary">Edit</a>
                                        <a href="<?='/admin/post/delete/'.$post['id']?>" class="btn btn-danger">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            <?php }; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>