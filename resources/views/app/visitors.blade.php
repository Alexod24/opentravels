@extends('layout.sidebar')
@section('title', 'Visitantes')
@section('content')
    <div class="w-full max-w-7xl mx-auto">

        <ul role="list" class="grid grid-cols-1 gap-x-6 gap-y-8 lg:grid-cols-3 xl:gap-x-8 mb-8">
            <li class="overflow-hidden rounded-xl border border-gray-200">
                <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
                    <img src="https://tailwindui.com/img/logos/48x48/tuple.svg" alt="Tuple"
                        class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
                    <div class="text-sm font-medium leading-6 text-gray-900">Tuple</div>
                    <div class="relative ml-auto">
                        <button type="button" class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500"
                            id="options-menu-0-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open options</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
                            </svg>
                        </button>

                        <!--
                  Dropdown menu, show/hide based on menu state.

                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                        <div class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="options-menu-0-button"
                            tabindex="-1">
                            <!-- Active: "bg-gray-50", Not Active: "" -->
                            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem"
                                tabindex="-1" id="options-menu-0-item-0">View<span class="sr-only">, Tuple</span></a>
                            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem"
                                tabindex="-1" id="options-menu-0-item-1">Edit<span class="sr-only">, Tuple</span></a>
                        </div>
                    </div>
                </div>
                <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
                    <div class="flex justify-between gap-x-4 py-3">
                        <dt class="text-gray-500">Last invoice</dt>
                        <dd class="text-gray-700"><time datetime="2022-12-13">December 13, 2022</time></dd>
                    </div>
                    <div class="flex justify-between gap-x-4 py-3">
                        <dt class="text-gray-500">Amount</dt>
                        <dd class="flex items-start gap-x-2">
                            <div class="font-medium text-gray-900">$2,000.00</div>
                            <div
                                class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-red-700 bg-red-50 ring-red-600/10">
                                Overdue</div>
                        </dd>
                    </div>
                </dl>
            </li>
            <li class="overflow-hidden rounded-xl border border-gray-200">
                <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
                    <img src="https://tailwindui.com/img/logos/48x48/savvycal.svg" alt="SavvyCal"
                        class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
                    <div class="text-sm font-medium leading-6 text-gray-900">SavvyCal</div>
                    <div class="relative ml-auto">
                        <button type="button" class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500"
                            id="options-menu-1-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open options</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
                            </svg>
                        </button>

                        <!--
                  Dropdown menu, show/hide based on menu state.

                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                        <div class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="options-menu-1-button"
                            tabindex="-1">
                            <!-- Active: "bg-gray-50", Not Active: "" -->
                            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem"
                                tabindex="-1" id="options-menu-1-item-0">View<span class="sr-only">, SavvyCal</span></a>
                            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem"
                                tabindex="-1" id="options-menu-1-item-1">Edit<span class="sr-only">, SavvyCal</span></a>
                        </div>
                    </div>
                </div>
                <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
                    <div class="flex justify-between gap-x-4 py-3">
                        <dt class="text-gray-500">Last invoice</dt>
                        <dd class="text-gray-700"><time datetime="2023-01-22">January 22, 2023</time></dd>
                    </div>
                    <div class="flex justify-between gap-x-4 py-3">
                        <dt class="text-gray-500">Amount</dt>
                        <dd class="flex items-start gap-x-2">
                            <div class="font-medium text-gray-900">$14,000.00</div>
                            <div
                                class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">
                                Paid</div>
                        </dd>
                    </div>
                </dl>
            </li>
            <li class="overflow-hidden rounded-xl border border-gray-200">
                <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 p-6">
                    <img src="https://tailwindui.com/img/logos/48x48/reform.svg" alt="Reform"
                        class="h-12 w-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
                    <div class="text-sm font-medium leading-6 text-gray-900">Reform</div>
                    <div class="relative ml-auto">
                        <button type="button" class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500"
                            id="options-menu-2-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open options</span>
                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path
                                    d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
                            </svg>
                        </button>

                        <!--
                  Dropdown menu, show/hide based on menu state.

                  Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                  Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                        <div class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="options-menu-2-button"
                            tabindex="-1">
                            <!-- Active: "bg-gray-50", Not Active: "" -->
                            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem"
                                tabindex="-1" id="options-menu-2-item-0">View<span class="sr-only">, Reform</span></a>
                            <a href="#" class="block px-3 py-1 text-sm leading-6 text-gray-900" role="menuitem"
                                tabindex="-1" id="options-menu-2-item-1">Edit<span class="sr-only">, Reform</span></a>
                        </div>
                    </div>
                </div>
                <dl class="-my-3 divide-y divide-gray-100 px-6 py-4 text-sm leading-6">
                    <div class="flex justify-between gap-x-4 py-3">
                        <dt class="text-gray-500">Last invoice</dt>
                        <dd class="text-gray-700"><time datetime="2023-01-23">January 23, 2023</time></dd>
                    </div>
                    <div class="flex justify-between gap-x-4 py-3">
                        <dt class="text-gray-500">Amount</dt>
                        <dd class="flex items-start gap-x-2">
                            <div class="font-medium text-gray-900">$7,600.00</div>
                            <div
                                class="rounded-md py-1 px-2 text-xs font-medium ring-1 ring-inset text-green-700 bg-green-50 ring-green-600/20">
                                Paid</div>
                        </dd>
                    </div>
                </dl>
            </li>
        </ul>

        <ul role="list" class="divide-y divide-gray-100">
            <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                            <a href="#">
                                <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                Leslie Alexander
                            </a>
                        </p>
                        <p class="mt-1 flex text-xs leading-5 text-gray-500">
                            <a href="mailto:leslie.alexander@example.com"
                                class="relative truncate hover:underline">leslie.alexander@example.com</a>
                        </p>
                    </div>
                </div>
                <div class="flex shrink-0 items-center gap-x-4">
                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>
                        <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h
                                ago</time></p>
                    </div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </li>
            <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                            <a href="#">
                                <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                Michael Foster
                            </a>
                        </p>
                        <p class="mt-1 flex text-xs leading-5 text-gray-500">
                            <a href="mailto:michael.foster@example.com"
                                class="relative truncate hover:underline">michael.foster@example.com</a>
                        </p>
                    </div>
                </div>
                <div class="flex shrink-0 items-center gap-x-4">
                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm leading-6 text-gray-900">Co-Founder / CTO</p>
                        <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h
                                ago</time></p>
                    </div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </li>
            <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                            <a href="#">
                                <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                Dries Vincent
                            </a>
                        </p>
                        <p class="mt-1 flex text-xs leading-5 text-gray-500">
                            <a href="mailto:dries.vincent@example.com"
                                class="relative truncate hover:underline">dries.vincent@example.com</a>
                        </p>
                    </div>
                </div>
                <div class="flex shrink-0 items-center gap-x-4">
                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm leading-6 text-gray-900">Business Relations</p>
                        <div class="mt-1 flex items-center gap-x-1.5">
                            <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                                <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                            </div>
                            <p class="text-xs leading-5 text-gray-500">Online</p>
                        </div>
                    </div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </li>
            <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                            <a href="#">
                                <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                Lindsay Walton
                            </a>
                        </p>
                        <p class="mt-1 flex text-xs leading-5 text-gray-500">
                            <a href="mailto:lindsay.walton@example.com"
                                class="relative truncate hover:underline">lindsay.walton@example.com</a>
                        </p>
                    </div>
                </div>
                <div class="flex shrink-0 items-center gap-x-4">
                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm leading-6 text-gray-900">Front-end Developer</p>
                        <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h
                                ago</time></p>
                    </div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </li>
            <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                            <a href="#">
                                <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                Courtney Henry
                            </a>
                        </p>
                        <p class="mt-1 flex text-xs leading-5 text-gray-500">
                            <a href="mailto:courtney.henry@example.com"
                                class="relative truncate hover:underline">courtney.henry@example.com</a>
                        </p>
                    </div>
                </div>
                <div class="flex shrink-0 items-center gap-x-4">
                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm leading-6 text-gray-900">Designer</p>
                        <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h
                                ago</time></p>
                    </div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </li>
            <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm font-semibold leading-6 text-gray-900">
                            <a href="#">
                                <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                Tom Cook
                            </a>
                        </p>
                        <p class="mt-1 flex text-xs leading-5 text-gray-500">
                            <a href="mailto:tom.cook@example.com"
                                class="relative truncate hover:underline">tom.cook@example.com</a>
                        </p>
                    </div>
                </div>
                <div class="flex shrink-0 items-center gap-x-4">
                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm leading-6 text-gray-900">Director of Product</p>
                        <div class="mt-1 flex items-center gap-x-1.5">
                            <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                                <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                            </div>
                            <p class="text-xs leading-5 text-gray-500">Online</p>
                        </div>
                    </div>
                    <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                        aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </li>
        </ul>


        <h2 class="mt-8 text-2xl font-bold tracking-tight text-gray-900">Tus paquetes más visitados</h2>

        <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>
            <div class="group relative">
                <div
                    class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                        alt="Front of men&#039;s Basic Tee in black."
                        class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Basic Tee
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">$35</p>
                </div>
            </div>

        </div>


    </div>
@endsection
