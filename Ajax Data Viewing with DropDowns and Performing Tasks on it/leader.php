<?php
ob_start();
session_start();
require_once 'Database.php';

//  $id=$_SESSION['user'];


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
<head>

  <title> hello</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!--
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  -->
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
        <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

  <style type="text/css">
    /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
  </style>




  <script>
      $(document).ready(function(){
          $.post("reterivedata1.php", function(data, status){
            $("#memberName").append(data);
            $("#submit").attr('disabled',true);
          
          });

          $("#task").change(function(){

            var member = document.getElementById('memberName').value;
            var task = document.getElementById('task').value;

          if(member == -1)
          {
            alert("Please Select the Memeber Name");
          }
          else
          {
            if(task != "zero")
            {

              $.post("reterivedata.php", { mem:member , task:task }, function(data, status){
                //$("").detach();  
                //$("#reporttable").append("<tbody id='#reports'>"+data+"</tbody>");
                $("#reports").replaceWith("<tbody id=\"reports\">"+data+"</tbody>");
                $("#submit").attr('disabled',false);
                 
            });
            
            }

          }
          });
              $("#submit").click(function(event){
                  event.preventDefault();
                  var checkedReports = $("input:checkbox:checked").map(function(){
                    return $(this).val();
                }).get(); // <----
                
                      $.post("sumbitverfication.php", { checkedReports:checkedReports }, function(data, status){
                      
                      });
        
           });
    
     });
  </script>







  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  p{
    color:#29c1da;
    font-weight: 600;
  }
  .btn1 {
      font-size:0.875em;
      display:block;
      left:-60px;
      margin-top:35px;
     background-color: #42c5e2;
     color:black;border-radius:6px;
     border :1px solid #ccc;
     display:inline-block;
     padding:6px 12px;
     cursor:pointer;

    }
  
  td{
      font-size: 15px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;

  }
  h1 {
      font-size: 30px;
      text-transform: uppercase;
      color: white;
      font-weight: 600;
      margin-bottom: 30px; 
  }
 h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: white;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
  		height: 80px;
      background-color: black;
      color: #fff;
      padding: 150px 25px;
      font-family: Montserrat, sans-serif;
      
  }
  .container-fluid {
      padding: 0px 0px;

  }

  .bg-blue {
      background-color: #29c1da;
  }

  .bg-grey {
      background-color: #f6f6f6;
  }
  .bg-black {
      background-color: black;
  }
 
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
 .navbar {
      margin-bottom: 0;
      background-color: #29c1da;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  .table { 
  width:100%; 
  border-collapse: collapse; 
}
/* Zebra striping */
.tr:nth-of-type(odd) {
    background-color:transparent;
    width: 50px; 
    

}
.th { 
   
  color: black; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  /*border: 1px solid #ccc; */
  text-align: left !important;
  font-size:13px;
}
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @media only screen and (max-width: 760px), (min-width: 768px) and (max-width: 1024px) {
    /* ... */
    select {
        width: 150px;
    }
}
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
            <div ><img src="logo.png" height="90" width="180">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="#login">DASHBOARD</a></li>
        <li><a href="#services">SUBMIT REPORT</a></li>
        <li><a href="#">ASK FOR HELP</a></li>
        <li><a href="Logout.php">LOGOUT</a></li>

      </ul>
    </div>
  </div>
  </div>
</nav>

<div class="container-fluid text-center" style="margin-top:80px;">
  
     
        
       <div class="container-fluid bg-black" style="padding-left: 10%;padding-top: 150px;background-image: url('bold.jpg');background-repeat:repeat;background-size:100% 100%; ">

        <h1 style="color:#29c1da;font-size:50px;">Welcome <!--session--></h1>
        <h1 align="left"> Verify the Submitted Reports</h1>
        
        <table class="table">
            <tr>
              <td><h2 style="color:#29c1da">Select Member</h2>
              </td>
             </tr>
             <tr align="center"> 
            <td>
            


                   <select class="form-control" name="member" style="width:300px;" id="memberName">
                    <option value="-1" selected>Select Member Name</option>
                </select>
             </td>  
           
            </tr>
            <tr align="left">
            <td><h2 style="color:#29c1da">Select Task</h2>
              </td>
              </tr>
              <tr>

            <td><select class="form-control" name="task" style="width:350px;" id="task">
                <option value="zero" selected>Select Task</option>
                <option value="Initiation">Initiation</option>
                <option value="Phase 1">Phase 1</option>
                </select>
              </td> 
                
            </tr>

               
        </table>
          

        <table id="reporttable" class="table table-striped">
          <thead>
           <tr style="color:#29c1da;font-size:20px;" class="tr">
           <th>Report ID</th>
           <th>Number of Shares done</th>
           <th>File for the Report</th>
           <th>Type of Report</th>
           <th>Verified or Not? </th>
           </tr>
           </thead>
           <tbody id="reports">
       
           </tbody>
        </table>
        
        <input type="button" id="submit" value="Verify" class="btn1" style="width:220px;font-size:25px;float: left;">    
        
    
      </div>

    <div class="col-sm-8">
      
    </div>
  
</div>

<!-- Container (Contact Section) -->

<footer class="container-fluid text-center" style="height:120px; width:100%;background-color:#4c4c4c; ">
  <p align="right" style="color:black;">Copyright © 2016 Camp K12. All Rights Reserved.</p>
  
</footer>



</body>
</html>