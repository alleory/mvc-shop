<?php

/* 
 * Модель для таблицы пользовотилей (users)
 * 
 */

/**
 * 
 * @param type $email почта
 * @param type $pwdMD5 пароль зашифрованный в MD5
 * @param type $name имя пользавотиля
 * @param type $phone телефон
 * @param type $adress адрес пользавотиля
 * @return array массив данныых нового пользавотиля
 */
function registerNewUser($email, $pwdMD5, $name, $phone, $adress){
  
  $email  = htmlspecialchars(mysql_real_escape_string($email));
  $name   = htmlspecialchars(mysql_real_escape_string($name));
  $phone  = htmlspecialchars(mysql_real_escape_string($phone));
  $adress = htmlspecialchars(mysql_real_escape_string($adress));
  
  $sql = "INSERT INTO 
          users (`email`,`pwd`,`name`,`phone`,`adress`)
          VALUES ('{$email}', '{$pwdMD5}', '{$name}', '{$phone}', '{$adress}')";
         
  $rs = mysql_query($sql);
  
  if($rs){
    $sql = "SELECT * FROM users
            WHERE (`email` = '{$email}' and `pwd` = '{$pwdMD5}')
            LIMIT 1";
            
    $rs = mysql_query($sql);
    $rs = createSmartyRsArray($rs);
  
    if(isset($rs[0])){
       $rs['success'] = 1;
    } else{
       $rs['success'] = 0;
    }           
  } else {
    $rs['success'] = 0;
  }
  
  return $rs;
}

/**
 * Проверка параметров для регистрации пользавотиля
 * 
 * @param string $email email
 * @param string $pwd1 пароль
 * @param string $pwd2 повтор пороля
 * @return array результат
 */
function checkRegisterParams($email, $pwd1, $pwd2){
  $res = null;
  
  if(! $email){
    $res['success'] = false;
    $res['message'] = 'Введите email';
  }
  
  if(! $pwd1){
    $res['success'] = false;
    $res['message'] = 'Введите пароль';
  }
  
  if(! $pwd2){
    $res['success'] = false;
    $res['message'] = 'Введите повтор пароль';
  }
  
  if($pwd1 != $pwd2){
    $res['success'] = false;
    $res['message'] = 'Пароли не совподают';
  }
  
  return $res;
 
}

/**
 * Проверка почты (есть ли email адрес в БД)
 * 
 * @param type $email
 * @return array массив - строка из таблицы users, либо пустой массив
 */
function checkUserEmail($email){
  $email = mysql_real_escape_string($email);
  $sql = "SELECT id FROM users WHERE email = '{$email}'";
  
  $rs = mysql_query($sql);
  $rs = createSmartyRsArray($rs);
  
  return $rs;
}

/**
 * Авторизация пользавотиля
 * 
 * @param string $email почта (логин)
 * @param string $pwd пароль
 * @return array массив данных пользавотиля
 */
function loginUser($email, $pwd){
 
  $email = htmlspecialchars(mysql_real_escape_string($email));
  $pwd   = md5($pwd);
  
  $sql = "SELECT * FROM users
          WHERE (`email` = '{$email}' and `pwd` = '{$pwd}')
          LIMIT 1";  
  $rs = mysql_query($sql);
  
  $rs = createSmartyRsArray($rs);
  if(isset($rs[0])){
    $rs['success'] = 1;
  }else{
    $rs['success'] = 0;
  }
  
  return $rs;
  
  
}

/**
 * Изменение данных пользавотиля
 * 
 * @param string $name имя пользавотиля
 * @param string $phone телефон
 * @param string $adress адрес
 * @param string $pdw1 новый пароль
 * @param string $pwd2 повтор нового пароля
 * @param string $curPwd текущий пароль
 * @return boolean TRUE в случае успеха
 */
function updateUserData($name, $phone, $adress, $pwd1, $pwd2, $curPwd){
  
  $email   = htmlspecialchars(mysql_real_escape_string($_SESSION['user']['email']));
  $name    = htmlspecialchars(mysql_real_escape_string($name));
  $phone   = htmlspecialchars(mysql_real_escape_string($phone));
  $adress  = htmlspecialchars(mysql_real_escape_string($adress));
  $pwd1    = trim($pwd1);
  $pwd2    = trim($pwd2);
  
  $newPwd = null;
  if( $pwd1 && ($pwd1 == $pwd2) ){
      $newPwd = md5($pwd1);
  }
  
  $sql = "UPDATE users
          SET ";
  
  if($newPwd){
      $sql .= "`pwd` = '{$newPwd}', ";
  }
   
  $sql .= " `name` = '{$name}',
            `phone` = '{$phone}',
            `adress` = '{$adress}'
          WHERE
            `email` = '{$email}' AND `pwd` = '{$curPwd}'
             LIMIT 1";
           
  $rs = mysql_query($sql);
  
  return $rs;

}

/**
 * Получаем данные заказа текущего пользавотиля
 *
 * @return array массив заказов с привязкой к продуктам
 */
function getCurUserOrders(){
  $userId = isset($_SESSION['user']['id']) ? $_SESSION['user']['id'] : 0;
  $rs = getOrdersWithProductsByUser($userId);

  return $rs;
}