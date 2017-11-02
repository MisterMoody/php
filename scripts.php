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
          <li class="nav-item">
            <a class="nav-link" src="#" href="syntax.php" alt="PHP Snytax">Syntax</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" src="#" href="scripts.php" alt="PHP Scripts">Scripts</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Database</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">aaa</a>
              <a class="dropdown-item" href="#">bbb</a>
            </div>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="about.html">About <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">502WEST</a>
              <a class="dropdown-item" href="#">CLIL</a>
            </div>
          </li>
          --> <!-- HIDDEN Nav Items -->
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
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Check out these <a href="https://www.w3schools.com/php/php_examples.asp">PHP Examples</a></p>
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
      <!-- RESOURCES -->
      <div class="row">
        <div class="col-lg-12">
          <h4>Resources</h4>
          <ol>
            <li>111 <a href="">xxx</a></li>
            <li>111 <a href="">xxx</a></li>
          </ol>
        </div>
      </div>
      <!-- -->
    </div>
    
    <!-- -->
    <!-- -->
    <!-- Version Control -->
    <!--<div class="grid">
      <div class="col-12">
        <h3 id="vc">Version Control</h3>
      </div>
      <div class="col-12">
        <ol>
          <li>Create the Repo</li>
          <p class="notes">From your account, Click <span class="highlight">New repository</span>.  Give the repo a name and brief description of the project objective. You want to <i>Initialize the Repo with a README</i> only if you are building a code from scratch, which is exactly what should be done here.</p>
          
          <li>Clone Repo to Computer</li>
          <p class="notes">Cloning the repo is a multi-step process. First, from the repo click the 'Clone or Download' button. Next, <span class="highlight">Copy</span> the <span class="highlight">https://github.com/User/project.git</span> link.</p>
          <p class="notes">Now, open the <span class="highlight">Control Panel</span> and access the <span class="highlight">C:\xampp\htodcs folder</span>. [Use the 'cd.. / cd ' commands to move down and up within the C:\ directory, respectively.]</p>
          <p class="notes">Type <span class="highlight">git clone</span> then paste the repo link in the format provided above.</p>
          
          <li>Build the Project</li>
          <p class="notes">If you already have files to build upon, simply copy and paste them into the repo folder.  Otherwise, create an index.html file and add it to the repo folder. Once you have done this, type <span class="highlight">git status</span>, which is a command that will allow you to <i>view the status of all project files</i>. Notice how the files are labled <span class="highlight">untracked</span>? That means that the file has not been uploaded from the computer to the Git repo online. Upload any file from the console using three simple commands: <span class="highlight">Add</span>, <span class="highlight">Commit</span> and <span class="highlight">Push</span>. Those commands are as follow:</p>
          <ol type="a">
            <li class="notes">git add fileName.extension</li>
            <li class="notes">git commit -m "Changes Made to fileName.ext"</li>
            <li class="notes">git push -u origin master</li>
          </ol>
          <p class="notes">That's it! Follow these three commands to modify any file in the future.  As well, there are several other commands that can be useful throughout your workflow such as <span class="highlight">Removing Files</span> or <span class="highlight">Cleaning the repo</span>, and this <span><a href="http://ndpsoftware.com/git-cheatsheet.html">Git Cheatsheet</a></span> can show you how!</p>
        </ol>
      </div>
    </div>-->
    <!-- -->
    <!-- -->

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