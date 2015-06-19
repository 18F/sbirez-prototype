<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="company company-identifiers">
    <? include "_includes/_header.php"; ?>
    <header class="company-banner">
      <div class="wrap">
        <h1>My company</h1>
      </div>
    </header>
    <main role="main">
      <div class="wrap">
        <form action="index.html">
          <? include "_includes/_company_nav.php" ?>
          <h1>Identifiers</h1>
          <div class="field">
            <label>
              <span class="label-text">Federal tax ID</span>
              <input type="text">
            </label>
          </div>
          <div class="field">
            <label>
              <span class="label-text">DUNS Number</span>
              <input type="text" /> 
            </label>
          </div>
          <div class="field">
            <label>
              <span class="label-text">Cage Code</span>
              <input type="text" /> 
            </label>
          </div>
          <footer>
            <button>Save</button>
            <a href="#">Cancel</a>
          </footer>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>