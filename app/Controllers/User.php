<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class user extends BaseController
{
    private $userModel;
    
    public function __construct(){
        $this->userModel = new UserModel();
    }
    public function index()
    {
        return view('users',[
            'users' => $this->userModel->paginate(null, "default"),
            'pager' => $this->userModel->pager
        ]);
    }
    public function delete($id){
        if($this->userModel->delete($id)){
            echo view('message', [
                'message' => 'Usuário Excluido com Sucesso'
            ]);
            header('location:/startup/public/');
        }else{
            echo "Erro ao excluir";
        }
    }
    public function create(){
        return view('form'); 
    }
    public function save(){
        if ($this ->userModel->save($this->request->getPost())){
            return view ("message", [
                'message' => 'Usuário salvo com sucesso'
            ]);
        }else{
                echo "Ocorreu um erro.";
            }
        
    }
    public function edit($id){
        return view('form', [
            'user' => $this->userModel->find($id)
        ]);
    }
}