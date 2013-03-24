<?php
class Router {
    static function run() {
        //Дефолтные контроллер и action
        $controller_name = 'Main';
        $action_name = 'index';
        
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        //Имя контроллера
        if ( !empty($routes[1]) ) {	
            $controller_name = $routes[1];
        }
        
        //Имя action
        if ( !empty($routes[2]) ) {
            $action_name = $routes[2];
        }

        //Префиксы
        $model_name = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;

        //Модель
        $model_file = strtolower($model_name).'.php';
        $model_path = DOCUMENT_ROOT.'/application/models/'.$model_file;
        if(file_exists($model_path)) {
            $model = new $model_name();
        }

        //Подключение контроллера
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = DOCUMENT_ROOT.'/application/controllers/'.$controller_file;
        if(!file_exists($controller_path)) {
            echo 'нету контроллера';
        }
        
        //Создание контроллера
        $controller = new $controller_name;
        $action = $action_name;
        
        if(method_exists($controller, $action)) {
            //Вызываем action
            $controller->$action();
        }
        else {
            // здесь также разумнее было бы кинуть исключение
            echo 'нету action';
        }
    
    }
    
    function ErrorPage404() {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
} ?>