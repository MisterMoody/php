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
          <h4>Arrays 101</h4>
          <ul>
            <li id=""><a id="fade" href="#">Intro</a></li>
          </ul>
        </nav>
        <!-- \End of SIDEBAR -->
        <!-- ************************************** -->
        <!-- ************************************** -->
        

        <!-- ************************************** -->
        <!-- ********** <MAIN-CONTENT> ************ -->
        <div id="content" class="col-lg-9">
          
          <!-- *********** <SECTION 1> ************ -->
          <h1>Introduction to Arrays</h1>
          <p>In PHP, an <b>Array</b> is <i>a Compound Variable-type that Stores multiple pieces of related, yet, complex Data in a single variable</i>, like an ordered map that associates Values to Keys.  This type of variable allows us to manipulate data &#40;ie user input&#41; and is especially useful when building Lists, Hash-Tables, Queues, Dictionaries, Collections, etc.
          <br>In essence, an Array is a simple list of <i>Values</i> that can be other Arrays, Associative Arrays and Multidimensional Arrays. This article first looks at some basic elements and useful functions of an <i>Indexed Array</i> that will enable us to:</p>
          <ol>
            <li>Create an Array and Assign it Values</li>
            <li>Query Array Variable Values [General &amp; Specific]</li>
          </ol>
          <h4>1. How to Create an Array</h4>
          <p>There are two ways to create an Array.</p>
          
          <div class="row">
            <div class="col-6">
              <h5>Traditional Method</h5>
              <p>Write the Variable Name, followed by the Assignment Operator and then the built-in Array function:<br><code>$variable = array('val1', 'val2');</code>.</p>
            </div>
            <div class="col-6">
              <h5>Best Practice</h5>
              <p>PHP 5.4 introduced a shorthand syntax, which omits the 'array' keyword and replaces the Parenthese with Brackets:<br><code>$variable = ['val1', 'val2'];</code></p>
            </div>
            <div class="col-12">
              <p>In both cases, the <i>List of Values</i> is placed within the Array. Each Value must be surrounded by Quotes <code>'value' / "value"</code>, and all Values must be separated by Commas <code>,</code>.</p>
              <p>This is an Example of an Array List: 
              <br><code>$variable = ['Conditionals', 'Arrays', 'Loops'];</code>
              <br>Now, lets take a look at the inner workings of this Array.</p>
            </div>
          </div>
          <!-- -->         
          <h4>2. How to Query an Array Variable Value</h4>
          <p>PHP has a useful function to Query or View an Array Variable <i>Type and its Values</i>. Using the <code>var_dump();</code> Function, we can learn (a) Array Size, (b) the Key-Indexed Position of that Elements Value, and (c) Element Type. This function is useful when using the <i>Console</i> and in order to access a particular script, you must navigate to the folder then enter <code>php fileName.php</code>. Following this method will reveal the following:</p>
          <div class="row">
            <div class="col-6">
              <h5>Script</h5>
              <p></p>
              1: <code>$learn = ['HTML', 'CSS' 'PHP'];</code>
              <br>2: <code>var_dump($learn);</code>
            </div>
            <div class="col-6">
              <h5>Query Results</h5>
              <p>3: <code>array(3)</code> {
              <br>4:<code>[0]=></code>
              <br>5:<code>string(4) "HTML"</code>
              <br>6:<code>[1]=></code>
              <br>7:<code>string(3) "CSS"</code>
              <br>8:<code>[2]=></code>
              <br>9:<code>string(3) "PHP"</code> }</p>
            </div>
            <div class="col-12">
              <p></p>
              <h5>Query Explained</h5>
              <p>(a) Lines 1 &amp; 2 represent the <i>Script</i> that is run inside of <i>Code Blocks</i> <code>&#60;?php ... ?&#62;</code>. Lines 3 &#45; 10 is the <i>Output</i> produced by the Script (ie. Line 1). Line 3 <code>array(3)</code> declares the Array <i>Size</i> and this Array has 3 Elements (ie Values).</p>
              <p>(b) Lines 4, 6 &amp; 8 <code>[0]=></code> <code>[1]=></code> <code>[2]=></code> highlights the <i>Key-Indexed Position</i> of that Elements VALUE within the Array. By default indexed positions begin at <code>[0]</code>. The <code>=></code> represents the relationship between the Key (ie Variable) and its Value; it is called a <i>Double-Arrow</i>. All Elements require a Key, which PHP assigns automatically by incrementing the largest previously used <i>Integer Key</i>.
              <br><b>**Include how to Specify my Own Key == See <i>ASSOCIATIVE ARRAYS</i></b><br>
              (c) Lines 5, 7 &amp; 9 <code>string(4) "HTML"</code> represents the <i>Variable Type</i> and the <i>Character Length</i> along with the actual Variable Value. So the first element has a <i>Key</i> of <code>0</code>, is of the <i>Type</i> <code>string</code> and has a <i>Character Length</i> of <code>4</code>.</p>
              
              <h5>Specific Query</h5>
              <p>If you only want to <i>View a Specific Element</i> and as the above example, use the <code>echo</code> Function; simply echo the <i>Variable Name</i> followed by the <i>Key</i>:
              <br><code>echo $variableName[Key #];</code></p>
              
              <h5>General Query</h5>
              <p>If you only want to <i>View the Element Values</i>, use the <code>echo</code> Function: <br><code>echo implode("\n", $variableName);</code>
              <br>the escape character <code>\n</code> is used to start a new line for each Value in the Array <code>$learn</code>.
              <br>The <code>implode();</code> Function is used to <i>Display Array Values</i> that are then combined into a Single String of Values. These items can then be separated into a new string using another string of your choosing.<code>?????NOT Clear????</code></p>
            </div>
          </div>
          
          <!--<div class="row">
            <div class="col-6">
              <h5></h5>
              <p></p>
            </div>
            <div class="col-6">
              <h5></h5>
              <p></p>
            </div>
          </div>-->
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
            <li>What is an <a id="fade"  href="http://php.net/manual/en/language.types.array.php">Array</a>?</li>
            <li>List of Array <a id="fade" href="http://php.net/manual/en/function.array.php">Functions</a></li>
            <li>List of Array <a id="fade" href="http://php.net/manual/en/ref.array.php">Functions</a></li>
          </ul>
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