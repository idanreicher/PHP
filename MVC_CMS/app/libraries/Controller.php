<?php

// Base controller loads models and views

class Controller{

    

    public function model($model){
        //  load model
        
        if(file_exists('../app/models/' . $model . '.php')){
                 
            require_once '../app/models/' . $model . '.php';

        } else { 
       
        die('model - ' .$model . ' does not exists' );

        }

         // instanciate model
         return new $model();
    }
    // load view
    public function view($view , $data = []){
        // check for view file
                   
            if(file_exists('../app/views/' . $view . '.php')){
                  
                require_once '../app/views/' . $view . '.php';

            } else { 
           
            die('view - ' .$view . ' does not exists' );
        }

    }
}