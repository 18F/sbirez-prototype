<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="sign-in">
    <? include "_includes/_header.php"; ?>
    <main role="main">
      <div class="wrap">
        <form action="home.php">
          <h1>Sign in</h1>
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
          </footer>
        </form>
      </div>
    </main>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>