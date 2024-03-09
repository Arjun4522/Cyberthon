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
    <title>Login</title>
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
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4 offset-md-4">
            <div class="login-section">
              <div class="account-wall">
                <form class="form-signin" action="" method="post">
                  <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <span class="material-icons"> perm_identity </span>
                      </div>
                    </div>
                    <input
                      type="text"
                      class="form-control"
                      id="inlineFormInputGroupUsername2"
                      placeholder="Username"
                      name="uname"
                    />
                  </div>
                  <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <span class="material-icons"> lock </span>
                      </div>
                    </div>
                    <input
                      type="password"
                      class="form-control"
                      id="inlineFormInputGroupUsername2"
                      placeholder="password"
                      name="pass"
                    />
                  </div>
                  
                  <a href="#" class="pull-right need-help"
                    ><input
                      class="btn btn-lg btn-danger btn-block"
                      type="submit" name="submit" value="Login"
                    ></input>
                  </a>
                  <span class="clearfix"></span>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--   Core JS Files   -->
    <script src="./js/vendor/jquery-3.2.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap-material-design.min.js"></script>
    <script src="./js/perfect-scrollbar.jquery.min.js"></script>
    
    <script
      src="./js/material-dashboard.min.js?v=2.1.2"
      type="text/javascript"
    ></script>
    <script src="./js/main.js"></script>
  </body>
</html>

<?php
  include("./connection_db.php");


  if(isset($_POST["submit"])) {
    session_start(); 


    if (isset($_POST['uname']) && isset($_POST['pass'])) {
        function validate($data){
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;

        }
        $uname = validate($_POST['uname']);
        $pass = validate($_POST['pass']);
        if (empty($uname)) {
          header("Location: login.php?error=User Name is required");
          exit();
        }else if(empty($pass)){
          header("Location: login.php?error=Password is required");
          exit();
        }else{
            $sql = "SELECT * FROM users WHERE uname='$uname' AND pass='$pass'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['uname'] === $uname && $row['pass'] === $pass) {
                  echo "Logged in!";
                  $_SESSION['uname'] = $row['uname'];
                  // $_SESSION['name'] = $row['name'];
                  $_SESSION['Sl No.'] = $row['Sl No.'];
                  header("Location: index.php");
                  exit();
                }else{
                  header("Location: login.php?error=Incorect User name or password");
                  exit();
                }
            }else{
              header("Location: login.php?error=Incorect User name or password");
              exit();
            }
        }
    }else{

        header("Location: login.php");

        exit();
    }
  }
  else {
    return;
  }

?>