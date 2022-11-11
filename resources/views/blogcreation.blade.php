<x-app-layout>
    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="pl-10 bg-red-400  rounded  text-xl text-white">
                    <ul class="flex items-center h-12 gap-10 mb-10">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                            </svg>

                        </li>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg py-10">
                <div class="flex flex-col items-center">
                    <h1 class="text-4xl">New Blog</h1>
                    <form action="{{ route('blog.store') }}" class="flex flex-col gap-4">
                        <label for="title">title</label>
                        <input type="text" name="title" id="title" placeholder="title" class="w-96" required>
                        <label for="content">content</label>
                        <input type="text" name="body" id="body" placeholder="content"
                            class="h-64 text-start" required>
                        <label for="image">Image</label>
                        <input
                            class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none"
                            id="file_input" type="file">

                        <button
                            class="bg-green-600 hover:bg-green-500 active:bg-green-700 
                        focus:outline-none focus:ring focus:ring-green-300 
                        p-4 text-white font-bold"
                            type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
