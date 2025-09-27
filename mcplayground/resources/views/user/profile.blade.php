@extends('layouts.mainlayout')
@section('content')
    <x-layout>
        <div class="bg-gray-900 py-24 sm:py-32">
            <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-center text-base/7 font-semibold text-indigo-400">Deploy faster</h2>
                <p
                    class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-white sm:text-5xl">
                    Everything you need to deploy your app</p>
                <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                    <div class="relative lg:row-span-2">
                        <div class="absolute inset-px rounded-lg bg-gray-800 lg:rounded-l-4xl"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                            <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                                <p class="mt-2 text-lg font-medium tracking-tight text-white max-lg:text-center">Mobile
                                    friendly</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-400 max-lg:text-center">Anim aute id magna
                                    aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                            </div>
                            <div class="@container relative min-h-120 w-full grow max-lg:mx-auto max-lg:max-w-sm">
                                <div
                                    class="absolute inset-x-10 top-10 bottom-0 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 outline outline-white/20">
                                    <img src="https://tailwindcss.com/plus-assets/img/component-images/bento-03-mobile-friendly.png"
                                        alt="" class="size-full object-cover object-top" />
                                </div>
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-white/15 lg:rounded-l-4xl">
                        </div>
                    </div>
                    <div class="relative max-lg:row-start-1">
                        <div class="absolute inset-px rounded-lg bg-gray-800 max-lg:rounded-t-4xl"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                            <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                <p class="mt-2 text-lg font-medium tracking-tight text-white max-lg:text-center">Performance
                                </p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-400 max-lg:text-center">Lorem ipsum, dolor sit
                                    amet consectetur adipisicing elit maiores impedit.</p>
                            </div>
                            <div
                                class="flex flex-1 items-center justify-center px-8 max-lg:pt-10 max-lg:pb-12 sm:px-10 lg:pb-2">
                                <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-bento-03-performance.png"
                                    alt="" class="w-full max-lg:max-w-xs" />
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-white/15 max-lg:rounded-t-4xl">
                        </div>
                    </div>
                    <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                        <div class="absolute inset-px rounded-lg bg-gray-800"></div>
                        <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                            <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                <p class="mt-2 text-lg font-medium tracking-tight text-white max-lg:text-center">Security
                                </p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-400 max-lg:text-center">Morbi viverra dui mi
                                    arcu sed. Tellus semper adipiscing suspendisse semper morbi.</p>
                            </div>
                            <div class="@container flex flex-1 items-center max-lg:py-6 lg:pb-2">
                                <img src="https://tailwindcss.com/plus-assets/img/component-images/dark-bento-03-security.png"
                                    alt="" class="h-[min(152px,40cqw)] object-cover" />
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-white/15">
                        </div>
                    </div>
                    <div class="relative lg:row-span-2">
                        <div class="absolute inset-px rounded-lg bg-gray-800 max-lg:rounded-b-4xl lg:rounded-r-4xl"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                            <div class="px-8 pt-8 pb-3 sm:px-10 sm:pt-10 sm:pb-0">
                                <p class="mt-2 text-lg font-medium tracking-tight text-white max-lg:text-center">Powerful
                                    APIs</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-400 max-lg:text-center">Sit quis amet rutrum
                                    tellus ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                            </div>
                            <div class="relative min-h-120 w-full grow">
                                <div
                                    class="absolute top-10 right-0 bottom-0 left-10 overflow-hidden rounded-tl-xl bg-gray-900/60 outline outline-white/10">
                                    <div class="flex bg-gray-900 outline outline-white/5">
                                        <div class="-mb-px flex text-sm/6 font-medium text-gray-400">
                                            <div
                                                class="border-r border-b border-r-white/10 border-b-white/20 bg-white/5 px-4 py-2 text-white">
                                                NotificationSetting.jsx</div>
                                            <div class="border-r border-gray-600/10 px-4 py-2">App.jsx</div>
                                        </div>
                                    </div>
                                    <div class="px-6 pt-6 pb-14">
                                        <!-- Your code example -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-white/15 max-lg:rounded-b-4xl lg:rounded-r-4xl">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center items-center absolute w-200">
            {{-- <div class="w-100 h-100 bg-yellow-400 rounded-full fixed"></div> --}}
            <x-qoute :data="$data">
                <div class="text-lg">
                    <svg style="width: 100px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M21 15.5018C18.651 14.5223 17 12.2039 17 9.5C17 6.79774 18.6534 4.48062 21 3.5C20.2304 3.17906 19.3859 3 18.5 3C15.7977 3 13.4806 4.64899 12.5 6.9956M6.9 21C4.74609 21 3 19.2889 3 17.1781C3 15.4286 4.3 13.8125 6.25 13.5C6.86168 12.0617 8.30934 11 9.9978 11C12.1607 11 13.9285 12.6589 14.05 14.75C15.1978 15.2463 16 16.4645 16 17.7835C16 19.5599 14.5449 21 12.75 21L6.9 21Z"
                                stroke="#fff" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                    </svg>
                </div>
            </x-qoute>
        </div>
    </x-layout>
@endsection
