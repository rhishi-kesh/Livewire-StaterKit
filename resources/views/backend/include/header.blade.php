<header class="z-40">
    <div class="shadow-sm">
        <div class="relative flex w-full items-center bg-white px-5 py-2.5 dark:bg-slate-900">
            <div class="horizontal-logo flex items-center justify-between lg:hidden">
                <a href="{{ route('dashboard') }}" class="main-logo flex shrink-0 items-center">
                    <img class="inline w-10 -ml-1 rounded-full" src="{{ asset('storage/' . $systemInformation->fav) }}" alt="image" />
                </a>
                <a href="javascript:;" class="collapse-icon flex flex-none rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary ml-2 dark:bg-dark/40 dark:text-[#d0d2d6] dark:hover:bg-dark/60 dark:hover:text-primary lg:hidden" @click="$store.app.toggleSidebar()">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 7L4 7" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path opacity="0.5" d="M20 12L4 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M20 17L4 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                    </svg>
                </a>
            </div>
            <div class="flex items-center space-x-1.5 ml-auto dark:text-[#d0d2d6] sm:flex-1 sm:ml-0 lg:space-x-2" >
                <div class="sm:mr-auto" x-data="{ search: false }" @click.outside="search = false">
                    <form
                        class="absolute inset-x-0 top-1/2 z-10 mx-4 hidden -translate-y-1/2 sm:relative sm:top-0 sm:mx-0 sm:block sm:translate-y-0"
                        :class="{'!block' : search}"
                    >
                        <div class="relative">
                            <input
                                type="text"
                                class="peer w-full h-full bg-gray-100 dark:bg-slate-800 ps-10 py-2 rounded border dark:border-gray-700 focus:outline-none dark:focus:border-blue-500 focus:border"
                                placeholder="Search..."
                            />
                            <button
                                type="button"
                                class="absolute inset-0 h-9 w-9 appearance-none peer-focus:text-blue-500 right-auto "
                            >
                                <svg class="mx-auto" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5" />
                                    <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </button>
                            <button
                                type="button"
                                class="absolute top-1/2 block -translate-y-1/2 hover:opacity-80 right-2 sm:hidden"
                                @click="search = false"
                            >
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle opacity="0.5" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5" />
                                    <path
                                        d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                </svg>
                            </button>
                        </div>
                    </form>
                    <button
                        type="button"
                        class="search_btn rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 dark:bg-dark/40 dark:hover:bg-dark/60 sm:hidden"
                        @click="search = ! search"
                    >
                        <svg
                            class="mx-auto h-4.5 w-4.5 dark:text-[#d0d2d6]"
                            width="20"
                            height="20"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <circle cx="11.5" cy="11.5" r="9.5" stroke="currentColor" stroke-width="1.5" opacity="0.5" />
                            <path d="M18.5 18.5L22 22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
                <div>
                    <a href="{{ route('register') }}" class="uppercase btn md:bg-blue-500 bg-transparent border-none dark:text-[#b0b2b6] text-[#5a5b5e] md:text-white dark:md:text-white cursor-pointer px-3 pr-1 md:pr-3">
                        <svg  xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round" class="icon icon-tabler icon-tabler-world inline mb-0 md:mb-1" width="20" height="20"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M16 19h6" /><path d="M19 16v6" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4" /></svg>
                        <span class="hidden md:inline-block ms-1">
                            Add User
                        </span>
                    </a>
                </div>
                <div>
                    <a
                        href="javascript:;"
                        x-cloak
                        x-show="$store.app.theme === 'light'"
                        href="javascript:;"
                        class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                        @click="$store.app.toggleTheme('dark')"
                    >
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="12" r="5" stroke="currentColor" stroke-width="1.5" />
                            <path d="M12 2V4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M12 20V22" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M4 12L2 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path d="M22 12L20 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path
                                opacity="0.5"
                                d="M19.7778 4.22266L17.5558 6.25424"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                            />
                            <path
                                opacity="0.5"
                                d="M4.22217 4.22266L6.44418 6.25424"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                            />
                            <path
                                opacity="0.5"
                                d="M6.44434 17.5557L4.22211 19.7779"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                            />
                            <path
                                opacity="0.5"
                                d="M19.7778 19.7773L17.5558 17.5551"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                            />
                        </svg>
                    </a>
                    <a
                        href="javascript:;"
                        x-cloak
                        x-show="$store.app.theme === 'dark'"
                        href="javascript:;"
                        class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                        @click="$store.app.toggleTheme('system')"
                    >
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21.0672 11.8568L20.4253 11.469L21.0672 11.8568ZM12.1432 2.93276L11.7553 2.29085V2.29085L12.1432 2.93276ZM21.25 12C21.25 17.1086 17.1086 21.25 12 21.25V22.75C17.9371 22.75 22.75 17.9371 22.75 12H21.25ZM12 21.25C6.89137 21.25 2.75 17.1086 2.75 12H1.25C1.25 17.9371 6.06294 22.75 12 22.75V21.25ZM2.75 12C2.75 6.89137 6.89137 2.75 12 2.75V1.25C6.06294 1.25 1.25 6.06294 1.25 12H2.75ZM15.5 14.25C12.3244 14.25 9.75 11.6756 9.75 8.5H8.25C8.25 12.5041 11.4959 15.75 15.5 15.75V14.25ZM20.4253 11.469C19.4172 13.1373 17.5882 14.25 15.5 14.25V15.75C18.1349 15.75 20.4407 14.3439 21.7092 12.2447L20.4253 11.469ZM9.75 8.5C9.75 6.41182 10.8627 4.5828 12.531 3.57467L11.7553 2.29085C9.65609 3.5593 8.25 5.86509 8.25 8.5H9.75ZM12 2.75C11.9115 2.75 11.8077 2.71008 11.7324 2.63168C11.6686 2.56527 11.6538 2.50244 11.6503 2.47703C11.6461 2.44587 11.6482 2.35557 11.7553 2.29085L12.531 3.57467C13.0342 3.27065 13.196 2.71398 13.1368 2.27627C13.0754 1.82126 12.7166 1.25 12 1.25V2.75ZM21.7092 12.2447C21.6444 12.3518 21.5541 12.3539 21.523 12.3497C21.4976 12.3462 21.4347 12.3314 21.3683 12.2676C21.2899 12.1923 21.25 12.0885 21.25 12H22.75C22.75 11.2834 22.1787 10.9246 21.7237 10.8632C21.286 10.804 20.7293 10.9658 20.4253 11.469L21.7092 12.2447Z"
                                fill="currentColor"
                            />
                        </svg>
                    </a>
                    <a
                        href="javascript:;"
                        x-cloak
                        x-show="$store.app.theme === 'system'"
                        href="javascript:;"
                        class="flex items-center rounded-full bg-white-light/40 p-2 hover:bg-white-light/90 hover:text-primary dark:bg-dark/40 dark:hover:bg-dark/60"
                        @click="$store.app.toggleTheme('light')"
                    >
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3 9C3 6.17157 3 4.75736 3.87868 3.87868C4.75736 3 6.17157 3 9 3H15C17.8284 3 19.2426 3 20.1213 3.87868C21 4.75736 21 6.17157 21 9V14C21 15.8856 21 16.8284 20.4142 17.4142C19.8284 18 18.8856 18 17 18H7C5.11438 18 4.17157 18 3.58579 17.4142C3 16.8284 3 15.8856 3 14V9Z"
                                stroke="currentColor"
                                stroke-width="1.5"
                            />
                            <path opacity="0.5" d="M22 21H2" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                            <path opacity="0.5" d="M15 15H9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </a>
                </div>
                <div class="dropdown flex-shrink-0" x-data="dropdown" @click.outside="open = false">
                    <a href="javascript:;" class="group relative" @click="toggle()">
                        <span>
                            @if(empty(auth()->user()->profile))
                                <img class="h-9 w-9 rounded-full object-cover saturate-50 group-hover:saturate-100 bg-white" src="{{ asset('profile.jpeg') }}" alt="image">
                            @else
                                <img class="h-9 w-9 rounded-full object-cover saturate-50 group-hover:saturate-100 bg-white" src="{{ asset('storage/' . auth()->user()->profile) }}" alt="image">
                            @endif
                        </span>
                    </a>
                    <ul
                        x-cloak
                        x-show="open"
                        x-transition
                        x-transition.duration.300ms
                        class="top-11 w-[230px] !py-0 font-semibold text-dark right-0 dark:text-white-dark dark:text-white-light/90"
                    >
                        <li>
                            <div class="flex items-center px-4 py-4">
                                <div class="flex-none">
                                    @if(empty(auth()->user()->profile))
                                        <img class="h-10 w-10 rounded-md object-cover bg-white" src="{{ asset('profile.jpeg') }}" alt="image">
                                    @else
                                        <img class="h-10 w-10 rounded-md object-cover bg-white" src="{{ asset('storage/' . auth()->user()->profile) }}" alt="image">
                                    @endif
                                </div>
                                <div class="truncate pl-4">
                                    <h4 class="text-base">
                                        {{ auth()->user()->name }}
                                    </h4>
                                    <a class="text-black/60 hover:text-primary dark:text-white/60 dark:hover:text-white" href="javascript:;" >
                                        {{ auth()->user()->email }}
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="{{ route('profile') }}" class="dark:hover:text-white" @click="toggle">
                                <svg
                                    class="h-4.5 w-4.5 shrink-0 mr-2"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                    <path
                                        opacity="0.5"
                                        d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                    />
                                </svg>
                                Profile</a
                            >
                        </li>
                        <li class="border-t border-white-light dark:border-white-light/10">
                            <a href="{{ route('logout') }}" class="!py-3 text-danger" @click="toggle">
                                <svg
                                    class="h-4.5 w-4.5 shrink-0 rotate-90 mr-2"
                                    width="18"
                                    height="18"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        opacity="0.5"
                                        d="M17 9.00195C19.175 9.01406 20.3529 9.11051 21.1213 9.8789C22 10.7576 22 12.1718 22 15.0002V16.0002C22 18.8286 22 20.2429 21.1213 21.1215C20.2426 22.0002 18.8284 22.0002 16 22.0002H8C5.17157 22.0002 3.75736 22.0002 2.87868 21.1215C2 20.2429 2 18.8286 2 16.0002L2 15.0002C2 12.1718 2 10.7576 2.87868 9.87889C3.64706 9.11051 4.82497 9.01406 7 9.00195"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                    />
                                    <path
                                        d="M12 15L12 2M12 2L15 5.5M12 2L9 5.5"
                                        stroke="currentColor"
                                        stroke-width="1.5"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                    />
                                </svg>
                                Sign Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
