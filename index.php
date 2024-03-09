<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        

    <meta name="description" content="Monlam IT webset">
  <META http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="author" content="Lobsang Monlam">
    <meta name="generator" content="1.0.0">
    <title><?php echo $lang['title'] ?></title>
   
    <link rel="icon" type="image/png" href="assets/img/favicon-dark.png" sizes="16x16">
    <!-- Custom styles for this template -->
    
    <link href="assets/vendor/fonts/monlm-fonts.min.css" rel="stylesheet">  
    <link href="assets/vendor/fonts/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
   
   
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">


    <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">


    

    <!-- Template Main CSS File -->
      <link href="assets/css/style.css" rel="stylesheet">  

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>




    

 <!-- Bootstrap core CSS -->


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  
</style>




<link rel="stylesheet" href="files/css/basic.css" />

<style>
* {
  box-sizing: border-box;
}

a.link {
    text-decoration: none;
    color: #2196F3;
}
p{
    text-align: justify;
}
form.example input[type=search] {
    padding: 10px;
    font-size: 19px;
    border: 1px solid #dedcdc;
    font-family: 'Monlam';
    line-height: 38px;
    float: left;
    width: 80%;
    background: #f1f1f1;
    border-radius: 6px 0px 0px 6px;
}

form.example button {
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 19px;
    line-height: 38px;
    border: 1px solid #797777;
    border-radius: 0px 6px 6px 0px;
    border-left: none;
    cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
li {
    list-style-type: none;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 2px;
    padding-bottom: 2px;
    
}
li:hover{
    cursor: pointer;
    background-color: #0000002e;
}
div#dicList {
    background-color: #f1f1f1;
    border-radius: 0px 0px 6px 6px;
    padding: 5px;
    /* width: 83.3%; */
    /* margin-top: 43px; */
    position: absolute;
    list-style-type: none;
    padding-left: 0px;
    padding-right: 0px;
    z-index: 999;
    /* left: 124px; */
    box-shadow: 2px 5px 6px rgb(30 50 60 / 20%);
    -webkit-box-shadow: 2px 5px 6px rgb(30 50 60 / 20%);
    -moz-box-shadow: 2px 5px 6px rgb(30 50 60 / 20%);
}
ul.list-unstyle {
    padding: 0px;
}
.search-dic{
    width: 100% !important;
}
/* @media (max-width: 700px){
    div#dicList {
        background-color: #f1f1f1;
    border-radius: 0px 0px 6px 6px;
    padding: 5px;
    width: 100%;
    /* margin-top: 43px; */
    position: absolute;
    list-style-type: none;
    padding-left: 0px;
    padding-right: 0px;
    z-index: 999;
    left: 0px;
    }
    .search-dic{width: 65% !important;}

} */
/* @media (min-width: 700px) {
    select#dictionarys {
    width: 90px;
} */
    
}
.list.container.py-4.body-dic {
    min-height: 500px;
}
div:empty {
  display:none;
}
input:focus-visible {
    border-color: #797777;
    
}
#startButton {
      display: block;
    }

#quiz {
      display: none;
 }
 button.btn.play-word{
    font-size: 23px;
    padding: 4px 4px 0px 4px;
    line-height: 20px;
    width: 35px;
    border-radius: 20px;
    
 }
 button.btn.play-word:hover {
    background-color: #e6e6e6;
    border-radius: 20px;
    color: #09617b;

}
button#submit_search:hover {
    color: #2d2c2b;
}
.dic-name {
    background-color: #ecf0f3;
    padding: 0px 6px 0px 6px;
    border-radius: 4px;
    color: #5b95b7;
    margin-right: 6px;
    font-size: 12px;
    border: 1px solid #99999947;
}
/* ul.list-unstyle {
    padding: 0px;
    overflow-y: scroll;
    height: 200px;
} */
.active{
  font-weight: bold;
}
.accordion {
	width: 500px;
	border: 1px solid #ccc;
	border-bottom: none;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.editing
{
	border: 1px solid black;
	width:270px;
	background-color: #eee;
}
.selected {
    background-color: #00c4ff;
}
.search-btn:hover {
    background-color: #c7c7c7;
    color: black;
}
.not-n{
    border-radius: 4px;
    padding-left: 3px;
    margin-right: 2px;
    position: relative;
    border: 1px solid #0000001a;
    font-weight: 600;
    color: #0b7ea1;
}
::-webkit-input-placeholder { /* Edge */
  color: #42424240 !important;
}
:-ms-input-placeholder { /* Internet Explorer */
  color: #42424240 !important;
}
::placeholder {
  color: #42424240 !important;
}
.dic-mn{
    font-size: 20px;
    color: lightgray;
    border: 1px solid #99999985;
}
.dic-mn:hover{
   
    background-color: #6694af;
    color: white;
}
#dic-mn-bodyg {
    background-color: #062f4e !important;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    height: 100%;
    width: 281px;
    transition: left 15.5s;
   
    z-index: 99999;
     display: none; 
     
    

}
.dic-mn-bodyg.d-flex.flex-column.flex-shrink-0.p-3.text-white.bg-dark {
    background-color: #062f4e !important;
}
.note1{	font-family: "Monlam";	    
    color: #504f4f;	    
    font-size: 12px;	   
    border-top: solid #a7aab05e 1px;
    margin-top: 20px;
    padding-top: 25px;
}
.refs{
    color: #a2a4aa;
    position: relative;
    top: 35px;
    background-color: #f9fafb;
    max-width: 150px;
    
    border-radius: 5px;
    text-align: center;
    padding-top: 4px;
}
div {
    font-size: 15px;
}
</style> 


<script>
    function mydicmn() {
  const x = document.getElementById("dic-mn-bodyg");
  if (x.style.display !== "none") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
function dicInfo(){
    
   
// let result = text.link("about.php");
// document.getElementById("main-dic-body").innerHTML = result;
// result = "<a href='index.php'>" + text + "</a>";
// document.getElementById("main-dic-body").innerHTML = result;

$(document).ready(function(){
  
    $("#main-dic-bod").load('url to about.php');
  
});
}

function changeStyle1(){  
       
        document.body.style.backgroundColor = '#f7f3d3';
        document.element.getElementsByClassName("dic-body-bag").style.backgroundColor = '#f7f3d3';       
}
function changeStyle2(){  
       
       document.body.style.backgroundColor = 'rgb(245 238 237)';
       document.element.getElementsByClassName("dic-body-bag").style.backgroundColor = 'rgb(245 238 237)';       
}
function changeStyle3(){  
       
       document.body.style.backgroundColor = 'rgb(255 255 255)';
       document.element.getElementsByClassName("dic-body-bag").style.backgroundColor = 'rgb(255 255 255)';       
}
function changeStyle4(){  
       
       document.body.style.backgroundColor = 'rgb(231 241 234)';
       document.element.getElementsByClassName("dic-body-bag").style.backgroundColor = 'rgb(231 241 234)';       
}
function changeStyle5(){  
       
       document.body.style.backgroundColor = 'rgb(235 244 245)';
       document.element.getElementsByClassName("dic-body-bag").style.backgroundColor = 'rgb(235 244 245)';       
}
</script>



<div id="dic-mn-bodyg" style="display: none;" class="dic-mn-bodyg"> 
<div  class="dic-mn-bodyg d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-6"><img src="assets/img/touch-icon-40-lt.png" class="main-logo" width="30" height="30">ཚིག་མཛོད།</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      
      <li>
        <a href="about.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          <i class="bi bi-info-circle"></i> ངོ་སྤྲོད།
        </a>
      </li>
      <li>
        <a href="editors.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          <i class="bi bi-people-fill"></i> རྩོམ་སྒྲིག་སྡེ་ཁག
        </a>
      </li>
      <li>
        <a href="thanks.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          <i class="bi bi-hand-thumbs-up"></i> ཐུགས་རྗེ་ཆེ་ཞུ།
        </a>
      </li>
      
      <hr>
      <li>
        <a href="#" class="nav-link text-white">
          <span style="font-size: 25px; color: gray;margin-right: 12px;"><i class="bi bi-file-earmark-font-fill"></i></span><span style=" color: gray;">Font Size</span>
   
          <div class="ms-auto">
          <button id="decrease-plugin-ac" style="font-size: 25px;color: #b3b3b3;" type="button" class="btn btn-link btn-sm float-left"><i class="bi bi-dash-square"></i></button>
          <button id="normal-plugin-ac" style="font-size: 14px; color: #b3b3b3;margin-left: 5px;position: relative;border: 1px solid;top: -3px; height: 25px;text-decoration: none;" type="button" class="btn btn-link btn-sm float-center">རང་འཇགས།</button>
          <button id="increase-plugin-ac" style="font-size: 25px;color: #b3b3b3;float: right;" type="button" class="btn btn-link btn-sm float-right" ><i class="bi bi-plus-square"></i></button>
          </div>
          
         
        </a>
      </li>
      <hr>
      <li>
      <div class="p-2">
      <span style="font-size: 25px; color: gray; margin-right: 12px;position: relative;
    top: 5px;"><i class="bi bi-palette-fill"></i></span><span style=" color: gray;">Color</span>
      </div>
    <div>
    <button onclick="changeStyle1()" style="height: 20px; width: 25px;color: #c78888;background-color: #f7f3d3;margin-right: 15px;" type="button" class="btn btn-secondary  btn-sm "></button>
    <button onclick="changeStyle2()" style="height: 20px; width: 25px;color: #c78888;background-color: #f5d9d4;margin-right: 15px;" type="button" class="btn btn-secondary  btn-sm "></button>
    <button onclick="changeStyle3()"style="height: 20px; width: 25px;color: #c78888;background-color: #ffffff;margin-right: 15px;" type="button" class="btn btn-secondary  btn-sm "></button>
    <button onclick="changeStyle4()"style="height: 20px; width: 25px;color: #c78888;background-color: #b7f5ca;margin-right: 15px;" type="button" class="btn  btn-sm float-right" ></button>
    <button  onclick="changeStyle5()"style="height: 20px; width: 25px;color: #c78888;background-color: #dbf6f9; margin-right:15px;" type="button" class="btn  btn-sm " ></button>
    </div>
      </li>
      <hr>      
    </ul>
    
  </div>

  </div>

<div class="navbar navbar-expand-lg  p-0 " style="text-align: center;background-color: #062f4e;color: #fdf6b8; top: -8px;" >
<div class="container p-2" style="padding-top: 100px !important;position: relative" >
    <div style="margin-left: auto;margin-right: auto;"><h1><span id="dicNames">སྨོན་ལམ་ཚིག་མཛོད་ཆེན་མོ།</span></h1></div>
<span style="position: absolute;right: 6px;"><button type="button" class="dic-mn btn btn-sm btn-link" onclick="mydicmn()"><i class="bi bi-list"></i></button></span>
<span style="position: absolute;left: 6px;"><button type="button" class="dic-mn btn btn-sm btn-link" onclick="mydicmn()"><i class="bi bi-list"></i></button></span>


<script>
    
function myFunction()
{
    var inputValue=document.getElementById('dictionarys').value;
    if(inputValue == "བོད་ཡིག")
    {
        document.getElementById('dicNames').innerHTML="སྨོན་ལམ་ཚིག་མཛོད་ཆེན་མོ།"; 
    }
    if(inputValue == "དབྱིན་བོད།")
    {
        document.getElementById('dicNames').innerHTML="དབྱིན་བོད་ཕྱོགས་བསྡུས་ཚིག་མཛོད།"; 
    }
    if(inputValue == "བོད་དབྱིན།")
    {
        document.getElementById('dicNames').innerHTML="བོད་དབྱིན་ཕྱོགས་བསྡུས་ཚིག་མཛོད།"; 
    }
    if(inputValue == "བོད་ལེཊ།")
    {
        document.getElementById('dicNames').innerHTML="བོད་ཡིག་ལེགས་སྦྱར་ཕྱོགས་བསྡུས་ཚིག་མཛོད།"; 
    }
       
    
}

</script>
</div>    



</div>
<div style="background-color: #062f4e;top: -8px;"class="navbar navbar-expand-lg  p-1 ">

<!-- འཚོལ་ཞིབ་སྡེ་ཚན། -->
<div class="container" style="margin-bottom: 10px;">
        <form action=""autocomplete="off" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12" method="post">
            <div class="row bg-white border-0 rounded-3">
            <div style="background-color: #fdf6b8;border-radius: 6px 0px 0px 6px !important;" class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 col-xxl-2 border-end border-bottom border-start-0 border-top-0 rounded-0" >
            <select class="form-select border-0" onclick="myFunction()" id="dictionarys" name="dictionarys" style="line-height: 30px;background-color: #fdf6b8;">                      
    
                <?php 
                $dicOption ="བོད་ཡིག";
                    if(isset($_POST['submit_search']))
                    {
                        $dicOption = $_POST['dictionarys'];    
                        print "<option style='background-color: white;font-size: 15px;line-height: 35px;' value='$dicOption'>$dicOption</option>
                        ";
                    }
                    ?>
                <option style="background-color: white;font-size: 14px;line-height: 28px;" value="བོད་ཡིག">བོད་ཡིག</option>
                <option style="background-color: white;font-size: 14px;line-height: 28px;" value="བོད་དབྱིན།">བོད་དབྱིན།</option>
                <option style="background-color: white;font-size: 14px;line-height: 28px;" value="དབྱིན་བོད།">དབྱིན་བོད།</option>
                <option style="background-color: white;font-size: 14px;line-height: 28px;" value="བོད་ལེཊ།">བོད་ལེཊ།</option>
                <!-- <option style="background-color: white;font-size: 14px;line-height: 28px;" value="བོད་རྒྱ།">བོད་རྒྱ།</option>
                <option style="background-color: white;font-size: 14px;line-height: 28px;" value="རྒྱ་བོད།">རྒྱ་བོད།</option>
                <option style="background-color: white;font-size: 14px;line-height: 28px;" value="འཇར་བོད།">འཇར་བོད།</option>
                <option style="background-color: white;font-size: 14px;line-height: 28px;" value="བོད་འཇར།">བོད་འཇར།</option> -->
                </select>
                </div>
                <div style="position: relative;padding: 0px;" class="col-10 col-sm-11 col-md-9 col-lg-9 col-xl-9 col-xxl-9" >
                <input   type="text" list="list-dic" class=" border-0 search-dic form-control" name="dic-keyword" id="dickeyword" placeholder="འཚོལ་ཞིབ་གནང་རོགས་..." >
                
                <div class="col-12 bg-white border-top" style="position:absolute" id="dicList"></div>
                </div>
            
                <div  class="search-btn col-2 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1  border-start border-bottom-0 border-bottom-0 border-end-0 border-top-0 rounded-0"  >
                    <button  class="search-btn btn border-0  btn-outline-secondary" type="submit" name="submit_search" id="submit_search" style="position: relative;top: 2px;font-size: 18px;"><i class="bi bi-search"></i></button>

                </div>
            
            </div>
        
         </form> 
    </div>
</div>





      
        



<script src="assets/vendor/jquery/jquery.min.js"></script>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>   -->
<!-- <script src="assets/vendor/jquery/bootstrap3-typeahead.min.js"></script> -->
 
  


<script>
 
    $(document).ready(function(){
        myFunction();
        
        $('#dickeyword').keyup(function(){
            var quer = $(this).val();
            var dico = $('#dictionarys').val();
            
            if(quer != '')
            {
                $.ajax({
                    url:"files/search_dic.php",
                    method: "POST",
                    data:{quer:quer, dico:dico}, 
                                       
                    success:function(data)
                    {
                       $('#dicList').fadeIn();
                       $('#dicList').html(data);
                       //$('.list-dic').focus();
                     
                       document.getElementById("dickeyword").focus();

                    }                  
                });

            }
            else{
                $('#dicList').fadeOut();
               // $('#dicList').fadeIn();
               // $('#dicList').html("<span style='padding-left: 10px;'>ཡི་གེ་གཅིག་ལས་མང་བ་འབྲི་དགོས།</span>");
              // $('#dicList').fadeOut();
            }
            
       

              
        });
 
        
        $(document).on('click', '.li-b', function(){
                 
                   $('#dicList').fadeOut();
                   $('#dickeyword').val($(this).text());
                   //alert("cliced this lsit");
                   
                   document.getElementById("dickeyword").focus();
                   document.getElementById("submit_search").click();
                         
        });

        
        
    });

    
    
 
</script>



<script>
   // document.getElementById("dickeyword").focus();
	var chosen = "";
	$(document).keydown(function(e){ // 38-up, 40-down
    if (e.keyCode == 40) { 
        if(chosen === "") {
            chosen = 0;
        } else if((chosen+1) < $('#list-dic > li').length) {
            chosen++; 
            //$('#list-dic > li').focus();
            //$('#dickeyword').val($('#list-dic >li').text());
            
   
            console.log(chosen);
        }
        //var a = chosen;
        //a-1;
        $('#list-dic li').removeClass('selected');
       // $('#list-dic > li:eq('+a+')').removeClass('selected');
  
        $('#list-dic li:eq('+chosen+')').addClass('selected');
        
        //$('#list-dic > li').focus();
		//$('#dickeyword').val($('#list-dic > li:eq('+chosen+')').text());
        return false;
    }
    if (e.keyCode == 38) { 
        if(chosen === "") {
            chosen = 0;
        } else if(chosen > 0) {
            chosen--;  
            console.log(chosen);     
           
        }
       $('#list-dic > li').removeClass('selected');
        $('#list-dic > li:eq('+chosen+')').addClass('selected');
        //$('#list-dic > li').focus();
		
        return false;
    }
	// if (e.which == 13 ||e.keyCode == 13) { 
    //     $('#dickeyword').val($('#list-dic li:eq('+chosen+')').text());
    //     $('#dicList').fadeOut();
    //            document.getElementById("submit_search").click();
    //            document.getElementById("dickeyword").focus();
    //     return false;
    // }
    
});

</script>
<!--------------- Clipboard method disabled
<script>
//པར་བཤུ་བཀག་བྱེད་ཡིན།
  $(document).ready(function() {
   $('body').bind('cut copy', function(e) {
       e.preventDefault();
         });
         var text = "དགོངས་དག་ཞུ། ཚིག་མཛོད་འདི་ད་དུང་བསྐྱར་བཅོས་བྱེད་པའི་སྐབས་ཡིན་པས་པར་བཤུ་བྱེད་མི་ཐུབ། ཞུ་དག་གྲུབ་རྗེས་པར་བཤུ་བྱ་ཆོག";
    navigator.clipboard.writeText(text).then(function() {
     
    }, function(err) {
  
}); 
    });
    

 </script>
 
 ----------------->
 
<?php
//define PDO = tell about the databas file
//$pdo = new PDO('sqlite:dictionarys/mldic.db');
//$db = new SQLite3('dictionarys/mldic.db');
$db1 = new SQLite3('files/dictionarys//mldic2016Main1.db');
$db2 = new SQLite3('files/dictionarys//mldic2016Main2.db');
//$db_tb_en = new SQLite3('dictionarys/TbEnDic.db');
$db_en_tb = new SQLite3('files/dictionarys//En_Tb_Dic.db');
$db_tb_en = new SQLite3('files/dictionarys//Tb_En_Dic.db');
$db_tb_sk = new SQLite3('files/dictionarys//Tb_Sk_Dic.db');

$keyword ="";


if(isset($_POST['submit_search']))
{
    $keyword = $_POST['dic-keyword'].='་';
    $keyword = str_replace("་་", "་", $keyword);


    $keyword = str_replace("'", '',$keyword);
    global $dicOption;
    
    if($dicOption == "བོད་ཡིག")
    {
        

        //$statement = $pdo->query("SELECT word, explanation, image, note FROM wordIndex WHERE word LIKE '$keyword'  LIMIT 1");
        //run the SQL
        //$result_array = $statement->fetch(PDO::FETCH_BOTH);
        //$stmt = $db->prepare("SELECT word, explanation, image, note FROM wordIndex WHERE word like '$keyword%'");
        //$result = $stmt->execute();
        $res1 = $db1->query("SELECT word, explanation, image, note FROM wordIndex WHERE word GLOB '$keyword'");
        $res2 = $db2->query("SELECT word, explanation, image, note FROM wordIndex WHERE word GLOB '$keyword'");
        //SELECT DISTINCT tb_key, Dic_Name, def_dic FROM TbToEn WHERE tb_key GLOB  '$keyword
      //show it on the screen
      
        // དྲ་ལམ་ཡོད་མེད་ཚོད་ལྟ།
        //if (class_exists('SQLite3')) {
       //echo 'SQLite3 extension loaded';
       // }else{
       // echo 'not Sqlite con';
       // }   
      //  if (extension_loaded('sqlite3')) {
       //     echo '<br>good';
      //  }
        
        
        $imagedic ="";
        
        
        $manExplanation="";
        
        
        
        if ($row = $res1->fetchArray())        
        {
            
            $manExplanation =  $row['explanation'];
            $main = preg_replace("/11. /", "༌1༌1༌ ", $main); 
            if($row['image']){
                $imagedic = base64_encode($row['image']);
            
            }
            //echo $manExplanation;
            
        }elseif($row = $res2->fetchArray())
        {
            $manExplanation =  $row['explanation'];
            $main = preg_replace("/11. /", "༌1༌1༌ ", $main); 
            if($row['image']){
                $imagedic = base64_encode($row['image']);
            
            }
            //echo $manExplanation;
            
        }
        
            
            $str = $manExplanation;

            //$text = preg_replace("//1. /", '<span style="background:yellow">Guru</span>', $str);
            $str = preg_replace("/60./", "<br><a href='#note-a60' id='note-b60'><span class='numbers2' >60 </span></a>", $str);
           $str = preg_replace("/50./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a50' id='note-b50'><span class='numbers2' >50</span></a>", $str);
           $str = preg_replace("/51./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a51' id='note-b51'><span class='numbers2' >51</span></a>", $str);
           $str = preg_replace("/52./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a52' id='note-b52'><span class='numbers2' >52</span></a>", $str);
           $str = preg_replace("/53./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a53' id='note-b53'><span class='numbers2' >53</span></a>", $str);
           $str = preg_replace("/54./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a54' id='note-b54'><span class='numbers2' >54</span></a>", $str);
           $str = preg_replace("/55./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a55' id='note-b55'><span class='numbers2' >55</span></a>", $str);
           $str = preg_replace("/56./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a56' id='note-b56'><span class='numbers2' >56</span></a>", $str);
           $str = preg_replace("/57./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a57' id='note-b57'><span class='numbers2' >57</span></a>", $str);
           $str = preg_replace("/58./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a58' id='note-b58'><span class='numbers2' >58</span></a>", $str);         

           $str = preg_replace("/59./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a59' id='note-b59'><span class='numbers2' >59</span></a>", $str);
          
           $str = preg_replace("/41./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a41' id='note-b41'><span class='numbers2' >41</span></a>", $str);
           $str = preg_replace("/42./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a42' id='note-b42'><span class='numbers2' >42</span></a>", $str);
           $str = preg_replace("/43./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a43' id='note-b43'><span class='numbers2' >43</span></a>", $str);
           $str = preg_replace("/44./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a44' id='note-b44'><span class='numbers2' >44</span></a>", $str);
           $str = preg_replace("/45./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a45' id='note-b45'><span class='numbers2' >45</span></a>", $str);
           $str = preg_replace("/46./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a46' id='note-b46'><span class='numbers2' >46</span></a>", $str);
           $str = preg_replace("/47./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a47' id='note-b47'><span class='numbers2' >47</span></a>", $str);
           $str = preg_replace("/48./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a48' id='note-b48'><span class='numbers2' >48</span></a>", $str);
           $str = preg_replace("/49./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a49' id='note-b49'><span class='numbers2' >49</span></a>", $str);

           $str = preg_replace("/40./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a40' id='note-b40'><span class='numbers2' >40</span></a>", $str);
          
           $str = preg_replace("/31./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a31' id='note-b31'><span class='numbers2' >31</span></a>", $str);
           $str = preg_replace("/32./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a32' id='note-b32'><span class='numbers2' >32</span></a>", $str);
           $str = preg_replace("/33./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a33' id='note-b33'><span class='numbers2' >33</span></a>", $str);
           $str = preg_replace("/34./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a34' id='note-b34'><span class='numbers2' >34</span></a>", $str);
           $str = preg_replace("/35./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a35' id='note-b35'><span class='numbers2' >35</span></a>", $str);
           $str = preg_replace("/36./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a36' id='note-b36'><span class='numbers2' >36</span></a>", $str);
           $str = preg_replace("/37./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a37' id='note-b37'><span class='numbers2' >37</span></a>", $str);
           $str = preg_replace("/38./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a38' id='note-b38'><span class='numbers2' >38</span></a>", $str);
           $str = preg_replace("/39./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a39' id='note-b39'><span class='numbers2' >39</span></a>", $str);

           $str = preg_replace("/30./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a30' id='note-b30'><span class='numbers2' >30</span></a>", $str);
           $str = preg_replace("/20./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a20' id='note-b20'><span class='numbers2' >20</span></a>", $str);
           $str = preg_replace("/21./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a21' id='note-b21'><span class='numbers2' >21</span></a>", $str);
           $str = preg_replace("/22./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a22' id='note-b22'><span class='numbers2' >22</span></a>", $str);
           $str = preg_replace("/23./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a23' id='note-b23'><span class='numbers2' >23</span></a>", $str);
           $str = preg_replace("/24./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a24' id='note-b24'><span class='numbers2' >24</span></a>", $str);
           $str = preg_replace("/25./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a25' id='note-b25'><span class='numbers2' >25</span></a>", $str);
           $str = preg_replace("/26./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a26' id='note-b26'><span class='numbers2' >26</span></a>", $str);
           $str = preg_replace("/27./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a27' id='note-b27'><span class='numbers2' >27</span></a>", $str);
           $str = preg_replace("/28./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a28' id='note-b28'><span class='numbers2' >28</span></a>", $str);
           $str = preg_replace("/29./", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a29' id='note-b29'><span class='numbers2' >29</span></a>", $str);

           $str = preg_replace("/10. /", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a10' id='note-b10'><span class='numbers2' >10</span></a>", $str);
           //$str = preg_replace("/༌1༌1༌/", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a1་1' id='note-b1་1'><span class='numbers2' >11</span></a>", $str);
           
           $str = preg_replace("/༌1༌1༌/", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a11' id='note-b11'><span class='numbers2' >11</span></a>", $str);
          
           //$str = preg_replace("/11. /", "<p class='gap ac-ac'><a href='#note-a11' id='note-b11'><span class='numbers2' >11</span></a>", $str);
           $str = preg_replace("/12. /", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a12' id='note-b12'><span class='numbers2' >12</span></a>", $str);
           $str = preg_replace("/13. /", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a13' id='note-b13'><span class='numbers2' >13</span></a>", $str);
           $str = preg_replace("/14. /", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a14' id='note-b14'><span class='numbers2' >14</span></a>", $str);
           $str = preg_replace("/15. /", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a15' id='note-b15'><span class='numbers2' >15</span></a>", $str);
           $str = preg_replace("/16. /", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a16' id='note-b16'><span class='numbers2' >16</span></a>", $str);
           $str = preg_replace("/17. /", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a17' id='note-b17'><span class='numbers2' >17</span></a>", $str);
           $str = preg_replace("/18. /", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a18' id='note-b18'><span class='numbers2' >18</span></a>", $str);
           $str = preg_replace("/19. /", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a19' id='note-b19'><span class='numbers2' >19</span></a>", $str);
           

           $str = str_replace("1. ", "</div></div><div><div><a href='#note-a1' id='note-b1'><span class='numbers' >1</span></a>", $str);
           $str = str_replace("2. ", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a2' id='note-b2'><span class='numbers' >2</span></a>", $str);
           $str = str_replace("3. ", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a3' id='note-b3'><span class='numbers' >3</span></a>", $str);
           $str = str_replace("4. ", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a4' id='note-b4'><span class='numbers' >4</span></a>", $str);
           $str = str_replace("5. ", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a5' id='note-b5'><span class='numbers' >5</span></a>", $str);
           $str = str_replace("6. ", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a6' id='note-b6'><span class='numbers' >6</span></a>", $str);
           $str = str_replace("7. ", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a7' id='note-b7'><span class='numbers' >7</span></a>", $str);
           $str = str_replace("8. ", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a8' id='note-b8'><span class='numbers' >8</span></a>", $str);
           $str = str_replace("9. ", "</div></div><div><div><p class='gap ac-ac'><a href='#note-a9' id='note-b9'><span class='numbers' >9</span></a>", $str);

           $str = preg_replace("/༡ནུས་བརྗོད་བྱ་ཚིག /", "<span style='color: #ce700b; '>ནུས་བརྗོད་བྱ་ཚིག </span>", $str);
           $str = preg_replace("/༡འབྲས་བརྗོད་བྱ་ཚིག༡/", "<span style='color: #ce700b; '>འབྲས་བརྗོད་བྱ་ཚིག</span>", $str);
           $str = preg_replace("/༡ནུས་བརྗོད་བྱ་ཚིག༡/", "<span style='color: #ce700b; '>ནུས་བརྗོད་བྱ་ཚིག</span>", $str);
           $str = preg_replace("/༡འབྲས་བརྗོད་བྱ་ཚིག /", "<span style='color: #ce700b; '>འབྲས་བརྗོད་བྱ་ཚིག </span>", $str);

           $str = preg_replace("/མིང་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>མིང་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>མིང་ཚིག་ནི། སེམས་ཅན་དང་། ས་ཆ། བེམ་པོ། འདུ་ཤེས་སོགས་དངོས་པོ་གང་རུང་གི་ཁྱད་གཞི་མཚོན་པའི་ཚིག་ཅིག་ལ་ཟེར།</span></span></span></p>", $str);
            
           $str = preg_replace("/བྱ་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>བྱ་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>བྱ་ཚིག་ནི། གང་ཟག་གི་ལུས་ངག་གི་བྱ་སྤྱོད་དམ། སེམས་ཀྱི་འཕྲོ་འདུ། དངོས་པོའི་སྟེང་གི་འགུལ་སྐྱོད་དང་འཕོ་འགྱུར་བཅས་ཀྱི་རྣམ་པ་མཚོན་པའི་ཚིག་ཅིག་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/རྒྱན་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>རྒྱན་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>རྒྱན་ཚིག་ནི། མིང་ཚིག་ཅིག་དང་ལྷན་ཏུ་སྦྱར་ན་ཁྱད་གཞི་དེའི་རང་བཞིན་དང་། བྱེད་ལས། ཁ་དོག་དང་། དབྱིབས་གཟུགས། རྣམ་པའམ་ཚུགས་ཀ་སོགས་ཀྱི་ཁྱད་ཆོས་བརྗོད་པའི་ཚིག་ཅིག་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/གྲོགས་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>གྲོགས་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>གྲོགས་ཚིག་ནི། ཚིག་གམ་ཚིག་ཚོགས་ཤིག་གི་ཟུར་གཏོགས་སུ་སྦྱར་ཚེ་དོན་གང་རུང་མཚོན་པར་རམ་འདེགས་ཀྱི་ནུས་པ་ཐོན་པའི་ཚིག་གི་ཆ་ཤས་ཤིག་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/ཚབ་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>ཚབ་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>ཚབ་ཚིག་ནི། མིང་ཚིག་གམ་ཚིག་བསྒྲིགས་གང་རུང་དངོས་སུ་བསྐྱར་ཟློས་མ་དགོས་པར་དེའི་དོད་དུ་སྦྱར་ཆོག་པའི་ཚིག་ཅིག་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/འཇལ་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>འཇལ་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>འཇལ་ཚིག་ནི། གྲངས་ཚིག་གང་རུང་དང་མཉམ་དུ་སྦྱར་ཚེ་མི་དང་བྱ་དངོས་ཀྱི་བོངས་ཚོད་དང་ཚད་མཚོན་པའི་ཚིག་ཅིག་ལ་ཟེར།</span></span></span></p>", $str);

            //འདི་མན་བཟོ་བཅོས་བྱ་དགོས
           $str = preg_replace("/བསྣན་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>བསྣན་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>བསྣན་ཚིག་ནི། བྱ་ཚིག་གམ་རྒྱན་ཚིག་གང་རུང་དང་མཉམ་དུ་སྦྱར་ཚེ་དངོས་པོའི་ཚད་དང་དུས་སོགས་དོན་གྱི་ཁྱད་པར་གཞན་ཞིག་སྣོན་པའམ་སྟོན་པའི་ཚིག་ཅིག་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/ཕྲད་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>ཕྲད་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>ཕྲད་ཚིག་ནི། རང་ངོས་ནས་དོན་མི་སྟོན་ཅིང་ཚིག་སྦྱོར་དུ་ཞུགས་སྐབས་མིང་ཚིག་དག་མ་འདྲེས་པར་སོ་སོར་དབྱེ་བ་དང། དོན་གསལ་བའམ། མཚམས་སྦྱོར་བ། བརྗོད་བདེ་བར་ཕན་འདོགས་བྱེད་ཀྱི་ཚིག་གི་རིགས་ཤིག་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/གྲངས་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>གྲངས་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>གྲངས་ཚིག་ནི། བྱ་དངོས་ཀྱི་གྲངས་མང་ཉུང་གི་ཚད་དང་རིམ་པ་གང་ཡིན་སྟོན་བྱེད་ཀྱི་ཚིག་ཅིག་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/སྒྲུབ་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>སྒྲུབ་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>སྒྲུབ་ཚིག་ནི། རང་ངོས་ནས་བྱ་བའི་རྣམ་འགྱུར་མི་སྟོན་པར་ཚིག་གྲོགས་མཉམ་དུ་སྦྱར་ན་ཡིན་པའམ་ཡོད་པའི་རྣམ་པ་ཙམ་སྟོན་པའི་ཚིག་ཅིག་ལ་ཟེར།</span></span></span></p>", $str);
            //འདི་ལ་བརྟགས་དགོས།
           $str = preg_replace("/དཔེ་ཚིག /", "<p class='gap ac-ac'><span style='color: rgb(0, 139, 171);line-height: 110%;'onclick='return false;'><a class='tooltip' id='interjection'>དཔེ་ཚིག </a></span></p>", $str);

           $str = preg_replace("/འབོད་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>འབོད་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>འབོད་ཚིག་ནི། ཚིག་སྦྱོར་གང་དུ་གློ་བུར་ཐོལ་རྒྱག་ཏུ་བྱུང་བའི་སེམས་ཚོར་མཚོན་པའི་ཚིག་ཅིག་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/མཚུངས་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>མཚུངས་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>མཚུངས་ཚིག་ནི། མཚོན་བྱེད་དཔེ་དང་མཚོན་བྱ་དོན་གཉིས་ཕན་ཚུན་འདྲ་མཚུངས་སུ་སྟོན་པའི་ཚིག་གི་རིགས་ཤིག་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/བྱེད་ཚིག /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>བྱེད་ཚིག <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>བྱེད་ཚིག་ནི། བྱ་ཚིག་དང་སྒྲུབ་ཚིག་གང་རུང་ལ་ངེས་པར་འབྲེལ་དགོས་པའི་ཕྲད་དམིགས་བསལ་བ། ཚིག་གི་སྒྲུབ་བྱེད་དུ་གྱུར་པའི་ཕྲད་བྱེད་ཅན་ལྔ་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/༡དཔེ་ཆོས། /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip'>དཔེ་ཆོས། <span class='lobsangtooltiptext'><span class='lobsangtooltiph'>འགྲེལ་བཤད།</span><br><span class='resoult'>དཔེ་ཆོས་ནི། བརྗོད་དོན་གང་ཞིག་ཡུན་རིང་གཏན་འཇགས་སུ་ཆགས་པ། ཚིག་ཉུང་དོན་འདུས། བརྗོད་དོན་ཚིག་དངོས་སུ་མི་སྨོས་པ། བརྗོད་བདེ་དོན་ཟབ་པའི་མིང་ཚིག་གི་ཚོགས་པ་ཐུན་མོང་མ་ཡིན་པ་ཞིག་ལ་ཟེར།</span></span></span></p>", $str);

           $str = preg_replace("/༡དུས་གསུམ་སྤྱིར་བཏང་བ། /", "<span style='color: #097ec5; '>དུས་གསུམ་སྤྱིར་བཏང་བ། </span>", $str);
           $str = preg_replace("/༡དུས་གསུམ་བྱེ་བྲག་པ། /", "<span style='color: #097ec5; '>དུས་གསུམ་བྱེ་བྲག་པ། </span>", $str);
           $str = preg_replace("/༡དུས་གསུམ་ཐོར་བུ་པ། /", "<span style='color: #097ec5; '>དུས་གསུམ་ཐོར་བུ་པ། </span>", $str);
           $str = preg_replace("/༡བྱ་བྱེད་ཐ་དད་པ། /", "<span style='color: #bf1818; '>བྱ་བྱེད་ཐ་དད་པ། </span>", $str);
           $str = preg_replace("/༡བྱ་བྱེད་ཐ་མི་དད་པ། /", "<span style='color: #bf1818;'>བྱ་བྱེད་ཐ་མི་དད་པ། </span>", $str);
           $str = preg_replace("/༡འདས་པ། /", "<span style='color: #045FB4;'>&nbsp;འདས་པ། </span>", $str);
           $str = preg_replace("/༡མ་འོངས་པ། /", "<span style='color: #045FB4;'>&nbsp;མ་འོངས་པ། </span>", $str);
           $str = preg_replace("/༡ད་ལྟ་བ། /", "<span style='color: #045FB4;'>&nbsp;ད་ལྟ་བ། </span>", $str);
           $str = preg_replace("/༡སྐུལ་ཚིག /", "<span style='color: #045FB4;'>&nbsp;སྐུལ་ཚིག </span>", $str);

           $str = preg_replace("/༢མ་འོངས་པ། /", "<br><span style='color: #bf1818;line-height: 50%;'>&nbsp;མ་འོངས་པ། </span>", $str);
           $str = preg_replace("/༢ད་ལྟ་བ། /", "<span style='color: #bf1818;'>&nbsp;ད་ལྟ་བ། </span>", $str);
           $str = preg_replace("/༢སྐུལ་ཚིག /", "<span style='color: #bf1818;'>&nbsp;སྐུལ་ཚིག </span>", $str);
           $str = preg_replace("/༢འདས་པ། /", "<span style='color: #bf1818;'>&nbsp;འདས་པ། </span>", $str);

           $str = preg_replace("/ དཔེར་ན། /", "<br><p class='perna ac-ac' span >&nbsp;&nbsp;&nbsp;&nbsp;དཔེར་ན།  ", $str);
           $str = preg_replace("/༡དཔེར་ན།/", "<br><p class='perna ac-ac' span >&nbsp;&nbsp;&nbsp;དཔེར་ན།  ", $str);
   
           $str = preg_replace("/མཆན་འགྲེལ་དང་ཁུངས།/", "</div><div class='notetitle'>མཆན་འགྲེལ་དང་ཁུངས།</div>", $str);
           $str = preg_replace("/དཔེ་རིས་ལ་གཟིགས། /", "<p class ='gap'><span id='lobsangtooltip'class='lobsangtooltip2'><img align='middle'  src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAATCAYAAACKsM07AAAACXBIWXMAAAsTAAALEwEAmpwYAAAKT2lDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVNnVFPpFj333vRCS4iAlEtvUhUIIFJCi4AUkSYqIQkQSoghodkVUcERRUUEG8igiAOOjoCMFVEsDIoK2AfkIaKOg6OIisr74Xuja9a89+bN/rXXPues852zzwfACAyWSDNRNYAMqUIeEeCDx8TG4eQuQIEKJHAAEAizZCFz/SMBAPh+PDwrIsAHvgABeNMLCADATZvAMByH/w/qQplcAYCEAcB0kThLCIAUAEB6jkKmAEBGAYCdmCZTAKAEAGDLY2LjAFAtAGAnf+bTAICd+Jl7AQBblCEVAaCRACATZYhEAGg7AKzPVopFAFgwABRmS8Q5ANgtADBJV2ZIALC3AMDOEAuyAAgMADBRiIUpAAR7AGDIIyN4AISZABRG8lc88SuuEOcqAAB4mbI8uSQ5RYFbCC1xB1dXLh4ozkkXKxQ2YQJhmkAuwnmZGTKBNA/g88wAAKCRFRHgg/P9eM4Ors7ONo62Dl8t6r8G/yJiYuP+5c+rcEAAAOF0ftH+LC+zGoA7BoBt/qIl7gRoXgugdfeLZrIPQLUAoOnaV/Nw+H48PEWhkLnZ2eXk5NhKxEJbYcpXff5nwl/AV/1s+X48/Pf14L7iJIEyXYFHBPjgwsz0TKUcz5IJhGLc5o9H/LcL//wd0yLESWK5WCoU41EScY5EmozzMqUiiUKSKcUl0v9k4t8s+wM+3zUAsGo+AXuRLahdYwP2SycQWHTA4vcAAPK7b8HUKAgDgGiD4c93/+8//UegJQCAZkmScQAAXkQkLlTKsz/HCAAARKCBKrBBG/TBGCzABhzBBdzBC/xgNoRCJMTCQhBCCmSAHHJgKayCQiiGzbAdKmAv1EAdNMBRaIaTcA4uwlW4Dj1wD/phCJ7BKLyBCQRByAgTYSHaiAFiilgjjggXmYX4IcFIBBKLJCDJiBRRIkuRNUgxUopUIFVIHfI9cgI5h1xGupE7yAAygvyGvEcxlIGyUT3UDLVDuag3GoRGogvQZHQxmo8WoJvQcrQaPYw2oefQq2gP2o8+Q8cwwOgYBzPEbDAuxsNCsTgsCZNjy7EirAyrxhqwVqwDu4n1Y8+xdwQSgUXACTYEd0IgYR5BSFhMWE7YSKggHCQ0EdoJNwkDhFHCJyKTqEu0JroR+cQYYjIxh1hILCPWEo8TLxB7iEPENyQSiUMyJ7mQAkmxpFTSEtJG0m5SI+ksqZs0SBojk8naZGuyBzmULCAryIXkneTD5DPkG+Qh8lsKnWJAcaT4U+IoUspqShnlEOU05QZlmDJBVaOaUt2ooVQRNY9aQq2htlKvUYeoEzR1mjnNgxZJS6WtopXTGmgXaPdpr+h0uhHdlR5Ol9BX0svpR+iX6AP0dwwNhhWDx4hnKBmbGAcYZxl3GK+YTKYZ04sZx1QwNzHrmOeZD5lvVVgqtip8FZHKCpVKlSaVGyovVKmqpqreqgtV81XLVI+pXlN9rkZVM1PjqQnUlqtVqp1Q61MbU2epO6iHqmeob1Q/pH5Z/YkGWcNMw09DpFGgsV/jvMYgC2MZs3gsIWsNq4Z1gTXEJrHN2Xx2KruY/R27iz2qqaE5QzNKM1ezUvOUZj8H45hx+Jx0TgnnKKeX836K3hTvKeIpG6Y0TLkxZVxrqpaXllirSKtRq0frvTau7aedpr1Fu1n7gQ5Bx0onXCdHZ4/OBZ3nU9lT3acKpxZNPTr1ri6qa6UbobtEd79up+6Ynr5egJ5Mb6feeb3n+hx9L/1U/W36p/VHDFgGswwkBtsMzhg8xTVxbzwdL8fb8VFDXcNAQ6VhlWGX4YSRudE8o9VGjUYPjGnGXOMk423GbcajJgYmISZLTepN7ppSTbmmKaY7TDtMx83MzaLN1pk1mz0x1zLnm+eb15vft2BaeFostqi2uGVJsuRaplnutrxuhVo5WaVYVVpds0atna0l1rutu6cRp7lOk06rntZnw7Dxtsm2qbcZsOXYBtuutm22fWFnYhdnt8Wuw+6TvZN9un2N/T0HDYfZDqsdWh1+c7RyFDpWOt6azpzuP33F9JbpL2dYzxDP2DPjthPLKcRpnVOb00dnF2e5c4PziIuJS4LLLpc+Lpsbxt3IveRKdPVxXeF60vWdm7Obwu2o26/uNu5p7ofcn8w0nymeWTNz0MPIQ+BR5dE/C5+VMGvfrH5PQ0+BZ7XnIy9jL5FXrdewt6V3qvdh7xc+9j5yn+M+4zw33jLeWV/MN8C3yLfLT8Nvnl+F30N/I/9k/3r/0QCngCUBZwOJgUGBWwL7+Hp8Ib+OPzrbZfay2e1BjKC5QRVBj4KtguXBrSFoyOyQrSH355jOkc5pDoVQfujW0Adh5mGLw34MJ4WHhVeGP45wiFga0TGXNXfR3ENz30T6RJZE3ptnMU85ry1KNSo+qi5qPNo3ujS6P8YuZlnM1VidWElsSxw5LiquNm5svt/87fOH4p3iC+N7F5gvyF1weaHOwvSFpxapLhIsOpZATIhOOJTwQRAqqBaMJfITdyWOCnnCHcJnIi/RNtGI2ENcKh5O8kgqTXqS7JG8NXkkxTOlLOW5hCepkLxMDUzdmzqeFpp2IG0yPTq9MYOSkZBxQqohTZO2Z+pn5mZ2y6xlhbL+xW6Lty8elQfJa7OQrAVZLQq2QqboVFoo1yoHsmdlV2a/zYnKOZarnivN7cyzytuQN5zvn//tEsIS4ZK2pYZLVy0dWOa9rGo5sjxxedsK4xUFK4ZWBqw8uIq2Km3VT6vtV5eufr0mek1rgV7ByoLBtQFr6wtVCuWFfevc1+1dT1gvWd+1YfqGnRs+FYmKrhTbF5cVf9go3HjlG4dvyr+Z3JS0qavEuWTPZtJm6ebeLZ5bDpaql+aXDm4N2dq0Dd9WtO319kXbL5fNKNu7g7ZDuaO/PLi8ZafJzs07P1SkVPRU+lQ27tLdtWHX+G7R7ht7vPY07NXbW7z3/T7JvttVAVVN1WbVZftJ+7P3P66Jqun4lvttXa1ObXHtxwPSA/0HIw6217nU1R3SPVRSj9Yr60cOxx++/p3vdy0NNg1VjZzG4iNwRHnk6fcJ3/ceDTradox7rOEH0x92HWcdL2pCmvKaRptTmvtbYlu6T8w+0dbq3nr8R9sfD5w0PFl5SvNUyWna6YLTk2fyz4ydlZ19fi753GDborZ752PO32oPb++6EHTh0kX/i+c7vDvOXPK4dPKy2+UTV7hXmq86X23qdOo8/pPTT8e7nLuarrlca7nuer21e2b36RueN87d9L158Rb/1tWeOT3dvfN6b/fF9/XfFt1+cif9zsu72Xcn7q28T7xf9EDtQdlD3YfVP1v+3Njv3H9qwHeg89HcR/cGhYPP/pH1jw9DBY+Zj8uGDYbrnjg+OTniP3L96fynQ89kzyaeF/6i/suuFxYvfvjV69fO0ZjRoZfyl5O/bXyl/erA6xmv28bCxh6+yXgzMV70VvvtwXfcdx3vo98PT+R8IH8o/2j5sfVT0Kf7kxmTk/8EA5jz/GMzLdsAAAAgY0hSTQAAeiUAAICDAAD5/wAAgOkAAHUwAADqYAAAOpgAABdvkl/FRgAAA3FJREFUeNp0lT+IXUUUxn/fmXm+97LZ7CZqEGKwUISgFpZGEEkRrKySLlVQg6WNIBYhKoJNrERBKztR0qSwsEyTNGmCKJJKUfyHmuwm+959d+azmPverlEH5s7MmeHMd+b7zrm6+OEnF/ZFOW3zmMAGDASteRh1z3pp8+60Cr7d8uit2x5fStQMOI/lV20eXJC+qmgEJjDFIclEc+JqCUE0DAKoFpKRKSGPp/TPTlTO3rYvGQlMDqoWpO9+q9OTDXnDVBHh3TmYcEO8jKbCYGtn1zV/vnO64RbQwogMdOBcDRP1hzdj/kq1HpAkYapFRUqqFlCQZBDLDxipomL4Zh/98TX1RzL11o7z1VyRAhOCCf2ZMeVtQg2zQXvIWKEfbF4SIA9roRgIQYj+zyxwQdR2ZGqJW3Xy5NzxfZKTTK3IwiEsI8vGg1uBw3YF0aKrpeJ96j6bJp/MLUpJgFANYOb4acdpKy2JpFIJkozw/ylpZSnAxN3dgBSmPcdAXDUQ4lCWkc2GZi8cSXc+PhTzU4FJOGU8SjQqEybjUca59ZoyFYmxoY+ltoeuAZULwVT9Ewdj/mWSX9rU7PMJ/TOFKBUtEuYA83O1MV2A3qhnjw8GCrWHr7Zr3BhulvCK57qU7X51796f5h+ta/FaIdUK4IpRS4GhBWDtCqG9p1CSmTl//bvHz+2Q3//DkxcXpGvVMHX31Jr6N+bObMT84lT9gf0szqzH4nwhCl7x5NxIi3bLKgoPpDtte3xly1yxIQQjFTbVfWGJ4gZvU7OrOXysc9yUfWEv6dkwAraaPshDFLkgEpQ1ulHCTyu80RM/7KOcyuLx3k0cBRH4WDVk6iNjlcN3nX5d4s1GXaJsjFzGFtvtjWM7MIc0e3Oi/pzg6DLJKqJH98i0iX1EHY0pp7fJH6xyUuiXqfqH1qM7ZXQDhO0fD2r2+kZ07wQcBQ1ibrUqU8mrcbcLs6buvUxPNduA8l++7+UpcWLG6Np9LE4MNB/ccf7ZNc73qI89qbRE21jDy7WaLYzCQ7EFyDtO1+84XweY0J0FyHLZcf60WxV7D3kiNCTYf/8n2m6iEmIMpJyGrCxoEdDbcEDzmxt4vlfPy+ImNTd1SKVVRfrHQUB+uFp9HkKRQHPlyxPK8QSPWsrc03adqRVU8W/n7VYCrt11uvz3ADjS0zpWMjHeAAAAAElFTkSuQmCC'>&nbsp;དཔེ་རིས།&nbsp;&nbsp;<span class='lobsangtooltiptext2'><span class='lobsangtooltiph2'>དཔེ་རིས།</span><br><img alt='Mountain' width='280px'src='data:image/jpg;base64,$imagedic'></span></span></p>", $str);
           $str = preg_replace("/ ས་ཁྲར་གཟིགས།/", "<a  class='images' id='map' onclick='return false;' style='cursor:pointer;'>&nbsp;ས་ཁྲར་གཟིགས། <img align='middle'  src='data:image/png;base64,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'></a>", $str);
           $str = preg_replace("/༡རྒྱུན་སྤྱོད།/", "<span style='color: rgb(161, 116, 18);'>རྒྱུན་སྤྱོད། </span><span style='color: rgb(161, 116, 18);'><img align='middle' src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAQAAACR313BAAAACXBIWXMAAAsTAAALEwEAmpwYAAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAACNSURBVHjatNCxDsFgFAbQ81c6SLwECVN3I4upD2QURk/CI0hsSmIUtRBPYehCGKRDI2ki4q7n3i9fbniqm6hWhQ4jc4mTsRVcK9y3EYOHgW2VIzOxpY6Fhsln+E1Lz0W3ef66WmSHqbZZoVgXoQh5KDEP1WpDGVfJk/dSZC91cHeUysqrMiH89LW/8msAx4okVRBhEYAAAAAASUVORK5CYII='></span>", $str);

           $str = preg_replace("/༡རྒྱ་གར། /", "<span style='color: rgb(161, 116, 18);'>&nbsp;རྒྱ་གར། </span>", $str);
           $str = preg_replace("/༡རྒྱ་ནག /", "<span style='color: rgb(161, 116, 18);'>&nbsp;རྒྱ་ནག </span>", $str);
           $str = preg_replace("/༡སོག་པོ། /", "<span style='color: rgb(161, 116, 18);'>&nbsp;སོག་པོ། </span>", $str);
           $str = preg_replace("/༡མན་ཇུ། /", "<span style='color: rgb(161, 116, 18);'>&nbsp;མན་ཇུ། </span>", $str);
           $str = preg_replace("/༡ཨ་རབ། /", "<span style='color: rgb(161, 116, 18);'>&nbsp;ཨ་རབ། </span>", $str);
           $str = preg_replace("/༡དབྱིན་ཇི། /", "<span style='color: rgb(161, 116, 18);'>&nbsp;དབྱིན་ཇི། </span>", $str);

           $str = preg_replace("/༡ཟུར་ཆག /", "<span style='  color: #7401DF;'>&nbsp;ཟུར་ཆག  </span>", $str);
           $str = preg_replace("/༡མངོན་བརྗོད། /", "<span style='  color: #7401DF;'>&nbsp;མངོན་བརྗོད། </span>", $str);
           $str = preg_replace("/༡བརྙས་ཚིག /", "<span style='  color: #7401DF;'>&nbsp;བརྙས་ཚིག </span>", $str);
           $str = preg_replace("/༡ལོག་སྐད། /", "<span style='  color: #7401DF;'>&nbsp;ལོག་སྐད། </span>", $str);
           $str = preg_replace("/༡བརྡ་རྙིང་། /", "<span style='  color: #7401DF;'>&nbsp;བརྡ་རྙིང་། </span>", $str);
           $str = preg_replace("/༡ཞེ་ས། /", "<span style=' color: #7401DF;'>&nbsp;ཞེ་ས། </span>", $str);
           $str = preg_replace("/༡དཔེ་ཆོས། /", "<span style=' color: #7401DF;'>&nbsp;དཔེ་ཆོས། </span>", $str);
           $str = preg_replace("/༡ཡུལ་སྐད། /", "<span style='  color: #7401DF;'>&nbsp;ཡུལ་སྐད། </span>", $str);

            //མིང་གི་དབྱེ་བ།
           $str = preg_replace("/༡ཁྲིམས། /", "<span style='  color: #7401DF;'>&nbsp;ཁྲིམས། </span>", $str);
           $str = preg_replace("/༡གཏེར་ཁ། /", "<span style='  color: #7401DF;'>&nbsp;གཏེར་ཁ། </span>", $str);
           $str = preg_replace("/༡གཞི་བདག /", "<span style='  color: #7401DF;'>&nbsp;གཞི་བདག </span>", $str);
           $str = preg_replace("/༡གསུང་རྩོམ། /", "<span style='  color: #7401DF;'>&nbsp;གསུང་རྩོམ། </span>", $str);
           $str = preg_replace("/༡གྲུབ་མཐའ། /", "<span style='  color: #7401DF;'>&nbsp;གྲུབ་མཐའ། </span>", $str);
           $str = preg_replace("/༡གྲོང་ཁྱེར། /", "<span style='  color: #7401DF;'>&nbsp;གྲོང་ཁྱེར། </span>", $str);
           $str = preg_replace("/༡ཅ་དངོས། /", "<span style='  color: #7401DF;'>&nbsp;ཅ་དངོས། </span>", $str);
           $str = preg_replace("/༡ཆུ་བོ། /", "<span style='  color: #7401DF;'>&nbsp;ཆུ་བོ། </span>", $str);
           $str = preg_replace("/༡ཆོས་བརྒྱུད། /", "<span style='  color: #7401DF;'>&nbsp;ཆོས་བརྒྱུད། </span>", $str);
           $str = preg_replace("/༡ཆོས་ལུགས། /", "<span style='  color: #7401DF;'>&nbsp;ཆོས་ལུགས། </span>", $str);
           $str = preg_replace("/༡དགོན་སྡེ། /", "<span style='  color: #7401DF;'>&nbsp;དགོན་སྡེ། </span>", $str);
           $str = preg_replace("/༡དཔེ་ཆ། /", "<span style='  color: #7401DF;'>&nbsp;དཔེ་ཆ། </span>", $str);
           $str = preg_replace("/༡ནད། /", "<span style='  color: #7401DF;'>&nbsp;ནད། </span>", $str);
           $str = preg_replace("/༡ཕོ་བྲང་། /", "<span style='  color: #7401DF;'>&nbsp;ཕོ་བྲང་། </span>", $str);
           $str = preg_replace("/༡བཟའ་བཏུང་། /", "<span style='  color: #7401DF;'>&nbsp;བཟའ་བཏུང་། </span>", $str);
           $str = preg_replace("/༡བརྡ་སྤྲོད། /", "<span style='  color: #7401DF;'>&nbsp;བརྡ་སྤྲོད། </span>", $str);
           $str = preg_replace("/༡བྱང་སེམས། /", "<span style='  color: #7401DF;'>&nbsp;བྱང་སེམས། </span>", $str);
           $str = preg_replace("/༡བླ་བྲང་། /", "<span style='  color: #7401DF;'>&nbsp;བླ་བྲང་། </span>", $str);
           $str = preg_replace("/༡མཚོ། /", "<span style='  color: #7401DF;'>&nbsp;མཚོ། </span>", $str);
           $str = preg_replace("/༡མི་སྣ། /", "<span style='  color: #7401DF;'>&nbsp;མི་སྣ། </span>", $str);
           $str = preg_replace("/༡ཚོ་སྡེ། /", "<span style='  color: #7401DF;'>&nbsp;ཚོ་སྡེ། </span>", $str);
           $str = preg_replace("/༡འདོད་རྒྱལ། /", "<span style='  color: #7401DF;'>&nbsp;འདོད་རྒྱལ། </span>", $str);
           $str = preg_replace("/༡འཕྲུལ་ཆས། /", "<span style='  color: #7401DF;'>&nbsp;འཕྲུལ་ཆས། </span>", $str);
           $str = preg_replace("/༡འབྱུང་བོའམ་གདོན་འདྲེ། /", "<span style='  color: #7401DF;'>&nbsp;འབྱུང་བོའམ་གདོན་འདྲེ། </span>", $str);
           $str = preg_replace("/༡ཡིག་ཚགས། /", "<span style='  color: #7401DF;'>&nbsp;ཡིག་ཚགས། </span>", $str);
           $str = preg_replace("/༡ཡུལ་ལྷ། /", "<span style='  color: #7401DF;'>&nbsp;ཡུལ་ལྷ། </span>", $str);
           $str = preg_replace("/༡རི་ཁྲོད། /", "<span style='  color: #7401DF;'>&nbsp;རི་ཁྲོད། </span>", $str);
           $str = preg_replace("/༡རི། /", "<span style='  color: #7401DF;'>&nbsp;རི། </span>", $str);
           $str = preg_replace("/༡རྒྱལ་ཁབ། /", "<span style='  color: #7401DF;'>&nbsp;རྒྱལ་ཁབ། </span>", $str);
           $str = preg_replace("/༡རྗེས་གྲུབ། /", "<span style='  color: #7401DF;'>&nbsp;རྗེས་གྲུབ། </span>", $str);
           $str = preg_replace("/༡རྩ་འཁོར། /", "<span style='  color: #7401DF;'>&nbsp;རྩ་འཁོར། </span>", $str);
           $str = preg_replace("/༡རྩི་ཤིང་། /", "<span style='  color: #7401DF;'>&nbsp;རྩི་ཤིང་། </span>", $str);
           $str = preg_replace("/༡རྩེད་རིགས། /", "<span style='  color: #7401DF;'>&nbsp;རྩེད་རིགས། </span>", $str);
           $str = preg_replace("/༡རྫོང་གཞིས། /", "<span style='  color: #7401DF;'>&nbsp;རྫོང་གཞིས། </span>", $str);
           $str = preg_replace("/༣༥ལས་གནས།/", "<span style='  color: #7401DF;'>&nbsp;ལས་གནས། </span>", $str);
           $str = preg_replace("/༣༦ལུས་ཁམས།/", "<span style='  color: #7401DF;'>&nbsp;ལུས་ཁམས། </span>", $str);
           $str = preg_replace("/༣༧ལུས་རྩལ།/", "<span style='  color: #7401DF;'>&nbsp;ལུས་རྩལ། </span>", $str);
           $str = preg_replace("/༣༨ལོ་རྒྱུས་དོན་རྐྱེན།/", "<span style='  color: #7401DF;'>&nbsp;ལོ་རྒྱུས་དོན་རྐྱེན། </span>", $str);
           $str = preg_replace("/༣༩ལྟ་གྲུབ།/", "<span style='  color: #7401DF;'>&nbsp;ལྟ་གྲུབ། </span>", $str);
           $str = preg_replace("/༤༠ལྷ་ཁང་།/", "<span style='  color: #7401DF;'>&nbsp;ལྷ་ཁང་། </span>", $str);
           $str = preg_replace("/༤༡ལྷ་ཁང།/", "<span style='  color: #7401DF;'>&nbsp;ལྷ་ཁང། </span>", $str);
           $str = preg_replace("/༤༢ལྷ་སྲུང་།/", "<span style='  color: #7401DF;'>&nbsp;ལྷ་སྲུང་། </span>", $str);
           $str = preg_replace("/༤༣ས་ཁུལ།/", "<span style='  color: #7401DF;'>&nbsp;ས་ཁུལ། </span>", $str);
           $str = preg_replace("/༤༤ས་མིང་།/", "<span style='  color: #7401DF;'>&nbsp;ས་མིང་། </span>", $str);
           $str = preg_replace("/༤༥སངས་རྒྱས།/", "<span style='  color: #7401DF;'>&nbsp;སངས་རྒྱས། </span>", $str);
           $str = preg_replace("/༤༦སེམས་ཁམས།/", "<span style='  color: #7401DF;'>&nbsp;སེམས་ཁམས། </span>", $str);
           $str = preg_replace("/༤༧སྐྱེ་ཁམས།/", "<span style='  color: #7401DF;'>&nbsp;སྐྱེ་ཁམས། </span>", $str);
           $str = preg_replace("/༤༨སྡེ་བ།/", "<span style='  color: #7401DF;'>&nbsp;སྡེ་བ། </span>", $str);
           $str = preg_replace("/༤༩སྨན།/", "<span style='  color: #7401DF;'>&nbsp;སྨན། </span>", $str);
           $str = preg_replace("/༥༠སྲོག་ཆགས།/", "<span style='  color: #7401DF;'>&nbsp;སྲོག་ཆགས། </span>", $str);

          $str = preg_replace("/༡ལྡོག་ཚིག /", "</p><span style=' color: rgb(59, 136, 81);'><img align='middle'  src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAQAAAD4MpbhAAAACXBIWXMAACTpAAAk6QFQJOf4AAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAD0SURBVHjahJE/L0NxFIaf86a93dqw2CREGullsVlNxNCIxifoIrEYTf58AYvYxBdoxJ9IbDazoUVErAYJUTX0Dr9jKEL03j7jed6zvK/t8EWFOguM5Qve9RZbOuudBUDEHpc8s0IJrKAZnXorDAPkgIhz2pR54xdW4SGMqiNgl3dqfzWADdkV5IhZpozTB5sOVVFnnzZpbIp5TlI1Fotx7jICkcjGxSOTGT4RF1QzArfigFWKqYlt0eSIQ6zvf1PHAtYp0qD0T7/6bG+shEWeuGeDKfI/+sYn1PleM2GNOUZo8AHeDddhyWK9AJgPKGJQUXwOAGpzQfyaQSGLAAAAAElFTkSuQmCC'>&nbsp;ལྡོག་ཚིག </span>", $str);
           $str = preg_replace("/༡བསྡུར་རིམ། /", "</p><span style=' color: rgb(59, 136, 81);'><img align='middle'  src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAQAAAD4MpbhAAAACXBIWXMAACTpAAAk6QFQJOf4AAADGGlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjaY2BgnuDo4uTKJMDAUFBUUuQe5BgZERmlwH6egY2BmYGBgYGBITG5uMAxIMCHgYGBIS8/L5UBFTAyMHy7xsDIwMDAcFnX0cXJlYE0wJpcUFTCwMBwgIGBwSgltTiZgYHhCwMDQ3p5SUEJAwNjDAMDg0hSdkEJAwNjAQMDg0h2SJAzAwNjCwMDE09JakUJAwMDg3N+QWVRZnpGiYKhpaWlgmNKflKqQnBlcUlqbrGCZ15yflFBflFiSWoKAwMD1A4GBgYGXpf8EgX3xMw8BSMDVQYqg4jIKAUICxE+CDEESC4tKoMHJQODAIMCgwGDA0MAQyJDPcMChqMMbxjFGV0YSxlXMN5jEmMKYprAdIFZmDmSeSHzGxZLlg6WW6x6rK2s99gs2aaxfWMPZ9/NocTRxfGFM5HzApcj1xZuTe4FPFI8U3mFeCfxCfNN45fhXyygI7BD0FXwilCq0A/hXhEVkb2i4aJfxCaJG4lfkaiQlJM8JpUvLS19QqZMVl32llyfvIv8H4WtioVKekpvldeqFKiaqP5UO6jepRGqqaT5QeuA9iSdVF0rPUG9V/pHDBYY1hrFGNuayJsym740u2C+02KJ5QSrOutcmzjbQDtXe2sHY0cdJzVnJRcFV3k3BXdlD3VPXS8Tbxsfd99gvwT//ID6wIlBS4N3hVwMfRnOFCEXaRUVEV0RMzN2T9yDBLZE3aSw5IaUNak30zkyLDIzs+ZmX8xlz7PPryjYVPiuWLskq3RV2ZsK/cqSql01jLVedVPrHzbqNdU0n22VaytsP9op3VXUfbpXta+x/+5Em0mzJ/+dGj/t8AyNmf2zvs9JmHt6vvmCpYtEFrcu+bYsc/m9lSGrTq9xWbtvveWGbZtMNm/ZarJt+w6rnft3u+45uy9s/4ODOYd+Hmk/Jn58xUnrU+fOJJ/9dX7SRe1LR68kXv13fc5Nm1t379TfU75/4mHeY7En+59lvhB5efB1/lv5dxc+NH0y/fzq64Lv4T8Ffp360/rP8f9/AA0ADzT6lvFdAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAAEeSURBVHjahJExSwNBEIW/GbJJd0EbrQRBUuRMY2drpVhIMPgDJKWNnVZqquts1M5/kEpR7OysLYyCiK2FoBgjmBNuLO7ibULAV2wx3/Le7jxpkalKkxVmXcn61mFfz9OxAlDkiGte2aAMUtIFPbNOMglQAIpc0KXCB56kylMyoz0FDvmkMYwBZEJuoEDIOhWMMZJasqY0OXFdhzOHw/3BHQFgT1mWy2zmuWQYCaXVJ3DfuSuWY4hMR2KHMGDKs9T8d0HkRVmsXMkmggxwapyekdmDcprUfwIf51eAA2nBMdM0Bn9wfsCd1BTYJqBNeXRN9m6LaVkxq7zwyC7z+abs3ua0N2gzZoslpmjzBdZPbpO6hPoGIGNL8KT/cH4HAKqcVY74tWwOAAAAAElFTkSuQmCC'>&nbsp;བསྡུར་རིམ། </span>", $str);

          // $str = preg_replace("/༡མིང་གི་རྣམ་གྲངས།/", "<div class='dhtmlgoodies_question' onClick='mangginamdang()'><img align='middle' src='data:image/png;base64,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'> མིང་གི་རྣམ་གྲངས།&nbsp;</div><div id='dhtmlgoodies_answer' class='dhtmlgoodies_answer' ><div></span>", $str);

           
           $str = preg_replace("/༡མིང་གི་རྣམ་གྲངས།/", "<div class='dhtmlgoodies_question collapsible'><img align='middle' src='data:image/png;base64,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'> མིང་གི་རྣམ་གྲངས།&nbsp;</div><div id='dhtmlgoodies_answer' class='dhtmlgoodies_answer content' ><div></span>", $str);

           
           
           $str = preg_replace("/༡འདྲ་ཚིག /", "<p></p> <span style='  color: rgb(59, 136, 81);'>&nbsp;འདྲ་ཚིག </span>", $str);
           $str = preg_replace("/༡ཉེ་ཚིག /", "<p <span style='  color: rgb(59, 136, 81)'>&nbsp;ཉེ་ཚིག </span>", $str);

           $str = preg_replace("/༡ཆོས་ལུགས། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;ཆོས་ལུགས། </span>", $str);
           $str = preg_replace("/༡ཆོས་ལུགས། ལྟ་གྲུབ། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;ཆོས་ལུགས། ལྟ་གྲུབ། </span>", $str);
           $str = preg_replace("/༡ལོ་རྒྱུས། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;ལོ་རྒྱུས། </span>", $str);
           $str = preg_replace("/༡གསོ་རིག /", "<span style='color: rgb(45, 97, 234);'>&nbsp;གསོ་རིག </span>", $str);
           $str = preg_replace("/༡ཆབ་སྲིད། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;ཆབ་སྲིད། </span>", $str);
           $str = preg_replace("/༡ཚན་རིག /", "<span style='color: rgb(45, 97, 234);'>&nbsp;ཚན་རིག </span>", $str);
           $str = preg_replace("/༡བཟོ་རིག /", "<span style='color: rgb(45, 97, 234);'>&nbsp;བཟོ་རིག </span>", $str);
           $str = preg_replace("/༡རྩིས་རིག /", "<span style='color: rgb(45, 97, 234);'>&nbsp;རྩིས་རིག </span>", $str);
           $str = preg_replace("/༡ལྟ་གྲུབ། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;ལྟ་གྲུབ། </span>", $str);
           $str = preg_replace("/༡ཁྲིམས་ལུགས། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;ཁྲིམས་ལུགས། </span>", $str);
           $str = preg_replace("/༡དཔལ་འབྱོར། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;དཔལ་འབྱོར། </span>", $str);
           $str = preg_replace("/༡དམག་དོན། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;དམག་དོན། </span>", $str);
           $str = preg_replace("/༡འཛིན་སྐྱོང། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;འཛིན་སྐྱོང། </span>", $str);
           $str = preg_replace("/༡སྒྲ་རིག་པ། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;སྒྲ་རིག་པ། </span>", $str);
           $str = preg_replace("/༡སློབ་གསོ། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;སློབ་གསོ། </span>", $str);
           $str = preg_replace("/༡ཚད་མ། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;ཚད་མ། </span>", $str);
           $str = preg_replace("/༡སྐྱེ་ཁམས་རིག་པ། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;སྐྱེ་ཁམས་རིག་པ། </span>", $str);
           $str = preg_replace("/༡རྩོམ་རིག /", "<span style='color: rgb(45, 97, 234);'>&nbsp;རྩོམ་རིག </span>", $str);
           $str = preg_replace("/༡འཛིན་སྐྱོང་། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;འཛིན་སྐྱོང་། </span>", $str);
           $str = preg_replace("/༡འཆད་རྩོམ་རིག་པ། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;འཆད་རྩོམ་རིག་པ། </span>", $str);
           $str = preg_replace("/༡ས་དཔྱད། /", "<span style='color: rgb(45, 97, 234);'>&nbsp;ས་དཔྱད། </span>", $str);

            //preg_replace("/\\s"+མདོ།/", "<span style='color: rgb(45, 97, 234);'> མདོ། </span>", $str);
           $str = preg_replace("/རྫོགས་ཆེན། /", "<span style='color: rgb(45, 97, 234);'>རྫོགས་ཆེན། </span>", $str);
           $str = preg_replace("/གསང་སྔགས། /", "<span style='color: rgb(45, 97, 234);'>གསང་སྔགས། </span>", $str);
           $str = preg_replace("/སྔགས། /", "<span style='color: rgb(45, 97, 234);'>སྔགས། </span>", $str);
           $str = preg_replace("/རྙིང་མ། /", "<span style='color: rgb(158,81, 36);'>རྙིང་མ། </span>", $str);
           $str = preg_replace("/ས་སྐྱ། /", "<span style='color: rgb(158,81, 36);'>ས་སྐྱ། </span>", $str);
           $str = preg_replace("/དགེ་ལུགས། /", "<span style='color: rgb(45, 97, 234);'>དགེ་ལུགས། </span>", $str);
           $str = preg_replace("/བཀའ་བརྒྱུད། /", "<span style='color: rgb(45, 97, 234);'>བཀའ་བརྒྱུད། </span>", $str);
           $str = preg_replace("/ཇོ་ནང་། /", "<span style='color: rgb(158,81, 36);'>ཇོ་ནང་། </span>", $str);
           $str = preg_replace("/བོན། /", "<span style='color: rgb(158,81, 36);'>བོན། </span>", $str);
           $str = preg_replace("/ཐལ་འགྱུར་བ། /", "<span style='color: rgb(45, 97, 234);'>ཐལ་འགྱུར་བ། </span>", $str);
           $str = preg_replace("/རང་རྒྱུད་པ། /", "<span style='color: rgb(45, 97, 234);'>རང་རྒྱུད་པ། </span>", $str);
           $str = preg_replace("/ཕར་ཕྱིན། /", "<span style='color: rgb(158,81, 36);'>ཕར་ཕྱིན། </span>", $str);
           $str = preg_replace("/དབུ་མ། /", "<span style='color: rgb(158,81, 36);'>དབུ་མ། </span>", $str);
           $str = preg_replace("/འདུལ་བ། /", "<span style='color: rgb(45, 97, 234);'>འདུལ་བ། </span>", $str);
            //preg_replace("/མཛོད། /", "<span style='color: rgb(45, 97, 234);'>མཛོད། </span>", $str);
           $str = preg_replace("/རྣམ་འགྲེལ། /", "<span style='color: rgb(158,81, 36);'>རྣམ་འགྲེལ། </span>", $str);
           $str = preg_replace("/སྡོམ་གསུམ། /", "<span style='color: rgb(158,81, 36);'>སྡོམ་གསུམ། </span>", $str);
            
            
            
       
           //$str = preg_replace("/གོ།/", "གོ&nbsp;།", $str);
           //  &nbsp;

       
            //མཆན་གྱི་སྐོར།
            $note = $row['note'];
            $note = str_replace("/ རྩོམ་པ་པོ།", "/རྩོམ་པ་པོ།", $note);
            $note = str_replace("མིང་/3", "མིང/(3)", $note);
            
            
            $note = str_replace("མིང/(1)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b1' id='note-a1'>(༡)</a></span></span>", $note);
            $note = str_replace("མིང/(2)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b2' id='note-a2'>(༢)</a></span></span>", $note);
            $note = str_replace("མིང/(3)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b3' id='note-a3'>(༣)</a></span></span>", $note);
            $note = str_replace("མིང/(4)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b4' id='note-a4'>(༤)</a></span></span>", $note);
            $note = str_replace("མིང/(5)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b5' id='note-a5'>(༥)</a></span></span>", $note);
            $note = str_replace("མིང/(6)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b6' id='note-a6'>(༦)</a></span></span>", $note);
            $note = str_replace("མིང/(7)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b7' id='note-a7'>(༧)</a></span></span>", $note);
            $note = str_replace("མིང/(8)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b8' id='note-a8'>(༨)</a></span></span>", $note);
            $note = str_replace("མིང/(9)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b9' id='note-a9'>(༩)</a></span></span>", $note);
            $note = str_replace("མིང/(10)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b10' id='note-a10'>(༡༠)</a></span></span>", $note);
            $note = str_replace("མིང/(11)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b11' id='note-a11'>(༡༡)</a></span></span>", $note);
            $note = str_replace("མིང/(12)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b12' id='note-a12'>(༡༢)</a></span></span>", $note);
            $note = str_replace("མིང/(13)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b13' id='note-a13'>(༡༣)</a></span></span>", $note);
            $note = str_replace("མིང/(14)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b14' id='note-a14'>(༡༤)</a></span></span>", $note);
            $note = str_replace("མིང/(15)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b15' id='note-a15'>(༡༥)</a></span></span>", $note);
            $note = str_replace("མིང/(16)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b16' id='note-a16'>(༡༦)</a></span></span>", $note);
            $note = str_replace("མིང/(17)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b17' id='note-a17'>(༡༧)</a></span></span>", $note);
            $note = str_replace("མིང/(18)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b18' id='note-a18'>(༡༨)</a></span></span>", $note);
            $note = str_replace("མིང/(19)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b19' id='note-a19'>(༡༩)</a></span></span>", $note);
            $note = str_replace("མིང/(20)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b20' id='note-a20'>(༢༠)</a></span></span>", $note);
            
            $note = str_replace("མིང/(22)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b2' id='note-a2'>(༢༢)</a></span></span>", $note);
            $note = str_replace("མིང/(23)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b3' id='note-a3'>(༢༣)</a></span></span>", $note);
            $note = str_replace("མིང/(24)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b4' id='note-a4'>(༢༤)</a></span></span>", $note);
            $note = str_replace("མིང/(25)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b5' id='note-a5'>(༢༥)</a></span></span>", $note);
            $note = str_replace("མིང/(26)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b6' id='note-a6'>(༢༦)</a></span></span>", $note);
            $note = str_replace("མིང/(27)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b7' id='note-a7'>(༢༧)</a></span></span>", $note);
            $note = str_replace("མིང/(28)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b8' id='note-a8'>(༢༨)</a></span></span>", $note);
            $note = str_replace("མིང/(29)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b9' id='note-a9'>(༢༩)</a></span></span>", $note);
            $note = str_replace("མིང/(30)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b10' id='note-a10'>(༣༠)</a></span></span>", $note);
            $note = str_replace("མིང/(31)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b11' id='note-a11'>(༣༡)</a></span></span>", $note);
            $note = str_replace("མིང/(32)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b12' id='note-a12'>(༣༢)</a></span></span>", $note);
            $note = str_replace("མིང/(33)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b13' id='note-a13'>(༣༣)</a></span></span>", $note);
            $note = str_replace("མིང/(34)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b14' id='note-a14'>(༣༤)</a></span></span>", $note);
            $note = str_replace("མིང/(35)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b15' id='note-a15'>(༣༥)</a></span></span>", $note);
            $note = str_replace("མིང/(36)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b16' id='note-a16'>(༣༦)</a></span></span>", $note);
            $note = str_replace("མིང/(37)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b17' id='note-a17'>(༣༧)</a></span></span>", $note);
            $note = str_replace("མིང/(38)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b18' id='note-a18'>(༣༨)</a></span></span>", $note);
            $note = str_replace("མིང/(39)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b19' id='note-a19'>(༣༩)</a></span></span>", $note);
            $note = str_replace("མིང/(40)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b20' id='note-a20'>(༤༠)</a></span></span>", $note);
            
            $note = str_replace("མིང/(41)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b1' id='note-a1'>(༤༡)</a></span></span>", $note);
            $note = str_replace("མིང/(42)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b2' id='note-a2'>(༤༢)</a></span></span>", $note);
            $note = str_replace("མིང/(43)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b3' id='note-a3'>(༤༣)</a></span></span>", $note);
            $note = str_replace("མིང/(44)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b4' id='note-a4'>(༤༤)</a></span></span>", $note);
            $note = str_replace("མིང/(45)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b5' id='note-a5'>(༤༥)</a></span></span>", $note);
            $note = str_replace("མིང/(46)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b6' id='note-a6'>(༤༦)</a></span></span>", $note);
            $note = str_replace("མིང/(47)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b7' id='note-a7'>(༤༧)</a></span></span>", $note);
            $note = str_replace("མིང/(48)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b8' id='note-a8'>(༤༨)</a></span></span>", $note);
            $note = str_replace("མིང/(49)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b9' id='note-a9'>(༤༩)</a></span></span>", $note);
            $note = str_replace("མིང/(50)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b10' id='note-a10'>(༥༠)</a></span></span>", $note);
            $note = str_replace("མིང/(51)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b11' id='note-a11'>(༥༡)</a></span></span>", $note);
            $note = str_replace("མིང/(52)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b12' id='note-a12'>(༥༢)</a></span></span>", $note);
            $note = str_replace("མིང/(53)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b13' id='note-a13'>(༥༣)</a></span></span>", $note);
            $note = str_replace("མིང/(54)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b14' id='note-a14'>(༥༤)</a></span></span>", $note);
            $note = str_replace("མིང/(55)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b15' id='note-a15'>(༥༥)</a></span></span>", $note);
            $note = str_replace("མིང/(56)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b16' id='note-a16'>(༥༦)</a></span></span>", $note);
            $note = str_replace("མིང/(57)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b17' id='note-a17'>(༥༧)</a></span></span>", $note);
            $note = str_replace("མིང/(58)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b18' id='note-a18'>(༥༨)</a></span></span>", $note);
            $note = str_replace("མིང/(59)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b19' id='note-a19'>(༥༩)</a></span></span>", $note);
            $note = str_replace("མིང/(60)", "<br><span style='  color: #265daf;'>འཇུག་དོན།<span style='color: #000000;'>&nbsp;<a class='not-n' href='#note-b20' id='note-a20'>(༦༠)</a></span></span>", $note);
            
            $note = str_replace("ཀ/རྩོམ་པ་པོ།", "<span style='  color: #265daf;'>རྩོམ་པ་པོ།</span>", $note);
            $note = str_replace("ཁ/ལོ་ཙཱ་བ།", "<span style='  color: #265daf;'>ལོ་ཙཱ་བ། </span>", $note);
            $note = str_replace("ག/གཏེར་སྟོན།", "<span style='  color: #265daf;'>གཏེར་སྟོན།</span>", $note);
            $note = str_replace("ང/མཚན་བྱང་།", "<span style='  color: #265daf;'>མཚན་བྱང་།</span>", $note);
            $note = str_replace("ཅ/རྩོམ་སྒྲིག་པ།", "<span style='  color: #265daf;'>རྩོམ་སྒྲིག་པ།</span>", $note);
            $note = str_replace("ཆ/དཔར་སྐྲུན་གནས་ཚུལ།", "<span style='  color: #265daf;'>དཔར་སྐྲུན་གནས་ཚུལ།</span>", $note);
            $note = str_replace("ཇ/ཤོག་ངོས།", "<span style='  color: #265daf;'>ཤོག་ངོས།</span>", $note);
            $note = str_replace("ཉ/རྩོམ་སྒྲིག་གི་རྣམ་པ།", "<span style='  color: #265daf;'>རྩོམ་སྒྲིག་གི་རྣམ་པ།</span>", $note);
            $note = str_replace("ཏ/ཐིག་ཕྲེང་།", "<span style='  color: #265daf;'>ཐིག་ཕྲེང་།</span>", $note);
            $note = str_replace("ཐ/པོད་ཕྲེང་།", "<span style='  color: #265daf;'>པོད་ཕྲེང་།</span>", $note);
            $note = str_replace("ད/དེབ་ཕྲེང་།", "<span style='  color: #265daf;'>དེབ་ཕྲེང་།</span>", $note);
            $note = str_replace("ན/ཆེད་སྒྲིག", "<span style='  color: #265daf;'>ཆེད་སྒྲིག</span>", $note);
            $note = str_replace("ཉ/གསུང་འབུམ།", "<span style='  color: #265daf;'>གསུང་འབུམ།</span>", $note);
            $note = str_replace("ཇ/ཤོག་གྲངས།", "<span style='  color: #265daf;'>ཤོག་ངོས།</span>", $note);
            $note = str_replace("ཏ/ཆེད་བསྒྲིགས།", "<span style='  color: #265daf;'>ཆེད་བསྒྲིགས།</span>", $note);
            $note = str_replace("ང/མཚན་བྱང།", "<span style='  color: #265daf;'>མཚན་བྱང།</span>", $note);
            //ང/མཚན་བྱང།
            //ཏ/ཆེད་བསྒྲིགས།
            //ཇ/ཤོག་གྲངས།
            //ཉ/གསུང་འབུམ།
            $note = str_replace("<br><br>", "<br>", $note);
            $note = str_replace("(", "", $note);
            $note = str_replace(")", " ", $note);

            $note = str_replace("༽", " ", $note);
            $note = str_replace("༼", " ", $note);
            $note = str_replace("„", "-", $note);
            $note = str_replace("  ", " ", $note);
            //$note = substr("<br>", 4, "", $note);

         $note1 = $note;
         $note1 = str_replace("མིང/ ", "", $note1);
        
  
           $str = preg_replace("/<BR><BR><BR>/", "<BR>", $str);
           $str = preg_replace("/<br><br><br>/", "<BR>", $str);
           $str = preg_replace("/<BR><BR>/", "<BR>", $str);
           $str = preg_replace("/<br><br>/", "<BR>", $str);
           $str = preg_replace("/འོ། །/", "འོ།།", $str);
               
           $word = $row['word']."།";
           $word = str_replace("་།", "།", $word);
           $word = str_replace("  ", "&nbsp", $word);
           $word = str_replace("ཀ།", "ཀ", $word);
           $word = str_replace("ག།", "ག", $word);
           $word = str_replace("ཤ།", "ཤ", $word);
           $word = str_replace("ཿ།", "ཿ ", $word);
           $word = str_replace("!!", ",", $word);
           
           ?>
     
            <!-- //print "<div class='row'>";
            //print "<div class='col-8'>";
            print "<div  style='font-family: Monlam U2;font-size: 28px;color: #770101;' class='border-bottom word'>".$word."";
            ?>
            
            <button style="color: #00c4ff;"  type="button" class="btn play-word" onclick="startQuiz()"><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 21px;font-family: Times New Roman;">/siem/ˈtʃæn/</span>
            <button style="color: #4cdc03;"  type="button" class="btn play-word" onclick="startQuiz()"><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 21px;font-family: Times New Roman;">/siem/ˈtʃæn/</span>
            <button style="color: #770101;"  type="button" class="btn play-word" onclick="startQuiz()"><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 21px;font-family: Times New Roman;">/siem/ˈtʃæn/</span>   
            </div>
            འགྲེལ་བཤད་ཨ་མ། -->
            <div class="container" id="main-dic-body">
       
            <div style="padding-bottom: 50px;padding-right: 15px; padding-left: 15px;" class="dic-body-bag row bg-white border-0 rounded-3 ">
            <div style="padding-bottom: 0px;padding-top: 10px;" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 border-0  rounded-start" >
               <!-- འགྲེལ་བཤད། -->
               <?php
               global $word;
               ?>
               <div  style='font-family: Monlam U2;font-size: 28px;color: #770101;border-color: #99999924 !important;' class='border-bottom word'><?php print $word ?>
           
               
               <button style="color: #00c4ff;"  type="button" class="btn play-word" ><i class="bi bi-volume-up"></i></button>
               <span style="color: #797777;font-size: 14px;font-family: Monlam;">མདོ།</span>
               <button style="color: #4cdc03;"  type="button" class="btn play-word" ><i class="bi bi-volume-up"></i></button>
               <span style="color: #797777;font-size: 14px;font-family: Monlam;">དབུས།</span>
               <button style="color: #770101;"  type="button" class="btn play-word" ><i class="bi bi-volume-up"></i></button>
               <span style="color: #797777;font-size: 14px;font-family: Monlam;">ཁམས།</span> 
                
                </div>
            
              
                
               <?php
               echo "<div style='padding-top: 10px;' class='dic-12' >";
              $difnation1 = $str;
              $difnation1 = str_replace("། །", "།&nbsp;།", $difnation1);
                echo $difnation1;
              if($note1 != ''){
                  echo "</div>";
                  echo "</div>";
                 echo "<div class='refs'>";
                 echo 'ཡིག་ཆའི་ཁུངས།';
                 echo "</div>";
                 echo "<div class='note1'>";
                 echo $note1;
              }
                 echo "</div></div></div></div></div></div>";
               ?>
                
               </div>
               </div>
             
              
               <?php
               
        
    }
    // bod དབྱིན་ཚིག་མཛོད།
    elseif($dicOption =="དབྱིན་བོད།")
    {
        $keyword = str_replace("་་", "", $keyword);
        $keyword = str_replace("་", "", $keyword);
        $res = $db_en_tb->query("SELECT EnWord, TbDef, Dic_name FROM EnToTb WHERE EnWord like  '$keyword' ORDER BY Dic_Name DESC");
    
        
           
            echo '<div class="container" id="main-dic-body">';
       
            echo '<div style="padding-bottom: 50px;padding-right: 15px; padding-left: 15px;" class="dic-body-bag row bg-white border-0 rounded-3 ">';
            echo '<div style="padding-bottom: 0px;padding-top: 10px;" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 border-0  rounded-start" >';
             
            echo "<div style='padding-top: 10px;' class='dic-12' >";
            print "<div  style='font-family: Monlam U2;font-size: 28px;color: #770101;' class='border-bottom word'>".$keyword."";
                ?>
                
                <button style="color: #00c4ff;"  type="button" class="btn play-word" onclick= "alert('ད་དུང་སྒྲ་མེད། བཟོ་བཞིན་པ་ཡིན།')" ><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 14px;font-family: Monlam;">ཨ་རི།</span>
            <button style="color: #4cdc03;"  type="button" class="btn play-word" onclick= "alert('ད་དུང་སྒྲ་མེད། བཟོ་བཞིན་པ་ཡིན།')"><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 14px;font-family: Monlam;">དབྱིན་ཇི།།</span>
            
                </div>
                <?php
            $imagedic ="";
        
            while ($row = $res->fetchArray()) 
           
            {
            
                $main =  $row['TbDef'];
                $DicName = $row['Dic_name'];
                print "<span id='dic-name' class='dic-name'><span style='color: #7977775c;'><i class='bi bi-bookmark-plus-fill'></i> </span>".$DicName."</span>"; 
                $main = preg_replace("/11. /", "༌1༌1༌ ", $main); 
                
                $str = $main;
    
       
               $word = $row['EnWord'];
   
                print "<span id='dic-body' class='dic-body-bag ac-ac' style='font-size: 15px;line-height: 35px; word-wrap: break-word;font-family: Monlam;'>".$str."</span><br>";
  
            }
        
            echo "<div style='color: #a39e9e;text-align: center;padding: 10px;margin-top: 150px;border: 1px solid #d9d7d7;border-radius: 10px;'><strong>གསལ་བཤད། </strong> དེང་གི་སྤྱི་ཚོགས་ཀྱི་དགོས་མཁོ་ལ་དམིགས་ནས་དབྱིན་བོད་དང་འབྲེལ་བའི་ཚིག་མཛོད་ཁག་ཕྱོགས་སྒྲིག་བྱས་པ་ལས། འགྲེལ་བཤད་འགྲིག་མིན་ལ་འདི་ནས་འགན་ལེན་བྱེད་མི་ཐུབ། རྒྱུ་མཚན་ནི་བཟོ་བཅོས་བྱེད་པའི་བདག་དབང་མེད། </div>";
            echo "</div></div></div></div></div></div>";
            
            
    }
    elseif($dicOption =="བོད་དབྱིན།")
    {
        
        $res = $db_tb_en->query("SELECT  tb_key, Dic_Name, def_dic FROM TbToEn WHERE tb_key GLOB  '$keyword' ORDER BY Dic_Name DESC");
    
       
            echo '<div class="container" id="main-dic-body">';
       
            echo '<div style="padding-bottom: 50px;padding-right: 15px; padding-left: 15px;" class="dic-body-bag row bg-white border-0 rounded-3 ">';
            echo '<div style="padding-bottom: 0px;padding-top: 10px;" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 border-0  rounded-start" >';
             
            echo "<div style='padding-top: 10px;' class='dic-12' >";
           
            print "<div  style='font-family: Monlam U2;font-size: 28px;color: #770101;' class='border-bottom word'>".$keyword."";
                ?>
                
                <button style="color: #00c4ff;"  type="button" class="btn play-word" ><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 14px;font-family: Monlam;">མདོ།</span>
            <button style="color: #4cdc03;"  type="button" class="btn play-word" ><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 14px;font-family: Monlam;">དབུས།</span>
            <button style="color: #770101;"  type="button" class="btn play-word"><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 14px;font-family: Monlam;">ཁམས།</span>  
                </div>
                <?php
           
            while ($row = $res->fetchArray()) 
            {
            
                $DicName = $row['Dic_Name'];
                $main =  $row['def_dic'];               
               // print "<span id='dic-name' class='dic-name'>".$DicName."</span>";  
                $str = $main;
                
                
                //$str = preg_replace('/[\[{\(].*?[\]}\)]/' , '', $str);
                
            
               

              
                $str = preg_replace('/\{.*?\}/', '', $str);
                $str = str_replace("]/", "]", $str);
           
               
               $str = preg_replace("/<BR><BR><BR>/", "<BR>", $str);
               $str = preg_replace("/<br><br><br>/", "<BR>", $str);
               $str = preg_replace("/<BR><BR>/", "<BR>", $str);
               $str = preg_replace("/<br><br>/", "<BR>", $str);
                print "<span id='dic-name' class='dic-body-bag ac-ac dic-name'><span style='color: #7977775c;'><i class='bi bi-bookmark-plus-fill'></i> </span>".$DicName."</span><span id='dic-body' class='ac-ac'  style='font-size: 17px; word-wrap: break-word;font-family:Arial,Monlam;'>".$str."</span><br>";
            //}

                
                
            
         }
        // }else{
        //     echo "<div class='list container py-4 body-dic' >";
        // print "<div  style='font-size: 14px; font-family: Monlam;'class=''>བོད་དབྱིན་ཚིག་མཛོད་ནང་བཙལ་འབྲས་<<span style='color: red'>". $keyword."</span>>འདི་འདྲ་ཞིག་རྙེད་མ་སོང་པས་སྐྱར་དུ་འཚོལ་བཤེར་གནང་རོགས། </div>";
        
        //  echo "</div></div></div>";

        // }
         echo "<div style='color: #a39e9e;text-align: center;padding: 10px;margin-top: 150px;border: 1px solid #d9d7d7;border-radius: 10px;'><strong>གསལ་བཤད། </strong>དེང་གི་སྤྱི་ཚོགས་ཀྱི་དགོས་མཁོ་ལ་དམིགས་ནས་བོད་དབྱིན་དང་འབྲེལ་བའི་ཚིག་མཛོད་ཁག་ཕྱོགས་སྒྲིག་བྱས་པ་ལས། འགྲེལ་བཤད་འགྲིག་མིན་ལ་འདི་ནས་འགན་ལེན་བྱེད་མི་ཐུབ། རྒྱུ་མཚན་ནི་བཟོ་བཅོས་བྱེད་པའི་བདག་དབང་མེད། </div>";
        echo "</div></div></div></div></div></div>";
    }
    elseif($dicOption =="བོད་ལེཊ།")
    {
    
        $res = $db_tb_sk->query("SELECT DISTINCT tb_key, Dic_Name, def_dic FROM TbToSik WHERE tb_key GLOB  '$keyword' ORDER BY Dic_Name DESC");
    
        //$statement = $pdo->query("SELECT word, explanation, image, note FROM wordIndex WHERE word LIKE '$keyword'  LIMIT 1");
        //run the SQL
        //$result_array = $statement->fetch(PDO::FETCH_BOTH);
        $stmt = $db_tb_sk->prepare("SELECT DISTINCT tb_key, Dic_Name, def_dic FROM TbToSik WHERE tb_key GLOB  '$keyword' ORDER BY Dic_Name DESC");
        $result = $stmt->execute();
        
        if($result)
        {
            //show it on the screen
             echo '<div class="container" id="main-dic-body">';
       
            echo '<div style="padding-bottom: 50px;padding-right: 15px; padding-left: 15px;" class="dic-body-bag row bg-white border-0 rounded-3 ">';
            echo '<div style="padding-bottom: 0px;padding-top: 10px;" class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 border-0  rounded-start" >';
             
            echo "<div style='padding-top: 10px;' class='dic-12' >";
           
            print "<div  style='font-family: Monlam U2;font-size: 28px;color: #770101;' class='dic-body-bag border-bottom word'>".$keyword."";
                ?>
                
                <button style="color: #00c4ff;"  type="button" class="btn play-word" ><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 14px;font-family: Monlam;">མདོ།</span>
            <button style="color: #4cdc03;"  type="button" class="btn play-word" ><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 14px;font-family: Monlam;">དབུས།</span>
            <button style="color: #770101;"  type="button" class="btn play-word"><i class="bi bi-volume-up"></i></button>
            <span style="color: #797777;font-size: 14px;font-family: Monlam;">ཁམས།</span> 
                </div>
                <?php
           
            while ($row = $res->fetchArray()) 
            {
            
                $DicName = $row['Dic_Name'];
                $main =  $row['def_dic'];               
                print "<span id='dic-name' class='dic-name'>".$DicName."</span>";  
                $str = $main;
               
              
                print "<span id='dic-body'  style='font-size: 17px; word-wrap: break-word;font-family:Arial,Monlam;'>".$str."</span><br>";
            }

                echo "</div></div></div></div></div></div>";
                
            
        }
        else
        {
            echo "<div class='list container py-4 body-dic' >";
            print "<div  style='font-family: Monlam U2;font-size: 28px;color: #770101;' class='border-bottom word'>";
            print "<div  style='font-size: 15px; line-height: 35px;font-family: Monlam;'class=''>སྨོན་ལམ་ཚིག་མཛོད་ཆེན་མོར་ཕེབས་པར་དགའ་བསུ་ཞུ།</div>";
            echo "</div></div></div>";
    
        }
    }
    else
    {
        echo "<div class='list container py-4 body-dic' >";
            print "<div  style='font-family: Monlam U2;font-size: 28px;color: #770101;' class='border-bottom word'>";
            print "<div  style='font-size: 15px; line-height: 35px;font-family: Monlam;'class=''>སྨོན་ལམ་ཚིག་མཛོད་ཆེན་མོར་ཕེབས་པར་དགའ་བསུ་ཞུ།</div>";
            echo "</div></div></div>";

    }
    
    
        
    
}else
{
    echo "<div class='ac-ac list container py-4 body-dic' >";
            print "<div class='ac-ac'  style='font-family: Monlam U2;font-size: 28px;border-radius: 10px;color: #770101;min-height: 500px;background-color: white;padding: 20px;color: black;' class='border-bottom word'>";
            print "<div class='ac-ac' style='font-size: 15px; color: #999;line-height: 35px;font-family: Monlam;'class=''><h2 style='text-align: center;padding-top: 15px;'>སྨོན་ལམ་ཚིག་མཛོད་ཆེན་མོར་ཐུགས་སྣང་གནང་བར་དགའ་བསུ་ཞུ།</h2><br>སྨོན་ལམ་ཚིག་མཛོད་ཆེན་མོ་ནི། ཕྱི་ལོ་༢༠༡༢ ཟླ་༤ ཚེས་ ༢༠ ལ་དབུ་འཛུགས་བྱས་ཤིང་། ཕྱི་ལོ་༢༠༢༡ ལོའི་ཟླ་ ༡༢ ཚེས་ ༣༡ བར་དུ་རྩོམ་སྒྲིག་བྱས་པ་ཞིག་ཡིན་ལ། སྨོན་ལམ་བོད་ཀྱི་བརྡ་འཕྲིན་ཞིབ་འཇུག་ཁང་གིས་གཙོ་འགན་བླངས་ཤིང་། བོད་ཀྱི་ཤེས་ཡོན་ཚོགས་སྡེ་ཁག་གང་མང་ཞིག་དང་མཉམ་འབྲེལ་བྱས་ནས་རྩོམ་སྒྲིག་སྡེ་ཚན་ ༣༥ ཡི་རྩོམ་སྒྲིག་པ་ ༢༠༠ ལྷག་མཉམ་ཞུགས་ཀྱིས་རྩོམ་སྒྲིག་བྱས་པ་ཞིག་ཡིན། འདི་ནི་སྐད་ཡིག་རིག་གཞུང་དང་འབྲེལ་བའི་མཉམ་འབྲེལ་ལས་གཞི་རྒྱ་ཆེ་བ་ཞིག་ཡིན། 
            <br>སྨོན་ལམ་ཚིག་མཛོད་ཆེན་མོའི་དྲ་ལམ་ཚིག་མཛོད་ (www.monlamdic.com) དངོས་སུ་ཕྱི་ལོ་ ༢༠༢༢ ལོའི་ཟླ་ ༥ ཚེས་ ༢༧ ཉིན་ཤར་གཏོང་བྱས་ཡོད། རིང་མིན་ Windows, Mac OS X, iOS, Android མ་ལག་ཁག་སོ་སོར་བཀོལ་ཆོག་པའི་མཉེན་ཆས་གསར་པ་རིན་མེད་ཐོག་འགྲེམ་སྤེལ་ཞུ་རྒྱུ་ཡིན།
           ཚིག་མཛོད་ཆེན་མོ་ཚར་གཅིག་ལ་པོད་ ༡༤༨ དང་ཟུར་བཀོལ་པོད་ ༧༥ བཅས་པོད་ ༢༢༣ གྱི་བདག་ཉིད་ཅན་ཞིག་ཡིན། འདི་ལ་ཤོག་ངོས་ 1,33,870 ལྷག་ཡོད་པ་དང་ཡང་ན་ཚེག་བར་ 64,663,121 ལྷག་ཡོད། འདི་ལ་མ་ཚིག་གཙོ་བོ། 395,000 དང་། དཔེར་བརྗོད། 240,884 ཡོད། ཚིག་མཛོད་འདི་ནི་འཛམ་གླིང་འདིར་དེབ་ཕྲེང་མང་ཤོས་ཀྱི་ཚིག་མཛོད་དུ་གྱུར་ཡོད།
            <br><br><p style='text-align: right;'>ཁྱེད་ལ་ཐུགས་ཕན་སོས་པའི་རེ་བ་བཅས་སྨོན་ལམ་བོད་ཀྱི་བརྡ་འཕྲིན་ཞིབ་འཇུག་ཁང་ནས།</p>
            <div style='text-align: center;'>
            <img style=' margin-bottom: 50px;' src='assets/img/apple-touch-icon.png' alt='Monlam Grand Tibetan Dictionary' >
            </div>
            </div>";
            echo "</div></div></div>";

    
}
 ?>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

