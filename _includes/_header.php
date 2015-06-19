<header role="banner" class="banner">
  <div class="wrap">
    <h1><a href="home.php"><span class="icon-logo"></span>SBIR-EZ</a></h1>
    <form action="search.php" method="get">
      <div class="field">
        <label>
          <span class="label-text">Query</span>
          <input type="search" id="query" name="query" value="<?=$query ?>" />
        </label>
      </div>
      <footer>
        <button type="submit">Search</button>
      </footer>
    </form>
    <nav class="primary">
      <a class="my-proposals" href="my_proposals.php">My Proposals</a>
      <a class="my-company" href="company_background.php">My Company</a>
      <a class="sign-out" href="sign_in.php">Sign Out</a>
    </nav>
  </div>
</header>
