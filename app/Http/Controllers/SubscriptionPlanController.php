<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SubscriptionPlan;
use App\Models\UserSubscription;
use Illuminate\Support\Facades\Auth;

class SubscriptionPlanController extends Controller
{
    public function index()
    {
        $subscriptionPlans = SubscriptionPlan::all();
        $subscription = UserSubscription::where('user_id', Auth::id())
                ->where('expired_date', '>', Carbon::now())
                ->first();

        return view('pages.subscriptions.index', [
            'subscriptionPlans' => $subscriptionPlans,
            'userSubscription' => null,
            'subscription' => $subscription
        ]);
    }

    public function paymentPage($id)
    {
        $selectPlan = SubscriptionPlan::where('id', $id)->get();

        // Membuat variable dari \Midtrans\Config untuk payment
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = false;
        \Midtrans\Config::$is3ds = false;

        // Menambahkan parameter yang digunakan untuk melakukan payment
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $selectPlan[0]->price,
            ),
        );

        // Membuat snap token dari \Midtrans\Snap dengan method getSnapToken() dan parameter $params
        $snapToken = \Midtrans\Snap::getSnapToken($params);

        // Menampilkan halaman pay
        return view('pages.subscriptions.pay', [
            'plan' => $selectPlan,
            'snap_token' => $snapToken
        ]);
    }

    // Mengelola pembayaran
    public function payment(Request $request)
    {
        $json = json_decode($request->input('json'));
        $plan_id = $request->input('plan_id');

        $selectPlan = SubscriptionPlan::where('id', $plan_id)->get();

        $fraud = $json->fraud_status;
        $transaction_status = $json->transaction_status;
        $activePeriod = null;

        if ($transaction_status == 'capture') {
            if ($fraud == 'challenge') {
                // TODO Set payment status in merchant's database to 'challenge'
                $transactionStatus = 'pending';
            }
            else if ($fraud == 'accept') {
                // TODO Set payment status in merchant's database to 'success'
                $transactionStatus = 'paid';
                $activePeriod = Carbon::now()->addMonths((int) $selectPlan[0]->active_period_in_months);
            }
        }
        else if ($transaction_status == 'cancel') {
            if ($fraud == 'challenge') {
                // TODO Set payment status in merchant's database to 'failure'
                $transactionStatus = 'failed';
            }
            else if ($fraud == 'accept') {
                // TODO Set payment status in merchant's database to 'failure'
                $transactionStatus = 'failed';
            }
        }
        else if ($transaction_status == 'deny') {
            // TODO Set payment status in merchant's database to 'failure'
            $transactionStatus = 'failed';
        }
        else if ($transaction_status == 'settlement') {
            // TODO set payment status in merchant's database to 'Settlement'
            $transactionStatus = 'paid';
            $activePeriod = Carbon::now()->addMonths((int) $selectPlan[0]->active_period_in_months);
        }
        else if ($transaction_status == 'pending') {
            // TODO set payment status in merchant's database to 'Pending'
            $transactionStatus = 'pending';
        }
        else if ($transaction_status == 'expire') {
            // TODO set payment status in merchant's database to 'expire'
            $transactionStatus = 'failed';
        }

        $data = [
            'user_id' => Auth::id(),
            'subscription_plan_id' => $selectPlan[0]->id,
            'price' => $selectPlan[0]->price,
            'expired_date' => $activePeriod,
            'payment_status' => $transactionStatus,
            'snap_token' => $json->transaction_id
        ];

        $userSubscription = UserSubscription::create($data);

        return redirect()->route('subscription.index');
    }
}
