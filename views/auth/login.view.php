<?php @include('../partials/header.view.php') ?>
<div class="row">
  <form class="col-6 mx-auto">
      <h1>Login</h1>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="col-12 text-center">
      <a href="/register">Click here to Register</a>
    </div>
  </div>
  
<?php @include('../partials/footer.view.php') ?>