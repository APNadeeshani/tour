<!DOCTYPE html>
<html lang="en">
<head>
  <title>CREATE NEW DRIVER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    @include('includes.menu') 
    </div>
    <div class="col-sm-8">
    <div class="form-sec">
  <h4>Create New Driver</h4>
  
 <form name="qryform" id="qryform" method="post" action="/savecus"  novalidate="novalidate">
 {{ csrf_field() }}
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label>Address:</label>
      <input type="text" class="form-control" id="addrs" placeholder="Enter Address" name="addrs">
    </div>
    
    <div class="form-group">
      <label>Phone No.:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
    </div>
	<div class="form-group">
      <label>NIC:</label>
      <input type="text" class="form-control" id="inc" placeholder="Address" name="nic">
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
