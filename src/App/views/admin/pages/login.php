<?php require 'header.php'; ?>


<div class="container">
    <div class="row mt-6">
        <div class="col-md-6 mx-auto">
            <div class="card admin-login-form">
                <div class="card-header">
                    <h4>Admin Login</h4>
                </div>
                <div class="card-body">
                   <form action="/admin/login" method="post">

                       <div class="form-group">
                           <label id="email">Email</label>
                           <input type="text" class="form-control" name="email" id="email">
                       </div>

                       <div class="form-group">
                           <label id="password">Password</label>
                           <input type="password" class="form-control" name="password" id="password">
                       </div>

                       <div class="text-right">
                           <button class="btn btn-primary">Login</button>
                       </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'footer.php'; ?>