<x-app-layout>
    <x-slot name="header">
        {{ __('Output Prediction Stock') }}
    </x-slot>

    <div class="w-full bg-green-700 h-[1px] mt-4"></div>

    <div class="w-full md:mt-16 mt-8 md:px-32">
        <div class="flex justify-center">
            <img src="../../images/success.png" class=" md:w-[400px] w-full flex justify-center" alt="">
        </div>
        <div class="text-center font-semibold md:px-36 mt-8">
            Berdasarkan prediksi yang telah sistem kami hasilkan yaitu dengan melihat supply yang berjumlah "{{ $inventory }}" dan demand yang berjumlah "{{ $demand }}", maka produksi madu diperkirakan akan "{{ $category }}". Namun hasil yang telah dihitung sistem hanya memiliki tingkat keberhasilan sebesar 92.4% sehingga disarankan tidak terpaku pada hasil tersebut.
        </div>
    </div>

    <div class="w-full bg-green-700 h-[1px] md:mt-16 mt-8"></div>
</x-app-layout>
