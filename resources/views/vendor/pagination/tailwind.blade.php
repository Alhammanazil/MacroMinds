@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}"
        class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6 rounded-xl">
        <div class="flex justify-between flex-1 sm:hidden">
            @if ($paginator->onFirstPage())
                <span
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-400 bg-gray-50 border border-gray-300 cursor-not-allowed leading-5 rounded-lg">
                    {!! __('pagination.previous') !!}
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-lg hover:bg-emerald-50 hover:border-emerald-300 hover:text-emerald-600 transition-all duration-300">
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}"
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-lg hover:bg-emerald-50 hover:border-emerald-300 hover:text-emerald-600 transition-all duration-300">
                    {!! __('pagination.next') !!}
                </a>
            @else
                <span
                    class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-gray-400 bg-gray-50 border border-gray-300 cursor-not-allowed leading-5 rounded-lg">
                    {!! __('pagination.next') !!}
                </span>
            @endif
        </div>

        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700 leading-5">
                    {!! __('Showing') !!}
                    @if ($paginator->firstItem())
                        <span class="font-medium">{{ $paginator->firstItem() }}</span>
                        {!! __('to') !!}
                        <span class="font-medium">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('of') !!}
                    <span class="font-medium">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <div class="flex flex-1 justify-between gap-3 sm:justify-end">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span
                        class="relative inline-flex items-center rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-400 cursor-not-allowed">
                        <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Previous
                    </span>
                @else
                    <a href="{{ $paginator->previousPageUrl() }}"
                        class="relative inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-emerald-50 hover:border-emerald-300 hover:text-emerald-600 transition-all duration-300">
                        <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                        Previous
                    </a>
                @endif

                {{-- Page Numbers --}}
                <div class="hidden sm:flex sm:space-x-1">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span
                                class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700">{{ $element }}</span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span
                                        class="relative inline-flex items-center rounded-lg border border-emerald-500 bg-emerald-600 px-4 py-2 text-sm font-semibold text-white">{{ $page }}</span>
                                @else
                                    <a href="{{ $url }}"
                                        class="relative inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-emerald-50 hover:border-emerald-300 hover:text-emerald-600 transition-all duration-300">{{ $page }}</a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </div>

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a href="{{ $paginator->nextPageUrl() }}"
                        class="relative inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-emerald-50 hover:border-emerald-300 hover:text-emerald-600 transition-all duration-300">
                        Next
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                @else
                    <span
                        class="relative inline-flex items-center rounded-lg border border-gray-300 bg-gray-50 px-4 py-2 text-sm font-medium text-gray-400 cursor-not-allowed">
                        Next
                        <svg class="ml-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </span>
                @endif
            </div>
        </div>
    </nav>
@endif
