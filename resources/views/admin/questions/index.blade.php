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
                            <th data-priority="2">Position</th>
                            <th data-priority="3">Office</th>
                            <th data-priority="4">Age</th>
                            <th data-priority="5">Start date</th>
                            <th data-priority="6">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
                                <div class="">
                                </div>
                            </td>
                        </tr>

                        <!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->

                        <tr>
                            <td>Donna Snider</td>
                            <td>Customer Support</td>
                            <td>New York</td>
                            <td>27</td>
                            <td>2011/01/25</td>
                            <td>$112,000</td>
                        </tr>
                    </tbody>

                </table>


            </div>
            <!--/Card-->


        </div>
    </div>

</x-app-layout>
