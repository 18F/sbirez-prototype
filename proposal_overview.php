<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-overview">
    <? include "_includes/_header.php"; ?>
    <header class="proposal-banner">
      <div class="wrap">
        <h1>Proposal for <span class="topic">Solar Electric Propulsion for Agile Space Capabilities</span></h1>
      </div>
    </header>
    <main role="main" class="proposal-content">
      <div class="wrap">
        <section>
          <h1 class="primary-header">Overview</h1>
          <p>Proposals are comprised of several parts, listed below. We&rsquo;ll help you submit your proposal by filling out the necessary paperwork, one step at a time.</p>
          <? include "_includes/_proposal_toc.php" ?>
          <div class="validation-response validation-response-error">
            <p>Please fix the validation errors by clicking on the sections, above.</p>
          </div>
          <div class="notice">
            <p><strong>Note:</strong> You&rsquo;ll need to fill in <a href="company.php">your company information</a> before you can submit a proposal.</p>
          </div>
          <a href="#" id="validate-me" class="button">Validate me</a>
        </section>
        <aside>
          <h1><span class="technical-point">Technical point</span> <span class="preposition">of</span> contact</h1>
          <img src="http://placekitten.com/g/256/256">
          <div class="hcard">
            <span>Dr. Soandso McSmartpants</span>
            <span>1-888-222-2222</span>
            <div>
              <span>123 Streetname Ave</span>
              <span>Alexandria, VA 22222</span>
            </div>          
          </div>
        </aside>
      </div>
    </main>
    <footer class="proposal-footer">
      <div class="wrap">
        <h1>Related solicitation</h1>
        <article id="AF151-061" class="topic h-entry">
          <a class="topic-content" href="topic.php">
            <h1 class="entry-title">Monopropellant Thrusters for Cubesats</h1>
            <h2>AF151-061</h2>
            <p class="entry-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>              
          </a>
          <nav>
            <a href="topic.php">View details</a>
          </nav>
        </article>
        <form action="proposal_cover_sheet_proposal_information.php">
          <button class="button-remove">Delete this proposal</button>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>