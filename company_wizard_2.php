<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="company company-background">
    <? include "_includes/_header.php"; ?>
    <header class="company-banner">
      <div class="wrap">
        <h1>Setup your company</h1>
      </div>
    </header>
    <main role="main">
      <div class="wrap">
        <form action="company_wizard_3.php">
          <h1>Is your company already registered?</h1>
          <p>All companies submitting proposals for funding through the SBIR program are required to register with the SBIR Company Registry. If you&rsquo;ve registered, you've received a unique number called an <strong>SBC Control ID.</strong></p>
          <section class="fieldset fieldset-radio">
            <h1>Registration status</h1>
            <div class="field field-radio">
              <label>
                <input type="radio" name="registered" id="registered-yes" value="yes">
                <span class="label-text">Yes, my company is already registered</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" name="registered" id="registered-no" value="no">
                <span class="label-text">No, my company is not already registered</span>
              </label>
            </div>
            <div class="field field-radio">
              <label>
                <input type="radio" name="registered" id="registered-idk" value="idk">
                <span class="label-text">I don&rsquo;t know</span>
              </label>
            </div>
          </section>
          <footer>
            <button>Save and continue</button>
          </footer>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>