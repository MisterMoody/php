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
      <div class="row">
      
        <!-- ************************************** -->
        <!-- ********* <FIXED-SIDEBAR> ************ -->
        <nav id="sideNav" class="col-lg-3">
          <h4>Build a PHP Website</h4>
          <ul>
            <li id=""><a id="fade" href="#content">Introduction</a></li>
            <li id=""><a id="fade" href="#templating">Templating</a></li>
            <li id=""><a id="fade" href="#varTags">&#60;html&#62; Variable Tags</a></li>
            <li id=""><a id="fade" href="#">xxx</a></li>
            <li id=""><a id="fade" href="#">xxx</a></li>
            <li id=""><a id="fade" href="#"><b>xxx</b></a></li>
          </ul>
        </nav>
        <!-- \End of SIDEBAR -->
        <!-- ************************************** -->
        <!-- ************************************** -->
        
        
        
        <!-- ************************************** -->
        <!-- ********** <MAIN-CONTENT> ************ -->
        <div id="content" class="col-lg-9">
          
          
          <!-- ************ -->
          <!-- INTRODUCTION -->
          <!-- ************ -->
          <h1 class="text-center font-weight-bold mb-2">Using PHP to Build a Website</h1>
          <p>The first writing-php.php article shared knowledge of how to write PHP code to create a program. This article looks at ways to utilize PHP to develop the asthetic design of a website layout.</p>
          <!-- ************ -->
          <!-- ************ -->
          
          
          <!-- ********** -->
          <!-- TEMPLATING -->
          <!-- ********** -->
          <hr id="templating"  class="my-4">
          <h3 class="text-center font-weight-bold mb-2">Templating</h3>
          <p><b>Templating</b> is a technique that is used to <u>Include Re-Usable Code that can be redistributed throughout a website from a single File</u>, which reduces the amount of code required, essentially limiting the number of errors a program contain. The basic principle is that certain structural patterns are common across multiple pages and these patterns should be separated to maintain clean code. For example, the Header, Navigation and Footer Sections most definitely will not change so we would create three files to contain the code for those sections, add those files to a specified Folder and then reference those scripts where required for individual pages. Lets look at the code that will facilitate this process.</p>
          <div class="row">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <b>Templating</b> for <i>&#60;nav&#62; and &#60;footer&#62; Sections</i></h4>
                  <p>In this example, we are going to set up two Template Files for for both the Navigation and the Footer in three simple steps.</p>
                  <!-- [1] Templating Process -->
                  <dl class="row">
                    <dt class="col-sm-1 card-title">1</dt>
                    <dd class="col-sm-11"><b>Create an inc/ Folder</b> <u>to store all Templates</u>.</dd>

                    <dt class="col-sm-1">2</dt>
                    <dd class="col-sm-11"><b>Create Files &#40;ie Templates&#41;</b> <u>to Store the Code for the Nav and Footer Sections</u>.</dd>

                    <dt class="col-sm-1 text-truncate">3</dt>
                    <dd class="col-sm-11"><b>Use the built-in Include Statement</b> <u>to Add those Files from the inc/ Folder</u> and <u>Reference those statements where required</u> on each webpage.</dd>
                  </dl>
                  <p>The process is simple: 
                  <br><b>&#60;a&#62;</b> Create a traditional <code>index.php</code> File with a Navigation, Main Content and Footer Section. 
                  <br><b>&#60;b&#62;</b> Next, Create Files for both the Navigation and the Footer then place them in a <code>inc/</code> Folder. 
                  <br><b>&#60;c&#62;</b> Finally, Reference these Sections on all pages by Including them where required. The first two steps are self-explanatory. For the third step, use the model below to guide you:</p>
                  <h4 class="card-subtitle mb-2 text-muted">
                  &#60;&#63;php<code>include("inc/header.php")</code>&#63;&#62;
                  &#60;&#63;php<code>include("inc/footer.php")</code>&#63;&#62;
                  </h4>
                  <p>It should be obvious that you would place the <i>header.php</i> and <i>footer.php</i> Files at the Top and Bottom of the page, respectively. That is to say, placement of such statements matter.</p>
                  <p>Where <i>inc/header.php</i> contains <u>the Opening</u> &#60;html&#62; and &#60;body&#62; <u>Tags</u>, the &#60;head&#62; Tag, &#60;header&#62; and &#60;nav&#62; Tags, and the Opening &#60;div&#62; Tag for Main-Content. Conversly, the <i>inc/footer.php</i> contains <u>the Closing</u>u> &#60;&#47;html&#62; and &#60;&#47;body&#62; <u>Tags</u>, the &#60;footer&#62; Tag and the Closing &#60;&#47;div&#62; Tag for Main-Content.</p>
                </div>
              </div>
            </div>
          </div>
          <!-- ********** -->
          <!-- ********** -->
          
          
          <!-- ******************** -->
          <!-- <html> VARIABLE TAGS -->
          <!-- ******************** -->
          <hr id="varTags" class="my-4">
          <h3 class="text-center font-weight-bold mb-2">Using Variables for &#60;html&#62; Tags</h3>
          <p>Sometimes you want to Modify a particular Template component and PHP allows us to do that without altering its code by using <b>&#60;html&#62; Variable Tags</b>. This technique is useful for repetitive, yet, unique Content.</p>
          <div class="row">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> Using <b>&#60;html&#62; Variable Tags</b> for the <i>&#60;title&#62;</i> of all Pages.</h4>
                  <p>In this example, we are going to write two lines of code that will Instantiate a Variable called <i>$pageTitle</i> that will <u>Display the Name of the Page in the Browser-Tab</u>.</p>
                  <!-- [2] <html> Variable Tags Process -->
                  <dl class="row">
                    <dt class="col-sm-1">1</dt>
                    <dd class="col-sm-11">Instantiate Variable &amp; Echo it through a script in the Template &#60;title&#62; Placeholder.</dd>

                    <dt class="col-sm-1">2</dt>
                    <dd class="col-sm-11">Use the Variable on the page and Specify its unique Value.. <i>*Dont forget to Include the File</i>.</dd>
                  </dl>
                  <h4 class="card-subtitle mb-2 text-muted">
                    inc/header.php
                    <?php echo str_repeat("&nbsp;", 5); ?>
                    &#60;?php &#60;title&#62; &#60;php<code> echo $pageTitle</code>&#62; &#60;&#47;title&#62; ?&#62;
                  </h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    index.php
                    <?php echo str_repeat("&nbsp;", 10); ?>
                    &#60;?php<code>&#36;pageTitle = "Unique Title for that Page";</code>
                    <br><?php echo str_repeat("&nbsp;", 20); ?>
                    <code>include("inc/header.php");</code>?&#62;
                  </h4>
                  <p><i>You MUST Assign the Variable Above the Include-File in order to Re-Use that Code for that page!</i></p>
                </div>
              </div>
            </div>
          </div>
          <!-- ******************** -->
          <!-- ******************** -->
          
          
          <!-- 
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"> <b>Templating</b> for <i>&#60;nav&#62; and &#60;footer&#62; Sections</i></h4>
                  <p>In this example, we are going to set up two Template Files for for both the Navigation and the Footer in three simple steps.</p>
                  <dl class="row">
                    <dt class="col-sm-1 card-title">1</dt>
                    <dd class="col-sm-11"><b>Create an inc/ Folder</b> <u>to store all Templates</u>.</dd>

                    <dt class="col-sm-1">2</dt>
                    <dd class="col-sm-11"><b>Create Files &#40;ie Templates&#41;</b> <u>to Store the Code for the Nav and Footer Sections</u>.</dd>

                    <dt class="col-sm-1 text-truncate">3</dt>
                    <dd class="col-sm-11"><b>Use the built-in Include Statement</b> <u>to Add those Files from the inc/ Folder</u> and <u>Reference those statements where required</u> on each webpage.</dd>
                  </dl>
                  <p>This process looks like this in code:</p>
                  <div class="row">
                    <div class="col-md-6">
                  <h4 class="card-subtitle mb-2 text-muted">
                  &#60;&#63;php
                  <code>function hello() {
                    echo "Hello, World!";
                  }
                  hello();</code>
                  &#63;&#62;
                  </h4>
                  <p>Run this Code in the Console to Reveal </p>
                  <p class="card-text">The <code>function</code> Keyword signals the PHP Interpreter that this script is a <b>Function</b>. The Function-Name <code>hello() {}</code> is then <b><i>Passed to the function</i></b>. The <code>&#40;&#41;</code> take on the <i>Arugments</i> while the <code>&#123;&#125;</code> take on any <i>Statements</i> &#40;there are no Arguments and the Statment is "Hello, World!"&#41;. Finally, you <b><i>Call the Function</i></b> by using the Function-Name at the End of the Script.</p>
                    </div>
                    <div class="col-md-6">
                  <h4 class="card-subtitle mb-2 text-muted">
                  &#60;&#63;php
                  <code>function hello() {
                    echo "Hello, World!";
                  }
                  hello();</code>
                  &#63;&#62;
                  </h4>
                  <p>xxxxxxxxxxxxxx xxxxxxxxxxxxxx xxxxxxxxxxxx</p>
                  <p class="card-text">The <code>function</code> Keyword signals the PHP Interpreter that this script is a <b>Function</b>. The Function-Name <code>hello() {}</code> is then <b><i>Passed to the function</i></b>. The <code>&#40;&#41;</code> take on the <i>Arugments</i> while the <code>&#123;&#125;</code> take on any <i>Statements</i> &#40;there are no Arguments and the Statment is "Hello, World!"&#41;. Finally, you <b><i>Call the Function</i></b> by using the Function-Name at the End of the Script.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          
          <!-- ********* -->
          <!-- RESOURCES -->
          <!-- ********* -->
          <hr class="my-5">
          <ul>
            <li><b>RESOURCES</b></li>
            <li><a id="fade" href="">xx</a> &#47;&#47; 
              <a id="fade" href="">xx</a> &#47;&#47; xx <a id="fade" href="">xx</a></li>
            <li>The <a id="fade" href="">xx</a> blah blah blah <i>blah blah</i></li>
            <li>Category
              <br><a id="fade" href="">Sub-Cat</a>
              <a id="fade" href="">xxx</a> &#47; 
              <a id="fade" href="">xxx</a> &#47; 
              <a id="fade" href="">xxx</a> &#47; 
              <a id="fade" href="">xxx</a> and
              <a id="fade" href="">xxx</a>
              <a id="fade" href=""></a></li>
            <!--<li><a id="fade" href=""></a></li>-->
          </ul>
          <!-- ********* -->
          <!-- ********* -->
          <!-- ************************************ -->
          <!-- ************************************ -->
        </div><!-- \End of MAIN-CONTENT -->
        <!-- ************************************** -->
        <!-- ************************************** -->
      </div><!-- \End of ROW-->
      <!-- **************************************** -->
      <!-- **************************************** -->
    </div><!-- \End of CONTAINER-->
    <!-- ******************************************************* -->
    <!-- ******************************************************* -->
    
    
 
    <!-- ******************************************************* -->
    <!-- ** FOOTER ********************************************* -->
    <div class="container">
      <div class="row no-gutters clearfix">
        <div class="col-6">
          <h6 class="text-left"><small>&#169;<span class="d-none d-sm-inline-block"><?php echo date('Y'); ?></span></small> <span class="d-none d-sm-inline-block"> Made with <i class="fa fa-heart"></i> by </span> Mister Moody.</h6>
        </div>
        <div class="col-6">
          <h6 class="text-right"><?php echo date("D d M "); echo date(" g:i a T"); ?></h6>
        </div>
      </div>
    </div><!-- \End of FOOTER -->
    <!-- ******************************************************* -->
    <!-- ******************************************************* --> 
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