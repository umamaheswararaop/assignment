<?php 
//Database Connection
include('dbconnection.php');
if(isset($_POST['submit']))
  {
     	$eid=$_REQUEST['editid'];
  	//Getting Post Values
    $name=$_REQUEST['username'];
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $email=$_REQUEST['email'];
    $gender=$_REQUEST['gender'];
    $color= $_REQUEST['color'];   
        $chk="";  
        foreach($color as $chk1)  
        {  
        $chk .= $chk1.",";  
        }  

    //Query for data updation
     $query=mysqli_query($con, "update  multiple_users set user_name='$name',user_fname='$fname', user_lname='$lname', user_email='$email', user_gender='$gender', user_favcolor='$chk' where user_id='$eid'");
     //exit("update  multiple_users set user_name='$name',user_fname='$fname', user_lname='$lname', user_email='$email', user_gender='$gender', user_favcolor='$chk' where user_id='$eid'");
    if ($query) {
    echo "<script>alert('You have successfully update the User data');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>PHP update Operation!!</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="font-awesome.min.css">
<script src="jquery-3.5.1.min.js"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>
<div class="signup-form">
    <form  method="POST">
 <?php
$eid=$_GET['editid'];
$sql="select * from multiple_users where user_id='$eid'";
$ret = mysqli_query($con, $sql) or die( mysqli_error($con));
//$ret=mysqli_query($con,"");
while ($row= mysqli_fetch_array($ret)) {
    $color = $row['user_favcolor'];
    $color1 = explode(',', $color);
//    print_r($color1);
?>
		<h2>Update </h2>
		<p class="hint-text">Update your info.</p>
        <div class="form-group">
            <input type="text" class="form-control" name="username" placeholder="Enter User Name" required="true" value="<?php echo $row['user_name']?>">
        </div>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fname" placeholder="First Name" required="true" value="<?php echo $row['user_fname']?>"></div>
				<div class="col"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="true" value="<?php echo $row['user_lname']?>"></div>
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Enter your Email id" required="true" value="<?php echo $row['user_email']?>">
        </div>
                <div class="form-group">
        <label>Gender</label><br />
        <input name="gender" id="gender" type="radio" value="male" <?php echo ($row['user_gender'] == 'male') ?  "checked" : "" ;  ?>> Male 
                         <input name="gender" id="gender" type="radio" value="female" <?php echo ($row['user_gender']== 'female') ?  "checked" : "" ;  ?>> Female

                </div>
                <div class="form-group">
                    <label>Choose colour</label><br />
                             <input type="checkbox" id="blue" name="color[]" value="Blue" <?php echo (@$color1[0] == 'Blue') ?  "checked" : "" ;  ?>>
                        <label for="blue"> Blue </label><br>
                        <input type="checkbox" id="red" name="color[]" value="Red" <?php echo (@$color1[1] == 'Red') ?  "checked" : "" ;  ?>>
                        <label for="red"> Red </label><br>
                        <input type="checkbox" id="green" name="color[]" value="Green" <?php echo (@$color1[2] == 'Green') ?  "checked" : "" ;  ?>>
                        <label for="green"> Green </label><br>
                </div>       
      <?php 
}?>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>

</div>
</body>
</html>