<?php 
    session_start();
    if (isset($_SESSION['Sl No.']) && isset($_SESSION['uname'])) {
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="#" />
    <link rel="icon" type="image/png" href="./img/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="title" content="Ask online Form" />
    <meta
      name="description"
      content="Vanchi is a Material unique admin template built with tiles concept. It comes with Different dashboard layouts, fully responsive HTML pages and, colorful widgets."
    />
    <meta
      name="keywords"
      content="mobilewebdevelopment,HTML, CSS, JavaScript,Material,js,Forum ,webdesign ,website ,web ,webdesigner ,webdevelopment,Template,admin,dashboard,ebsitedesig,themeym,radwanweb,frontend-with-radwan"
    />
    <meta name="robots" content="index, nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="language" content="English" />
    <title>Dashboard</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link rel="stylesheet" href="./css/fontawesome-all.min.css" />
    <link href="./css/materil.css" rel="stylesheet" />
    <link href="./css/custom.css" rel="stylesheet" />
    <link href="./css/responsive.css" rel="stylesheet" />
  </head>

  <body class="">
    <div class="wrapper">
      <div
        class="sidebar"
        data-color="purple"
        data-background-color="white"
        data-image=""
      >
        <div class="logo" style="text-align: center;">
          
        </div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item active">
              <a class="nav-link" href="./index.php">
                <img class="mr-2" src="./img/ic_view_quilt_24px.png" />
                Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./score board.php">
                <img class="mr-2" src="./img/score.png" />
                Score Board
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./flags.php">
                <img class="mr-2" src="./img/flag.png" />
                Submit Flag
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="main-panel">
        <!-- Navbar -->
        <nav
          class="
            navbar navbar-expand-lg navbar-transparent navbar-absolute
            fixed-top
          ">
          <div class="container-fluid">
            
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              aria-controls="navigation-index"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
              <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse">
              <form class="navbar-form">
                
              </form>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a
                    class="nav-link"
                    href="javascript:;"
                    id="navbarDropdownProfile"
                    data-toggle="dropdown"
                    aria-haspopup="true"
                    aria-expanded="false"
                  >
                    <i class="material-icons">person</i>
                    <p class="d-lg-none d-md-block">Account</p>
                    <span class="hide-arrow-admin-text" onclick="Myfunc()">
                    <?php echo $_SESSION['uname']; ?>
                      <i class="material-icons">arrow_drop_down</i>
                    </span>
                  </a>

                  <div
                    class="dropdown-menu dropdown-menu-right"
                    aria-labelledby="navbarDropdownProfile"
                    id="dropdown-menu"
                  >
                    <a class="dropdown-item" href="logout.php">Log out</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <h5>Web Application</h5>
                    </div>
                    <p class="card-category">10 POINTS</p>
                  </div>

                  <div class="card-body">
                    <h3>SPY Challenge</h3>
                    <h4><a href="http://192.168.0.143/CTF/11.%20Spy/src/">Link</a> </h4>
                    <!-- <input type="text" name="solve" id="solve" value="12 SOLVES"> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <h5>Web Application + Network</h5>
                    </div>
                    <p class="card-category">30 POINTS</p>
                  </div>
                  <div class="card-body">
                    <h3>Fancy Pants Adventure</h3>
                    <h4><a href="http://192.168.0.143/CTF/5.Fancy%20Pants/">Link</a></h4>
                    <!-- <input type="text" name="solve" id="solve" value="12 SOLVES"> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <h5>Web Application + Network</h5>
                    </div>
                    <p class="card-category">30 POINTS</p>
                  </div>

                  <div class="card-body">
                    <h3>Decrypt</h3>
                    <h4><a href="http://192.168.0.143/CTF/3.Decrypt/">Link</a></h4>
                    <!-- <input type="text" name="solve" id="solve" value="12 SOLVES"> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <h5>System</h5>
                    </div>
                    <p class="card-category">50 POINTS</p>
                  </div>

                  <div class="card-body">
                    <h3>Level 1</h3>
                    <h4><a href="#">IP</a></h4>
                    <!-- <input type="text" name="solve" id="solve" value="12 SOLVES"> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <h5>Cryptography</h5>
                    </div>
                    <p class="card-category">10 POINTS</p>
                  </div>

                  <div class="card-body">
                    <h3>Memories</h3>
                    <h4><a href="http://192.168.0.143/CTF/Memories.txt">File</a></h4>
                    <!-- <input type="text" name="solve" id="solve" value="12 SOLVES"> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <h5>Web Application + Network</h5>
                    </div>
                    <p class="card-category">30 POINTS</p>
                  </div>

                  <div class="card-body">
                    <h3>Capture The Snake</h3>
                    <h4><a href="http://192.168.0.143/CTF/13.captureTheSnake/">Link</a></h4>
                    <!-- <input type="text" name="solve" id="solve" value="12 SOLVES"> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <h5>Android</h5>
                    </div>
                    <p class="card-category">20 POINTS</p>
                  </div>

                  <div class="card-body">
                    <h3>Math Challenge</h3>
                    <h4><a href="http://192.168.0.143/CTF/7.Math%20Challenge/math-challenge.apk">File</a></h4>
                    <!-- <input type="text" name="solve" id="solve" value="12 SOLVES"> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <h5>Android</h5>
                    </div>
                    <p class="card-category">20 POINTS</p>
                  </div>

                  <div class="card-body">
                    <h3>Nors</h3>
                    <h4><a href="http://192.168.0.143/CTF/8.%20Nors/Nors.apk">File</a></h4>
                    <!-- <input type="text" name="solve" id="solve" value="12 SOLVES"> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <h5>IOT</h5>
                    </div>
                    <p class="card-category">35 POINTS</p>
                  </div>
                  <div class="card-body">
                    <h3>IoT Malware</h3>
                    <h4><a href="http://192.168.0.143/CTF/IOT/iot.malware.so">File</a></h4>
                    <!-- <input type="text" name="solve" id="solve" value="12 SOLVES"> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="custom-icon-card card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <h5>Reverse Engineering</h5>
                    </div>
                    <p class="card-category">15 POINTS</p>
                  </div>

                  <div class="card-body">
                    <h3>Binary</h3>
                    <h4><a href="http://192.168.0.143/CTF/goblin/goblin">File</a></h4>
                    <!-- <input type="text" name="solve" id="solve" value="12 SOLVES"> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <script src="./js/main.js"></script>

    <script>
      $(document).ready(function () {
        $().ready(function () {
          $sidebar = $(".sidebar");

          $sidebar_img_container = $sidebar.find(".sidebar-background");

          $full_page = $(".full-page");

          $sidebar_responsive = $("body > .navbar-collapse");

          window_width = $(window).width();

          fixed_plugin_open = $(
            ".sidebar .sidebar-wrapper .nav li.active a p"
          ).html();

          if (window_width > 767 && fixed_plugin_open == "Dashboard") {
            if ($(".fixed-plugin .dropdown").hasClass("show-dropdown")) {
              $(".fixed-plugin .dropdown").addClass("open");
            }
          }

          $(".fixed-plugin a").click(function (event) {
            if ($(this).hasClass("switch-trigger")) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $(".fixed-plugin .active-color span").click(function () {
            $full_page_background = $(".full-page-background");

            $(this).siblings().removeClass("active");
            $(this).addClass("active");

            var new_color = $(this).data("color");

            if ($sidebar.length != 0) {
              $sidebar.attr("data-color", new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr("filter-color", new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr("data-color", new_color);
            }
          });

          $(".fixed-plugin .background-color .badge").click(function () {
            $(this).siblings().removeClass("active");
            $(this).addClass("active");

            var new_color = $(this).data("background-color");

            if ($sidebar.length != 0) {
              $sidebar.attr("data-background-color", new_color);
            }
          });

          $(".fixed-plugin .img-holder").click(function () {
            $full_page_background = $(".full-page-background");

            $(this).parent("li").siblings().removeClass("active");
            $(this).parent("li").addClass("active");

            var new_image = $(this).find("img").attr("src");

            if (
              $sidebar_img_container.length != 0 &&
              $(".switch-sidebar-image input:checked").length != 0
            ) {
              $sidebar_img_container.fadeOut("fast", function () {
                $sidebar_img_container.css(
                  "background-image",
                  'url("' + new_image + '")'
                );
                $sidebar_img_container.fadeIn("fast");
              });
            }

            if (
              $full_page_background.length != 0 &&
              $(".switch-sidebar-image input:checked").length != 0
            ) {
              var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .data("src");

              $full_page_background.fadeOut("fast", function () {
                $full_page_background.css(
                  "background-image",
                  'url("' + new_image_full_page + '")'
                );
                $full_page_background.fadeIn("fast");
              });
            }

            if ($(".switch-sidebar-image input:checked").length == 0) {
              var new_image = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .attr("src");
              var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                .find("img")
                .data("src");

              $sidebar_img_container.css(
                "background-image",
                'url("' + new_image + '")'
              );
              $full_page_background.css(
                "background-image",
                'url("' + new_image_full_page + '")'
              );
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css(
                "background-image",
                'url("' + new_image + '")'
              );
            }
          });

          $(".switch-sidebar-image input").change(function () {
            $full_page_background = $(".full-page-background");

            $input = $(this);

            if ($input.is(":checked")) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn("fast");
                $sidebar.attr("data-image", "#");
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn("fast");
                $full_page.attr("data-image", "#");
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr("data-image");
                $sidebar_img_container.fadeOut("fast");
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr("data-image", "#");
                $full_page_background.fadeOut("fast");
              }

              background_image = false;
            }
          });

          $(".switch-sidebar-mini input").change(function () {
            $body = $("body");

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $("body").removeClass("sidebar-mini");
              md.misc.sidebar_mini_active = false;

              $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
            } else {
              $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
                "destroy"
              );

              setTimeout(function () {
                $("body").addClass("sidebar-mini");

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            var simulateWindowResize = setInterval(function () {
              window.dispatchEvent(new Event("resize"));
            }, 180);

            setTimeout(function () {
              clearInterval(simulateWindowResize);
            }, 1000);
          });
        });
      });



      function Myfunc(){
        if(document.getElementById("dropdown-menu").style.display == "none"){
          document.getElementById("dropdown-menu").style.display = "block";
          document.getElementById("dropdown-menu").style.opacity = "1";
          document.getElementById("dropdown-menu").style.transform = "scale(1)";
        }
        else{
          document.getElementById("dropdown-menu").style.display = "none";
          document.getElementById("dropdown-menu").style.opacity = "0";
          document.getElementById("dropdown-menu").style.transform = "scale(0)";
        }
      }
    </script>
  </body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
?>