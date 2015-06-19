<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-company-commercialization-report">
    <? include "_includes/_header.php"; ?>
    <header class="proposal-banner">
      <div class="wrap">
        <h1>
          <a href="proposal_overview.php">
            Proposal for <span class="topic">Solar Electric Propulsion for Agile Space Capabilities</span>
          </a>
        </h1>
      </div>
    </header>
    <main role="main">
      <div class="wrap">
        <form action="proposal_overview.php">
          <? include "_includes/_proposal_nav.php" ?>
          <h1>Company commercialization report</h1>
          <section class="fieldset">
            <h1>Contact information</h1>
            <div class="field field-select field-honorific">
              <label>
                <span class="label-text">Honorific</span>
                <select>
                  <option>None</option>
                  <option>Dr.</option>
                  <option>Mr.</option>
                  <option>Ms.</option>
                  <option>Mrs.</option>
                  <option>Miss.</option>
                </select>
              </label>
            </div>
            <div class="field field-name">
              <label>
                <span class="label-text">Name</span>
                <input type="text" name="principal-investigator-name" id="principal-investigator-name" value="">
              </label>
            </div>
            <div class="field field-title">
              <label>
                <span class="label-text">Title</span>
                <input type="text" name="principal-investigator-title" id="principal-investigator-title" value="">
              </label>
            </div>
            <div class="field field-phone">
              <label>
                <span class="label-text">Phone</span>
                <input type="text" name="principal-investigator-phone" id="principal-investigator-phone" value="">
              </label>
            </div>
            <div class="field field-fax">
              <label>
                <span class="label-text">Fax</span>
                <input type="text" name="principal-investigator-fax" id="principal-investigator-fax" value="">
              </label>
            </div>
            <div class="field field-email">
              <label>
                <span class="label-text">Email</span>
                <input type="email" name="principal-investigator-email" id="principal-investigator-email" value="">
              </label>
            </div>
          </section>
          <div class="field field-textarea">
            <label>
              <span class="label-text">What&rsquo;s this company&rsquo;s commercialization track record?</span>
              <textarea id="track-record" name="track-record"></textarea>
            </label>
          </div>
          <footer>
            <button>Save and continue</button>
          </footer>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>