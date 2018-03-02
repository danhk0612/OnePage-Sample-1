<!doctype html>
<html class="no-js" lang="ko">

<head>
  <meta charset="utf-8">

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Webdev</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/initialize.css">
  <link rel="stylesheet" href="../css/index.css">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/font-mfizz.css">


  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="http://code.jquery.com/jquery-migrate-1.2.1.js"></script>
</head>

<body id="page-top">

  <nav class="navbar navbar-expand-xl bg-light navbar-light fixed-top">
    <a class="navbar-brand" href="http://webdev.mydepot.kr/html/">
      <h1 class="text-hide" style="background-image: url('../img/logo.jpg'); width:216px; height:28px;">webDev</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto justify-content-end list-group">
        <li class="nav-item">
          <a class="nav-link list-group-item-action" href="#about-outer">
            <i class="fa fa-user" aria-hidden="true"></i>About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link list-group-item-action" href="#skill-outer">
            <i class="fa fa-keyboard" aria-hidden="true"></i>Skill</a>
        </li>
        <li class="nav-item">
          <a class="nav-link list-group-item-action" href="#project-outer">
            <i class="fa fa-check-square" aria-hidden="true"></i>Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link list-group-item-action" href="#resume-outer">
            <i class="fa fa-file" aria-hidden="true"></i>Resume</a>
        </li>
        <li class="nav-item">
          <a class="nav-link list-group-item-action" href="#link-outer">
            <i class="fa fa-bookmark" aria-hidden="true"></i>Link</a>
        </li>

        <div class="commu-menu">
          <li class="nav-item">
            <a class="nav-link list-group-item-action practice" href="http://webdev.mydepot.kr/board/bbs/board.php?bo_table=pm_prac"
              target="_self">
              <i class="fa fas fa-code-branch"></i>Practice(Pm)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link list-group-item-action practice2" href="http://webdev.mydepot.kr/board/bbs/board.php?bo_table=dev_prac"
              target="_self">
              <i class="fa fa-file-code" aria-hidden="true"></i>Practice(Dev)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link list-group-item-action memo" href="http://webdev.mydepot.kr/board/bbs/board.php?bo_table=study" target="_self">
              <i class="fas fa-pencil-alt"></i>Memo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link list-group-item-action community2" href="http://webdev.mydepot.kr/html/disqus.html" target="_self">
              <i class="fa fa-user" aria-hidden="true"></i>Community</a>
          </li>
          <li class="nav-item">
            <a class="nav-link list-group-item-action favorite" href="http://webdev.mydepot.kr/board/bbs/board.php?bo_table=link" target="_self">
              <i class="fa fa-star" aria-hidden="true"></i>Favorite</a>
          </li>
        </div>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            <span class="navbar-toggler-icon"></span>
          </a>
          <div class="dropdown-menu dropdown-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item practice" href="http://webdev.mydepot.kr/board/bbs/board.php?bo_table=pm_prac">
              <i class="fa fas fa-code-branch"></i>Practice(Pm)</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item practice2" href="http://webdev.mydepot.kr/board/bbs/board.php?bo_table=dev_prac">
              <i class="fa fa-file-code" aria-hidden="true"></i>Practice(Dev)</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item memo" href="http://webdev.mydepot.kr/board/bbs/board.php?bo_table=study">
              <i class="fas fa-pencil-alt"></i>Memo</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item community2" href="http://webdev.mydepot.kr/html/disqus.html">
              <i class="fa fa-user" aria-hidden="true"></i>Community</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item favorite" href="http://webdev.mydepot.kr/board/bbs/board.php?bo_table=link">
              <i class="fa fa-star" aria-hidden="true"></i>Favorite</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div id="toTop">
    <span class="hvr-icon-up"></span>
  </div>

  <div class="container-fluid row bg-blue justify-content-center" id="profile-outer">
    <div id="profile" class="col-12 col-md-6">
      <h1>Hello, Visitors!</h1>
      <p>
        .col-xs-6 .col-sm-3 Resize your viewport or check it out on your phone for an example..col-xs-6 .col-sm-3 Resize your viewport
        or check it out on your phone for an example..col-xs-6 .col-sm-3 Resize your viewport or check it out on your phone
        for an example.
      </p>
    </div>
  </div>
  <div class="triangle triangle_right"></div>
  <div class="container-fluid row bg-white justify-content-center" id="about-outer">
    <div id="about" class="col-12 col-md-8 inner-box">
      <h1>About</h1>
      <p>
        .col-xs-6 .col-sm-3 Resize your viewport or check it out on your phone for an example..col-xs-6 .col-sm-3 Resize your viewport
        or check it out on your phone for an example..col-xs-6 .col-sm-3 Resize your viewport or check it out on your phone
        for an example.
      </p>
    </div>
  </div>
  <div class="triangle triangle_left"></div>
  <div class="container-fluid row bg-blue justify-content-center" id="skill-outer">
    <div id="skill" class="col-12 col-md-8 inner-box">
      <h1>Skill</h1>
      <div class="row justify-content-center">
        <div class="col-auto">
          <p class="skill-icon" id="html5">
            <i class="fab fa-html5"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="css3">
            <i class="fab fa-css3-alt" aria-hidden="true"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="javascript">
            <i class="fab fa-js-square" aria-hidden="true"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="php">
            <i class="fab fa-php"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="linux">
            <i class="fab fa-linux"></i>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="office">Office</p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="bootstrap">
            <i class="icon-bootstrap"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="jquery">
            <i class="icon-jquery"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="windows">
            <i class="fab fa-windows"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="apache">
            <i class="icon-apache"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="nginx">
            <i class="icon-nginx"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="git">
            <i class="fab fa-git"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="sass">
            <i class="fab fa-sass"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="vue">
            <i class="fab fa-vuejs"></i>
          </p>
        </div>
      </div>
      <div id="skill-card">
        <div class="card bg-light">
          <div class="card-body" id="skill-desc">
            <h5 class="card-title">각 아이콘을 클릭하시면 상세 설명이 나타납니다.</h5>
            <div class="card-text" id="html5-desc">
              html5
            </div>
            <div class="card-text" id="css3-desc">
              css3
            </div>
            <div class="card-text" id="javascript-desc">
              javascript
            </div>
            <div class="card-text" id="php-desc">
              php
            </div>
            <div class="card-text" id="linux-desc">
              linux
            </div>
            <div class="card-text" id="office-desc">
              office
            </div>
            <div class="card-text" id="bootstrap-desc">
              bootstrap
            </div>
            <div class="card-text" id="jquery-desc">
              jquery
            </div>
            <div class="card-text" id="windows-desc">
              temp1
            </div>
            <div class="card-text" id="apache-desc">
              temp2
            </div>
            <div class="card-text" id="nginx-desc">
              temp3
            </div>
            <div class="card-text" id="git-desc">
              temp4
            </div>
            <div class="card-text" id="sass-desc">
              sass
            </div>
            <div class="card-text" id="vue-desc">
              vue.js
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="triangle triangle_right"></div>
  <div class="container-fluid row bg-white justify-content-center" id="project-outer">
    <div id="project" class="col-12 col-md-8 inner-box">
      <h1>Project</h1>
      <div class="row justify-content-center">
        <div class="col-auto">
          <p class="project-banner" id="project-1">
            커뮤니티형 샘플
          </p>
        </div>
        <div class="col-auto">
          <p class="project-banner" id="project-2">
            회사 소개형 샘플
          </p>
        </div>
        <div class="col-auto">
          <p class="project-banner" id="project-3">
            포트폴리오형
          </p>
        </div>
        <div class="col-auto">
          <p class="project-banner" id="project-4">
            인덱스 페이지
          </p>
        </div>
        <div class="col-auto">
          <p class="project-banner" id="project-5">
            쇼핑몰형 샘플
          </p>
        </div>
      </div>
      <div id="project-card">
        <div class="card bg-light">
          <div class="card-body" id="project-desc">
            <h5 class="card-title">각 배너를 클릭하시면 상세 설명이 나타납니다.</h5>
            <div class="card-text" id="project-1-desc">
              <?php 
              if ($fp = fopen('http://test.mydepot.kr/mark-to-html.php?original=https%3A%2F%2Fdanhk0612.github.io%2FCommunity-Sample-1%2FREADME.md&select=address', 'r')) {
                $content = '';
                while ($line = fgets($fp, 1024)) {
                  echo $line;
                }
              } else {
              } 
              ?>
            </div>
            <div class="card-text" id="project-2-desc">
              <?php 
              if ($fp = fopen('http://test.mydepot.kr/mark-to-html.php?original=https%3A%2F%2Fdanhk0612.github.io%2FCompany-Sample-1%2FREADME.md&select=address', 'r')) {
                $content = '';
                while ($line = fgets($fp, 1024)) {
                  echo $line;
                }
              } else {
              } 
              ?>
            </div>
            <div class="card-text" id="project-3-desc">
              <?php 
              if ($fp = fopen('http://test.mydepot.kr/mark-to-html.php?original=https%3A%2F%2Fdanhk0612.github.io%2FOnePage-Sample-1%2FREADME.md&select=address', 'r')) {
                $content = '';
                while ($line = fgets($fp, 1024)) {
                  echo $line;
                }
              } else {
              } 
              ?>
            </div>
            <div class="card-text" id="project-4-desc">
              <?php 
              if ($fp = fopen('http://test.mydepot.kr/mark-to-html.php?original=https%3A%2F%2Fdanhk0612.github.io%2FREADME.md&select=address', 'r')) {
                $content = '';
                while ($line = fgets($fp, 1024)) {
                  echo $line;
                }
              } else {
              } 
              ?>
            </div>
            <div class="card-text" id="project-5-desc">
              <?php 
              if ($fp = fopen('http://test.mydepot.kr/mark-to-html.php?original=https%3A%2F%2Fdanhk0612.github.io%2FShop-Sample-1%2FREADME.md&select=address', 'r')) {
                $content = '';
                while ($line = fgets($fp, 1024)) {
                  echo $line;
                }
              } else {
              } 
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="triangle triangle_left"></div>
  <div class="container-fluid row bg-blue justify-content-center" id="resume-outer">
    <div id="resume" class="col-12 col-md-8 inner-box">
      <h1>Resume</h1>
      <div class="dropdown show" id="resume-drop">
        <button type="button" class="btn btn-light btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Resume
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <h6 class="dropdown-header">Download</h6>
          <a class="dropdown-item" href="#">docx file</a>
          <a class="dropdown-item" href="#">hwp file</a>
          <a class="dropdown-item" href="#">pdf file</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">View</h6>
          <a class="dropdown-item" href="#">LinkdIn</a>
          <a class="dropdown-item" href="#">사람인</a>
        </div>
      </div>
    </div>
  </div>
  <div class="triangle triangle_right"></div>
  <div class="container-fluid row bg-white justify-content-center" id="link-outer">
    <div id="link" class="col-12 col-md-8 inner-box">
      <h1>Link</h1>
      <div class="row justify-content-center">
        <div class="col-auto">
          <p class="link-icon">
            <i class="fa fa-html5" aria-hidden="true"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="link-icon">
            <i class="fab fa-css3-alt" aria-hidden="true"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="link-icon">
            <i class="fab fa-js-square" aria-hidden="true"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="link-icon">PHP</p>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
  <div id="bottom-bar" class="container-fluid row">
    <div id="copyright" class="col-12 col-md-4">©
      <a href="http://webdev.mydepot.kr/" target="_self">webDev</a>, All rights reserved.</div>
    <div class="col-0 col-md-6"></div>
    <div id="mailadress" class="col-12 col-md-2">danhk0612@gmail.com</div>
  </div>



  <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
  <script src="../js/plugins.js"></script>
  <script src="../js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</body>

</html>