<html>

<head>
  <title>Add Guide for the Guiding the Road. </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  
  <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/Home.css" media="screen">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  
<link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
  
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/Screenshot2022-01-08133723.jpg"
}</script><style>
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap');
</style>
</head>

<body>
<header class="u-clearfix u-header u-header" id="sec-89ad"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="/" class="u-image u-logo u-image-1" data-image-width="635" data-image-height="373">
          <img src="images/Screenshot2022-01-08133723.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Home.html" style="padding: 10px 20px;">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="about" style="padding: 10px 20px;">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact" style="padding: 10px 20px;">Contact</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.html">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="about">About</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact.blade.php">Contact</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
<hr style="position: relative;
        top: 20px;
        border: none;
        height: 20px;
        background:black;
        margin-bottom: 50px;">
        <div class="container">
  <div class="container">
    <h1> Form to fill the Details</h1>
    <form  method="POST" action="{{route('supply')}}">
      @csrf
      @method('POST')
      Name <input class="form-control" type="text" name="name"><br>
      Address<input class="form-control" type="text" name="address"><br>
     It is Okay if anyone call you..?
      <div class="form-check">
        <input class="form-check-input" type="radio" name="true" id="flexRadioDefault1" value="yes">
        <label class="form-check-label">
          Yes It is Okay..
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="true" id="flexRadioDefault2"  value="no">
        <label class="form-check-label" >
          No Inform me with the Text message!!!
        </label>
      </div>
      <br>
      Mobile Number<input class="form-control" type="number" name="mobile">
      Latitude <input class="form-control"  id="lat" type="text" name="latitude" readonly>
      Longitude <input class="form-control" id="long" type="text" name="longitude" readonly> <br>  

      <input type="submit" class="btn btn-primary" value="success"/>


    </form>
  </div>
  
  <script>

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
 

function showPosition(position) {
  document.getElementById('lat').value =  position.coords.latitude ;
  document.getElementById('long').value =  position.coords.longitude;
}
</script>
</body>

</html>