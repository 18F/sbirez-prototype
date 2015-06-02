<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-cover-sheet proposal-cover-sheet-proposal-information">
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
        <form action="proposal_cover_sheet_project_team_information.php">
          <? include "_includes/_form_nav.php" ?>
          <h1>Proposal information</h1>
          <summary class="error-message">
            <h1>We&rsquo;ve detected 3 errors on this page.</h1> 
            <ol>
              <li>You must answer the question &ldquo;Proposed cost&rdquo;</li>
              <li>You must answer the question &ldquo;Are you proposing research&hellip;&rdquo;</li>
              <li>You must answer the question &ldquo;Anticipated Benefits/Potential&hellip;&rdquo;</li>
            </ol>
          </summary>
          <div class="field field-text is-error field-proposed-cost">
            <label>
              <span class="label-text">Proposed cost</span>
              <input type="text" id="proposed-cost" />
            </label>
            <span class="error-message">Proposed cost must be non-zero.</span>
          </div>
          <section class="fieldset fieldset-discretionary-technical-assistance">
            <section class="fieldset fieldset-radio">
              <h1>Does the proposed cost include discretionary technical assistance (<abbr title="discretionary technical assistance">DTA</abbr>)?</h1>
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
              <div class="field field-proposed-dta-amount">
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
                  <div class="field field-text field-contract-number">
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
          <section class="fieldset fieldset-radio is-error">
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
            <span class="error-message">You must answer this question.</span>
          </section>
          <div class="field field-textarea">
            <label>
              <span class="label-text">Technical Abstract (Limit your abstract to 200 words with no classified or proprietary information)</span>
              <textarea id="technical-abstract" name="technical-abstract"></textarea>
            </label>
          </div>
          <div class="field field-textarea is-error">
            <label>
              <span class="label-text">Anticipated Benefits/Potential Commercial Applications of the Research or Development. (No classified or proprietary information)</span>
              <textarea id="anticipated-benefits" name="anticipated-benefits"></textarea>
            </label>
            <span class="error-message">You must answer this question.</span>
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