
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
    <title>Register</title>
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
                      placeholder="Username" maxlength="10"
                      name="uname"
                    />
                  </div>
                  <div class="input-group mb-2 mr-sm-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <span class="material-icons">
                          mail
                          </span>
                      </div>
                    </div>
                    <input
                      type="email"
                      class="form-control"
                      id="inlineFormInputGroupUsername2"
                      placeholder="Email" maxlength="50"
                      name="email"
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
                      placeholder="password" maxlength="10"
                      name="pass"
                    />
                  </div>
                  
                  <a href="#" class="pull-right need-help"
                    ><input
                      class="btn btn-lg btn-danger btn-block"
                      type="submit" name="submit" value="Register"
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
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    
    $user = "SELECT uname FROM users";
    $rslt = $conn->query($user);
    $row = $rslt->fetch_assoc();
    

    if($uname == $row['uname']){
      echo "<script>alert('User already exist')</script>";
      return false;
    }
    else{
      $sql = "INSERT INTO users (uname, mail, pass, score, rank, ctf1, ctf2, ctf3, ctf4, ctf5, ctf6, ctf7, ctf8, ctf9, ctf10) VALUES ('$uname', '$email', '$pass', 0, 0, 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'N')";
      if($conn->query($sql) === TRUE){
          // header('location:login.php');
          echo "<script>window.location.href = 'login.php'</script>";
      }else{
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
    
  }
  else {
    return;
  }
?>
