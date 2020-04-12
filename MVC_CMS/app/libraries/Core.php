<?php
/**
 * App Core Class
 * Creates URL & loads core controller
 * URL FORMAT - /controller/method/param 
 */

 class Core {

     protected $currentControllr = 'Pages';
     protected $currentMethod = 'index';
     protected $params =[];

    public function __construct(){
        
        $url = $this->getUrl();

        // look in controllers for first value
        $controllerName = ucwords($url[0]);
        if(file_exists('../app/controllers/' . $controllerName) . '.php'){
            //if exists set as controller
            $this->currentControllr = $controllerName;   
            unset($url[0]);
        }
        // require the controller
        require_once '../app/controllers/' . $this->currentControllr . '.php' ;
        // instatiate the controller
        $this->currentControllr = new $this->currentControllr; 

        // check for second part of url
        if(isset($url[1])){
            // check if method exist
            $methodName = $url[1];
            if(method_exists($this->currentControllr , $methodName)){
                $this->currentMethod = $methodName; 
                unset($url[1]);
            }
        }
      
        // get url params
        $this->params = $url ? array_values($url) : [];
       
        // callback with array params
        call_user_func_array([
            $this->currentControllr,
            $this->currentMethod] ,
            $this->params);
    }
     public function getUrl(){
         if (isset($_GET['url'])) {
                
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
         }
     }
 }
 
 
 