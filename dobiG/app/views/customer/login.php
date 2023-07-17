<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>



<!-- this is owner login -->
<main class="form-signin">
  <form action="<?php echo URLROOT; ?>/customers/login" method="POST">
    <h1 class="h3 mb-3 fw-normal">Please sign in | <p class="fw-lighter">customer</p></h1>

    <div class="form-floating">
      <input type="text" name="username" class="form-control <?php if (!empty($data['username_err'])) echo 'is-invalid'; ?>" value="<?php echo $data['username']; ?>" id="floatingInput" placeholder="Username">
      <label for="floatingInput" style="color:grey ;">Username</label>
    </div>
    <span style="color:red ;"><?php echo $data['username_err']; ?></span>

    <div class="form-floating">
      <input type="password" name="password" class="form-control <?php if(!empty($data['password_err'])) echo 'is-invalid'; ?> " id="floatingPassword" placeholder="Password">
      <label for="floatingPassword" style="color:grey ;">Password</label>
    </div>

    <span style="color:red ;"><?php echo $data['password_err']; ?></span>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" checked value="remember-me" id="rememberMe"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" onclick="lsRememberMe()">Sign in</button>
  </form>
  <span style="text-align:center ;" >Don't have an account? <a  href="<?php echo URLROOT; ?>/customers/register">Create one</a> </span>
</main>

<script src="<?php echo URLROOT; ?>/js/rememberMeCust.js"> </script>

<style>

  
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: auto;
  }

  .form-signin .checkbox {
    font-weight: 400;
  }

  .form-signin .form-floating:focus-within {
    z-index: 2;
  }

  .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
</style>

<?php require APPROOT . '/views/inc/footer.php'; ?>