<?php
/* dateTime VAR*/
$date = date_default_timezone_set('EST');

?>
<!-- ************************************************************* -->
<!-- ************************************************************* -->
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
        <!-- ********* <FIXED-SIDEBAR> ************ -->
        <nav id="sideNav" class="col-lg-3">
          <h4>Dev Environ</h4>
          <ul>
            <li id=""><a id="fade" href="#">Intro</a></li>
            <li id=""><a id="fade" href="#">IDE</a></li>
            <li id=""><a id="fade" href="#">Local Host-Server</a></li>
            <li id=""><a id="fade" href="#">VCS</a></li>
            <li id=""><a id="fade" href="#">Deployment</a></li>
            <li id=""><a id="fade" href="#">Package Manager</a></li>
          </ul>
        </nav>
        <!-- \End of SIDEBAR -->
        <!-- ************************************** -->
        <!-- ************************************** -->
        <!-- -->
        <!-- -->
        <!-- -->
        <!-- -->
        <!-- ************************************** -->
        <!-- ********** <MAIN-CONTENT> ************ -->
        <div id="content" class="col-lg-9">
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- *********** <SECTION 1> ************ -->
          <!-- ********** <INTRODUCTION> ********** -->
          <h1 class="text-center"><b>Setting Up a Dev Environment</b></h1>
          <p>This is a reference guide created as a means to provide useful information and save time when <u>Setting Up a Local Developer Environment</u>.</p>
          <div class="row">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pertinent <b>Project Tools</b> for Setting Up a Dev Environ</h4>
                  <ol>
                    <li>an <u>IDE</u> text-editor to write html, css, javascript or php for your project</li>
                    <li>a <u>Local Host-Server</u> to work on a project offline, but in real-time</li>
                    <li>a <u>VCS</u> repository to store and deploy your code</li>
                    <li>an <u>SFTP Client</u> to upload project files for deployment to the internet</li>
                  </ol>
                  
                  <p class="alert alert-dark card-text"></p>
                  <!-- -->
                  <!-- -->
                </div>
              </div>
            </div>
          </div>
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- *********** <SECTION 2> ************ -->
          <!-- ************** <IDE> *************** -->
          <h2><b><span class="text-muted">&#91; 1 &#93;</span> 
            Integrated Development Environment</b></h2> 
          <div class="row mb-5">
            <div class="col-12">
              <h3 class="alert alert-danger card-text"><u>*Add Tips for Using '<b>Brackets IDE</b>'*</u></h3>
            </div>
          </div>
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- *********** <SECTION 3> ************ -->
          <!-- ********** <LOCAL HOST-SERVER> ********** -->
          <h2><b><span class="text-muted">&#91; 2 &#93;</span> 
            Local Host-Server</b></h2> 
          <div class="row mb-5">
            <div class="col-12">
              <h3 class="alert alert-danger card-text"><u>*Add Tips for Using '<b>XAMPP Local Host-Server</b>'*</u></h3>
            </div>
          </div>
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- *********** <SECTION 4> ************ -->
          <!-- ***** <VERSION CONTROL SYSTEM> ***** -->
          <h2><b><span class="text-muted">&#91; 3 &#93;</span> 
            Version Control System</b></h2> 
          <div class="row mb-5">
            <div class="col-12">
              <h3 class="alert alert-warning card-text"><u>*Add Tips for Using '<b>Github</b>'*</u></h3>
            </div>
            <div class="col-12">
            <p><span><a href="https://github.com">Github</a></span> to maintain project code is a reliable version control system that I use to maintain project code, but it can also be used as an <i>SFTP Client</i>, enabling developers to load their project files synchronously. Here, I only cover installation and setup.</p>

            <h4>Git Account Configuration &amp; Customization</h4>
            <p><span><a href="https://git-scm.com/book/en/v2/Getting-Started-First-Time-Git-Setup">Setup</a></span> and <span><a href="https://git-scm.com/book/en/v2/Customizing-Git-Git-Configuration">Customize</a></span> a Git account by following some simple instructions.</p>

            <h4>Utilizing a Repositiory</h4>
            <p>After setting up and configuring your account, you can now begin storing code. The list below gives details as to the entire process of creating, adding, commiting and pushing code from your IDE to your repo. </p>
            <ol>
              <li>Create the Repo</li>
              <p class="notes">From your account, Click <span class="highlight">New repository</span>.  Give the repo a name and brief description of the project objective. You want to <i>Initialize the Repo with a README</i> only if you are building a code from scratch, which is exactly what should be done here.</p>

              <li>Clone Repo to Computer</li>
              <p class="notes">Cloning the repo is a multi-step process. First, from the repo click the 'Clone or Download' button. Next, <span class="highlight">Copy</span> the <span class="highlight">https://github.com/User/project.git</span> link.</p>
              <p class="notes">Now, open the <span class="highlight">Control Panel</span> and access the <span class="highlight">C:\xampp\htodcs folder</span>. [Use the 'cd.. / cd ' commands to move down and up within the C:\ directory, respectively.]</p>
              <p class="notes">Type <span class="highlight">git clone</span> then paste the repo link in the format provided above.</p>

              <p class="notes"><!--From here,you want to type the following: <span class="highlight">echo "#repoName" >> README.md</span> and press enter.-->  Then, move up the directory into the project folder type <span class="highlight">git init</span> to <i>initialize the repo</i>.  Once you have done this, you are ready to start building your project.</p>

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
          </div>
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- *********** <SECTION 4> ************ -->
          <!-- *********** <DEPLOYMENT> *********** -->
          <h2><b><span class="text-muted">&#91; 4 &#93;</span> 
            Deployment</b></h2> 
          <div class="row mb-5">
            <div class="col-12">
              <h3 class="alert alert-warning card-text"><u>*Add Tips for Using '<b>Filezilla</b>'*</u></h3>
            </div>
            <div class="col-12">
              <ol>
                <li>Create a Simple Hosting Instance</li>        
                  <ol type="a">
                    <li class="notes">Acquire Domain Name &amp; Host Service.</li>
                    <li class="notes">If necessary, update DNS Records &amp; Validate Ownership!</li>
                  </ol>
                  <p></p>

                <li>Acquire SSH Auth-Key for SFTP &amp; Git</li>        
                  <ol type="a">
                    <li class="notes">Read Gandi SSH Key Installation</li>
                    <li class="notes">Download Putty to Generate Keys. To generate a SSH key-pair <br>&#40;1&#41; enter <code>SSH-2</code> for the <i>Protocol</i>; 
                    <br>&#40;2&#41; enter <code>RSA</code> for <i>Key Type</i>; and 
                    <br>&#40;3&#41; enter <code>2048</code> for <i>Key Length</i>. After this, <i>Upload</i> the public key file to the instance management page.  
                    <br><code>Create a new Key &#62;&#62;&#62; Add the Public Key &#62;&#62;&#62; Save to keyring &#62;&#62;&#62; Add SSH Key &#40;to Save&#41; &#62;&#62;&#62; Wait, then Log into Instance using SSH Key.</code></li>
                  </ol>
                  <p></p>

                <li>Configure and Connect with SFTP Client</li>        
                  <ol type="a">
                    <li class="notes">Upload Web Files via SFTP	https://wiki.filezilla-project.org/Documentation</li>
                    <li class="notes">Prepare SSH Key</li>
                  </ol>
                  <p></p>

                <li>Upload Web Files</li>        
                  <ol type="a">
                    <li class="notes">Access files from ‘htdocs’ folder for projectFolder.com</li>
                    <li class="notes">Prepare SSH Key</li>
                  </ol>
                  <p></p>
                <p>Resources 
                  <sup><a href="https://filezilla-project.org" title="Filezilla">FileZilla</a></sup>
                  <sup><a href="https://wiki.filezilla-project.org/Using" title="Filezilla">2</a></sup>
                  <sup><a href="https://doc.gandi.net/en/simple/php" title="Gandi PHP">3</a></sup>
                  <sup><a href="https://wiki.gandi.net/en/simple/git" title="Gandi Git">4</a></sup>
                  <sup><a href="https://doc.gandi.net/en/simple/git" title="Gandi Git">5</a></sup>
                  <sup><a href="https://doc.gandi.net/en/simple/ssh_key" title="SSH Key">SSH Key</a>
                  </sup>
                  <sup><a href="https://www.chiark.greenend.org.uk/~sgtatham/putty/" title="Puddy SSH Key Generator">Putty SSH-Key Generator</a>
                  </sup>
                </p>
                <p>Also Possible to use <a href="https://pages.github.com/">Github</a><a href="https://github.com/blog/2289-publishing-with-github-pages-now-as-easy-as-1-2-3"> Pages</a> to <a href="http://gnadi-cookbook.readthedocs.io/en/latest/paas/auto-git-deployment.html">Deploy a Static Site</a> <a href="http://markmiyashita.com/blog/how-to-deploy-a-static-site-using-github-pages/" title="Deploy a Static Site">1</a>
                 <a href="https://help.github.com/articles/configuring-a-publishing-source-for-github-pages/" title="Configure Publishing Source">2</a>
                 <a href="https://github.com/blog/2228-simpler-github-pages-publishing" title="Publish on Git">3</a>.</p>
              </ol>
            </div>
          </div>
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- *********** <SECTION 5> ************ -->
          <!-- ***** <Using a Package Manager> **** -->
          <h2><b><span class="text-muted">&#91; 5 &#93;</span> 
            Using a Package Manager</b></h2> 
          <div class="row mb-5">
            <div class="col-12 mb-2">
              <p>Open-Source code is readliy available for developers to use in an effort to expedite the pace of the project. This kind of code is known as <u>Vendor Packages</u> and are referred to as <u>Dependencies</u> because if you use them your project becomes dependent on them. In order to actually use them, you must install a <u>Package Manager</u>.  In PHP, <u>Composer</u> is the preferred package manager while <u>Packagist.org</u> is the official <u>Vendor Repository</u> for Composer. Other libraries include thePhpLeagure and Symfony.</p>
            </div>
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><b>Install</b> a Package Manager</h4>
                  <p>Vist the getComposer.org and Download the Composer PM.</p>
                  <!-- -->
                  <!-- -->
                  <hr>
                  <h4 class="card-title"><b>Install</b> a Package from a Repo</h4>
                  <p>Installing a Package is quite simple, but always read the individual Documentation for any deviations from what is stated here. The <code>require</code> Keyword calls the package from its repository and the <code>update</code> Keyword will return the latest version.</p>
                  <dl class="row">
                    <dt class="col-sm-4">Install the Package</dt>
                    <dd class="col-sm-8 card-subtitle text-muted">composer<code>install</code> package/name</dd>
                    <dt class="col-sm-4">Require the Package </dt>
                    <dd class="col-sm-8 card-subtitle text-muted">composer <code>require</code> package/name</dd>
                    <!-- -->
                    <dt class="col-sm-4">Update the Package</dt>
                    <dd class="col-sm-8 card-subtitle text-muted">composer<code>update</code> package/name</dd>
                  </dl>
                  
                  <p>*Global install to make Composer accessible for all projects.
                  <br>*NEVER <code>git commit</code> the <i>composer.json</i> file, though it is ok to commit the <i>composer.lock</i> file.
                  <br>*Use composer <code>update</code> to update all dependcies.</p>
                  <!-- -->
                  <!-- -->
                  <hr>
                  <h4 class="card-title"><b>Call</b> the Package in PHP</h4>
                  <dl class="row">
                    <dt class="col-sm-12"><b>Add</b> Script</dt>
                    <dd class="col-sm-12 card-subtitle text-muted mb-1">
                      &#60;script src&#61;&#34;<code>vendor/Package/Package/Package.js</code>&#34;&#62;&#60;/script&#62;</dd>
                    <!-- -->
                    <dt class="col-sm-4"><b>Replace HTML Element</b></dt>
                    <dd class="col-sm-8 card-subtitle text-muted mb-1">&#60;script&#62;<code>Package.</code>::replace name="" Value&#60;/script&#62;</dd>
                    <!-- -->
                    <dt class="col-sm-4"><b>Load</b> Class</dt>
                    <dd class="col-sm-8 card-subtitle text-muted">&#60;?php <code>require ___DIR___ . '/vendor/autoload.php'</code>&#62;</dd>
                  </dl>
                  <p>*The <code>composer.json</code> File contains All Installed Packages. Once loaded into project you can add, remove or change the package directly.
                  <br>*The <code>composer.lock</code> File contains All Installed Dependencies.<br>*Packages are Loaded at a Specific Location on a Page where its Class is Referenced.
                  <br>*Refresh the Host-Server.</p>
                  <!-- -->
                  <!-- -->
                  <hr>
                  <h4 class="card-title"><b>Show</b> Packages <code>&amp;</code> Dependencies</h4>
                  <dl class="row">
                    <dd class="col-6 card-subtitle mb-2 text-muted">composer <code>show</code></dd>
                    <dd class="col-6 card-subtitle mb-2 text-muted">vim <code> composer.lock</code></dd>
                  </dl>
                  <!-- -->
                  <!-- -->
                </div>
              </div>
            </div>
          </div>
          
          <!-- ************************************ -->
          <!-- ************************************ -->
          <!-- ************************************ -->
          <!-- ************************************ -->
          <div class="row mb-5">
            <div class="col-12 mb-2">
              <div class="card">
                <div class="card-body">
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
                  <!-- -->
                  <hr>
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
                  <!-- -->
                  <!-- -->
                </div>
              </div>
            </div>
            <div class="col-6 mb-2">
              <div class="card">
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
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Passing by <b>Reference</b></h4>
                  <h4 class="card-subtitle mb-2 text-muted">
                    <code>&#60;&#63;php ... &#63;&#62;</code>
                  </h4>
                  <p>The Arguments Value, IF Modified by the Function-Scope, IS affected on the Ouside-of-Function-Scope.</p>
                </div>
              </div>
            </div>
            <div class="col-12">
              <!-- RESOURCES -->
              <ul>
            <li><b>RESOURCES</b></li>
            <li><a id="fade" href=""></a> &#47;&#47; <a id="fade" href=""></a></li>
            <li>The <a id="fade" href="php.net/manual/en/function.date.php">date ()</a> Function is used to <i>Format Local Time and Dates</i></li>
            <li>Control Structures
              <br><a id="fade" href="http://php.net/manual/en/language.operators.php">Operators</a>
              [<a id="fade" href="http://php.net/manual/en/language.operators.assignment.php">Assign</a>  &#47;
              <a id="fade" href="http://php.net/manual/en/language.operators.logical.php">Logical</a> 
              <sup><a id="fade" href="https://www.w3resource.com/php/operators/logical-operators.php">1</a></sup>]</li>
            <!--<li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>
            <li><a id="fade" href=""></a></li>-->
          </ul>
            </div>
          </div>
          <!-- -->
          <!-- -->
          <!-- -->
          <!-- -->
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
    <!-- -->
    <!-- -->
    <!-- ************************************ -->
    <!-- ************* FOOTER *************** -->
    <!-- ************************************ -->
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
    <!-- ************************************ -->
    <!-- ************************************ -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- -->
    <!-- **JAVASCRIPT ********************************************************** -->
    <!-- *********************************************************************** -->
    <!-- ** jQuery, Popper & BOOTSTRAP *CDN* Compiled and Minified JavaScript ************ -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- ********************************************************************************* -->
    
  </body>
</html>