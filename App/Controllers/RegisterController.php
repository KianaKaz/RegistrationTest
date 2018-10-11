<?php
namespace App\Controllers;


use App\Models\address;
use App\Models\user;
use Core\Validator;

class RegisterController {

    public function view(){

if (isset($_SESSION['loginStatus']) && isset($_SESSION['AddressStore'])) {
    if ($_SESSION['loginStatus'] && $_SESSION['AddressStore']) {
        echo view('PaymentInformation');
    }} elseif (isset($_SESSION['loginStatus'])){
        if ($_SESSION['loginStatus']) {
        echo view('AddressInformation');
    }
}

    else {
        echo view('index');


}
    }

    public function view2(){


        echo view('AddressInformation');
    }

    public function view3(){

        echo view('PaymentInformation');
    }

    public function register1(){

        $validate= new Validator();

        $validate->setRule("first_name",["required"]);
        $validate->setRule("last_name",["required"]);
        $validate->setRule("tell",["required"]);

        if(!$validate->validate()){
            redirect('/register');
        }

        $user = user::create($validate->only(['first_name','last_name','tell']));
        $_SESSION['loginStatus'] = ['id' => $user['id'],'tell'=>$user['tell']];


        if($user){
            redirect("/register/step2");
        }else{
            $_SESSION['error']['register']['database'] = "مشکلی در ثبت نام پیش امده است";
            redirect("/register");
        }

    }

    public function register2(){

        $user = user::where('id', '=',user()['id'])->first();

        $validate=new Validator();
        $validate->setRule("city",["required"]);
        $validate->setRule("St",["required"]);
        $validate->setRule("NO",["required"]);
        $validate->setRule("zip",["required"]);

        if(!$validate->validate()){
            redirect('/register');
        }

        $address = address::create($validate->only(['city','St','NO','zip','user_id']));
        $_SESSION['AddressStore'] = ['id' => $user['id']];


        $id=$_POST['user_id'];

        if($address){
            redirect("/register/step3/".$id);
        }else{
            $_SESSION['error']['register']['database'] = "مشکلی در ثبت نام پیش امده است";
            redirect("/register");
        }


    }

    public function register3($id){

        $user=user::find($id);
        $user->update(['Acount_owner'=>$_POST['Acount_owner'],'IBAN'=>$_POST['IBAN']]);
        $_SESSION['PaymentStatus'] = ['id' => $user['id'],'IBAN'=>$user['IBAN'],'Acount_owner'=>$user['Acount_owner']];


        if($user){

            redirect('/success');
        }

    }

}