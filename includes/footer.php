

<?php include "includes/config.php"; ?>

<?php
if(!defined('monalmWeb')){
  //exit("This is cannot open");
  session_start();
  $languge = '?lang='.$_SESSION['lang'];
header('location: /monlamit/index.php'. $languge);

die();
}
?>
<?php
$user_ip = getenv('REMOTE_ADDR');
// http://www.geoplugin.net/php.gp?ip=$user_ip
$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
$city = $geo["geoplugin_city"];
$region = $geo["geoplugin_region"];
$country = $geo["geoplugin_countryName"];

?>
<footer  style="background-color:#cecece4f position:fixed;bottom:0;"  id="footer">
    <div class="footer-top">
      

    <div class="container">
    <div class="border-bottom pt-2 pb-2 b-2 mb-4">
    <p style="color: #00000091; font-size: 14.3px;line-height: 25px;margin-bottom: 12px;">ང་ཚོའི་དམིགས་ཡུལ། </p>
    <p style="color: #00000091; font-size: 11.3px;line-height: 25px;margin-bottom: 12px;">1. བརྡ་འཕྲིན་གྱི་དུས་རབས་སུ་གྲགས་པའི་དུས་རབས་ཉེར་གཅིག་པ་འདིའི་ནང་། འཛམ་གླིང་གི་རྒྱལ་ཁབ་དང་མི་རིགས་ཚོས་རང་རང་གི་སྐད་ཡིག་དང་རིག་གནས་ཁག་བརྡ་འཕྲིན་གྱི་བརྒྱུད་ལམ་ལ་བརྟེན་ནས་སྲུང་སྐྱོང་སྤེལ་གསུམ་བྱེད་རྒྱུར་ཤུགས་སྣོན་རྒྱག་བཞིན་པ་ལྟར། བོད་ཀྱི་སྐད་ཡིག་རིག་གནས་ཁག་དང་འབྲེལ་བའི་མཉེན་ཆས་སྣ་ཚོགས་ཞིབ་འཇུག་དང་གསར་བཟོ་བྱས་ཏེ་བོད་ཀྱི་ཐུན་མོང་མ་ཡིན་པའི་སྐད་ཡིག་དང་རིག་གནས་ཁག་སྲུང་སྐྱོབ་དང་དར་སྤེལ་གཏོང་ཐབས་བྱ་རྒྱུ།</p>
    <p style="color: #00000091;font-size: 11.3px;line-height: 25px;margin-bottom: 12px;">2. དེང་རབས་ཀྱི་བརྡ་འཕྲིན་ལག་རྩལ་གྱི་འབྲེལ་ཡོད་ཤེས་བྱ་སྣ་ཚོགས་ལ་ཞིབ་འཇུག་བྱས་ཏེ་བོད་ཀྱི་སྐད་ཡིག་ཐོག་ནང་འདྲེན་བྱེད་ཐབས་བྱ་རྒྱུ།</p>
    <p style="color: #00000091;font-size: 11.3px;line-height: 25px;margin-bottom: 12px;">3. བརྡ་འཕྲིན་ལག་རྩལ་སྐོར་གྱི་གལ་ཆེའི་ཤེས་བྱ་ཁག་དྲིལ་བསྒྲགས་དང་། གློག་ཀླད་སྐོར་གྱི་ཟབ་སྦྱོང་སྤྲོད་རྒྱུ། གློག་ཀླད་ལས་རིགས་ཀྱི་ཆེད་ལས་པ་གསོ་སྐྱོང་བཅས་བྱེད་ཐབས་བྱ་རྒྱུ་བཅས་ཡིན།</p>
    
    </div>
      <div style="color: #86868b;" class="row footer-list" >
        <!-- <div class="column col-md-3 col-6"style="float:left;font-size: 11px;font-weight: 600;" >
          <h6><?php echo $lang['Projects'] ?></h6>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#"><?php echo $lang['Information Technology'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#"><?php echo $lang['Language'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#"><?php echo $lang['Religion'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#"><?php echo $lang['Culture'] ?></a></p>

          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#"><?php echo $lang['Education'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#"><?php echo $lang['History'] ?></a></p>
        </div> -->
        <!-- <div class="column col-md-3 col-6"style="float:left;font-size: 11px;font-weight: 600;">
          <h6><?php echo $lang['Services'] ?></h6>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="dictionary.php?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Online Dictionary'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="transliteration.php?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Online Transliteration'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Monlam Library'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Monlam Education'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="services.php?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Services'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Support'] ?></a></p>
          <h6><?php echo $lang['Accounts'] ?></h6>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['employee-account'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['membership-account'] ?></a></p>
          </div>
        <div class="column col-md-3 col-6"style="float:left;font-size: 11px;font-weight: 600;" > -->
          <!-- <h6><?php echo $lang['monlamit-values'] ?></h6>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['cooperative'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Education'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Rreligion'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Common Education'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Information Technology'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Conference'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Conversation'] ?></a></p>
          
          
          
          
        </div> -->
        <!-- <div class="column col-md-3 col-6" style="float:left;font-size: 11px;font-weight: 600;">
          <h6><?php echo $lang['About'] ?></h6>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['About Monlam IT'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['newsroom'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Leader ship'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Events'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Ambitious'] ?></a></p>
          <p style="padding: 3px 0px 6px 0px;line-height: 20px;margin: 0px;"><a href="#?lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['Connect'] ?></a></p>
        </div> -->
        <div style="font-size: 12.3px;" class="border-top pt-2 pb-2 mt-5">
        <?php if($_SESSION['lang'] == "en"){
          
          ?>
         © <?php echo $lang['Copyright']; ?> 2024 <strong><span><?php echo $lang['title']; ?></span></strong><?php echo $lang['All Rights Reserved']; ?>
       <?php 
       }else if ($_SESSION['lang'] == "tb"){
         
      
       ?>
       <strong><span><?php echo $lang['monlamit']; ?></span></strong><?php echo $lang['All Rights Reserved'];?>©  2022 <?php echo $lang['have-copyright']; ?> 
       <?php 
       }else{
         
         $_SESSION['lang'] = "en";
       }
       ?>
       <span style="border-left: 1px solid #d8d8d8;padding-right: 20px;padding-left: 20px;"><a href="https://www.monlamit.com">Monlam IT</a></span>
       <!-- <span style="border-left: 1px solid #d8d8d8;padding-right: 20px;padding-left: 20px;">Site Map</span> -->
       <span style="border-left: 1px solid #d8d8d8;padding-right: 10px;padding-left: 20px; ">
       <!-- <span style="padding-right: 20px;padding-left: 10px; "><?php echo $lang['Language'] ?></span> -->
       <!-- <span class="dropdown-toggle">
              <a style="width: 50px;"  href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img style="width: 22px; height: 22px;"  src="assets/img/svg/languge.svg" alt="">
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="?lang=tb<?php 
                echo $getlinks3;?>">བོད་ཡིག</a></li>
                <li><a class="dropdown-item" href="?lang=en<?php 
                echo $getlinks3;?>">Englis</a></li>
                
              </ul>
            </span></span> -->
       
       <span style="border-left: 1px solid #d8d8d8;padding-right: 20px;padding-left: 20px; float: right;">
       <?php
       global $country;
        if($country){ ?>
        <span style="font-size: 18px;padding-right: 10px;"><i class="bi bi-geo-alt"></i></span>
        <?php echo $country;}else{} ?>
       </span>

        </div>
      </div>
      
      </div>
      
    </div>
  </footer>
  </body>
</html>
<script src="assets/js/jquery.min.js" > </script>