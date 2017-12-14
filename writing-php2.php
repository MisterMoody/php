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
            <a class="nav-link" href="../index.php"><i class="fa fa-home d-none d-lg-inline-block"></i></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">101</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="devenviron.php">Dev Environment</a>
              <a class="dropdown-item" href="writing-php.php">Writing PHP</a>
              <a class="dropdown-item" href="writing-php2.php">Writing PHP II</a>
              <a class="dropdown-item" href="arrays.php">Arrays</a>
              <a class="dropdown-item" href="loops.php">Loops</a>
              <a class="dropdown-item" href="functions.php">Functions</a>
              <!--<div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Examples</a>-->
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" src="#" href="../scripts.php" alt="PHP Scripts">Scripts</a>
          </li>
        </ul>
      </div>
     </nav>
    <!-- ********************************************************* -->
    <!-- ********************************************************* -->
 
 
    <!-- ********************************************************* -->
    <!-- *************** <MAIN> CONTAINER ************************ -->
    <!-- ********************************************************* -->
    <div class="container">
      <div class="row">
      
        <!-- ************************************** -->
        <!-- ********* <FIXED-SIDEBAR> ************ -->
        <nav id="sideNav" class="col-lg-3">
          <h4>Build a PHP Website</h4>
          <ul>
            <li id=""><a id="fade" href="#content">Introduction</a></li>
            <li id=""><a id="fade" href="#templating"><b>Templating</b></a></li>
            <li id=""><a id="fade" href="#">xxx</a></li>
            <li id=""><a id="fade" href="#">xxx</a></li>
            <li id=""><a id="fade" href="#">xxx</a></li>
            <li id=""><a id="fade" href="#"><b>xxx</b></a></li>
          </ul>
        </nav>
        <!-- \End of SIDEBAR -->
        <!-- ************************************** -->
        <!-- ************************************** -->
        
        
        
        <!-- ************************************** -->
        <!-- ********** <MAIN-CONTENT> ************ -->
        <div id="content" class="col-lg-9">
          
          
          <!-- ************ -->
          <!-- INTRODUCTION -->
          <!-- ************ -->
          <h1 class="text-center font-weight-bold mb-2">Using PHP to Build a Website</h1>
          <p>The first writing-php.php article shared knowledge of how to write PHP code to create a program. This article looks at ways to utilize PHP to develop the asthetic design of a website layout.</p>
          <!-- ************ -->
          <!-- ************ -->
          
          
          <!-- ********** -->
          <!-- TEMPLATING -->
          <!-- ********** -->
          <h3 id="templating" class="text-center font-weight-bold mb-2">Templating</h3>
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b>Syntax</b> for Understanding Functions</h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                  &#60;&#63;php
                  <code>function hello() {
                    echo "Hello, World!";
                  }
                  hello();</code>
                  &#63;&#62;
                  </h4>
                  <p>Run this Code in the Console to Reveal the Output: <?php function hello() { echo "<b>Hello, World!</b>";} hello(); ?></p>
                  <p class="card-text">The <code>function</code> Keyword signals the PHP Interpreter that this script is a <b>Function</b>. The Function-Name <code>hello() {}</code> is then <b><i>Passed to the function</i></b>. The <code>&#40;&#41;</code> take on the <i>Arugments</i> while the <code>&#123;&#125;</code> take on any <i>Statements</i> &#40;there are no Arguments and the Statment is "Hello, World!"&#41;. Finally, you <b><i>Call the Function</i></b> by using the Function-Name at the End of the Script.</p>
                </div>
              </div>
            </div>
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b>Review</b> How to Make a Function</h4>
                  
                  <dl class="row">
                    <dt class="col-sm-4 card-title"><b>Create</b> a Function</dt>
                    <dd class="col-sm-8 card-subtitle mb-2 text-muted"><code>function hi()&#123;&#125;</code></dd>


                    <dt class="col-sm-4"><b>Pass a Value</b></dt>
                    <dd class="col-sm-8">function hi<code>&#40;&#36;name &#61; 'Ray'&#41;</code>&#123;&#125;</dd>

                    <dt class="col-sm-4 text-truncate"><b>Call</b> a Function</dt>
                    <dd class="col-sm-8">function hello&#40;&#36;name &#61; 'Ray'&#41;&#123;&#125;
                    <br><code>function hi&#40;&#41;;</code></dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Set PHP to <b>Display Errors</b> <small>in a PHP File</small></h4>
                  <h5 class="card-subtitle mb-2 text-muted">
                  &#60;?php
                  <br><code class="mb-4">error_reporting(E_ALL);</code>
                    <?php echo str_repeat("&nbsp;", 38); ?>
                    <small>//Report Simple Errors</small>
                  <br><code>ini_set('display_errors', 1);</code>
                    <?php echo str_repeat("&nbsp;", 26); ?> 
                    <small>//Turn Errors 'On'</small>
                  <br><code>ini_set("html_errors", 1);</code>
                    <?php echo str_repeat("&nbsp;", 32); ?> 
                    <small>//Format Errors in &#60;html&#62;</small>
                  <br><code>include('file2check.php');</code>
                    <?php echo str_repeat("&nbsp;", 32); ?> 
                    <small>//File to Check</small>
                  <br>?&#62;
                  </h5>
                  <p class="card-text">Add these lines at the TOP of any script to Check for Errors Prior to writing Code. <br><code>1</code> and <code>'on'</code> are interchangeable for Turning Errors On.</p>
                </div>
              </div>
              <p>There is also a way to <u>Set PHP to Display Errors in a Development Server</u>, but the practice does not add additional benefits so I will not elaborate, but essentially you access the php.ini and make the same changes either in the Console or using an IDE.</p>
              <p>Taking Error Handling a step further, it is good practice to <b>Log Errors</b> to a specific location to keep track of project issues. In the example below, Errors will be Logged to the <code>"php-error.txt"</code> File.</p>
            </div>
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b>Catching</b> an Exception</h4>
                  <h5 class="card-subtitle mb-2 text-muted">
                  <code>try { $db = new PDO("sqlite:" .__DIR__. "/database.db");
                  <br>} catch (Exception $e) {
                  <br><?php echo str_repeat("&nbsp;", 3); ?> 
                    echo "Unable to connect: " . $e->getMessage()
                  <br><?php echo str_repeat("&nbsp;", 5); ?> 
                    . " in File: " . $e->getFile()
                  <br><?php echo str_repeat("&nbsp;", 5); ?> 
                    . " on line " . $e->getLine();
                  <?php echo str_repeat("&nbsp;", 5); ?>}</code>
                  </h5>
                  <p class="card-text">In this example, a <code>try{} catch(){}</code> <b>Conditional Statement</b> is used to <i>Catch the Exception</i>. 
                  <br>The <code>$db = new PDO("...");</code> <b>Variable</b> is <i>what we Attempt to Execute or 'Try'</i>. 
                  <br>The <b>Value</b> <code>"sqlite:" .__DIR__. "/database.db"</code>requests to be <i>Connected to a SQL Lite Database</i> and if there is an <i>Connection Error</i>, the <code>PDO()</code> <b>Class</b> will <i>Throw an Exception</i>.
                  <br>The <code>catch()</code> <b>Statement</b> tells PHP <i>What we are Catching</i>, which is catch(<code>Exception $e</code>). Our <code>Exception</code> is <i>Assigned a new Variable</i> <code>$e</code>. Then, it uses the Exception Variable<code>$e</code> to <i>get Details using the Exception Methods</i> as follows: 
                  <br>The <code>$e->getMessage()</code> explains that <i>No Driver was Found in File</i>. 
                  <br>The <code>$e->getFile()</code> <i>Returns the File Path</i>. 
                  <br>The <code>$e->getLine()</code> <i>Returns the Line Number where Exception occurred</i>.</p>
                </div>
              </div>
              <p></p>
            </div>
          </div>
          <!-- ********** -->
          <!-- ********** -->
          
          
          <!-- ********* -->
          <!-- RESOURCES -->
          <!-- ********* -->
          <hr class="my-5">
          <ul>
            <li><b>RESOURCES</b></li>
            <li><a id="fade" href="">xx</a> &#47;&#47; 
              <a id="fade" href="">xx</a> &#47;&#47; xx <a id="fade" href="">xx</a></li>
            <li>The <a id="fade" href="">xx</a> blah blah blah <i>blah blah</i></li>
            <li>Category
              <br><a id="fade" href="">Sub-Cat</a>
              <a id="fade" href="">xxx</a> &#47; 
              <a id="fade" href="">xxx</a> &#47; 
              <a id="fade" href="">xxx</a> &#47; 
              <a id="fade" href="">xxx</a> and
              <a id="fade" href="">xxx</a>
              <a id="fade" href=""></a></li>
            <!--<li><a id="fade" href=""></a></li>-->
          </ul>
          <!-- ********* -->
          <!-- ********* -->
          <!-- ************************************ -->
          <!-- ************************************ -->
        </div><!-- \End of MAIN-CONTENT -->
        <!-- ************************************** -->
        <!-- ************************************** -->
      </div><!-- \End of ROW-->
      <!-- **************************************** -->
      <!-- **************************************** -->
    </div><!-- \End of CONTAINER-->
    <!-- ******************************************************* -->
    <!-- ******************************************************* -->
    
    
 
    <!-- ******************************************************* -->
    <!-- ** FOOTER ********************************************* -->
    <div class="container">
      <div class="row no-gutters clearfix">
        <div class="col-6">
          <h6 class="text-left"><small>&#169;<span class="d-none d-sm-inline-block"><?php echo date('Y'); ?></span></small> <span class="d-none d-sm-inline-block"> Made with <i class="fa fa-heart"></i> by </span> Mister Moody.</h6>
        </div>
        <div class="col-6">
          <h6 class="text-right"><?php echo date("D d M "); echo date(" g:i a T"); ?></h6>
        </div>
      </div>
    </div><!-- \End of FOOTER -->
    <!-- ******************************************************* -->
    <!-- ******************************************************* --> 
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