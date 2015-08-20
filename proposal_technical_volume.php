<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-technical-volume">
    <? include "_includes/_header.php"; ?>
    <header class="proposal-header">
      <div class="wrap">
        <h1>
          <a href="proposal_overview.php">
            Proposal for Solar Electric Propulsion for Agile Space Capabilities
          </a>
        </h1>
      </div>
    </header>
    <main role="main">
      <div class="wrap">
        <form action="proposal_cost_volume.php">
          <? include "_includes/_proposal_nav.php" ?>
          <h1>Technical volume</h1>
          <fieldset class="fieldset-radio">
            <legend>Have you reviewed all the requirements in the Air Force and DoD Solicitation instructions?</legend>
            <div class="field field-radio">
              <label>
                <input type="radio" name="reviewed-requirements" id="reviewed-requirements-yes" value="yes">
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" name="reviewed-requirements" id="reviewed-requirements-no" value="no">
                <span class="label-text">No</span>
              </label>
            </div>
          </fieldset>
          <fieldset class="fieldset-radio">
            <legend>Is the technical volume a single portable document format (PDF) file, including graphics?</legend>
            <div class="field field-radio">
              <label>
                <input type="radio" name="pdf" id="pdf-yes" value="yes">
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" name="pdf" id="pdf-no" value="no">
                <span class="label-text">No</span>
              </label>
            </div>
          </fieldset>
          <fieldset class="fieldset fieldset-radio">
            <legend>Did you virus scan the document?</legend>
            <div class="field field-radio">
              <label>
                <input type="radio" name="virus-scan" id="virus-scan-yes" value="yes">
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" name="virus-scan" id="virus-scan-no" value="no">
                <span class="label-text">No</span>
              </label>
            </div>
          </fieldset>
          <fieldset class="fieldset fieldset-radio">
            <legend>Is the document less than or equal to twenty pages in length?</legend>
            <div class="field field-radio">
              <label>
                <input type="radio" name="length" id="length-yes" value="yes">
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" name="length" id="length-no" value="no">
                <span class="label-text">No</span>
              </label>
            </div>
          </fieldset>
          <fieldset class="fieldset fieldset-radio">
            <legend>Is the font 10 pt. or larger on 8-1/2" &times; 11" paper with one-inch margins?</legend>
            <div class="field field-radio">
              <label>
                <input type="radio" name="formatting" id="formatting-yes" value="yes">
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" name="formatting" id="formatting-no" value="no">
                <span class="label-text">No</span>
              </label>
            </div>
          </fieldset>
          <fieldset class="fieldset fieldset-radio">
            <legend>Does the document contain a header with the company name, topic number, and proposal number? This header can exist in the margin.</legend>
            <div class="field field-radio">
              <label>
                <input type="radio" name="header" id="header-yes" value="yes">
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" name="header" id="header-no" value="no">
                <span class="label-text">No</span>
              </label>
            </div>
          </fieldset>
          <div class="field">
            <label>
              <span class="label-text">Upload technical volume</span>
              <input type="file">
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