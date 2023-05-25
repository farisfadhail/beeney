@extends('layouts.frontend')

@section('content')
    <!-- Under Navbar -->
    <div class="flex flex-row md:justify-end justify-center gap-4">
        <a
            href="{{ route('question.create') }}"
            class="btn font-medium bg-green-700 border-none hover:bg-green-800 "
            >Mulai Diskusi</a
        >
        <div class="dropdown dropdown-bottom dropdown-end">
            <label tabindex="0" class="btn btn-ghost">
                <img
                    src="https://img.icons8.com/material-rounded/24/null/filter.png"
                />
                <span class="label-text ml-2">Filter</span>
            </label>
            <ul
                tabindex="0"
                class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52"
            >
                <li>
                    <label class="label cursor-pointer">
                        <span class="label-text font-medium"
                            >Hari ini</span
                        >
                        <input
                            type="radio"
                            name="radio-10"
                            class="radio checked:bg-green-700"
                            checked
                        />
                    </label>
                </li>
                <li>
                    <label class="label cursor-pointer">
                        <span class="label-text font-medium"
                            >Minggu ini</span
                        >
                        <input
                            type="radio"
                            name="radio-10"
                            class="radio checked:bg-green-700"
                        />
                    </label>
                </li>
                <li>
                    <label class="label cursor-pointer">
                        <span class="label-text font-medium"
                            >Bulan ini</span
                        >
                        <input
                            type="radio"
                            name="radio-10"
                            class="radio checked:bg-green-700"
                        />
                    </label>
                </li>
                <li>
                    <label class="label cursor-pointer">
                        <span class="label-text font-medium"
                            >Tahun ini</span
                        >
                        <input
                            type="radio"
                            name="radio-10"
                            class="radio checked:bg-green-700"
                        />
                    </label>
                </li>
            </ul>
        </div>
    </div>

    <div class="w-full bg-green-700 h-[1px] mt-4"></div>

    <!-- Questions -->
    @foreach ($questions as $question)
        <a
            @if (Auth::check())
                href="{{ route('question.show', $question->id) }}"
            @else
                href="{{ route('guest.question.show', $question->id) }}"
            @endif
            class="card w-full bg-orange-50 shadow-md hover:shadow-xl transition-shadow my-8"
        >
            <div class="card-body">
                <div class="flex justify-between gap-8">
                    <h2 class="card-title text-base">
                        {{ $question->title }}
                    </h2>

                    @if ($latestQuestion->id === $question->id)
                        <div class="badge border-none bg-green-700">
                            NEW
                        </div>
                    @endif
                </div>
                <div class="flex gap-2">
                    {{--<div class="badge badge-outline">Apis Dorsata</div>
                    <div class="badge badge-outline">Pemula</div>--}}
                </div>
                <div class="card-actions justify-end">
                    <div class="flex">
                        <img
                            src="https://img.icons8.com/material-outlined/24/null/visible--v1.png"
                            width="50%"
                        />
                        <div class="text-sm ml-2 min-w-full">{{ $question->watch }}</div>
                    </div>
                    <div class="flex ml-4">
                        <img
                            src="https://img.icons8.com/ios-glyphs/30/null/speech-bubble--v1.png"
                            width="40%"
                        />
                        <div class="text-sm ml-2 min-w-full">
                            {{ $questionCounts[$question->id] ?? 0 }}
                        </div>
                    </div>
                    <div class="flex ml-2">
                        <img
                            src="https://img.icons8.com/material-outlined/24/null/create.png"
                            width="20%"
                        />
                        <div class="text-sm ml-2 min-w-full">
                            {{ $question->created_date }}
                        </div>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    <div class="flex justify-center py-4">
        <div class="btn-group">
            <button class="btn btn-ghost">
                <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </button>
            <button class="btn btn-ghost">1</button>
            <button class="btn">2</button>
            <button class="btn btn-ghost">3</button>
            <button class="btn btn-ghost">4</button>
            <button class="btn btn-ghost">
                <svg
                    aria-hidden="true"
                    class="w-5 h-5"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </button>
        </div>
    </div>

    <div class="w-full bg-green-700 h-[1px] mt-4"></div>
@endsection
