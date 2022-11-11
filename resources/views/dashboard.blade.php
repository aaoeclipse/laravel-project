<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="padding: 2rem;">
                <h2 class="font-bold text-3xl pb-4 text-center">{{Auth::user()->username}}'s Blogs</h2>
                @if (count($user->blogs) === 0)
                    <div class="flex flex-col justify-center items-center mt-10 gap-4">
                        <div>
                            Looks like you don't have any blogs
                        </div>
                        <button class="bg-green-600 p-4 text-white font-bold">Create Blog</button>
                    </div>
                @endif
                @foreach ($user->blogs as $blog)
                    <div>blog</div>
                @endforeach
               
            </div>
        </div>
    </div>
</x-app-layout>
