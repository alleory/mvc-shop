<?php

/**
 * Модель для таблицы подукции (products)
 * 
 */

/**
 * Получаем последние добавленны товары
 * 
 * @param integar $limit Лимит товара
 * @return array Массив товаров
 */
function getLastProducts($limit = null){
  $sql = "SELECT * 
          FROM `products`  
          ORDER BY id DESC";
  if($limit){
    $sql .= " LIMIT {$limit}"; // Дабовляем к $sql LIMIT
  }
  
  $rs = mysql_query($sql);
  return createSmartyRsArray($rs);
}

/**
 * Получить продукты для категории $itemId
 * 
 * @param integar $itemId ID категории
 * @return array массив продуктов
 */
function getProductsByCat($itemId){
  
  $itemId = intval($itemId);
  $sql = "SELECT * 
          FROM `products`  
          WHERE category_id = '{$itemId}'";
          
  $rs = mysql_query($sql);
  return createSmartyRsArray($rs);
}

/**
 * Получить данные продукта по ID
 * 
 * @param integar $itemId ID продукта
 * @return array массив данных продукта
 */
function getProductById($itemId){
  $itemId = intval($itemId);
  $sql = "SELECT * 
          FROM `products`  
          WHERE id = '{$itemId}'";
      
  $rs = mysql_query($sql);
  return mysql_fetch_assoc($rs);
}

/**
 * Получить список продуктов из массива идентификатора (ID's)
 * 
 * @param array $itemsIds массив идентификаторов продуктов
 * @return array массив данных продуктов
 */
function getProductsFromArray($itemsIds){
  
  $strIds = implode($itemsIds, ', ');
  $sql = "SELECT * 
          FROM products
          WHERE id in ({$strIds})";
  $rs = mysql_query($sql);
  
  return createSmartyRsArray($rs);
}