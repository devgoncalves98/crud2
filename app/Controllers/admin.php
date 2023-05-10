<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdmModel;
  class admin extends BaseController
{
        private $admModel;
        

        public function __construct(){
          $this->admModel = new AdmModel();
        }
        
        public function admPadrao(){ 
          if ($this->admModel->admPadrao()){
            
            return view('messageAdm', [
              'message' => 'Permissões de administrador concedidas'
            ]);
            
           }else{
              echo "Ocorreu um erro";       
          }
                   }
        public function login(){
          return view('login');
        }

}






















