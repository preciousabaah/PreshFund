<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\Payment;


class PaymentController extends Controller
{

  /**
   * Redirect the User to Paystack Payment Page
   * @return Url
   */
  public function redirectToGateway()
  {
    try {
      return Paystack::getAuthorizationUrl()->redirectNow();
    } catch (\Exception $e) {
      return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
    }
  }

  /**
   * Obtain Paystack payment information
   * @return void
   */
  public function handleGatewayCallback()
  {
    $paymentDetails = Paystack::getPaymentData();

    dd($paymentDetails);
    // Now you have the payment details,
    // you can store the authorization_code in your db to allow for recurrent subscriptions
    // you can then redirect or do whatever you want
  }





public function verify(Request $request)
{
    if (!Auth::check()) {
        return response()->json(['message' => 'User not authenticated.'], 401);
    }

    $userId = Auth::id();

    $request->validate([
        'reference' => 'required|string'
    ]);

    $reference = $request->reference;

    $url = "https://api.paystack.co/transaction/verify/{$reference}";

    $response = Http::withToken(env('PAYSTACK_SECRET_KEY'))->get($url);

    if (!$response->ok()) {
        return response()->json(['message' => 'Unable to connect to Paystack.'], 500);
    }

    $data = $response->json();

    if ($data['status'] && $data['data']['status'] === 'success') {
        $payment = Payment::updateOrCreate(
            ['reference' => $reference],
            [
                'user_id' => $userId,
                'email' => $data['data']['customer']['email'],
                'amount' => $data['data']['amount'] / 100,
                'payment_status' => 'success',
                'payment_method' => $data['data']['channel'],
                'currency' => $data['data']['currency'],
                'plan_name' => $request->input('plan_name') ?? null,
            ]
        );

        return response()->json(['message' => 'Payment verified and saved.']);
    }

    return response()->json(['message' => 'Payment verification failed.'], 400);
}

}
