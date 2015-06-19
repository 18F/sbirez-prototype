<!DOCTYPE html>
<html>
  <? include "_includes/_head.php"; ?>
  <body class="company company-background">
    <? include "_includes/_header.php"; ?>
    <header class="company-banner">
      <div class="wrap">
        <h1>My company</h1>
      </div>
    </header>
    <main role="main">
      <div class="wrap">
        <form action="index.html">
          <? include "_includes/_company_nav.php" ?>
          <h1>Company info</h1>
          <div class="field">
            <label>
              <span class="label-text">Company name</span>
              <input type="text">
            </label>
          </div>
          <section class="fieldset fieldset-mailing-address is-branch">
            <h1>Mailing address</h1>
            <div class="field field-street">
              <label>
                <input type="text">
                <span class="label-text">Street address</span>
              </label>
            </div>
            <div class="field field-city">
              <label>
                <input type="text">
                <span class="label-text">City</span>
              </label>
            </div>
            <div class="field field-state">
              <label>
                <input type="text">
                <span class="label-text">State</span>
              </label>
            </div>
            <div class="field field-zip">
              <label>
                <input type="text">
                <span class="label-text">Zip code</span>
              </label>
            </div>
          </section>
          <section class="fieldset fieldset-point-of-contact">
            <h1>Point of contact</h1>
            <div class="field">
              <label>
                <span class="label-text">Name</span>
                <input type="text">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Email</span>
                <input type="text">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Phone number</span>
                <input type="text">
              </label>
            </div>
            <div class="field">
              <label>
                <span class="label-text">Fax number</span>
                <input type="text">
              </label>
            </div>
          </section>

          <footer>
            <button type="submit">Save</button>
            <a href="#">Cancel</a>
          </footer>
        </form>
      </div>
    </footer>
    <? include "_includes/_footer.php"; ?>
  </body>
</html>