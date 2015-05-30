<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>VekeLab</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    
    <?php 
    
      include 'db_info.php';


      session_start();
      if(!isset($_SESSION['user_id'])) {
        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
        exit;
      }
      $user_id = $_SESSION['user_id'];
      echo "<p>안녕하세요. {$user_id} 님</p>";
      echo "<p><a href='logout.php'>로그아웃</a></p>";








      $boardQry = "SELECT s_name,s_concept,s_link,s_img FROM service";
      $result = mysql_query($boardQry);
    ?>
    <div class="row" style="margin-top:10px;">
    <?php

      while($row = mysql_fetch_array($result))
      {
        $img_path = $row['s_img'];
        $site_path = $row['s_link'];
    ?>
    

      <div class="col-sm-5 col-md-3">
          <div class="thumbnail">  
              <a href="<?php echo $site_path; ?>"><img src="<?php echo $img_path; ?>" 
                alt="클릭하세요" data-holder-rendered="true" style="display: block; height: 120px;"></a>
                
            
            <div class="caption">
              <h3>
                <?php
                   echo $row['s_name'].'</h3><p>'.$row['s_concept'].'</p>';
                ?>
                   
              <p>
                <a href="#" class="btn btn-primary" role="button">좋아요!</a> 
                <a href="#" class="btn btn-default" role="button">disLike</a>
              </p>
            </div>
          </div>
      </div>
      <?php } ?>

    </div>
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>