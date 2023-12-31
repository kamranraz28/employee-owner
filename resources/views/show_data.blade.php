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
        <a href="\add-data" class="btn btn-primary my-3 ">Add Employee</a>
        @if(Session::has('msg'))
        <p class="alert alert-success">{{Session::get('msg')}}</p>
        @endif
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Employee name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

    @foreach($showdata as $key=>$data)
    <tr>
      <td>{{ $key+1 }}</td>
      <td>{{ $data->name }}</td>
      <td>{{ $data->email }}</td>
      <td>
        <a href="{{url('/edit-data/'.$data->id )}}" class="btn btn-success">Edit</a>
        <a href="{{url('/delete-data/'.$data->id )}}" onclick = "return confirm(' Do you want to delete it?')" class="btn btn-danger">Delete</a>
        <a href="{{url('/records/'.$data->id )}}" class="btn btn-success">View Records</a>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
{{ $showdata->links() }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>