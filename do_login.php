<?php
session_start();
require_once __DIR__.'/boot.php';

// проверяем наличие пользователя с указанным юзернеймом
$stmt = pdo()->prepare("SELECT * FROM `users` WHERE `username` = :username");
$stmt->execute(['username' => $_POST['username']]);
if (!$stmt->rowCount()) {
    flash('Пользователь с такими данными не зарегистрирован');
    header('Location: login.php');
    die;
}
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// проверяем пароль
if ($_POST['password']==$user['password']) {
   if($user['username']=='арутюнов'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d_02_2isp/arutunov.php');
        die;
    }
    elseif($user['username']=='синяев'){$_SESSION['role'] = $user['Role'];
       $_SESSION['password'] = $_POST['password'];
        header('Location: /vhod/sinayev.php');
        die;
    }
    elseif($user['username']=='1-01исп'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
       $_SESSION['role'] = $user['Role'];
        header('Location: lps.php');
        die;
    }
    elseif($user['username']=='ведерников'){$_SESSION['role'] = $user['Role'];
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
        header('Location: /vhod/d_02_2isp/veder.php');
        die;
    }
    elseif($user['username']=='гул'){$_SESSION['id'] = $user['id'];$_SESSION['role'] = $user['Role'];
       $_SESSION['password'] = $_POST['password'];
        header('Location: /vhod/d_02_2isp/gul.php');
        die;
    }
    elseif($user['username']=='гулин'){$_SESSION['id'] = $user['id'];$_SESSION['role'] = $user['Role'];
       $_SESSION['password'] = $_POST['password'];
        header('Location: /vhod/d_02_2isp/gulin.php');
        die;
    }
    elseif($user['username']=='жуков'){$_SESSION['id'] = $user['id'];$_SESSION['role'] = $user['Role'];
       $_SESSION['password'] = $_POST['password'];
        header('Location: /vhod/d_02_2isp/zukov.php');
        die;
    }
    elseif($user['username']=='игнатьев'){$_SESSION['id'] = $user['id'];$_SESSION['role'] = $user['Role'];
       $_SESSION['password'] = $_POST['password'];
        header('Location: /vhod/d_02_2isp/ignatev.php');
        die;
    }
    elseif($user['username']=='исаев'){$_SESSION['id'] = $user['id'];$_SESSION['role'] = $user['Role'];
       $_SESSION['password'] = $_POST['password'];
        header('Location: /vhod/d_02_2isp/isaev.php');
        die;
    }
    elseif($user['username']=='корноухов'){$_SESSION['id'] = $user['id'];  $_SESSION['role'] = $user['Role'];     $_SESSION['password'] = $_POST['password'];

        header('Location: /vhod/d_02_2isp/солевой_аэропорт.php');
        die;
    }
    elseif($user['username']=='костюк'){$_SESSION['id'] = $user['id'];    $_SESSION['role'] = $user['Role'];   $_SESSION['password'] = $_POST['password'];

        header('Location: /vhod/d_02_2isp/kostuk.php');
        die;
    }
    elseif($user['username']=='кевролева'){$_SESSION['id'] = $user['id'];    $_SESSION['role'] = $user['Role'];   $_SESSION['password'] = $_POST['password'];

        header('Location: /vhod/d_02_2isp/kevroleva.php');
        die;
    }
    elseif($user['username']=='коновалов'){$_SESSION['id'] = $user['id'];    $_SESSION['role'] = $user['Role'];   $_SESSION['password'] = $_POST['password'];

        header('Location: /vhod/d_02_2isp/konovalov.php');
        die;
    }
    elseif($user['username']=='малюнин'){$_SESSION['id'] = $user['id'];    $_SESSION['role'] = $user['Role'];   $_SESSION['password'] = $_POST['password'];

        header('Location: /vhod/d_02_2isp/malunin.php');
        die;
    }
    elseif($user['username']=='охрименко'){$_SESSION['id'] = $user['id'];   $_SESSION['role'] = $user['Role'];    $_SESSION['password'] = $_POST['password'];

        header('Location: /vhod/d_02_2isp/ohrimenko.php');
        die;
    }
    elseif($user['username']=='проскурин'){   $_SESSION['role'] = $user['Role'];    $_SESSION['password'] = $_POST['password'];$_SESSION['id'] = $user['id'];

        header('Location: /vhod/d_02_2isp/proskurin.php');
        die;
    }
    elseif($user['username']=='резцов'){     $_SESSION['role'] = $user['Role'];  $_SESSION['password'] = $_POST['password'];$_SESSION['id'] = $user['id'];

        header('Location: /vhod/d_02_2isp/reztsov.php');
        die;
    }
    elseif($user['username']=='сидоренко'){    $_SESSION['role'] = $user['Role'];   $_SESSION['password'] = $_POST['password'];$_SESSION['id'] = $user['id'];

        header('Location: /vhod/d_02_2isp/sidorenko.php');
        die;
    }
    elseif($user['username']=='спирин'){    $_SESSION['role'] = $user['Role'];   $_SESSION['password'] = $_POST['password'];$_SESSION['id'] = $user['id'];

        header('Location: /vhod/d_02_2isp/spirin.php');
        die;
    }
    elseif($user['username']=='тебиев'){    $_SESSION['role'] = $user['Role'];   $_SESSION['password'] = $_POST['password'];$_SESSION['id'] = $user['id'];

        header('Location: /vhod/d_02_2isp/tebiev.php');
        die;
    }
    elseif($user['username']=='черкинян'){    $_SESSION['role'] = $user['Role'];   $_SESSION['password'] = $_POST['password'];$_SESSION['id'] = $user['id'];

        header('Location: /vhod/d_02_2isp/cherkinyan.php');
        die;
    }
    elseif($user['username']=='шаламов'){     $_SESSION['role'] = $user['Role'];  $_SESSION['password'] = $_POST['password'];$_SESSION['id'] = $user['id'];

        header('Location: /vhod/d_02_2isp/shalamov.php');
        die;
    }
    elseif($user['username']=='шилов'){    $_SESSION['role'] = $user['Role'];   $_SESSION['password'] = $_POST['password'];$_SESSION['id'] = $user['id'];

        header('Location: /vhod/d_02_2isp/shilov.php');
        die;
    }
    
    
    
    
    
    
    
    
    
    
     elseif($user['username']=='александров'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/aleksandrov.php');
        die;
    }
    elseif($user['username']=='белова'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/belova.php');
        die;
    }
    elseif($user['username']=='болтенко'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/boltenko.php');
        die;
    }
    elseif($user['username']=='бусин'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/busin.php');
        die;
    }
    elseif($user['username']=='галустян'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/galustyan.php');
        die;
    }
    elseif($user['username']=='грачев'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/grachev.php');
        die;
    }
    elseif($user['username']=='гулиев'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/guliev.php');
        die;
    }
    elseif($user['username']=='дыненкова'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/didenkova.php');
        die;
    }
    elseif($user['username']=='егоров'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/egorov_e.php');
        die;
    }
    elseif($user['username']=='егоров игоревич'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/egorov_i.php');
        die;
    }
    elseif($user['username']=='загребаев'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/zagrebaev.php');
        die;
    }
    elseif($user['username']=='иванов'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/ivanov.php');
        die;
    }
    elseif($user['username']=='катан'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/katan.php');
        die;
    }
    elseif($user['username']=='котельникова'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/kotelnikova.php');
        die;
    }
    elseif($user['username']=='кубанычбеков'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/kubanichbekov.php');
        die;
    }
    elseif($user['username']=='малюхин'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/maluhin.php');
        die;
    }
    elseif($user['username']=='орлова'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/orlova.php');
        die;
    }
    elseif($user['username']=='поршнева'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/porshneva.php');
        die;
    }
    elseif($user['username']=='стрехова мария'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/sterhonova_a.php');
        die;
    }
    elseif($user['username']=='стрехова милана'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/sterhova_r.php');
        die;
    }
    elseif($user['username']=='суборова'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/suborova.php');
        die;
    }
    elseif($user['username']=='сычева'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/sicheva.php');
        die;
    }
    elseif($user['username']=='харинов'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/harinov.php');
        die;
    }
    elseif($user['id']=='79'){

       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/jukov.php');
        die;
    }
    
    elseif($user['username']=='чобанян'){
       $_SESSION['password'] = $_POST['password'];
       $_SESSION['id'] = $user['id'];
              $_SESSION['role'] = $user['Role'];

        header('Location: /vhod/d-1-1isp/chobanyan.php');
        die;
    }
    
    
    
    
    
    
    
    
    elseif ($user['Role']==1){$_SESSION['username'] = $_POST['username'];       $_SESSION['role'] = $user['Role'];

    header('Location: lps.php');
    die;
    }
    elseif($user['Role']==3){$_SESSION['username'] = $_POST['username'];
    header('Location: /vhod/antonova.php');
    die;
    }
    elseif($user['Role']==7){$_SESSION['username'] = $_POST['username'];
    header('Location: /vhod/cherbakov.php');
    die;
    }
    elseif($user['Role']==8){$_SESSION['username'] = $_POST['username'];
    header('Location: /vhod/kamogorkin.php');
    die;
    }
    elseif($user['Role']==9){$_SESSION['username'] = $_POST['username'];
    header('Location: /vhod/kirilova.php');
    die;
    }
    elseif($user['Role']==4){$_SESSION['username'] = $_POST['username'];
    header('Location: /vhod/melnichenko.php');
    die;
    }
    elseif($user['Role']==10){$_SESSION['username'] = $_POST['username'];
    header('Location: /vhod/moskalina.php');
    die;
    }
    elseif($user['Role']==6){
        $_SESSION['password'] = $_POST['password'];
               $_SESSION['id'] = $user['id'];
    header('Location: /vhod/totmyanina.php');
    die;
    }
    elseif($user['Role']==11){
                $_SESSION['password'] = $_POST['password'];
    header('Location: /vhod/ulanova.php');
    die;
    }
    elseif($user['Role']==12){
        $_SESSION['password'] = $_POST['password'];
    header('Location: /vhod/varenik.php');
    die;
    }
    elseif($user['Role']==5){
        $_SESSION['password'] = $_POST['password'];
    header('Location: /vhod/vetlina.php');
    die;
    }
    elseif($user['Role']==22){
        $_SESSION['password'] = $_POST['password'];
    header('Location: /vhod/admintk34.php');
    die;
    }
    
}

flash('Пароль неверен');
$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'redirect-form.html';
header("Location: $redirect");
