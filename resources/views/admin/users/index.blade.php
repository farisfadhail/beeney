<x-app-layout>
    <x-slot name="header">
        {{ __('Questions') }}
    </x-slot>

    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
        <!--Container-->
        <div class="w-full mx-auto px-8 py-4">

            <!--Card-->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">Name</th>
                            <th data-priority="2">Email</th>
                            <th data-priority="3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <div class="flex gap-4 justify-center">
                                        <a href="#" class="btn btn-primary p-3">Detail</a>
                                        <a href="#" class="btn btn-secondary p-3">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->
                    </tbody>

                </table>


            </div>
            <!--/Card-->


        </div>
    </div>

</x-app-layout>
