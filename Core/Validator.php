<?php
/**
 * Created by PhpStorm.
 * User: Ali
 * Date: 8/17/2017
 * Time: 12:04 PM
 */

namespace Core;

class Validator {

    private $params = [];

    private $errorCount = 0;

    private $lang = ["captcha"=>"کد امنیتی","id"=>"آی دی","parent_id"=>"دسته بندی مادر","name"=>"عنوان","first_name"=>"نام","last_name"=>"نام خانوادگی","mobile"=>"موبایل","email"=>"پست الکترونیک","address"=>"آدرس","area_id"=>"منطقه","full_name"=>"نام و نام خانوادگی","password"=>"رمز عبور","description"=>"توضیحات ","biography"=>"بیوگرافی","body"=>"متن","avatars"=>"عکس پروفایل","Bar_Association"=>"کانون وکلا","international_code"=>"کد ملی","address"=>"آدرس","tell1"=>"تلفن","tell2"=>"تلفن","licence_number"=>"شماره پروانه","birth_y"=>"سال تولد","birth_m"=>"ماه تولد","birth_d"=>"روز تولد","card_number"=>"شماره کارت","sex"=>"جنسیت","city"=>"شهر","level"=>"درجه","Consultation_price"=>"قیمت مشاوره حضوری","tell_price"=>"قیمت مشاوره تلفنی","online_price"=>"قیمت مشاوره آنلاین","subject"=>"عنوان سوال","category_id"=>"دسته بندی"];

    /**
     * @param array $params
     */
    public function setRule($param,$validate)
    {
        $this->params[$param] = $validate;
    }


    private function getLang($key){
        if(isset($this->lang[$key])){
            return $this->lang[$key];
        }else{
            return $key;
        }
    }


    public function validate(){


        foreach($this->params as $key=>$val){


            if(!isset($_POST[$key])){
                vd($_POST);
            }

            $field = $_POST[$key];


            foreach($val as $k=>$v){

                if($v=="required"){
                    if(!$this->required($field)){
                        $_SESSION['error'][$key][$v] = "لطفا فیلد {$this->getLang($key)} را پر کنید";
                        $this->errorCount++;
                    }
                }else if($v=="integer"){
                    if(!$this->integer($field)){
                        $_SESSION['error'][$key][$v] = "فیلد {$this->getLang($key)} باید عددی باشد";
                        $this->errorCount++;
                    }
                }else if($v=="numeric"){
                    if(!$this->numeric($field)){
                        $_SESSION['error'][$key][$v] = "فیلد {$this->getLang($key)} باید عددی باشد";
                        $this->errorCount++;
                    }
                }else if($v=="email"){
                    if(!$this->email($field)){
                        $_SESSION['error'][$key][$v] = " فیلد {$this->getLang($key)} باید ایمیل صحیح باشد ";
                        $this->errorCount++;
                    }
                }else if($v=="confirm"){
                    if(!$this->confirm($field,$_POST[$key."_confirmation"])){
                        $_SESSION['error'][$key][$v] = " فیلد {$this->getLang($key)} و تکرارش باید برابر باشند ";
                        $this->errorCount++;
                    }
                }else if($v=="captcha"){
                    if(!$this->captcha($field)){
                        $_SESSION['error'][$key][$v] = " فیلد {$this->getLang($key)} صحیح نیست";
                        $this->errorCount++;
                    }
                }else if($v=="upload"){
                    if(!$this->upload($field)){
                        $_SESSION['error'][$key][$v] = " فیلد {$this->getLang($key)} صحیح نیست";
                        $this->errorCount++;
                    }
                }

            }
        }

        if($this->errorCount > 0){
            return false;
        }

        return true;

    }


    public function only($args){
        $parameters = [];
        foreach($_POST as $key=>$value){
            if(in_array($key,$args)){

                $parameters[$key] = $value;
            }
        }
        return $parameters;
    }


    private function required($field){
        if($field=="0"){
            return true;
        }
        if(isset($field) && !empty($field)){
            return true;
        }
        return false;
    }

    private function integer($field){
        if(isset($field) && is_numeric($field) && $field >= 0){
            return true;
        }
        return false;
    }


    private function numeric($field){
        if(isset($field) && is_numeric($field)){
            return true;
        }
        return false;
    }

    private function email($field){
        if(filter_var($field,FILTER_VALIDATE_EMAIL)){
            return true;
        }
        return false;
    }

    private function digist($field,$count){
        if(strlen($field) == $count){
            return true;
        }
        return false;
    }


    private function min($field,$min){
        if(strlen($field) >= $min){
            return true;
        }
        return false;
    }


    private function max($field,$max){
        if(strlen($field) <= $max){
            return true;
        }
        return false;
    }


    private function confirm($field,$confirm){
        if($field == $confirm){
            return true;
        }
        return false;
    }

    private function captcha($field){
        if($field==$_SESSION['captcha']){
            return true;
        }
        return false;
    }

}