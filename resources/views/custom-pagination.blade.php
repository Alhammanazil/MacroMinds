@if ($paginator->hasPages())
    <nav class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6 rounded-xl"
        aria-label="Pagination">
        <div class="hidden sm:block">
            <p class="text-sm text-gray-700">
                Showing
                <span class="font-medium">{{ $paginator->firstItem() }}</span>
                to
                <span class="font-medium">{{ $paginator->lastItem() }}</span>
                of
                <span class="font-medium">{{ $paginator->total() }}</span>
                results
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
                {{-- Show first few pages, current page, and last few pages --}}
                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                    @if ($i == $paginator->currentPage())
                        <span
                            class="relative inline-flex items-center rounded-lg border border-emerald-500 bg-emerald-600 px-4 py-2 text-sm font-semibold text-white">{{ $i }}</span>
                    @elseif ($i <= 2 || $i > $paginator->lastPage() - 2 || abs($i - $paginator->currentPage()) <= 1)
                        <a href="{{ $paginator->url($i) }}"
                            class="relative inline-flex items-center rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-emerald-50 hover:border-emerald-300 hover:text-emerald-600 transition-all duration-300">{{ $i }}</a>
                    @elseif ($i == 3 && $paginator->currentPage() > 4)
                        <span
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700">...</span>
                    @elseif ($i == $paginator->lastPage() - 2 && $paginator->currentPage() < $paginator->lastPage() - 3)
                        <span
                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700">...</span>
                    @endif
                @endfor
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
    </nav>
@endif
