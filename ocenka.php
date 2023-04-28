<!DOCTYPE html>
<html>
    <head>
        <title>LPS</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <link rel="shortcut icon" href="../image/lps.png" type="image/x-icon"> 
        <style>
          .editMode{
 border: 1px solid black;
}

 
           *, *:before, *:after {-moz-box-sizing:border-box;-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}
body{background:#bdc3c7;line-height:1.5;font-family:sans-serif;text-transform:uppercase;font-size:25px;color:#fff}
a{text-decoration:none;color:#fff}
#header{background:#1E262D;width:100%;position:relative}
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
        <script>
$(document).ready(function(){
 
 // Add Class
 $('.edit').click(function(){
  $(this).addClass('editMode');
 });
 
 // Save data
 $(".edit").focusout(function(){
  $(this).removeClass("editMode");
  var id = this.id;
  var split_id = id.split("_");
  var field_name = split_id[0];
  var edit_id = split_id[1];
  var value = $(this).text();
 
  $.ajax({
   url: 'link.php',//файл с php скриптом, обновляющий данные в бд
   type: 'post',
   data: {field:field_name, value:value, id:edit_id },// отправляем имя поля, новое значение и id, чтобы определить, что конкретно и как надо обновить в таблице
   success:function(response){
    console.log('Save successfully');
   }
  });
 });
});
</script>
        <div id="header">
  <div class="logo">
    <div style="width: 80px; height: 80px;background: #83A7C9;border-radius: 50%;background:white;text-algin:center;"><img style="width:100%;margin-top:10%;"src="../image/lps.png"/></div>
  </div>  
  <nav>
   
    <ul style="margin-left:200px;">
      <li>
        <a href="../lps.html">Расписание</a>
      </li>
      <li>
        <a href="ocenka.php">Оценки</a>
        
      <li class="dropdown">
        <a href="../cooming soon.html">Опоздания</a>
               
      </li>
      <li>
        <a href="../cooming soon.html">Профиль</a>
      </li>
      <li>

      </li>
    </ul>
  </nav>
</div>
        </head>
        <body style="background-image:url(../image/fonlps.png);background:#696969;">
          <div class='container'>
              <style>
                  table, th, td{
                      border: 1px solid black;color:black;
                      
                  }
              </style>
 <table>
  <tr>
      <th></th>
   <th>Фамилия</th>
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
$query2 = mysqli_query($link, "SELECT * FROM mytable");
 
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

    <style>td{color:black;width:80px;white-space: nowrap;text-align: center;} </style>
        <td style='text-algin:center;'>$id</td>
        <td style='width:100px;' contentEditable='true' class='edit' id='name_$id'>$name</td>
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
        <td contentEditable='true' class='edit' id='s30_$id'>$s30</td> 
        <td contentEditable='true' class='edit' id='s31_$id'>$s31</td>
    
        </tr>";
    }
?>
</table>

        </body>
        <footer class="footer">
            2022-2023&copy; Личный помощник студента</span></div>
        </footer>
       
    
</html>