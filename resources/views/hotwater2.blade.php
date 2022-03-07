<html>

<head>
  <title> Add Place for Hotwater </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  <style>
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
</head>

<body>

  <div class="container">
    <h1> Form to fill the Details</h1>
    <form class="form-control" method="POST" action="{{route('addhotwater')}}">
      @csrf
      @method('POST')
      Name <input class="form-control" type="text" name="name">
      Address<input class="form-control" type="text" name="address"><br>
      Are you Having Hot Water ??
      <div class="form-check">
        <input class="form-check-input" type="radio" name="true" id="flexRadioDefault1" value="yes">
        <label class="form-check-label">
          Having Water
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="true" id="flexRadioDefault2"  value="no">
        <label class="form-check-label" >
          Not Having Water
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