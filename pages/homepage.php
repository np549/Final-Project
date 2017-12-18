<?php  session_start();?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>NJIT TODO</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/addon.css">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->

</head>

<body>

<div style="width:100%;">
  <div style="width:100%; margin:0 auto; color:#FFF; background-color:#333; height:80px;">
        <div style="width:40%; float:left;">

<h1>
    <?php //this how to print some data;
                 echo "<a href='index.php' style='text-decoration:none; color:#fff;'>".$data['site_name']."</a>";?> 
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
	<?php //echo $_SESSION['userID']; 
	if(!isset($_SESSION['userID'])){?>
    <div class="container">

 <form class="form-signin" action="index.php?page=accounts&action=login" method="post">
        <h2 class="form-signin-heading">Login</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
         <div class="checkbox">
          &nbsp;
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
</div>
 <?php } else { ?>


 <?php } ?>
</div>

<script src="js/scripts.js"></script>
</body>
</html>
