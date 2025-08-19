        <div class="relative max-w-4xl p-4 bg-white border rounded-lg dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex items-center justify-between pb-4 mb-4 border-b rounded-t sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Edit Post</h3>
            </div>

            <form action="/dashboard/{{ $post->slug }}" method="POST">
                @csrf
                @method('PATCH')

                {{-- Title --}}
                <div class="mb-4">
                    <label for="title"
                        class="block mb-2 text-sm font-medium @error('title') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Title</label>
                    @error('title')
                        <input type="text" name="title" id="title"
                            class="border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500"
                            placeholder="Type post title" autofocus value="{{ old('title', $post->title) }}">
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @else
                        <input type="text" name="title" id="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Type post title" autofocus value="{{ old('title', $post->title) }}">
                    @enderror
                </div>

                {{-- Category --}}
                <div class="mb-4">
                    <label for="category"
                        class="block mb-2 text-sm font-medium @error('category_id') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Category</label>
                    @error('category_id')
                        <select name="category_id" id="category"
                            class="border border-red-500 text-red-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-red-500 dark:text-red-500">
                            <option value="">Select post category</option>
                            @foreach (App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id', $post->category_id) == $category->id)>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @else
                        <select name="category_id" id="category"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="">Select post category</option>
                            @foreach (App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id', $post->category_id) == $category->id)>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    @enderror
                </div>

                {{-- Content --}}
                <div class="mb-4">
                    <label for="content"
                        class="block mb-2 text-sm font-medium @error('content') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Content</label>
                    @error('content')
                        <textarea name="content" id="content" rows="4"
                            class="block p-2.5 w-full text-sm text-red-900 rounded-lg border border-red-500 focus:ring-red-500 focus:border-red-500 dark:bg-gray-700 dark:border-red-500 dark:placeholder-red-500 dark:text-red-500"
                            placeholder="Write post content here">{{ old('content', $post->content) }}</textarea>
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @else
                        <textarea name="content" id="content" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write post content here">{{ old('content', $post->content) }}</textarea>
                    @enderror
                </div>

                <div class="flex gap-3">
                    {{-- Submit Button --}}
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-6 h-6 mr-1 -ml-1" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        Update post
                    </button>

                    {{-- Cancel Button --}}
                    <a href="{{ route('dashboard') }}"
                        class="inline-flex items-center text-white bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-700 dark:hover:bg-gray-800 dark:focus:ring-gray-900">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
