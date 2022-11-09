<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="padding: 2rem;">
                <h2 class="font-bold text-3xl pb-4 text-center">Blogs from {{ $user->username}} </h2>
                @foreach ($user->blogs as $blog)
                <div class="p-4 border-solid border flex justify-between items-center" style="padding: 1rem;">
                    <div>
                        <h3 class="font-bold text-3xl cursor-pointer">{{ $blog['title']}}</h3>
                        <span class="text-gray-600">{{ $blog['subtitle']}}</span>
                       </div>
                       <div>
                        <ul class="flex gap-4">
                            <li class="text-center h-6 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                  </svg>
                                <span>{{ $blog['likes']}}</span>
                            </li>
                            <li class="text-center h-full cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                  </svg>
                                  
                                  
                            </li>
                        </ul>
                       </div>
                   </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>