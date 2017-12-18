<?php  session_start();?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Account</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
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
    	 <h1>All Accounts</h1>

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);


?>
</div>
     
</div>


<script src="js/scripts.js"></script>
</body>
</html>
