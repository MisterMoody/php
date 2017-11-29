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
      <!-- Scripts Intro -->
      <div class="row">
        <!-- -->
        <div class="col-12">
          <h1 class="text-center font-weight-bold mb-2">PHP Scripts</h1>
          <p>These are some basic <a href="https://www.w3schools.com/php/php_examples.asp">PHP Script Examples</a> that I have encountered in my web development journey. For each example, I provide the actual code via <code>&#60;html&#62;</code> as well as a description of how the code is processed when injected into html. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis.</p>
        </div>
      </div>
      <!-- -->
      <!-- -->
      
      <!-- Examples of Conditional Statements-->
      <div class="row mb-2">
        <div class="col-12">
          <h4>Examples of Conditional Statements</h4>
          <p>The <b>if</b>, <b>if/else</b> and <b>else</b> statements allow <i>conditional execution of code</i> based on its given expression. All <b>Expressions</b> are <i>evaluated to their</i> <code>boolean</code> value. 
          <br>The <b>if</b> statement is the foundation for all conditional statements in that it will be executed if the expression evaluates to <code>true</code>. 
          <br>The <b>else</b> statement extends an <b>if</b> statement <i>to execute a statement in case the expression in the if statement evaluates to</i> <code>false</code>. When an <code>if/else</code> expression evaluates to <code>true</code>, the <b>if</b> statement will be executed. If the expression evaluates to <code>false</code>, the <b>else</b> statement will be executed. 
          <br>The <b>elseif</b> statement also extends an <b>if</b> statement, but differs from the <b>else</b> statement in that it is only executed if the preceding <b>if</b> expression evaluates to <code>false</code> <i>AND</i> the current <b>elseif</b> expression evaluates to <code>true</code>.</p>
        </div>
        <!-- if -->
        <div class="col-6 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>if</b> Statement</h4>
              <h4 class="card-subtitle mb-2 text-muted">
                &#36;a &#61; 10;
                  <br> &#36;b &#61; 5;
                  <code><br>if &#40;</code>&#36;a &#62; &#36;b<code>&#41; &#123;</code>
                  <br>echo &#34;a is greater than b&#34;; <code>&#125;</code>
              </h4>
              <p class="card-text">Statement is executed because the expression evaluates to <code>true</code>. Had the expression evaluated to <code>false</code>, the statement would be ignored.</p>
            </div>
          </div>
        </div> 
        <!-- if/else -->
        <div class="col-6 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>if/else</b> Statement</h4>
              <h4 class="card-subtitle mb-2 text-muted">
                &#36;a &#61; 10;
                <br> &#36;b &#61; 5;
                <br><code>if &#40;</code>&#36;a &#62; &#36;b<code>&#41; &#123;</code>
                <br>echo &#34;a is greater than b&#34;; 
                <br><code>&#125;</code> else <code>&#123;</code>
                <br>echo &#34;b is greater than a&#34;;<code>&#125;</code>
              </h4>
              <p class="card-text">The <b>if</b> statement is executed because the expression evaluates to <code>true</code>. Had the expression evaluated to <code>false</code>, the <b>else</b> statement would have been executed.</p>
            </div>
          </div>
        </div>
        <!-- else if -->
        <div class="col-12 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>else if</b> Statement</h4>
              <h4 class="card-subtitle mb-2 text-muted">
                &#36;score&#61; 80;
                <br>
                <br><code>if &#40;</code>&#36;score &#62;&#61; 80<code>&#41; &#123;</code>
                <br>echo &#39;Fantanstic work! Level Up!&#39;; 
                <br><code>&#125; elseif &#40;</code>&#36;score &#62;&#61; 60<code>&#41; &#123;</code>
                <br>echo &#39;Good job. Level Up!&#39;; 
                <br><code>&#125; else &#40;</code>&#36;score &#60;&#61; 59<code>&#41; &#123;</code>
                <br>echo &#39;Please try again.&#39;;<code>&#125;</code>
              </h4>
              <p class="card-text">This script uses an <code>elseif</code> <i>conditional statement</i> that queries multiple conditions that are defined using the <code>&#62;&#61;</code> <i>operator</i>. The primary objective is to <i>ascertain if a user has achieved a <b>passing score</b></i>. Thus, a score of 60 or greater is passing and a score greater than 80 is excellent. The code on the left will <code>output</code> the following results:</p>
              <?php
                  $score = 80;
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
        </div>
        <!-- -->  
        <!-- if/else & elseif Comparison -->
        <div class="col-12">
          <div class="row">
            <div class="col-12">
              <h4>A Comparative Example of <b>if/else</b> and <b>elseif</b> Statements</h4>
              <p></p>
            </div>
            <div class="col-6 mb-2">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">the <b>if/else</b> Statement</h4>
                <h4 class="card-subtitle mb-2 text-muted">
                  &#36;t &#61; date&#40;&#34;H&#34;&#41;;
                  <br><code>if &#40;</code>&#36;t &#60; &#34;12&#34;<code>&#41; &#123;</code>
                  <br>echo &#34;Good Morning&#33;&#34;;
                  <br><code>&#125; else &#123;</code>
                  <br>echo &#34;Good Afternoon&#33;&#34;;<code>&#125;</code>
                </h4>
                <p class="card-text">Expression will evaluate to <code>"Good Morning!"</code> <b>if</b> <i>it is earlier than noon</i>. <b>Else</b>, the expression will evaluate to <code>"Good Afternoon!"</code> <i>if later than noon</i>. </p>
                <h5>Shorthand Syntax</h5>
                <p><code>echo &#40;&#36;t &#60; 20&#41; &#63; &#34;Good Morning&#33;&#34; &#58; &#34;Good Night&#33;&#34;
                    </code></p>
                <p>The <b>Ternary Operator</b> <code>&#40;expr1&#41; &#63; &#40;expr2&#41; &#58; &#40;expr3&#41;</code> offers a shorthand method for the <code>if...else</code> statment that will <i>evaluate the result of an expression</i>. 
                <br>If <code>&#40;expr1&#41;</code> evaluates to <code>true</code> or <code>false</code>, the result would evaluate to <code>expr2</code> or <code>expr3</code>, respectively.</p>
              </div>
            </div>
          </div>
            <div class="col-6 mb-2">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">the <b>else/if</b> Statement</h4>
                <h4 class="card-subtitle mb-2 text-muted">
                  &#36;t &#61; date&#40;&#34;H&#34;&#41;;
                  <br><code>if &#40;</code>&#36;t &#60; &#34;10&#34;<code>&#41; &#123;</code>
                  <br>echo &#34;Good Morning&#33;&#34;;
                  <br><code>&#125; elseif &#40;</code>&#36;t &#60; &#34;20&#34;<code>&#41; &#123;</code>
                  <br>echo &#34;Good Afternoon&#33;&#34;;
                  <br><code>&#125; else &#123;</code> 
                  <br>echo &#34;Good Night&#33;&#34;;<code>&#125;</code>
                </h4>
                <p class="card-text">Expression will output <code>&#34;Good Morning&#33;&#34;</code> <b>If</b> <i>it is earlier than 10am</i>. <b>Elseif</b> <i>when the time is between 10am - 8pm</i>, the expression will output <code>&#34;Good Afternoon&#33;&#34;</code>. <b>Else</b> <i>when it is later than 8pm</i>, the expression will evaluate to <code>&#34;Good Night&#33;&#34;</code>.</p>
              </div>
            </div>
          </div>
            <!-- -->
          </div>
        </div>
        <!-- --> 
        <!-- -->
        <!-- Nested if -->
        <div class="col-12 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">a Nested <b>if</b> Statement</h4>
              <h4 class="card-subtitle mb-2 text-muted">
                <code>if &#40;</code>$num &#62;= 10<code>&#41; &#123;</code>
                  <br><code>if &#40;</code>$num &#60;= 1000<code>&#41; &#123;</code>
                      <br>echo &#39;Number is Within the Range&#39;;
                  <br><code>&#125; else &#123;</code> 
                      <br>echo 'Number is GREATER than 1000, NOT Within Range';
                  <br><code>&#125;</code>
                <br><code>&#125; else &#123;</code>
                    <br>echo 'Number is LESS than 10, NOT Within Range'; &#123;
                    <br><code>&#125;</code>
                <br><code>&#125;</code>
              </h4>
              <p class="card-text">This script uses an Nested <code>if</code> <i>conditional statement</i> that queries <i>a number within a specific range</i>. This script queries if the number is greater than 10 but less than 1000. The nested condition in this example can output statements for whether the number is within the range or not. If the variable value is outside of the range, it will state whether it is greater than or less than, respectively. The code on the left will <code>output</code> the following results:</p>
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
        </div>
        <!-- -->
        <div class="col-12 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>switch</b> Statement</h4>
              <h4 class="card-subtitle mb-2 text-muted">
                <code>
                &#36;today &#61; date&#40;&#39;l&#39;&#41;
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
                </code>
              </h4>
              <p class="card-text"><i>???</i> Uses the <code>date();</code> Function to determine which statement to use.</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <code>&amp;&amp;</code> Operator</h4>
              <h4 class="card-subtitle mb-2 text-muted">
                <code>
                  &#36;num = 100;
                  <br>if &#40;&#36;num &#62;= 10 &amp;&amp; &#36;num &#60;= 1000&#41; &#123;
                        <br>echo 'Number is Within the Range';
                    <br>&#125; else &#123; 
                        <br> 'Number is NOT Within the Range';
                    <br>&#125;
                </code>
              </h4>
              <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <code>||</code> Operator</h4>
              <h4 class="card-subtitle mb-2 text-muted">
                <code>
                &#36;num = 1000;
                <br>if &#40;&#36;num == 10 || is_string&#40;$num&#41;&#41; &#123;
                  <br>echo '10 or string';
                <br>&#125; else &#123;
                  <br>echo 'Not 10 or string';
                <br>&#125;
                </code>
              </h4>
              <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
            </div>
          </div>
        </div>
        <!--<div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create a PHP File</h4>
              <h4 class="card-subtitle mb-2 text-muted">file-name<code>.php</code></h4>
              <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create a PHP File</h4>
              <h4 class="card-subtitle mb-2 text-muted">file-name<code>.php</code></h4>
              <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create a PHP File</h4>
              <h4 class="card-subtitle mb-2 text-muted">file-name<code>.php</code></h4>
              <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create a PHP File</h4>
              <h4 class="card-subtitle mb-2 text-muted">file-name<code>.php</code></h4>
              <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create a PHP File</h4>
              <h4 class="card-subtitle mb-2 text-muted">file-name<code>.php</code></h4>
              <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create a PHP File</h4>
              <h4 class="card-subtitle mb-2 text-muted">file-name<code>.php</code></h4>
              <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
            </div>
          </div>
        </div>-->
      </div>
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
      
      
      <!-- Message to Student -->
      <div class="row mb-3">
        <div class="col-6">
          <code>
            &#60;?php
            <br>&#36;firstName &#61; &#39;Ray&#39;;
            <br>&#36;lastName &#61; &#39;Moody&#39;;
            <br>&#36;currentGrad &#61; 12;
            <br>&#36;finalAverage &#61; .80;
            <br>&#36;messageBody &#61; &#39; &#39;;
            <br>
            <br>?&#62;
            
            <br>if (!$firstName || !$lastName) &#123;
            <br>    echo &#34;Please enter a student name&#34;;
            <br>
            <br>&#125; elseif &#40;$currentGrade &#60; 9 || $currentGrade &#62; 12&#41; &#123;
            <br>    echo &#34;This is for high school students. Enter a grade between 9 and 12.&#34;;	
            <br>
            <br>&#125; else &#123;
            <br>if &#40;$finalAverage &#60; .70&#41; &#123;
            <br>    &#36;messageBody = 'We look forward to seeing you at summer school, flunky!';
            <br>
            <br>  &#125; else &#123;
            <br>
            <br>switch ($currentGrade) &#123;
            <br>        case 9:
            <br>          &#36;messageBody = 'Congratulations on completing your freshman year in High School! See you September for your sophomore year!';
            <br>          break;
            <br>
            <br>        case 10:
                      &#36;messageBody = 'Congratulations on completing your sophomore year in High School! See you September for your junior year!';
            <br>          break;
            <br>
            <br>        case 11:
            <br>          &#36;messageBody = 'Congratulations on completing your junior year in High School! See you September for your senior year!';
            <br>          break;
            <br>
            <br>        case 12:
                      &#36;messageBody = 'Congratulations on graduating High School! Good luck!';
            <br>          break;
            <br>
            <br>        default:
            <br>          &#36;messageBody = 'Error: Grade level is not 9-12!';
            <br>          echo "Dear &#36;firstName &#36;lastName\n";	
            <br>      echo &#36;messageBody;
            <br>&#125;
            <br>&#63;&#62;
          </code>
        </div>
        <!-- -->
        <div class="col-6">
          <h3><a href="">Letter to Student</a></h3>
          <p>This script <i>sends a message</i> to students based on their grade level and final grade point average [<a href="https://teamtreehouse.com/library/schools-out">Tutorial</a>] and will <code>output</code> the following results:</p>
          <?php 
          //Variables
          $firstName = 'Ray ';	
          $lastName = 'Moody';
          $currentGrade = 12;
          $finalAverage = .80;
          $messageBody = '';
          //Check for Values of Required Variables
            //if NOT firstName 'or' lastName
            //if less than grade 9 'or' greater than grade 12
              //Nested Conditions
                //Display Message  >>  $messageBody
          if (!$firstName || !$lastName) {
              echo 'Please enter a student name';
          } elseif ($currentGrade < 9 || $currentGrade > 12) {
              echo 'This is for high school students. Enter a grade between 9 and 12.';	
          } else {
              if ($finalAverage < .70) {
                $messageBody = 'We look forward to seeing you at summer school, flunky!';
              } else {
                  switch ($currentGrade) {
                    case 9:
                      $messageBody = 'Congratulations on completing your freshman year in High School! See you September for your sophomore year!';
                      break;

                    case 10:
                      $messageBody = 'Congratulations on completing your sophomore year in High School! See you September for your junior year!';
                      break;

                    case 11:
                      $messageBody = 'Congratulations on completing your junior year in High School! See you September for your senior year!';
                      break;

                    case 12:
                      $messageBody = 'Congratulations on graduating High School! Good luck!';
                      break;
                    default:
                      $messageBody = 'Error: Grade level is not 9-12!';
                  }
              }
              echo "Dear $firstName $lastName\n";	
              echo $messageBody;
          }
          ?>
        </div>
      </div>
      <!-- -->
      <!-- -->
       
      <!-- User 'Privilege' based on 'Role' -->
      <div class="row mb-3">
        <div class="col-6">
          <code>
          if &#40;&#33;isset&#34;&#36;role&#41;&#41; &#123;	&#36;role &#61; &#39;subscriber&#39;;		&#125;
          <br>
          <br>switch &#40;&#36;role&#41; &#123;
          <br>  case &#34;admin&#34;&#58;
          <br>    echo &#34;As an admin, you can add, edit, or delete any post.&#34;;
          <br>    break;
          <br>
          <br>  case &#34;editor&#34;&#58;
          <br>    echo &#34;As an editor, you can add or edit any post, and delete your own posts.&#34;;
          <br>    break;
          <br>
          <br>  case &#34;author&#34;&#58;
          <br>    echo &#34;As an author, you can add, edit, or delete your own post.&#34;;
          <br>    break;
          <br>
          <br>  default&#58;
          <br>    echo &#34;You do not have access to this page. Please contact your administrator.&#34;;
          <br>    break;
          <br>&#125;
          <br>&#63;&#62;
          </code>
        </div>
        <div class="col-6">
          <h3>User Privilege based on Role</h3>
          <p></p>
          <?php
          if (!isset($role)) {	$role = 'admin';		}

          switch ($role) {
            case "admin":
              echo "As an admin, you can add, edit, or delete any post.";
              break;

            case "editor";
              echo "As an editor, you can add or edit any post, and delete your own posts.";
              break;

            case "author";
              echo "As an author, you can add, edit, or delete your own post.";
              break;

            default:
              echo "You do not have access to this page. Please contact your administrator.";
              break;
          }
          ?>
        </div>
      </div>
      <!-- -->
      <!-- -->
      
      <!-- Working with Arrays -->
      <div class="row mb-3">
        <div id="arrays" class="col-12"><h3>Working with Arrays</h3></div>
        <!-- Associative Array-->
        <div class="col-7">
          <h5>Associative-Array EXAMPLE</h5>
          <p><code>&#60;?php</code>
          <br><code>$contacts = ['James Moody', 'Ray Moody']; </code>
          <br><code>$contacts = [</code>
          <br><code>['name' => 'James Moody',</code>
          <br><code>'email' => 'jmoody@world.com'],</code>
          <br><code>['name' => 'Ray Moody',</code>
          <br><code>'email' => 'rmoody@world.com'],</code>
          <br><code>];</code>
          <br>
          <br><code>echo $contacts[1]['name'] . " : ". $contacts[1]['email'];</code>
          <br><code>?&#62;</code></p>
        </div>
        <!-- -->
        <div class="col-5">
          <h5><a href="https://teamtreehouse.com/library/php-arrays-and-control-structures/php-arrays/associative-quiz">Build a Contact List</a></h5>
          <p>This script will <code>output</code> the following results:</p>
          <?php
          $contacts = ['James Moody', 'Ray Moody'];
          $contacts = [
            ['name' => 'James Moody',
            'email' => 'jmoody@world.com'],
            ['name' => 'Ray Moody',
            'email' => 'rmoody@world.com'],
          ];
          //$contacts[1] will return 'Ray Moody' in this Array of Contacts.
          echo $contacts[1]['name'] . " : ". $contacts[1]['email'];
          ?>
        </div>
        
        <!-- Multidimensional Array -->
        <div class="col-6">
          <h5>Multidimensional-Array EXAMPLE</h5>
          <p>//Task 1 "Todo List Item"
            <br><code>&#60;?php</code>
            <br><code>$list[] = [</code>
            <br><code>'title' => 'Laundry',</code>
            <br><code>'priority' => 2,</code>
            <br><code>'due' => '',</code>
            <br><code>'complete' => true,</code>
            <br><code>];</code>
            <br>//Task 2 "Todo List Item"
            <br><code>$list[] = [</code>
            <br><code>'title' => 'Clean fridge',</code>
            <br><code>'priority' => 2,</code>
            <br><code>'due' => '',</code>
            <br><code>'complete' => true,</code>
            <br><code>];</code>
            <br>
            <br><code>var_dump("\n", $list);</code>
            <br><code>?&#62;</code></p>
        </div>
        <!-- -->
        <div class="col-6">
          <h5><a href="https://teamtreehouse.com/library/php-arrays-and-control-structures/php-arrays/multidimensional-arrays">Multidimensional-Array</a></h5>
          <p>This script will <code>output</code> the following results:</p>
          <?php
              //Associative Array of Details
              //Task 1 "Todo List Item"
              $list[] = [
                 'title' => 'Laundry',
                 'priority' => 2,
                 'due' => '',
                 'complete' => true,
              ];
              //Task 2 "Todo List Item"
              $list[] = [
                'title' => 'Clean fridge',
                'priority' => 2,
                'due' => '',
                'complete' => true,
              ];

              //View Structured Info about Variables, Expression, Data-Types & Values
              var_dump("\n", $list);

              //Access 'Element' of First List
              //echo $list[0]['title'];
              ?>
          <p></p>
          <p>The <code>var_dump();</code> Function indicates that this Array is <i>a <b>String</b> of Two Arrays</i></p>
        </div>
        
        <!-- -->
        
        <!-- -->

        <div class="col-6">
          <code>
          &#60;?php
<br>//Tutorial https://teamtreehouse.com/library/foreach-loops
<br>//https://teamtreehouse.com/library/todo-app
<br>//https://teamtreehouse.com/library/feature-switch-this-week
<br>//Include Multi-dimensional Array of "List-Items" to Perform as Part of the ToDo List from list.php Script
<br>include 'list.php';
<br>
<br>//Set "Status" Variable
<br>$status = 'all';
<br>//Set the "Field" Variable to "SORT" by Category
<br>$field = 'priority';
<br>//
<br>$action = 'week';
<br>//Create an Indexed-Array with a "List of Keys" in a Particular Order
<br>$order = array();
<br>//Conditional to Check ALL Statuses
<br>if ($status == 'all') {
<br>		//IF Complete or True, Add Keys from $list to $order Array
<br>		$order = array_keys($list);
<br>} else {
<br>		//LOOP through the $list Array and Add  Only Keys of Items with Proper Status
<br>		foreach ($list as $key => $item) {
<br>		//Filter to DISPLAY 'Completion Status' using Key-Value pair.
<br>			if($item['complete'] ==$status) {
<br>				//Add Key to $order Array
<br>				$order[] = $key;
<br>		}
<br>	}	
<br>}

<br>switch ($action) {
<br>	case 'sort' : 
<br>		//Sort Conditional 
<br>		if ($field) {
<br>		//Sort by that Field = Loop through $order Array using Value as a Key for the list
<br>			$sort = array();
<br>			foreach ($order as $id) {
<br>				//Set the Sort Key Equal to ID = Use $id to Set Value Equal to the Chosen Value of the Sort (In this Case 'Priority')
<br>				$sort[$id] = $list[$id][$field];
<br>			}
<br>			//Sort the Array by Value 'priority' == The UPDATE $order Array
<br>			asort($sort);
<br>			$order = array_keys($sort);
<br>		} 
<br>		break;
<br>	//
<br>	//Next Feature or 'Case' : Is $action Equal to 'week'
<br>	case 'week' :
<br>			foreach ($order as $key => $value) { 
<br>					//Check IF Due Date is After the Next Week
<br>					if (strtotime($list[$value]['due']) > strtotime("+1 week") /*|| !$list[$value]['due'] == Will EXCLUDE Tasks without a Due Date*/) {
<br>						//Unsets Current Key in Array
<br>            unset($order[$key]);
<br>					}
<br>			}
<br>	break;
<br>}
<br>//Display the Items as a 'Table' with Associated Values
<br>//MUST 'Wrap' the foreach(){}; Loop Inside the Table
<br>echo '<table>';
<br>//Add a 'Header' for all Array Items inside the Table
<br>echo'<tr>';
<br>echo'<th>Title</th>';
<br>echo'<th>Priority</th>';
<br>echo'<th>Due Date</th>';
<br>echo'<th>Complete</th>';
<br>echo'</tr>';
<br>//For Each Loop, Add a Row to the Table = Do this by Wrapping the foreach() {Statement}
<br>echo '<tr>';
<br>//(1) <code>$list</code> tells the Loop which Array to use. 
<br>//(2) The keyword <i>as</i> is used... 
<br>//(3) ... 'for each' Item in the List to work with it as the Variable <code>$item</code>. 
<br>//(*) This will Assign one Item from the List to the Variable <code>$item</code> on each Loop. 
<br>//(*) <code>$item</code> is now an Associative-Array with a named Key and Value.
<br>//--
<br>//Loop through $order Array to ONLY use Items from that Array (use each item as a 'Key' in the $list Array). $id is a Variable that Identifies List Item to Use
foreach ($order as $id) {
<br>		//Add a Row to the Table For Each Loop
<br>		echo '<tr>';
<br>		//Add Table-Cell Tags around each {statement}
<br>		echo '<td>' . $list[$id]['title'] . "</td>\n";
<br>		//Duplicate Table-cells for All 'Header' Elements
<br>		echo '<td>' . $list[$id]['priority'] . "</td>\n";
<br>		echo '<td>' . $list[$id]['due'] . "</td>\n";
<br>		//Add a Conditional to Change the Display of Complete Status
<br>		echo '<td>';
<br>		if ($list[$id]['complete']) {
<br>			echo 'Yes';
<br>		} else { 
<br>			echo 'No';
<br>		}
<br>		echo "</td>\n";
<br>		echo '</tr>';
<br>	}
<br>
<br>//Close the Table Tag
<br>echo '</table>';
<br>/* Display Array Contents = Production Mode ONLY*/
<br>//var_dump($list);
<br>//echo $list[0]['title'];
<br>
<br>?&#62;</code>
        </div>
        <!-- -->
        <div class="col-6">
          <h3>Build a "To-Do" APPLICATION</h3>
          <p>This script uses knowledge learned from a <a id="fade" href="https://teamtreehouse.com/library/do-while-looping">PHP Tutorial</a> presented by Aleena Holligan and will <code>output</code> the following results:</p>
<?php
//Tutorial https://teamtreehouse.com/library/foreach-loops
//https://teamtreehouse.com/library/todo-app
//https://teamtreehouse.com/library/feature-switch-this-week
//Include Multi-dimensional Array of "List-Items" to Perform as Part of the ToDo List from list.php Script
include 'list.php';

//Set "Status" Variable
$status = 'all';
//Set the "Field" Variable to "SORT" by Category
$field = 'priority';
//
$action = 'week';
//Create an Indexed-Array with a "List of Keys" in a Particular Order
$order = array();
//Conditional to Check ALL Statuses
if ($status == 'all') {
		//IF Complete or True, Add Keys from $list to $order Array
		$order = array_keys($list);
} else {
		//LOOP through the $list Array and Add  Only Keys of Items with Proper Status
		foreach ($list as $key => $item) {
		//Filter to DISPLAY 'Completion Status' using Key-Value pair.
			if($item['complete'] ==$status) {
				//Add Key to $order Array
				$order[] = $key;
		}
	}	
}

switch ($action) {
	case 'sort' : 
		//Sort Conditional 
		if ($field) {
		//Sort by that Field = Loop through $order Array using Value as a Key for the list
			$sort = array();
			foreach ($order as $id) {
				//Set the Sort Key Equal to ID = Use $id to Set Value Equal to the Chosen Value of the Sort (In this Case 'Priority')
				$sort[$id] = $list[$id][$field];
			}
			//Sort the Array by Value 'priority' == The UPDATE $order Array
			asort($sort);
			$order = array_keys($sort);
		} 
		break;
	//
	//Next Feature or 'Case' : Is $action Equal to 'week'
	case 'week' :
			foreach ($order as $key => $value) { 
					//Check IF Due Date is After the Next Week
					if (strtotime($list[$value]['due']) > strtotime("+1 week") /*|| !$list[$value]['due'] == Will EXCLUDE Tasks without a Due Date*/) {
						//Unsets Current Key in Array
            unset($order[$key]);
					}
			}
	break;
}
//Display the Items as a 'Table' with Associated Values
//MUST 'Wrap' the foreach(){}; Loop Inside the Table
echo '<table>';
//Add a 'Header' for all Array Items inside the Table
echo'<tr>';
echo'<th>Title</th>';
echo'<th>Priority</th>';
echo'<th>Due Date</th>';
echo'<th>Complete</th>';
echo'</tr>';
//For Each Loop, Add a Row to the Table = Do this by Wrapping the foreach() {Statement}
echo '<tr>';
//(1) <code>$list</code> tells the Loop which Array to use. 
//(2) The keyword <i>as</i> is used... 
//(3) ... 'for each' Item in the List to work with it as the Variable <code>$item</code>. 
//(*) This will Assign one Item from the List to the Variable <code>$item</code> on each Loop. 
//(*) <code>$item</code> is now an Associative-Array with a named Key and Value.
//--
//Loop through $order Array to ONLY use Items from that Array (use each item as a 'Key' in the $list Array). $id is a Variable that Identifies List Item to Use
foreach ($order as $id) {
		//Add a Row to the Table For Each Loop
		echo '<tr>';
		//Add Table-Cell Tags around each {statement}
		echo '<td>' . $list[$id]['title'] . "</td>\n";
		//Duplicate Table-cells for All 'Header' Elements
		echo '<td>' . $list[$id]['priority'] . "</td>\n";
		echo '<td>' . $list[$id]['due'] . "</td>\n";
		//Add a Conditional to Change the Display of Complete Status
		echo '<td>';
		if ($list[$id]['complete']) {
			echo 'Yes';
		} else { 
			echo 'No';
		}
		echo "</td>\n";
		echo '</tr>';
	}

//Close the Table Tag
echo '</table>';
/* Display Array Contents = Production Mode ONLY*/
//var_dump($list);
//echo $list[0]['title'];
?>
        </div>
      </div>
      <!-- -->
      <!-- -->
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