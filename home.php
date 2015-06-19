<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="home">
    <? include "_includes/_header.php"; ?>
    <main>
      <div class="wrap">
        <h1 class="primary-header">Let&rsquo;s work together</h1>
        <p>The Small Business Innovation Research (SBIR) and Small Business Technology Transfer (STTR) programs encourage domestic small businesses to engage in Federal Research/Research and Development with the potential for commercialization. This site contains the list of Air Force topics.</p>
        <p>Find projects that dovetail with your work:</p>
        <form action="search.php" class="ng-pristine ng-valid">
          <div class="field">
            <label>
              <span class="label-text">Query</span>
              <input type="search" id="query" name="query" ng-model="query" value="" class="ng-pristine ng-untouched ng-valid" tabindex="0" aria-invalid="false">
            </label>
          </div>
          <button type="submit">Search</button>
        </form>
      </div>
    </main>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>