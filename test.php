<!DOCTYPE html>
<html>
<head>
            <title>LPS</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <link rel="shortcut icon" href="/image/lps.png" type="image/x-icon"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
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
nav li a{float:left;padding:50px 100px 0px 0px; margin-left:0px}
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

        <div style="width:100%" id="header">
  <div class="logo">
    <div style="width: 80px; height: 80px;background: #83A7C9;border-radius: 50%;background:white;text-algin:center;"><img style="width:100%;margin-top:10%;"src="/image/lps.png"/></div>
  </div>  
  <nav>
      <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">sfsdFDSFASFDSFWEEFW &times;</a>
  <div class="overlay-content">
    <a href="tryhow_js_overlay.php">О Нас</a>
    <a href="tryhow_js_overlay.php">Услуги</a>
    <a href="tryhow_js_overlay.php">Клиенты</a>
    <a href="tryhow_js_overlay.php">Контакт</a>
  </div>
</div>
   
    <ul style="margin-left:200px;">
      <li>
        <img src="/image/Notebook.png" style="float:left;padding:60px 12px 0px 0px; margin-left:0px"><a href="/lps.php">Расписание</a>
      </li>
      <li>
    <img style="float:left;padding:60px 12px 0px 0px; margin-left:0px"src="/image/Book 2.png"><a href="../d_02_2isp/arutunov.php">    Оценки</a>
        
      <li class="dropdown">
       <img style="float:left;padding:60px 12px 0px 0px; margin-left:0px; width:40px"src="/image/Running 2.png"> <a href="/cooming soon.html">Опоздания</a>
               
      </li>
      <li>
        <a style="margin-left:400px" href="/vhod/d_02_2isp/arutunovrasp.php">Профиль</a>
      <li>
      </li>
    </ul>
  </nav>
</div>

</head>
<body>





<script>
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
               <div class='container'>
              <style>
                  table{
                      border: 1px solid black;color:black;
                      
                  }
                  th{
                      border:1px solid black;color:black;
                  }
                  td{
                                    border:1px solid black;color:black;
                  }
              </style>
 <table>
   <th>Предмет</th>
   <th>12</th>
   <th>13</th>
   <th>14</th>
   <th>15</th>
   <th>16</th>
   <th>17</th>
   <th>18</th>
   <th>19</th>
   <th>20</th>
   <th>21</th>
   <th>22</th>
   <th>23</th>
   <th>24</th>
   <th>25</th>
   <th>26</th>
   <th>27</th>
   <th>28</th>
   <th>29</th>
   <th>30</th>
   <th>31</th>
  </tr>
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query2 = mysqli_query($link, "SELECT * FROM algoritm_p WHERE id=1");
 
  while($row = mysqli_fetch_array($query2)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>ОП(теория)</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>

 
 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query3 = mysqli_query($link, "SELECT * FROM algoritm_t WHERE id=1");
 
  while($row = mysqli_fetch_array($query3)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>ОП(практика)</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query4 = mysqli_query($link, "SELECT * FROM angl WHERE id=1");
 
  while($row = mysqli_fetch_array($query4)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>ИНОСТРАННЫЙ ЯЗЫК В ПОРФЕССИОНАЛЬНОЙ ДЕЯТЕЛЬНОСТИ</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query5 = mysqli_query($link, "SELECT * FROM arhitery WHERE id=1");
 
  while($row = mysqli_fetch_array($query5)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>АРХИТЕКТУРА АППАРАТНЫХ СРЕДСТВ</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query6 = mysqli_query($link, "SELECT * FROM dis_matan WHERE id=1");
 
  while($row = mysqli_fetch_array($query6)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>ДИСКРЕТНАЯ МАТЕМАТИКА С ЭЛЕМЕНТАМИ МАТЕМАТИЧЕСКОЙ ЛОГИКИ</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query8 = mysqli_query($link, "SELECT * FROM filosofiya WHERE id=1");
 
  while($row = mysqli_fetch_array($query8)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>ОСНОВЫ ФИЛОСОФИИ</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query9 = mysqli_query($link, "SELECT * FROM fiz_ra WHERE id=1");
 
  while($row = mysqli_fetch_array($query9)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>ФИЗИЧЕСКАЯ КУЛЬТУРА</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query10 = mysqli_query($link, "SELECT * FROM matan WHERE id=1");
 
  while($row = mysqli_fetch_array($query10)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>ЭЛЕМЕНТЫ ВЫСШЕЙ МАТЕМАТИКЕ</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query11 = mysqli_query($link, "SELECT * FROM mdk02_01 WHERE id=1");
 
  while($row = mysqli_fetch_array($query11)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>МДК.02.01 ТЕХНОЛОГИЯ РАЗРАБОТКИ ПРОГРАМНОГО ОБЕСПЕЧИНИЯ</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query12 = mysqli_query($link, "SELECT * FROM mdk02_02 WHERE id=1");
 
  while($row = mysqli_fetch_array($query12)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>МДК.02.02 ИНСТРУМЕНТАЛЬНЫЕ СРЕДТСТВА РАЗРАБОТКИ ПРОГРАММНОГО ОБЕСПЕЧЕНИЯ</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query13 = mysqli_query($link, "SELECT * FROM mdk02_03 WHERE id=1");
 
  while($row = mysqli_fetch_array($query13)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>МДК.02.03 МАТЕМАТИЧЕСКОЕ МОДЕЛИРОВАНИЕ</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query14 = mysqli_query($link, "SELECT * FROM mdk03_01 WHERE id=1");
 
  while($row = mysqli_fetch_array($query14)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>МДК.03.01 МОДЕЛИРОВАНИЕ И АНАЛИЗ ПРОГРАММНОГО ОБЕСПЕЧЕНИЯ</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>


 
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query15 = mysqli_query($link, "SELECT * FROM standart WHERE id=1");
 
  while($row = mysqli_fetch_array($query15)){
    $id=$row['id'];
    $value=$row['value'];
    $s14=$row['s14'];
    $field=$row['field'];
    $name=$row['name'];
    $s15=$row['s15'];
    $s16=$row['s16'];
    $s17=$row['s17'];
    $s18=$row['s18'];
    $s19=$row['s19'];
    $s20=$row['s20'];
    $s21=$row['s21'];
    $s22=$row['s22'];
    $s23=$row['s23'];
    $s24=$row['s24'];
    $s25=$row['s25'];
    $s26=$row['s26'];
    $s27=$row['s27'];
    $s28=$row['s28'];
    $s29=$row['s29'];
    $s30=$row['s30'];
    $s31=$row['s31'];
    
    echo "<tr> 

    <style>td{color:black;width:80px;text-align: center;} </style>
        <td '>СТАНДАРТИЗАЦИЯ, СЕРТИФИКАЦИЯ И ТЕХНИЧЕСКОЕ ДОКУМЕНТИРОВАНИЕ</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td>
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='s14_$id'>$s14</td> 
        <td contentEditable='true' class='edit' id='s15_$id'>$s15</td>
        <td contentEditable='true' class='edit' id='s16_$id'>$s16</td> 
        <td contentEditable='true' class='edit' id='s17_$id'>$s17</td>
        <td contentEditable='true' class='edit' id='s18_$id'>$s18</td>
        <td contentEditable='true' class='edit' id='s19_$id'>$s19</td> 
        <td contentEditable='true' class='edit' id='s20_$id'>$s20</td>
        <td contentEditable='true' class='edit' id='s21_$id'>$s21</td> 
        <td contentEditable='true' class='edit' id='s22_$id'>$s22</td>
        <td contentEditable='true' class='edit' id='s23_$id'>$s23</td>
        <td contentEditable='true' class='edit' id='s24_$id'>$s24</td> 
        <td contentEditable='true' class='edit' id='s25_$id'>$s25</td>
        <td contentEditable='true' class='edit' id='s26_$id'>$s26</td>
        <td contentEditable='true' class='edit' id='s27_$id'>$s27</td> 
        <td contentEditable='true' class='edit' id='s28_$id'>$s28</td>
        <td contentEditable='true' class='edit' id='s29_$id'>$s29</td>
        <td  id='s30_$id'>$s30</td> 
        <td id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>

</table>

        </body>
       
       
    
</html>


