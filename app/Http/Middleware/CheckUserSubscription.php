<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\UserSubscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Symfony\Component\HttpFoundation\Response;

class CheckUserSubscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userSubscribe = UserSubscription::where('user_id', Auth::id())->first();

        if (is_null($userSubscribe)) {
            return redirect()->route('subscription.index');
        }

        if ($userSubscribe->expired_date < Date::now()) {
            return redirect()->route('subscription.index');
        }

        return $next($request);
    }
}
