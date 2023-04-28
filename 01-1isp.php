<?php
session_start();
 if(!isset($_SESSION['password']))
    {
        
    header('Location: /login.php');
    die();

    }
    ?>
    <!DOCTYPE html>
<html>
    <head>
        <title>LPS</title>
         <link rel="shortcut icon" href="../image/lps.png" type="image/x-icon"> 
        <style>
           *, *:before, *:after {-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}
body{background:#bdc3c7;line-height:1.5;font-family:sans-serif;text-transform:;font-size:25px;color:#fff}
a{text-decoration:none;color:#fff}
#header{background:#1E262D;width:100%; position:relative}
#header:after{content:"";clear:both;display:block}
.search{float:right;padding:30px}
input{border:none;padding:10px;border-radius:20px}
.logo{float:left;padding:26px 0 26px}
.logo a{font-size:28px;display:block;padding:0 0 0 20px}
nav{float:left;}
nav>ul{float:left;position:relative}
nav li{list-style:none;float:left}
nav .dropdown{position:relative}
nav li a{float:left;padding:50px; margin-left:100px}
nav li a:hover{background:#2C3E50}
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
  nav >ul>li >a{padding:35px 15px}
}
@media only screen and (min-width: 960px) {
  nav{display:block!important}
  
}
@media only screen and (max-width: 959px) {
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
}
th
{
    color:black;
    text-align:center;
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
}
.no_double{border-collapse: collapse;}
        </style>
        <div id="header">
  <div class="logo">
    <div style="width: 80px; height: 80px;background: #83A7C9;border-radius: 50%;background:white;text-algin:center;"><img style="width:100%;margin-top:10%;"src="../image/lps.png"/></div>
  </div>  
  <nav>
   
    <ul style="margin-left:200px;">
      <li>
        <a href="../lps.html"></a>
      </li>
      <li>
        <a href="ocenka.php"></a>
        
      <li class="dropdown">
        <a href="../cooming soon.html"></a>
               
      </li>
      <li>
        <a href="../cooming soon.html"></a>
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
            <div style="widht:100%;height:100%; background:;"><table class="pc">
  <colgroup>
    
    <col span="6" style="background-color:white; "><!-- Задаем цвет фона для следующего (одного) столбца таблицы-->
  </colgroup>
<tr style="background-color:#DB7093	; height:100px;  ">
    <th style="width: 40px"></th>
    <th>Понедельник</th>
    <th>Вторник</th>
    <th>Среда</th>
    <th>Четверг</th>
    <th>Пятница</th>
  </tr>
  <tr>
    <td style="background-color:#20B2AA;">1 9:00 10:35</td>
    <td>Информатика<h6>пр Авдеев Н.С (1п) каб 304</h6><h6>пр Голдобин М.А (2п) каб 304</h6></td>
    <td>Основы безопасности жизнидеятельности<h6>пр Семенова О.С каб.309</h6></td>
    <td><table border="1px"  class="no_double">
             <tr><td>Физическая культура<h6>пр. Волков И.А каб. с/з</h6></td>
             </tr>
             <tr> 
             <td>Технология<h6>пр. Панкова Т.А каб.305</h6></td></tr>
             </table></td>
    <td><table border="1px"  class="no_double">
             <tr><td>Иностранный язык<h6>пр. Туманова Е.В каб. 405</h6></td>
             </tr>
             <tr> 
             <td>История<h6>пр. Ветлина В.Н каб.406</h6></td></tr>
             </table></td>
             <td>Технология<h6>пр. Панкова Т.А каб.305</h6></td></tr>
  </tr>
  <tr>
      <td style="background-color:#20B2AA	;">2 10:50 12:25</td>
<td><table border="1px"  class="no_double">
             <tr><td>Физика<h6>пр. Ахмадова Г.Ф каб. 408</h6></td>
             </tr>
             <tr> 
             <td>Астрономия<h6>пр. Камогоркин В.А каб.400</h6></td></tr>
             </table></td>    <td>Русский язык<h6>пр. Ухина Т.В каб.402</h6></td>
             <td>История<h6>пр. Ветлина В.Н каб.406</h6></td>
             <td><table border="1px"  class="no_double">
             <tr><td>Литература<h6>пр. Ухина Т.В каб. 402</h6></td>
             </tr>
             <tr> 
             <td>Русский язык<h6>пр. Ухина Т.В каб.402</h6></td></tr>
             </table></td>
             <td>Иностранный язык<h6>пр. Туманова Е.В каб.405</h6></td>
  </tr>
  <tr>
      <td style="background-color:#20B2AA;">3 12:40 14:15</td>
    <td>Информатика<h6>пр Авдеев Н.С (1п) каб 304</h6><h6>пр Голдобин М.А (2п) каб 304</h6></td>
    <td>Литература<h6>пр. Ухина Т.В каб. 402</h6></td>
    <td>Физика<h6>пр. Ахмадова Г.Ф каб. 408</h6></td>
    <td>Физическая культура<h6>пр. Волков И.А каб. с/з</h6></td>
    <td>Математика<h6>пр Антонова О.Ф каб 205</h6></td>
  <tr>
      <td style="background-color:#20B2AA;">4 14:30 16:05</td>
    <td>Математика<h6>пр Антонова О.Ф каб 205</h6></td>
             <td>История<h6>пр. Ветлина В.Н каб.406</h6></td>
    <td>Математика<h6>пр Антонова О.Ф каб 205</h6></td>
    <td>---------------------</td>
    <td>---------------------</td>
  </tr>
</table></div>
<h1 style="margin-left:4%;font-size:90px;text-algin:center;color:black;" class="mobil">Расписание на:</h1>
<div style="margin-left:4%;word-spacing: 9999px;font-size:100px;text-algin:center;margin-top:30%;" class="mobil">
    <a href="../raspisanie/pn.html" style="background:#DB7093;">Понедельник</a>
    <a href="../raspisanie/vt.html" style="background:#DB7093;">Вторник</a>
    <a href="../raspisanie/sr.html" style="background:#DB7093;">Среда</a>
    <a href="../raspisanie/cht.html" style="background:#DB7093;">Четверг</a>
    <a href="../raspisanie/pt.html" style="background:#DB7093;">Пятница</a>
   
</div>

        </body>
        <footer class="footer" id="pc">
            2022-2023&copy; Личный помощник студента</span></div>
        </footer>
       
    
</html>