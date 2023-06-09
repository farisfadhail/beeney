@extends('layouts.frontend')

@section('content')
    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900">
        <div class="flex justify-between mx-auto max-w-screen-xl ">
            <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <div class="flex justify-center">
                    <img src="{{ asset($thumbnail) }}" class=" w-4/5 mb-8" alt="">
                </div>
                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16" src="../../images/healthicons_ui-user-profile.png" alt="Jese Leos">
                            <div>
                                <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $user[0]->name }}</a>
                                <p class="text-base font-light text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">{{ $article->created_at->format('F j, Y') }}</time></p>
                                <div class="flex mt-1 align-middle">
                                    <img
                                        src="https://img.icons8.com/material-outlined/24/525354/visible--v1.png"
                                        width="50%"
                                    />
                                    <div class="text-sm ml-2 text-gray-500 min-w-full">{{ $article->watch }}</div>
                                </div>
                            </div>
                        </div>
                    </address>
                    <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $article->title }}</h1>
                </header>
                <div class="lead">{!! $article->article_body !!}</div>
                {{--<figure>
                        <img src="https://flowbite.s3.amazonaws.com/typography-plugin/typography-image-1.png" alt="">
                        <figcaption>Digital art by Anonymous</figcaption>
                </figure>--}}
                </section>
            </article>
        </div>
    </main>
@endsection
