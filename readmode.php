<?php 
require 'robot.php';
@import('cord_sql');
require'time_agoe.php';

$get = $_GET['id'];

if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check if ip is pass from proxy
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }

elseif (!empty(gethostname()))   //to check if ip is pass from proxy
    {
      $ipaddress = gethostname()."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }




  
$topic=$_GET['id'];
$sqll="SELECT * FROM track WHERE post_id = ? AND user_ip= ?";
$rtr=$conn->prepare($sqll);
$rtr->bindparam(1,$topic);
$rtr->bindparam(2,$ipaddress);
$rtr->execute();
$cnt=$rtr->rowCount();
if ($cnt < 1) {


  
$sqlll="INSERT INTO track( post_id,user_ip) VALUE(?,?)";

$rtrr=$conn->prepare($sqlll);

$rtrr->bindparam(1,$topic);
$rtrr->bindparam(2,$ipaddress);
$rtrr->execute();
}

$Sci_con=$conn->prepare("SELECT * FROM webd");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$webname = $Sci_col['webname'];
$weblogo = $Sci_col['img2'];
$webbanner = $Sci_col['img1'];
}

$Sci_con=$conn->prepare("SELECT * FROM blog WHERE id=? order by id DESC LIMIT 1");
$Sci_con->bindParam(1, $get);
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

    $Sci_id = $Sci_col['id'];
    $Sci_img1 = $Sci_col['img1'];
    $Sci_topic = $Sci_col['topic'];
    $Sci_content = $Sci_col['textbox'];
    $Sci_date = $Sci_col['date'];
    
$Sci_convisitors=$conn->prepare("SELECT * FROM track Where post_id=?");
$Sci_convisitors->bindparam(1,$get);
$Sci_convisitors->execute();
$visitors = $Sci_convisitors->rowCount();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $Sci_topic; ?> @ <?php echo $webname;?></title>
    
     <!-- durallMetal -->


     <meta name="author" content="<?php echo $webname; ?>">
  <meta name="googlebot" content="index, follow">
  <meta name="robots" content="index, follow">
 <!-- document-specific social tags -->
  <meta property="og:title" content="<?php echo $Sci_topic; ?> FC page">
   <meta name="twitter:title" content="<?php echo $Sci_topic; ?> FC page">
 <meta property="og:url" content="<?php echo  $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 ?>">   
  <meta name="twitter:url" content="<?php echo  $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 ?>">
  
  <meta property="og:description" content="<?php echo $Sci_content; ?>">
    <meta name="description" content="<?php echo $Sci_content; ?>">
  <meta name="twitter:description" content="<?php echo $Sci_content; ?>">


 <meta name="twitter:image" content="/potf_admin/uploads/<?php echo $webbanner; ?>">
 <meta property="og:image" content="/potf_admin/uploads/<?php echo $webbanner; ?>">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="/potf_admin/uploads/<?php echo  $weblogo; ?>" type="image/x-icon">
<link rel="apple-touch-icon" href="/potf_admin/uploads/<?php echo  $weblogo; ?>">
<link rel="apple-touch-icon" sizes="72x72" href="/potf_admin/uploads/<?php echo  $weblogo; ?>">
<link rel="apple-touch-icon" sizes="114x114" href="/potf_admin/uploads/<?php echo  $weblogo; ?>">

<!-- end duralMetal -->

  <!-- ===== CSS Files ===== -->
  <link rel="stylesheet" href="css/style (2).css">
  <link rel="stylesheet" href="css/skins/color-1.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <!-- ====== Style Switcher ====== -->
  <link rel="stylesheet" href="css/skins/color-1.css" class="alternate-style" title="color-1" disabled>
  <link rel="stylesheet" href="css/skins/color-2.css" class="alternate-style" title="color-2" disabled>
  <link rel="stylesheet" href="css/skins/color-3.css" class="alternate-style" title="color-3" disabled>
  <link rel="stylesheet" href="css/skins/color-4.css" class="alternate-style" title="color-4" disabled>
  <link rel="stylesheet" href="css/skins/color-5.css" class="alternate-style" title="color-5" disabled>
  <link rel="stylesheet" href="css/style-switcher.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  
  <link rel="stylesheet" href="dural.package.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/jquery.maxlength.js"></script>
<script src="js/jquery.form.min.js"></script>
    <style>a{
    text-decoration: none !important;

    }</style>
</head>
<body>
  <!-- ===== Main Container Start ===== -->
  <div class="main-container">
    <!-- ===== Aside Start ===== -->
    <div class="aside">
      <div class="logo">
        <a href="./"><span>D</span>urallite</a>
      </div>
      <div class="nav-toggler">
        <span></span>
      </div>
      <ul class="nav">
        <li><a href="./#home" class="active"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="./#about"><i class="fa fa-user"></i> About</a></li>
        <li><a href="./#services"><i class="fa fa-list"></i>Services</a></li>
        <li><a href="./#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
        <li><a href="./#contact"><i class="fa fa-comments"></i>Contact</a></li>
      </ul>
    </div>
    <!-- ===== Aside End ===== -->



    <!-- ===== Main Content Start ===== -->
    <div class="main-content">


























<div class="my-3 row p-res justify-content-center">













<div class="col-lg-5 justify-content-center " style="flex-grow: 1; position: relative;">



<img src="/potf_admin/uploads/<?php echo $Sci_img1; ?>" alt="" style="height: 400px; width: 100%;">
<div class="p-3 text-center row justify-content-center align-items-center" style="font-weight: 900; color: white; font-size: larger; width: 80%; left: 10%; position: absolute; height: 200px; top: 300px;
background-color: rgb(0 255 43 / 50%);
    border-radius: 50px;
    box-shadow: 0px 0px 50px rgb(0 255 43);
border:0px solid rgb(255 0 0 / 0%);" >


<?php echo $Sci_topic; ?>
<strong><?php echo $visitors; ?> Views</strong>
</div>



<br><br><br>
<br><br><br>
<br><br><br>








<div class="row p-res text-karamo row">
<?php echo $Sci_content; ?>


</div>





<?php
} 
?>

<div class="shadow p-3 rounded row m-5">

<div class="p-3 shadow my-3" style="width: 150px; border-top-right-radius: 50px;border-bottom-right-radius: 50px;border-right: 5px solid red;">Comment</div>




  <form class="p-4 p-md-5 border rounded-3 bg-light" id="cmmt" action="comment_getto.php" method="post">

    <div class="p-2" id="datadiv"></div>
    <input type="hidden" name="id" value="<?php echo $get; ?>">

    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="mail">
      <label for="floatingInput">Email address</label>
    </div>
      <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingPassword" placeholder="name" name="name">
    <label for="floatingPassword">Name</label>
  </div> <div class="form-floating mb-3" >
    <input type="text" class="form-control" style="height: 100px !important;" id="floatingcontact" placeholder="Message Box" name="comment">
    <label for="floatingcontact">Message Box  </label>
  </div>
                   <button class="w-100 btn btn-lg btn-primary bg-twist fw-bold" type="submit">Comment</button>
</form>







</div>





<div class="shadow p-3 rounded row m-5">

  <div class="p-3 shadow my-3" style="width: 150px; border-top-right-radius: 50px;border-bottom-right-radius: 50px;border-right: 5px solid red;">Comments</div>
  
  <div id="cmts"></div>

<?php 




$sql="SELECT * FROM comments WHERE post_id=? order BY id DESC";
$row=$conn->prepare($sql);
$row->bindparam(1,$get);
$row->execute();

foreach ($row as $key) {


?>
  
  
  <div class="p-4 p-md-5 border rounded-3 bg-light my-2">

    <img src="images/emoji-neutral.svg" class="m-2 shadow" alt="" style="width: 50px;height: 50px;border-radius: 100px;border-right: 5px solid red; shape-outside: 70%;float: left;">
     <strong style="font-weight: 800;">
     <?php echo time_ago_in_php($key['date']); ?>
  |   By   <?php echo $key['mail']; ?>
    </strong>
    <p> <?php echo $key['comment']; ?></p>
        </div>
        
  
  <?php
}
?>
  
        
      </div>





</div>















<div class="col-lg-3 bg-light">


<?php

$Sci_con=$conn->prepare("SELECT * FROM blog order by id DESC LIMIT 40");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

    $Sci_id = $Sci_col['id'];
    $Sci_img1 = $Sci_col['img1'];
    $Sci_topic = substr($Sci_col['topic'],0,80);
    

?>  
<a href="readmode.php?id=<?php echo $Sci_id; ?>" style="color:black;"> 
    <div class="d-flex p-2 justify-content-start border-bottom">

                   <img src="/potf_admin/uploads/<?php echo $Sci_img1; ?>" alt="" style="width: 100px;height: 100px; " >
        <p class="p-2 text-end mx-2 row align-items-center fw-bold" style="font-size:10px;"><?php echo $Sci_topic; ?>...
</p>
        </div></a>
<?php

}
?>
      

</div>







</div>















</div>
    <!-- =====end Main Content Start ===== -->








































      <!-- ===== Style Switcher Start ===== -->
  <div class="style-switcher">
    <div class="style-switcher-toggler s-icon">
      <i class="fa fa-cog fa-spin"></i>
    </div>
    <div class="day-night s-icon">
      <i class="fa fa-list"></i>
    </div>
    <h4>Theme Colors</h4>
    <div class="colors">
      <span class="color-1" onclick="setActiveStyle('color-1')"></span>
      <span class="color-2" onclick="setActiveStyle('color-2')"></span>
      <span class="color-3" onclick="setActiveStyle('color-3')"></span>
      <span class="color-4" onclick="setActiveStyle('color-4')"></span>
      <span class="color-5" onclick="setActiveStyle('color-5')"></span>
    </div>
  </div>
  <!-- ===== Style Switcher End ===== -->
  <!-- ===== JS Files ===== -->
  <script>
$("#cmmt").on('submit',function(e){

  e.preventDefault();

$(this).ajaxSubmit({
success: function(data){
var f = 2;

if ( data == 2) {

var aa =new Audio('alert.mp3');
aa.play();
$('#datadiv').html('<p style="color:red;">All field must be filled before you submit </p> ');

}
  else{
    $('#datadiv').html('<p style="color:darkgreen;">Comment Successfully Made </p> ');

var aa =new Audio('alert.mp3');
aa.play();
$('#cmts').prepend('<br>' + data +'<br>');


  }
} 

});
});

</script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
  <script src="js/script.js"></script>
  <script src="js/style-switcher.js"></script>

</body>
</html>