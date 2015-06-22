<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-technical-volume">
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
        <form action="proposal_cost_volume.php">
          <? include "_includes/_proposal_nav.php" ?>
          <h1>Technical volume</h1>
          <section class="fieldset fieldset-radio" aria-describedby="reviewed-requirements-legend">
            <h1 id="reviewed-requirements-legend">Have you reviewed all the requirements in the Air Force and DoD Solicitation instructions?</h1>
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
          </section>
          <section class="fieldset fieldset-radio" aria-describedby="pdf-legend">
            <h1 id="pdf-legend">Is the technical volume a single portable document format (PDF) file, including graphics?</h1>
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
          </section>
          <section class="fieldset fieldset-radio" aria-describedby="virus-scan-legend">
            <h1 id="virus-scan-legend">Did you virus scan the document?</h1>
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
          </section>
          <section class="fieldset fieldset-radio" aria-describedby="length-legend">
            <h1 id="length-legend">Is the document less than or equal to twenty pages in length?</h1>
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
          </section>
          <section class="fieldset fieldset-radio" aria-describedby="formatting-legend">
            <h1 id="formatting-legend">Is the font 10 pt. or larger on 8-1/2" &times; 11" paper with one-inch margins?</h1>
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
          </section>
          <section class="fieldset fieldset-radio" aria-describedby="header-legend">
            <h1 id="header-legend">Does the document contain a header with the company name, topic number, and proposal number? This header can exist in the margin.</h1>
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
          </section>
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