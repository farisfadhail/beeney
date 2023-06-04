@extends('layouts.frontend')

@section('content')
<div class="md:flex block mt-8 md:mt-24 gap-8 justify-center">
    @foreach ($subscriptionPlans as $plan)
        @if ($plan->name == 'Basic')
            <div class="mb-12 mt-4 md:mt-0">
                <div class="card md:w-96 w-full bg-base-100 shadow-xl">
                    <div class="card-body">
                        <div class="flex justify-between align-middle">
                            <div class="card-title text-3xl">{{ $plan->name }}</div>
                            <div class="pt-1 font-semibold">Lifetime</div>
                        </div>
                        <div class="text-xl font-bold text-orange-500">Free</div>
                            @foreach (json_decode($plan->features) as $feature)
                                <div class="flex">
                                    <svg
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M8.4402 12.0001L10.8142 14.3731L15.5602 9.62708"
                                            strokeWidth="1.5"
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                        />
                                        <path
                                            fillRule="evenodd"
                                            clipRule="evenodd"
                                            d="M2.7498 12.0001C2.7498 18.9371 5.0628 21.2501 11.9998 21.2501C18.9368 21.2501 21.2498 18.9371 21.2498 12.0001C21.2498 5.06312 18.9368 2.75012 11.9998 2.75012C5.0628 2.75012 2.7498 5.06312 2.7498 12.0001Z"
                                            strokeWidth="1.5"
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                        />
                                    </svg>
                                    <p class="ml-2 font-medium">{{ $feature }}</p>
                                </div>
                            @endforeach
                            <div class="card-actions justify-end">
                            @auth
                                <button class="btn btn-disabled mt-4">Already Activated</button>
                            @else
                                <a href="{{ route('login') }}" class="btn mt-4">Activate Now</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if ($plan->name == 'Premium')
            <div class="card bg-neutral md:w-96 w-full text-white shadow-xl mb-12">
                <div class="card-body">
                    <div class="flex justify-between align-middle">
                        <div class="card-title text-3xl">{{ $plan->name }}</div>
                        <div class="pt-1 font-semibold">{{ $plan->active_period_in_months.' month' }}</div>
                    </div>
                    <div>{{ 'Rp. '.number_format($plan->price) }}</div>
                        @foreach (json_decode($plan->features) as $feature)
                            <div class="flex">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M8.4402 12.0001L10.8142 14.3731L15.5602 9.62708"
                                        strokeWidth="1.5"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                    />
                                    <path
                                        fillRule="evenodd"
                                        clipRule="evenodd"
                                        d="M2.7498 12.0001C2.7498 18.9371 5.0628 21.2501 11.9998 21.2501C18.9368 21.2501 21.2498 18.9371 21.2498 12.0001C21.2498 5.06312 18.9368 2.75012 11.9998 2.75012C5.0628 2.75012 2.7498 5.06312 2.7498 12.0001Z"
                                        strokeWidth="1.5"
                                        strokeLinecap="round"
                                        strokeLinejoin="round"
                                    />
                                </svg>
                                <p class="ml-2 font-medium">{{ $feature }}</p>
                            </div>
                        @endforeach
                        <div class="card-actions justify-end">
                        <a href="{{ route('subscriptionPlan.payment-page', $plan->id) }}" class="btn bg-orange-400 border-orange-400 mt-4">Buy Now</a>
                    </div>
                </div>
            </div>
        @endif
    @endforeach

</div>

@endsection
