<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-cover-sheet proposal-cover-sheet-project-team-information">
    <? include "_includes/_header.php"; ?>
    <header class="proposal-banner">
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
        <form action="proposal_cover_sheet_principal_investigator_information.php">
          <? include "_includes/_proposal_nav.php" ?>
          <h1>Project team information</h1>
          <fieldset class="fieldset fieldset-radio">
            <legend>Are teaming partners or subcontractors proposed?</legend>
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
          </fieldset>
          <fieldset class="fieldset fieldset-checkbox fieldset-working-with">
            <legend>Will you be working with a&hellip;</legend>
            <div class="field field-checkbox" data-branch-name="working-with-a-university">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-university" value="university">
                <span class="label-text">University</span>
              </label>
            </div>
            <aside class="branch" data-branch-name="working-with-a-university" data-branch-value="university">
              <h1 class="branch-logic">If university</h1>
              <div class="field field-collaborator-name">
                <label>
                  <span class="label-text">Which one?</span>
                  <input type="text">
                </label>
              </div>
              <div class="field field-collaborator-point-of-contact">
                <label>
                  <span class="label-text">Who&rsquo;s your point of contact there?</span>
                  <input type="text">
                </label>
              </div>
            </aside>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-hbcu" value="hbcu">
                <span class="label-text">Historically black college or university, or a minority insitutions program? (HBCU/MI)</span>
              </label>
            </div>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-nonprofit" value="nonprofit">
                <span class="label-text">Nonprofit</span>
              </label>
            </div>
            <div class="field field-checkbox">
              <label>
                <input type="checkbox" name="working-with-a" id="working-with-a-federal-laboratory" value="federal-laboratory">
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
          </fieldset><!-- fieldset#equivalent-work -->
          <fieldset class="fieldset fieldset-radio">
            <legend>Are you proposing to use foreign nationals as defined in section 3.5 of the solicitation for work under the proposed effort?</legend>
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