<?php

/**
 *  categoryController.php
 * 
 * Контроллер страницы категории (/category/1)
 * 
 */

// подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';

/**
 * Формирование страницы категории
 * 
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty){
  $catId = isset($_GET['id']) ? $_GET['id'] : null;
  if($catId == null) exit();
  
  $rsProducts = null;
  $rsChildCats = null;
          
  $rsCategory = getCatById($catId);
  
  // есле главная категория то показываем дочернии категории,
  // иначе показывает товар
  if($rsCategory['parent_id'] == 0){
    $rsChildCats = getChildrenForCat($catId);  
  }else{
    $rsProducts = getProductsByCat($catId);
  }
  
  $rsCategories = getAllMainCatsWithChildren();
  
  $smarty->assign('pageTitle', 'Товары категории ' . $rsCategory['name']);
 
  $smarty->assign('rsCategory', $rsCategory); // Категории: Телефоны/Планшеты
  $smarty->assign('rsProducts', $rsProducts); // Все продукты данной категории
  $smarty->assign('rsChildCats', $rsChildCats); // Дочерние подкатегории: Телефоны Samsung/Телефоны Apple

  $smarty->assign('rsCategories', $rsCategories); // Все категориий и подкатегориий: Телефоны/Планшеты

  loadTemplate($smarty, 'header');
  loadTemplate($smarty, 'category');
  loadTemplate($smarty, 'footer');
}