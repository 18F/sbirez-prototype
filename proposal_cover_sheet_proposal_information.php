<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="proposal proposal-cover-sheet proposal-cover-sheet-proposal-information">
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
        <form action="proposal_cover_sheet_project_team_information.php">
          <? include "_includes/_proposal_nav.php" ?>
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
          <fieldset class="fieldset-radio" data-branch-name="dta">
            <legend>Does the proposed cost include discretionary technical assistance (<abbr title="Discretionary technical assistance">DTA</abbr>)?</legend>
            <div class="field field-radio">
              <label for="dta-yes">
                <input type="radio" name="dta" id="dta-yes" value="yes">
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label for="dta-no">
                <input type="radio" name="dta" id="dta-no" value="no">
                <span class="label-text">No</span>
              </label>
            </div>
          </fieldset>
          <aside class="branch" data-branch-name="dta" data-branch-value="yes">
            <h1 class="branch-logic">If yes</h1>
            <div class="field field-proposed-dta-amount">
              <span class="label-text">What is the proposed <abbr title="discretionary technical assistance">DTA</abbr> amount?</span>
              <input type="text" id="dta-amount" name="dta-amount" />
            </div>
          </aside>
          <fieldset class="fieldset fieldset-radio" data-branch-name="equivalent-work">
            <legend>Has a proposal for essentially equivalent work been submitted to other <abbr title="United States">U.S.</abbr> government agencies or <abbr title="Department of Defense">DoD</abbr> component?</legend>
            <div class="field field-radio">
              <label for="equivalent-work-yes">
                <input type="radio" name="equivalent-work" id="equivalent-work-yes" value="yes">
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label for="equivalent-work-no">
                <input type="radio" name="equivalent-work" id="equivalent-work-no" value="no">
                <span class="label-text">No</span>
              </label>
            </div>
          </fieldset>
          <aside class="branch-equivalent-work branch" data-branch-name="equivalent-work" data-branch-value="yes">
            <h1 class="branch-logic">If yes</h1>
            <div class="field field-text">
              <label for="equivalent-work-agencies">
                <span class="label-text">List the name(s) of the agency or <abbr title="Department of Defense">DoD</abbr> component. If SBIR or STTR, list Topic Number.</span>
                <input type="text" id="equivalent-work-agencies" name="equivalent-work-agencies">
              </label>
            </div>
            <fieldset class="fieldset fieldset-radio" data-branch-name="equivalent-work-award">
              <legend>Has a contract been awarded for any of the proposals listed above?</legend>
              <div class="field field-radio">
                <label for="equivalent-work-award-yes">
                  <input type="radio" name="equivalent-work-award" id="equivalent-work-award-yes" value="yes"> 
                  <span class="label-text">Yes</span>
                </label>
              </div>
              <div class="field field-radio">
                <label for="equivalent-work-award-no">
                  <input type="radio" name="equivalent-work-award" id="equivalent-work-award-no" value="no"> 
                  <span class="label-text">No</span>
                </label>
              </div>
            </fieldset>
            <aside class="branch" data-branch-name="equivalent-work-award" data-branch-value="yes">
              <h1 class="branch-logic">If yes</h1>
              <div class="field field-text field-contract-number">
                <label for="equivalent-work-award-number">
                  <span class="label-text">Please provide the contract number:</span>
                  <input type="text" name="equivalent-work-award-number" id="equivalent-work-award-number" value=""> 
                </label>
              </div>
            </aside>
            </section>
          </aside>
          </section>
          <fieldset class="fieldset fieldset-radio">
            <legend>Are you submitting assertions in accordance with DFARS 252.227-7017 "Identification and assertions use, release, or disclosure restriction"? See Section 11.5 of the solicitation<a id="fn-1-a" href="#fn-1" class="footnote-button" rel="footnote">1</a>.</legend>
            <div class="field field-radio">
              <label for="DFARS-yes">
                <input type="radio" id="DFARS-yes" name="DFARS" value="yes"> 
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label for="DFARS-no">
                <input type="radio" id="DFARS-no" name="DFARS" value="no"> 
                <span class="label-text">No</span>
              </label>
            </div>
          </fieldset>
          <fieldset class="fieldset fieldset-radio is-error">
            <legend>Are you proposing research that utilizes human/animal subjects or recombinant DNA as described in section [3.11], [3.12], and [3.13] of the solicitation?</legend>
            <div class="field field-radio">
              <label for="animal-or-dna-yes">
                <input type="radio" id="animal-or-dna-yes" name="animal-or-dna" value="yes"> 
                <span class="label-text">Yes</span>
              </label>
            </div>
            <div class="field field-radio">
              <label for="animal-or-dna-no">
                <input type="radio" id="animal-or-dna-no" name="animal-or-dna" value="no"> 
                <span class="label-text">No</span>
              </label>
            </div>
            <span class="error-message">You must answer this question.</span>
          </fieldset>
          <div class="field field-textarea">
            <label for="technical-abstract">
              <span class="label-text">Technical Abstract (Limit your abstract to 200 words with no classified or proprietary information)</span>
              <textarea id="technical-abstract" name="technical-abstract"></textarea>
            </label>
          </div>
          <div class="field field-textarea is-error">
            <label for="anticipated-benefits">
              <span class="label-text">Anticipated Benefits/Potential Commercial Applications of the Research or Development. (No classified or proprietary information)</span>
              <textarea id="anticipated-benefits" name="anticipated-benefits"></textarea>
            </label>
            <span class="error-message">You must answer this question.</span>
          </div>
          <footer>
            <button>Save and continue</button>
          </footer>
          <section class="footnotes">
            <h1>Footnotes</h1>
            <ol>
              <li class="footnote" id="fn-1">
                <p> It&rsquo;s difficult to overstate how cumbersome this can make it for citizens looking to access the law. Imagine if the San Francisco Code weren&rsquo;t split into sections or subsections. It would take forever to find the information you need. Without clear organization, the law isn&rsquo;t very useful&mdash;to humans or machines. </p>
                <a href="#fn-1-a" class="reversefootnote">Return</a>
              </li>
            </ol>
          </section>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>