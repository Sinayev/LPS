<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
session_start();
    if($_SESSION['role']=='1'):?>
      
      <!DOCTYPE html>
<html >
    <head >
        <title>LPS</title>
         <link rel="shortcut icon" href="../image/lps.png" type="image/x-icon"> 
        <style>
        a{font-family: 'Roboto Slab', serif;}
           *, *:before, *:after {-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}
body{background:;line-height:1.5;font-family:sans-serif;text-transform:;font-size:35px;color:#fff}
a{text-decoration:none;color:#594093}
#header{background:#A1DAF7;width:100%; position:relative}
#header:after{content:"";clear:both;display:block}
.search{float:right;padding:30px}
input{border:none;padding:10px;border-radius:20px}
.logo{float:left;padding:26px 0 26px}
.logo a{font-size:28px;display:block;padding:0 0 0 20px}
nav{float:left;}
nav>ul{float:left;position:relative}
nav li{list-style:none;float:left}
nav .dropdown{position:relative}
nav li a{float:left;padding:50px 90px 0px 0px; margin-left:0px}
nav li a:hover{background:#A1DAF7}
nav li ul{display:none}
nav li:hover ul{display:inline}
nav li li{float:none}
nav .dropdown ul{position:absolute;left:0;top:100%;background:#fff;padding:20px 0;border-bottom:3px solid #34495e}
nav .dropdown li{white-space:nowrap}
nav .dropdown li a{padding:10px 35px;font-size:13px;min-width:200px}
nav .mega-dropdown{width:100%;position:absolute;top:100%;left:0;background:#fff;overflow:hidden;padding:20px 35px;border-bottom:3px solid #34495e}
nav li li a{float:none;color:#333;display:block;padding:8px 10px;border-radius:3px;font-size:13px}
nav li li a:hover{background:#bdc3c7;background:#FAFBFB}
.mega-col{width:25%;float:left}
#menu-icon{position:absolute;right:0;top:50%;margin-top:-12px;margin-right:30px;display:none}
#menu-icon span{border:2px solid #fff;width:30px;margin-bottom:5px;display:block;-webkit-transition:all .2s;transition:all .1s}
@media only screen and (max-width: 1170px) {
}
@media only screen and (min-width: 1024px) {

}
@media only screen and (max-width: 1024px) {
  nav{display:none;width:100%;clear:both;float:none;max-height:400px;overflow-y:scroll}
  #menu-icon{display:inline;top:45px;cursor:pointer}
  #menu-icon.active .first{transform:rotate(45deg);-webkit-transform:rotate(45deg);margin-top:10px}
  #menu-icon.active .second{transform:rotate(135deg);-webkit-transform:rotate(135deg);position:relative;top:-9px;}
  #menu-icon.active .third{display:none}
  .search{float:none}
  .search input{width:100%}
  nav{padding:10px}
  nav ul{float:none}
  nav li{float:none}
  nav ul li a{float:none;padding:8px;display:block}
  #header nav ul ul{display:block;position:static;background:none;border:none;padding:0}
  #header nav a{color:#fff;padding:8px}
  #header nav a:hover{background:#fff;color:#333;border-radius:3px}
  #header nav ul li li a:before{content:"- "}
  .mega-col{width:100%}
}
td
{
    color:black;
    text-align:center;
    font-family: 'Roboto Slab', serif;
}
th
{
    color:black;
    text-align:center;
    font-family: 'Roboto Slab', serif;
}
.footer {

  bottom: 0;
  left: 0;
  right: 0;
  padding: 2rem;
  background: black;
  color: white;
  font-weight: 500;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0.2rem;
}
h6
{
    color:#DB7093;
    font-family: 'Roboto Slab', serif;
}
@media screen and (min-width: 1024px) {
.mobil
  {
      display:none;
  }
}
@media screen and (max-width: 1024px) 
{
    .footer{
        display:none;
    }
 .pc 
 {
     display:none;
 }
 #pc 
 {
     display:none;
 }
}
.no_double{border-collapse: collapse;}
        </style>
        <div id="header">
  <div class="logo">
    <div style="margin-left:120px;width: 80px; height: 80px;background: #83A7C9;border-radius: 50%;background:white;text-algin:center;"><img style="width:100%;margin-top:10%;"src="../image/lps.png"/></div>
  </div>  
  <nav>
   
    <ul style="margin-left:200px;">
      <li>
        <img src="../image/Notebook.png" style="float:left;padding:60px 12px 0px 0px; margin-left:0px"><a href="../lps.php">Расписание</a>
      </li>
      <li>
    <img style="float:left;padding:60px 12px 0px 0px; margin-left:0px"src="../image/Book 2.png"><a onclick="history.back();">    Оценки</a>
      <li class="dropdown">
       <img style="float:left;padding:60px 12px 0px 0px; margin-left:0px; width:40px"src="../image/Running 2.png"> <a href="../cooming soon.html">Опоздания</a>
               
      </li>
      <li >
        <a style="margin-left:400px" href="/vhod/d_02_2isp/arutunovrasp.php">Профиль</a>
      </li>
      <li>

      </li>
    </ul>
  </nav>
</div>
        </head>
        <body style="background-image:url(../image/fonlps.png);">
            <script>let snowmax=40
 
// Цвета для снежинок. Для каждой конкретной снежинки цвет выбирается случайно из этого массива.
let snowcolor=new Array("#b9dff5","#7fc7ff","#7fb1ff","#7fc7ff","#b9dff5")
 
// Шрифт для снежинок
let snowtype=new Array("Times")
 
// Символ (*) и есть снежинка, в место нее можно вставить любой другой символ.
let snowletter="&#10052;"
 
// Скорость движения снежинок (от 0.3 до 2)
let sinkspeed=0.4
 
// Максимальный размер для снежинок
let snowmaxsize=40
 
// Минимальный размер для снежинок
let snowminsize=10
 
// Зона для снежинок
// 1 для всей страницы, 2 в левой части страницы
// 3 в центральной части, 4 в правой части страницы
let snowingzone=1
 
////////////////////////
///////// Конец настроек
////////////////////////
 
let snow=new Array();
let marginbottom;
let marginright;
let timer;
let i_snow=0;
let x_mv=new Array();
let crds=new Array();
let lftrght=new Array();
function randommaker(range) {
    rand=Math.floor(range*Math.random());
    return rand;
}
function initsnow() {
    marginbottom = document.documentElement.clientHeight+50
    marginright = document.body.clientWidth-15
    let snowsizerange=snowmaxsize-snowminsize
    for (i=0;i<=snowmax;i++) {
        crds[i] = 0;
        lftrght[i] = Math.random()*15;
        x_mv[i] = 0.03 + Math.random()/10;
        snow[i]=document.getElementById("s"+i)
        snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
        snow[i].size=randommaker(snowsizerange)+snowminsize
        snow[i].style.fontSize=snow[i].size+'px';
        snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
        snow[i].style.zIndex=1000
        snow[i].sink=sinkspeed*snow[i].size/5
        if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
        if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
        if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
        if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
        snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
        snow[i].style.left=snow[i].posx+'px';
        snow[i].style.top=snow[i].posy+'px';
    }
    movesnow()
}
function movesnow() {
    for (i=0;i<=snowmax;i++) {
        crds[i] += x_mv[i];
        snow[i].posy+=snow[i].sink
        snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i])+'px';
        snow[i].style.top=snow[i].posy+'px';
        
        if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
            if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
            if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
            if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
            if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
            snow[i].posy=0
        }
    }
    let timer=setTimeout("movesnow()",50)
}
 
for (i=0;i<=snowmax;i++) {
    document.body.insertAdjacentHTML("beforeend", "<span id='s"+i+"' style='pointer-events:none;user-select:none;position:fixed;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
window.onload=initsnow    </script>
            <div style="widht:100%;height:100%; background:;"><table class="no_double" id="pc" border="1px" style=":1px black;font-family: 'Roboto Slab', serif; margin:80px 80px 80px 80px;">
  <colgroup>
    
    <col span="6" style="-color:white; "><!-- Задаем цвет фона для следующего (одного) столбца таблицы-->
  </colgroup>
<tr style="-color:#DB7093	; height:100px;  ">
    <th style="width: 40px"></th>
    <th><div style=" border-radius: 72px 72px 72px 72px;border:1px solid black;margin-left:32px;margin-right:32px; ">Понедельник</div></th>
    <th><div style=" border-radius: 72px 72px 72px 72px;border:1px solid black;margin-left:32px;margin-right:32px; ">Вторник</div></th>
    <th><div style=" border-radius: 72px 72px 72px 72px;border:1px solid black;margin-left:32px;margin-right:32px; ">Среда</div></th>
    <th><div style=" border-radius: 72px 72px 72px 72px;border:1px solid black;margin-left:32px;margin-right:32px; ">Четверг</div></th>
    <th><div style=" border-radius: 72px 72px 72px 72px;border:1px solid black;margin-left:32px;margin-right:32px; ">Пятница</div></th>
  </tr>
  <tr>
    <td style="-color:#20B2AA;">1 9:00 10:35</td>
    <td>Дискретная математика с элементами математической логики <h6>пр. Антонова О.Ф каб. 205</h6></td>
    <td>МДК.02.03 Математическое моделирование <h6>пр. Москалина О.Ф каб. 403</h6></td>
    <td><table border="1px" style="height: 390px" class="no_double">
             <tr><td>Стандартизация, сертификация и техническое документирование <h6>пр. Кирилова Л.В каб. 203</h6></td>
             </tr>
             <tr> 
             <td>Дискретная математика с элементами математической логики <h6>пр. Антонова О.Ф каб.205</h6></td></tr>
             </table></td>
    <td>---------------------</td>
    <td>
        <table border="1px" style="height: 390px" class="no_double">
             <tr > 
             <td>МДК.02.02 Инструментальные средтства разработки программного обеспечения <h6>пр. Мельниченко В.В каб. 2-19</h6></td></tr>
             <tr><td>Основы алгоритмизации и програмирование (практика) <h6>пр. Тотмянина С.В(1г) каб.208</h6> <h6>пр. Мельниченко В.В(2г) каб.2-19</h6></td>
             </tr>
             </table>
             </td>
  </tr>
  <tr>
      <td style="-color:#20B2AA	;">2 10:50 12:25</td>
    <td>Элементы высшей математике <h6>пр. Антонова О.Ф каб.205</h6></td>
    <td>МДК.02.01 Технология разработки програмного обеспечиния <h6>пр. Тотмянина С.В каб.208</h6></td>
<td>Стандартизация, сертификация и техническое документирование <h6>пр. Кирилова Л.В каб.203</h6></td>
<td>Безопасность жихнидеятельности<h6></h6></td>
    <td>Основы алгоритмизации и програмирования(Практика) <h6>пр. Тотмянина С.В(1г) каб.208</h6> <h6>пр. Мельниченко В.В(2г) каб.2-19</h6></td>
  </tr>
  <tr>
      <td style="-color:#20B2AA;">3 12:40 14:15</td>
      <td>Архитектура аппаратных средств <h6>пр. Щербаков С.П каб.2-18</h6></td>
    <td>Физическая культура <h6>пр. Уланова Т.В каб.с/з</h6></td>
    <td>Иностранный язык в порфессиональной деятельности <h6>пр. Вареник С.С каб.404а</h6></td>
    <td>МДК.02.01 Технология разработки програмного обеспечиния <h6>пр. Тотмянина С.В каб.208</h6></td>
    <td>МДК.02.02 Инструментальные средтства разработки программного обеспечения <h6>пр. Мельниченко В.В каб.2-19</h6></td>  
  <tr>
      <td style="-color:#20B2AA;">4 14:30 16:05</td>
 <td> <table border="1px" width="0" class="no_double">
             <tr> 
             <td>Основы философии <h6>пр. Ветлина В.Н каб.406</h6></td></tr>
             <tr><td>Стандартизация, сертификация и техническое документирование <h6>пр. Камогоркин В.А каб. 400</h6></td>
             </tr>
             </table>
             </td>    <td>МДК.03.01 Моделирование и анализ программного обеспечения <h6>пр. Камогоркин В.А каб.400</h6></td>
    <td>Основы философии <h6>пр. Ветлина В.Н каб.406</h6></td>
    <td>Основы алгоритмизации и програмирование (Теория) <h6>пр. Тотмянина С.В каб.208</h6></td>
    <td>---------------------</td>
  </tr>
</table></div>
<h1 style="margin-left:4%;font-size:90px;text-algin:center;color:black;" class="mobil">Расписание на:</h1>
<div style="margin-left:4%;word-spacing: 9999px;font-size:100px;text-algin:center;margin-top:30%;" class="mobil">
    <a href="../raspisanie/pn.php" style=":#DB7093;">Понедельник</a>
    <a href="../raspisanie/vt.php" style=":#DB7093;">Вторник</a>
    <a href="../raspisanie/sr.php" style=":#DB7093;">Среда</a>
    <a href="../raspisanie/cht.php" style=":#DB7093;">Четверг</a>
    <a href="../raspisanie/pt.php" style=":#DB7093;">Пятница</a>
   
</div>

        </body>
        <footer class="footer" id="pc">
            2022-2023&copy; Личный помощник студента</span></div>
        </footer>
       
    
</html>


<?php elseif($_SESSION['role']='2'): ?> 
 <!DOCTYPE html>
<html>
    <head>
        <title>LPS</title>
         <link rel="shortcut icon" href="../image/lps.png" type="image/x-icon"> 
        <style>
        a{font-family: 'Roboto Slab', serif;}
           *, *:before, *:after {-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}
body{background:;line-height:1.5;font-family:sans-serif;text-transform:;font-size:35px;color:#fff}
a{text-decoration:none;color:#594093}
#header{background:#A1DAF7;width:100%; position:relative}
#header:after{content:"";clear:both;display:block}
.search{float:right;padding:30px}
input{border:none;padding:10px;border-radius:20px}
.logo{float:left;padding:26px 0 26px}
.logo a{font-size:28px;display:block;padding:0 0 0 20px}
nav{float:left;}
nav>ul{float:left;position:relative}
nav li{list-style:none;float:left}
nav .dropdown{position:relative}
nav li a{float:left;padding:50px 90px 0px 0px; margin-left:0px}
nav li a:hover{background:#A1DAF7}
nav li ul{display:none}
nav li:hover ul{display:inline}
nav li li{float:none}
nav .dropdown ul{position:absolute;left:0;top:100%;background:#fff;padding:20px 0;border-bottom:3px solid #34495e}
nav .dropdown li{white-space:nowrap}
nav .dropdown li a{padding:10px 35px;font-size:13px;min-width:200px}
nav .mega-dropdown{width:100%;position:absolute;top:100%;left:0;background:#fff;overflow:hidden;padding:20px 35px;border-bottom:3px solid #34495e}
nav li li a{float:none;color:#333;display:block;padding:8px 10px;border-radius:3px;font-size:13px}
nav li li a:hover{background:#bdc3c7;background:#FAFBFB}
.mega-col{width:25%;float:left}
#menu-icon{position:absolute;right:0;top:50%;margin-top:-12px;margin-right:30px;display:none}
#menu-icon span{border:2px solid #fff;width:30px;margin-bottom:5px;display:block;-webkit-transition:all .2s;transition:all .1s}
@media only screen and (max-width: 1170px) {
}
@media only screen and (min-width: 1024px) {

}
@media only screen and (max-width: 1024px) {
  nav{display:none;width:100%;clear:both;float:none;max-height:400px;overflow-y:scroll}
  #menu-icon{display:inline;top:45px;cursor:pointer}
  #menu-icon.active .first{transform:rotate(45deg);-webkit-transform:rotate(45deg);margin-top:10px}
  #menu-icon.active .second{transform:rotate(135deg);-webkit-transform:rotate(135deg);position:relative;top:-9px;}
  #menu-icon.active .third{display:none}
  .search{float:none}
  .search input{width:100%}
  nav{padding:10px}
  nav ul{float:none}
  nav li{float:none}
  nav ul li a{float:none;padding:8px;display:block}
  #header nav ul ul{display:block;position:static;background:none;border:none;padding:0}
  #header nav a{color:#fff;padding:8px}
  #header nav a:hover{background:#fff;color:#333;border-radius:3px}
  #header nav ul li li a:before{content:"- "}
  .mega-col{width:100%}
}
td
{
    color:black;
    text-align:center;
    font-family: 'Roboto Slab', serif;
}
th
{
    color:black;
    text-align:center;
    font-family: 'Roboto Slab', serif;
}
.footer {

  bottom: 0;
  left: 0;
  right: 0;
  padding: 2rem;
  background: black;
  color: white;
  font-weight: 500;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 0.2rem;
}
h6
{
    color:#DB7093;
    font-family: 'Roboto Slab', serif;
}
@media screen and (min-width: 1024px) {
.mobil
  {
      display:none;
  }
}
@media screen and (max-width: 1024px) 
{
    .footer{
        display:none;
    }
 .pc 
 {
     display:none;
 }
 #pc 
 {
     display:none;
 }
}
.no_double{border-collapse: collapse;}
        </style>
        <div id="header">
  <div class="logo">
    <div style="margin-left:120px;width: 80px; height: 80px;background: #83A7C9;border-radius: 50%;background:white;text-algin:center;"><img style="width:100%;margin-top:10%;"src="../image/lps.png"/></div>
  </div>  
  <nav>
   
    <ul style="margin-left:200px;">
      <li>
        <img src="../image/Notebook.png" style="float:left;padding:60px 12px 0px 0px; margin-left:0px"><a href="../lps.php">Расписание</a>
      </li>
      <li>
    <img style="float:left;padding:60px 12px 0px 0px; margin-left:0px"src="../image/Book 2.png"><a onclick="history.back();">    Оценки</a>
      <li class="dropdown">
       <img style="float:left;padding:60px 12px 0px 0px; margin-left:0px; width:40px"src="../image/Running 2.png"> <a href="../cooming soon.html">Опоздания</a>
               
      </li>
      <li >
        <a style="margin-left:400px" href="/vhod/d_02_2isp/arutunovrasp.php">Профиль</a>
      </li>
      <li>

      </li>
    </ul>
  </nav>
</div>
        </head>
        <body style="background-image:url(../image/fonlps.png);">
            <script>let snowmax=40
 
// Цвета для снежинок. Для каждой конкретной снежинки цвет выбирается случайно из этого массива.
let snowcolor=new Array("#b9dff5","#7fc7ff","#7fb1ff","#7fc7ff","#b9dff5")
 
// Шрифт для снежинок
let snowtype=new Array("Times")
 
// Символ (*) и есть снежинка, в место нее можно вставить любой другой символ.
let snowletter="&#10052;"
 
// Скорость движения снежинок (от 0.3 до 2)
let sinkspeed=0.4
 
// Максимальный размер для снежинок
let snowmaxsize=40
 
// Минимальный размер для снежинок
let snowminsize=10
 
// Зона для снежинок
// 1 для всей страницы, 2 в левой части страницы
// 3 в центральной части, 4 в правой части страницы
let snowingzone=1
 
///////////////////////////////////////
///////// Конец настроек//////////////
/////////////////////////////////////
 
let snow=new Array();
let marginbottom;
let marginright;
let timer;
let i_snow=0;
let x_mv=new Array();
let crds=new Array();
let lftrght=new Array();
function randommaker(range) {
    rand=Math.floor(range*Math.random());
    return rand;
}
function initsnow() {
    marginbottom = document.documentElement.clientHeight+50
    marginright = document.body.clientWidth-15
    let snowsizerange=snowmaxsize-snowminsize
    for (i=0;i<=snowmax;i++) {
        crds[i] = 0;
        lftrght[i] = Math.random()*15;
        x_mv[i] = 0.03 + Math.random()/10;
        snow[i]=document.getElementById("s"+i)
        snow[i].style.fontFamily=snowtype[randommaker(snowtype.length)]
        snow[i].size=randommaker(snowsizerange)+snowminsize
        snow[i].style.fontSize=snow[i].size+'px';
        snow[i].style.color=snowcolor[randommaker(snowcolor.length)]
        snow[i].style.zIndex=1000
        snow[i].sink=sinkspeed*snow[i].size/5
        if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
        if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
        if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
        if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
        snow[i].posy=randommaker(2*marginbottom-marginbottom-2*snow[i].size)
        snow[i].style.left=snow[i].posx+'px';
        snow[i].style.top=snow[i].posy+'px';
    }
    movesnow()
}
function movesnow() {
    for (i=0;i<=snowmax;i++) {
        crds[i] += x_mv[i];
        snow[i].posy+=snow[i].sink
        snow[i].style.left=snow[i].posx+lftrght[i]*Math.sin(crds[i])+'px';
        snow[i].style.top=snow[i].posy+'px';
        
        if (snow[i].posy>=marginbottom-2*snow[i].size || parseInt(snow[i].style.left)>(marginright-3*lftrght[i])){
            if (snowingzone==1) {snow[i].posx=randommaker(marginright-snow[i].size)}
            if (snowingzone==2) {snow[i].posx=randommaker(marginright/2-snow[i].size)}
            if (snowingzone==3) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/4}
            if (snowingzone==4) {snow[i].posx=randommaker(marginright/2-snow[i].size)+marginright/2}
            snow[i].posy=0
        }
    }
    let timer=setTimeout("movesnow()",50)
}
 
for (i=0;i<=snowmax;i++) {
    document.body.insertAdjacentHTML("beforeend", "<span id='s"+i+"' style='pointer-events:none;user-select:none;position:fixed;top:-"+snowmaxsize+"'>"+snowletter+"</span>")
}
window.onload=initsnow    </script>
            <div style="widht:100%;height:100%; background:;"><table class="no_double" id="pc" border="1px" style=":1px black;font-family: 'Roboto Slab', serif; margin:80px 80px 80px 80px;">
  <colgroup>
    
    <col span="6" style="background-color:white; "><!-- Задаем цвет фона для следующего (одного) столбца таблицы-->
  </colgroup>
<tr style="	; height:100px;  ">
    <th style="width: 40px"></th>
    <th><div style=" border-radius: 72px 72px 72px 72px;border:1px solid black;margin-left:32px;margin-right:32px; ">Понедельник</th>
    <th><div style=" border-radius: 72px 72px 72px 72px;border:1px solid black;margin-left:32px;margin-right:32px; ">Вторник</th>
    <th><div style=" border-radius: 72px 72px 72px 72px;border:1px solid black;margin-left:32px;margin-right:32px; ">Среда</th>
    <th><div style=" border-radius: 72px 72px 72px 72px;border:1px solid black;margin-left:32px;margin-right:32px; ">Четверг</th>
    <th><div style=" border-radius: 72px 72px 72px 72px;border:1px solid black;margin-left:32px;margin-right:32px; ">Пятница</th>
  </tr>
  <tr>
    <td style="">1 9:00 10:35</td>
    <td>Информатика<h6>пр Авдеев Н.С (1п) каб 304</h6><h6>пр Голдобин М.А (2п) каб 304</h6></td>
    <td>Основы безопасности жизнидеятельности<h6>пр Семенова О.С каб.309</h6></td>
    <td><table border="1px"  class="no_double">
             <tr><td>Физическая культура<h6>пр. Волков И.А каб. с/з</h6></td>
             </tr>
             <tr> 
             <td>Технология<h6>пр. Панкова Т.А каб.305</h6></td></tr>
             </table></td>
    <td><table border="1px" style="width:320px; height:230px;"  class="no_double">
             <tr><td>Иностранный язык<h6>пр. Туманова Е.В каб. 405</h6></td>
             </tr>
             <tr> 
             <td>История<h6>пр. Ветлина В.Н каб.406</h6></td></tr>
             </table></td>
             <td>Технология<h6>пр. Панкова Т.А каб.305</h6></td></tr>
  </tr>
  <tr>
      <td style="	;">2 10:50 12:25</td>
<td><table border="1px"  class="no_double">
             <tr><td>Физика<h6>пр. Ахмадова Г.Ф каб. 408</h6></td>
             </tr>
             <tr> 
             <td>Астрономия<h6>пр. Камогоркин В.А каб.400</h6></td></tr>
             </table></td>    <td>Русский язык<h6>пр. Ухина Т.В каб.402</h6></td>
             <td>История<h6>пр. Ветлина В.Н каб.406</h6></td>
             <td><table border="1px" style="width:320px"  class="no_double">
             <tr><td>Литература<h6>пр. Ухина Т.В каб. 402</h6></td>
             </tr>
             <tr> 
             <td>Русский язык<h6>пр. Ухина Т.В каб.402</h6></td></tr>
             </table></td>
             <td>Иностранный язык<h6>пр. Туманова Е.В каб.405</h6></td>
  </tr>
  <tr>
      <td style="">3 12:40 14:15</td>
    <td>Информатика<h6>пр Авдеев Н.С (1п) каб 304</h6><h6>пр Голдобин М.А (2п) каб 304</h6></td>
    <td>Литература<h6>пр. Ухина Т.В каб. 402</h6></td>
    <td>Физика<h6>пр. Ахмадова Г.Ф каб. 408</h6></td>
    <td>Физическая культура<h6>пр. Волков И.А каб. с/з</h6></td>
    <td>Математика<h6>пр Антонова О.Ф каб 205</h6></td>
  <tr>
      <td style="">4 14:30 16:05</td>
    <td>Математика<h6>пр Антонова О.Ф каб 205</h6></td>
             <td>История<h6>пр. Ветлина В.Н каб.406</h6></td>
    <td>Математика<h6>пр Антонова О.Ф каб 205</h6></td>
    <td>---------------------</td>
    <td>---------------------</td>
  </tr>
</table></div>
<h1 style="margin-left:4%;font-size:90px;text-algin:center;color:black;" class="mobil">Расписание на:</h1>
<div style="margin-left:4%;word-spacing: 9999px;font-size:100px;text-algin:center;margin-top:30%;" class="mobil">
    <a href="../raspisanie/pn.php" style="background:#DB7093;">Понедельник</a>
    <a href="../raspisanie/vt.php" style="background:#DB7093;">Вторник</a>
    <a href="../raspisanie/sr.php" style="background:#DB7093;">Среда</a>
    <a href="../raspisanie/cht.php" style="background:#DB7093;">Четверг</a>
    <a href="../raspisanie/pt.php" style="background:#DB7093;">Пятница</a>
   
</div>

        </body>
        <footer class="footer" id="pc">
            2022-2023&copy; Личный помощник студента</span></div>
        </footer>
       
    
</html>
 
        
  
<?php endif?>