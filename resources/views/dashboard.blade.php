<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="padding: 2rem;">
                <h2 class="font-bold text-3xl pb-4 text-center">{{Auth::user()->name}}'s Blogs</h2>
            </div>
        </div>
    </div>
</x-app-layout>
