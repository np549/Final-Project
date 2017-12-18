<?php  session_start();?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Register</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/addon.css">
<script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/mjvalidator.js"></script>
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
 <script type="text/javascript">
	$(document).ready(function() {
		$("#regFrm").bind("submit", function() {
			$("#msg").html("");
			$("#msg").val("");
			$(".erd").each(function(){jQuery(this).remove();});
			rfield = ["fname", "lname", "email", "phone", "birthday", "gender", "password"];
			rtype = ["req", "req", "email", "mobilenum", "date1", "req", "req"]; 
			var rv=true;
			var rx;
			for (i=0;i<rfield.length;i++) 
			{
				if(getValidate(rfield[i],rtype[i])==false)	
					rx=false;
			}
		 
			$("input,textarea").each(function(){ cleanup($(this)); });
			if(rx==false){
				return rx;
			}
 		});
});

</script>

<style>
.erd{ color:red; font-size:12px;}
#msg{ color:red; font-size:18px; padding:10px;;}
</style>
</head>

<body>
<div style="width:100%;">

 <div style="width:100%; margin:0 auto; color:#FFF; background-color:#333; height:80px;">
        <div style="width:40%; float:left;">
            <h1><?php //this how to print some data;
                 echo "<a href='index.php' style='text-decoration:none; color:#fff;'>".'NJIT TODO'."</a>";?> 
            </h1>
        </div>
        <div style="width:60%; float:right;">
            <h3>
            <?php if(count($_SESSION)>0){?>
            &nbsp;&nbsp;&nbsp;
            <a href="index.php?page=accounts&action=all" style="color:#FFF;">Accounts</a>
            &nbsp;&nbsp;&nbsp;
            <a href="index.php?page=tasks&action=all&id=<?php echo $_SESSION['userID'];?>" style="color:#FFF;">Tasks</a>
            &nbsp;&nbsp;&nbsp;
             <a href="index.php?page=accounts&action=logout" style="color:#FFF;">Logout</a>
			<?php } else { ?>
            &nbsp;&nbsp;&nbsp;
            <a href="index.php?page=accounts&action=register" style="color:#FFF;">Register</a>
            &nbsp;&nbsp;&nbsp;
            <a href="index.php" style="color:#FFF;">Login</a>
            <?php } ?>
            </h3> 
        </div>
  </div>
    <div style="clear:both;"></div>
	 
    <div style="width:70%; margin:0 auto;">
    	 <div id="msg"><?php echo $data['error'];?></div>
        <span><h2>Register</h2></span>
          <div style="width:60%;">
            <form action="index.php?page=accounts&action=register" id="regFrm" name="regFrm" method="post">
                <div style="width:100%; height:30px;">
<div style="width:40%; float:left;"><label><b>First name : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="fname" name="fname"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Last name : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="lname" name="lname"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Email : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="email" name="email"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Phone : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="phone" name="phone"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Birthday : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="birthday" name="birthday" placeholder="mm-dd-yyyy"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Gender : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="gender" name="gender"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Password : </b></label></div>
                	<div style="width:60%; float:right;"><input type="password" id="password" name="password" minlength="6"></div>
                </div>
                 <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label>&nbsp;</label></div>
                	<div style="width:60%; float:right;"><input type="submit" name="submit" id="submit" value="Submit form"></div>
                </div>
 </form>
        </div>
</div>
     
</div>



<script src="js/scripts.js"></script>
<script src="js/scripts.js"></script>
<script src="js/scripts.js"></script>
<style>
.footer {
    position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 1rem;
  background-color: #9B9999;
  text-align: center;
}
</style>

<div class="footer">
  <p>Developed by- NAUREEN PATHAN (NP549) </p>
</div>
</body>
</html>
