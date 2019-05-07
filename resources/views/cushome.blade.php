<!DOCTYPE html>
<html lang="en">
<head>
  <title>CUSTOMER HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background:#f1f1f1; ">  
<div class="container" style="background:#e6e3e3;">
  <div class="row">
    <div class="col-sm-4">
    @include('includes.menu') 
    </div>
    <div class="col-sm-8">
    <h4>Customer</h4><hr>
    <div class="row col-md-12 custyle">
    <table class="table table-striped custab">
    <thead>
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Tel</th>
          <th>Country</th>
          <th>Created Date</th>
          <th class="text-center">Status</th>
          <th class="text-center">Option</th>
      </tr>
    </thead>
      @foreach($custom as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->cna}}</td>
            <td>{{$task->cad}}</td>
            <td>{{$task->tel}}</td>
            <td>{{$task->cot}}</td> 
            <td>{{$task->created_at}}</td>
           @if($task->sts)
            <td><button class="btn btn-success btn-xs">Active</button></td>
           @else
            <td><button class="btn btn-danger btn-xs"> Inactive</button></td>

           @endif 
            <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Edit</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
        </tr>
        @endforeach
    </table>
    </div>
    </div>

  </div>
</div>

</body>
</html>
