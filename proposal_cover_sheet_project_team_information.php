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
          <h1>Project team information</h1>
          <section class="fieldset fieldset-radio">
            <h1>Are teaming partners or subcontractors proposed?</h1>
            <div class="field field-radio">
              <label>
                <input type="radio" name="teaming-partners" id="teaming-partners-yes" value="yes">
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" name="teaming-partners" id="teaming-partners-no" value="no">
                <span class="label-text">No</span>
              </label>
            </div>
          </section>
          <section class="fieldset fieldset-checkbox">
            <h1>Will you be working with a&hellip;</h1>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-university" value="university">
                <span class="label-text">University</span>
              </label>
            </div>
            <section class="fieldset is-branch">
              <div class="field">
                <label>
                  <span class="label-text">Which one?</span>
                  <input type="text">
                </label>
              </div>
              <div class="field">
                <label>
                  <span class="label-text">Who&rsquo;s your point of contact there?</span>
                  <input type="text">
                </label>
              </div>
            </section>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-hbcu" value="hbcu">
                <span class="label-text">Historically black college or university, or a minority insitutions program? (HBCU/MI)</span>
              </label>
            </div>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-nonprofit" value="university">
                <span class="label-text">Nonprofit</span>
              </label>
            </div>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-federal-laboratory" value="university">
                <span class="label-text">Federal laboratory</span>
              </label>
            </div>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-other-federal-facility" value="federal-laboratory">
                <span class="label-text">Other federal facility</span>
              </label>
            </div>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-small-business" value="other-federal-facility">
                <span class="label-text">Small business</span>
              </label>
            </div>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-large-business" value="other-federal-facility">
                <span class="label-text">Large business</span>
              </label>
            </div>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-other" value="other-federal-facility">
                <span class="label-text">Other</span>
              </label>
            </div>
          </section><!-- fieldset#equivalent-work -->
          <section class="fieldset fieldset-radio">
            <h1>Are you proposing to use foreign nationals as defined in section 3.5 of the solicitation for work under the proposed effort?</h1>
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
            <button>Save and continue</button>
            <a href="#">Cancel</a>
            <p>You can also <button>Save and return to the proposal progress report</button></p>
          </footer>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>