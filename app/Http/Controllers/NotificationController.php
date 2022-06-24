<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Vonage\Client\Response\Response;

class NotificationController extends Controller
{
  
  public function sendSmsNotificaition()
  {
    $basic  = new \Vonage\Client\Credentials\Basic("91eceb0d", "7AUF3k83sggQr55z");
    $client = new \Vonage\Client($basic);

    $message = $client->message()->send([
      'to' => '34996601280',
      'from' => 'Herry',
      'text' => 'SMS notification sent using Vonage SMS API'
  ]);

  dd('SMS has sent.');
  }
}