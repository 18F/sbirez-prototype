<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="sign-in">
    <? include "_includes/_header.php"; ?>
    <main role="main">
      <div class="wrap">
        <form action="home.php">
          <header class="sign-in-header">
            <h1>Sign in</h1>
            <span class="or">or</span>
            <a href="sign_up.php">Sign up</a>
          </header>
          <div class="field">
            <label>
              <span class="label-text">Email address</span>
              <input type="email">  
            </label>
          </div>
          <div class="field">
            <label>
              <span class="label-text">Password</span>
              <input type="password">
            </label>
          </div>
          <footer>
            <button class="button">Sign in</button>
            <a href="#" class="sign-in-reset">Forgot your password?</a>
          </footer>
        </form>
      </div>
    </main>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>