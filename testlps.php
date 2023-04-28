<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
.edit{
 width: 100%;
 height: 25px;
}
.editMode{
 border: 1px solid black;
}
table, th, td {
 border: 1px solid black;
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
</head>
<body>
<div class='container'>
 <table>
  <tr>
   <th>Id</th>
   <th>tree</th>
   <th>value</th>
   <th>field</th>
   <th>3</th>
  </tr>
<?php 
$link=mysqli_connect('h213576362.mysql','h213576362_mysql','oOm-sdq1','h213576362_db') or die(mysqli_error($link));
$query2 = mysqli_query($link, "SELECT * FROM mytable");
 
  while($row = mysqli_fetch_array($query2)){
    $id=$row['id'];
    $value=$row['value'];
    $field=$row['field'];
    echo "<tr> 
        <td>$id</td> 
        <td contentEditable='true' class='edit' id='value_$id'>$value</td>
        <td contentEditable='true' class='edit' id='field_$id'>$field</td> 
        </tr>";
    }
?>
</table>
</div>
</body>
</html>