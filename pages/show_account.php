<?php  session_start();?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Account Details</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
 <link rel="stylesheet" href="css/bootstrap.min.css">

 <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
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
			rfield = ["fname", "lname", "email", "phone", "birthday", "gender"];
			rtype = ["req", "req", "email", "mobilenum", "date1", "req"]; 
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
            <!--&nbsp;&nbsp;&nbsp;
            <a href="index.php?page=accounts&action=all" style="color:#FFF;">Accounts</a>-->
            &nbsp;&nbsp;&nbsp;
            <a href="index.php" style="color:#FFF;">Update Account</a>
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
    	  <h3>Email: <?php echo $data->email; ?></h3>
 <h3>First Name: <?php echo $data->fname; ?></h3>
          <h3>Last Name: <?php echo $data->lname; ?></h3>
          <div id="msg"></div>
			<div style="width:60%;">
            <form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    	
		  </form>
            <form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" id="regFrm" name="regFrm" method="post">
                <div style="width:100%; height:30px;">
                	<div style="width:40%; float:left;"><label><b>First name : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="fname" name="fname" value="<?php echo $data->fname; ?>"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Last name : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="lname" name="lname" value="<?php echo $data->lname; ?>"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Email : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="email" name="email" value="<?php echo $data->email; ?>"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Phone : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="phone" name="phone" value="<?php echo $data->phone; ?>"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Birthday : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="birthday" name="birthday" value="<?php echo date('m-d-Y',strtotime($data->birthday)); ?>" placeholder="mm-dd-yyyy"></div>
                </div>
                <div style="clear:both;"></div>
                <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label><b>Gender : </b></label></div>
                	<div style="width:60%; float:right;"><input type="text" id="gender" name="gender" value="<?php echo $data->gender; ?>"></div>
                </div>
                <div style="clear:both;"></div>
                
                 <div style="width:100%;  height:30px;">
                	<div style="width:40%; float:left;"><label>&nbsp;</label></div>
                	<div style="width:60%; float:right;"><input type="submit" name="submit" id="submit" value="Submit form"></div>
                </div>
         </form>
   </div>
<?php /*?><form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>

    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Submit form">

 </form>
<?php */?>
 
 </div>
 </div>


<script src="js/scripts.js"></script>
</body>
</html>
