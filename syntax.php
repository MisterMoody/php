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
            <a class="nav-link" href="index.html"><i class="fa fa-home d-none d-lg-inline-block"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" src="#" href="syntax.php" alt="PHP Snytax">Syntax</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" src="#" href="#" alt="xxxx">Scripts</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Database</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">aaa</a>
              <a class="dropdown-item" href="#">bbb</a>
            </div>
          </li>
          <!--<li class="nav-item">
            <a class="nav-link" href="about.html">About <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">502WEST</a>
              <a class="dropdown-item" href="#">CLIL</a>
            </div>
          </li>
          --> <!-- HIDDEN Nav Items -->
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
      <!-- INTRODUCTION-->
      <div class="row">
        <div class="col-12">
          <h1 class="text-center font-weight-bold mb-2">PHP Syntax</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. Morbi bibendum magna eu.</p>
        </div>
      </div>
      <!-- -->
      <!-- -->
      <!-- PHP Syntax INTRO -->
      <div class="row">
        <div class="col-12">
          <h1 class="text-center font-weight-bold mb-2">Writing PHP</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. Morbi bibendum magna eu.</p>          
        </div>  
      </div>
      <!-- Vertical Tabs for PHP Syntax -->      
      <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-implement-tab" data-toggle="pill" href="#v-pills-implement" role="tab" aria-controls="v-pills-implement" aria-selected="true">Implement PHP</a>
          <a class="nav-link" id="v-pills-variables-tab" data-toggle="pill" href="#v-pills-variables" role="tab" aria-controls="v-pills-variables" aria-selected="false">Variables &amp; Data&#45;Types</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
            <!-- Implement PHP -->
            <div class="tab-pane fade show active" id="v-pills-implement" role="tabpanel" aria-labelledby="v-pills-implement-tab">
              <p>When creating a PHP file, it is vital to use the <code>.php</code> File Extension. Once you have established your template, you initiate a PHP script by invoking a  <i>Code Block</i>, which is essentially a container for the functionality being implemented.</p>
              <p>This is how you write a code block: <code>&#60;?php...?&#62;. </code>The code written here will produce the functionality of your objective. You can <i>Display a Message</i> &#40;ie results&#41; in the browser by using <code>echo 'xxx';</code> or <code>print 'xxx';</code>, but there are differences.<sup><a href="https://www.w3schools.com/php/php_echo_print.asp"> 1 </a><a href="https://www.phptpoint.com/php-echo-print"> 2 </a></sup></p> 
              <p>It is important to use <i>Comments</i> with your code to properly maintain it. When structuring my comments, I prefer using a <i>Single&#45;Line Comment</i>  <code>&#47;&#42;&#42;&#47;</code> for simple explanations and for more elaborate explanations I utilize a <i>Doc&#45;Block</i>, which is a Single&#47;Line Comment that uses multiple lines of comment and where each line begins with an <code>&#42;</code>.</p>
              <p>Finally, there are two ways to <i>Inject PHP</i> into an HTML File.
                <br>&#40;1&#41; The first method is to write the <i>Variables</i> above the <code>&#60;&#33;DOCTYPE html&#62;</code> then invoke a <i>Code Block</i> on the <i>hmtl Tag</i> that you want to use the Variable and <i>Display the Message</i>. 
                <code>
                <br>&#60;?php
                &#36;date = date&#95;default&#95;timezone&#95;set&#40;&#39;EST&#39;&#40;;
                ?&#62; 
                <br>....
                <br>&#60;&#33;DOCTYPE html&#62;
                <br>....
                <br>&#60;footer&#62; 
                &#60;?php echo &#36;date&#40;&#34;g i a T&#34;&#41; ?&#62; 
                &#60;&#47;footer&#62;
                </code>
                <br>
                <i>Learn more about the <a href="php.net/manual/en/function.date.php">date ()</a> Function.</i>
                <br>
                <br>
                &#40;2&#41; The second method allows you to import a <code>xxx.php</code> File directly from its <i>Root</i> Folder using the Include function, like so: <code>&#60;?php include 'inc/xxxxx.php'?&#62;</code> where inc is the Folder where all scripts are placed.</p>
            </div>
            <!-- Variables -->
            <div class="tab-pane fade" id="v-pills-variables" role="tabpanel" aria-labelledby="v-pills-variables-tab">
              <p>All <i>Variables</i> begin with <code>&#36;</code> and be followed by an <code>&#95;</code> or a letter. Names themselves are case&#45;sensitive and may only contain alpha&#45;numeric characters or underscores.
              <br>This is an example of a Variable <code>&#36;firstName &#61; &#39;Ray&#39;</code> where <code>&#39;Ray&#39;</code> is the Variable <i>Value</i>.
              <br><i>Learn more about the <a href="https://www.w3schools.com/php/php_variables.asp">Variables</a>.</i>
              </p>
              
              <p>Variables can store different types of data which includes Strings, Integers, Floats, Booleans, Arrays and Objects. You can use the <code>var&#95;dump&#40;x&#41;</code> Function to <i>return the data&#45;type</i> in the console.</p>
              <ol>
                <li><i>Strings</i> are a <i>sequence of characters</i> and are always encapsulated with single&#45;quotes <code>&#39;xxx&#39;</code> or double &#45;quotes <code>&#34;xxx&#34;</code>.</li>
                <li><i>Integers</i> are <i>non&#45;decimal numbers</i> <i>decimal numbers</i> <code>1.52</code> that can be positive or negative.</li>
                <li><i>Floats</i> are <i>decimal numbers</i> <code>1.52</code>  that can be positive or negative.</li>
                <li><i>Booleans</i> are often used in conditional testing and represent if something is <code>true</code> or <code>false</code>.</li>
                <li><i>Arrays</i> store multiple&#45;values into a single variable <code>&#36;cars &#61; array&#40;&#34;Toyota&#34;&#34;Honda&#34;&#34;Nissan&#34;&#41;;</code>.</li>
                <li><i>Objects</i> store data then provides information on how to process that data.</li>
              </ol>
              <p>You can combine multipe variables via <i>Concatenation</i> 
                <br><code>&#36;string &#61; Ask . &#39;&#36;name&#39; . &#39;for the answer&#39;</code>
              
                <br><i>Learn more about <a href="https://www.w3schools.com/php/php_datatypes.asp">Data&#45;Types</a> 
                <sup><a href="http://php.net/manual/en/language.types.string.php">1</a></sup> <sup><a href="http://php.net/manual/en/function.var-dump.php">2</a></sup> <sup><a href="http://php.net/manual/en/function.is-int.php">3</a></sup>.</i>
              </p>
            </div>
            <!-- Operators -->
            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            
            <br><i>Learn more about <sup><a href="http://php.net/manual/en/language.operators.string.php">Operators</a></sup>.</i>
            </div>
            <!-- -->
            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Sed non finibus nibh, eu rhoncus purus</div>
            
          </div>
        </div>
      </div>
      <!-- -->
      <!-- -->
      <!-- <div class="col-12">
          <h4>Summary</h4>
          <p>Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. Morbi bibendum magna eu.</p>
        </div>
        
        <div class="col-md-6">am maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. </div>
        <div class="col-md-6">am maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. </div>-->
      
      
      <!-- Vertical Tabs -->
      <!--<div class="row">
        <div class="col-12">
          <h1 class="text-center font-weight-bold mb-2">Writing PHP</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. Morbi bibendum magna eu.</p>          
        </div>  
      </div>      
      <div class="row">
        <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
          <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
          <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
          <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
        </div>
        </div>
        <div class="col-9">
          <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">In libero purus, volutpat ut lobortis vitae</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Sed non finibus nibh, eu rhoncus purus</div>
        </div>
        </div>
      </div>-->
      <!-- -->
      <!-- -->
      <!-- -->
      
      
      <!-- RESOURCES -->
      <!--<div class="row">
        <div class="col-lg-12">
          <h4>Resources</h4>
          <ol>
            <li>Official <a href="http://php.net">PHP</a></li>
            <li>PHP <a href="https://www.w3schools.com/php/php_syntax.asp">Tutorials</a></li>
            <li>PHP <a href="http://foundationphp.com/tutorials.php">Tutorials</a></li>
          </ol>
        </div>
      </div>-->
      <!-- -->
    </div>
    
    <!-- -->
    <!-- -->
    <!-- Version Control -->
    <!--<div class="grid">
      <div class="col-12">
        <h3 id="vc">Version Control</h3>
      </div>
      <div class="col-12">
        <ol>
          <li>Create the Repo</li>
          <p class="notes">From your account, Click <span class="highlight">New repository</span>.  Give the repo a name and brief description of the project objective. You want to <i>Initialize the Repo with a README</i> only if you are building a code from scratch, which is exactly what should be done here.</p>
          
          <li>Clone Repo to Computer</li>
          <p class="notes">Cloning the repo is a multi-step process. First, from the repo click the 'Clone or Download' button. Next, <span class="highlight">Copy</span> the <span class="highlight">https://github.com/User/project.git</span> link.</p>
          <p class="notes">Now, open the <span class="highlight">Control Panel</span> and access the <span class="highlight">C:\xampp\htodcs folder</span>. [Use the 'cd.. / cd ' commands to move down and up within the C:\ directory, respectively.]</p>
          <p class="notes">Type <span class="highlight">git clone</span> then paste the repo link in the format provided above.</p>
          
          <li>Build the Project</li>
          <p class="notes">If you already have files to build upon, simply copy and paste them into the repo folder.  Otherwise, create an index.html file and add it to the repo folder. Once you have done this, type <span class="highlight">git status</span>, which is a command that will allow you to <i>view the status of all project files</i>. Notice how the files are labled <span class="highlight">untracked</span>? That means that the file has not been uploaded from the computer to the Git repo online. Upload any file from the console using three simple commands: <span class="highlight">Add</span>, <span class="highlight">Commit</span> and <span class="highlight">Push</span>. Those commands are as follow:</p>
          <ol type="a">
            <li class="notes">git add fileName.extension</li>
            <li class="notes">git commit -m "Changes Made to fileName.ext"</li>
            <li class="notes">git push -u origin master</li>
          </ol>
          <p class="notes">That's it! Follow these three commands to modify any file in the future.  As well, there are several other commands that can be useful throughout your workflow such as <span class="highlight">Removing Files</span> or <span class="highlight">Cleaning the repo</span>, and this <span><a href="http://ndpsoftware.com/git-cheatsheet.html">Git Cheatsheet</a></span> can show you how!</p>
        </ol>
      </div>
    </div>-->
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