<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="search-results">
    <? include "_includes/_header.php"; ?>
    <main class="h-feed">
      <div class="wrap">
        <h1 class="p-name primary-header">151 Results for <span class="query"><?= $query ?></span> </h1>
        <article id="AF151-06<? echo $i; ?>" class="topic h-entry is-favorite">
            <a href="topic.php" class="topic-content">
            <h1 class="entry-title">Monopropellant Thrusters for Cubesats</h1>
            <h2>AF151-06<? echo $i; ?></h2>
            <p class="entry-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </a>
          <nav>
            <a href="topic.php">View details</a>
            <form action="proposal_overview.php"><button>Start a proposal</button></form>
            <form><button class="button-remove">Remove from my topics</button></form>
          </nav>
        </article>
        <? for ($i=0; $i < 6; $i++): ?>
          <article id="AF151-06<? echo $i; ?>" class="topic h-entry">
            <a href="topic.php" class="topic-content">
              <h1 class="entry-title">Monopropellant Thrusters for Cubesats</h1>
              <h2>AF151-06<? echo $i; ?></h2>
              <p class="entry-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </a>
            <nav>
              <a href="topic.php">View details</a>
              <form>
                <button>Add to my topics</button>
              </form>
            </nav>
          </article>
        <? endfor; ?>
        <nav class="pagination">
          <a class="pagination-prev" href="#">Previous</a>
          <a class="pagination-next" href="#">Next</a>
          <span class="showing-results">Showing results</span>
          <span class="pagination-current-range">1-10</span>
          <span class="preposition">of</span>
          <span class="pagination-total">151</span>
        </nav>        
      </div>
    </main>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>