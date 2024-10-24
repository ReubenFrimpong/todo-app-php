<?php


 @include('../partials/header.view.php') ?>
<div class="row">
  <form class="col-6 mx-auto" method="POST" action="/sign-up">
      <h1>Register</h1>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <span><?= \Core\Session::get('errors')['email'] ?></span>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <span class="text-danger"><?= \Core\Session::get('errors')['password'] ?></span>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="col-12 text-center">
      <a href="/login">Click here to Login</a>
    </div>
  </div>
  
<?php @include('../partials/footer.view.php') ?>