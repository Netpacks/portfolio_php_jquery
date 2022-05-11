

<?php 
require 'robot.php';
@import('cord_sql');  
$Sci_con=$conn->prepare("SELECT * FROM webd");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

$webname = $Sci_col['webname'];
$weblogo = $Sci_col['img2'];
$webbanner = $Sci_col['img1'];
$prof = $Sci_col['img3'];
 $description = "";
}

$Sci_connno=$conn->prepare("SELECT * FROM cv");
$Sci_connno->execute();
foreach ($Sci_connno as $Sci_collll) {

$cv = $Sci_collll['cvfile'];
}

$DURAL_SQL="SELECT * FROM soci";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
foreach ($DURAL as $key) {


   $wats = $key['wat'];
   $faceb = $key['fb'];
$insta = $key['inst'];
$phone = $key['Phone'];
$twee = $key['TWEETER'];
$linke = $key['linke'];
$email = $key['email'];
$address = $key['adress'];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $webname; ?> Packages</title>
    <!-- durallMetal -->


    <meta name="author" content="<?php echo $webname; ?>">
  <meta name="googlebot" content="index, follow">
  <meta name="robots" content="index, follow">
 <!-- document-specific social tags -->
  <meta property="og:title" content="<?php echo $webname; ?> FC page">
   <meta name="twitter:title" content="<?php echo $webname; ?> FC page">
 <meta property="og:url" content="<?php echo  $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 ?>">   
  <meta name="twitter:url" content="<?php echo  $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 ?>">
  
  <meta property="og:description" content="<?php echo $description; ?>">
    <meta name="description" content="<?php echo $description; ?>">
  <meta name="twitter:description" content="<?php echo $description; ?>">


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
  <style>


.shadow{


  box-shadow: inset 2px -1px 5px 0px black;
  padding:15px;
  border-radius: 20px;
}
  </style>
</head>
<body>
  <!-- ===== Main Container Start ===== -->
  <div class="main-container">
    <!-- ===== Aside Start ===== -->
    <div class="aside">
      <div class="logo">
        <a href="#"><span>D</span>urallite</a>
      </div>
      <div class="nav-toggler">
        <span></span>
      </div>
      <ul class="nav">
        <li><a href="#home" class="active"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#about"><i class="fa fa-user"></i> About</a></li>
        <li><a href="#services"><i class="fa fa-list"></i>Services</a></li>
        <li><a href="#portfolio"><i class="fa fa-briefcase"></i>Portfolio</a></li>
        <li><a href="#contact"><i class="fa fa-comments"></i>Contact</a></li>
      </ul>
    </div>
    <!-- ===== Aside End ===== -->
    <!-- ===== Main Content Start ===== -->
    <div class="main-content">
      <!-- ===== Home Section Start ===== -->
      <section class="home section" id="home">
        <div class="container">
          <div class="row">
            <div class="home-info padd-15">
              <h3 class="hello">Hello, my name is <span class="name">Ademola Aduragbemi a.k.a Durallite</span></h3>
              <h3 class="my-profession">I' m a <span class="typing">web Developer</span></h3>
              <p>Durallite Is A Web Developer That Base On FrontEnd And Backend Developement It Has Been Work Hard For More Than 5 Years Now Mostly Work With Team And Developer Groups and many more...</p>
              <a href="#contact" class="btn hire-me">Hire Me</a>
            </div>
            <div class="home-img padd-15">
              <img src="/potf_admin/uploads/<?php echo $prof; ?>" alt="<?php echo $webname; ?>@Profile" style="margin:auto; max-width:80% !important;">
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Home Section End ===== -->
      <!-- ===== About Section Start ===== -->
      <section class="about section" id="about">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="row">
            <div class="about-content padd-15">
              <div class="row">
                <div class="about-text padd-15">
                  <h3>I'm Web Developer which work as a <span>FrontEnd and Backend </span> Developer</h3>
<p> Durallite is a hardworking guy that work in order to make the growth of a team or organisation despite of my experience i learn more in order to meet the standard 
  of all new
   and advance thing in the language am specialise in,
   I have even solve problem for some groups which is not understandable for them to solve , I build responsive website and mostly fullstack with HTML, CSS,BOOTSRAPP,JQUERY,AJAX and Php,
   I always study new security  about my language and make sure my website is running on latest version of the language,  
   I always go online to discorver new way of harking in order to secure my website and make my user feel happy am a 
   creative guy in the world of WebDevelopement and am working hard to sartisfy my custormers.  </p>
                </div>
              </div>
              <div class="row">
                <div class="personal-info padd-15">
                  <div class="row">
                    <div class="info-item padd-15">
                      <p>Birthday : <span>2000 feb 28</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Age : <span>22</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Website : <span>www.durallite.epizy.com</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Email : <span><?php echo $email; ?></span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>language : <span>English , Yoruba , Pidgin</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Phone : <span><?php echo $phone; ?></span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>City : <span>lagos</span></p>
                    </div>
                    <div class="info-item padd-15">
                      <p>Freelance : <span>Available</span></p>
                    </div>
                  </div>
                  <div class="row">
                    <div class="buttons padd-15">
                      <a href="/Potf_admin/docu/<?php echo $cv; ?>" class="btn" download>Download MyCV</a>
                      <a href="#contact" class="btn hire-me">Hire Me</a>
                    </div>
                  </div>
                </div>
                <div class="skills padd-15">
                  <div class="row">
                    <div class="skill-item padd-15">
                      <h5>JS</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 85%;"></div>
                        <div class="skill-percent">85%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>PHP</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 95%;"></div>
                        <div class="skill-percent">95%</div>
                      </div>
                    </div> 
                    <div class="skill-item padd-15">
                      <h5>HTML</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 98%;"></div>
                        <div class="skill-percent">98%</div>
                      </div>
                    </div> 
                    <div class="skill-item padd-15">
                      <h5>CSS</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 85%;"></div>
                        <div class="skill-percent">85%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>JQUERY</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 98%;"></div>
                        <div class="skill-percent">98%</div>
                      </div>
                    </div>
                     <div class="skill-item padd-15">
                      <h5>AJAX</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 98%;"></div>
                        <div class="skill-percent">98%</div>
                      </div>
                    </div> <div class="skill-item padd-15">
                      <h5>Typescript</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 5%;"></div>
                        <div class="skill-percent">5%</div>
                      </div>
                    </div>
                    <div class="skill-item padd-15">
                      <h5>BOOTSTRAP</h5>
                      <div class="progress">
                        <div class="progress-in" style="width: 76%;"></div>
                        <div class="skill-percent">76%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="education padd-15">
                  <h3 class="title">Education</h3>
                  <div class="row">
                    <div class="timeline-box padd-15">
                      <div class="timeline shadow-dark">
                        <!-- ===== timeline item ===== -->
                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2017 - 2018
                          </h3>
                          <h4 class="timeline-title">Study Html and Css in Ica </h4>
                          <p class="timeline-text"> I study Html and Css in IBADAN CITY ACADEMY By the package of Google training network in our school to expose student to computer world </p>
                        </div>
                             <!-- ===== timeline item ===== -->
                             <div class="timeline-item">
                              <div class="circle-dot"></div>
                              <h3 class="timeline-date">
                                <i class="fa fa-calendar"></i> 2018 - 2019
                              </h3>
                              <h4 class="timeline-title">Study Js and Bootsrapp @ W3School</h4>
                              <p class="timeline-text"> After being expert in html css i now go to the world to learn js and Bootsrapp in order to make my work more strong and responsive</p>
                            </div>
                                 <!-- ===== timeline item ===== -->
                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2019 - 2020
                          </h3>
                          <h4 class="timeline-title">Study JQUERY,Ajax and php , { Typscript in advance } @ W3School and more</h4>
                          <p class="timeline-text"> Am now able to do sucessfull template but i wana become fullstack, this is what makes me go for php and jquery for some special and Powerful Web Application By js Framework in order to make My work perfect in all browsers </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="experience padd-15">
                  <h3 class="title">Experience</h3>
                  <div class="row">
                    <div class="timeline-box padd-15">
                      <div class="timeline shadow-dark">
                        <!-- ===== timeline item ===== -->
                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2017 - 2018
                          </h3>
                          <h4 class="timeline-title">Developing my self</h4>
                          <p class="timeline-text"> I work with many guys to develope my self and i being solving many frontend issue for many project given to my friend because then have not get any project</p>
                        </div>
                             <!-- ===== timeline item ===== -->
                             <div class="timeline-item">
                              <div class="circle-dot"></div>
                              <h3 class="timeline-date">
                                <i class="fa fa-calendar"></i> 2018 - 2019
                              </h3>
                              <h4 class="timeline-title">Developing my self More and more</h4>
                              <p class="timeline-text"> Am still working with my guys to develope my self and am still solving many Advance frontend issue for many project given to my friend because then have not get any project</p>
                            </div>
                                 <!-- ===== timeline item ===== -->
                        <div class="timeline-item">
                          <div class="circle-dot"></div>
                          <h3 class="timeline-date">
                            <i class="fa fa-calendar"></i> 2019 - 2020
                          </h3>
                          <h4 class="timeline-title">Developing my self in fullstack Projects</h4>
                          <p class="timeline-text"> Now i being geting some works from my friends and family, now i can develope any web with no excuse no error And even i solve issues for website to make some cash..  </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== About Section End ===== -->
      <!-- ===== Services Section Start ===== -->
      <section class="service section" id="services">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Services</h2>
            </div>
          </div>
          <div class="row">




          
<?php


$DURAL_SQL="SELECT * FROM skill";

$DURAL=$conn->prepare($DURAL_SQL);
$DURAL->execute();
    foreach ($DURAL as $Sci_col) {

$skillogo = $Sci_col['img1'];
$skillabel = $Sci_col['name'];


?>
            <!-- ===== Service item Start ====== -->
            <div class="service-item padd-15">
              <div class="service-item-inner">
                <div class="icon">
              
                <i>  <img src="/potf_admin/uploads/<?php echo $skillogo; ?>" style="width:50px; height;50px;border-radius: 50px;" ></i>
                </div>
                <h4><?php echo $skillabel; ?></h4>
              </div>
            </div>
            <!-- ===== Service item End ====== -->

<?php
    }
        ?>
      
          </div>
        </div>
      </section>
      <!-- ===== Services Section End ===== -->








      <!-- ===== Portfolio Section Start ===== -->
      <section class="portfolio section" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Fullstack Projects {{ Php }}</h2>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-heading padd-15">
              <h2>My Last Fullstack Projects :</h2>
            </div>
          </div>
          <div class="row">

     


          <?php


$Sci_con=$conn->prepare("SELECT * FROM projects WHERE cat='project' order by id DESC");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

    $Sci_img = $Sci_col['banner'];
    $folder = $Sci_col['folder'];
    $conte = substr($Sci_col['proNmae'],0,120);






?>
             <!-- ====== portfolio item start ====== -->
        
             <a href="/Potf_admin/<?php echo $folder."/".$folder; ?>">     <div class="portfolio-item padd-15">
              <div class="portfolio-item-inner shadow-dark">
                <div class="portfolio-img">
                <a href="/Potf_admin/<?php echo $folder."/".$folder; ?>"> <img src="/potf_admin/uploads/<?php echo $Sci_img; ?>" alt=""></a>
                </div>
            <a href="/Potf_admin/<?php echo $folder."/".$folder; ?>" style="color:black;"> 
                <div class="" style="font-weight:900; padding-top:15px; padding-bottom:15px; text-align:center;">
                    <?php echo $conte; ?>
                    <p>By Durallite</p>
                </div></a>
            </div>              </div>
</a>
            <!-- ====== portfolio item End ====== -->



            <?php

}


?>


          </div>
        </div>
      </section>
      <!-- ===== Portfolio Section End ===== -->





















      <!-- ===== Portfolio Section Start ===== -->
      <section class="portfolio section" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>FrontEnd Projects</h2>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-heading padd-15">
              <h2>My Last FrontEnd Projects :</h2>
            </div>
          </div>
          <div class="row">




<?php


$Sci_con=$conn->prepare("SELECT * FROM projects WHERE cat='amazing' order by id DESC");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

    $Sci_img = $Sci_col['banner'];
    $folder = $Sci_col['folder'];
   $conte = substr($Sci_col['proNmae'],0,120);





?>
             <!-- ====== portfolio item start ====== -->
        
             <a href="/Potf_admin/<?php echo $folder."/".$folder; ?>">     <div class="portfolio-item padd-15">
              <div class="portfolio-item-inner shadow-dark">
                <div class="portfolio-img">
                <a href="/Potf_admin/<?php echo $folder."/".$folder; ?>"> <img src="/potf_admin/uploads/<?php echo $Sci_img; ?>" alt=""></a>
                </div>
            <a href="/Potf_admin/<?php echo $folder."/".$folder; ?>" style="color:black;"> 
                <div class="" style="font-weight:900; padding-top:15px; padding-bottom:15px; text-align:center;">
                    <?php echo $conte; ?>
                    <p>By Durallite</p>
                </div></a>
            </div>              </div>
</a>
            <!-- ====== portfolio item End ====== -->



            <?php

}


?>
          </div>
        </div>
      </section>
      <!-- ===== Portfolio Section End ===== -->















      








      <!-- ===== Portfolio Section Start ===== -->
      <section class="portfolio section" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>BLOGS</h2>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-heading padd-15">
              <h2 class="fw-bold">My Tutorial Blog Posts :</h2>
            </div>
          </div>
          <div class="row">
            <!-- ====== portfolio item start ====== -->
            
    <?php

$Sci_con=$conn->prepare("SELECT * FROM blog order by id ");
$Sci_con->execute();
foreach ($Sci_con as $Sci_col) {

    $Sci_id = $Sci_col['id'];
    $Sci_img1 = $Sci_col['img1'];
    $Sci_topic = substr($Sci_col['topic'],0,30);
    $Sci_content = substr($Sci_col['textbox'],0,120);
    $Sci_date = $Sci_col['date'];
    

?> 
            <div class="portfolio-item padd-15">
              <div class="portfolio-item-inner shadow-dark">
                <div class="portfolio-img">
                  <a href="readmode.php?id=<?php echo $Sci_id; ?>"> <img src="/potf_admin/uploads/<?php echo $Sci_img1; ?>" alt="" style="height:200px;">
                </a></div>
<a href="readmode.php?id=<?php echo $Sci_id; ?>" style="color:black;"> 
                <div class="" style="font-weight:900; padding-top:15px; padding-bottom:15px; text-align:center;">
                    <?php echo $Sci_content; ?>
                    <p>By Durallite</p>
                </div></a>
              </div>
            </div>
            <?php
}
            ?>
            <!-- ====== portfolio item End ====== -->
             
          </div>
        </div>
      </section>
      <!-- ===== Portfolio Section End ===== -->












      <!-- ===== Contact Section Start ===== -->
      <section class="contact section" id="contact">
        <div class="container">
          <div class="row">
            <div class="section-title padd-15">
              <h2>Contact Me</h2>
            </div>
          </div>
          <h3 class="contact-title padd-15">Have You Any Questions ?</h3>
          <h4 class="contact-sub-title padd-15">I'M AT YOUR SERVICES</h4>
          <div class="row">
            <!-- ===== Contact info item start ====== -->
            <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-phone"></i></div>
              <h4>Call Us On</h4>
              <p><?php  echo str_replace(' , ','<br>', $phone); ?></p>
            </div>
            <!-- ===== Contact info item end ====== -->
             <!-- ===== Contact info item start ====== -->
             <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4>Office</h4>
              <p><?php  echo str_replace(' , ','<br>', $address); ?></p>
            </div>
            <!-- ===== Contact info item end ====== -->
             <!-- ===== Contact info item start ====== -->
             <div class="contact-info-item padd-15">
              <div class="icon"><i class="fa fa-envelope"></i></div>
              <h4>Email</h4>
              <p><?php echo $email; ?></p>
            </div>
            <!-- ===== Contact info item end ====== -->
             <!-- ===== Contact info item start ====== -->
             <div class="contact-info-item padd-15">
             <a href="<?php echo $linke; ?>"><div class="icon"><i class="fa fa-linkedin"></i></div>
              <h4>linkedin</h4></a>
            </div>
            <!-- ===== Contact info item end ====== -->
          </div>





<!-- social details -->



<div class="row">
            <!-- ===== Contact info item start ====== -->
            <div class="contact-info-item padd-15">
              
                <a href="<?php echo $insta; ?>"> <div class="icon shadow"><i class="fa fa-instagram"></i></div>
                            <h4>instagram</h4></a>

                          </div>
            <!-- ===== Contact info item end ====== -->
             <!-- ===== Contact info item start ====== -->
             <div class="contact-info-item padd-15">
              
                 <a href="<?php echo $faceb; ?>"> <div class="icon shadow"><i class="fa fa-facebook"></i></div>
                            <h4>Facebook</h4></a>

              </div>
            <!-- ===== Contact info item end ====== -->
             <!-- ===== Contact info item start ====== -->
             <div class="contact-info-item padd-15">
              
                 <a href="<?php echo $twee; ?>"> <div class="icon shadow"><i class="fa fa-twitter"></i></div>
                            <h4>twitter</h4></a>

              </div>
            <!-- ===== Contact info item end ====== -->
             <!-- ===== Contact info item start ====== -->
             <div class="contact-info-item padd-15">
              
                 <a href="<?php echo $wats; ?>"> <div class="icon shadow"><i class="fa fa-whatsapp"></i></div>
              <h4>whatsapp</h4></a>
            </div>
            <!-- ===== Contact info item end ====== -->
          </div>

<!-- end of social details -->




          <h3 class="contact-title padd-15">SEND ME AN EMAIL</h3>
          <h4 class="contact-sub-title padd-15">I'M VERY REady TO REPLY TO MESSAGES</h4>
          <!-- ====== Contact Form ====== -->
          <div class="row">
            <div class="contact-form padd-15">
              <div class="row">
                <div class="form-item col-6 padd-15">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                </div>
                <div class="form-item col-6 padd-15">
                  <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-item col-12 padd-15">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Subject">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-item col-12 padd-15">
                  <div class="form-group">
                    <textarea name="" class="form-control" id=""  placeholder="Message"></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="form-item col-12 padd-15">
                  <button type="submit" class="btn">Send Message</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ===== Contact Section End ===== -->
    </div>
    <!-- ===== Main Content End ===== -->
  </div>
  <!-- ===== Main Container End ===== -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js" referrerpolicy="no-referrer"></script>
  <script src="js/script.js"></script>
  <script src="js/style-switcher.js"></script>
</body>
</html>