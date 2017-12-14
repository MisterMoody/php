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
    
      
      <!-- ************* <SECTION 1> ***************************** -->
      <!-- ******************************************************* -->
      <div class="row">
        <!-- ************************************** -->
        <!-- ********* <FIXED-SIDEBAR> ************ -->
        <nav id="sideNav" class="col-lg-3">
          <h4>Functions 101</h4>
          <ul>
            <li id=""><a id="fade" href="#content">Intro</a></li>
            <li id=""><a id="fade" href="#implement">Arguments</a></li>
            <li id=""><a id="fade" href="#"><b>xxx</b></a></li>
            <li id=""><a id="fade" href="#inject">Returning Values</a></li>
            <li id=""><a id="fade" href="#">var Functions</a></li>
            <li id=""><a id="fade" href="#">Closures</a></li>
            <li id=""><a id="fade" href="#usingLogic">Returns</a></li>
            <li id=""><a id="fade" href="#"><b>Internal Functions</b></a></li>
            <li id=""><a id="fade" href="#">Built-Ins</a></li>
            <li id=""><a id="fade" href="#">String Functions</a></li>
            <li id=""><a id="fade" href="#">Array Functions</a></li>
            <li id=""><a id="fade" href="#"><b>xxx</b></a></li>
          </ul>
        </nav>
        <!-- \End of SIDEBAR -->
        <!-- ************************************** -->
        <!-- ************************************** -->
        

        <!-- ************************************** -->
        <!-- ********** <MAIN-CONTENT> ************ -->
        <div id="content" class="col-lg-9">
          
          <!-- *********** <SECTION 1> ************ -->
          <!-- INTRO to FUNCTIONS -->
          <h1 id="invoke" class="text-center font-weight-bold mb-2">Introduction to Functions</h1>
          <p>A <b>Function</b> is a way to <i>Organize and Group Statements of Code</i>. This article illustrates how <i>a Function is Structured</i> and offers advice on how to <i>Pass Arguments &amp; Set Defaults for those Arguments</i>.</p>
          <p>Hampton Paulk taught me this anology of <i>What a Function is</i>: A Coffee Pot is like a Function called Make Coffee. The coffee pot takes grounds and water, then heats the water and pours the water over the coffee. The coffee is poured through a Filter before Returning a Cup of Coffee.</p>
          <p>Lets look at some examples:</p>
          <!-- Function Examples-->
          <div class="row mb-5">
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
            
            <!--<div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title"><b>Create</b> a Function</h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    <code>function hi()&#123;&#125;</code>
                  </h4>
                  <p>xxx</p>
                </div>
              </div>
            </div>
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title"><b>Call</b> a Function</h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    function hello&#40;&#36;name &#61; 'Ray'&#41;&#123;&#125;
                    <br><code>function hello&#40;&#41;;</code>
                  </h4>
                  <p>xx</p>
                </div>
              </div>
            </div>-->
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Standard Function <b>Syntax</b></h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                  &#60;&#63;php <code>function foo($arg_1 $arg_2) {statement;}</code>&#63;&#62;
                  </h4>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Conditional Function <b>Syntax</b></h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                  &#60;&#63;php
                  <code>$current_user = "Ray";
                  <br>function is_ray(){ global $current_user;
                  <br>if ($current_user == 'Ray'){ echo "It is Ray.";
                  <br>} else { echo "It is NOT Ray."; } }
                  <br>is_ray();</code> &#63;&#62;
                  </h4>
                  <p class="card-text">Output: <?php
                    $current_user = "Ray";
                    function is_ray(){
                      global $current_user;
                      if ($current_user == 'Ray'){
                        echo "<b>It is Ray.</b>";
                      } else {
                        echo "<b>It is NOT Ray.</b>";
                      }
                    }
                    is_ray();
                    ?></p>
                </div>
              </div>
            </div>
          </div>
          <!-- -->
          <!-- -->
          <!-- PASSING ARGUMENTS-->
          <h2 class="text-center font-weight-bold mb-2">Passing Arguments</h2>
          <p>Information may be Passed to a Function through an <i>Argument List</i>, which is a comma demlimited List of Expressions that are Evaluated from Left to Right. <b>Arguments</b> are Passed into a Function via its Parenthesis <code>&#40;&#41;</code> after the Function-Name Definition. There are two methods to <b>Pass an Argument</b>:</p>
          <div class="row mb-5">
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Passing by <b>Value</b></h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    <code>&#60;&#63;php ... &#63;&#62;</code>
                  </h4>
                  <p>Default. The Arguments Value is NOT affected by the Function Ouside-of-Function-Scope. </p>
                </div>
              </div>
            </div>
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Passing by <b>Reference</b></h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    <code>&#60;&#63;php ... &#63;&#62;</code>
                  </h4>
                  <p>The Arguments Value, IF Modified by the Function-Scope, IS affected on the Ouside-of-Function-Scope.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- -->
          <!-- -->
          <!-- RETURNING VALUES-->
          <h2 class="text-center font-weight-bold mb-2">Returning Values</h2>
          <p>We use the <code>return&#40;&#41;</code> Statment to <b>Return Values</b>, which can be of any Data-Type including Arrays and Objects. This statement will <i>cause the Function to End its Execution then return control back to the line where it was called</i>.</p>
          <div class="row mb-5">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Return a <b>Variable Value</b> <i>without Arguments</i></h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    &#60;&#63;php
                    function hello&#40;&#41; {<code>return 'Hello, World!';</code>}
                    <br>&#36;greeting = hello&#40;&#41;;
                    <br>echo &#36;greeting;&#63;&#62;
                  </h4>
                  <p>This example will Print the <code>echo &#36;greeting;</code> Variable which Stores the Function <code>&#36;greeting &#61; hello&#40;&#41;;</code>. The Function <code>function hello&#40;&#41; {}</code> will Return the String <code>return 'Hello, World!';</code></p>
                  <!-- -->
                  <hr>
                  <h4 class="card-title">Return a <b>Variable Value</b> <i>with Arguments</i></h4>
                  <p>The example below Passes an Argument to the Variable and Tests Multiple Conditions</p>
                  <h4 class="card-subtitle mb-2 text-muted">
                    &#60;&#63;php
                    function hey&#40;$name&#41; { 
                    <br>if($name == 'Ray') {
                    <code>return 'Hey, Ray!';</code>
                    <br>} else { <code>return 'Hey, Ray!';</code> } }
                    <br>&#36;howdy = hey&#40;'Ray'&#41;; echo &#36;howdy;&#63;&#62;
                  </h4>
                  <!-- -->
                  <hr>
                  <h4 class="card-title">Return <b>Multiple Values</b> <i>(ONLY works with Arrays)</i></h4>
                  <p>The example below Performs a Match Function and Prints the Values using the <code>print_r</code> Statement.</p>
                  <h4 class="card-subtitle mb-2 text-muted">
                    &#60;&#63;php
                    function add_up&#40;$x, $y&#41; {
                    <br>$arr = array($x, $z, $x + $z);
                    <br><code>return $arr;</code>}
                    <br>&#36;value = add_up&#40;2,4&#41;; print_r&#40;&#36;value;&#41;&#63;&#62;
                  </h4>
                  <p>This is the Output: <?php 
                    function add_up($x, $z) {
                      $arr = [$x, $z, $x + $z];
                        return $arr;
                    }
                    $value = add_up(2,4); 
                    print_r($value); 
                    ?> It displays the Keys and their Values.</p>
                  <hr>
                  <!-- -->
                </div>
              </div>
            </div>
          </div>
          
          
          <!-- -->
          <!-- -->
          <!-- VARIABLE FUNCTIONS -->
          <h2 class="text-center font-weight-bold mb-2">Variable Functions</h2>
          <p>A <b>Variable Function</b> is a method to that <i>uses a Variable's Value to Call a Function of the same name</i> and is best used to <i>Implement Callbacks and Function Tables</i>. A <code>$variable</code> with Parentheses <code>''</code> Appended to it is the Variable Funciton that is Executed.
          <br>For example, there is an Existing Function called <code>hi()</code>. I create the Variable-Function like this: <code>$func = 'hi';</code> and then I Call the Function like so <code>$func();</code>.</p>
          <div class="row mb-5">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">var  <b> </b> </h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    &#60;&#63;php
                    <code>function answer() {return 42; }
                    <br>function add_high($x, $z) {return $x + $z; }
                    <br>$func = 'answer';
                    <br>echo $func();</code>&#63;&#62;
                  </h4>
                  <p>xx</p>
                  <p>This is the Output: 
                    <?php 
                    function answer() {
                      return 42;
                    }
                    function add_high($x, $z) {
                      return $x + $z;
                    } 
                    
                    $func = 'answer';
                    echo $func();
                    
                    ?></p>
                  <!-- -->
                  <hr>
                  <h4 class="card-title"><b>Call</b>  a Variable Function </h4>
                  <h4 class="card-subtitle mb-2 text-muted"><code>$func();</code>
                  </h4>
                  <h4 class="card-title"><b>Pass</b> an Argument to a Variable Function </h4>
                  <h4 class="card-subtitle mb-2 text-muted">$func(<code>'argument'</code>);
                  </h4>
                  <!-- -->
                </div>
              </div>
            </div>
          </div>
          
          
          <p class="text-muted"><b>Challenges:</b> Recursive Function &#47; Variable Scope &#47; </p>
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <h3 id="implement" class="text-center font-weight-bold mb-2">Closures</h3>
          <p><b>Closures</b> are <i>Anonymous Functions</i> that are Capable of Accessing Variables Outside-of-Function-Scope. Closures can be used as <b>Callbaks</b> for <i>Internal Funtions</i>. Create a Closure by Creating a Variable and Setting is Value to that of an Empty Function <code>$greet = function(){};</code>. The Statements inside of the <code>{}</code> will <i>Set its Output to <b>$greet</b></i>.<br>Think of a Closure as a <i>Single-Line Function that is Assigned to a Variable</i>.</p>
          
          <div class="row mb-5">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b>Create</b> a Closure</h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    &#60;&#63;php
                    <code>$greet = function(){echo 'Hello there.'}; $greet();</code>&#63;&#62;
                  </h4>
                  <p>The example Calls <code>$greet();</code> and will output: <?php $greet = function(){echo '<b>Hello there.</b>';}; $greet();?></p>
                  <!-- -->
                  <hr>
                  <h4 class="card-title"><b>Access a Value</b> Outside of Function Scope</h4>
                  <p>In this example, we  use the <code>use</code> Keyword to <i>Access a Value Outside-of-the-Function-Scope</i>. This example <i>Passes a Value from Outside-of-the-FunctionScope</i> into the Closure as opposed to instead of actually passing tthe function anonymously.</p>
                  <h4 class="card-subtitle mb-2 text-muted">
                    &#60;&#63;php
                    <code>$name = 'friend';</code>
                    <br>$greet = function(){} <code>use ($name)</code> {echo 'Hello there.'}; 
                    <br>$greet();&#63;&#62;
                  </h4>
                  <!-- -->
                </div>
              </div>
            </div>
            <!-- 
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Passing by <b>Value</b></h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    <code>&#60;&#63;php ... &#63;&#62;</code>
                  </h4>
                  <p>Default. The Arguments Value is NOT affected by the Function Ouside-of-Function-Scope. </p>
                </div>
              </div>
            </div>
            <div class="col-6 mb-2">
              <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h4 class="card-title">Passing by <b>Reference</b></h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    <code>&#60;&#63;php ... &#63;&#62;</code>
                  </h4>
                  <p>The Arguments Value, IF Modified by the Function-Scope, IS affected on the Ouside-of-Function-Scope.</p>
                </div>
              </div>
            </div>-->
          </div>
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <h3 id="implement" class="text-center font-weight-bold mb-2">Internal Functions</h3>
          <p>PHP has a suite of <b>Internal Functions</b> to make coding easier. PHP clearly explains how to <a href="http://php.net/manual/en/about.prototypes.php">Read PHP Documentation</a> in order to <a href="http://php.net/manual/en/functions.internal.php">Use Internal Built-In Functions</a>. Reading a <i>Function Defintion</i> is simple so long as you understand <i>Data-Types</i>. The Function Definition describes the <i>Type of Value that is Returned</i>, returning an Integer Value and the Argument.</p>
          <p>One such FD is the <b>String Function <code>strlen()</code></b> which will <code>Return the Length of a 'String'</code>. This function <code>int strlen (string $string)</code> expects the following:
					<br>1st: <code>int</code> an <b>Integer</b> Value
					<br>2nd: <code>strlen</code> a Function <b>Keyword</b>
					<br>3rd: <code>&#40;</code>string <code>$string&#41;</code> an <i>Argument</i> of <b>String</b>-Type </p>
          <p>There are also Functions that <i>Require <b>PHP Extensions</b> Compiled in</i>. For example, to use the MySQL Server Connection Function <code>mysqli_connect()</code>, PHP must be <i>compiled with</i> <a href="http://php.net/manual/en/ref.mysql.php">MySQL support</a>.  Learn more about the <a href="http://php.net/manual/en/function.mysqli-connect.php">mysqli_connect()</a> Function and look at the example below to <a href="http://php.net/manual/en/mysqlinfo.api.choosing.php">How to Utilize the API</a>.
				  <code><br>$mysqli = new mysqli("example.com", "user", "password", "database");
				  <br>$result = $mysqli->query("SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL");
				  <br>$row = $result->fetch_assoc();
				  <br>echo htmlentities($row['_message']);</code></p>
				  <p>There are also Methods to <i>View Configuration, Compiled Modules and Any Extension used</i>. Try <i>Calling</i> <code>phpinfo()</code> or <code>get_loaded_extensions()</code> within a Function.</p>
          <div class="alert alert-success" role="alert">
					<b>ALWAYS</b> read the <a href="http://php.net/manual/en/configuration.php">Configuration</a>, <a href="http://php.net/manual/en/install.php">Installation</a>, and individual extension chapters, for information on <i>HOW to set up PHP</i>.
        </div>
				  <div class="alert alert-warning" role="alert">
					<u>WARNING:</u> <b>From 2018, ALWAYS use the <code>mysqli_connect()</code> to "Connect PHP with MySQL DATABASE"!!!</b>
					<br>The <code>mysql_connect()</code> Function was Deprecated in PHP 5.5.0 and Removed from PHP 7. -- As well, there are <i>Table-Type Transaction</i> issues using the <code>PDO()</code> Function.
				</div>  
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <h3 id="implement" class="text-center font-weight-bold mb-2">String Functions</h3>
          <p><b>Strings</b> are an important Data-Type that often requires that developers <i>Search for, Parse and Test Against</i>. Learn more about <a href="https://teamtreehouse.com/library/php-functions-2/php-internal-functions/php-string-functions">String Functions</a>.</p>
          <div class="row mb-5">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b>Return the Lenth</b> of a String</h4>
						The <code>strlen()</code> Function <i>Returns the String Length</i>.
						<br>
						<code>$phrase = "We only hit what we aim for";
						<br>$len = strlen($phrase);
						<br>echo $len;</code>
						<br>In this example, we first <i>Create a 'String-Variable' &amp; ASSIGN a 'String-Value'the</i> <code>$phrase = "We only hit what we aim for";</code>. Then we <i>Assign the 'strlen()' Function to a New Variable and PASS the 'String-Variable' as its 'Argument'</i> <code>$len = strlen($phrase);</code>. <br>Finally, we Call the 'String' <code>echo $len;</code> and this will output:
						<?php $phrase = "We only hit what we aim for";
						$len = strlen($phrase);
						echo "<b>$len;</b>" ?>.
            <p class="alert alert-dark card-text"><u>This example illustrates how to <i>Verify a given Password is at least 5 characters long</i></u>.
							<br>
							$pass = "abcdefghij";
							<br>if (<code>strlen($pass)</code> < 5) { echo "Password MUST have at least 5 characters!";
							<br>} else if (strlen($pass) >= 5) { echo "Your password is good!"; }
						</p>
            <!-- -->
            <hr>
            <h4 class="card-title"><b>Return a Part</b> of a String</h4>
            <p>The <code>substr()</code> Function <i>Returns Part of a String</i>. This functions takes 2 arguments with an optional 3rd.
						<br>
						
              
						<br>In this example, we create a string-variable, assign it a string-value then assign the strlen() Function to a new variable and pass the string-variable as its argument. Then, we use the <code>echo substr($phrase, 0,5)</code> to Call the String. The 1st and 2nd arguments <i>target the string-variable</i> and <i>determines the starting position</i>. The optional 3rd argument <i>returns that # of characters</i> which is <code>5</code>. <br>Therefore, this code would output: <?php $phrase = "We only hit what we aim for"; 
							$len = strlen($phrase);
							echo "<b>substr($phrase, 0,5);</b>" ?></p>
						<p class="alert alert-dark card-text"><u>This example illustrates how to <i>Return the Last 4 Digits of a CC</i></u>.
							<br>
							$card_number = "01 2345 6789";
							<br>$digits = <code>substr($card_number, 7)</code>;
          		<br>echo "The last 4 digits of your card are: **** " . $digits;
						</p>
                  <!-- -->
                  <hr>
                  <h4 class="card-title"><b>Return a Specified Character</b> of a String</h4>
                  <p>The <code>strpos()</code> Function <i>Finds the position of the 1st occurrence of a substring in a string</i>.</p>
                  <p>This example illustrates how to <i>Verify an '@' Exists within an Email</i></p>
                  <p class="card-text text-muted">
                    $email = "myEmail";
                    <br>if (<code>strpos($email, "@")</code>) { echo "Good Email";
                    <br>} else { echo "Bad email, please try again!>"; }
                  </p>
                  <!-- -->
                </div>
              </div>
            </div>
          </div>          
          
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <div class="col-12">
            <h4>[3] Using <b>Array</b> Functions</h4>
            <p></p>
          </div>
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">The <code>array_keys()</code> Function</h4>
                <p><b>Arrays</b> are useful Data-Types that allow developers to Store and Organize data.  Obviously, there are many ways to manage this data.</p>
                The <b><code>array_keys()</code></b> Function <i><b>Returns all the Keys</b></i> or <i><b>a Subset of the Keys of an Array</b></i>. In the example below, we first (1) Create an 'Associative Array' & ASSIGN it 'Key-Value' pairs . (2) Then we use a 'foreach' Conditional Statement to Loop through the Array and PASS the 'Assoc-Array'as its 'Argument'. (3) Finally, we Call the 'Array'. 
                <p class="card-text text-muted">$names = array('Ray' => 'Principal', 'James' => 'Entertainer');
                <br>foreach<code>(array_keys($names)</code> as $name) {echo "Hello, $name";}
                </p>This will output:
                <?php $names = array('Ray' => 'Principal', 'James' => 'Entertainer');
                foreach (array_keys($names) as $name) {echo "<b>Hello, $name. \n</b>";} ?>
                <!-- -->
                <br><br>
                <p class="alert alert-dark card-text">xxx</p>
                <!-- -->
                <hr>
                <h4 class="card-title">The <code>walk()</code> Function</h4>
                The <code>array_walk()</code> Function <i><b>Returns the entire Key-Value Pairing within an Array</b></i>. Typically, Callback takes on two parameters. The array parameter's value being the first, and the key/index second. If callback needs to be working with the actual values of the array, specify the first parameter of callback as a reference. Then, any changes made to those elements will be made in the original array itself.
                The example below uses the previously created <i>Associative-Array</i> then utilizes the <code>print_info()</code> Function like a conduit to <i>Pass all Array Key-Value Pairings</i> when Calling the <code>array_walk()</code> Function.
                <p class="card-text text-muted">$names = array('Ray' => 'Principal', 'James' => 'Entertainer');
                <br>function <code><b>print_info(</b></code>$value, $key<code><b>)</b></code>{
      echo "<b>$key is a $value.</b>";}
                <br><code><b>array_walk(</b></code>$names, <code>'print_info'</code><code><b>)</b></code>;
                </p>This will output: <?php $names = array('Ray' => 'Principal', 'James' => 'Entertainer' ); function print_info($value, $key){echo "<b>$key is a $value.</b>\n";} array_walk($names, 'print_info'); ?>
                <br>
                <!-- -->
                <hr>
                <h4 class="card-title">The <code>array_comine()</code> Function</h4>
                The <code>array_combine()</code> Function <i><b>Creates</b> a new Array of Key-Value Pairings by <b>Combining</b> Key-Value Pairings from Multiple Arrays</i>. <br>This Function will essentially <i><b>Create Two Arrays: one for Keys and the other for Values</b></i>. In the example below, (1) two Arrays are created, (2) a Variable is created and Assigned the <code>array_combine()</code> Function that takes the previously created Arrays as Arguments. (3) Finally, the <code>print_r()</code> Statement is used with the Variable holding the Function <code>$result</code>. 
                <p class="card-text text-muted">
                $name = array('Ray', 'James');
                <br>$fav_food = array('tempura', 'meat');
                <br>$result = <code>array_combine(</code>$name, $fav_food<code>);</code>
                <br>print_r($result);
                </p>This will output: <?php $name = array('Ray', 'James');
    $fav_food = array('tempura', 'meat');
    $result = array_combine($name, $fav_food);

    print_r($result); ?>
              </div>
            </div>
            <!-- -->
          </div>
          
          
          
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
        </div>
        <!-- \End of MAIN-CONTENT -->
      </div>
      
      <!-- -->
      <!-- -->
      <!-- -->
      <!-- -->
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