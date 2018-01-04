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
      <a class="navbar-brand"><span class="font-weight-bold navPhone pl-1">Learning PHP</span>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto"> <!-- Use "ml-auto" to Align on Right-Side -->
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
    
      
      <!-- ************* <SECTION 1> ***************************** -->
      <!-- ******************************************************* -->
      <div class="row">
        <!-- ************************************** -->
        <!-- ********* <SIDEBAR> ************ -->
        <nav id="sideNav" class="col-lg-3">
          <h4>Loops 101</h4>
          <ul>
            <li id=""><a id="fade" href="#">Intro</a></li>
            <li>Types of Loops</li>
            <li id=""><a id="fade" href="#whileLoop">while</a> &#47; <a id="fade" href="#dowhileLoop">do-while</a></li>
            <li id=""><a id="fade" href="#forLoop">for</a> &#47; <a id="fade" href="#foreachLoop">foreach</a></li>
            <li id=""><a id="fade" href="#loopArray">Looping an Array</a></li>
            <li></li>
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
          
          <h4 id="whileLoop">[1] while Loops</h4>
          <p><code>while () { ..... }</code> Statement are continuously executed provided that the Expression evaluates to <code>true</code>. The Value of these Expressions <i>are checked at the Beginning of every Iteration</i>, so no following statement will execute IF the expression evaluates to <code>false</code>.</p>
          <p></p>          
          
          <h4 id="dowhileLoop">[2] do-while Loops</h4>
          <p><code>do { ... } while ( ... );</code> Statements differ from <i>while Loops</i> in that they are checked at the <i>End of every Iteration</i>, so all code is Iterated at least once before the Condtion is checked.</p>
          <p>In the examples below, these two Loops are used to <i>Create a List of Years from 1917 to 2017</i> that starts at the Current Year and goes back 100 years. The first line <b>Sets a Variable</b> <code>$currentYear</code> that uses the <code>date('');</code> Function to Count from the <i>Current Year</i>. 
          <br>The second line <i>Adds a Variable </i><code>$year</code> for the <i>Year to Begin its Count, Subtracting 100 from the <code>$currentYear</code> Variable</i>.
          <br>The <code>while (++$year &#60;= $currentYear)</code> Loop in both examples <b>Increments the <code>$year</code> Variable</b> <i>while it is Less Than or Equal to the <code>$currentYear</code> Variable</i>. The script will end in either case once <i>the year is Greater Than the <code>$currentYear</code> Variable.</i>
          <br>The <code>echo $year . "&#60; /&#62;\n";</code> Statement will <b>Print a Year on a New Line</b>. Because the Statement is Run before the Condition in the <code>do { ... } while ();</code> Loop, a List of Years will be Displayed before the Condition is ever tested.</p>
          <div class="row">
            <div class="col-6">
              <h5><code>while(){}</code> LOOP Example</h5>
              <p><code>$currentYear = date('Y');</code>
              <br><code>$year = $currentYear - 100;</code>
              <br>
              <br><code>while (++$year &#60;= $currentYear) {</code>
              <br><code>echo $year . "&#60;br /&#62;\n";</code></p>
            </div>
            <div class="col-6">
              <h5><code>do {} while()</code> LOOP Example</h5>
              <p><code>$currentYear = date('Y');</code>
              <br><code>$year = $currentYear - 100;</code>
              <br>
              <br><code>do {</code>
              <br><code>echo $year . "&#60;br /&#62;\n";</code>
              <br><code>} while (++$year &#60;= $currentYear);</code></p>
            </div>
          </div>
          
          <h4 id="forLoop">[3] for Loops</h4>
          <p><code>for (expr1, expr2, expr3) {condition}</code> Loops contain three Expressions. 
				  <br>(1) <b>expr1</b> is the <i>Initial Value</i>, Executed at the <u>Beginning of each LOOP</u>. 
				  <br>(2) <b>expr2</b> is the <i>Conditional</i>, Executed at the <u>Beginning of each ITERATION</u>. If it evaluates to <code>TRUE</code>, the loop Continues and the nested Statement(s) are Executed. If it evaluates to <code>FALSE</code>, the Execution of the Loop Ends. 
				  <br>(3) <b>expr3</b> is the <i>Incrementor</i>, Executed at the <u>End of each INTERATION</u>. *Each of the expressions can be empty or contain multiple expressions separated by commas. In the example below, the <code>for(){}</code> Loop is used to Create a List of 100 years, and is the preferred Loop to use in this situation, in comparison to the <code>do-while</code> Loop.</p>
          <div class="row">
            <div class="col-12">
              <h5><code>for(){}</code> LOOP Examples</h5>
              <p>//Create a List of 100 Years
              <br><code>for ($year = date('Y') - 99; $year &#60; date('Y'); $year++) { echo $year . "\n"; }</code></p>
            </div>
            <div class="col-12">
              <p>//Display Numbers 1 - 100.
              <br><code>for ($i = 1; $i &#60;= 100; $i++) { echo $i . "\n"; }</code></p>
            </div>
            <div class="col-12">
              <p>//Loop through the ABCs
              <br><code>for ($letter = 'A'; $letter != 'AA'; $letter++) { echo $letter . "\n";</code></p>
            </div>
            <div class="col-12">
              <h5>Queries Explained</h5>
              <p>xxxx</p>
            </div>
          </div>
          <!-- -->
          <h5 id="loopArray">**** Looping through an Array with a <code>for(){}</code> LOOP ****</h5>
          <p>As of PHP 7, use the <code>for(){}</code> and <code>foreach(){}</code> Loops to Iterate through an Array.</p>
          <div class="row">
            <div class="col-6">
              <h5>Script</h5>
              <p>//Loop through an Array 
              <br><code>$learn = ['A', 'B', 'C'];</code>
              <br><code>$learn[] = 'Build something cool!';</code>
              <br><code>array_push($learn, 'D', 'E', 'F');</code>
              <br><code>array_unshift($learn, 'G', 'H');</code>
              <br><code>asort($learn);</code>
              <br><code>sort($learn);</code>
              <br>
              <br><code>for ($i = 0; $i &#60; count($learn); $i++)</code>
              <br><code>{ echo $learn[$i] . "\n"; }</code></p>
              
            </div>
            <div class="col-6">
              <h5>Query Explained</h5>
              <p></p>
            </div>
            <div class="col-12">
              <h5></h5>
              <p></p>
            </div>
          </div>
          <!-- -->
          <h4 id="foreachLoop">[4] foreach Loops</h4>
          <p>The <code>foreach(){}</code> Construct provides an easy way to <i>Iterate over Arrays</i> to take the item value or the key value as well, but not the Key on its own. It can also be used with <i>Objects</i>, but cannot be used with a <i>Variable</i>. There are two syntaxes:</p>
				<div class="row">
					<div class="col-6">
						<p>//Syntax #1
						<br><code>foreach (array_expression as $value)
    				<br>statement</code></p>
					</div>
					<div class="col-6">
						<p>//Syntax #2
						<br><code>foreach (array_expr as $key => $value)
    				<br>statement</code></p>
					</div>
					<div class="col-12">
						<p><code>Syntax #1</code> loops over the array given by array_expression. On each iteration, the value of the current element is assigned to $value and the internal array pointer is advanced by one (so on the next iteration, you'll be looking at the next element). <code>Syntax #2</code> allows you to Access the Key along with its Value by additionally assigning the current element's key to the $key variable on each iteration.</p>
					</div>
				</div>
				
				<div class="row">
					<div class="col-6">
						<h5>foreach LOOP Example</h5>
						<p><code>include 'list.php';
							<br>
							<br>foreach ($list as $item) {
							<br>echo $item['title'] . "\n";
							<br>}</code></p>
					</div>
					<div class="col-6">
						<h5>Query Explained</h5>
						<p>(1) The <code>include</code> Statement is used to include <i>Multi-dimensional Array of "List-Items" to Perform as Part of the ToDo List from list.php Script</i>. (2) <code>$list</code> tells the Loop which Array to use. (3) The keyword <i>as</i> is used... (4) ... 'for each' Item in the List to work with it as the Variable <code>$item</code>. (*) This will Assign one Item from the List to the Variable <code>$item</code> on each Loop. (*) <code>$item</code> is now an Associative-Array with a named Key and Value.</p>
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
              <a id="fade" href="https://teamtreehouse.com/library/xxxxx">xxx</a> &#47;&#47;
              <a id="fade" href="https://teamtreehouse.com/library/for-loops-3">Looping through Arrays</a> &#47;&#47; 
              <a id="fade" href="https://teamtreehouse.com/library/foreach-loops">For-Each LOOPS</a></li>
            <li>Loop Control Structures 
              <a id="fade" href="http://php.net/manual/en/control-structures.while.php">while</a>  &#47;&#47; 
              <a id="fade" href="http://php.net/manual/en/control-structures.do.while.php">do-while</a>  &#47;&#47; 
              <a id="fade" href="http://php.net/manual/en/control-structures.for.php">for</a>  &#47;&#47; 
              <a id="fade" href="http://php.net/manual/en/control-structures.foreach.php">for-each</a></li>
          </ul>
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