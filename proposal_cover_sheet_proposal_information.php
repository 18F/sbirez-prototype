<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-cover-sheet proposal-cover-sheet-proposal-information">
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
        <form action="proposal_cover_sheet_project_team_information.php">
          <h1>Proposal information</h1>
          <div class="field field-text">
            <label>
              <span class="label-text">Proposed cost</span>
              <input type="text" id="proposed-cost" />
            </label>
          </div>
          <section class="fieldset fieldset-discretionary-technical-assistance">
            <section class="fieldset fieldset-radio">
              <h1>Does the proposed cost include discretionary technical assistance (<abbr title="discretionary technical assistance">DTA</abbr>?</h1>
              <div class="field field-radio">
                <label>
                  <input type="radio" name="dta" id="dta-yes" value="yes">
                  <span class="label-text">Yes</span>
                </label>
              </div>
              <div class="field field-radio">
                <label>
                  <input type="radio" name="dta" id="dta-no" value="no">
                  <span class="label-text">No</span>
                </label>
              </div>
            </section>
            <aside class="is-branch">
              <div class="field">
                <span class="label-text">What is the proposed <abbr title="discretionary technical assistance">DTA</abbr> amount?</span>
                <input type="text" id="dta-amount" name="dta-amount" />
              </div>
            </aside>
          </section>
          <section class="fieldset fieldset-equivalent-work">
            <section class="fieldset fieldset-radio">
              <h1>Has a proposal for essentially equivalent work been submitted to other <abbr title="United States">U.S.</abbr> government agencies or <abbr title="Department of Defense">D.o.D.</abbr> component?</h1>
              <div class="field field-radio">
                <label>
                  <input type="radio" name="equivalent-work" id="equivalent-work-yes" value="yes">
                  <span class="label-text">Yes</span>
                </label>
              </div>
              <div class="field field-radio">
                <label>
                  <input type="radio" name="equivalent-work" id="equivalent-work-no" value="no">
                  <span class="label-text">No</span>
                </label>
              </div>
            </section>
            <aside class="fieldset fieldset-equivalent-work-detail is-branch">
              <h1>Equivalent work</h1>
              <div class="field field-text">
                <label>
                  <span class="label-text">List the name(s) of the agency or <abbr title="Department of Defense">D.o.D.</abbr> component. If SBIR or STTR, list Topic Number.</span>
                  <input type="text" id="equivalent-work-agencies" name="equivalent-work-agencies">
                </label>
              </div>
              <section class="fieldset">
                <section class="fieldset fieldset-radio">
                  <h1>Has a contract been awarded for any of the proposals listed above?</h1>
                  <div class="field field-radio">
                    <label>
                      <input type="radio" name="equivalent-work-award" id="equivalent-work-award-yes" value="yes"> 
                      <span class="label-text">Yes</span>
                    </label>
                  </div>
                  <div class="field field-radio">
                    <label>
                      <input type="radio" name="equivalent-work-award" id="equivalent-work-award-no" value="no"> 
                      <span class="label-text">No</span>
                    </label>
                  </div>
                </section>
                <aside class="is-branch">
                  <div class="field field-text">
                    <label>
                      <span class="label-text">Please provide the contract number:</span>
                      <input type="text" name="equivalent-work-award-number" id="equivalent-work-award-number" value=""> 
                    </label>
                  </div>
                </aside>
              </section>
            </aside>
          </section>
          <section class="fieldset fieldset-radio">
            <h1>Are you submitting assertions in accordance with DFARS 252.227-7017 "Identification and assertions use, release, or disclosure restriction"? See <a href="#">Section 11.5 of the solicitation</a>.</h1>
            <div class="field field-radio">
              <label>
                <input type="radio" id="DFARS-yes" name="DFARS" value="yes"> 
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" id="DFARS-no" name="DFARS" value="no"> 
                <span class="label-text">No</span>
              </label>
            </div>
          </section>
          <section class="fieldset fieldset-radio">
            <h1>Are you proposing research that utilizes human/animal subjects or recombinant DNA as described in section [3.11], [3.12], and [3.13] of the solicitation?</h1>
            <div class="field field-radio">
              <label>
                <input type="radio" id="animal-or-dna-yes" name="animal-or-dna" value="yes"> 
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" id="animal-or-dna-no" name="animal-or-dna" value="no"> 
                <span class="label-text">No</span>
              </label>
            </div>
          </section>
          <div class="field field-textarea">
            <label>
              <span class="label-text">Technical Abstract (Limit your abstract to 200 words with no classified or proprietary information)</span>
              <textarea id="technical-abstract" name="technical-abstract"></textarea>
            </label>
          </div>
          <div class="field field-textarea">
            <label>
              <span class="label-text">Anticipated Benefits/Potential Commercial Applications of the Research or Development. (No classified or proprietary information)</span>
              <textarea id="anticipated-benefits" name="anticipated-benefits"></textarea>
            </label>
          </div>
          <footer>
            <button>Save and continue</button>
            <a href="proposal_progress_report.php">Cancel</a>
            <p>You can also <button>Save and return to the proposal progress report</button></p>
          </footer>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>