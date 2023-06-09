<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0">
    <div class="py-4 text-gray-500">
        @role('admin')
            <a class="ml-6 text-lg font-bold text-gray-800" href="{{ route('admin.dashboard') }}">
        @elserole('user')
            <a class="ml-6 text-lg font-bold text-gray-800" href="{{ route('dashboard') }}">
        @endrole
            Beeney
        </a>

        <ul class="mt-6">
            @role('user')
                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </x-slot>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>
                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('user.question.index') }}" :active="request()->routeIs('user.question.index')">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 0 32 32" xml:space="preserve">
                                <path style="fill:#030104;" d="M17.6,30c0,1.102-0.895,2-2,2s-2-0.898-2-2c0-1.109,0.895-2,2-2S17.6,28.891,17.6,30z"/>
                                <path style="fill:#030104;" d="M15.676,25.977c-1.336,0-2.59-0.523-3.535-1.469c-0.945-1.105-1.465-2.359-1.465-3.695
                                    s0.52-2.59,1.465-3.371l6.688-6.688C19.584,9.996,20,8.992,20,7.926c0-1.07-0.416-2.074-1.172-2.828
                                    c-1.559-1.559-4.096-1.562-5.654,0C12.416,5.852,12,6.855,12,7.926H8c0-2.137,0.834-4.148,2.348-5.66
                                    c3.02-3.023,8.285-3.02,11.309,0.004C23.168,3.777,24,5.785,24,7.926c0,2.137-0.832,4.145-2.344,5.656l-6.688,6.523
                                    c-0.389,0.391-0.389,1.023,0,1.414c0.391,0.391,1.023,0.391,1.414,0c0.254-0.258,0.293-0.555,0.293-0.711h4
                                    c0,1.336-0.52,2.594-1.465,3.699C18.266,25.453,17.012,25.977,15.676,25.977L15.676,25.977z"/>
                            </svg>
                        </x-slot>
                        {{ __('Questions') }}
                    </x-nav-link>
                </li>
                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('landing-page') }}" :active="request()->routeIs('landing-page')">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                            </svg>
                        </x-slot>
                        {{ __('Landing Page') }}
                    </x-nav-link>
                </li>
                <li class="relative px-6 py-3">-- Fitur Subscription --</li>
                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('user.predict.index') }}" :active="request()->routeIs('user.predict.index')">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 485 485" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M435,315V150v-7.5V45H290v90h-50v110h-20V140H55v105H0v195h485V315H435z M70,155h135v20H70V155z M70,190h135v55H70V190z
                                                M150,260v70h-45v-70H150z M240,425H15V260h75v85h75v-85h75V425z M305,60h115v75H305V60z M355,150v75h-35v-75H355z M320,425h-65
                                                V150h50v90h65v-90h50v165H320V425z M470,425H335v-95h135V425z"/>
                                            <rect x="167.5" y="210" width="20" height="15"/>
                                            <rect x="137.5" y="210" width="20" height="15"/>
                                            <rect x="407.5" y="355" width="40" height="15"/>
                                            <rect x="377.5" y="385" width="70" height="15"/>
                                            <rect x="377.5" y="100" width="20" height="15"/>
                                            <rect x="347.5" y="100" width="20" height="15"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </x-slot>
                        {{ __('Prediction') }}
                    </x-nav-link>
                </li>
                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('user.article.index') }}" :active="request()->routeIs('user.article.index')">
                        <x-slot name="icon">
                            <img class="w-6 h-6" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAACDklEQVR4nO2bO0sDQRDHf9hrYRXtRIymESzU2tpCP4BWavwAGnygcJXPb+DHUFutREFsrGwSQUFB8AVRfIGRhQ2sksTkcru5u8wPFg5uuJn53+zMsSEgCEKNtAErwBnwAhQcLuXvAtgHZoEEjhkGbh0nXWm9AdtAu4vk+4DnECRdal0DA7YFODQcPgBTQAdu8AzfO0AaOPkjwiswYiuAlOHoCxjELaYA6rrIOHBn3LsHum0EkDac7OKecgIouoAr4/6RjQBWDAdrNhzU6b8feDdsxly+ARfMGP73ytisGzYHcRMg9acHDZWwSeh7RZv2OAmAfqvFGB6BaaCT3xwbNqPETIBe4KmGbwO1bWIlALr0b6oUYJEYCqBoBZaAUyBfIvFv4FxXTCwFaAieCIBUQEG2AKHvAUngEsgBPc3YA5aNONWkaDoBPFtxeiIAUgEFn6VVbEy1nvP5aWSh3ALzdRx2zjmM02oFZH0kn41LBUT9mZEKVgRAKgDZAkgPQJogMgWQMUiAeBGZ2TIGkTGIjEFkDBKJMThpPHOiGXtAi058Ql+HWoBlW8fNAWMtzqQ+ofFzSuOSqMQpCELMSAIZYMHRymifoSFXx48ffpfq9KEh1+wC9ACrwIajpXzJnBcEITRsAZ8BdHb1jM0qfFSyawj5AMdbvkof5ewawgbwEUDyH/qfH//5qGQnCAJV8wPreHVo7fJEngAAAABJRU5ErkJggg==">
                        </x-slot>
                        {{ __('Articles') }}
                    </x-nav-link>
                </li>

            @endrole

            @role('admin')
                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </x-slot>
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </li>

                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('admin.users.index') }}" :active="request()->routeIs('admin.users.index')">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </x-slot>
                        {{ __('Users') }}
                    </x-nav-link>
                </li>

                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('admin.question.index') }}" :active="request()->routeIs('admin.question.index')">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"viewBox="0 0 32 32" xml:space="preserve">
                                <path style="fill:#030104;" d="M17.6,30c0,1.102-0.895,2-2,2s-2-0.898-2-2c0-1.109,0.895-2,2-2S17.6,28.891,17.6,30z"/>
                                <path style="fill:#030104;" d="M15.676,25.977c-1.336,0-2.59-0.523-3.535-1.469c-0.945-1.105-1.465-2.359-1.465-3.695
                                    s0.52-2.59,1.465-3.371l6.688-6.688C19.584,9.996,20,8.992,20,7.926c0-1.07-0.416-2.074-1.172-2.828
                                    c-1.559-1.559-4.096-1.562-5.654,0C12.416,5.852,12,6.855,12,7.926H8c0-2.137,0.834-4.148,2.348-5.66
                                    c3.02-3.023,8.285-3.02,11.309,0.004C23.168,3.777,24,5.785,24,7.926c0,2.137-0.832,4.145-2.344,5.656l-6.688,6.523
                                    c-0.389,0.391-0.389,1.023,0,1.414c0.391,0.391,1.023,0.391,1.414,0c0.254-0.258,0.293-0.555,0.293-0.711h4
                                    c0,1.336-0.52,2.594-1.465,3.699C18.266,25.453,17.012,25.977,15.676,25.977L15.676,25.977z"/>
                            </svg>
                        </x-slot>
                        {{ __('Questions') }}
                    </x-nav-link>
                </li>

                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('admin.article.index') }}" :active="request()->routeIs('admin.article.index')">
                        <x-slot name="icon">
                            <img class="w-6 h-6" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAACDklEQVR4nO2bO0sDQRDHf9hrYRXtRIymESzU2tpCP4BWavwAGnygcJXPb+DHUFutREFsrGwSQUFB8AVRfIGRhQ2sksTkcru5u8wPFg5uuJn53+zMsSEgCEKNtAErwBnwAhQcLuXvAtgHZoEEjhkGbh0nXWm9AdtAu4vk+4DnECRdal0DA7YFODQcPgBTQAdu8AzfO0AaOPkjwiswYiuAlOHoCxjELaYA6rrIOHBn3LsHum0EkDac7OKecgIouoAr4/6RjQBWDAdrNhzU6b8feDdsxly+ARfMGP73ytisGzYHcRMg9acHDZWwSeh7RZv2OAmAfqvFGB6BaaCT3xwbNqPETIBe4KmGbwO1bWIlALr0b6oUYJEYCqBoBZaAUyBfIvFv4FxXTCwFaAieCIBUQEG2AKHvAUngEsgBPc3YA5aNONWkaDoBPFtxeiIAUgEFn6VVbEy1nvP5aWSh3ALzdRx2zjmM02oFZH0kn41LBUT9mZEKVgRAKgDZAkgPQJogMgWQMUiAeBGZ2TIGkTGIjEFkDBKJMThpPHOiGXtAi058Ql+HWoBlW8fNAWMtzqQ+ofFzSuOSqMQpCELMSAIZYMHRymifoSFXx48ffpfq9KEh1+wC9ACrwIajpXzJnBcEITRsAZ8BdHb1jM0qfFSyawj5AMdbvkof5ewawgbwEUDyH/qfH//5qGQnCAJV8wPreHVo7fJEngAAAABJRU5ErkJggg==">
                        </x-slot>
                        {{ __('Articles') }}
                    </x-nav-link>
                </li>

                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('admin.predict.index') }}" :active="request()->routeIs('admin.predict.index')">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" fill="#000000" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 485 485" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M435,315V150v-7.5V45H290v90h-50v110h-20V140H55v105H0v195h485V315H435z M70,155h135v20H70V155z M70,190h135v55H70V190z
                                                M150,260v70h-45v-70H150z M240,425H15V260h75v85h75v-85h75V425z M305,60h115v75H305V60z M355,150v75h-35v-75H355z M320,425h-65
                                                V150h50v90h65v-90h50v165H320V425z M470,425H335v-95h135V425z"/>
                                            <rect x="167.5" y="210" width="20" height="15"/>
                                            <rect x="137.5" y="210" width="20" height="15"/>
                                            <rect x="407.5" y="355" width="40" height="15"/>
                                            <rect x="377.5" y="385" width="70" height="15"/>
                                            <rect x="377.5" y="100" width="20" height="15"/>
                                            <rect x="347.5" y="100" width="20" height="15"/>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </x-slot>
                        {{ __('Predictions') }}
                    </x-nav-link>
                </li>

                <li class="relative px-6 py-3">
                    <x-nav-link href="{{ route('landing-page') }}" :active="request()->routeIs('landing-page')">
                        <x-slot name="icon">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                            </svg>
                        </x-slot>
                        {{ __('Landing Page') }}
                    </x-nav-link>
                </li>
            @endrole
        </ul>
    </div>
</aside>
