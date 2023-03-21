<?php

namespace App\Controllers;
use App\Models\UserModel;
class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function hello()
    {
        return "<h1>Hello World</h1>";
    }
    public function insert(){
        $data = [
            'user_name'=>$this->request->getVar('user_name'),
            'user_email'=>$this->request->getVar('user_email'),
            'user_password'=>$this->request->getVar('user_password')
        ];
        $model = new UserModel();
        if($model->insert($data)){
        
        echo "<h1> Data Insertrd Successfully....... </h1>";
        }
        else{
            echo "Error ";
        }
    }
    public function show(){
        $model = new UserModel();
        $data['users']=$model->findAll();
        return view('show',$data);
    }
    public function delete($id){
        // $id=$this->request->getVar('user_id');
         $model = new UserModel();
        // if ( $model->where('user_id',$id)->delete()) {
        //     echo "Deleteed";
        // }
        // else{
        //         echo "error";   
        // }
            $model->delete($id);
       
        return redirect()->to(base_url('show')); 
    }
    public function edit($id=null){
        $model = new UserModel();
       $data['user']= $model->where('user_id',$id)->first();
       return view('edit',$data);
    }
    public function update($id=null){
        $data = [
            'user_name'=>$this->request->getVar('user_name'),
            'user_email'=>$this->request->getVar('user_email'),
            'user_password'=>$this->request->getVar('user_password')
        ];
        $id=$this->request->getVar('id');
        $model = new UserModel();
        $model->update($id,$data);
        return redirect()->to(base_url('show')); 
    } 
    }

