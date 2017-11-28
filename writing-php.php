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
            <li id=""><a id="fade" href="#">Variables</a></li>
            <li id=""><a id="fade" href="#">Data-Types</a></li>
            <li id=""><a id="fade" href="#usingLogic">Using Logic</a></li>
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
          <!-- -->
          <!-- -->
          <h3 id="implement" class="text-center font-weight-bold mb-2">Variables 101</h3>
          <p>As indicated in the example above, <i>Variables</i> are used to store information and that information is known as its <i>Value</i>. A Variable is <i>Declared</i> with <code>&#36;</code> and is followed by an <code>&#95;</code> or a letter as part of its <i>Naming-Convention</i>. Variables are case&#45;sensitive and may only contain alpha&#45;numeric characters or underscores.</p>
          <p>This is an example of a Variable <code>&#36;firstName &#61; &#39;Ray&#39;</code> where <code>&#39;Ray&#39;</code> is the Variable <i>Value</i>.</p>
          <!-- -->
          <!-- -->
          <h3 id="implement" class="text-center font-weight-bold mb-2">Data-Types</h3>
          <p>In coding, a Variable Value is a particular type of data that can be used to perform a specific task in a fashion that differs from an action that can be performed using a Value of another data-type. In the Variable example above, <code>'Ray'</code> is the <i>Value</i> and it is a <code>'string'</code> <i>Data-Type</i>. Lets look at the six types of data that we will use throughout this course.</p>
          <p></p>
          <p>A <b>String</b> is a <i>sequence of characters</i> encapsulated with quotes <code>&#39;xxx&#39;</code> or <code>&#34;xxx&#34;</code>.
          <br>An <b>Integer</b> is a <i>non&#45;decimal numbers</i> <code>1</code> that can be positive or negative.
          <br>A <b>Float</b> is a <i>decimal numbers</i> <code>1.52</code>  that can be positive or negative.
          <br>A <b>Boolean</b> is used for <i>Conditional Testing to confirm if something is </i><code>true</code> or <code>false</code>.
          <br>An <b>Array</b> is a compound-variable type that stores multiple&#45;values into a single variable.
          <br>The <b>Null</b> data-type which has only one value: NULL, which is a variable that has no value assigned to it. Variables can also be emptied by setting the value to NULL.</p>
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
          <p></p>
          <p><code>var&#95;dump&#40;x&#41;</code> is a built-in function that will allow you to <i>display structured information about a Variable including its type and value</i>.</p>
          <!-- -->
          <!-- -->
          <h3 id="usingLogic" class="text-center font-weight-bold mb-2">Conditional Statements and Operators</h3>
          <p><i>Conditionals</i> and <i>Operators</i> are critical Control Structure tools that allows developers to apply a <i>decision-making process</i> based on user responses to given conditions and parameters. When combined, these help developers writer extremely intelligent scripts that are especially useful for creating intuitively interactive programs such as custom messages or a to-do task app with assigned due-dates. Lets focus our attention on the key conditional statements and operator types that will enable us to use Logic within our programs.</p>
          
          <h5>Operators</h5>
          <p><b>Operators</b> are used to <i>perform operations that compare variables and values before returning a <code>true/false</code> result</i>.</p>
          <p>The <b>Assignment Operator</b> <code><b>&#61;</b></code> is used to <i>assign Values to Variables</i>.
          </p>
          <p><b>Arithmetic Operators</b> <code>&#62; &#43; &#45; &#42; &#61; &#60;</code> are used to perform math functions on  Variables.  These can be used together with the assignment operator to create a shorthand. <code>&#36;x <b>&#43;&#61;</b> 2;</code>.</p>
          <p><b>Arithmetic Operators</b> <code>&#62; &#43; &#45; &#42; &#61; &#60;</code> are used to perform math functions on  Variables.  These can be used together with the assignment operator to create a shorthand. <code>&#36;x <b>&#43;&#61;</b> 2;</code>.
          </p>
          <p><b>Comparison Operators</b> <i>are used to compare the values of variables and yield a result</i>.</p>
          <p><b>Logical Operators</b> are used to <i>combine and test multiple Conditional Statements</i> and are useful to combine Nested <code>if</code> statements. For example, if you want to match a range of numbers between 10 and 1000 you would create two test: one to query if <code>&#36;xxx &#62;&#61; 10</code> and the second to query if <code>&#36;xxx &#60;&#61; 1000</code> <br>'&amp;&amp;' Operator Evaluates if BOTH Conditions are TRUE.</p>
          <p><b>Concatenation</b> uses <code>.</code> to create a New String by Combining Multiple Strings together.</p>
          <!-- Operator Cheatsheet -->
          <div class="row mb-4">
            <div class="col-12">
              <p> Below is a reference guide for using Operators</p>
              <nav class="nav nav-tabs" id="myTab" role="tablist">
                <!-- Comparison -->
                <a class="nav-item nav-link active" id="nav-comparison-tab" data-toggle="tab" href="#comparisonoperator" role="tab" aria-controls="nav-comparison" aria-selected="false">Comparison</a>
                <!-- Logical -->
                <a class="nav-item nav-link" id="nav-logical-tab" data-toggle="tab" href="#logicaloperator" role="tab" aria-controls="nav-logical" aria-selected="false">Logical</a>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <!-- Comparison -->
                <div class="tab-pane fade show active" id="comparisonoperator" role="tabpanel" aria-labelledby="nav-comparison-tab">
                  <p><a href="http://php.net/manual/en/language.operators.comparison.php">Comparison Operators</a> are used to compare the values of variables and yield a result.</p>
                  <table style="width: 100%;">
                    <tr>
                      <th>equal to <code>&#61;&#61;</code></th>
                      <th>identical <code>&#61;&#61;&#61;</code></th>
                      <th>greater than <code>&#62;</code></th>
                      <th>less than <code>&#60;</code></th>
                    </tr>
                    <tr>
                      <th>not equal to <code>&#33;&#61;</code></th>
                      <th>not identical <code>&#33;&#61;&#61;</code></th>
                      <th>greater or equal to <code>&#62;&#61;</code></th>
                          <th>less or equal to <code>&#60;&#61;</code></th>
                    </tr>
                  </table>
                </div>
                <!-- Logical -->
                <div class="tab-pane fade" id="logicaloperator" role="tabpanel" aria-labelledby="nav-logical-tab">
                  <p><a href="http://php.net/manual/en/language.operators.logical.php">Logical</a><a href="https://www.w3resource.com/php/operators/logical-operators.php"> Operators</a> are used to combine <i>Conditional statements</i>.</p>
                    <table style="width: 100%;">
                      <tr>
                        <th>and <code>&amp;&amp;</code></th>
                        <th>or <code>&#124;&#124;</code></th>
                        <th>not <code>&#33;</code></th>
                      </tr>
                    </table>
                  <p>Learn more about <a href="https://teamtreehouse.com/library/booleans">How to Compare Boolean Values</a>.</p>
                  <p><a href="http://php.net/manual/en/language.operators.logical.php">Logic Operators</a> are used to test multiple conditions and are useful to combine Nested <code>if</code> statements. For example, if you want to match a range of numbers between 10 and 1000 you would create two test: one to query if <code>&#36;xxx &#62;&#61; 10</code> and the second to query if <code>&#36;xxx &#60;&#61; 1000</code> <br>'&&' Operator Evaluates if BOTH Conditions are TRUE. 
                  <br>'||' Operator Evaluates if EITHER Condition is TRUE.
                  <br>The '&&' and "||" has higher precendence than 'and' and 'or'. 
                  <br>'is_string()' Evaluates if the Variable Value is a String Type.</p>
                  <!-- -->
                </div>
              </div>
            </div>
          </div>
          <!-- -->
          <h5>Conditional Statements</h5>
          <p><b>Conditionals</b> are used to create test conditions that form expressions that evaluates to its <code>boolean</code> value, then perform a certain action based on a specific response. The condition tested is based on a set of <code>keywords</code>.</p>
          <p></p>
          <!-- Types of Conditionals -->
          <div class="row">
            <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-if-tab" data-toggle="pill" href="#if" role="tab" aria-controls="v-pills-if" aria-selected="false">if</a>
          <a class="nav-link" id="v-pills-else-tab" data-toggle="pill" href="#else" role="tab" aria-controls="v-pills-else" aria-selected="false">if...else</a>
          <a class="nav-link" id="v-pills-elseif-tab" data-toggle="pill" href="#elseif" role="tab" aria-controls="v-pills-elseif" aria-selected="false">elseif</a>
          <a class="nav-link" id="v-pills-switch-tab" data-toggle="pill" href="#switch" role="tab" aria-controls="v-pills-switch" aria-selected="false">switch</a>
        </div>
        </div>
            <div class="col-9 mb-5">
          <div class="tab-content" id="v-pills-tabContent">
            <!-- if -->
            <div class="tab-pane fade show active" id="if" role="tabpanel" aria-labelledby="v-pills-if-tab">
              <p>The <a href="http://php.net/manual/en/control-structures.if.php">if</a> Conditional executes code <i>only if the specified condition evaluates to true</i>. If this expression evaluates to <code>true</code>, PHP will execute the statement. If the expression evaluates to <code>false</code>, the statement will be ignored. In the example below, the expression will evaluate to <code>true</code> because <i>10 is greater than 5</i>. <br><br>
              <code>
                &#36;a &#61; 10;
                <br> &#36;b &#61; 5;
                <br>if &#40;&#36;a &#62; &#36;b&#41; &#123;echo &#34;a is greater thab&#34;;&#125;                
              </code>
              </p>
              <p></p>
            </div>
            <!-- -->
            <!-- if...else -->
            <div class="tab-pane fade" id="else" role="tabpanel" aria-labelledby="v-pills-else-tab">
              <p>The <a href="http://php.net/manual/en/control-structures.else.php">if...else</a> Conditional executes code if <i>a condition evaluates to true, otherwise another block of code is executed if condition evaluates to false</i>. In the example below, the expression will evaluate to <code>&#34;Have a good day&#33;&#34;</code> if it is <i>earlier than</i> <code>8pm</code> or <code>&#34;Have a good night&#33;&#34;</code> <i>if later than</i> <code>8pm</code>.
              <br><br>
              <code>
                &#36;t &#61; date&#40;&#34;H&#34;&#41;;
                <br>if &#40;&#36;t &#60; &#34;20&#34;&#41; &#123;
                echo &#34;Have a good day&#33;&#34;;&#125;
                <br>else &#123;echo &#34;Have a good night&#33;&#34;;&#125;
              </code>
              </p>
              </div>
            <!-- -->
            <!-- elseif -->
            <div class="tab-pane fade" id="elseif" role="tabpanel" aria-labelledby="v-pills-elseif-tab">
              <p>The <a href="http://php.net/manual/en/control-structures.elseif.php">else/if</a> executes <i>different codes for more than two conditions</i>. The elseif statement is only executed if &#40;a&#41; <i>the preceding <code>if</code> expression and any preceding elseif expressions evaluated to FALSE</i>, and &#40;b&#41; <i>the current <code>elseif</code> expression evaluated to TRUE</i>. In the example below, the expression will output <code>&#34;Have a good morning&#33;&#34;</code> if it is earlier than <code>10am</code>. If the time is between <code>10am - 8pm</code>, the expression will output <code>&#34;Have a good day&#33;&#34;</code>. And if it is later than <code>8pm</code>, the expression will evaluate to <code>&#34;Have a good night&#33;&#34;</code>.</p>
            </div>
            <!-- -->
            <!-- switch -->
            <div class="tab-pane fade" id="switch" role="tabpanel" aria-labelledby="v-pills-switch-tab">
              <p><a href="http://php.net/manual/en/language.control-structures.switch.php">Switch</a> statements are similar to a series of <code>if</code> statements that use the same expression, allowing you to compare many different values with the same variable or expression. The <code>switch-case</code> statement <i>tests a variable against a series of values until it finds a match, and then executes the block of code corresponding to that match</i>.</p>
            </div>
            <!-- -->
            <!-- -->            
          </div>
        </div>
          </div>
          
          <!-- -->
          <!-- -->
          <h3 id="implement" class="text-center font-weight-bold mb-2"></h3>
          <p></p>
          
          <!-- RESOURCES -->
          <ul>
            <li><b>RESOURCES</b></li>
            <li><a id="fade" href="https://www.w3schools.com/php/php_echo_print.asp">echo();</a> &#47;&#47; <a id="fade" href="https://www.phptpoint.com/php-echo-print">print();</a> &#47;&#47; Another List of Array <a id="fade" href="http://php.net/manual/en/ref.array.php">Functions</a></li>
            <li>The <a id="fade" href="php.net/manual/en/function.date.php">date ()</a> Function is used to <i>Format Local Time and Dates</i></li>
            <li>A <a id="fade" href="https://www.w3schools.com/php/php_variables.asp">Variable </a> <i>Stores Information</i>. Also see <a id="fade" href="http://php.net/manual/en/ref.var.php">Function Reference</a> and <a id="fade" href="http://php.net/manual/en/language.variables.scope.php">Scope</a></li>
            <li><a id="fade" href="http://php.net/manual/en/language.types.php">Data&#45;<a id="fade" href="https://www.w3schools.com/php/php_datatypes.asp">Types</a></a> define the type of information stored in a Variable</li>
            <li>Learn more about Data-Types: 
              <a id="fade" href="http://php.net/language.types.string">Strings</a>
              <sup><a id="fade" href="http://php.net/ref.strings">1</a></sup>
              <sup><a id="fade" href="https://www.tutorialspoint.com/php/php_strings.htm">2</a></sup>
              <a id="fade" href=""></a>
              &#47;&#47;
              <a id="fade" href="http://php.net/manual/en/language.types.integer.php">Integers</a> &amp;
              <a id="fade" href="http://php.net/manual/en/language.types.float.php">Floats</a>
              <sup><a id="fade" href="http://vegibit.com/php-integers-and-floating-point-values/">1</a> <a id="fade" href="http://php.net/manual/en/function.is-integer.php">2</a></sup>
              &#47;&#47;
              <a id="fade" href="http://php.net/manual/en/language.types.boolean.php">Booleans</a>
              &#47;&#47;
              <a id="fade" href="http://php.net/manual/en/language.types.array.php">Arrays</a>
              </li>
            <li>View a Variable Value and its Type using the <a id="fade" href="http://php.net/manual/en/function.var-dump.php">var&#95;dump&#40;&#41;;</a> Function</li>
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