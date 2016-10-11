<?php
session_start(); // стартуем сессию

// есле в сессии нет массива корзины то создаём его
if(! isset($_SESSION['cart'])){
  $_SESSION['cart'] = array();
}

// #5.15 Эксперт PHP: Страница заказов покупателя №3
 

include_once '../config/config.php';          // Инициализация настроек
include_once '../config/db.php';              // Инициализация базы данных
include_once '../library/mainFunctions.php';  // Основные функции 

// определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

// определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

//if(isset($_GET['action'])) {
//    $actionName = $_GET['action'];
//}
//
//else {
//    $actionName = 'index';
//}

// есле в сесси есть данные об авторизированном пользавотиле, то передаём
// их в шаблон
if(isset($_SESSION['user'])){
  $smarty->assign('arUser', $_SESSION['user']);
}

// инициализируем переменную шабланизатора количество элементов в корзине
$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty, $controllerName, $actionName);
