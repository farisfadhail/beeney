<x-app-layout>
    <x-slot name="header">
        {{ __('Predict (Admin)') }}
    </x-slot>

    <div class="w-full bg-green-700 h-[1px] mt-4"></div>

    <!-- Form -->
    <form method="POST" action="{{ route('admin.predict.process') }}" enctype="multipart/form-data" class="mt-8">
        @csrf
        <div class="flex flex-col">
            <label for="demand" class="text-2xl font-semibold mb-4">Permintaan</label>
            <input value="{{ old('demand') }}" type="number" name="demand" id="demand" placeholder="Masukkan jumlah permintaan" class="input input-bordered w-full" />
            @error('demand')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
        </div>

        <div class="flex flex-col mt-4">
            <label for="inventory" class="text-2xl font-semibold mb-4">Stok</label>
            <input value="{{ old('inventory') }}" type="number" name="inventory" id="inventory" placeholder="Masukkan jumlah stok" class="input input-bordered w-full" />
            @error('inventory')
                <small class="text-red-700">{{ $message }}</small>
            @enderror
        </div>

        <div class="flex justify-end my-4">
            <button type="submit" class="btn font-medium bg-green-700 border-none hover:bg-green-800 ">Predict Now</button>
        </div>
    </form>

    <div class="w-full bg-green-700 h-[1px] mt-4"></div>
</x-app-layout>
