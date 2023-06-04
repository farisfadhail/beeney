@extends('layouts.frontend')

@section('content')
    <div class="card bg-base-100 shadow-xl mt-8">
      <div class="card-body">
        <h2 class="card-title text-3xl mb-4">Detail Pesanan</h2>
        <label class="block text-sm ">
            <span class="text-gray-700 dark:text-gray-400 font-semibold text-lg">Nama Subscription Plan</span>
            <div class="block w-full py-3 input-warning rounded-lg text-md mt-2 text-sm form-input">
                @php
                    echo $plan[0]->name
                @endphp
            </div>
        </label>
        <label class="block text-sm ">
            <span class="text-gray-700 dark:text-gray-400 font-semibold text-lg">Harga</span>
            <div class="block w-full py-3 input-warning rounded-lg text-md mt-2 text-sm form-input">
                @php
                    echo 'Rp. '.number_format($plan[0]->price)
                @endphp
            </div>
        </label>
        <div class="card-actions justify-end mt-4">
          <button class="btn bg-orange-400 border-orange-400" type="submit" id="pay-button">Subscribe Now</button>
        </div>
      </div>
    </div>

    <form action="{{ route('subscriptionPlan.payment') }}" id="submit-form" method="POST">
        @csrf
        <input type="hidden" name="json" id="json_callback">
        <input type="hidden" name="plan_id" value="{{ $plan[0]->id }}">
    </form>

    <script type="text/javascript">
      // For example trigger on button clicked, or any time you need
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
        window.snap.pay('{{ $snap_token }}', {
          onSuccess: function(result){
            console.log(result);
            response_to_form(result);
          },
          onPending: function(result){
            /* You may add your own implementation here */
            alert("wating your payment!");
            console.log(result);
            response_to_form(result);
          },
          onError: function(result){
            /* You may add your own implementation here */
            alert("payment failed!");
            console.log(result);
            response_to_form(result);
          },
          onClose: function(){
            /* You may add your own implementation here */
            alert('you closed the popup without finishing the payment');
            response_to_form(result);
          }
        })
      });

      function response_to_form(result) {
        document.getElementById('json_callback').value = JSON.stringify(result);
        $('#submit-form').submit();
      }
    </script>
@endsection
