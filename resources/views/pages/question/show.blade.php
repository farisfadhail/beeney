@extends('layouts.frontend')

@section('content')
    <div class="w-full bg-green-700 h-[1px] mt-4"></div>

    <!-- Questions -->
    <div class="card w-full bg-orange-50 shadow-md hover:shadow-xl transition-shadow my-8 py-2">
        <div class="card-body">
            <div class="flex justify-between gap-8">
                <h1 class="card-title text-base">{{ $question->title }}</h1>
                <div class="flex align-middle">
                    <label class="md:swap hidden">
                        <!-- this hidden checkbox controls the state -->
                        <input type="checkbox" class="hidden" />

                        <!-- volume on icon -->
                        <img src="https://img.icons8.com/material/96/C57C00/bookmark-outline.png" class="w-8 mx-4 swap-on" />

                        <!-- volume off icon -->
                        <img src="https://img.icons8.com/material/96/C57C00/bookmark-ribbon--v1.png" class="w-8 mx-4 swap-off" />
                    </label>
                    @if (Auth::id() === $question->User->id)
                        <a href="{{ route('question.edit', $question->id) }}" class="btn btn-ghost font-bold bg-transparent text-green-700 border-none">Edit</a>
                        <a href="{{ route('question.destroy', $question->id) }}" class="btn btn-ghost font-bold bg-transparent text-green-700 border-none ml-2">Delete</a>
                    @endif
                </div>
            </div>
            <div class="flex pr-12 py-4 text-sm">
                <p>
                    {{ strip_tags($question->body) }}
                </p>
            </div>
            <div class="flex gap-2">
                {{--<div class="badge badge-outline">Apis Dorsata</div>
                <div class="badge badge-outline">Pemula</div>--}}
            </div>
            <div class="flex justify-between">
                <div class="card-actions">
                    <label class="swap md:hidden ">
                        <!-- this hidden checkbox controls the state -->
                        <input type="checkbox" class="hidden" />

                        <!-- volume on icon -->
                        <img src="https://img.icons8.com/material/96/C57C00/bookmark-outline.png" class="w-8 mx-4 swap-on" />

                        <!-- volume off icon -->
                        <img src="https://img.icons8.com/material/96/C57C00/bookmark-ribbon--v1.png" class="w-8 mx-4 swap-off" />
                    </label>
                </div>
                <div class="card-actions justify-end flex align-middle">
                    <div class="flex ml-4 align-middle">
                        <img src="https://img.icons8.com/material-outlined/24/null/visible--v1.png" width="50%" />
                        <div class="text-sm ml-2 min-w-full">{{ $question->watch }}</div>
                    </div>
                    <div class="flex ml-4">
                        <img src="https://img.icons8.com/ios-glyphs/30/null/speech-bubble--v1.png" width="40%" />
                        <div class="text-sm ml-2 min-w-full">{{ count($replies) }}</div>
                    </div>
                    <div class="flex ml-2">
                        <img src="https://img.icons8.com/material-outlined/24/null/create.png" width="20%" />
                        <div class="text-sm ml-2 min-w-full">{{ $question->created_date }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full bg-green-700 h-[1px] mt-6"></div>

    <div class="mt-4">
        <div class="flex justify-between">
            @if (!$replies->isEmpty())
                @auth
                    <a href="{{ route('reply.create', $question->id) }}" class="btn font-medium bg-green-700 border-none hover:bg-green-800 ">Beri Jawaban</a>
                @else
                    <a href="{{ route('login') }}" class="btn font-medium bg-green-700 border-none hover:bg-green-800 ">Beri Jawaban</a>
                @endauth
            @else
                <a href="{{ route('reply.create', $question->id) }}" class="invisible btn font-medium bg-green-700 border-none hover:bg-green-800 ">Beri Jawaban</a>
            @endif
            <div class="flex flex-row">
                <div class="mt-2">Urut berdasarkan :</div>
                <select class="select select-warning max-w-xs ml-2 cursor-pointer p-2">
                    <option disabled selected >Filter Komentar</option>
                    <option>Paling membantu</option>
                    <option>Terbaru</option>
                    <option>Terlama</option>
                </select>
            </div>
        </div>
    </div>

    @forelse ($replies as $reply)
        <div class="mt-6">
            <div class="flex gap-4">
                <div class="gap-2 p-4">
                    <img src="../../images/healthicons_ui-user-profile.png" alt="" class="w-12" />
                    <div class="text-xs font-medium mt-2 text-center">
                        @foreach ($users as $user)
                            @if ($user->id === $reply->user_id)
                                {{ $user->name }}
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="mt-2 w-full">
                    <div class="font-semibold text-sm py-2">{{ $reply->created_at->format('F j, Y g:i A') }}</div>
                    <p>
                        {{ strip_tags($reply->reply_body) }}
                    </p>
                    {{--@if (Auth::id() === $question->User->id)
                        <div class="flex justify-end">
                            <a href="{{ route('question.edit', $question->id) }}" class="btn btn-ghost font-bold bg-transparent text-green-700 border-none">Edit</a>
                            <a href="{{ route('question.destroy', $question->id) }}" class="btn btn-ghost font-bold bg-transparent text-green-700 border-none ml-2">Delete</a>
                        </div>
                    @endif--}}

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <label class="swap mb-4">
                                <!-- this hidden checkbox controls the state -->
                                <input type="checkbox" class="hidden" />

                                <!-- volume on icon -->
                                <img src="https://img.icons8.com/ios-filled/50/null/thumb-up--v1.png" class="w-5 swap-on mt-4" />

                                <!-- volume off icon -->
                                <img src="https://img.icons8.com/ios/50/null/thumb-up--v1.png" class="w-5 swap-off mt-4" />
                            </label>
                            <div class="text-sm ml-3 ">12</div>
                            <label class="swap mb-4">
                                <!-- this hidden checkbox controls the state -->
                                <input type="checkbox" class="hidden" />

                                <!-- volume on icon -->
                                <img src="https://img.icons8.com/ios-filled/50/null/thumbs-down.png" class="w-5 ml-4 swap-on mt-4" />

                                <!-- volume off icon -->
                                <img src="https://img.icons8.com/ios/50/null/thumbs-down.png" class="w-5 ml-4 swap-off mt-4" />
                            </label>
                            <div class="text-sm ml-3">12</div>
                        </div>
                        <div class="flex flex-col">
                            @if (Auth::id() === $reply->user_id)
                                <form method="POST" action="{{ route('reply.destroy', $reply->id) }}" enctype="multipart/form-data" class="mt-8">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('reply.edit', $reply->id) }}" class="btn btn-ghost font-bold bg-transparent text-green-700 border-none">Edit</a>
                                    <button type="submit" class="btn btn-ghost font-bold bg-transparent text-green-700 border-none ml-2">Delete</button>
                                </form>
                            @elseif ('role:admin')
                                <form method="POST" action="{{ route('admin.reply.destroy', $reply->id) }}" enctype="multipart/form-data" class="mt-8">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-ghost font-bold bg-transparent text-green-700 border-none ml-2">Delete</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-green-700 h-[2px] mt-4"></div>
        </div>

    @empty
        <div class=" text-2xl font-bold text-center my-12">
            <div class="mb-4">
                Jadilah komentar pertama!
            </div>

            @if (Auth::check())
                <a href="{{ route('reply.create', $question->id) }}" class="btn font-medium bg-green-700 border-none hover:bg-green-800 ">Beri Jawaban</a>
            @else
                <a href="{{ route('login') }}" class="btn font-medium bg-green-700 border-none hover:bg-green-800 ">Beri Jawaban</a>
            @endif
        </div>
    @endforelse

    <div class="flex justify-center py-8">
        <div class="btn-group">
            <button class="btn btn-ghost">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <button class="btn">1</button>
            <button class="btn btn-ghost">2</button>
            <button class="btn btn-ghost">3</button>
            <button class="btn btn-ghost">4</button>
            <button class="btn btn-ghost">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
@endsection
