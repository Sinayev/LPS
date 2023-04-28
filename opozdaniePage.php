<head><link rel="shortcut icon" href="../image/lps.png" type="image/x-icon"> 
<title>LPS</title>
  <style>
        input{
            background:#9FDCFB;
  display: block;
  margin: 0 auto;
  width: 80%;
  height: 45px;
  border-radius: 10px;  
  border:none;
  outline: none;
  font-size:30px;
}
input:focus {
  color: #000000;
  border-radius: 10px;
  border: 2px solid #436fea;
}
<style>
          .editMode{
 border: 1px solid black;
}

 
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

</style>
<body style="background-image:url(../image/fonlps.png);">
    <script>
        let snowmax=40
 
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
window.onload=initsnow    
    </script>
            <div id="header">
  <div class="logo">
    <div style="width: 80px; height: 80px;background: #83A7C9;border-radius: 50%;background:white;text-algin:center;"><img style="width:100%;margin-top:10%;"src="../image/lps.png"/></div>
  </div>  
  <nav>
   
    <ul style="margin-left:200px;">
      <li>
        <img src="../image/Notebook.png" style="float:left;padding:60px 12px 0px 0px; margin-left:0px"><a href="../vhod/totmyaninarasp.php">Расписание</a>
      </li>
      <li>
        <img style="float:left;padding:60px 12px 0px 0px; margin-left:0px"src="../image/Book 2.png"><a href="/vhod/totmyanina.php">Оценки</a>
        
      <li class="dropdown">
        <img style="float:left;padding:60px 12px 0px 0px; margin-left:0px; width:40px"src="../image/Running 2.png"><a href="/vhod/opozdaniya.php">Опоздания</a>
               
      </li>
      <li>
       <a style="margin-left:400px" href="totmyanina_profil.php">Профиль</a>
        </li>
      <li>

      </li>
    </ul>
  </nav>
</div>
      <p style=" display: flex;justify-content: center;align-items: center;font-size:60px;white-space: nowrap;">Заполнение опоздания</p>
       <div style="width: 35%; height: 335px; border:0px solid; margin:auto;background:#FFFAFA;border-radius: 15px;">
<form method="post" action="opozdanie.php">
    <div class="mb-3">
                    <h2 style="font-family:a_BodoniNova, inherit; margin-left:10%;color: black; font-size:50px">Введите ФИО студента</h2>
        <input type="text" placeholder="Иванов А.А" class="form-control" id="prichina" name="prichina" required>
    </div>
    <div class="mb-3">
            <h2 style="font-family:a_BodoniNova, inherit; margin-left:10%;color: black; font-size:40px">Введите время опоздавшего студента</a></h2>
        <input type="text" placeholder="в формате 12:40" class="form-control" id="time" name="time" required>
                    <h2 style="font-family:a_BodoniNova, inherit; margin-left:10%;">Введите дату опоздания </a></h2>
        <input type="text" placeholder="в формате 2002-12-12" class="form-control" id="data" name="data" required>

            <div class="mb-3">
                    <h2 style="font-family:a_BodoniNova, inherit; margin-left:10%;">Введите предмет на который опоздал студент</h2>
        <input type="text" placeholder="мдк.01.01" class="form-control" id="para" name="para" required>
    </div>

    </div>
    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-primary" style="background:#54008B;
  display: block;
  margin: 20px auto;
  width: 80%;
  height: 60px;
  border-radius: 10px;
  text-align: center;
  
  color:white;font-size:40px;text-align:center;text-decoration:none;">Отправить</button>
      
    </div>
</form>
</div>
</head>