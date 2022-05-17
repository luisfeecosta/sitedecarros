
<?php 
  session_start();
  //print_r($_SESSION);
  include 'init.php';


if(isset($_SESSION['usuario'])){
  echo "<br/><a href='index2.php'>pagina2</a>";
  echo "<br/><a href='destruir.php'>destruir</a>"; 
  include 'init.php';
}
if(isset($_POST['uname'])){
    $usr = $_POST['uname'];
    $sqli = "select * from loginn where usr = '$usr'";
    $ql = mysqli_query($con, $sqli);
    $res= mysqli_fetch_assoc($ql);
    if($_POST['psw']== $res['psw']){
      $_SESSION['usuario'] == $res['tipo'];  
      header('location:index.php');
       }else{
         echo "<script>alert('senha incorreta');</script>";
       }

}

  
  ?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  .modal-header, h4, .close {
    background-color: red;
    color:white !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-footer {
    background-color:lightgray;

}

h2{
  color: green;
}

  </style>

</head>
<body  background="road.jpg"  >

<div class="container">
    <br>  <br>  <br>
      <br>  <br>  <br>      <br>  <br>  <br>
  <h2>faça seu login agora clicando no botão abaixo</h2>
  <!-- Trigger the modal with a button -->
  <br>  <br>  <br>
 <button type="button" class="btn btn-default btn-lg" id="myBtn" >Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="index.php" method="post">

            <div class="form-group" >
              <label for="uname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="uname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for=""><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" name="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" color="blue"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="sgn()">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>

</body>
</html>
