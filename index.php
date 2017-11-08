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
      <!-- INTRODUCTION-->
      <div class="row">
        <div class="col-12">
          <h1 class="text-center font-weight-bold mb-2">Introduction to PHP</h1>
          <p><a href="https://www.w3schools.com/php/php_intro.asp">PHP</a> is a hypertext preprocessor server-side scripting language that is used to create dynamic web page content, encrypt data and collect form data. It also has superpowers that allow developers to modify data within a database as well as create, open, read, write, delete and close files on a server. The language itself is not limited to output html, but can also output images, PDF files and other text formats.</p>
          <p>PHP also offers <a href="http://php.net/manual/en/features.commandline.php">Command Line</a> usage for simple text processing tasks. And best of all, PHP can be used to create client-side and cross-platform applications using the extension <a href="http://gtk.php.net">PHP-GTK</a>. Learn more about the <a href="http://php.net/manual/en/history.php.php">History</a> of <a href="http://php.net/credits.php">PHP</a></p>
          <p>This course focuses on best practices required when developing a web project and is divided into modules that include:</p>
          <ol type="i">
            <li>Setting up a suitable Developers Environment, Accessible Locally</li>
            <li>Learning basic Syntax to Implement PHP and Inject into a Program.</li>
            <li>Using Comparison Operators to Compare and Manipulate Variable Values</li>
            <li>Using <i>Conditional Statements</i> to Add Logic to a Program</li>
            <li>ddddddddddddddddd</li>
            <li>ddddddddddddddddd</li>
            <li>ddddddddddddddddd</li>
            <li>ddddddddddddddddd</li>
            <li>ddddddddddddddddd</li>
            <li>ddddddddddddddddd</li>
          </ol>
          <p>That said, lets get started by setting up our developer environment.</p>
        </div>
      </div>
      <!-- -->
      <!-- -->
      <!-- BUILD a LOCAL ENVIRONMENT -->
      <div class="row">
        <div class="col-12">
          <h1 class="text-center font-weight-bold mb-2">Build a Local Environment</h1>
          <p>Work on any web project is made simple when working in a local environment as you can save time by being able to work offline while testing the visual display and functionality of an application. When working with PHP, there are a few tools that you can use to meet the needs for said objective and this involves using a &#40;1&#41; virtual machine that will enable testing of user input that will be stored in a database, &#40;2&#41; an actual database and &#40;3&#41; an administrative interface to control data within the database. <i>*Explore the tabs below to learn more about related technologies*</i></p>
        </div>
        <div class="col-12 mb-3">
          <nav class="nav nav-tabs" id="myTab" role="tablist">
            <a class="nav-item nav-link active" id="nav-xampp-tab" data-toggle="tab" href="#nav-xampp" role="tab" aria-controls="nav-xampp" aria-selected="true"><b>&#40;1&#41; XAMPP</b></a>
            <a class="nav-item nav-link" id="nav-mysql-tab" data-toggle="tab" href="#nav-mysql" role="tab" aria-controls="nav-mysql" aria-selected="false"><b>&#40;2&#41; MySQL</b></a>
            <a class="nav-item nav-link" id="nav-phpadmin-tab" data-toggle="tab" href="#nav-phpadmin" role="tab" aria-controls="nav-phpadmin" aria-selected="false"><b>&#40;3&#41; phpMyAdmin</b></a>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <!-- *Xampp* -->
            <div class="tab-pane fade show active" id="nav-xampp" role="tabpanel" aria-labelledby="nav-xampp-tab">
              <p>XAMPP is a local virtual machine that acts as a local web server in your computer. </p>
              <!--<ol type="a">
                <li>aaaaaaaa</li>
                <li>bbbbbbbb</li>
                <li>cccccccc</li>
              </ol>
                <p>Display Errors via <code>C:/xampp/index.php</code> and open <code>php.ini</code> File.</p>
              <p>Donec ut ligula eget dolor pellentesque vestibulum vel in elit.</p>-->
              <p><b><i>*Step-by-Step Setup Coming Soon*</i></b></p>
            </div>
            <!-- *MySQL* -->
            <div class="tab-pane fade" id="nav-mysql" role="tabpanel" aria-labelledby="nav-mysql-tab">
              <p>MySQL is an open-source relational database management system based on the Structured Query Language designed for managing data held in a RDBMS. </p>
              <!--<ol type="a">
                <li>aaaaaaaa</li>
                <li>bbbbbbbb</li>
                <li>cccccccc</li>
              </ol>
              <p>Donec ut ligula eget dolor pellentesque vestibulum vel in elit.</p>-->
              <p><b><i>*Step-by-Step Setup Coming Soon*</i></b></p>
            </div>
            <!-- *phpMyAdmin* -->
            <div class="tab-pane fade" id="nav-phpadmin" role="tabpanel" aria-labelledby="nav-phpadmin-tab">
              <p>phpMyAdmin is an amazing administrative tool developers utilize to manage MySQL databases. It features an intuitive web interface to control frequently used operations that include managing databases, indexes, users, persimissions and so much more. Anything that you might need your database for such as the import and export of SQL data, transforming dation into another format and creating complex Queries. <i>**It should be noted that MySQL has a similiar tool known as 'Workbenc.h'</i></p>
              <!--<ol type="a">
                  <li>aaaaaaaa</li>
                  <li>bbbbbbbb</li>
                  <li>cccccccc</li>
                </ol>-->
              <!--<p>Access phpMyAdmin via  <code>C:/xampp/bin/phpMyAdmin/config.inc.php</code></p>
              <p>phpMyAdmin for Xampp: https://stackoverflow.com/questions/17759776/how-to-get-login-option-for-phpmyadmin-in-xampp</p>-->
              <p><b><i>*Step-by-Step Setup Coming Soon*</i></b></p>
            </div>
          </div>
        </div>
        <div class="col-12">
          <h4>Summary</h4>
          <p>Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. Morbi bibendum magna eu.</p>
        </div>
      </div>
      <!-- -->
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