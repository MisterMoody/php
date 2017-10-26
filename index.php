<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PHP Self-Directing Guidebook">
    <meta name="keywords" content="Mister Moody, Web Design, PHP, CSS, HTML">
    <meta name="author" content="Ray Moody">
    <title>PHP 101</title>
    <!-- Gridlex GRID CDN **(REQUIRED)** -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gridlex/2.4.1/gridlex.min.css">
    <!-- Custom MAIN-PAGE CSS Grid & Styles -->   
    <link rel="stylesheet" href="styles.css"> 
    <!-- Font -->       
	  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">    
	  <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Raleway" rel="stylesheet">
  </head>
  
  <body>
    <!-- ********************************************************* -->
    <!-- *************** <NAVIGATION> CONTAINER[S] *************** -->
    <!-- ********************************************************* -->
    <!-- MAIN-NAV -->
    <nav class="grid" id="">
      <div class="col_sm-12_sm-6">
          <ul class="siteNav">
            <li><a class="navLogo">PHP 101</a></li>
            <li><a href="design.html">Basics</a></li>
            <li><a href="develop.html">Advanced</a></li>
            <li><a href="projectmanagement.html">Scripts</a></li>
            <li id="main"  style="background-color: #fff;">
              <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
            </li>
          </ul>
      </div>
      
    </nav>
    <!-- SIDEBAR -->
    <nav id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#intro">Introduction</a>
      <a href="#setup">Getting Started</a>
      <a href="#vc">Version Control</a>
      <a href="#">Resources</a>
    </nav>
    <!-- ********************************************************* -->
    <!-- ********************************************************* -->

    
    <!-- ********************************************************* -->
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
    <!-- INTRODUCTION -->
    <div class="grid">
      <div class="col-12">
        <h2 id="intro">Introduction to PHP</h2>
      </div>
      <!-- -->
      <div class="col-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. Morbi bibendum magna eu.</p>
      </div>
      <div class="col-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. Morbi bibendum magna eu.</p>
      </div>
    </div>
    <!-- -->
    <!-- -->
    <!-- GETTING STARTED -->
    <div class="grid">
      <div class="col-12">
        <h3 id="setup">Getting Started</h3>
      </div>
      <div class="col-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. Morbi bibendum magna eu.</p>
      </div>
      <div class="col-12">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis laoreet nunc. Donec ut ligula eget dolor pellentesque vestibulum vel in elit. Morbi posuere aliquam diam sit amet sagittis. Nulla facilisi. Cras a malesuada leo, id malesuada neque. Phasellus vestibulum venenatis velit non mattis. Nam lobortis velit nec sollicitudin cursus. Nam maximus consectetur iaculis. Pellentesque et ultricies magna.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non finibus nibh, eu rhoncus purus. Ut pulvinar quam nec tristique interdum. In libero purus, volutpat ut lobortis vitae, dapibus sit amet arcu. Morbi bibendum magna eu.</p>
      </div>
    </div>
    <!-- -->
    <!-- -->
    <!-- Version Control -->
    <!--<div class="grid">
      <div class="col-12">
        <h3 id="vc">Version Control</h3>
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
      <div class="col-12"></div>
    </div>-->
    <!-- -->
    <!-- -->

    <!-- *********************************************************************** -->
    <!-- *********************************************************************** -->

    
    
    <!-- JS 4 Sidebar-Navigation -->
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
        document.body.style.backgroundColor = "white";
    }
    </script>
     
  </body>
</html>