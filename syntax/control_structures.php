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
    <title>PHP Control Structures</title>
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
              <a class="dropdown-item" href="#">xxx</a>
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
    
    <!-- --------------------------------------------------------- -->    
    <!-- --------------------------------------------------------- -->
    <!-- ----------------- PHP Control Structures ---------------- -->
    <div class="container">
      <!-- ------------------------------------------------------- -->
      <!-- ------------------------------------------------------- -->
      <!--Part I:  Conditional Statements & Logical Operators -->
      <div class="row">
        <div class="col-12">
          <!-- Introduction -->
          <h1 class="text-center font-weight-bold mb-2">PHP Control Structures</h1>
          <p>Control structures include <i>Conditionals</i>, <i>Loops</i> and <i>the Compound Variable</i>, better known as an <i>Array</i>. These tools allow developers to apply a <a href="https://en.wikiversity.org/wiki/Control_structures">decision-making process</a> based on user responses to given conditions and parameters. When combined, these help developers writer extremely intelligent scripts that are especially useful for creating intuitively interactive programs such as custom messages or a to-do task app with assigned due-dates.</p>
          
          <h2>Part I: Conditional Statements &amp; Logical Operators</h2>
          <p><i>Conditional Statements</i> and <i>Operators</i> are the key elements used to implement control within a program.</p>
          <p></p>          
        </div>
      </div>
      <!-- ------------------------------------------------------- -->
      <!-- Vertical Tabs for Conditional Statements -->      
      <div class="row mb-5">
        <div class="col-12">
          <h4>Conditional Statements</h4>
          <p><a href="https://www.tutorialrepublic.com/php-tutorial/php-if-else-statements.php">Conditional Statements</a> are used to create test conditions that form expressions that evaluates to is <code>boolean</code> value, then perform a certain action based on a specific response. The condition tested is based on a set of <code>keywords</code>.</p>
        </div>
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-if-tab" data-toggle="pill" href="#if" role="tab" aria-controls="v-pills-if" aria-selected="false">if</a>
          <a class="nav-link" id="v-pills-else-tab" data-toggle="pill" href="#else" role="tab" aria-controls="v-pills-else" aria-selected="false">if...else</a>
          <a class="nav-link" id="v-pills-elseif-tab" data-toggle="pill" href="#elseif" role="tab" aria-controls="v-pills-elseif" aria-selected="false">elseif</a>
          <a class="nav-link" id="v-pills-switch-tab" data-toggle="pill" href="#switch" role="tab" aria-controls="v-pills-switch" aria-selected="false">switch</a>
          <a class="nav-link" id="v-pills-otherstatements-tab" data-toggle="pill" href="#otherstatements" role="tab" aria-controls="v-pills-otherstatements" aria-selected="false">Others</a>
          <!--<a class="nav-link" id="v-pills-xxxxxxx-tab" data-toggle="pill" href="#v-pills-xxxxxxx" role="tab" aria-controls="v-pills-xxxxxxx" aria-selected="false">xxxxx</a>-->
        </div>
        </div>
        <div class="col-9">
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
              <p>A shorthand alternative for the <code>if...else</code> statment is to use the <code><a href="http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary">ternary operator</a></code>, which is used to <i>evaluate the result of an expression</i>. A ternary expression would look like so:
              <br>
                <code>
                &#40;expr1&#41; &#63; &#40;expr2&#41; &#58; &#40;expr3&#41;
                </code>
              <br>
              If <code>&#40;expr1&#41;</code> evaluates to <code>true</code> or <code>false</code>, the result would evaluate to <code>expr2</code> or <code>expr3</code>, respectively.</p>
              <div class="row">
                <div class="col-6">
                  <h6>normal <code>if...else</code> Statment</h6>
                  <code>
                  &#60;&#63;php
                  <br>if &#40;&#36;age &#60;&#41; &#123;
                    <br>echo &#39;Child&#39;;
                    <br>&#125; else &#123;
                    <br>echo &#39;Adult&#39;
                    <br>&#125;
                  &#63;&#63;
                  </code>
                </div>
                <div class="col-6">
                  <h6>shorthand <code>if...else</code> Statment</h6>
                  <code>
                   &#60;&#63;php
                    <br>echo &#36;age &#60; 18&#41; &#36; &#39;Child&#39; &#58; &#39;Adult&#39; <br>&#63;&#62;
                  </code>
                  <p>The ternary operator selects the Value on the Left or Right of the <code>&#58;</code> if the condition evaluates to <code>true</code> or <code>false</code>, respectively. </p>
                </div>
              </div>
            </div>
            <!-- -->
            <!-- elseif -->
            <div class="tab-pane fade" id="elseif" role="tabpanel" aria-labelledby="v-pills-elseif-tab">
              <p>The <a href="http://php.net/manual/en/control-structures.elseif.php">else/if</a> executes <i>different codes for more than two conditions</i>. The elseif statement is only executed if &#40;a&#41; <i>the preceding <code>if</code> expression and any preceding elseif expressions evaluated to FALSE</i>, and &#40;b&#41; <i>the current <code>elseif</code> expression evaluated to TRUE</i>. In the example below, the expression will output <code>&#34;Have a good morning&#33;&#34;</code> if it is earlier than <code>10am</code>. If the time is between <code>10am - 8pm</code>, the expression will output <code>&#34;Have a good day&#33;&#34;</code>. And if it is later than <code>8pm</code>, the expression will evaluate to <code>&#34;Have a good night&#33;&#34;</code>.</p>
              <br>
                <code>
                  &#36;t &#61; date&#40;&#34;H&#34;&#41;;
                  <br>if &#40;&#36;t &#60; &#34;10&#34;&#41;
                    &#123;echo &#34;Have a good morning&#33;&#34;;&#125;
                  <br>elseif &#40;&#36;t &#60; &#34;20&#34;&#41;  
                    &#123;echo &#34;Have a good day&#33;&#34;;&#125;
                  <br>else &#123; echo &#34;Have a good night&#33;&#34;;&#125;
                </code>
            </div>
            <!-- -->
            <!-- switch -->
            <div class="tab-pane fade" id="switch" role="tabpanel" aria-labelledby="v-pills-switch-tab">
              <p><a href="http://php.net/manual/en/language.control-structures.switch.php">Switch</a> statements are similar to a series of <code>if</code> statements that use the same expression, allowing you to compare many different values with the same variable or expression. The <code>switch-case</code> statement <i>tests a variable against a series of values until it finds a match, and then executes the block of code corresponding to that match</i>.</p>
              
              <code>
              &#60;&#63;php
              <br>&#36;today &#61; date&#40;&#39;l&#39;&#41;
              <br>switch &#40;date&#40;&#39;l&#39;&#41;&#41; &#123;
              <br> case &#34;Monday&#34;&#58; echo &#34;Study Mandarin on Monday&#34;&#59; break;
              <br> case &#34;Tuesday&#34;&#58; echo &#34;Study PHP on Tuesday&#34;&#59; break;
              <br> case &#34;Wednesday&#34;&#58; echo &#34;Call Grams on Wednesday&#34;&#59; break;
              <br> case &#34;Thursday&#34;&#58; echo &#34;Study Espanol on Thursday&#34;&#59; break;
              <br> case &#34;Friday&#34;&#58; echo &#34;Touch Base with Friends on Friday&#34;&#59;  break;
              <br> case &#34;Saturday&#34;&#58; echo &#34;Clean on Saturday&#34;&#59; break;
              <br> case &#34;Sunday&#34;&#58; echo &#34;Search for Work on Sunday&#34;&#59; break&#59;
              <br> default&#58; echo &#34;I don't know what day it is&#34;&#59; break&#59;  
              <br>  &#125;
              <br>&#63;&#62;  
              </code>
              
              <p>In this example, the <code>break</code> statement is introduced for the first time. It is important to include it at the end of every case-statment to ensure that the code-block stops running once a statement evaluates to <code>true</code>. </p>
            </div>
            <!-- -->
            <!-- Other Statments -->
            <div class="tab-pane fade" id="otherstatements" role="tabpanel" aria-labelledby="v-pills-otherstatements-tab">
              <p>Other Control Structures include
                <a href="http://php.net/manual/en/language.control-structures.break.php">break</a>
                &#47; <a href="http://php.net/manual/en/language.control-structures.continue.php">continue</a>
                &#47; <a href="http://php.net/manual/en/language.control-structures.declare.php">declare</a></p>
              <p><a href="http://php.net/manual/en/control-structures.alternative-syntax.php">Alternative</a> Syntax for Control Structures</p>
              <p>Associated Functions 
                <a href="http://php.net/manual/en/function.return.php">return</a>
                &#47; <a href="http://php.net/manual/en/function.require.php">require</a>
                &#47; <a href="http://php.net/manual/en/function.include.php">include</a></p>
            </div>
            <!-- -->
            <!-- -->
            <!--<div class="tab-pane fade" id="v-pills-xxxxx" role="tabpanel" aria-labelledby="v-pills-xxxxx-tab">Sed non finibus nibh, eu rhoncus purus</div>-->
            
          </div>
        </div>
      </div>
      <!-- ------------------------------------------------------- -->
      <!-- Horizontal Tabs for Logicial Operators -->
      <div class="row mb-5">
        <div class="col-12">
          <h4>Logical Operators</h4>
          <p><a href="http://php.net/manual/en/language.operators.php">Operators</a> are used to perform operations that compare variables and values before returning a true/false result. As opposed to keywords, operators take the form of math characters such as <code>&#62; &#43; &#45; &#42; &#61; &#60;</code>.</p>
          <p> Below is a list of the types of operators that you will need to familiarize yourself with when dealing with conditional statements.</p>
          <nav class="nav nav-tabs" id="myTab" role="tablist">
            <!-- Assignment -->
            <a class="nav-item nav-link active" id="nav-assignment-tab" data-toggle="tab" href="#assignmentoperator" role="tab" aria-controls="nav-assignment" aria-selected="false">Assignment</a>
            <!-- Arithmetic -->
            <a class="nav-item nav-link" id="nav-arithmetic-tab" data-toggle="tab" href="#arithmeticoperator" role="tab" aria-controls="nav-arithmetic" aria-selected="false">Arithmetic</a>
            <!-- Comparison -->
            <a class="nav-item nav-link" id="nav-comparison-tab" data-toggle="tab" href="#comparisonoperator" role="tab" aria-controls="nav-comparison" aria-selected="false">Comparison</a>
            <!-- Logical -->
            <a class="nav-item nav-link" id="nav-logical-tab" data-toggle="tab" href="#logicaloperator" role="tab" aria-controls="nav-logical" aria-selected="false">Logical</a>
            <!-- Concatenation -->
            <a class="nav-item nav-link" id="nav-concatenation-tab" data-toggle="tab" href="#concatenation" role="tab" aria-controls="nav-concatenation" aria-selected="false">Concatenation</a>
            <!-- xxx -->
            <!--<a class="nav-item nav-link" id="nav-xxx-tab" data-toggle="tab" href="#nav-xxx" role="tab" aria-controls="nav-xxx" aria-selected="false">xxx</a>-->
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <!-- Assignment -->
            <div class="tab-pane fade show active" id="assignmentoperator" role="tabpanel" aria-labelledby="nav-assignment-tab">
              <p><a href="http://php.net/manual/en/language.operators.assignment.php">Assignment Operators</a> assign values to variables. <code>&#36;x <b>&#61;</b> &#36;y</code>.</p>
            </div>
            <!-- Arithmetic -->
            <div class="tab-pane fade" id="arithmeticoperator" role="tabpanel" aria-labelledby="nav-arithmetic-tab">
              <p><a href="http://php.net/manual/en/language.operators.arithemetic.php">Arithmetic Operators</a> are used to add, subtract, multiply etc. Variables. <code>&#36;x <b>&#43;</b> &#36;y</code>.  
              <br>These can be used together with the <code>assignment operator</code> to create a shorthand.</p> 
                <table style="width: 100%;">
                  <tr>
                    <th>x + y <code>&#36;x <b>&#43;&#61;</b> 2;</code></th>
                    <th>x - y <code>&#36;x <b>&#45;&#61;</b> 2;</code></th>
                    <th>x * y <code>&#36;x <b>&#42;&#61;</b> 2;</code></th>
                    <th>x / y <code>&#36;x <b>&#47;&#61;</b> 2;</code></th>
                  </tr>
                </table>
            </div>
            <!-- Comparison -->
            <div class="tab-pane fade" id="comparisonoperator" role="tabpanel" aria-labelledby="nav-comparison-tab">
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
              <!-- Examples -->
              <div class="row mt-3">
                <div class="col-12">
                  <p>The example below provides a <code>code</code> example of a <i>greater than or equal to elseif conditional statement</i>.</p>
                </div>
                <div class="col-6">
                  <code>
                    &#60;?php
                    <br>&#36;score&#61; 80;
                    <br>
                    <br>if &#40;&#39;&#36;score &#62;&#61; 80&#39;&#41; &#123;
                    <br>echo &#39;&#36;Fantanstic work! Level Up!&#39;; 
                    <br>&#125; elseif &#40;&#39;&#36;score &#62;&#61; 60&#39;&#41; &#123;
                    <br>echo &#39;&#36;Good job. Level Up!'&#39;; 
                    <br>&#125; elseif &#40;&#34;&#36;score &#60;&#61; 59&#34;&#41; &#123;
                    <br>echo &#39;&#36;You should practice more before trying this level again.''&#39;; &#125;
                    <br>&#125; else &#123;
                    <br>echo &#39;&#36;Please try again.&#39;;
                    <br>&#125;
                    <br>
                    <br>?&#62;
                  </code>
                </div>
                <div class="col-6">
                  <h3><a href="">&#62;&#61; and &#60;&#61;</a></h3>
                  <p>This script uses an <code>elseif</code> <i>conditional statement</i> that queries multiple conditions that are defined using the <code>&#62;&#61;</code> <i>operator</i>. The primary objective is to <i>ascertain if a user has achieved a <b>passing score</b></i>. Thus, a score of 60 or greater is passing and a score greater than 80 is excellent. The code on the left will <code>output</code> the following results:</p>
                  <?php
                  $score = 22;
                  if ($score >= 80) {
                      echo 'Fantanstic work! Level Up!';
                  } elseif ($score >= 60) {
                    echo 'Good job. Level Up!';
                  } elseif ($score <= 59) {
                    echo 'You should practice more before trying this level again.';
                  } else {
                      echo 'Please try again!';
                  }
                  ?>
                </div>
              </div>
              <!-- -->
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
              <!-- Examples -->
              <div class="row mt-3">
                <div class="col-12">
                  <p>The example below provides a <code>code</code> example of a <i>Nested if conditional statement</i>.</p>
                </div>
                <div class="col-6">
                  <code>
                    &#60;?php
                    <br>&#36;num &#61; 100;
                    <br>
                    <br>if &#40;&#36;num &#60;&#61; 10 &amp;&amp; &#36;num &#62;&#61; 1000&#41; &#123;
                    <br>echo &#39;&#36;Number is WITHIN the Range&#39;; 
                    <br>&#125; else  &#123;
                    <br>echo &#39;&#36;Number is GREATER than 1000, NOT Within Range&#39;; 
                    <br>&#125; else  &#123;
                    <br>echo &#39;&#36;Number is LESS than 10, NOT within Range&#39;;
                    <br>&#125;
                    <br>
                    <br>?&#62;
                  </code>
                </div>
                <div class="col-6">
                  <h3>Nested <code>if</code> Conditional Statement</h3>
                  <p>This script uses an Nested <code>if</code> <i>conditional statement</i> that queries <i>a number within a specific range</i>. This script queries if the number is greater than 10 but less than 1000. The nested condition in this example can output statements for whether the number is within the range or not. If the variable value is outside of the range, it will state whether it is greater than or less than, respectively. The code on the left will <code>output</code> the following results:</p>
                  <?php
                  $num = 100;
                  if ($num >= 10) {
                    if ($num >= 10 && $num <= 1000) {
                        echo 'Number is Within the Range';
                    } else { 
                        echo 'Number is GREATER than 1000, NOT Within Range';
                    }
                  } else {
                      echo 'Number is LESS than 10, NOT Within Range'; {
                      }
                  }
                  ?>
                </div>
              </div>
              <!-- -->
            </div>
            <!-- Concatenation -->
            <div class="tab-pane fade" id="concatenation" role="tabpanel" aria-labelledby="nav-concatenation-tab">
              <p><a href="http://php.net/manual/en/language.operators.comparison.php">Concatenation</a>	uses <code>.</code> to create a New String by Combining Multiple Strings together.</p>
              <p>
                <?php
            /*$num = 1000;

            if ($num == 10 || is_string($num)) {
              echo '10 or string';
            } else {
              echo 'Not 10 or string';
            }*/
            /*Will Evaluate as TRUE only if the number 10 or a 'string' is present*/
            ?></p>
            </div>
            <!-- xxx -->
            <!--<div class="tab-pane fade" id="nav-xxx" role="tabpanel" aria-labelledby="nav-xxx-tab">
              <p><a href="http://php.net/manual/en/language.operators.assignment.php">Assignment Operators</a> assign values to variables. <code>&#36;x <b>&#61;</b> &#36;y</code> uses = to put a Value into a Variable</p>
            </div>-->
            <!-- -->
          </div>
          

<?php
/*$num = 1001;

if ($num >= 10) {
	if ($num <= 1000) {
			echo 'Number is Within the Range';
	} else { 
			echo 'Number is GREATER than 1000, NOT Within Range';
	}
} else {
		echo 'Number is LESS than 10, NOT Within Range'; {
		}
}*/
?>

<?php
/*$num = 100;

if ($num >= 10 && $num <= 1000) {
			echo 'Number is Within the Range';
	} else { 
			echo 'Number is NOT Within the Range';
	}*/
?>

<?php
/*$num = 1000;

if ($num == 10 || is_string($num)) {
	echo '10 or string';
} else {
	echo 'Not 10 or string';
}*/
/*Will Evaluate as TRUE only if the number 10 or a 'string' is present*/
?>

          
        </div>
      </div>
      <!-- ------------------------------------------------------- -->
     
      
      
      
      <!-- -->
      <!-- Part II:  PHP Arrays -->
      <div class="row">
        <!-- Array Intro -->
        <div class="col-12">
          <h2>Part II: Arrays</h2>
          <p>##The Compound Variable Type (Arrays) is a way to store multiple values which is useful for complex data such as List and Dictionaries wherein the data can be manipulated.
            <br>::Expercise - Build a To-Do List (with Due-Date / Priority)::</p>
        </div>
        <!-- -->
      </div>
      <!-- -->
      <!-- -->
      
      
      
      <!-- -->
      <!-- Part III:  PHP Loops-->
      <div class="row">
        <div class="col-12">
          <h2>Part III: Loops</h2>
          <p>Loops help manage the flow of Code by repeating code which is handy for repetitive task. Loops are frequently used to (a) cycle through an Array and (b) before an action on each element. 
            <br>::Exercise - Build a Ping Pong Game / Step 2 of To-Do App::</p>
        </div>
        <!-- -->
      </div>
      <!-- -->
      <!-- -->
       <!-- Vertical Tabs for PHP Loops -->      
      <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-loops-tab" data-toggle="pill" href="#v-pills-loops" role="tab" aria-controls="v-pills-loops" aria-selected="false">Loops</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
          <!--<a class="nav-link" id="v-pills-xxxxxxx-tab" data-toggle="pill" href="#v-pills-xxxxxxx" role="tab" aria-controls="v-pills-xxxxxxx" aria-selected="false">xxxxx</a>-->
        </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <!-- -->
            <!-- Loops -->
            <div class="tab-pane fade show active" id="v-pills-loops" role="tabpanel" aria-labelledby="v-pills-loops-tab">
              <ol>
                <p>Other Control Structures include
                  <a href="http://php.net/manual/en/language.control-structures.while.php">while</a> 
                  &#47; <a href="http://php.net/manual/en/language.control-structures.do.while.php">do-while</a>
                  &#47; <a href="http://php.net/manual/en/language.control-structures.for.php">for</a>
                  &#47; <a href="http://php.net/manual/en/language.control-structures.foreach.php">for each</a>
                  &#47; <a href="http://php.net/manual/en/language.control-structures.break.php">break</a>
                  &#47; <a href="http://php.net/manual/en/language.control-structures.continue.php">continue</a>
                  &#47; <a href="http://php.net/manual/en/language.control-structures.switch.php">switch</a>
                  &#47; <a href="http://php.net/manual/en/language.control-structures.declare.php">declare</a></p>
              </ol>
            </div>
            <!-- -->
            <!-- -->
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Sed non finibus nibh, eu rhoncus purus</div>
            <!-- -->
            <!-- -->
            <!--<div class="tab-pane fade" id="v-pills-xxxxx" role="tabpanel" aria-labelledby="v-pills-xxxxx-tab">Sed non finibus nibh, eu rhoncus purus</div>-->
            
          </div>
        </div>
      </div>
      <!-- -->
      <!-- -->
    <!-- --------------------------------------------------------- -->
    <!-- --------------------------------------------------------- -->        
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