
<?php
//  $host = 'bau3428005.mysql';  // Хост, у нас все локально
  //$user = 'bau3428005_12';    // Имя созданного вами пользователя
//  $pass = 'Listochek227'; // Установленный вами пароль пользователю
 // $db_name = 'bau3428005_12';   // Имя базы данных
  //$link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
  $dbh = new PDO('mysql:dbname=bau3428005_12;host=bau3428005.mysql', 'bau3428005_12', 'Listochek227');
  $sth = $dbh->prepare("SELECT * FROM `numberstest` "); //Вывод данных из бд где select=столбцы from с какой таблицы where с какой 
  $sth->execute();
  $list = $sth->fetchAll(PDO::FETCH_ASSOC);
    


  
  ?>
  <style>
      td
      {
          border:2px solid black;
      }
  </style>
  <body>
      <div style="border:2px solid black;">
     
     <form method="post" action="test.php">
    <table>
	<thead>
		<tr>
			<th>Заезд</th>
			<th>Отель</th>
			<th>Курорт</th>
			<th>Тип номера</th>
			<th>Питание</th>
			<th>Цена</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($list as $row): ?>
		<tr>
			<td ><input name="id" id="id"  placeholder="<?php echo $row['Id'];?>"></td>
			<td name="item" id="item" ><input name="item" id="item"  placeholder="<?php echo $row['item'];?>"></td>
			<td name="number" id="number" ><input name="number" id="number"  placeholder="<?php echo $row['number'];?>"></td>
		</tr>
		<?php endforeach; ?>    
	</tbody>

        <button type="submit"> </button>
    </form>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
$(function()	{
	$('td').click(function(e)	{
		//ловим элемент, по которому кликнули
		var t = e.target || e.srcElement;
		//получаем название тега
		var elm_name = t.tagName.toLowerCase();
		//если это инпут - ничего не делаем
		if(elm_name == 'input')	{return false;}
		var val = $(this).html();
		var code = '<input type="text" id="edit" value="'+val+'" />';
		$(this).empty().append(code);
		$('#edit').focus();
		$('#edit').blur(function()	{
			var val = $(this).val();
			$(this).parent().empty().html(val);
		});
	});
});
$(window).keydown(function(event){
	//ловим событие нажатия клавиши
	if(event.keyCode == 13) {	//если это Enter
		$('#edit').blur();	//снимаем фокус с поля ввода
	}
});
</script>