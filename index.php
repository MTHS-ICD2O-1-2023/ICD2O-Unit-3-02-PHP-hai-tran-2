<!DOCTYPE html>
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Pyramid program, in PHP" />
  <meta name="keywords" content="mths, ICD2O" />
  <meta name="author" content="Hai Tran" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.light_blue-green.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <title>Volume of a Pyramid webpage, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Pyramid program, with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <p>Formula</p>
      <br />
      <p>V = (L x W x H) / 3</p>
      <br />
      <p>Please enter integers for dimensions:</p>
      <div class="image">
        <img src="./images/pyramid.png" alt="volume of pyramid image" />
      </div>
      <form action="answer.php" method="GET">
        <!-- Numeric Textfield with Floating Label -->
        Length:
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="length-of-pyramid" step="0.01" />
          <label class="mdl-textfield__label" for="length-of-pyramid"></label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        mm
        <br />
        <!-- Numeric Textfield with Floating Label -->
        Width:
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="width-of-pyramid" step="0.01" />
          <label class="mdl-textfield__label" for="width-of-pyramid"></label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        mm
        <br />
        <!-- Numeric Textfield with Floating Label -->
        Height:
        <div class="mdl-textfield mdl-js-textfield">
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="height-of-pyramid" step="0.01" />
          <label class="mdl-textfield__label" for="height-of-pyramid"></label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        mm
        <br />
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
          Calculate
        </button>
      </form>
    </main>
  </div>
</body>

</html>