<?php  
if (!isset($_GET["type"])) {
    header("location:index.php");
}
else{
    $type= $_GET["type"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Form for <?= str_replace("-", " ", $type); ?></title>
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
    <style>
        .modal{
            display: flex;
        }
    </style>
</head>
<body>
<div class="modal" id="modal1">
        <div class="modal-content">
          <div class="modal-header">
            Flag : <?= str_replace("-", " ", $type); ?>
            <button class="icon modal-close" style="cursor: pointer;"><span class="material-symbols-outlined">close</span></button>
          </div>
          <div class="modal-body">
            <form action="" method="post">
              <input type="text" name="ctf1" id="flag-inp" placeholder="flag...." style="border: 1px black solid; padding: 5px 10px; font-size: 20px; color: black; border-radius: 5px; width: 100%; cursor:not-allowed">
              <br><br>
              <input type="submit" id="btn" value="Submit" name="submit" style="background: black; padding: 10px 25px; font-size: 20px; color: white; border-radius: 5px; cursor: pointer;">
            </form>
          </div>
        </div>
      </div>
      <?php
  include ("./connection_db.php");
  if(isset($_POST['submit'])){
    $flag = $_POST['ctf1'];
    $points = mysqli_query($conn, "select points from ctf_details where ctf_name=$type");
    $name = $_SESSION['uname'];
    $checkflag = mysqli_query($conn, "select flag from ctf_details where ctf_name=$type");
    if($flag===$checkflag){

      $sql1 = "UPDATE users SET score = score + $points WHERE uname = '$name'";
      $ctf1_sql = "UPDATE users SET $type = 'Y' WHERE uname = '$name'";
      if($conn->query($sql1)){
        
      }
      
    }
  }
?>
      <script>
      
    </script>
</body>
</html>