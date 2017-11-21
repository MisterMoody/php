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
        <!-- ********* <SIDEBAR> ************ -->
        <nav id="sideNav" class="col-lg-3">
          <h4>Loops 101</h4>
          <ul>
            <li id=""><a id="fade" href="#">Intro</a></li>
            <li id=""><a id="fade" href="#whileLoop">while Loop</a></li>
          </ul>
        </nav>
        <!-- \End of SIDEBAR -->
        <!-- ************************************** -->
        <!-- ************************************** -->
        

        <!-- ************************************** -->
        <!-- ********** <MAIN-CONTENT> ************ -->
        <div id="content" class="col-lg-9">
          
          <!-- *********** <SECTION 1> ************ -->
          <h1>Introduction to Loops</h1>
          <p>In PHP, a <b>Loop</b> is <i>a way of repeating code, which is useful for managing the flow of code</i>. A Loop will repeat the same action(s) for a specified number of times or until a specific Condition is <code>true</code>. There are four types of Loops: <b>while &#47;&#47; do-while &#47;&#47; for &#47;&#47; foreach</b></p>
          
          <h4 id="whileLoop">while Loops</h4>
          <p><code>while () { ..... }</code> Statement are continuously executed provided that the Expression evaluates to <code>true</code>. The Value of these Expressions <i>are checked at the Beginning of every Iteration</i>, so no following statement will execute IF the expression evaluates to <code>false</code>.</p>
          <p></p>          
          
          <h4>do-while Loops</h4>
          <p><code>do { ... } while ( ... );</code> Statements differ from <i>while Loops</i> in that they are checked at the <i>End of every Iteration</i>, so all code is Iterated at least once before the Condtion is checked.</p>
          <p>In the examples below, these two Loops are used to <i>Create a List of Years</i> that starts at the Current Year and goes back 100 years.</p>
          <div class="row">
            <div class="col-6">
              <h5>while LOOP Example</h5>
              <p><code>$currentYear = date('Y');</code>
              <br><code>$year = $currentYear - 100;</code>
              <br>
              <br><code>while (++$year &#60;= $currentYear) {</code>
              <br><code>echo $year . "&#60;br /&#62;\n";</code></p>
            </div>
            <div class="col-6">
              <h5>do-while LOOP Example</h5>
              <p><code>$currentYear = date('Y');</code>
              <br><code>$year = $currentYear - 100;</code>
              <br>
              <br><code>do {</code>
              <br><code>echo $year . "&#60;br /&#62;\n";</code>
              <br><code>} while (++$year &#60;= $currentYear);</code></p>
            </div>
            <div class="col-12">
              <p></p>
              <h5>Query Explained</h5>
              <p>Both of these scripts will <code>output</code> <i>a List of Years  from 1917 to 2017</i>. The first line <b>Sets a Variable</b> <code>$currentYear</code> that uses the <code>date('');</code> Function to Count from the <i>Current Year</i>. The second line <i>Adds a Variable </i><code>$year</code> for the <i>Year to Begin its Count, Subtracting 100 from the <code>$currentYear</code> Variable</i>.
              <br>The <code>while (++$year &#60;= $currentYear)</code> Loop in both examples <b>Increments the <code>$year</code> Variable</b> <i>while it is Less Than or Equal to the <code>$currentYear</code> Variable</i>. The script will end in either case once <i>the year is Greater Than the <code>$currentYear</code> Variable.</i>
              <br>The <code>echo $year . "&#60; /&#62;\n";</code> Statement will <b>Print a Year on a New Line</b>. Because the Statement is Run before the Condition in the <code>do { ... } while ();</code> Loop, a List of Years will be Displayed before the Condition is ever tested.</p>
            </div>
          </div>
          
          <h4>Looping through an Array</h4>
          <p>Loops allow developers to <i>Loop through an Array</i>, partially or as a whole, and can perform a number of actions on each Item.</p>
          <div class="row">
            <div class="col-6">
              <h5>Loop through Every Array Item</h5>
              <p>//Array Variable
              <br><code>$learn = ['A', 'B', 'C'];</code>
              <br><code>$learn[] = 'Build something cool!';</code>
              <br><code>array_push($learn, 'D', 'E', 'F');</code>
              <br><code>array_unshift($learn, 'G', 'H');</code>
              <br><code>asort($learn);</code>
              <br>//Loop
              <br><code>while (list($key, $val) = each($learn))</code>
              <br><code>{ echo "$key => $val\n"; }</code></p>
            </div>
            <div class="col-6">
              <h5>Loop through # Array Items</h5>
              <p>//Array Variable
              <br><code>$learn = ['A', 'B', 'C'];</code>
              <br><code>$learn[] = 'Build something cool!';</code>
              <br><code>array_push($learn, 'D', 'E', 'F');</code>
              <br><code>array_unshift($learn, 'G', 'H');</code>
              <br><code>asort($learn);</code>
              <br>//Loop
              <br><code>$count</code>
              <br><code>while ((list($key, $val) = each($learn)) &amp;&amp; $count++ &#60; # {</code>
              <br><code>echo "$key => $val\n"; }</code></p>
            </div>
            <div class="col-12">
              <p></p>
              <h5>Query Explained</h5>
              <p>The <code>each</code> Function has been <b>Deprecated</b>. == The <code>foreach()</code> Loop performs the same Function that Alena Explained!</p>
            </div>
          </div>
          <!--<div class="row mb-4">
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
          </div>-->
          <!-- RESOURCES-->
          <ul>
            <li><b>RESOURCES</b></li>
            <li>Tutorials on 
              <a id="fade" href="https://teamtreehouse.com/library/do-while-looping">Do-While LOOPS</a> &#47;&#47; 
              <a id="fade" href="https://teamtreehouse.com/library/while-listing-array-values">Looping through Arrays</a> &#47;&#47;
              <a id="fade" href="https://teamtreehouse.com/library/for-loops-3">For LOOPS</a> &#47;&#47; 
              <a id="fade" href="https://teamtreehouse.com/library/foreach-loops">For-Each LOOPS</a></li>
            <li>Loop Control Structures 
              <a id="fade" href="http://php.net/manual/en/control-structures.while.php">while</a>
              <a id="fade" href="http://php.net/manual/en/control-structures.do.while.php">do-while</a>
              <a id="fade" href="http://php.net/manual/en/control-structures.for.php">for</a><a id="fade" href="http://php.net/manual/en/control-structures.foreach.php">for-each</a></li>
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
          <!-- *********** <SECTION 3> ************ -->
          <h1>Arrays 3</h1>
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
          <!-- *********** <SECTION 4> ************ -->
          <h1>Arrays 4</h1>
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
          <!-- *********** <SECTION 5> ************ -->
          <h1>Arrays 5</h1>
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