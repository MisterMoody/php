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
        <div class="col-12">
          <h1 class="text-center font-weight-bold mb-2">PHP Scripts</h1>
          <p>These are some basic <a href="https://www.w3schools.com/php/php_examples.asp">PHP Script Examples</a> that I have encountered in my web development journey. For each example, I provide the actual code via <code>&#60;html&#62;</code> as well as a description of how the code is processed when injected into html. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis.</p>
        </div>
      </div>
      <!-- -->
      <!-- -->
      
      <!-- -->
      <!-- Examples of Conditional Statements-->
      <div class="row mb-5">
        <div class="col-12">
          <h2><b>Conditional Statement</b> Usage Examples</h2>
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
        <!-- if/else 1 -->
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
        <!-- if/else 2 -->
        <div class="col-12 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>if/else</b> Statement</h4>
              <p class="card-text">This script uses the <b>if/else</b> statement to query <b><i>if</i></b> a student earned high enough marks to qualify for the <i>Honor Roll</i>,  <b><i>else</i></b> state the students grade point average.</p>
              <h4 class="card-subtitle mb-2 text-muted"> 
              &#36;student1Name &#61; &#39;Moody_R&#39;; &#36;student1GPA &#61; 3.5;<br>
              &#36;student2Name &#61; &#39;Moody_J&#39;; &#36;student2GPA &#61; 4.0;
              <br><code>if &#40;</code>&#34;&#36;student1GPA &#61;&#61; 4.0&#34;<code>&#41; &#123;</code> 
              echo &#34;&#36;student1Name made the Honor Roll&#34;; 
              <br><code>&#125; else &#123;</code>echo &#34;&#36;student1Name has a GPA of &#36;student1GPA&#34;; <code>&#125;</code>
              <br><code>if &#40;</code>&#34;&#36;student2GPA &#61;&#61; 4.0&#34;<code>&#41; &#123;</code>
              echo &#34;&#36;student2Name made the Honor Roll&#34;; 
              <br><code>&#125; else &#123;</code> 
              echo &#34;&#36;student2Name has a GPA of &#36;student2GPA&#34;; <code>&#125;</code>
              </h4>
              <p class="card-text">The 1st <b>if</b> expression evaluates to <code>false</code> because <code>&#36;student1Name</code> did not earn the qualifying score. Thus, the <code>else</code> expression will execute to display the students <i>G.P.A.</i> The 2nd <b>if</b> expression evaluates to <code>true</code> because <code>&#36;student2Name</code> earned a qualifying score. This code will <code>output</code> the following results:</p>
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
        </div>
        <!-- else if -->
        <div class="col-12 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>else if</b> Statement</h4>
              <h4 class="card-subtitle mb-2 text-muted">
                &#36;score&#61; 80;
                <br><code>if &#40;</code>&#36;score &#62;&#61; 80<code>&#41; &#123;</code>
                echo &#39;Fantanstic work! Level Up!&#39;; 
                <br><code>&#125; elseif &#40;</code>&#36;score &#62;&#61; 60<code>&#41; &#123;</code>
                echo &#39;Good job. Level Up!&#39;; 
                <br><code>&#125; else &#40;</code>&#36;score &#60;&#61; 59<code>&#41; &#123;</code>
                echo &#39;You Lose. Try Again.&#39;;<code>&#125;</code>
              </h4>
              <p class="card-text">This script uses an <code>elseif</code> <i>conditional statement</i> that queries multiple conditions that are defined using the <code>&#62;&#61;</code> <i>operator</i>. The primary objective is to <i>ascertain if a user has achieved a <b>passing score</b></i>. Thus, a score of 60 or greater is passing and a score greater than 80 is excellent. This code will <code>output</code> the following results:</p>
              <?php
                  $score = 80;
                  if ($score >= 80) {
                      echo 'Fantanstic work! Level Up!';
                  } elseif ($score >= 60) {
                    echo 'Good job. Level Up!';
                  } elseif ($score <= 59) {
                    echo 'You should practice more before trying this level again.';
                  } else {
                      echo 'You Lose! Try Again.';
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
                <br><code>&#125; else &#123;</code>
                    <br>echo 'Number is LESS than 10, NOT Within Range';
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
        <!-- switch 1-->
        <div class="col-12 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>switch</b> Statement</h4>
              <h5 class="card-subtitle mb-2 text-muted">
              <code>if &#40;</code>&#33;isset&#40;&#36;role&#41;<code>&#41;</code> 
              <code> &#123;</code>	&#36;role &#61; &#39;subscriber&#39;;		<code>&#125;</code>
              <br>
              <br><code>switch &#40;</code>&#36;role&#41; <code>&#123;</code>
              <br><code>case</code> &#34;admin&#34;<code>&#58;</code> echo &#34;As an admin, you can add, edit, or delete any post.&#34;;
              <br><code>break;</code>
              <br>
              <br><code>case</code> &#34;editor&#34;<code>&#58;</code> echo &#34;As an editor, you can add or edit any post, and delete your own posts.&#34;;
              <br><code>break;</code>
              <br>
              <br><code>case</code> &#34;author&#34;<code>&#58;</code> echo &#34;As an author, you can add, edit, or delete your own post.&#34;;
              <br><code>break;</code>
              <br>
              <br><code>default&#58;</code> echo &#34;You do not have access to this page. Please contact your administrator.&#34;;
              <br><code>break;</code> <code>&#125;</code>
              </h5>
              <p class="card-text">This script uses the <code>switch</code> statement to <i>define User Privileges based on their Role</i> and will <code>output</code>:</p>
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
        </div>
        <!-- switch 2-->
        <div class="col-12 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>switch</b> Statement</h4>
              <h4 class="card-subtitle mb-2 text-muted">
                &#36;today &#61; date&#40;&#39;l&#39;&#41;;
                <br><code>switch &#40;</code>date&#40;&#39;l&#39;&#41;<code>&#41; &#123;</code>
                <br> <code>case &#34;Monday&#34;&#58;</code> echo &#34;Study Mandarin on Monday&#34;&#59; <code>break&#59;</code>
                <br><code>case &#34;Tuesday&#34;&#58;</code> echo &#34;Study PHP on Tuesday&#34;&#59; 
                <code>break&#59;</code>
                <br><code>case &#34;Wednesday&#34;&#58;</code> echo &#34;Call Grams on Wednesday&#34;&#59; <code>break&#59;</code>
                <br><code>case &#34;Thursday&#34;&#58;</code> echo &#34;Study Espanol on Thursday&#34;&#59; <code>break&#59;</code>
                <br><code>case &#34;Friday&#34;&#58;</code> echo &#34;Touch Base with Friends on Friday&#34;&#59;  <code>break&#59;</code>
                <!--<br><code>case &#34;Saturday&#34;&#58;</code> echo &#34;Clean on Saturday&#34;&#59; 
                <code>break&#59;</code>
                <br><code>case &#34;Sunday&#34;&#58;</code> echo &#34;Search for Work on Sunday&#34;&#59; <code>break&#59;</code>-->
                <br><code>default&#58;</code> echo &#34;I chill on the weekend&#34;&#59; <code>break&#59; &#125;</code>
              </h4>
              <p class="card-text">This script uses a <code>switch();</code> statement based on the built-in <code>date()</code> Function to <i>evaluate an expression based on the current day</i> and will <code>output</code> the corresponding <i>task of the day</i>:</p>
              <?php
              $today = date('l'); 
              switch (date('l')) { 
              case "Monday": echo "<b>Study Mandarin</b> on Monday</p>"; break; 
              case "Tuesday": echo "<b>Study PHP</b> on Tuesday"; break; 
              case "Wednesday": echo "<b>Call Grams</b> on Wednesday"; break; 
              case "Thursday": echo "<b>Study Espanol</b> on Thursday"; break; 
              case "Friday": echo "<b>Touch Base with Friends</b> on Friday"; break; 
              case "Saturday": echo "<b>Clean</b> on Saturday"; break; 
              case "Sunday": echo "<b>Search for Work</b> on Sunday"; break; 
              default: echo "<b>I don't know what day it is"; break; }
              ?>
            </div>
          </div>
        </div>
        <!-- *if elseif else switch* -->
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>if</b> - <b>elseif</b> - <b>else</b> - <b>switch</b> Statement (Multi-Usage Case)</h4>
              <p class="card-text">This script uses a combination of conditional statements to <i>sends a specialized message to students based on their grade level and final grade point average</i>.</p>
              <h5 class="card-subtitle mb-2 text-muted">
                &#36;firstName &#61; &#39;Ray&#39;;
                <br>&#36;lastName &#61; &#39;Moody&#39;;
                <br>&#36;currentGrad &#61; 12;
                <br>&#36;finalAverage &#61; .80;
                <br>&#36;messageBody &#61; &#39; &#39;;
                <br>
                <br><code>if (</code>!$firstName <code>||</code> !$lastName<code>) &#123;</code>
                echo &#34;Please enter a student name&#34;<code>;</code>
                <br>
                <br><code>&#125; elseif &#40;</code>$currentGrade &#60; 9 <code>||</code> $currentGrade &#62; 12<code>&#41; &#123;</code>
                <br>    echo &#34;This is for high school students. Enter a grade between 9 and 12.&#34;<code>;</code>	
                <br><code>&#125; else &#123;</code>
                <br><code>if &#40;</code>$finalAverage &#60; .70&#41; <code>&#123;</code>
                <br>    &#36;messageBody = 'We look forward to seeing you at summer school, flunky!'<code>;</code>
                <br><code>&#125; else &#123;</code>
                <br>
                <br><code>switch (</code>$currentGrade<code>) &#123;</code>
                <br><code>case 9:</code>
                &#36;messageBody = 'Congratulations on completing your freshman year in High School! See you September for your sophomore year!'<code>;</code>
                <br><code>break;</code>
                <br>
                <br><code>case 10:</code>
                &#36;messageBody = 'Congratulations on completing your sophomore year in High School! See you September for your junior year!'<code>;</code>
                <br><code>break;</code>
                <br>
                <br><code>case 11:</code>
                &#36;messageBody = 'Congratulations on completing your junior year in High School! See you September for your senior year!'<code>;</code>
                <br><code>break;</code>
                <br>
                <br><code>case 12:</code>
                &#36;messageBody = 'Congratulations on graduating High School! Good luck!'<code>;</code>
                <br><code>break;</code>
                <br>
                <br><code>default:</code>
                &#36;messageBody = 'Error: Grade level is not 9-12!';
                <br>echo "Dear &#36;firstName &#36;lastName\n";	
                <br>echo &#36;messageBody;
                <br><code>&#125;</code>
                <p class="card-text">The <code>output</code> will display:</p>
              </h5>
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
        </div>    
        <!-- -->
      </div>
      <!-- -->
      <!-- -->
      
      
      
      <!-- -->
      <!-- MATH & OPERATOR MANIPULATIONS -->
      <div class="row mb-5">
        <!-- Intro -->
        <div class="col-12">
          <h2><b>Math &amp; Operator Manipulation</b> Usage Examples</h2>
          <p>Arithmetic Operators allow developers to add specificity when creating expressions.</p>
          
        </div>
        <!-- Math Equations -->
        <div class="col-12 mb-2">
          <h4>Math Equation </h4>
          <p>Unit Conversion Equations</p>
          <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Convert <b>Pounds to Kilograms</b></h4>
                  <h5 class="card-subtitle mb-2 text-muted">
                    <code>&#36;</code>pounds &#61; 180;
                    <br><code>&#36;</code>lb_to_kg &#61; 0.453592;
                    <br><code>&#36;kilograms </code>&#61; <code>&#36;</code>pounds <code>&#42;</code> <code>&#36;</code>lb_to_kg;
                    <br>
                    <br><code>echo</code> &#34;Weight:&#34;<code>;</code>
                    <br><code>echo</code> &#34;&#36;pounds&#34;<code>;</code>
                    <br><code>echo</code> &#34;lb &#61; &#34;<code>;</code>
                    <br><code>echo</code> &#34;&#36;kilograms&#34;<code>;</code>
                    <br><code>echo</code> &#34;kg&#34;<code>;</code>
                  </h5>
                  <p class="card-text">The <code>&#36;pounds &#61; 180;</code> variable <i>stores the # in pounds to convert</i> to kilograms. The <code>&#36;lb_to_kg &#61; 0.453592;</code> is the <i>kilogram equivalent of pounds</i> when converted. The <code>&#36;kilograms &#61; &#36;pounds &#42; &#36;lb_to_kg;</code> retrieves variable data that is calculated once converted. The <code>echo</code> statement is used to <i>display the results</i>.</p>
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
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Convert <b>Miles to Kilometers</b></h4>
                  <h5 class="card-subtitle mb-2 text-muted">
                    <code>&#36;</code>miles &#61; 2.5;
                    <br><code>&#36;</code>mile_to_km &#61; 1.60934;
                    <br><code>&#36;kilometers</code> &#61; <code>&#36;</code>miles <code>&#42;</code> <code>&#36;</code>mile_to_km;
                    <br>
                    <br><code>echo</code> &#34;Distance:&#34;<code>;</code>
                    <br><code>echo</code> &#34;&#36;miles&#34;<code>;</code>
                    <br><code>echo</code> &#34;miles &#61; &#34;<code>;</code>
                    <br><code>echo</code> &#34;&#36;kilometers&#34;<code>;</code>
                    <br><code>echo</code> &#34;km&#34;<code>;</code>
                  </h5>
                  <p class="card-text">The <code>&#36;miles &#61; 2.5;</code> variable <i>stores the # in miles to convert</i> to kilometers. The <code>&#36;mile_to_km &#61; 1.60934;</code> is the <i>kilometer equivalent of miles</i> when converted. The <code>&#36;kilometers &#61; &#36;miles &#42; &#36;mile_to_km;</code> retrieves variable data that is calculated once converted. The <code>echo</code> statement is used to <i>display the results</i>.</p>
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
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create a PHP File</h4>
              <h4 class="card-subtitle mb-2 text-muted">file-name<code>.php</code></h4>
              <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
            </div>
          </div>
        </div>
        <!-- -->
        <!-- Logical Operator -->
        <div class="col-12 mb-2">
          <h4>Logial Operator Usage</h4>
          <p>Logical Operators are used to <i>simultaneously test multiple conditional statements</i>. The <b>&amp;&amp;</b> Operator will evalute to <code>true</code> if <i>both conditions are true</i>. The <b>||</b> Operator will evaluate to <code>true</code> if <i>either condition is true</i>.</p>
          <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">the <code>&amp;&amp;</code> Operator</h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    &#36;num = 100;
                    <br><code>if &#40;</code>&#36;num &#62;= 10 <code>&amp;&amp;</code> &#36;num &#60;= 1000<code>&#41; &#123;</code>
                        <br>echo 'Number is Within the Range';
                    <br><code>&#125; else &#123;</code> 
                        <br> 'Number is NOT Within the Range';
                    <br><code>&#125;</code>
                  </h4>
                  <p class="card-text">Both conditions evaluate to <code>true</code> so the <b>if</b> statment will be executed.</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">the <code>||</code> Operator</h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    &#36;num = 1000;
                    <br><code>if &#40;</code>&#36;num==10 <code>||</code> is_string&#40;$num&#41;<code>&#41; &#123;</code>
                      <br>echo '10 or string';
                    <br><code>&#125; else &#123;</code>
                      <br>echo 'Not 10 or string';
                    <br><code>&#125;</code>
                  </h4>
                  <p class="card-text">The 1st condition evaluates to <code>false</code>, but the 2nd condition evaluates to <code>true</code>, thus, the <b>if</b> statment will be executed.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- -->
        <!-- -->
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
      </div>
      <!-- -->
      <!-- -->
      
      
      
      <!-- -->
      <!-- BUILT-IN FUNCTIONS USAGE EXAMPLES-->
      <div class="row mb-5">
        <!-- Intro -->
        <div class="col-12">
          <h2><b>Built-In Functions</b> Usage Examples</h2>
          <p>These are script examples that rely on PHP built-in Functions.</p>
        </div>
        <!-- The var_dump() Function -->
        <div class="col-12 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>var_dump();</b> Function</h4>
              <p class="card-text">The <a id="fade" href="http://php.net/manual/en/function.var-dump.php">var_dump();</a> Function is used to <i>display structured information about the Variable Type and Value of an Expression</i>, and is especially useful when working with <i>Arrays</i>.</p>
              <h5 class="card-subtitle mb-2 text-muted">
              //Task 1 "Todo List Item"
              <br><code>$list[] = [</code>
              'title' <code>=></code> 'Laundry'<code>,</code>
              'priority' <code>=></code> 2<code>,</code>
              'due' <code>=></code> ''<code>,</code>
              'complete' <code>=></code> true<code>,</code>
              <code>];</code>
              <br>//Task 2 "Todo List Item"
              <br><code>$list[] = [</code>
              'title' => 'Clean fridge'<code>,</code>
              'priority' => 2<code>,</code>
              'due' => ''<code>,</code>
              'complete' => true<code>,</code>
              <code>];</code>
              <br>
              <br><code>var_dump("\n", $list);</code>
              </h5>
              <p class="card-text">The following <code>output</code> gives an overview of the results indicating that <i>this Array is a String of Two Arrays</i>.</p>
              <p><?php
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
              ?></p>
            </div>
          </div>
        </div>
        <!-- The date() Function -->
        <div class="col-12 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">the <b>date();</b> Function</h4>
              <p class="card-text">The <a id="fade" href="http://php.net/manual/en/function.date.php">date();</a> Function is used to <i>Format a Local Time/Date.</i> It returns a string formatted according to the given format string using the given integer timestamp or the current time if no timestamp is given. You can set <b>time</b> according to <i>hours, minutes and seconds</i> or you can set the <b>date</b> by <i>year, month, week and day</i>. Check out the referenced link above for more details on setting the parameters for this function.</p>
              <p class="card-text">To use this function, declare a <i>date</i> Variable, then set the timezone parameters to reflect local time &#40;<code>'EST'</code>&#41;. Once you have declared the variable, you can create expressions based on the time/date parameters that you set to accomplish your objectives. Here are a few examples that use <code>echo</code> to <i>Output (ie Display)</i> Time expressions:</p>
              <!-- Examples -->
              <div class="row">
                <div class="col-7">
                  <h5 class="card-subtitle mb-2 text-muted">
                    <br><code>&#36;date</code> &#61; <code>date_default_timezone_set&#40;</code>&#39;EST&#39;<code>&#41;;</code>
                    <br>
                    <br><code>echo date&#40;</code>&#34;D d M, Y&#34;<code>&#41;;</code>
                    <br>
                    <br><code>echo date&#40;</code>&#34;g i a T&#34;<code>&#41;;</code>
                    <br>
                    <br><code>echo date&#40;</code>&#34;F d Y g:i:s&#34;<code>&#41;;</code>
                    <br>
                    <br><code>echo date&#40;</code>&#34;W&#34;<code>&#41;;</code>
                  </h5>
                </div>
                <div class="col-5">
                  <br><br><br>
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
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- The sort() Function -->
        <div class="col-12 mb-2">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">The <b>sort()</b> Function</h4>
              <p>This script utilizes the <code>sort()</code> Function in conjunction with <i>if else foreach switch</i>.</p>
              <h5 class="card-subtitle mb-2 text-muted">
              //Tutorial 1 https://teamtreehouse.com/library/foreach-loops
              <br>//Tutorial 2 https://teamtreehouse.com/library/todo-app
              <br>//Tutorial 3 https://teamtreehouse.com/library/feature-switch-this-week
              <br>
              <br><code>include '</code>list.php<code>';</code>
              <br>
              <br>$status = 'all';
              <br>$field = 'priority';
              <br>$action = 'week';
              <br>$order = array();
              <br>
              <br><code>if ($</code>status <code>==</code> 'all'<code>) {</code>
              <code>$</code>order = <code>array_keys(</code>$list<code>);</code>
              <br><code>} else {</code>
              <br>		<code>foreach (</code>$list <code>as</code> $key <code>=></code> $item<code>) {</code>
              <br>			<code>if(</code>$item['complete'] <code>==</code> $status<code>) {</code>
              $order[] = $key<code>; } } }</code>;
              <br>
              <br><code>switch (</code>$action<code>) {</code>
              <br><code>case</code> 'sort'<code>:</code> 
              <br>		<code>if (</code>$field<code>) { </code>$sort = array();
              <br>			<code>foreach (</code>$order <code>as</code> $id<code>) {</code>
              $sort[$id] = $list[$id][$field]<code>; }</code>
              <br>
              <br>$order = <code>array_keys(</code>$sort<code>); }</code>
              <br><code>break;</code>
                <br>
              <br><code>case</code> 'week'<code>:</code>
              <br><code>foreach (</code>$order <code>as</code> $key => $value<code>) {</code> 
              <br><code>if (</code>strtotime($list[$value]['due']) > strtotime("+1 week")<code> { unset($</code>order[$key]<code>); } }</code>
              <br>	<code>break; }</code>
              <br>      
              <br>echo '&#60;table&#62;'<code>;</code>
              <br>echo'&#60;tr&#62;'<code>;</code>
              <br>echo'&#60;th&#62;Title&#60;/th&#62;'<code>;</code>
              <br>echo'&#60;th&#62;Priority&#60;/th&#62;'<code>;</code>
              <br>echo'&#60;th&#62;Due Date&#60;/th&#62;'<code>;</code>
              <br>echo'&#60;th&#62;Complete&#60;/th&#62;'<code>;</code>
              <br>echo'&#60;/tr&#62;'<code>;</code>
              <br>echo '&#60;tr&#62;'<code>;</code>
              <br>echo '&#60;tr&#62;'<code>;</code>
              <br>echo '&#60;td&#62;' . $list[$id]['title'] . "&#60;/td&#62;\n"<code>;</code>
              <br>echo '&#60;td&#62;' . $list[$id]['priority'] . "&#60;/td&#62;\n"<code>;</code>
              <br>echo '&#60;td&#62;' . $list[$id]['due'] . "&#60;/td&#62;\n"<code>;</code>
              <br>echo '&#60;td&#62;'<code>;</code>
              <br>
              <br><code>if ($</code>list[$id]['complete']<code>) {</code> echo 'Yes'; <code>} else {</code> echo 'No'; <code>}</code>
              <br>echo "&#60;/td&#62;\n"<code>;</code>
              <br>echo '&#60;/tr&#62;'<code>; }</code>
              <br>
              <br>echo '&#60;/table&#62;'<code>;</code>
              </h5>
              <p class="card-text">This script will <code>output</code> the following results:</p>
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
        </div>
        <!--<div class="col-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create a PHP File</h4>
              <h4 class="card-subtitle mb-2 text-muted">file-name<code>.php</code></h4>
              <p class="card-text"><i>.php</i> is the <i>File Extension</i> for PHP</p>
            </div>
          </div>
        </div>-->
        <!--  -->
      </div>
      <!-- -->
      <!-- -->
      
      
            
      <!-- -->
      <!-- FORMATTING PHP (Using HTML)-->
      <!-- <p> @ echo -->
          <?php           /*$student1Name = 'Ray';
          $student1GPA = 3.5;
          
          if ($student1GPA == 4.0) {echo "<p>$student1Name made the Honor Roll</p>";}
          else { echo "<p>$student1Name has a GPA of $student1GPA</p>";}*/          ?>
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