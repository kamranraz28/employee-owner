<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        
        <form action="/login" method="POST">
          @csrf
          
          <div class="form-group">
            <label for="">E-mail:</label>
            <input type="text" class="form-control" name="email" placeholder="Enter your email">
            
          </div>
          <div class="form-group">
            <label for="">Password:</label>
            <input type="text" class="form-control" name="password" placeholder="Enter your password">
           
          </div>
          <input type="submit" class="btn btn-primary my-3" value="Login">
        </form>
    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>