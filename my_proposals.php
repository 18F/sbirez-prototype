<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="my-proposals">
    <? include "_includes/_header.php"; ?>
    <main class="h-feed">
      <div class="wrap">
        <h1 class="primary-header">My topics</h1>
        <? for ($i=0; $i < 6; $i++): ?>
          <article id="AF151-06<? echo $i; ?>" class="topic h-entry is-favorite">
            <div class="topic-content">
              <h1 class="entry-title">Monopropellant Thrusters for Cubesats</h1>
              <h2>AF151-06<? echo $i; ?></h2>
              <p class="entry-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <nav>
              <a href="#">View details</a>
              <form action="proposal_overview.php"><button>Start a proposal</button></form>
              <form><button class="button-remove">Remove from my topics</button></form>
            </nav>
          </article>
        <? endfor; ?>
      </div>
    </main>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>