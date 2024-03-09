
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
#dic-mn-bodyg1 {
  background-color: #062f4e !important;
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    height: 100%;
    width: 281px;
    transition: left 5.5s;

  
    z-index: 99999;
     display: none; 
     
    

}
.dic-mn-bodyg.d-flex.flex-column.flex-shrink-0.p-3.text-white.bg-dark {
    background-color: #062f4e !important;
}
</style> 

<script>
    function mydicmn() {
      const x = document.getElementById("dic-mn-bodyg1");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
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
</script>
<div id="dic-mn-bodyg1" class="dic-mn-bodyg"> 
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
     
      
      
    </ul>
   
    
  </div>

  </div>

<div class="navbar navbar-expand-lg  p-0 " style="text-align: center;background-color: #062f4e;color: #fdf6b8; top: -8px;" >
<div class="container p-2" style="padding-top: 30px !important;position: relative" >
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
         
    </div>
</div>

   
   