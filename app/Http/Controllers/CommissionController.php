<?php

namespace App\Http\Controllers;

use App\Commission;
use Illuminate\Http\Request;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\PublicSslCommerzPaymentController;
use App\Seller;
use App\Payment;
use Session;

class CommissionController extends Controller
{
    public function index(){
        $commissions = Commission::all();
        $commissions_amount = Commission::where('status',0)->sum('commission_amount');
        return view('commissions.index',compact('commissions','commissions_amount'));
    }
    public function staffCommission(Request $request){
        $commissions = Commission::where('user_id',$request->user_id)->orderBy('created_at','desc')->get();
        $commissions_amount = Commission::where('user_id',$request->user_id)->where('status',0)->sum('commission_amount');
        return view('commissions.index',compact('commissions','commissions_amount'));
    }
    //redirect to payment controllers according to selected payment gateway for seller payment
    public function pay_to_seller(Request $request)
    {
        $data['seller_id'] = $request->seller_id;
        $data['amount'] = $request->amount;
        $data['payment_method'] = $request->payment_option;

        $request->session()->put('payment_type', 'seller_payment');
        $request->session()->put('payment_data', $data);

        if($request->payment_option == 'paypal'){
            $paypal = new PaypalController;
            return $paypal->getCheckout();
        }
        elseif ($request->payment_option == 'stripe') {
            $stripe = new StripePaymentController;
            return $stripe->stripe();
        }
        elseif ($request->payment_option == 'sslcommerz') {
            $sslcommerz = new PublicSslCommerzPaymentController;
            return $sslcommerz->index($request);
        }
        elseif ($request->payment_option == 'cash') {
            return $this->seller_payment_done($request->session()->get('payment_data'), null);
        }
    }

    //redirects to this method after successfull seller payment
    public function seller_payment_done($payment_data, $payment_details){
        $seller = Seller::findOrFail($payment_data['seller_id']);
        $seller->admin_to_pay = $seller->admin_to_pay - $payment_data['amount'];
        $seller->save();

        $payment = new Payment;
        $payment->seller_id = $seller->id;
        $payment->amount = $payment_data['amount'];
        $payment->payment_method = $payment_data['payment_method'];
        $payment->payment_details = $payment_details;
        $payment->save();

        Session::forget('payment_data');
        Session::forget('payment_type');

        flash(__('Payment completed'))->success();
        return redirect()->route('sellers.index');
    }
        public function updateStatus(Request $request)
    {
        $commission = Commission::findOrFail($request->id);
        $commission->status = $request->status;
        if($commission->save()){
            return 1;
        }
        return 0;
    }
}
