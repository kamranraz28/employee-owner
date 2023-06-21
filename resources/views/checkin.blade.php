<!DOCTYPE html>
<html>
<head>
  <title>Check In Form</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="script.js"></script>
</head>
<body>
  <h1>Check In</h1>
  
  <form action="{{url('/checkin-data/'.$editdata->id )}}">
    <p>Current Time: <span id="current-time"></span></p>
    <input type="submit" value="Check In"> <br><br>

    <a href="{{url('/checkout')}}" class="btn btn-primary my-3">Already checked in? Want to checkout?</a>
  </form>
</body>
</html>
