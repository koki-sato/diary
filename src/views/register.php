<?php include 'views/_header.php'; ?>
  <div id="wrapper">
    <div id="container">
      <div class="header">
        <h1><span class="logo-gray">Sign in</span></h1>
      </div>
      <div class="register-form">
<?php if (isset($error)): ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">×</span></button>
          <?php echo $error; ?>
        </div>
<?php endif; ?>
        <form method=post action="./register.php" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-4 control-label" for="username">Username :</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" for="password">Password :</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" for="confirm">Repeat Password :</label>
            <div class="col-sm-7">
              <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Repeat Password" required>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg center-block">Register</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
