<!DOCTYPE html>
<html lang="en">
<head>
  <title>CREATE NEW CUSTOMER</title>
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
  <h4>Create New Customer</h4><hr>
  
 <form name="qryform" id="qryform" method="post" action="/savecus"  novalidate="novalidate">
 {{ csrf_field() }}
    <div class="form-group">
      <label>Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label>Country:</label>
      <input type="text" class="form-control" id="cnty" placeholder="Enter Country" name="cnty">
    </div>
    
    <div class="form-group">
      <label>Phone No.:</label>
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone">
    </div>
	 <div class="form-group">
      <label>Address:</label>
      <input type="text" class="form-control" id="addrs" placeholder="Address" name="addrs">
    </div>
    <div class="form-group">
      <label>Date Of Birth:</label>
      <input type="date" class="form-control" id="dob" placeholder="Date of birth" name="dob">
    </div>
    <div class="form-group">
      <label>NIC:</label>
      <input type="text" class="form-control" id="nic" placeholder="National ID" name="nic">
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
