<?php 
    session_start();
    if (isset($_SESSION['Sl No.']) && isset($_SESSION['uname'])) {
?>
<?php error_reporting(0); ?> 
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
    <title>Flags</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
        <!-- <div class="logo">
          <a href="./index.html" class="simple-text logo-normal">
            <img src="./img/Group 2.svg" alt="logo" />
          </a>
        </div> -->
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item">
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
            <li class="nav-item active">
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
          <div class="center">
            <div class="dropdown">
              <div class="input-box"></div>
              <div class="list">
                <div class="search-box">
                  <!-- <input
                    type="search"
                    name=""
                    id="search"
                    placeholder="Search Options"
                    onkeyup="search(this)"
                  /> -->
                </div>
                <input type="radio" name="drop1" id="op1" class="radio" data-modal="modal1" />
                <label for="op1" id="c1">
                  <span class="name">SPY Challenge</span>
                </label>
      
                <input type="radio" name="drop1" id="op2" class="radio" data-modal="modal2" />
                <label for="op2" id="c2">
                  <span class="name">Fancy Pants Adventure</span>
                </label>
      
                <input type="radio" name="drop1" id="op3" class="radio" data-modal="modal3" />
                <label for="op3" id="c3">
                  <span class="name">Decrypt</span>
                </label>
      
                <input type="radio" name="drop1" id="op4" class="radio" data-modal="modal4" />
                <label for="op4" id="c4">
                  <span class="name">Level 1</span>
                </label>
      
                <input type="radio" name="drop1" id="op5" class="radio" data-modal="modal5" />
                <label for="op5" id="c5">
                  <span class="name">Memories</span>
                </label>
      
                <input type="radio" name="drop1" id="op6" class="radio" data-modal="modal6" />
                <label for="op6" id="c6">
                  <span class="name">Capture The Snake</span>
                </label>

                <input type="radio" name="drop1" id="op7" class="radio" data-modal="modal7" />
                <label for="op7" id="c7">
                  <span class="name">Math Challenge</span>
                </label>

                <input type="radio" name="drop1" id="op8" class="radio" data-modal="modal8" />
                <label for="op8" id="c8">
                  <span class="name">Norse</span>
                </label>

                <input type="radio" name="drop1" id="op9" class="radio" data-modal="modal9" />
                <label for="op9" id="c9">
                  <span class="name">IoT Malware</span>
                </label>

                <input type="radio" name="drop1" id="op10" class="radio" data-modal="modal10" />
                <label for="op10" id="c10">
                  <span class="name">Binary</span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- MODALS -->
      <div class="modal" id="modal1">
        <div class="modal-content">
          <div class="modal-header">
            Flag :
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <input type="text" name="ctf1" id="flag-inp" placeholder="Flag value" style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>

      <div class="modal" id="modal2">
        <div class="modal-content">
          <div class="modal-header">
            Flag :
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="ctf2" id="flag-inp" placeholder="Flag value/Flag code" style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit2" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>

      <div class="modal" id="modal3">
        <div class="modal-content">
          <div class="modal-header">
            Flag :
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="ctf3" id="flag-inp" placeholder="Flag value/Flag code" style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit3" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>

      <div class="modal" id="modal4">
        <div class="modal-content">
          <div class="modal-header">
            Flag :
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="ctf4" id="flag-inp" placeholder="Password" style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit4" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>

      <div class="modal" id="modal5">
        <div class="modal-content">
          <div class="modal-header">
            Flag :
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="ctf5" id="flag-inp" placeholder="Flag value" style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit5" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>

      <div class="modal" id="modal6">
        <div class="modal-content">
          <div class="modal-header">
            Flag :
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="ctf6" id="flag-inp" placeholder="Flag value/Flag code" style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit6" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>

      <div class="modal" id="modal7">
        <div class="modal-content">
          <div class="modal-header">
            Flag :
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="ctf7" id="flag-inp" placeholder="Flag value/Flag code" style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit7" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>

      <div class="modal" id="modal8">
        <div class="modal-content">
          <div class="modal-header">
            Flag :
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="ctf8" id="flag-inp" placeholder="Flag value/Flag code" style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit8" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>

      <div class="modal" id="modal9">
        <div class="modal-content">
          <div class="modal-header">
            Flag :
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="ctf9" id="flag-inp" placeholder="Flag value" style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit9" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>

      <div class="modal" id="modal10">
        <div class="modal-content">
          <div class="modal-header">
            Flag :
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="ctf10" id="flag-inp" placeholder="Flag value" style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit10" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>
    </div>
    <!--   Core JS Files   -->
    <script src="./js/vendor/jquery-3.2.1.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap-material-design.min.js"></script>
    <script src="./js/perfect-scrollbar.jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/modal.js"></script>
    <script>
      var input = document.querySelector(".input-box");
      input.onclick = function () {
        this.classList.toggle("open");
        let list = this.nextElementSibling;
        if (list.style.maxHeight) {
          list.style.maxHeight = null;
          list.style.boxShadow = null;
        } else {
          list.style.maxHeight = list.scrollHeight + "px";
          list.style.boxShadow =
            "0 1px 2px 0 rgba(0, 0, 0, 0.15),0 1px 3px 1px rgba(0, 0, 0, 0.1)";
        }
      };

      var rad = document.querySelectorAll(".radio");
      rad.forEach((item) => {
        item.addEventListener("change", () => {
          input.innerHTML = item.nextElementSibling.innerHTML;
          input.click();
        });
      });

      var label = document.querySelectorAll("label");
      function search(searchin) {
        let searchVal = searchin.value;
        searchVal = searchVal.toUpperCase();
        label.forEach((item) => {
          let checkVal = item.querySelector(".name").innerHTML;
          checkVal = checkVal.toUpperCase();
          if (checkVal.indexOf(searchVal) == -1) {
            item.style.display = "none";
          } else {
            item.style.display = "flex";
          }
          let list = input.nextElementSibling;
          list.style.maxHeight = list.scrollHeight + "px";
        });
      }

      

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
  include ("./connection_db.php");

  // Flag Submit
  
  if(isset($_POST['submit'])){
    $flag = $_POST['ctf1'];
    $score = 10;
    $name = $_SESSION['uname'];
    if($flag==="D676FB9ABA0FF74A87A6E98271915EAB8A4DFBF5E4ABE15DB1CEE390EF919164"){
      $sql = "SELECT ctf1 FROM users";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();

      $sql1 = "UPDATE users SET score = score + 10 WHERE uname = '$name'";
      $ctf1_sql = "UPDATE users SET ctf1 = 'Y' WHERE uname = '$name'";
      if($conn->query($sql1)){
        $flgUpdate = "UPDATE users SET ctf1 = 'Y' WHERE uname = '$name'";
        $conn->query($flgUpdate);
      }
    }
    else{
      echo "<script>alert('wrong');</script>";
    }
  }

  if(isset($_POST['submit2'])){
    $flag2 = $_POST['ctf2'];
    $score2 = 30;
    $name = $_SESSION['uname'];
    if($flag2==="Captain Manly Beard/Cutie Pants Girl"){
      $sql2 = "SELECT ctf2 FROM users";
      $result2 = $conn->query($sql2);
      $row2 = $result2->fetch_assoc();

      $sql2 = "UPDATE users SET score = score + 30 WHERE uname = '$name'";
      $ctf2_sql = "UPDATE users SET ctf2 = 'Y' WHERE uname = '$name'";
      if($conn->query($sql2)){
        $flgUpdate2 = "UPDATE users SET ctf2 = 'Y' WHERE uname = '$name'";
        $conn->query($flgUpdate2);
      }
    }
    else{
      echo "<script>alert('wrong');</script>";
    }
  }

  if(isset($_POST['submit3'])){
    $flag3 = $_POST['ctf3'];
    $score3 = 30;
    $name = $_SESSION['uname'];
    if($flag3==="fr33dom_w4s_nOt_wOn_Ov3rnit3/H34RW1THY0UR3Y35"){
      $sql3 = "SELECT ctf3 FROM users";
      $result3 = $conn->query($sql3);
      $row3 = $result3->fetch_assoc();

      $sql3 = "UPDATE users SET score = score + 30 WHERE uname = '$name'";
      $ctf3_sql = "UPDATE users SET ctf3 = 'Y' WHERE uname = '$name'";
      if($conn->query($sql3)){
        $flgUpdate3 = "UPDATE users SET ctf3 = 'Y' WHERE uname = '$name'";
        $conn->query($flgUpdate3);
      }
    }
    else{
      echo "<script>alert('wrong');</script>";
    }
  }

  if(isset($_POST['submit4'])){
    $flag4 = $_POST['ctf4'];
    $score4 = 50;
    $name = $_SESSION['uname'];
    if($flag4==="marlinspike"){
      $sql4 = "SELECT ctf4 FROM users";
      $result4 = $conn->query($sql4);
      $row4 = $result4->fetch_assoc();

      $sql4 = "UPDATE users SET score = score + 50 WHERE uname = '$name'";
      $ctf4_sql = "UPDATE users SET ctf4 = 'Y' WHERE uname = '$name'";
      if($conn->query($sql4)){
        $flgUpdate4 = "UPDATE users SET ctf4 = 'Y' WHERE uname = '$name'";
        $conn->query($flgUpdate4);
      }
    }
    else{
      echo "<script>alert('wrong');</script>";
    }
  }

  if(isset($_POST['submit5'])){
    $flag5 = $_POST['ctf5'];
    $score5 = 10;
    $name = $_SESSION['uname'];
    if($flag5==="lets get back to our old days"){
      $sql5 = "SELECT ctf5 FROM users";
      $result5 = $conn->query($sql5);
      $row5 = $result5->fetch_assoc();

      $sql5 = "UPDATE users SET score = score + 10 WHERE uname = '$name'";
      $ctf5_sql = "UPDATE users SET ctf5 = 'Y' WHERE uname = '$name'";
      if($conn->query($sql5)){
        $flgUpdate5 = "UPDATE users SET ctf5 = 'Y' WHERE uname = '$name'";
        $conn->query($flgUpdate5);
      }	
    }
    else{
      echo "<script>alert('wrong');</script>";
    }
  }

  if(isset($_POST['submit6'])){
    $flag6 = $_POST['ctf6'];
    $score6 = 30;
    $name = $_SESSION['uname'];
    if($flag6==="ubuntu/Q7PSNynUpwLTvkjt6zqFaXW5"){
      $sql6 = "SELECT ctf6 FROM users";
      $result6 = $conn->query($sql6);
      $row6 = $result6->fetch_assoc();

      $sql6 = "UPDATE users SET score = score + 30 WHERE uname = '$name'";
      $ctf6_sql = "UPDATE users SET ctf6 = 'Y' WHERE uname = '$name'";
      if($conn->query($sql6)){
        $flgUpdate6 = "UPDATE users SET ctf6 = 'Y' WHERE uname = '$name'";
        $conn->query($flgUpdate6);
      }	
    }
    else{
      echo "<script>alert('wrong');</script>";
    }
  }

  if(isset($_POST['submit7'])){
    $flag7 = $_POST['ctf7'];
    $score7 = 20;
    $name = $_SESSION['uname'];
    if($flag7==="Addition/Fl123"){
      $sql7 = "SELECT ctf7 FROM users";
      $result7 = $conn->query($sql7);
      $row7 = $result7->fetch_assoc();

      $sql7 = "UPDATE users SET score = score + 20 WHERE uname = '$name'";
      $ctf7_sql = "UPDATE users SET ctf7 = 'Y' WHERE uname = '$name'";
      if($conn->query($sql7)){
        $flgUpdate7 = "UPDATE users SET ctf7 = 'Y' WHERE uname = '$name'";
        $conn->query($flgUpdate7);
      }	
    }
    else{
      echo "<script>alert('wrong');</script>";
    }
  }

  if(isset($_POST['submit8'])){
    $flag8 = $_POST['ctf8'];
    $score8 = 20;
    $name = $_SESSION['uname'];
    if($flag8==="Mjölnir/Asgard"){
      $sql8 = "SELECT ctf8 FROM users";
      $result8 = $conn->query($sql8);
      $row8 = $result8->fetch_assoc();

      $sql8 = "UPDATE users SET score = score + 20 WHERE uname = '$name'";
      $ctf8_sql = "UPDATE users SET ctf8 = 'Y' WHERE uname = '$name'";
      if($conn->query($sql8)){
        $flgUpdate8 = "UPDATE users SET ctf8 = 'Y' WHERE uname = '$name'";
        $conn->query($flgUpdate8);
      }	
    }
    else{
      echo "<script>alert('wrong');</script>";
    }
  }

  if(isset($_POST['submit9'])){
    $flag9 = $_POST['ctf9'];
    $score9 = 35;
    $name = $_SESSION['uname'];
    if($flag9==="flag{wh0_k1ll3d_db}"){
      $sql9 = "SELECT ctf9 FROM users";
      $result9 = $conn->query($sql9);
      $row9 = $result9->fetch_assoc();

      $sql9 = "UPDATE users SET score = score + 35 WHERE uname = '$name'";
      $ctf9_sql = "UPDATE users SET ctf9 = 'Y' WHERE uname = '$name'";
      if($conn->query($sql9)){
        $flgUpdate9 = "UPDATE users SET ctf9 = 'Y' WHERE uname = '$name'";
        $conn->query($flgUpdate9);
      }	
    }
    else{
      echo "<script>alert('wrong');</script>";
    }
  }

  if(isset($_POST['submit10'])){
    $flag10 = $_POST['ctf10'];
    $score10 = 15;
    $name = $_SESSION['uname'];
    if($flag10==="fsociety"){
      $sql10 = "SELECT ctf10 FROM users";
      $result10 = $conn->query($sql10);
      $row10 = $result10->fetch_assoc();

      $sql10 = "UPDATE users SET score = score + 15 WHERE uname = '$name'";
      $ctf10_sql = "UPDATE users SET ctf10 = 'Y' WHERE uname = '$name'";
      if($conn->query($sql10)){
        $flgUpdate10 = "UPDATE users SET ctf10 = 'Y' WHERE uname = '$name'";
        $conn->query($flgUpdate10);
      }	
    }
    else{
      echo "<script>alert('wrong');</script>";
    }
  }



  if(isset($_SESSION['uname'])){
    // FLAG CHECK

    $name = $_SESSION['uname'];

    $setFlag = "SELECT ctf1 FROM users WHERE uname = '$name'";
    $setFlagR = $conn->query($setFlag);
    $setFlagrow = $setFlagR->fetch_assoc();
    if($setFlagrow['ctf1'] == 'Y'){
      echo "<script>document.getElementById('c1').style.display = 'none'</script>";
    }
    else{
      echo "<script>document.getElementById('c1').style.display = 'flex'</script>";
    }

    $setFlag2 = "SELECT ctf2 FROM users WHERE uname = '$name'";
    $setFlagR2 = $conn->query($setFlag2);
    $setFlagrow2 = $setFlagR2->fetch_assoc();
    if($setFlagrow2['ctf2'] == 'Y'){
      echo "<script>document.getElementById('c2').style.display = 'none'</script>";
    }
    else{
      echo "<script>document.getElementById('c2').style.display = 'flex'</script>";
    }

    $setFlag3 = "SELECT ctf3 FROM users WHERE uname = '$name'";
    $setFlagR3 = $conn->query($setFlag3);
    $setFlagrow3 = $setFlagR3->fetch_assoc();
    if($setFlagrow3['ctf3'] == 'Y'){
      echo "<script>document.getElementById('c3').style.display = 'none'</script>";
    }
    else{
      echo "<script>document.getElementById('c3').style.display = 'flex'</script>";
    }

    $setFlag4 = "SELECT ctf4 FROM users WHERE uname = '$name'";
    $setFlagR4 = $conn->query($setFlag4);
    $setFlagrow4 = $setFlagR4->fetch_assoc();
    if($setFlagrow4['ctf4'] == 'Y'){
      echo "<script>document.getElementById('c4').style.display = 'none'</script>";
    }
    else{
      echo "<script>document.getElementById('c4').style.display = 'flex'</script>";
    }

    $setFlag5 = "SELECT ctf5 FROM users WHERE uname = '$name'";
    $setFlagR5 = $conn->query($setFlag5);
    $setFlagrow5 = $setFlagR5->fetch_assoc();
    if($setFlagrow5['ctf5'] == 'Y'){
      echo "<script>document.getElementById('c5').style.display = 'none'</script>";
    }
    else{
      echo "<script>document.getElementById('c5').style.display = 'flex'</script>";
    }

    $setFlag6 = "SELECT ctf6 FROM users WHERE uname = '$name'";
    $setFlagR6 = $conn->query($setFlag6);
    $setFlagrow6 = $setFlagR6->fetch_assoc();
    if($setFlagrow6['ctf6'] == 'Y'){
      echo "<script>document.getElementById('c6').style.display = 'none'</script>";
    }
    else{
      echo "<script>document.getElementById('c6').style.display = 'flex'</script>";
    }

    $setFlag7 = "SELECT ctf7 FROM users WHERE uname = '$name'";
    $setFlagR7 = $conn->query($setFlag7);
    $setFlagrow7 = $setFlagR7->fetch_assoc();
    if($setFlagrow7['ctf7'] == 'Y'){
      echo "<script>document.getElementById('c7').style.display = 'none'</script>";
    }
    else{
      echo "<script>document.getElementById('c7').style.display = 'flex'</script>";
    }

    $setFlag8 = "SELECT ctf8 FROM users WHERE uname = '$name'";
    $setFlagR8 = $conn->query($setFlag8);
    $setFlagrow8 = $setFlagR8->fetch_assoc();
    if($setFlagrow8['ctf8'] == 'Y'){
      echo "<script>document.getElementById('c8').style.display = 'none'</script>";
    }
    else{
      echo "<script>document.getElementById('c8').style.display = 'flex'</script>";
    }

    $setFlag9 = "SELECT ctf9 FROM users WHERE uname = '$name'";
    $setFlagR9 = $conn->query($setFlag9);
    $setFlagrow9 = $setFlagR9->fetch_assoc();
    if($setFlagrow9['ctf9'] == 'Y'){
      echo "<script>document.getElementById('c9').style.display = 'none'</script>";
    }
    else{
      echo "<script>document.getElementById('c9').style.display = 'flex'</script>";
    }

    $setFlag10 = "SELECT ctf10 FROM users WHERE uname = '$name'";
    $setFlagR10 = $conn->query($setFlag10);
    $setFlagrow10 = $setFlagR10->fetch_assoc();
    if($setFlagrow10['ctf10'] == 'Y'){
      echo "<script>document.getElementById('c10').style.display = 'none'</script>";
    }
    else{
      echo "<script>document.getElementById('c10').style.display = 'flex'</script>";
    }
  }


  $conn->close();
  
?>

<?php 
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_SESSION['form_submitted'])) {

  $_SESSION['form_submitted'] = true;
}
else{
     header("Location: login.php");
     exit();
}
?>