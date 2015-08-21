<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="sign-up">
    <? include "_includes/_header.php"; ?>
    <main role="main">
      <div class="wrap">
        <form action="sign_up_post.php">
          <header class="sign-up-header">
            <h1>Sign up</h1>
            <span class="or">or</span>
            <a href="sign_in.php">Sign in</a>
          </header>
          <div class="field">
            <label>
              <span class="label-text">Email address</span>
              <input type="email">  
            </label>
          </div>
          <div class="field field-password">
            <label>
              <span class="label-text">Password</span>
              <input id="password" type="password" aria-describedby="password-instructions">
              <p id="password-instructions">Passwords must be eight characters including one uppercase letter, one special character (e.g., !, @, #), and alphanumeric characters.</p>
            </label>
          </div>
          <footer>
            <button class="button">
              Sign up
            </button>
          </footer>
        </form>
      </div>
    </main>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>