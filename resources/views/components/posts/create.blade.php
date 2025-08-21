        @push('style')
            <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
        @endpush

        <div class="relative max-w-4xl p-4 bg-white border rounded-lg dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex items-center justify-between pb-4 mb-4 border-b rounded-t sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Add Post</h3>
            </div>

            {{-- Validation Errors --}}
            {{-- @if ($errors->any())
                <div class="flex p-4 mb-4 text-sm border rounded-lg"
                    style="background-color: #fef2f2; border-color: #fecaca; color: #991b1b;" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Danger</span>
                    <div>
                        <span class="font-medium">Ensure that these requirements are met:</span>
                        <ul class="mt-1.5 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif --}}

            <!-- Modal body -->
            <form action="{{ route('dashboard') }}" method="POST" id="post-form">
                @csrf
                {{-- Title --}}
                <div class="mb-4">
                    <label for="title"
                        class="block mb-2 text-sm font-medium @error('title') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Title</label>
                    @error('title')
                        <input type="text" name="title" id="title"
                            class="border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500"
                            placeholder="Type post title" autofocus value="{{ old('title') }}">
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @else
                        <input type="text" name="title" id="title"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Type post title" autofocus value="{{ old('title') }}">
                    @enderror
                </div>

                {{-- Category --}}
                <div class="mb-4">
                    <label for="category"
                        class="block mb-2 text-sm font-medium @error('category_id') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Category</label>
                    @error('category_id')
                        <select name="category_id" id="category"
                            class="border border-red-500 text-red-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5 dark:bg-gray-700 dark:border-red-500 dark:text-red-500">
                            <option selected="" value="">Select post category</option>
                            @foreach (App\Models\Category::get() as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @else
                        <select name="category_id" id="category"
                            class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected="" value="">Select post category</option>
                            @foreach (App\Models\Category::get() as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    @enderror
                </div>

                {{-- Content --}}
                <div class="mb-4">
                    <label for="content"
                        class="block mb-2 text-sm font-medium @error('content') text-red-700 dark:text-red-500 @else text-gray-900 dark:text-white @enderror">Content</label>

                    <!-- Hidden textarea for form submission -->
                    <textarea name="content" id="content" rows="4" style="display: none;" placeholder="Write post content here">{{ old('content') }}</textarea>

                    <!-- Quill Editor -->
                    <div id="editor"
                        class="@error('content') border border-red-500 rounded-lg @else border border-gray-300 rounded-lg @enderror">
                    </div>

                    <!-- Error message below editor -->
                    @error('content')
                        <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    @enderror

                </div>

                <div class="flex gap-3">
                    {{-- Submit Button --}}
                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-6 h-6 mr-1 -ml-1" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                        Add new post
                    </button>

                    {{-- Cancel Button --}}
                    <a href="{{ route('dashboard') }}"
                        class="inline-flex items-center text-white bg-gray-900 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-gray-700 dark:hover:bg-gray-900 dark:focus:ring-gray-900">
                        Cancel
                    </a>
                </div>
            </form>
        </div>

        @push('script')
            <!-- Include the Quill library -->
            <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>

            <!-- Initialize Quill editor -->
            <script>
                const quill = new Quill('#editor', {
                    theme: 'snow',
                    placeholder: 'Write post content here...'
                });

                // Set initial content if there's old input (validation error)
                const initialContent = document.querySelector('#content').value;
                if (initialContent) {
                    quill.root.innerHTML = initialContent;
                }

                const postForm = document.querySelector('#post-form');
                const postContent = document.querySelector('#content');
                const quillEditor = document.querySelector('#editor');

                postForm.addEventListener('submit', (e) => {
                    e.preventDefault();

                    const content = quillEditor.children[0].innerHTML;
                    postContent.value = content;

                    postForm.submit();
                })
            </script>
        @endpush
