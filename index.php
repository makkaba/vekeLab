<html lang="ko">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Veke Lab</title>    
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>


<body>

<?php 
  for($i=0; $i<5; $i++)
    echo "<br/>";

?>



  <div class="container" style="max-width:450px; padding:15px; margin: 0 auto;">

    
      

      <img src="img/lab.PNG" style="
       position: relative;
       top: 10%;
       left: 50%;
       width: 300px;
       height: 300px;
       margin-top: -100px;
       margin-left: -150px;">

      
      <h1 align="center">VekeLab</h1>
      
      <form class="form-horizontal" METHOD="POST" ACTION="form.php" >
        
      
        <div class="form-group">
          <label for="inputID1" class="col-sm-4 control-label"></label>
          <div class="col-sm-4">
            <input type="text" name="userid" class="form-control" id="inputID1" placeholder="아이디">
          </div>
        </div>


        <div class="form-group">
          <label for="inputPassword1" class="col-sm-4 control-label"></label>
          <div class="col-sm-4">
            <input type="password" name="userpw" class="form-control" id="inputPassword1" placeholder="비밀번호">
          </div>
        </div>
       
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-4">
            <button type="submit" class="btn btn-success btn-lg btn-block">로그인</button>
          </div>
        </div>
      </form>
    
    
    
  </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
