<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

  public function index()
  {
    
  }
  /**
* Verify a product.
*
* @param  Request  $request
* @return Response
*/
  public function verify(Request $request)
  {
    $from = $request->input("From");
    $body = $request->input("Body");
    $product = Product::where("product_id", $body)->first();
    if (!$product) {
        $product_status = "Service not available";
    } else if ($product->is_original) {
        $product_status = "Original '$product->name', CONFIRMED 500!!";
    } else {
        $product_status = "Fake '$product->name', ERROR NOT CONFIRMED!!";
    }

    return $this->sendMessage($product_status, $from);
  }


  /**
     * Sends sms to user using Twilio's programmable SMS client
     * @param String $message Body of sms
     * @param Number $recipients string or array of phone number of recepient
     */
    private function sendMessage($message, $recipients)
    {
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_AUTH_TOKEN");
        $twilio_number = getenv("TWILIO_NUMBER");
        $client = new Client($account_sid, $auth_token);
        $client->messages->create($recipients,
                array('from' => $twilio_number, 'body' => $message));
    }
}
