<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="sign-in">
    <? include "_includes/_header.php"; ?>
    <main role="main" class="proposal-content">
      <div class="wrap">
        <form action="search_results_page.php">
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
          <button class="button">
            Sign in
          </button>
        </form>
      </div>
    </main>
    <footer class="proposal-footer">
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>