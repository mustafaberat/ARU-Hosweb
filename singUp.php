
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="shortcut icon" href="AruHosWebLogo.png" />
  <title>ARU Hosweb</title>
</head>

<body>

  <header>
    <div class="container">
      <div class="header-logo">
        <a href="firstpage.php" class="header-logo-img"><img src="AruHosWebLogo.png" alt="ARUHosWeb"></a>
      </div>
      <div class="header-signUp">
        <a class="header-signUp-a" href="singIn.php">Sign In</a>
      </div>
    </div>
  </header>

  <form method="post" action="" class="form">

    <div class="showcase">
      <div class="container">
        <div class="showcase-infos-bg">

          <div class="showcase-signUp-name">
            <div class="showcase-signUp-name-writing">Name
              <input class="showcase-signUp-name-input" name="signUp-name" type="text" required>
            </div>
          </div>

          <div class="showcase-signUp-surname">
            <div class="showcase-signUp-surname-writing">Surname
              <input class="showcase-signUp-name-input" name="signUp-surname" type="text" required>
            </div>
          </div>

          <div class="showcase-signUp-email">
            <div class="showcase-signUp-email-writing">E-mail
              <input class="showcase-signUp-email-input" name="signUp-email" type="email" required>
            </div>
          </div>

          <div class="showcase-signUp-phone">
            <div class="showcase-signUp-phone-writing">Telephone
              <input class="showcase-signUp-phone-input" name="signUp-number" placeholder="5*********" type="text"
                required maxlength="10">
            </div>
          </div>

          <div class="showcase-signUp-bdate">
            <div class="showcase-signUp-bdate-writing">Birth Date
              <input class="showcase-signUp-bdate-input" name="signUp-date" type="date" required>
            </div>
          </div>

          <div class="showcase-signUp-password">
            <div class="showcase-signUp-password-writing">Password
              <input class="showcase-signUp-password-input" name="signUp-password" type="password" required>
            </div>
          </div>

          <div class="showcase-button showcase-button-signUp">
            <button class="showcase-button-a" type="submit" name="signUp-button">Sign Up</button>
          </div>
        </div>


  </div>
  </div>
  </form>


  <footer>
    <div class="container">
      <div class="footer-item">
        <a class="footer-item-a" href="aboutUs.php">About Us</a>
      </div>
    </div>
  </footer>
  
</body>

</html>



<?php 

// session_start(); //In facebook -> we enter then stay at the page/ Left or Right Top corder Mustafa Aru stay there

$link = mysqli_connect('localhost', 'root', ''); //Local host root ve password

mysqli_select_db($link,'aruhosweb_database');

  if (isset($_POST["signUp-button"])) {
    $name = $_POST['signUp-name'];
    $surname = $_POST['signUp-surname'];
    $email = $_POST['signUp-email'];
    $phone = $_POST['signUp-number'];
    $date = $_POST['signUp-date'];
    $password = $_POST['signUp-password'];

  $res = mysqli_query($link, "INSERT INTO user VALUES ('$name' , '$surname' , '$email' , '$password','$phone' ,'$date' ) ");
  echo "<script type= 'text/javascript'>alert('Added'); </script>";
  header("location: singIn.php");
}

 ?>


<style type="text/css">
  /*! normalize.css v8.0.0 | MIT License | github.com/necolas/normalize.css */

/* Document
   ========================================================================== */

/**
 * 1. Correct the line height in all browsers.
 * 2. Prevent adjustments of font size after orientation changes in iOS.
 */

html {
  line-height: 1.15; /* 1 */
  -webkit-text-size-adjust: 100%; /* 2 */
}

/* Sections
   ========================================================================== */

/**
 * Remove the margin in all browsers.
 */

body {
  margin: 0;
}

/**
 * Correct the font size and margin on `h1` elements within `section` and
 * `article` contexts in Chrome, Firefox, and Safari.
 */

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

/* Grouping content
   ========================================================================== */

/**
 * 1. Add the correct box sizing in Firefox.
 * 2. Show the overflow in Edge and IE.
 */

hr {
  box-sizing: content-box; /* 1 */
  height: 0; /* 1 */
  overflow: visible; /* 2 */
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

pre {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/* Text-level semantics
   ========================================================================== */

/**
 * Remove the gray background on active links in IE 10.
 */

a {
  background-color: transparent;
}

/**
 * 1. Remove the bottom border in Chrome 57-
 * 2. Add the correct text decoration in Chrome, Edge, IE, Opera, and Safari.
 */

abbr[title] {
  border-bottom: none; /* 1 */
  text-decoration: underline; /* 2 */
  text-decoration: underline dotted; /* 2 */
}

/**
 * Add the correct font weight in Chrome, Edge, and Safari.
 */

b,
strong {
  font-weight: bolder;
}

/**
 * 1. Correct the inheritance and scaling of font size in all browsers.
 * 2. Correct the odd `em` font sizing in all browsers.
 */

code,
kbd,
samp {
  font-family: monospace, monospace; /* 1 */
  font-size: 1em; /* 2 */
}

/**
 * Add the correct font size in all browsers.
 */

small {
  font-size: 80%;
}

/**
 * Prevent `sub` and `sup` elements from affecting the line height in
 * all browsers.
 */

sub,
sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sub {
  bottom: -0.25em;
}

sup {
  top: -0.5em;
}

/* Embedded content
   ========================================================================== */

/**
 * Remove the border on images inside links in IE 10.
 */

img {
  border-style: none;
}

/* Forms
   ========================================================================== */

/**
 * 1. Change the font styles in all browsers.
 * 2. Remove the margin in Firefox and Safari.
 */

button,
input,
optgroup,
select,
textarea {
  font-family: inherit; /* 1 */
  font-size: 100%; /* 1 */
  line-height: 1.15; /* 1 */
  margin: 0; /* 2 */
}

/**
 * Show the overflow in IE.
 * 1. Show the overflow in Edge.
 */

button,
input { /* 1 */
  overflow: visible;
}

/**
 * Remove the inheritance of text transform in Edge, Firefox, and IE.
 * 1. Remove the inheritance of text transform in Firefox.
 */

button,
select { /* 1 */
  text-transform: none;
}

/**
 * Correct the inability to style clickable types in iOS and Safari.
 */

button,
[type="button"],
[type="reset"],
[type="submit"] {
  -webkit-appearance: button;
}

/**
 * Remove the inner border and padding in Firefox.
 */

button::-moz-focus-inner,
[type="button"]::-moz-focus-inner,
[type="reset"]::-moz-focus-inner,
[type="submit"]::-moz-focus-inner {
  border-style: none;
  padding: 0;
}


/**
 * Correct the padding in Firefox.
 */

fieldset {
  padding: 0.35em 0.75em 0.625em;
}

/**
 * 1. Correct the text wrapping in Edge and IE.
 * 2. Correct the color inheritance from `fieldset` elements in IE.
 * 3. Remove the padding so developers are not caught out when they zero out
 *    `fieldset` elements in all browsers.
 */

legend {
  box-sizing: border-box; /* 1 */
  color: inherit; /* 2 */
  display: table; /* 1 */
  max-width: 100%; /* 1 */
  padding: 0; /* 3 */
  white-space: normal; /* 1 */
}

/**
 * Add the correct vertical alignment in Chrome, Firefox, and Opera.
 */

progress {
  vertical-align: baseline;
}

/**
 * Remove the default vertical scrollbar in IE 10+.
 */

textarea {
  overflow: auto;
}

/**
 * 1. Add the correct box sizing in IE 10.
 * 2. Remove the padding in IE 10.
 */

[type="checkbox"],
[type="radio"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

/**
 * Correct the cursor style of increment and decrement buttons in Chrome.
 */

[type="number"]::-webkit-inner-spin-button,
[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

/**
 * 1. Correct the odd appearance in Chrome and Safari.
 * 2. Correct the outline style in Safari.
 */

[type="search"] {
  -webkit-appearance: textfield; /* 1 */
  outline-offset: -2px; /* 2 */
}

/**
 * Remove the inner padding in Chrome and Safari on macOS.
 */

[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

/**
 * 1. Correct the inability to style clickable types in iOS and Safari.
 * 2. Change font properties to `inherit` in Safari.
 */

::-webkit-file-upload-button {
  -webkit-appearance: button; /* 1 */
  font: inherit; /* 2 */
}

/* Interactive
   ========================================================================== */

/*
 * Add the correct display in Edge, IE 10+, and Firefox.
 */

details {
  display: block;
}

/*
 * Add the correct display in all browsers.
 */

summary {
  display: list-item;
}

/* Misc
   ========================================================================== */

/**
 * Add the correct display in IE 10+.
 */

template {
  display: none;
}

/**
 * Add the correct display in IE 10.
 */

[hidden] {
  display: none;
}


footer{
  display: flex;
  text-align: center;
  justify-content: center;
  align-items: center;
  background-color: var(--color-black-erased);
}

footer .container{
  background-color: transparent;
  width: 100%;
}

.footer-item{
  display: flex;
  text-align: center;
  justify-content: center;
  align-items: center;
}

.footer-item-a{
  width: 100%;
  color: white;
}



html {
  box-sizing: border-box;
}


a {
  text-decoration: none;
}

img {
  vertical-align: middle;
}

blockquote, dl, dd, h1, h2, h3, h4, h5, h6, figure, p, pre, fieldset, ul, ol, menu, form {
  margin: 0;
}

button, fieldset, iframe {
  border: 0;
}

fieldset, ul, ol, button, menu {
  padding: 0;
}

ol, ul {
 list-style: none;
}

textarea {
   resize: vertical;  
}

table {
  width: 100%;
}

td {
  padding: 0;
}

body{
  background-image: url(doctor_homepage.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  font-family: 'Roboto',sans-serif;
}

.container{
  max-width: var(--max-witdh);
  margin-left: auto;
  margin-right: auto;
  padding-left: var(--finger-size);
  padding-right: var(--finger-size);
  background-color: white;
}

header{
  border-bottom: 1px solid #ddd;
}

.header-logo-img img{
  width: 60px;
}

header .container{
  display: flex;
  align-items: center;
  padding-top: 10px;
  padding-bottom: 10px;
}

.header-signUp{
  display: flex;
  margin-left: auto;
  height: 30px;
}

.header-signUp-a{
  display: inline-flex; /*For making the center*/
  align-items: center;
  color: white;
  background-color: var(--color-normal-blue);
  padding: 10px 20px;
  border-radius: var(--border-radius);
}

.header-signUp-a:hover{
  background: var(--color-black-close);
  color: white;
  transition: .4s;
}


.header-signIn{
  display: flex;
  margin-left: 10px;
  height: 30px;
}

.header-signIn-a{
  display: inline-flex; /*For making the center*/
  align-items: center;
  color: white;
  background-color: var(--color-normal-blue);
  padding: 10px 20px;
  border-radius: var(--border-radius);
}

.header-signIn-a:hover{
  background: var(--color-black-close);
  color: white;
  transition: .4s;
}

.showcase{
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: center;
  align-items: center;
  margin-top: 195px;
  margin-bottom: 140px;
}

.showcase .container{
  background-color: inherit;
}

.showcase-slogan{
  padding: 15px 20px;
  color: var (--color-black-close);
}

.showcase h1{
  font-size: 44px;
  margin-top: 20px;
  margin-bottom: 20px;
}

.showcase-button{
  display: flex;
  justify-content: center;
  text-align: center;
  align-items: center;
  margin-left: auto;
  margin-right: auto;
  height: 50px;
}

.showcase-button-a{
  display: inline-flex;
  align-items: center;
  padding: 10px 20px;
  background-color: white;
  border-radius: var(--border-radius);
  color: #333;
  padding: 15px 30px;
  letter-spacing: 2px;
  font-weight: 600;
  cursor: pointer;
  text-transform: uppercase;
  text-align: center;
  font-size: 12px;
}

.showcase-button-a:hover{
  color: white;
  background-color: var(--color-normal-blue);
  transition: .4s;
}

.showcase-infos-bg{
  background-color: var(--color-black-erased);
  color: white;
  border-radius: var(--border-radius);
  padding: 20px 20px;
}

.showcase-infos-h3{
  margin: 5px;
  color: var(--color-normal-blue);
}

.showcase-signIn-usernameAndPassword{
  padding: 40px 100px;
  border-radius: var(--border-radius);
  background-color: var(--color-black-erased);
  color: white;
}

.showcase-signIn-email{
  padding: 10px 25px;
}

.showcase-signIn-password{
  padding: 10px 25px;
}

.showcase-signIn-email-input,
.showcase-signIn-password-input{
  margin-left: 10px;
  margin-bottom: 10px;
  width: 60%;
}

.forgotPassword{
  padding: 10px 100px;
  border-radius: var(--border-radius);
  background-color: var(--color-normal-blue);
  color: white;
}

.showcase-button-signIn{
  margin-bottom: 20px;
}

.forgotPassword-a{
  color: white;
}

.forgotPassword{
  margin-left: inherit;
}

.forgotPassword-a:hover{
  color: var(--color-black-close);
  transition: .2s;
}

.showcase-signUp-name,
.showcase-signUp-surname,
.showcase-signUp-email,
.showcase-signUp-phone,
.showcase-signUp-bdate,
.showcase-signUp-password,
.showcase-forgot-email,
.showcase-forgot-explaining{
  margin-bottom: 20px;
}

.showcase-signUp-name-input,
.showcase-signUp-surname-input,
.showcase-signUp-email-input,
.showcase-signUp-phone-input,
.showcase-signUp-bdate-input,
.showcase-signUp-password-input,
.showcase-forgot-email-input{
  margin-left: 20px;
}

.showcase-forgot-email-input{
  margin-left: 10px;
  margin-bottom: 20px;
}

.showcase-forgot-explaining{
  margin-bottom: 30px;
}

.form{
  display: inline;
}

:root{
  --color-navy-blue : #083B87;
  --color-normal-blue : #01ACEE;
  --color-black-close: #333;
  --color-black-erased: #333333ce;
  --max-width: 1140px;
  --font-family: 'Roboto',sans-serif;
  --border-radius: 3px;
  --finger-size: 40px;
}

</style>