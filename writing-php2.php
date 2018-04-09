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
              <a class="dropdown-item" href="forms.php">Forms</a>
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
            <li id=""><a id="fade" href="#getVar">Same-Page &#60;nav&#62;</a></li>
            <li id=""><a id="fade" href="#activeState">Active-State</a></li>
            <li id=""><a id="fade" href="#storeData">Storing Catalog Data</a></li>
            <li id=""><a id="fade" href="#"></a></li>
            <li id=""><a id="fade" href="#"></a></li>
            <li id=""><a id="fade" href="#"></a></li>
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
          <hr id="templating"  class="my-5 pt-3">
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
                    <dd class="col-sm-11"><b>Create an inc/ Folder</b> <u>to store all Templates</u></dd>

                    <dt class="col-sm-1">2</dt>
                    <dd class="col-sm-11"><b>Create Files &#40;ie Templates&#41;</b> <u>to Store the Code for the Nav and Footer Sections</u></dd>

                    <dt class="col-sm-1 text-truncate">3</dt>
                    <dd class="col-sm-11"><b>Use the built-in Include Statement</b> <u>to Add those Files from the inc/ Folder</u> and <u>Reference those statements where required</u> on each webpage</dd>
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
          <hr id="varTags" class="my-5 pt-3">
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
                    <dd class="col-sm-11"><b>Instantiate Variable &amp; Echo it</b> through a script in the Template &#60;title&#62; Placeholder.</dd>

                    <dt class="col-sm-1">2</dt>
                    <dd class="col-sm-11">Use the Variable on the page and <b>Specify its unique Value</b>. <i>*Dont forget to Include the File</i>.</dd>
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
          
          
          <!-- *************** -->
          <!-- SAME-PAGE <NAV> -->
          <!-- *************** -->
          <hr id="getVar" class="my-5 pt-3">
          <h3 class="text-center font-weight-bold mb-2">
          Linking to Different Sections within the Same Page
          </h3>
          <p>PHP offers a <b>Server Variable</b> called <b>$_GET[""]</b>, which enables Users to <u>Receive Data</u>. As we continue, we will use such superpowers to <u>setup an in-page Navigation system</u> that will allow users to look at different types of content. This Variable will <i>Return Specified Variable Values</i> and is especially useful when creating an in-page &#60;nav&#62; system. Lets explore!</p>
          <div class="row">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Same-Page Navigation using the <b>$_GET[]</b> Variable </h4>
                  <p></p>
                  <div class="row">
                    <div class="col-12">
                      <dl class="row">
                        <dt class="col-sm-1 card-title">1</dt>
                        <dd class="col-sm-11">Instantiate a Default $pageTitle (after Storing it in the Template)</dd>

                        <dt class="col-sm-1">2</dt>
                        <dd class="col-sm-11">Create a Conditional that Checks the Value of all Category-Links using the $_GET Variable.
                        <br>Add the $pageTitle to the &#60;html&#63; Tag.</dd>

                        <dt class="col-sm-1">3</dt>
                        <dd class="col-sm-11">Add a Query-String to the &#60;nav&#62; in the inc/header.php File</dd>

                        <dt class="col-sm-1">4</dt>
                        <dd class="col-sm-11">Check Conditional Before Execution using the isset() Function</dd>
                      </dl>
                    </div>
                    <div class="col-12">
                      <p>Steps <b>1</b>, <b>2</b> and <b>4</b> would look like this:</p>
                      <h4 class="card-subtitle mb-2 text-muted">&#60;&#63;php
                      <code>$pageTitle = "Catalog"</code>
                      <br>if <code>(isset($_GET[""])) {</code>
                      <br><code>if ($_GET["cat"] == "books") </code>{$pageTitle = "Books";}
                      <br>else <code>if ($_GET["cat"] == "movies") </code>{ $pageTitle = "Movies";}
                      <br>else <code>if ($_GET["cat"] == "music") </code>{ $pageTitle = "Music";} <code>}</code>
                      <br>include("inc.header.php"); &#63;&#62;
                      <br>&#60;div class="section page"&#62;
                      <br>&#60;h1&#62;<code>$pageTitle</code> &#60;/h1&#62;
                      </h4>
                      <p><b>catalog.php</b><?php echo str_repeat("&nbsp;", 5); ?>The <code>$pageTitle</code> Variable is instantiated for the Page Title. Its Value is <i>"Full Catalog"</i>, and would be used in the case that a Value does not exist for that Section. The <code>if($_GET[]){}</code> Conditional determines how the Browser will react to User input. This Conditional is placed inside a <code>if(isset()){}</code> Variable to <u>Test the Execution of the script itself</u>. The <code>$pageTitle</code> Variable is then appropriately placed, allowing Users to switch between book, movie and music <code>"Cat"</code> content.</p>
                    </div>
                    <div class="col-12">
                      <p>Steps <b>3</b> would look like this:</p>
                      <h4 class="card-subtitle mb-2 text-muted">
                      &#60;li class="books"&#62;&#60;a href="catalog.php<code>?cat=books</code>"&#62;
                      </h4>
                      <p><b>header.php</b><?php echo str_repeat("&nbsp;", 5); ?> The <u>Query String</u> is applied to all Links for that Page. <code>?cat</code> represents the <u>Catalog Variable</u>, while <code>=books</code> represents the <u>Specified Category Value</u>.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- *************** -->
          <!-- *************** -->
          
          
          <!-- ********************** -->
          <!-- CSS Active-State <NAV> -->
          <!-- ********************** -->
          <hr id="activeState" class="my-5 pt-3">
          <h3 class="text-center font-weight-bold mb-2">
          Adding an Active-State Styles to &#60;a&#62; Links
          </h3>
          <p>At this juncture, we simply want Navigational Links to Highlight the Current Section of the <b>catalog.php</b> Page. This simple objective will implement Scroll-Spy powers and is performed with a little help from CSS.</p>
          <div class="row">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b>Active-State</b> CSS Styles </h4>
                  <p></p>
                  <div class="row">
                    <div class="col-12">
                      <dl class="row">
                        <dt class="col-sm-1 card-title">1</dt>
                        <dd class="col-sm-11">Create a CSS Class for Styles</dd>

                        <dt class="col-sm-1">2</dt>
                        <dd class="col-sm-11">Instantiate a Variable to <u>Highlight Links</u> and Add the Variable to the Conditional-Block</dd>

                        <dt class="col-sm-1">3</dt>
                        <dd class="col-sm-11">Assign the CSS Class to the &#60;a&#62; Links</dd>

                      </dl>
                    </div>
                    <div class="col-12">
                      <p><b>Step 1</b> is performed in the <b>styles.css</b> File and simply involves adding a <u>Text-Decoration with a Value of 'Underline'</u>, like so:</p>
                      <h4 class="card-subtitle mb-2 text-muted">
                      .header > .nav > li<code>.on {</code>text-decoration: underline;<code>}</code>
                      </h4>
                      <!-- -->  
                      <p><b>Step 2</b> is a Two-Part process. The <u>1st part</u> is performed in the <b>index.php</b> and <b>catalog.php</b> Files. These pages represent the main-page and content-page, respectively, and must be included in both pages with a value of <i>'null'</i>, which is a <u>Default Parameter</u>, meaning that initially no page will be underlined. The <u>2nd part</u> is performed only in the <b>catalog.php</b> File where the Variable is <u>Assigned a Value for All Links</u>. Simply add the Variable beneath the <u>$pageTitle</u> Variable.</p>
                      <h4 class="card-subtitle mb-2 text-muted">
                      $pageTitle = "Catalog" 
                      <br><code>$section = null;</code><small>(Part 1)</small>
                      <br>if (isset($_GET[""])) { if ($_GET["cat"] == "books")  {
                      <br>$pageTitle = "Books";
                      <br><code>$section = "books";</code><small>(Part 2)</small>
                      </h4>
                      <!-- -->
                      <p><b>Step 3</b> is performed in the <b>header.php</b> File. Here, we want to <u>Add the $section Variable to all &#60;li&#62; Tags in a Conditional Statement</u> and then <u>Reference the CSS Class</u>. The Conditional states that <i>IF</i> the <u>$section Variable is Equal to '#', Display the Text-Decoration</u>. The Reference then <u>Echos</u> the Variable Value. Here is an example:</p>
                      <h4 class="card-subtitle mb-2 text-muted">
                      &#60;li class="books <u>&#60;&#63;php if</u> <code>(section == "books")</code> {<code>echo "on";</code>} <u>&#63;&#62;"</u>&#62;
                      </h4>
                      <p></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ********************** -->
          <!-- ********************** -->
          
          
          <!-- ******************** -->
          <!-- Storing Catalog Data -->
          <!-- ******************** -->
          <hr id="storeData" class="my-5 pt-3">          
          <h3 class="text-center font-weight-bold mb-2">Storing Catalog Content</h3>
          <p>This project is a <b>Catalog</b> of <u>Content that describes Books, Movies and Music</u>. This exercise utilizes a Single <i>Array</i> to Store the Content Data for the aforementioned Elements. Let's explore!</p>
          
          <div class="row">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Use an Array to <b>Store Catalog Content-Data</b></h4>
                  <p></p>
                  <div class="row">
                    <div class="col-12">
                      <dl class="row">
                        <dt class="col-sm-1 card-title">1</dt>
                        <dd class="col-sm-11">Instantiate an Array for the Catalog<br>Add Array Items</dd>
                        
                        <dt class="col-sm-1">2</dt>
                        <dd class="col-sm-11">Create a CSS Class for the Catalog Variable and Add to the Section &#60;div&#62;</dd>

                        <dt class="col-sm-1">3</dt>
                        <dd class="col-sm-11">Create a Wrapper &#60;div&#62; to...</dd>
                         
                        <dt class="col-sm-1">4</dt>
                        <dd class="col-sm-11">Create a foreach() Loop for the Catalog Variable &#60;nav&#62; Link Items
                        <br>Assign each Item to the Item Variable and Display</dd>
                      </dl>
                    </div>
                    <div class="col-12">
                      <h4 class="card-subtitle mb-2 text-muted">
                      <code>$catalog = [];</code>
                      <br><code>$catalog[101] = "</code>Design Patterns<code>";</code>
                      <br><code>$catalog[201] = "</code>Forrest Gump<code>";</code>
                      <br><code>$catalog[301] = "</code>Beethoven<code>";</code>
                      <br><code>$catalog[102] = "</code>Clean Code<code>";</code>
                      <br>&#60;div class="section<code>catalog</code>page"&#62;
                      <br><?php echo str_repeat("&nbsp;", 2); ?> &#60;div class="<code>wrapper</code>"&#62;
                      <br><?php echo str_repeat("&nbsp;", 4); ?> 
                        &#60;h1&#62; &#60;&#63;php echo $pageTitle; &#63;&#62;
                      <br><?php echo str_repeat("&nbsp;", 4); ?> &#60;ul&#62;
                      <br><?php echo str_repeat("&nbsp;", 6); ?>  
                        &#60;&#63;php <code>foreach(</code>$catalog as $item<code>)</code> 
                        <code>{echo</code>"&#60;li&#62;$item&#60;/li&#62;";<code>}</code> 
                      <br><?php echo str_repeat("&nbsp;", 4); ?> &#60;/ul&#62;
                      <br>.........
                      </h4>
                      <p>I'm sure that you remember creating an Array from an earlier lesson, I will provide a refresher here. 
                      <br>In the <b>catalog.php</b> File we, <b>Instantiated an Empty Array</b> <code>$catalog = array();</code> so that <u>All Elements can be Added Individualy</u>. Because our Array Values belong to Different Categories, we want to <u>Specigy our own Index-Keys</u> rather than use PHPs Default settings. We can accomplish this goal by using 100-Blocks for each Category and as is apparent our Index-Key Blocks will be divided into <code>100</code>, <code>200</code> and <code>300</code> Blocks, allowing easy Reference later. And we <u>Increment</u> whenever we Add a New Element.
                      <br>The <code>foreach(){}</code> Loop Stores the <code>$catalog</code> Elements, where each Element is Assigned to the <code>$item</code> Variable. It will then Display the <code>$item</code> with the <code>echo</code> Statement.</p>
                      <p><b>*!IMPORTANT:</b> Where there is only 1 &#60;ul&#62; Nav setup, <u>Add the foreach() Conditional <b>Inside the &#60;ul&#62;</b></u>. However, if there are Multiple &#60;ul&#62; Tags, then <u>the Conditional should be placed <b>Outside of the &#60;ul&#62;</b></u>.
                        <br><code>"&#60;li&#62; . $item . &#60;/li&#62;";</code></p>
                      <!-- --> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Use an Assoc-Array to <b>Store Attributive-Content for Catalog Items</b></h4>
                  <p>This practice extends the example above to include <u>Details for each Item in the Catalog</u>. <br>Using an <b>Associative Array</b> allows us to <u>Use Different Keys to Specify our Search</u>.</p>
                  <div class="row">
                    <div class="col-12">
                      <dl class="row">
                        <dt class="col-sm-1 card-title">1</dt>
                        <dd class="col-sm-11">Instantiate an Associative Array for the Catalog <b>&amp;</b> Specify Index-Key</dd>
                        
                        <dt class="col-sm-1">2</dt>
                        <dd class="col-sm-11">Display a Single Value in &#60;html&#62;
                        &amp; Display a Multiple-Values in &#60;html&#62;</dd>
                      </dl>
                    </div>
                    <div class="col-12">
                      <h4 class="card-subtitle mb-2 text-muted">
                      <code>$catalog = [];</code>
                      <br><code>$catalog[101] = [</code>
                      <br><?php echo str_repeat("&nbsp;", 2); ?> <code>"title" => </code>"Design Patterns",
                      <?php echo str_repeat("&nbsp;", 2); ?> <code>"img" => </code>"img/filePath.jpg",
                      <br><?php echo str_repeat("&nbsp;", 2); ?> <code>"genre" => </code>"Tech", 
                      <?php echo str_repeat("&nbsp;", 2); ?> <code>"year" = </code>"1994",
                      <?php echo str_repeat("&nbsp;", 2); ?> <code>"category" =" </code>"Books",
                      <br><?php echo str_repeat("&nbsp;", 2); ?> <code>"authors" => </code>[
                      <code>"Ray", "James"</code>]
                      <br>]
                      <br>.........
                      </h4>
                      <p>As you see, each Array Item has multiple Attributes of which we can  create a wide search that will return all Items based on that particular Index-Key. Furthermore, you realize that the <code>"authors =></code> Key is an Associative Array with a few values to recognize the writers who assisted with producing that particular book. And with all of these Keys we can <u>Display All Items</u> by modifying the &#60;html&#62; in the <b>catalog.php</b> File.</p>
                      <h3 class="card-subtitle mb-2 text-muted">
                        <small>foreach($catalog as $item)</small><b>{</b>
                        <br><?php echo str_repeat("&nbsp;", 2); ?> <small>echo</small><code>"&#60;li&#62;&#60;a href='#'>&#60;img src='" 
                        <br><?php echo str_repeat("&nbsp;", 4); ?>. $item["img] . "' alt='"
                        <br><?php echo str_repeat("&nbsp;", 4); ?>. $item["title] . "' /&#62; 
                        <br><?php echo str_repeat("&nbsp;", 4); ?>. "&#60;p&#62;View Details&#60;/p&#62;"
                        <br><?php echo str_repeat("&nbsp;", 4); ?>. "&#60;/a&#62;&#60;/li&#62;";</code>
                        <b>}</b>
                      </h3>
                      <h5 class="card-subtitle mb-2">
                        <b>*Bonus*</b> Display Specified Values with <code>echo $category["key"];</code>
                      </h5>
                      <p>Take a moment to look back at <u>Using &#60;html&#62; Variable Tags</u>. In this example, we want to request a list of movie "title"s and would do so like this: <code>echo $movie["title"];</code></p>
                      <!-- --> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ******************** -->
          <!-- ******************** -->
          
          
          <!-- ********* -->
          <!-- RESOURCES -->
          <!-- ********* -->
          <hr class="my-5 pt-3">
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