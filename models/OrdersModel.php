<?php

/**
 * Модель для таблицы заказов (orders)
 * 
 */

/**
 * Создание заказа (без провязки товара)
 * 
 * @param string $name
 * @param string $phone
 * @param string $adress
 * @return integer ID созданного заказа
 */
function makeNewOrder($name, $phone, $adress){
  
  //> инициализация переменных
  $userId    =  $_SESSION['user']['id'];
  $comment   =  "id пользавотиля: {$userId}<br />
                 Имя: {$name}<br />
                 Тел: {$phone}<br />
                 Адрес: {$adress}";
                 
  $dateCreated   = date('Y.m.d H:i:s');
  $userIp        = $_SERVER['REMOTE_ADDR'];
  //<
  
  // формирование запроса к БД
  $sql = "INSERT INTO
          orders (`user_id`, `date_created`, `date_payment`,
                  `status`, `comment`, `user_ip`)
          VALUES ('{$userId}', '{$dateCreated}', null,
                  '0', '{$comment}', '{$userIp}')";
  
  $rs = mysql_query($sql);
  
  // получить id созданного заказа
  if($rs){
    $sql = "SELECT id
            FROM orders 
            ORDER BY id DESC 
            LIMIT 1";
    $rs = mysql_query($sql);
    
    // преоброзование результатов запроса
    $rs = createSmartyRsArray($rs);
    
    // возврошаем id созданного запроса
    if(isset($rs[0])){
      return $rs[0]['id'];
    }
  }
  return false;
  
}

/**
 * Получить список заказов с привязкой к продуктам для пользователя $userId
 *
 * @param integer $userId ID пользователя
 * @return array массив заказов с привязкой к продуктам
 */
function getOrdersWithProductsByUser($userId){

    $userId = intval($userId);
    $sql = "SELECT * FROM orders
            WHERE `user_id` = '{$userId}'
            ORDER BY id DESC ";

    $rs = mysql_query($sql);

    $smartyRs = array();
    while ($row = mysql_fetch_assoc($rs)){
        $smartyRs[] = $row;
    }

    return $smartyRs;
}


