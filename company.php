<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="company company-background">
    <? include "_includes/_header.php"; ?>
    <main role="main">
      <div class="wrap">
        <form action="index.html">
          <h1 class="primary-header">My Company</h1>
          <div class="field">
            <label>
              <span class="label-text">Company name</span>
              <input type="text">
            </label>
          </div>
          <fieldset class="fieldset fieldset-mailing-address">
            <legend>Mailing address</legend>
            <div class="field field-street">
              <label>
                <span class="label-text">Street address</span>
                <input type="text">
              </label>
            </div>
            <div class="field field-city-state-zip">
              <div class="field field-city">
                <label>
                  <span class="label-text">City</span>
                  <input type="text">
                </label>
              </div>
              <div class="field field-state field-select">
                <label for="parties-requesting-agency-mailing-address-state">
                  <span class="label-text">State</span>
                  <select name="parties-requesting-agency-mailing-address-state" id="parties-requesting-agency-mailing-address-state" type="text">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                  </select>
                </label>
              </div>
              <div class="field field-zip">
                <label>
                  <span class="label-text">Zip code</span>
                  <input type="text">
                </label>
              </div>
            </div>
          </fieldset>
          <fieldset class="fieldset fieldset-point-of-contact">
            <legend>Point of contact</legend>
            <div class="field">
              <label>
                <span class="label-text">Name</span>
                <input type="text">
              </label>
            </div>
            <div class="field field-email">
              <label>
                <span class="label-text">Email</span>
                <input type="text">
              </label>
            </div>
            <div class="field field-phone-number">
              <label>
                <span class="label-text">Phone number</span>
                <input type="text">
              </label>
            </div>
            <div class="field field-fax-number">
              <label>
                <span class="label-text">Fax number</span>
                <input type="text">
              </label>
            </div>
          </fieldset>
          <h1>Identifiers</h1>
          <div class="field field-federal-tax-id">
            <label>
              <span class="label-text">Federal tax ID</span>
              <input type="text">
            </label>
          </div>
          <div class="field field-duns-number">
            <label>
              <span class="label-text">DUNS Number</span>
              <input type="text" /> 
            </label>
          </div>
          <div class="field field-cage-code">
            <label>
              <span class="label-text">Cage Code</span>
              <input type="text" /> 
            </label>
          </div>
          <h1>Background</h1>
          <div class="field field-number-short">
            <label>
              <span class="label-text">What year was your company founded?</span>
              <input type="text">
            </label>
          </div>
          <div class="field field-number field-number-short" data-branch-name="phase-1-awards-number">
            <label>
              <span class="label-text">How many Phase 1 awards (SBIR and STTR) has your firm received from the Federal Government (including DoD)?</span>
              <input type="number" name="phase-1-awards-number" min="0">
            </label>
          </div>
          <aside class="branch" data-branch-name="phase-1-awards-number" data-branch-min="1">
            <h1 class="branch-logic">If > 1 Phase 1 awards</h1>
            <div class="field field-number field-number-short">
              <label>
                <span class="label-text">What year did you receive your first Phase 1 award?</span>
                <input type="number" name="phase-1-awards-year">
              </label>
            </div>
          </aside>
          <div class="field field-number field-number-short">
            <label>
              <span class="label-text">How many Phase 2 awards (SBIR and STTR) has your firm received from the Federal Government (including DoD)?</span>
              <input type="number" min="0">
            </label>
          </div>
          <aside class="branch-phase-2 branch" data-branch-name="phase-2">
            <h1 class="branch-logic">If >1 Phase 2 awards</h1>
            <div class="field field-number field-number-short">
              <label>
                <span class="label-text">What year did you receive your first Phase 2 award?</span>
                <input type="text">
              </label>
            </div>
            <div class="field field-number field-number-short">
              <label>
                <span class="label-text">How many employees did you have at the time of your firm&rsquo;s first Phase 2 award?</span>
                <input type="number" min="0">
              </label>
            </div>
            <fieldset class="fieldset fieldset-radio">
              <legend>Has your firm successfully completed an Initial Public Offering ("IPO") of stock since receiving its first Phase 2 award that was the result, in part, of technology your firm developed under the Federal SBIR and/or STTR programs?</legend>
              <div class="field field-radio">
                <label>
                  <input type="radio" name="ipo" value="yes">
                  <span class="label-text">Yes</span>
                </label>
              </div>
              <div class="field field-radio">
                <label>
                  <input type="radio" name="ipo" value="no">
                  <span class="label-text">No</span>
                </label>
              </div>
            </fieldset>
          </aside>
          <div class="field field-number field-number-short">
            <label>
              <span class="label-text">How many employees do you currently have?</span>
              <input type="number" min="0">
            </label>
          </div>
          <div class="field field-number field-number-short">
            <label>
              <span class="label-text">How many patents have resulted, at least in part, from your firm&rsquo;s SBIR andd/or STTR awards?</span>
              <input type="number" min="0">
            </label>
          </div>
          <div class="field field-select field-total-revenue">
            <label>
              <span class="label-text">What was your firm&rsquo;s total revenue for the last fiscal year?</span>
              <span class="label-select">
                <select>
                  <option>Please choose one</option>
                </select>                
              </span>
            </label>
          </div>
          <div class="field field-number field-number-short">
            <label>
              <span class="label-text">What percentage of your firm&rsquo;s revenues during its last fiscal year is Federal SBIR and/or STTR funding (Phase I and/or Phase II)?</span>
              <input type="number" min="0"> 
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