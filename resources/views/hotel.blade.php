<!DOCTYPE html>
<html lang="en">
<head>
  <title>CREATE NEW HOTEL</title>
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
  <h4>Create New Hotel</h4><hr>
  
 <form name="qryform" id="qryform" method="post" action="/savecus"  novalidate="novalidate">
 {{ csrf_field() }}
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label>Place:</label>
      <select class="form-control" >
        <option>1</option>
        <option>2</option>
        <option>3</option>
      <select>
    </div>
    <div class="form-group">
      <label>Images:</label>
      <input type="file"  id="imgs" name="imgs">
    </div>
	<div class="form-group">
      <label>Remark:</label>
      <textarea name="Remark" class="form-control" id="Remark" placeholder="Remark"></textarea>
    </div>
	
    
    <button type="submit" class="btn btn-default">Submit</button>
    <button type="clear" class="btn btn-default">Clear</button>
  </form>
  </div>
    </div>

  </div>
</div>

</body>
</html>
