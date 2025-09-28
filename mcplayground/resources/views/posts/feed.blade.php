@extends('layouts.auth')
@section('content')
    <div class="grid grid-cols-1">
        <div class="grid grid-cols-4 gap-4">
            @foreach ($posts as $post)
                <div class="bg-white relative overflow-hidden aspect-9/10 flex flex-col gap-2 shadow rounded-xl">
                    <div class="h-50 overflow-hidden w-full absolute left-0 top-0">
                        <img src="https://plus.unsplash.com/premium_photo-1673264933445-0112f3cdcb2f?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="">
                    </div>
                    <div class="h-50 w-full flex items-end relative bottom-0">
                        <div
                            class="absolute inset-0 backdrop-blur-2xl [mask-image:linear-gradient(to_bottom,transparent,black)]">
                        </div>
                        <div class="relative text-white/80 p-5">
                            <div class="text-sm font-medium text-white/50">{{ $post->updated_at->format('M d Y') }}</div>
                            <div class="text-2xl line-clamp-1 font-medium">{{ $post->title }}</div>
                        </div>
                    </div>
                    <div
                        class="h-14 w-28 flex absolute top-4 right-4 gap-1 bg-white/20 backdrop-blur-xl rounded-lg px-3 items-center justify-center">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M12 10.35C12.9113 10.35 13.65 11.0887 13.65 12C13.65 12.9113 12.9113 13.65 12 13.65C11.0887 13.65 10.35 12.9113 10.35 12C10.35 11.0887 11.0887 10.35 12 10.35Z"
                                    fill="#000"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.46447 3.46447C2 4.92893 2 7.28595 2 12C2 16.714 2 19.0711 3.46447 20.5355C4.92893 22 7.28595 22 12 22C16.714 22 19.0711 22 20.5355 20.5355C22 19.0711 22 16.714 22 12C22 7.28595 22 4.92893 20.5355 3.46447C19.0711 2 16.714 2 12 2C7.28595 2 4.92893 2 3.46447 3.46447ZM6.75 12C6.75 9.1005 9.1005 6.75 12 6.75C14.8995 6.75 17.25 9.1005 17.25 12C17.25 12.6327 17.1384 13.2376 16.9345 13.7973C16.8991 13.8944 16.8295 13.9989 16.7183 14.1015L16.6377 14.1758C16.3369 14.4533 15.8853 14.4888 15.5448 14.2618C15.2981 14.0974 15.15 13.8206 15.15 13.5241V12C15.15 10.2603 13.7397 8.85 12 8.85C10.2603 8.85 8.85 10.2603 8.85 12C8.85 13.7397 10.2603 15.15 12 15.15C12.7017 15.15 13.3499 14.9205 13.8735 14.5325C14.0557 14.9233 14.3431 15.2635 14.7127 15.5099C15.6294 16.121 16.8451 16.0252 17.6548 15.2783L17.7354 15.204C17.9855 14.9732 18.211 14.6756 18.3439 14.3108C18.6069 13.5889 18.75 12.8103 18.75 12C18.75 8.27208 15.7279 5.25 12 5.25C8.27208 5.25 5.25 8.27208 5.25 12C5.25 15.7279 8.27208 18.75 12 18.75C12.4142 18.75 12.75 18.4142 12.75 18C12.75 17.5858 12.4142 17.25 12 17.25C9.1005 17.25 6.75 14.8995 6.75 12Z"
                                    fill="#000"></path>
                            </g>
                        </svg>
                        <form class="flex-none flex flex-col" action="{{ route('post.delete', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-[26px] cursor-pointer">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M3 6.38597C3 5.90152 3.34538 5.50879 3.77143 5.50879L6.43567 5.50832C6.96502 5.49306 7.43202 5.11033 7.61214 4.54412C7.61688 4.52923 7.62232 4.51087 7.64185 4.44424L7.75665 4.05256C7.8269 3.81241 7.8881 3.60318 7.97375 3.41617C8.31209 2.67736 8.93808 2.16432 9.66147 2.03297C9.84457 1.99972 10.0385 1.99986 10.2611 2.00002H13.7391C13.9617 1.99986 14.1556 1.99972 14.3387 2.03297C15.0621 2.16432 15.6881 2.67736 16.0264 3.41617C16.1121 3.60318 16.1733 3.81241 16.2435 4.05256L16.3583 4.44424C16.3778 4.51087 16.3833 4.52923 16.388 4.54412C16.5682 5.11033 17.1278 5.49353 17.6571 5.50879H20.2286C20.6546 5.50879 21 5.90152 21 6.38597C21 6.87043 20.6546 7.26316 20.2286 7.26316H3.77143C3.34538 7.26316 3 6.87043 3 6.38597Z"
                                            fill="#000"></path>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M11.5956 22.0001H12.4044C15.1871 22.0001 16.5785 22.0001 17.4831 21.1142C18.3878 20.2283 18.4803 18.7751 18.6654 15.8686L18.9321 11.6807C19.0326 10.1037 19.0828 9.31524 18.6289 8.81558C18.1751 8.31592 17.4087 8.31592 15.876 8.31592H8.12404C6.59127 8.31592 5.82488 8.31592 5.37105 8.81558C4.91722 9.31524 4.96744 10.1037 5.06788 11.6807L5.33459 15.8686C5.5197 18.7751 5.61225 20.2283 6.51689 21.1142C7.42153 22.0001 8.81289 22.0001 11.5956 22.0001ZM10.2463 12.1886C10.2051 11.7548 9.83753 11.4382 9.42537 11.4816C9.01321 11.525 8.71251 11.9119 8.75372 12.3457L9.25372 17.6089C9.29494 18.0427 9.66247 18.3593 10.0746 18.3159C10.4868 18.2725 10.7875 17.8856 10.7463 17.4518L10.2463 12.1886ZM14.5746 11.4816C14.9868 11.525 15.2875 11.9119 15.2463 12.3457L14.7463 17.6089C14.7051 18.0427 14.3375 18.3593 13.9254 18.3159C13.5132 18.2725 13.2125 17.8856 13.2537 17.4518L13.7537 12.1886C13.7949 11.7548 14.1625 11.4382 14.5746 11.4816Z"
                                            fill="#000"></path>
                                    </g>
                                </svg>
                            </button>
                        </form>
                        <a href="{{ route('post.edit', $post) }}" class="w-[26px] cursor-pointer flex-none flex flex-col">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M5.66953 9.91436L8.73167 5.77133C10.711 3.09327 11.7007 1.75425 12.6241 2.03721C13.5474 2.32018 13.5474 3.96249 13.5474 7.24712V7.55682C13.5474 8.74151 13.5474 9.33386 13.926 9.70541L13.946 9.72466C14.3327 10.0884 14.9492 10.0884 16.1822 10.0884C18.4011 10.0884 19.5106 10.0884 19.8855 10.7613C19.8917 10.7724 19.8977 10.7837 19.9036 10.795C20.2576 11.4784 19.6152 12.3475 18.3304 14.0857L15.2683 18.2287C13.2889 20.9067 12.2992 22.2458 11.3758 21.9628C10.4525 21.6798 10.4525 20.0375 10.4525 16.7528L10.4526 16.4433C10.4526 15.2585 10.4526 14.6662 10.074 14.2946L10.054 14.2754C9.6673 13.9117 9.05079 13.9117 7.81775 13.9117C5.59888 13.9117 4.48945 13.9117 4.1145 13.2387C4.10829 13.2276 4.10225 13.2164 4.09639 13.205C3.74244 12.5217 4.3848 11.6526 5.66953 9.91436Z"
                                        fill="#000"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="flex flex-col gap-2 px-6">
                        <div class="mt-2 text-2xl text-neutral-800 line-clamp-2">
                        </div>
                        <div class="text-neutral-600 text-[15px] line-clamp-2">{{ $post->body }}</div>
                        <div class="flex gap-1 items-center mt-4">
                            <div class="w-10 h-10 rounded-full bg-neutral-200 flex items-center justify-center">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <circle cx="12" cy="9" r="3" stroke="#1C274C" stroke-width="1.5">
                                        </circle>
                                        <path
                                            d="M17.9691 20C17.81 17.1085 16.9247 15 11.9999 15C7.07521 15 6.18991 17.1085 6.03076 20"
                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                        <path
                                            d="M7 3.33782C8.47087 2.48697 10.1786 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 10.1786 2.48697 8.47087 3.33782 7"
                                            stroke="#1C274C" stroke-width="1.5" stroke-linecap="round"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="flex flex-col gap-0">
                                <div class="font-semibold text-sm">{{ $post->user->name }}</div>
                                <div class="text-neutral-500 text-sm">Joined 6 years ago</div>
                            </div>
                            {{-- <div class="text-sm text-neutral-500">{{ $post->updated_at->format('M d Y') }}</div> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-6">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
