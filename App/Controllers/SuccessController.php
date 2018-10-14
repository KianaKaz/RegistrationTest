<?php
/**
 * Created by PhpStorm.
 * User: acerr
 * Date: 10/6/2018
 * Time: 11:30 AM
 */

namespace App\Controllers;


class SuccessController
{
  public function index(){

      echo view('success');
  }

  public function demo()
  {

      $url = 'https://37f32cl571.execute-api.eu-central-1.amazonaws.com/default/wunderfleet-recruiting-backend-dev-save-payment-data';
      $_POST = array('ID' => payment()['id'],'IBAN' => payment()['IBAN'],'Owner' => payment()['Acount_owner'], 'php_master' => true);

      $handle = curl_init($url);
      curl_setopt($handle, CURLOPT_POST, true);
      curl_setopt($handle, CURLOPT_POSTFIELDS, $_POST);
      echo 'Id:'.$_POST['ID'].',';
      echo 'Owner:'.$_POST['Owner'].',';
      echo 'IBAN:'.$_POST['IBAN'];

  }
}