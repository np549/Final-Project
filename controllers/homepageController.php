<?php

//this is the controller for the index page.

//You are going to need to create / use a accounts controller that deals with login and registration you should not submit the post for the to the index controller
//POST index.php?page=accounts?action=create for adding a user
//POST index.php?page=accounts?action=login for logging a  user in and get the userID out of the session
//POST index.php?page=accounts?action=logout  this would destroy the session and return the user to the homepage
//GET  index.php?page=accounts?action=show  this would be to show the user profile and you get the userID out of session


class homepageController extends http\controller
{

    public static function show()
    {
//this is the show method that is called to show the sites name in a template any array passed in will be accepted by the template function as a model
//You could get fancy with the homepage and check for the userID in the session and hide/show the login / registration links when no session
//If there is a session then you should show the user profile link
//the template is an HTML page with PHP inserted in it.  just put an if/else statement to check for the session and show correct links
$templateData['site_name'] = 'NJIT TODO';
		 date_default_timezone_set('UTC');

//template data contains what will show up in the $data variable in the homepage template
//the name of the template 'homepage' becomes 'homepage.php' in the pages directory

        self::getTemplate('homepage', $templateData);
if(isset($_SESSION['userID']))
		{
			$user = accounts::findUserbysessionid($_SESSION['userID']);
			//var_dump($user);
			
			echo "<div style='width:70%; margin:0 auto; padding:10px;'>";  
			echo "<div style='float:right; text-align:center; padding:4px; width:100%;'><a href=\"index.php?page=accounts&action=show&id=".$_SESSION['userID'] ."\">Edit Account</a></div>";
					echo "<div style='float:left; padding:4px; width:100%;'><strong>Email Address:</strong> ".$user->email."</div>";
					echo "<div style='float:left; padding:4px; width:100%;'><strong>Full Name:</strong> ".$user->fname.' '.$user->lname."</div>";
					echo "<div style='float:left; padding:4px; width:100%;'><strong>Phone Number:</strong> ".$user->phone."</div>";
					echo "<div style='float:left; padding:4px; width:100%;'><strong>Birthday:</strong> ".date('m-d-Y',strtotime($user->birthday))."</div>";
					echo "<div style='float:left; padding:4px; width:100%;'><strong>Gender:</strong> ".$user->gender."</div>";
 				  echo "</div>";
		}
    }

    public static function create()
    {


//I just put a $_POST here but this is where you would put the code to add a record
        print_r($_POST);
    }

}
