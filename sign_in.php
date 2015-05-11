<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="sign-in">
    <? include "_includes/_header.php"; ?>
    <header class="proposal-banner">
      <div class="wrap">
        <h1>Proposal for <span class="topic">Solar Electric Propulsion for Agile Space Capabilities</span></h1>
      </div>
    </header>
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
              <input type="password"
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