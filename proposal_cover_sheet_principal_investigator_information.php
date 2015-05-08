<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-cover-sheet proposal-cover-sheet-project-team-information">
    <? include "_includes/_header.php"; ?>
    <header class="proposal-banner">
      <div class="wrap">
        <ol class="breadcrumbs">
          <li><a href="proposal_progress_report.php">Proposal</a></li>
          <li>Cover Sheet</li>
        </ol>
      </div>
    </header>
    <main role="main">
      <div class="wrap">
        <form action="proposal_progress_report.php">
          <h1>Principal Investigator (PI) / Corporate Official (CO) Information</h1>
          <section class="fieldset">
            <h1>Principal investigator</h1>
            <div class="field">
              <label>
                <span class="label-text">Name</span>
                <input type="text" name="principal-investigator-name" id="principal-investigator-name" value="">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Title</span>
                <input type="text" name="principal-investigator-title" id="principal-investigator-name" value="">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Phone</span>
                <input type="text" name="principal-investigator-phone" id="principal-investigator-name" value="">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Fax</span>
                <input type="text" name="principal-investigator-fax" id="principal-investigator-name" value="">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Email</span>
                <input type="text" name="principal-investigator-email" id="principal-investigator-name" value="">
              </label>
            </div>
            <section class="fieldset fieldset-radio">
              <h1>Is this person a woman?</h1>
              <div class="field field-checkbox">
                <label>
                  <input type="radio" name="woman" id="woman-yes" value="yes">
                  <span class="label-text">Yes</span>
                </label>
              </div>
              <div class="field field-checkbox">
                <label>
                  <input type="radio" name="woman" id="woman-no" value="no">
                  <span class="label-text">No</span>
                </label>
              </div>
            </section>
            <section class="fieldset fieldset-radio">
              <h1>Is this person socially/economically disadvantaged?</h1>
              <div class="field field-checkbox">
                <label>
                  <input type="radio" name="disadvantaged" id="disadvantaged-yes" value="yes">
                  <span class="label-text">Yes</span>
                </label>
              </div>
              <div class="field field-checkbox">
                <label>
                  <input type="radio" name="disadvantaged" id="disadvantaged-no" value="no">
                  <span class="label-text">No</span>
                </label>
              </div>
            </section>
          </section>
          <section class="fieldset">
            <h1>Corporate Official (Business)</h1>
            <div class="field">
              <label>
                <span class="label-text">Name</span>
                <input type="text" name="corporate-official-name" id="corporate-official-name" value="">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Title</span>
                <input type="text" name="corporate-official-title" id="corporate-official-name" value="">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Phone</span>
                <input type="text" name="corporate-official-phone" id="corporate-official-name" value="">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Fax</span>
                <input type="text" name="corporate-official-fax" id="corporate-official-name" value="">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Email</span>
                <input type="text" name="corporate-official-email" id="corporate-official-name" value="">
              </label>
            </div>          </section>
          <section class="fieldset fieldset-radio">
            <h1>Is your firm&rsquo;s PI, CO, or owner a faculty member or student of an institution of higher education?</h1>
            <div class="field field-radio">
              <label>
                <input type="radio" id="foreign-nationals-yes" name="foreign-nationals" value="yes"> 
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" id="foreign-nationals-no" name="foreign-nationals" value="no"> 
                <span class="label-text">No</span>
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