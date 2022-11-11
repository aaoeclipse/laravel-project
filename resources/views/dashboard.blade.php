<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="padding: 2rem;">
                    <h2 class="font-bold text-3xl pb-4 text-center">{{ Auth::user()->username }}'s Blogs</h2>
                    @if (count($user->blogs) === 0)
                        <div class="flex flex-col justify-center items-center mt-10 gap-4">
                            <div>
                                Looks like you don't have any blogs
                            </div>

                        </div>
                    @endif
                    @foreach ($user->blogs as $blog)
                        <div class="p-4 border-solid border flex justify-between items-center" style="padding: 1rem;">
                            <div>
                                <h3 class="font-bold text-3xl cursor-pointer">{{ $blog['title'] }}</h3>
                                <span class="text-gray-600">{{ $blog['subtitle'] }}</span>
                            </div>
                            <div>
                                <ul class="flex gap-4">
                                    <li
                                        class="text-center h-full cursor-pointer hover:text-yellow-500 active:text-yellow-700 
                            focus:outline-none focus:ring focus:ring-yellow-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>


                                    </li>
                                    <li
                                        class="text-center h-6 cursor-pointer hover:text-red-500 active:text-red-700 
                            focus:outline-none focus:ring focus:ring-red-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                        </svg>
                                        <span class="text-black">{{ $blog['likes'] }}</span>
                                    </li>
                                    <li
                                        class="text-center h-full cursor-pointer hover:text-blue-500 active:text-blue-700 
                            focus:outline-none focus:ring focus:ring-blue-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="flex justify-end my-5 mr-5">
                    <a href="{{ route('blog.create') }}"
                        class="bg-green-600 hover:bg-green-500 active:bg-green-700 
                focus:outline-none focus:ring focus:ring-green-300 
                p-4 text-white font-bold">Create
                        Blog</a>
                </div>
                <div></div>
            </div>
        </div>
</x-app-layout>
