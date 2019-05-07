<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<style>
.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  position: left;
  top: 0px;
  width: 100%;
  height: 100%;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}

</style>

<div class="nav-side-menu">
    <div class="brand">Brand Logo</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a ><i class="fa fa-dashboard fa-lg"></i> Dashboard</a>
                  
                
                </li>

                <li  data-toggle="collapse" data-target="#Cust" class="collapsed active">
                  <a href="#"><i class=" fa fa-user"></i> Customer <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="Cust">
                    <li class="active"><a href="{{action('customer@customers')}}">All Customer</a></li>
                    <li><a href="{{action('customer@neww')}}">Create new</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Place <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li class="active"><a href="#">All Places</a></li>
                  <li><a  href="{{action('placecon@placeconnew')}}">Create New </a></li>
                </ul>
                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-binoculars fa-lg"></i> Activitys <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li class="active"><a href="#">All Activitys</a></li>
                  <li><a  href="{{action('activitycon@activityew')}}">Create New </a></li>
                </ul>
                <li data-toggle="collapse" data-target="#vehc" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Vehicle  <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="vehc">
                  <li class="active"><a href="#">All Vehicle </a></li>
                  <li><a href="{{action('vehiclecon@vehiclenew')}}">Create New</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#htl" class="collapsed">
                  <a href="#"><i class="fa fa-cutlery fa-lg"></i> Hotel  <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="htl">
                  <li class="active"><a href="#">All Hotel </a></li>
                  <li><a href="{{action('hotelcon@hotelsnew')}}">Create New</a></li>
                </ul>
                <li  data-toggle="collapse" data-target="#products" class="collapsed ">
                  <a href="#"><i class="fa fa-tachometer"></i> Drivers <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="{{action('drivers@drivnew')}}">Create new</a></li>
                </ul>
                 <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> Profile
                  </a>
                  </li>

                 <li>
                  <a href="#">
                  <i class="fa fa-users fa-lg"></i> Users
                  </a>
                </li>
            </ul>
     </div>
</div>