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
          $admin = 'admin';
          $login = 'adm1234';
        }
        public function login(){
          return view('login');
        }
}






















