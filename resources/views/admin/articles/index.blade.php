<x-app-layout>
    <x-slot name="header">
        {{ __('Articles') }}
    </x-slot>

    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
        <!--Container-->
        <div class="w-full mx-auto px-8 py-4">

            <!--Card-->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">Title</th>
                            <th data-priority="2">User</th>
                            <th data-priority="3">Create</th>
                            <th data-priority="6">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->title }}</td>
                                <td>
                                    @foreach ($users as $user)
                                        @if ($user->id === $article->user_id)
                                            {{ $user->name }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>{{ $article->created_date }}</td>
                                <td class="flex gap-4">
                                    <a href="{{ route('article.show', $article->id) }}" class="btn font-medium bg-primary border-none hover:bg-primary p-3">Detail</a>
                                    <form action="{{ route('admin.article.destroy', $article->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn font-medium btn-secondary p-3">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>


            </div>
            <!--/Card-->


        </div>
    </div>

</x-app-layout>
