<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-cost-volume">
    <? include "_includes/_header.php"; ?>
    <header class="proposal-banner">
      <div class="wrap">
        <ol class="breadcrumbs">
          <li><a href="proposal_progress_report.php">Proposal</a></li>
          <li>Cost volume</li>
        </ol>
      </div>
    </header>
    <main role="main">
      <div class="wrap">
        <form action="proposal_progress_report.php">
          <div class="field">
            <label>
              <span class="label-text">Where will you perform your work?</span>
              <input type="text" name="work-location" id="work-location" value="">
            </label>
          </div>
          <section class="fieldset fieldset-labor-related-costs">
            <header>
              <h1>Labor-related costs</h1>
              <a href="#">Add another</a>
            </header>
            <section class="fieldset fieldset-labor-related-cost">
              <h1>Principal investigator</h1>
              <div class="field field-category">
                <label>
                  <span class="label-text">Category or individual</span>
                  <input type="text" name="principal-investigator-category" id="principal-investigator-category" value="">
                </label>
              </div>
              <div class="field field-rate">
                <label>
                  <span class="label-text">Rate</span>
                  <input type="text" name="principal-investigator-rate" id="principal-investigator-rate" value="">
                </label>
              </div>
              <div class="field field-estimated-hours">
                <label>
                  <span class="label-text">Estimated hours</span>
                  <input type="text" name="principal-investigator-estimated-hours" id="principal-investigator-estimated-hours" value="">
                </label>
              </div>
            </section>            
            <div class="field field-overhead">
              <label>
                <span class="label-text">Overhead</span>
                <input type="text" name="labor-related-overhead" id="labor-related-overhead" value="">
              </label>
            </div>
            <div class="field field-fringe-benefits">
              <label>
                <span class="label-text">Fringe benefits (if not included in overhead)</span>
                <input type="text" name="labor-related-fringe-benefits" id="labor-related-fringe-benefits" value="">
              </label>
            </div>
          </section>
          <section class="fieldset fieldset-direct-material-costs">
            <header>
              <h1>Direct-material costs</h1>
              <a href="#">Add another</a>
            </header>
            <section class="fieldset fieldset-direct-material-cost">
              <h1>Direct material 1</h1>
              <div class="field field-name">
                <label>
                  <span class="label-text">Name</span>
                  <input type="text" name="direct-material-1-cost-name" id="direct-material-1-cost-name" value="">
                </label>
              </div>
              <div class="field field-overhead">
                <label>
                  <span class="label-text">Overhead</span>
                  <input type="text" name="overhead" id="direct-material-1-phase-1-cost" value="">
                </label>
              </div>              
            </section>
            <div class="field field-overhead">
              <label>
                <span class="label-text">Overhead</span>
                <input type="text" id="direct-material-overhead" name="direct-material-overhead">
              </label>
            </div>
          </section>

          <footer>
            <button>Save and return</button>
            <a href="#">Cancel</a>
          </footer>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>