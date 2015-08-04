<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-cover-sheet proposal-cover-sheet-principal-investigator-information">
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
        <form action="proposal_technical_volume.php">
          <? include "_includes/_proposal_nav.php" ?>
          <h1>Principal Investigator (PI) / Corporate Official (CO) Information</h1>
          <fieldset class="fieldset-principal-investigator">
            <legend>Principal investigator</legend>
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
            <fieldset class="fieldset-radio">
              <legend>Is this person a woman?</legend>
              <div class="field field-radio">
                <label>
                  <input type="radio" name="woman" id="woman-yes" value="yes">
                  <span class="label-text">Yes</span>
                </label>
              </div>
              <div class="field field-radio">
                <label>
                  <input type="radio" name="woman" id="woman-no" value="no">
                  <span class="label-text">No</span>
                </label>
              </div>
            </fieldset>
            <fieldset class="fieldset-radio">
              <legend>Is this person socially/economically disadvantaged?</legend>
              <div class="field field-radio">
                <label>
                  <input type="radio" name="disadvantaged" id="disadvantaged-yes" value="yes" tabindex="0">
                  <span class="label-text">Yes</span>
                </label>
              </div>
              <div class="field field-radio">
                <label>
                  <input type="radio" name="disadvantaged" id="disadvantaged-no" value="no" tabindex="1">
                  <span class="label-text">No</span>
                </label>
              </div>
            </fieldset>
          </fieldset>
          <fieldset class="fieldset-corporate-official">
            <legend>Corporate Official (Business)</legend>
            <div class="field field-name">
              <label>
                <span class="label-text">Name</span>
                <input type="text" name="corporate-official-name" id="corporate-official-name" value="">
              </label>
            </div>
            <div class="field field-title">
              <label>
                <span class="label-text">Title</span>
                <input type="text" name="corporate-official-title" id="corporate-official-title" value="">
              </label>
            </div>
            <div class="field field-phone">
              <label>
                <span class="label-text">Phone</span>
                <input type="text" name="corporate-official-phone" id="corporate-official-phone" value="">
              </label>
            </div>
            <div class="field field-fax">
              <label>
                <span class="label-text">Fax</span>
                <input type="text" name="corporate-official-fax" id="corporate-official-fax" value="">
              </label>
            </div>
            <div class="field field-email">
              <label>
                <span class="label-text">Email</span>
                <input type="text" name="corporate-official-email" id="corporate-official-email" value="">
              </label>
            </div>
          </fieldset>
          <fieldset class="fieldset-radio">
            <legend>Is your firm&rsquo;s PI, CO, or owner a faculty member or student of an institution of higher education?</legend>
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
          </fieldset>
          <footer>
            <button>Save and continue</button>
          </footer>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>