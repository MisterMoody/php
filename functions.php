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
          <h4>Functions 101</h4>
          <ul>
            <li id=""><a id="fade" href="#content">Intro</a></li>
            <li id=""><a id="fade" href="#implement">xxxxx</a></li>
            <li id=""><a id="fade" href="#inject">xxxxx</a></li>
            <li id=""><a id="fade" href="#">xxxxx</a></li>
            <li id=""><a id="fade" href="#">xxxxx</a></li>
            <li id=""><a id="fade" href="#usingLogic">xxxxx</a></li>
          </ul>
        </nav>
        <!-- \End of SIDEBAR -->
        <!-- ************************************** -->
        <!-- ************************************** -->
        

        <!-- ************************************** -->
        <!-- ********** <MAIN-CONTENT> ************ -->
        <div id="content" class="col-lg-9">
          
          <!-- *********** <SECTION 1> ************ -->
          <h1 id="invoke" class="text-center font-weight-bold mb-2">Introduction to Functions</h1>
          <p>The task of writing a PHP program is an arduous process that is made easy once we understand what is required when invoking PHP into a web project. Although no two projects are the same, there are certain criteria that is pertinent in the functionality and maintenance of every project. This involves creating a file with the proper extension, using code blocks, leaving comments, writing variables and using logical operators to build conditional statements, and knowing how to display information in a browser.</p>
          
          <h3 id="implement" class="text-center font-weight-bold mb-2">Implementing PHP</h3>
          <div class="row mb-2">
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Create a PHP File</h4>
                  <h4 class="card-subtitle mb-2 text-muted">file-name<code>.php</code></h4>
                  <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
                </div>
              </div>
            </div>
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Invoke PHP Code-Blocks</h4>
                  <h4 class="card-subtitle mb-2 text-muted"><code>&#60;&#63;php</code> PHP Code <code>&#63;&#62;</code></h4>
                  <p class="card-text">A <i>Container</i> for PHP Code</p>
                </div>
              </div>
            </div>
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Declare a Variable</h4>
                  <h4 class="card-subtitle mb-2 text-muted"><code>&#36;varName = "Value";</code></h4>
                  <p class="card-text">A <i>Variable</i> Stores Information</p>
                </div>
              </div>
            </div>
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Comment Code </h4>
                  <h4 class="card-subtitle mb-2 text-muted"><code>//Comment</code></h4>
                  <p class="card-text">Another <code>/*Comment*/</code> method</p>
                </div>
              </div>
            </div>
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Display a Message</h4>
                  <h4 class="card-subtitle mb-2 text-muted"><code>echo "Hello World";</code></h4>
                  <p class="card-text">Also see <code>print "Hello World";</code></p>
                </div>
              </div>
            </div>
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Escape Sequence</h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    <code>&#34;br/&#62;&#92;n&#34;</code> or <code>&#34;&#92;n&#34;</code>
                  </h4>
                  <p class="card-text">This is a Line-Break</p>
                </div>
              </div>
            </div>
          </div>
          
          <h3 id="inject" class="text-center font-weight-bold mb-2">Injecting PHP</h3>
          <p>Another important concept includes <b>Injecting PHP into an HTML page</b>, which can be done by including the script <code>&#60;&#63;php...&#63;&#62;</code> directly or by using the Include Statement to Import a PHP script from its directory, &#60;&#63;<code>include inc/file.php</code>&#63;&#62;. We will use these concepts regularly so it is important to commit them to memory. Now we are setup to begin writing a program, in fact, we can combine what we know so far with a PHP built-in function to produce a working script writing only 2 Lines.</p>
          <h5>PHP Injection Example</h5>
          <p>www</p>
          <!-- -->
          <!-- -->
          <h3 id="implement" class="text-center font-weight-bold mb-2">Variables 101</h3>
          <p>xxx</p>
          <!-- -->
          <!-- -->
          <h3 id="implement" class="text-center font-weight-bold mb-2">Data-Types</h3>
          <p>yyy</p>
          <h5>Data-Type Examples</h5>
          <div class="row">
            <div class="col-1">string</div>
            <div class="col-4"><code>$name = "Ray";</code></div>
            <div class="col-1">boolean</div>
            <div class="col-6"><code>$orNah = false;</code></div>
            <div class="col-1">integer</div>
            <div class="col-4"><code>$number = 1;</code></div>
            <div class="col-1">array</div>
            <div class="col-6"><code>$multi = ['var1', 'var2', 'var3'];</code></div>
            <div class="col-1">float</div>
            <div class="col-4"><code>$decimal = 2.42;</code></div>
            <div class="col-1">null</div>
            <div class="col-6"><code>$empty = " ";</code></div>
          </div>
          <p>zzz</p>
          <!-- -->
          <!-- -->
          
          <!-- RESOURCES -->
          <ul>
            <li><b>RESOURCES</b></li>
            <li><a id="fade" href=""></a> &#47;&#47; <a id="fade" href=""></a></li>
            <li>The <a id="fade" href="php.net/manual/en/function.date.php">date ()</a> Function is used to <i>Format Local Time and Dates</i></li>
            <li>Control Structures
              <br><a id="fade" href="http://php.net/manual/en/language.operators.php">Operators</a>
              [<a id="fade" href="http://php.net/manual/en/language.operators.assignment.php">Assign</a> &#47;
              <a id="fade" href="http://php.net/manual/en/language.operators.arithemetic.php">Arithmetic</a> &#47;
              <a id="fade" href="http://php.net/manual/en/language.operators.comparison.php">Comparison</a> &#47;
              <a id="fade" href="http://php.net/manual/en/language.operators.logical.php">Logical</a> 
              <sup><a id="fade" href="https://www.w3resource.com/php/operators/logical-operators.php">1</a></sup>]
              <br><a id="fade" href="">Conditionals</a>
              [<a id="fade" href="http://php.net/manual/en/control-structures.if.php">if</a> &#47; 
              <a id="fade" href="http://php.net/manual/en/control-structures.else.php">if...else</a> &#47; 
              <a id="fade" href="http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary">ternary operator</a> &#47;
              <a id="fade" href="http://php.net/manual/en/control-structures.elseif.php">else/if</a> &#47; 
              <a id="fade" href="http://php.net/manual/en/language.control-structures.switch.php">switch</a>] 
              <br><a id="fade" href="">Loops</a>
              [<a href="http://php.net/manual/en/language.control-structures.while.php">while</a> 
                  &#47; 
              <a href="http://php.net/manual/en/language.control-structures.do.while.php">do-while</a>
                  &#47; 
              <a href="http://php.net/manual/en/language.control-structures.for.php">for</a>
                  &#47; 
              <a href="http://php.net/manual/en/language.control-structures.foreach.php">for each</a>]
              <br><a id="fade" href="">Other Control Structures to Learn</a>
              <a id="fade" href="">break</a> &#47; 
              <a id="fade" href="">continue</a> &#47; 
              <a id="fade" href="">declare</a> &#47; 
              <a id="fade" href="">return</a> &#47; 
              <a id="fade" href="">include</a> &#47; 
              <a id="fade" href="">require</a> and
              <a id="fade" href="">Alternative Syntax</a>
              <a id="fade" href=""></a></li>
            <!--<li><a id="fade" href=""></a></li>
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
          <h6 class="text-left"><small>&#169;<span class="d-none d-sm-inline-block"><?php echo date('Y'); ?></span></small> <span class="d-none d-sm-inline-block"> Made with <i class="fa fa-heart"></i> by </span> Mister Moody.</h6>
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