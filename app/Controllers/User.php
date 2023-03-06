<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class user extends BaseController implements p
{
    private $userModel;
    
    public function __construct(){
        $this->userModel = new UserModel();
    }
    public function index()
    {
        return view('users',[
            'users' => $this->userModel->paginate(10),
            'pager' => $this->userModel->pager
        ]);
    }
    public function delete($id){
        if($this->userModel->delete($id)){
            echo view('message', [
                'message' => 'Usuário Excluido com Sucesso'
            ]);
        }else{
            echo "Erro ao excluir";
        }
    }
    public function create(){
        return view('form');
    }
    public function store(){
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