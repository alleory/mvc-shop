<?php

/**
 * Модель для таблицы продукции (purchase)
 * 
 */

/**
 * Внесение в БД данных продуктов с привязкой к заказу
 * 
 * @param integer $orderId ID заказа
 * @param array $cart массив корзины
 * @return boolean TRUE в случае успешного добовления в БД
 */
function setPurchaseForOrder($orderId, $cart){
  
  $sql = "INSERT INTO purchase 
          (order_id, product_id, price, amount) 
          VALUES ";
  
  $values = array();
  // Формируем массив строк для запроса для каждого товара
  foreach($cart as $item){
    $values[] = "('{$orderId}', '{$item['id']}', '{$item['price']}', '{$item['cnt']}')";
  }
  
  // преобразовываем массив в строку
  $sql .= implode($values, ', ');
  $rs = mysql_query($sql);

  return $rs;
  
 
}



