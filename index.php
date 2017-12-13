<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Url School - Test your skill </title>
<link rel="shortcut icon" href="image/logo_social.png" />
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>

<body>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo"><img src="image/logo.png" width=200 height=50 alt="Url School"></span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:red">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
<!-- sign in form begins -->  
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="college" name="University" placeholder="Enter your universit name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="mob"></label>  
  <div class="col-md-12">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="sign up" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<!--Footer start-->
<div class="row footer">
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#feedback">Feedback</a>
</div>
<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#about">AltCoders</a>
</div>
</div>



<!-- Modal For Developers-->
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/developers/arefin.jpeg" width=100 height=100 alt="Sharif Arefin" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="http://web.altcoders.com" style="color:#202020; font-family:'typo' ; font-size:14px" title="Find on Facebook">Sharif Arefin</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:12px" class="title1">+880 1711967079</h4>
		<h4 style="font-family:'typo' ;font-size:13px">arefin@altcoders.com</h4>
		<h4 style="font-family:'typo' ;font-size:13px">Northern University Bangladesh</h4></div></div>
		</p>
		
		 <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/developers/iffa.jpg" width=100 height=100 alt="Khatune Jannat Iffa" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/jannat.iffa" style="color:#202020; font-family:'typo' ; font-size:14px" title="Find on Facebook">Khatune Jannat Iffa</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:12px" class="title1">+880 19--------</h4>
		<h4 style="font-family:'typo' ;font-size:13px">iffa@altcoders.com</h4>
		<h4 style="font-family:'typo' ;font-size:12px">Northern University Bangladesh</h4></div></div>
		</p>
		
		 <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/developers/tonny.jpg" width=100 height=100 alt="iffat ara tonny" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/profile.php?id=100005650875844" style="color:#202020; font-family:'typo' ; font-size:14px" title="Find on Facebook">Iffat Ara Tonny</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:12px" class="title1">+880 16--------</h4>
		<h4 style="font-family:'typo' ;font-size:13px">tonny@altcoders.com</h4>
		<h4 style="font-family:'typo' ;font-size:12px">Northern University Bangladesh</h4></div></div>
		</p>
		
		 <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/developers/mukta.jpg" width=100 height=100 alt="Mst.Achia khatun" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/orsha.orsha.520" style="color:#202020; font-family:'typo' ; font-size:14px" title="Find on Facebook">Mst.Achia khatun</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:12px" class="title1">+880 19--------</h4>
		<h4 style="font-family:'typo' ;font-size:13px">mukta@altcoders.com</h4>
		<h4 style="font-family:'typo' ;font-size:12px">Northern University Bangladesh</h4></div></div>
		</p>
		
		<p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/developers/sharmin.png" width=100 height=100 alt="Sharmin Jahan Daizy" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/sharminjahan.daizy" style="color:#202020; font-family:'typo' ; font-size:14px" title="Find on Facebook">Sharmin Jahan Daizy</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:12px" class="title1">+880 19--------</h4>
		<h4 style="font-family:'typo' ;font-size:13px">daizy@altcoders.com</h4>
		<h4 style="font-family:'typo' ;font-size:12px">Northern University Bangladesh</h4></div></div>
		</p>
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal For About Us-->
<div class="modal fade title1" id="about">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/logo_social.png" width=100 height=100 alt="AltCoders" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="http://web.altcoders.com" style="color:#202020; font-family:'typo' ; font-size:16px" title="Find on Facebook">AltCoders</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:13px" class="title1">+01778-681691</h4>
		<h4 style="font-family:'typo' ;font-size:14px">info@altcoders.com</h4>
		<h4 style="font-family:'typo' ;font-size:14px">Love Road, Tejgaon, Dhaka-1208</h4></div></div>
		</p>
		
		
      </div>
    
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOGIN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Modal for Feedback-->
	 <div class="modal fade" id="feedback">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">Let us know</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<div style="font-size:14px">
<?php if(@$_GET['q'])echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
else
{echo' 
<form role="form"  method="post" action="feed.php?q=feedback.php">
<div class="row">
<div class="col-md-3"><b>Name:</b><br /><br /><br /><b>Subject:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text"><br />    
   <input id="name" name="subject" placeholder="Enter subject" class="form-control input-md" type="text">    

</div>
</div>
</div><!--End of row-->

<div class="row">
<div class="col-md-3"><b>E-Mail address:</b></div>
<div class="col-md-9">
<!-- Text input-->
<div class="form-group">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">    
 </div>
</div>
</div><!--End of row-->

<div class="form-group"> 
<textarea rows="5" cols="8" name="feedback" class="form-control" placeholder="Write feedback here..."></textarea>
</div>
<div class="form-group" align="center">
<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
</div>
</form>';}?>
</div><!--col-md-6 end-->
<div class="col-md-3"></div></div>
</div></div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
