<!doctype html>
<html class="no-js" lang="ko">

<head>
  <meta charset="utf-8">

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Webdev</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" href="../css/normalize.css">
  <link rel="stylesheet" href="../css/initialize.css">
  <link rel="stylesheet" href="../css/index.css">
  <link href="../css/fontawesome-all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-mfizz/2.4.1/font-mfizz.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poor+Story|Sunflower:300,700" rel="stylesheet">


  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-migrate-1.2.1.js"></script>

</head>
<div id="loading">
  <img id="loading-image" src="../img/loading.gif" alt="Loading..." />
</div>

<body id="page-top">
  <nav class="navbar navbar-expand-xl bg-dark navbar-dark fixed-top">
    <a id="logo" class="navbar-brand" href="#">
      <h1 class="text-hide" style="background-image: url('../img/logo_white.png'); width:216px; height:28px;">webDev</h1>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto justify-content-end list-group">
        <li class="nav-item" data-target="#about-outer">
          <a class="nav-link list-group-item-action sunFlowerBold mainCategory" href="#about-outer">
            <i class="fa fa-user" aria-hidden="true"></i>About</a>
        <li class="nav-item" data-target="#skill-outer">
          <a class="nav-link list-group-item-action sunFlowerBold mainCategory" href="#skill-outer">
            <i class="fa fa-keyboard" aria-hidden="true"></i>Skill</a>
        </li>
        <li class="nav-item" data-target="#project-outer">
          <a class="nav-link list-group-item-action sunFlowerBold mainCategory" href="#project-outer">
            <i class="fa fa-check-square" aria-hidden="true"></i>Projects</a>
        </li>
        <li class="nav-item" data-target="#resume-outer">
          <a class="nav-link list-group-item-action sunFlowerBold mainCategory" href="#resume-outer">
            <i class="fa fa-file" aria-hidden="true"></i>Resume</a>
        </li>
        <li class="nav-item" data-target="#link-outer">
          <a class="nav-link list-group-item-action sunFlowerBold mainCategory" href="#link-outer">
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
            <a class="nav-link list-group-item-action favorite" href="http://webdev.mydepot.kr/board/bbs/board.php?bo_table=link" target="_self">
              <i class="fa fa-star" aria-hidden="true"></i>Favorite</a>
          </li>
        </div>

        <li id="subMenu" class="nav-item dropdown">
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
      <h1 class="sunFlowerBold">WebDev에 오신것을 환영합니다.</h1>
      <p>
      <?php
if ($fp = fopen('./txt/introduce.txt', 'r')) {
    $content = '';
    while ($line = fgets($fp, 1024)) {
        echo $line;
    }
} else {
}
?>
      </p>
    </div>
  </div>
  <div class="triangle triangle_right"></div>
  <div class="container-fluid row bg-white justify-content-center" id="about-outer">
    <div id="about" class="col-12 col-md-8 inner-box">
      <h1 class="sunFlowerBold">About</h1>
      <p>
      <?php
if ($fp = fopen('./txt/about.txt', 'r')) {
    $content = '';
    while ($line = fgets($fp, 1024)) {
        echo $line;
    }
} else {
}
?>
      </p>
    </div>
  </div>
  <div class="triangle triangle_left"></div>
  <div class="container-fluid row bg-blue justify-content-center" id="skill-outer">
    <div id="skill" class="col-12 col-md-8 inner-box">
      <h1 class="sunFlowerBold">Skill</h1>
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
          <p class="skill-icon" id="bootstrap">
            <i class="icon-bootstrap"></i>
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="materialize">
            Material
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="foundation">
            F
          </p>
        </div>
        <div class="col-auto">
          <p class="skill-icon" id="jquery">
            <i class="icon-jquery"></i>
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
          <p class="skill-icon" id="vue">
            <i class="fab fa-vuejs"></i>
          </p>
        </div>
      </div>
      <div id="skill-card">
        <div class="card">
          <div class="card-body" id="skill-desc">
            <div class="card-text" id="html5-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><abbr title="HTML5">HTML</abbr></div>
              </div>
            </div>
            <div class="card-text" id="css3-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><abbr title="CSS3">CSS</abbr></div>
              </div>
            </div>
            <div class="card-text" id="javascript-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><abbr title="자바스크립트">Javascript</abbr></div>
              </div>
            </div>
            <div class="card-text" id="php-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><abbr title="PHP">PHP</abbr></div>
              </div>
            </div>
            <div class="card-text" id="linux-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><abbr title="우분투">리눅스</abbr></div>
              </div>
            </div>
            <div class="card-text" id="office-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><abbr title="MS오피스,한글 등">Office</abbr></div>
              </div>
            </div>
            <div class="card-text" id="bootstrap-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"><abbr title="부트스트랩 3~4">Bootstrap</abbr></div>
              </div>
            </div>
            <div class="card-text" id="jquery-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><abbr title="제이쿼리">jQuery</abbr></div>
              </div>
            </div>
            <div class="card-text" id="windows-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"><abbr title="Windows 3.1~10 (도스 포함)">Windows</abbr></div>
              </div>
            </div>
            <div class="card-text" id="apache-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><abbr title="라즈베리파이에 서버 구축 및 호스팅, 가상서버 이용">Apache</abbr></div>
              </div>
            </div>
            <div class="card-text" id="nginx-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"><abbr title="윈도우 홈 서버에 NginX+MariaDB로 구축">NginX</abbr></div>
              </div>
            </div>
            <div class="card-text" id="git-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><abbr title="깃헙에 현재 저장소 구축 및 사용중">Git</abbr></div>
              </div>
            </div>
            <div class="card-text" id="sass-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"><abbr title="현재 진행중인 작업물 대부분에 사용하여 개발">Sass</abbr></div>
              </div>
            </div>
            <div class="card-text" id="vue-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"><abbr title="현재 학습중">Vue.js</abbr></div>
              </div>
            </div>
            <div class="card-text" id="materialize-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><abbr title="Materialize Front-end Framework">Materialize</abbr></div>
              </div>
            </div>
            <div class="card-text" id="foundation-desc">
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"><abbr title="Foundation Front-end Framework 6">Foundation</abbr></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="triangle triangle_right"></div>
  <div class="container-fluid row bg-white justify-content-center" id="project-outer">
    <div id="project" class="col-12 col-md-8 inner-box">
      <h1 class="sunFlowerBold">Project</h1>
      <div class="row justify-content-center">
        <div class="col-auto">
          <p class="project-banner" id="project-1">
            <abbr title="커뮤니티형 샘플"><i class="fas fa-comment-alt"></i></abbr>
          </p>
        </div>
        <div class="col-auto">
          <p class="project-banner" id="project-2">
            <abbr title="회사 공식사이트형 샘플"><i class="fas fa-building"></i></abbr>
          </p>
        </div>
        <div class="col-auto">
          <p class="project-banner" id="project-3">
            <abbr title="개인 포트폴리오형"><i class="fas fa-list-alt"></i></abbr>
          </p>
        </div>
        <div class="col-auto">
          <p class="project-banner" id="project-4">
            <abbr title="인덱스 페이지"><i class="fas fa-window-maximize"></i></abbr>
          </p>
        </div>
        <div class="col-auto">
          <p class="project-banner" id="project-5">
            <abbr title="쇼핑몰형 샘플"><i class="fas fa-cart-plus"></i></abbr>
          </p>
        </div>
        <div class="col-auto">
          <p class="project-banner" id="project-6">
            <abbr title="회사 공식사이트형 샘플"><i class="fas fa-building"></i></abbr>
          </p>
        </div>
        <div class="col-auto">
          <p class="project-banner" id="project-7">
            <abbr title="유튜브형 샘플"><i class="fab fa-youtube"></i></abbr>
          </p>
        </div>
      </div>
      <div id="project-card">
        <div class="card bg-light">
          <div class="card-body" id="project-desc">
            <h5 class="card-title sunFlower">각 배너를 클릭하시면 상세 설명이 나타납니다.</h5>
            <div class="card-text" id="project-1-desc">

            </div>
            <div class="card-text" id="project-2-desc">

            </div>
            <div class="card-text" id="project-3-desc">

            </div>
            <div class="card-text" id="project-4-desc">

            </div>
            <div class="card-text" id="project-5-desc">

            </div>
            <div class="card-text" id="project-6-desc">

            </div>
            <div class="card-text" id="project-7-desc">

</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="triangle triangle_left"></div>
  <div class="container-fluid row bg-blue justify-content-center" id="resume-outer">
    <div id="resume" class="col-12 col-md-8 inner-box">
      <h1 class="sunFlowerBold">Resume</h1>
      <div class="dropdown show" id="resume-drop">
        <button type="button" class="btn btn-light btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          My Resume
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <h6 class="dropdown-header">Download</h6>
          <a class="dropdown-item" href="https://danhk0612.github.io/OnePage-Sample-1/resume/resume.pdf">pdf file</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">View</h6>
          <a class="dropdown-item" href="http://resume.mydepot.kr" target="_blank">Web Resume</a>
        </div>
      </div>
    </div>
  </div>
  <div class="triangle triangle_right"></div>
  <div class="container-fluid row bg-white justify-content-center" id="link-outer">
    <div id="link" class="col-12 col-md-8 inner-box">
      <h1 class="sunFlowerBold">Link</h1>
      <div class="row justify-content-center">
        <div class="col-auto">
          <p class="link-icon">
            <a href="https://github.com/danhk0612/" title="깃헙 프로필" target="_blank"><i class="fab fa-github-square"></i></a>
          </p>
        </div>
        <div class="col-auto">
          <p class="link-icon">
            <a href="https://www.facebook.com/danhk0612" title="페이스북" target="_blank"><i class="fab fa-facebook-square"></i></a>
          </p>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
  <div id="bottom-bar" class="container-fluid row">
    <div id="copyright" class="col-12 col-md-4 poorStory">©
      <a href="http://webdev.mydepot.kr/" target="_self">webDev</a>, All rights reserved.</div>
    <div class="col-0 col-md-6"></div>
    <div id="mailadress" class="col-12 col-md-2 poorStory">danhk0612@gmail.com</div>
  </div>

  <script src="https://danhk0612.github.io/OnePage-Sample-1/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="https://danhk0612.github.io/OnePage-Sample-1/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
  <script src="https://danhk0612.github.io/OnePage-Sample-1/js/plugins.js"></script>
  <script src="../js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script type="text/javascript">
    $(window).on('load', function () {
      $('#loading').hide();
    });
  </script>
</body>

</html>