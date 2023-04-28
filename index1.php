<head>
    <title>LPS</title>
    <link rel="shortcut icon" href="../image/lps.png" type="image/x-icon"> 
<style>
  @media only screen and (min-width: 1440px)
  {
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

       
        .h1
        {
            font-size:40px;
            
        }
        .h1-mobil
        {
            display:none;
        }
        .logo-mobil
        
        {
            display:none;
        }
        .mobil-button
        {
            display:none;
        }
        .d-flex justify-content-between
        {
            display:none;
        }
       }
             @media only screen and (max-width: 1024px) 
             {
             .h1-mobil
             {
                 text-align:center;
                 font-size:80px;

             }
             .pc
             {
                 display:none;
             }
             .h1
             {
                 display:none;
             }
             .logo-pc
             {
                 display:none;
             }
             .logo-mobil
             {
                 text-align:center;
                 
                 
             }
             .mobil-button
             {
                 text-align:center;
                 margin-top:100%;
             }
               input{
            background:#9FDCFB;
  display: block;
  margin:auto;
  width: 60%;
  height: 60px;
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
       <div class="logo-pc" style="text-align:center;"> <img  src="../image/lps.png" style="width:14%; margin-left:0%; margin-top:3%; "/></div>
                    <div class="logo-mobil" style="text-align:center;"> <img  src="../image/lps-mobil.png" style="width:50%; margin-left:0%; margin-top:3%; "/></div>
      <p style=" display: flex;justify-content: center;align-items: center;font-size:60px;white-space: nowrap;">Регистрация в ЛПС</p>
       <div class="pc" style="width: 30%; height: 285px; border:0px solid; margin:auto;background:#FFFAFA;border-radius: 15px;">
<form method="post" action="do_register.php">
  <div class="mb-3">
                    <h2 class="pc" style="font-family:a_BodoniNova, inherit; margin-left:10%;">Имя пользователя или эл.почта</h2>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>

  <div class="mb-3">
     
            <h2 class="pc" style="font-family:a_BodoniNova, inherit; margin-left:10%;">Пароль </h2>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary" style="background:#54008B;
  display: block;
  margin: 20px auto;
  width: 80%;
  height: 60px;
  border-radius: 10px;
 
  
  color:white;font-size:40px;text-align:center;text-decoration:none; ">Зарегестрироваться</button>
</form></div>
           <div class="h1-mobil"> 
           <form method="post" action="login.php">
    <div class="mb-3">
                    <h2 class="h1-mobil" style="font-family:a_BodoniNova, inherit; margin-right:45%;">Логин</h2>
        <input type="text" placeholder="Введите логин" class="form-control" id="username" name="username" required>
    </div>
    <div class="mb-3">
            <h2 style="font-family:a_BodoniNova, inherit; margin-right:40%;" class="h1-mobil">Пароль</h2>
        <input type="password" placeholder="Введите пароль" class="form-control" id="password" name="password" required>
    </div>
      </div>
      <div class="h1-mobil">
    <div class="d-flex justify-content-between" style="text-align:center;margin-top:20%;">
      
        <button type="submit" class="btn btn-primary" style="width:65%;height:140px;border-radius:10px;background:#54008B;color:white;font-size:60px; ">Зарегестрироваться</button></div></div>
</head>