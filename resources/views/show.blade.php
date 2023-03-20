<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <table border="1" class="table table-bordered table-striped">
    <tr>
    <th>Name</th>
    <th>Description</th>
    <th>View</th>
    <th>Download</th>
</tr>
@foreach($data as $data)
<tr>
  <td>{{$data->name}}</td>
  <td>{{$data->description}}</td>
  <td><a href="{{url('/view',$data->id)}}">View</a></td>
  <td><a href="{{url('/download',$data->file)}}">Download</a></td>

</tr>
@endforeach


</table>
</div>
    
</body>
</html>