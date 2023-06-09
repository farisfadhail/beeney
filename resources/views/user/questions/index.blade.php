<x-app-layout>
    <x-slot name="header">
        {{ __('Questions') }}
    </x-slot>

    <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
        <!--Container-->
        <div class="w-full mx-auto px-8 py-4">

            <!--Card-->
            <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                <a href="{{ route('question.create') }}" class="btn font-medium btn-accent border-none py-3 px-6 mb-4">Create</a>

                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th data-priority="1">Title</th>
                            <th data-priority="2">Views</th>
                            <th data-priority="3">Create</th>
                            <th data-priority="4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $question)
                            <tr>
                                <td>{{ $question->title }}</td>
                                <td>{{ $question->watch }}</td>
                                <td>{{ $question->created_date }}</td>
                                <td class="flex gap-4 justify-center">
                                    <a href="{{ route('question.show', $question->id) }}" class="btn font-medium bg-primary border-none p-3">Detail</a>
                                    <a href="{{ route('question.edit', $question->id) }}" class="btn font-medium border-none p-3">Edit</a>
                                    <form action="{{ route('user.question.destroy', $question->id) }}" method="POST">
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
