<!DOCTYPE html>
<html lang="en">
<head>
  <title>CREATE NEW VEHICLE</title>
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
    <div class="form-sec">
  <h4>Create New Vehicle</h4>
  
 <form name="qryform" id="qryform" method="post" action="/savecus"  novalidate="novalidate">
 {{ csrf_field() }}
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Vahicle Name" name="name">
    </div>
    <div class="form-group">
      <label>Vehicle No:</label>
      <input type="text" class="form-control" id="vhno" placeholder="Vahicle No" name="vhno">
    </div>
    <div class="form-group">
      <label>1KM RS:</label>
      <input type="text" class="form-control" id="kmrs" placeholder="1kM rupees" name="kmrs">
    </div>
	<div class="form-group">
      <label>Remark:</label>
      <textarea name="Remark" class="form-control" id="Remark" placeholder="Remark"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
    </div>

  </div>
</div>

</body>
</html>
