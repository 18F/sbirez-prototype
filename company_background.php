<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="company company-background">
    <? include "_includes/_header.php"; ?>
    <main role="main">
      <div class="wrap">
        <form action="index.html">
          <? include "_includes/_company_nav.php" ?>
          <h1>Background</h1>
          <div class="field field-year">
            <label>
              <span class="label-text">What year was your company founded?</span>
              <input type="text">
            </label>
          </div>
          <div class="field field-number">
            <label>
              <span class="label-text">How many Phase 1 awards (SBIR and STTR) has your firm received from the Federal Government (including DoD)?</span>
              <input type="number">
            </label>
          </div>
          <div class="field field-number is-branch">
            <label>
              <span class="label-text">What year did you receive your first Phase 1 award?</span>
              <input type="text">
            </label>
          </div>
          <div class="field field-num-phase-2-awards">
            <label>
              <span class="label-text">How many Phase 2 awards (SBIR and STTR) has your firm received from the Federal Government (including DoD)?</span>
              <input type="text">
            </label>
          </div>
          <section class="fieldset fieldset-phase-2 is-branch">
            <h1>Phase 2</h1>
            <div class="field field-year">
              <label>
                <span class="label-text">What year did you receive your first Phase 2 award?</span>
                <input type="text">
              </label>
            </div>
            <div class="field field-year">
              <label>
                <span class="label-text">How many employees did you have at the time of your firm&rsquo;s first Phase 2 award?</span>
                <input type="text">
              </label>
            </div>
            <section class="fieldset fieldset-radio">
              <h1>Has your firm successfully completed an Initial Public Offering ("IPO") of stock since receiving its first Phase 2 award that was the result, in part, of technology your firm developed under the Federal SBIR and/or STTR programs?</h1>
              <div class="field field-radio">
                <label>
                  <input type="radio">
                  <span class="label-text">Yes</span>
                </label>
              </div>
              <div class="field field-radio">
                <label>
                  <input type="radio">
                  <span class="label-text">No</span>
                </label>
              </div>
            </section>
          </section>
          <div class="field field-number">
            <label>
              <span class="label-text">How many employees do you currently have?</span>
              <input type="number">
            </label>
          </div>
          <div class="field field-number">
            <label>
              <span class="label-text">How many patents have resulted, at least in part, from your firm's SBIR andd/or STTR awards?</span>
              <input type="number">
            </label>
          </div>
          <div class="field field-select">
            <label>
              <span class="label-text">What was your firm&rsquo;s total revenue for the last fiscal year?</span>
              <span class="label-select">
                <select>
                  <option>Please choose one</option>
                </select>                
              </span>
            </label>
          </div>
          <div class="field field-number">
            <label>
              <span class="label-text">What percentage of your firm&rsquo;s revenues during its last fiscal year is Federal SBIR and/or STTR funding (Phase I and/or Phase II)?</span>
              <input type="number" /> 
            </label>
          </div>
          <footer>
            <button>Save and return</button>
          </footer>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>