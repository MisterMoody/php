<?php
/* dateTime VAR*/
$date = date_default_timezone_set('EST');

?>

<!-- ********************************************************* -->
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A Self-Directing Guidebook  to Building an Application Using PHP">
    <meta name="keywords" content="Mister Moody, Web Design, PHP, CSS, HTML">
    <meta name="author" content="Ray Moody">
    <meta name="twitter:title" content="@Mister_Moody" />        
    <meta name="twitter:site" content="http://mistermoody.com" />
    <!-- Browser Tab Icon -->
    <!--<link rel="shortcut icon" href="img/me.jpg" type="img/m" class="rounded">--> 
    <!-- TITLE -->
    <title>PHP 101</title>
    <!-- *********** CSS Implementations ************ -->
    <!-- BOOTSTRAP *CDN* Compiled & Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- CUSTOM Styles -->   
    <link rel="stylesheet" href="styles.css">        
    <!-- Font Awesome ICONS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- FONTS -->       
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
	  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Raleway" rel="stylesheet">
  </head>
  
  <body>
    <!-- ********************************************************* -->
    <!-- *************** <NAVIGATION> CONTAINER[S] *************** -->
    <!-- ********************************************************* -->
    <nav class="navbar sticky-top navbar-expand-md navbar-toggleable-sm navbar-light"> 
      <a class="navbar-brand"><span class="font-weight-bold navPhone pl-1">PHP 101</span>
        <!--<span class="font-weight-bold navPhone pl-1"><i class="fa fa-phone d-lg-inline-block"></i> +1.502.558.9240 </span>-->
        <!--<img src="..." width="30" height="30" class="d-inline-block align-top" alt="">-->
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto"> <!-- Use "ml-auto" for Right Side Alignment-->
          <li class="nav-item active text-right">
            <a class="nav-link" href="index.php"><i class="fa fa-home d-none d-lg-inline-block"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Syntax</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="syntax/syntax.php">Basics</a>
              <a class="dropdown-item" href="syntax/control_structures.php">Control Structures</a>
              <a class="dropdown-item" href="#">xxx</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Examples</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" src="#" href="scripts.php" alt="PHP Scripts">Scripts</a>
          </li>
        </ul>
      </div>
     </nav>
    <!-- ********************************************************* -->
    <!-- ********************************************************* -->
       
    
    <!-- ********************************************************* -->
    <!-- *************** <MAIN> CONTAINER ************************ -->
    <!-- ********************************************************* -->
    <!-- 1-COL -->
    <!--<div class="grid">
      <div class="col-12">
        <h3>COLUMN 1 OF 1</h3>
      </div>
      <div class="col-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. Morbi bibendum magna eu.</p>
      </div>
      <div class="col-12"></div>
    </div>-->
    <!-- -->
    <div class="container">
      
      <!-- -->
      <!-- -->
      <!-- Scripts -->
      <div class="row">
        <!-- -->
        <div class="col-12">
          <h1 class="text-center font-weight-bold mb-2">PHP Scripts</h1>
          <p>These are some basic <a href="https://www.w3schools.com/php/php_examples.asp">PHP Script Examples</a> that I have encountered in my web development journey. For each example, I provide the actual code via <code>&#60;html&#62;</code> as well as a description of how the code is processed when injected into html. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis.</p>
        </div>
      </div>
      <!-- -->
      <!-- -->
      
      <!-- GPA Challenge -->
      <div class="row mb-3">
        <div class="col-6">
          <code>
            &#60;?php
            <br>&#36;student1Name &#61; &#39;Ray&#39;;
            <br>&#36;student1GPA &#61; 3.5;
            <br>
            <br>&#36;student2Name &#61; &#39;James&#39;;
            <br>&#36;student2GPA &#61; 4.0;
            <br>
            <br>if &#40;&#34;&#36;student1GPA &#61;&#61; 4.0&#34;&#41; &#123;echo &#34;&#36;student1Name made the Honor Roll&#34;; &#125;
            <br>else &#123;echo &#34;&#36;student1Name has a GPA of &#36;student1GPA&#34;; &#125;
            <br>
            <br>if &#40;&#34;&#36;student2GPA &#61;&#61; 4.0&#34;&#41; &#123;echo &#34;&#36;student2Name made the Honor Roll&#34;; &#125;
            <br>else &#123;echo &#34;&#36;student2Name has a GPA of &#36;student2GPA&#34;; &#125;
            <br>
            <br>?&#62;
          </code>
        </div>
        <!-- -->
        <div class="col-6">
          <h3><a href="https://teamtreehouse.com/library/php-basics-2/daily-exercise-program/conditionalls">GPA Challenge</a></h3>
          <p>This script uses a <i>conditional statement</i> that queries multiple conditions and will <code>output</code> the following results:</p>
          <?php 
          $student1Name = 'Ray';
          $student1GPA = 3.5;
          
          $student2Name = 'James';
          $student2GPA = 4.0;
          
          if ($student1GPA == 4.0) {echo "<p>$student1Name made the Honor Roll</p>";}
          else { echo "<p>$student1Name has a GPA of $student1GPA</p>";}
          
          if ($student2GPA == 4.0) {echo "<p>$student2Name made the Honor Roll</p>";}
          else { echo "<p>$student2Name has a GPA of $student2GPA</p>";}
          ?>
        </div>
      </div>
      <!-- -->
      <!-- -->
      
      <!-- Unit Converter: Pounds to Kilograms -->
      <div class="row mb-3">
        <div class="col-6">
          <code>
            &#60;?php
            <br>&#36;pounds &#61; 180;
            <br>&#36;lb_to_kg &#61; 0.453592;
            <br>&#36;kilograms &#61; &#36;pounds &#42; &#36;lb_to_kg;
            <br>
            <br>echo &#34;Weight:&#34;;
            <br>echo &#34;&#36;pounds&#34;;
            <br>echo &#34;lb &#61; &#34;;
            <br>echo &#34;&#36;kilograms&#34;;
            <br>echo &#34;kg&#34;;
            <br>?&#62;
          </code>
        </div>
        <!-- -->
        <div class="col-6">
          <h3><a href="">Unit Converter: Pounds to Kilograms</a></h3>
          <p>This script uses a <i>conditional statement</i> that converts Pounds to Kilograms and will <code>output</code> the following results:</p>
          <?php 
          
          $pounds = 180;
          $lb_to_kg = 0.453592;
          $kilograms = $pounds * $lb_to_kg;
          
          echo "<p>Weight: ";
          echo $pounds;
          echo " lb = ";
          echo $kilograms;
          echo " kg</p>";
          ?>
          <p>The <code>&#36;pounds &#61; 180;</code> variable <i>stores the # in pounds to convert</i> to kilograms. The <code>&#36;lb_to_kg &#61; 0.453592;</code> is the <i>kilogram equivalent of pounds</i> when converted. The <code>&#36;kilograms &#61; &#36;pounds &#42; &#36;lb_to_kg;</code> retrieves variable data that is calculated once converted. The <code>echo</code> statement is used to <i>display the results</i>.</p>
        </div>
      </div>
      <!-- -->
      <!-- -->
      
      <!-- Unit Converter: Milies to Kilometers -->
      <div class="row mb-3">
        <div class="col-6">
          <code>
            &#60;?php
            <br>&#36;miles &#61; 2.5;
            <br>&#36;mile_to_km &#61; 1.60934;
            <br>&#36;kilometers &#61; &#36;miles &#42; &#36;mile_to_km;
            <br>
            <br>echo &#34;Distance:&#34;;
            <br>echo &#34;&#36;miles&#34;;
            <br>echo &#34;miles &#61; &#34;;
            <br>echo &#34;&#36;kilometers&#34;;
            <br>echo &#34;km&#34;;
            <br>?&#62;
          </code>
        </div>
        <!-- -->
        <div class="col-6">
          <h3><a href="">Unit Converter: Miles to Kilometers</a></h3>
          <p>This script uses a <i>conditional statement</i> that converts Miles to Kilometers and will <code>output</code> the following results:</p>
          <?php 
          
          $miles = 2.5;
          $mile_to_km = 1.60934;
          $kilometers = $miles * $mile_to_km;
          
          echo "<p>Distance: ";
          echo $miles;
          echo " miles = ";
          echo $kilometers;
          echo " km</p>";
          ?>
          <p>The <code>&#36;pounds &#61; 180;</code> variable <i>stores the # in pounds to convert</i> to kilograms. The <code>&#36;lb_to_kg &#61; 0.453592;</code> is the <i>kilogram equivalent of pounds</i> when converted. The <code>&#36;kilograms &#61; &#36;pounds &#42; &#36;lb_to_kg;</code> retrieves variable data that is calculated once converted. The <code>echo</code> statement is used to <i>display the results</i>.</p>
        </div>
      </div>
      <!-- -->
      <!-- -->
      
      
      <!-- The date() Function -->
      <div class="row mb-3">
        <div class="col-6">
          <code>
            &#60;?php
            <br>
            <br>&#36;date &#61; date_default_timezone_set&#40;&#39;EST&#39;&#41;;
            <br>
            <br>echo &#34;Today is &#34;; &#62;&#62;&#62; echo date&#40;&#34;D d M, Y&#34;&#41;&#34;;
            <br>
            <br>echo &#34;The current time is&#34;; &#62;&#62;&#62; echo date&#40;&#34;g i a T&#34;&#41;&#34;;
            <br>
            <br>echo &#34;Last Modified&#34;; &#62;&#62;&#62; echo date&#40;&#34;F d Y g:i:s&#34;&#41;&#34;;
            <br>
            <br>echo &#34;Week of the Year&#34;; &#62;&#62;&#62; echo date&#40;&#34;W&#34;&#41;&#34;;
            <br>
            <br>?&#62;
          </code>
        </div>
        <!-- -->
        <div class="col-6">
          <h3><a href="">The date&#40;&#41; Function</a></h3>
          <p>This script uses the <code>date&#40;&#41;;</code> Function to <i>structure time</i> based on established parameters and will <code>output</code> the following results:</p>
          <?php 
          
          $date = date_default_timezone_set('EST');
          
          echo "<p>Today is ";
          echo date('D M d, Y');
          echo " </p>";
          
          echo "<p>The current time is ";
          echo date('g i a T');
          echo " </p>";
          
          echo "<p>Last modified ";
          echo date('F d Y g:i:s', getlastmod());
          echo " </p>";
          
          echo "<p>Week of the Year ";
          echo date('W');
          echo " </p>";
          ?>
          <p><i>Learn more about the <a href="http://php.net/manual/en/function.date.php">date()</a> Function.</i></p>
        </div>
      </div>
      <!-- -->
      <!-- -->
      
      
      <!-- Message to Student -->
      <div class="row mb-3">
        <div class="col-6">
          <code>
            &#60;?php
            <br>&#36;firstName &#61; &#39;Ray&#39;;
            <br>&#36;lastName &#61; &#39;Moody&#39;;
            <br>&#36;currentGrad &#61; 12;
            <br>&#36;finalAverage &#61; .80;
            <br>&#36;messageBody &#61; &#39; &#39;;
            <br>
            <br>?&#62;
            
            <br>if (!$firstName || !$lastName) &#123;
            <br>    echo &#34;Please enter a student name&#34;;
            <br>
            <br>&#125; elseif &#40;$currentGrade &#60; 9 || $currentGrade &#62; 12&#41; &#123;
            <br>    echo &#34;This is for high school students. Enter a grade between 9 and 12.&#34;;	
            <br>
            <br>&#125; else &#123;
            <br>if &#40;$finalAverage &#60; .70&#41; &#123;
            <br>    &#36;messageBody = 'We look forward to seeing you at summer school, flunky!';
            <br>
            <br>  &#125; else &#123;
            <br>
            <br>switch ($currentGrade) &#123;
            <br>        case 9:
            <br>          &#36;messageBody = 'Congratulations on completing your freshman year in High School! See you September for your sophomore year!';
            <br>          break;
            <br>
            <br>        case 10:
                      &#36;messageBody = 'Congratulations on completing your sophomore year in High School! See you September for your junior year!';
            <br>          break;
            <br>
            <br>        case 11:
            <br>          &#36;messageBody = 'Congratulations on completing your junior year in High School! See you September for your senior year!';
            <br>          break;
            <br>
            <br>        case 12:
                      &#36;messageBody = 'Congratulations on graduating High School! Good luck!';
            <br>          break;
            <br>
            <br>        default:
            <br>          &#36;messageBody = 'Error: Grade level is not 9-12!';
            <br>          echo "Dear &#36;firstName &#36;lastName\n";	
            <br>      echo &#36;messageBody;
            <br>&#125;
            <br>&#63;&#62;
          </code>
        </div>
        <!-- -->
        <div class="col-6">
          <h3><a href="">Letter to Student</a></h3>
          <p>This script <i>sends a message</i> to students based on their grade level and final grade point average [<a href="https://teamtreehouse.com/library/schools-out">Tutorial</a>] and will <code>output</code> the following results:</p>
          <?php 
          //Variables
          $firstName = 'Ray ';	
          $lastName = 'Moody';
          $currentGrade = 12;
          $finalAverage = .80;
          $messageBody = '';
          //Check for Values of Required Variables
            //if NOT firstName 'or' lastName
            //if less than grade 9 'or' greater than grade 12
              //Nested Conditions
                //Display Message  >>  $messageBody
          if (!$firstName || !$lastName) {
              echo 'Please enter a student name';
          } elseif ($currentGrade < 9 || $currentGrade > 12) {
              echo 'This is for high school students. Enter a grade between 9 and 12.';	
          } else {
              if ($finalAverage < .70) {
                $messageBody = 'We look forward to seeing you at summer school, flunky!';
              } else {
                  switch ($currentGrade) {
                    case 9:
                      $messageBody = 'Congratulations on completing your freshman year in High School! See you September for your sophomore year!';
                      break;

                    case 10:
                      $messageBody = 'Congratulations on completing your sophomore year in High School! See you September for your junior year!';
                      break;

                    case 11:
                      $messageBody = 'Congratulations on completing your junior year in High School! See you September for your senior year!';
                      break;

                    case 12:
                      $messageBody = 'Congratulations on graduating High School! Good luck!';
                      break;
                    default:
                      $messageBody = 'Error: Grade level is not 9-12!';
                  }
              }
              echo "Dear $firstName $lastName\n";	
              echo $messageBody;
          }
          ?>
        </div>
      </div>
      <!-- -->
      <!-- -->
       
      <!-- User 'Privilege' based on 'Role' -->
      <div class="row mb-3">
        <div class="col-6">
          <code>
          if &#40;&#33;isset&#34;&#36;role&#41;&#41; &#123;	&#36;role &#61; &#39;subscriber&#39;;		&#125;
          <br>
          <br>switch &#40;&#36;role&#41; &#123;
          <br>  case &#34;admin&#34;&#58;
          <br>    echo &#34;As an admin, you can add, edit, or delete any post.&#34;;
          <br>    break;
          <br>
          <br>  case &#34;editor&#34;&#58;
          <br>    echo &#34;As an editor, you can add or edit any post, and delete your own posts.&#34;;
          <br>    break;
          <br>
          <br>  case &#34;author&#34;&#58;
          <br>    echo &#34;As an author, you can add, edit, or delete your own post.&#34;;
          <br>    break;
          <br>
          <br>  default&#58;
          <br>    echo &#34;You do not have access to this page. Please contact your administrator.&#34;;
          <br>    break;
          <br>&#125;
          <br>&#63;&#62;
          </code>
        </div>
        <div class="col-6">
          <h3>User Privilege based on Role</h3>
          <p></p>
          <?php
          if (!isset($role)) {	$role = 'admin';		}

          switch ($role) {
            case "admin":
              echo "As an admin, you can add, edit, or delete any post.";
              break;

            case "editor";
              echo "As an editor, you can add or edit any post, and delete your own posts.";
              break;

            case "author";
              echo "As an author, you can add, edit, or delete your own post.";
              break;

            default:
              echo "You do not have access to this page. Please contact your administrator.";
              break;
          }
          ?>
        </div>
      </div>
      <!-- -->
      <!-- -->
    </div>

    

    <!-- ************ --> <!-- Use a Font-Awesome heart 'fa fa-heart' -->
    <!-- ** FOOTER ** -->
    <div class="container">
      <div class="row no-gutters clearfix">
        <div class="col-6">
          <h6 class="text-left"><small>&#169;<?php echo date('Y'); ?></small> Made with <span>&#9829;</span> by Mister Moody.</h6>
        </div>
        <div class="col-6">
          <h6 class="text-right"><?php echo date("D d M "); echo date(" g:i a T"); ?></h6>
        </div>
      </div>
    </div>
    <!-- END of FOOTER --> 
    <!-- ************ -->
    
    <!-- *********************************************************************** -->
    <!-- *********************************************************************** -->
    <!-- ** jQuery, Popper & BOOTSTRAP *CDN* Compiled and Minified JavaScript ************ -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- ********************************************************************************* -->
    
  </body>
</html>