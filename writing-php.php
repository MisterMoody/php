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
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Syntax</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="syntax.php">Basics</a>
              <a class="dropdown-item" href="control_structures.php">Control Structures</a>
              <a class="dropdown-item" href="arrays.php">Arrays</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Examples</a>
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
    
      
      <!-- ************* <SECTION 1> ***************************** -->
      <!-- ******************************************************* -->
      <div class="row">
        <!-- ************************************** -->
        <!-- ********* <FIXED-SIDEBAR> ************ -->
        <nav id="sideNav" class="col-lg-3">
          <h4>Writing PHP</h4>
          <ul>
            <li id=""><a id="fade" href="#content">Intro</a></li>
            <li id=""><a id="fade" href="#implement">Implementing PHP</a></li>
            <li id=""><a id="fade" href="#inject">Injecting PHP</a></li>
            <li id=""><a id="fade" href="#">Variables 101</a></li>
            <li id=""><a id="fade" href="#">Data-Types 101</a></li>
            <li id=""><a id="fade" href="#">Conditionals 101</a></li>
            <li id=""><a id="fade" href="#">Logical Operators 101</a></li>
          </ul>
        </nav>
        <!-- \End of SIDEBAR -->
        <!-- ************************************** -->
        <!-- ************************************** -->
        

        <!-- ************************************** -->
        <!-- ********** <MAIN-CONTENT> ************ -->
        <div id="content" class="col-lg-9">
          
          <!-- *********** <SECTION 1> ************ -->
          <h1 id="invoke" class="text-center font-weight-bold mb-2">Writing PHP</h1>
          <p>The task of writing a PHP program is an arduous process that is made easy once we understand what is required when invoking PHP into a web project. Although no two projects are the same, there are certain criteria that is pertinent in the functionality and maintenance of every project. This involves creating a file with the proper extension, using code blocks, leaving comments, writing variables and using logical operators to build conditional statements, and knowing how to display information in a browser.</p>
          
          <h3 id="implement" class="text-center font-weight-bold mb-2">Implementing PHP</h3>
          <div class="row mb-2">
            <div class="col-6">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Create a PHP File</h4>
                  <h4 class="card-subtitle mb-2 text-muted">file-name<code>.php</code></h4>
                  <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Invoke PHP Code-Blocks</h4>
                  <h4 class="card-subtitle mb-2 text-muted"><code>&#60;&#63;php</code> PHP Code <code>&#63;&#62;</code></h4>
                  <p class="card-text">A <i>Container</i> for PHP Code</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Declare a Variable</h4>
                  <h4 class="card-subtitle mb-2 text-muted"><code>&#36;varName = "Value";</code></h4>
                  <p class="card-text">A <i>Variable</i> Stores Information</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Comment Code </h4>
                  <h4 class="card-subtitle mb-2 text-muted"><code>//Comment</code></h4>
                  <p class="card-text">Another <code>/*Comment*/</code> method</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Display a Message</h4>
                  <h4 class="card-subtitle mb-2 text-muted"><code>echo "Hello World";</code></h4>
                  <p class="card-text">Also see <code>print "Hello World";</code></p>
                </div>
              </div>
            </div>
          </div>
          
          <h3 id="inject" class="text-center font-weight-bold mb-2">Injecting PHP</h3>
          <p>Another important concept includes <b>Injecting PHP into an HTML page</b>, which can be done by including the script <code>&#60;&#63;php...&#63;&#62;</code> directly or by using the Include Statement to Import a PHP script from its directory, &#60;&#63;<code>include inc/file.php</code>&#63;&#62;. We will use these concepts regularly so it is important to commit them to memory. Now we are setup to begin writing a program, in fact, we can combine what we know so far with a PHP built-in function to produce a working script writing only 2 Lines.</p>
          <p><code>&#60;?php
                &#36;date = date&#95;default&#95;timezone&#95;set&#40;&#39;EST&#39;&#41;;
                ?&#62;</code>
                <br>&#60;&#33;DOCTYPE html&#62;
                <br>&#60;html&#62;
                <br>&#60;head&#62;&#60;&#47;head&#62;
                <br>&#60;body&#62;
                <br>....
                <br>&#60;footer&#62; 
                <code>&#60;?php echo &#36;date&#40;&#34;g i a T&#34;&#41;; ?&#62;</code> 
                &#60;&#47;footer&#62;
                <br>&#60;&#47;body&#62;
                <br>&#60;&#47;html&#62;</p>
          <p>The script above implements the built-in <code>date&#40;&#41;;</code> Function which is used to <i>Format Local Time and Dates</i>. The <code>$date</code> Variable is set above the <code>&#60;&#33;DOCTYPE html&#62;</code> and the script is injected directly into the <code>&#60;footer&#62;...&#60;&#47;footer&#62;</code>. This script will <i>Display the Current Time</i> and yield the following result in the footer: <i><b><?php echo date('g i a T') ?></b></i>.</p>
          
          <h3 id="implement" class="text-center font-weight-bold mb-2">Variables 101</h3>
          <p>As indicated in the example above, <i>Variables</i> are used to store information and that information is known as its <i>Value</i>. A Variable is <i>Declared</i> with <code>&#36;</code> and is followed by an <code>&#95;</code> or a letter as part of its <i>Naming-Convention</i>. Variables are case&#45;sensitive and may only contain alpha&#45;numeric characters or underscores.</p>
          <p>This is an example of a Variable <code>&#36;firstName &#61; &#39;Ray&#39;</code> where <code>&#39;Ray&#39;</code> is the Variable <i>Value</i>.</p>
              
          <p>Variables can store different types of data. You can use the <code>var&#95;dump&#40;x&#41;</code> Function to <i>return the data&#45;type</i> in the console.</p>
          <p></p>
          
          <h3 id="implement" class="text-center font-weight-bold mb-2">Data-Types 101</h3>
          <p></p>
          
          <h3 id="implement" class="text-center font-weight-bold mb-2">Conditional Statements 101</h3>
          <p></p>
          
          <h3 id="implement" class="text-center font-weight-bold mb-2">Logical Operators 101</h3>
          <p></p>
          <!-- RESOURCES -->
          <ul>
            <li><b>RESOURCES</b></li>
            <li><a id="fade" href="https://www.w3schools.com/php/php_echo_print.asp">echo();</a> &#47;&#47; <a id="fade" href="https://www.phptpoint.com/php-echo-print">print();</a> &#47;&#47; Another List of Array <a id="fade" href="http://php.net/manual/en/ref.array.php">Functions</a></li>
            <li>The <a id="fade" href="php.net/manual/en/function.date.php">date ()</a> Function is used to <i>Format Local Time and Dates</i></li>
            <li>A <a id="fade" href="https://www.w3schools.com/php/php_variables.asp">Variable </a> <i>Stores Information</i>. Also see <a id="fade" href="http://php.net/manual/en/ref.var.php">Function Reference</a> and <a id="fade" href="http://php.net/manual/en/language.variables.scope.php">Scope</a></li>
            <!--<li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>-->
          </ul>
          <!-- ************************************ -->
          <!-- ************************************ -->
          
          <!-- ************************************ -->
          <!-- *********** <SECTION 2> ************ -->
          <h1>Arrays 2</h1>
          <p>qmlsdkjmqlsdkjfmlq djfpoqds joqdj fmlqdj fmlqdj fmlqdj foqidjs fpoq djisfpoq idfjpo qdjsp ofijqsdpo fjqdpos fiqdpos fjqds qdmlsfjqdpsofi jqdposfji qdosifjmqlds fjqoims fjmlq dkjsf qsdjf omq fjiq dsfjfmlqdksjfoqdsfjpoafjpaoi fjqmds fjeoqidjs foiazje fdqisfoqi djfoqisdjfpo ajezfzjfp fjpoqjiz fe qsdjfpom fjpoa fjepoazi fjepoaz jefpo jfqojifpoajiz efpoafjezaomlqp fjopdfjoqsj dfpofj qposd fjpaoz fjiapoz fjiaz
                ef mjqsdfi jofi japzfji apoz fja fjpo a</p>
          <div class="row mb-4">
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
            <div class="col-6">
              <h3>aaa</h3>
              <p>lorem ipsum 1 abcdefghijklmnopqrstuvwxyz</p>
            </div>
          </div>
          <!-- ************************************ -->
          <!-- ************************************ -->
        </div>
        <!-- \End of MAIN-CONTENT -->
      </div>
      <!-- \End of ROW-->
    </div>
    <!-- \End of CONTAINER-->
    <!-- ******************************************************* -->
    <!-- ******************************************************* -->
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