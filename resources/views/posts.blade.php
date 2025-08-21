<x-full-layout :title="$title">
    <!-- Header Section -->
    <section class="bg-white pt-24 pb-16 border-b border-slate-100">
        <div class="px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center">
                    <span class="text-emerald-600 text-sm font-semibold tracking-wider uppercase mb-4 block">
                        MacroMinds Insights
                    </span>
                    <h1 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-4">
                        Latest Articles
                    </h1>
                    <p class="text-lg text-slate-600 max-w-2xl mx-auto leading-relaxed">
                        Deep analysis on technology, economics, and culture that matter
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Search & Filter Section -->
    <section class="bg-slate-50 py-12">
        <div class="px-6">
            <div class="max-w-6xl mx-auto">
                <div class="flex flex-col lg:flex-row gap-6 items-center justify-between">
                    <!-- Search Bar -->
                    <div class="w-full lg:w-96">
                        <form class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </div>
                            <input type="search" name="search"
                                class="w-full pl-12 pr-4 py-3 text-base border border-slate-200 rounded-xl focus:ring-2 focus:ring-emerald-500 focus:border-transparent transition-all duration-300 placeholder-slate-400 bg-white"
                                placeholder="Search insights..." value="{{ request('search') }}" autocomplete="off" />
                        </form>
                    </div>

                    <!-- Category Filter -->
                    <div class="flex flex-wrap gap-3">
                        <a href="/posts"
                            class="px-4 py-2 text-sm font-medium {{ !request('category') ? 'bg-emerald-600 text-white' : 'bg-white text-slate-600 hover:bg-slate-100' }} rounded-lg border border-slate-200 transition-colors duration-300">
                            All Topics
                        </a>
                        <!-- Add more category filters here as needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="bg-white py-16">
        <div class="px-6">
            <div class="max-w-6xl mx-auto">
                @if ($posts->count() > 0)
                    <!-- Articles Grid -->
                    <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2 mb-16">
                        @foreach ($posts as $post)
                            <article
                                class="group bg-white rounded-2xl border border-slate-200 hover:border-emerald-200 shadow-sm hover:shadow-xl transition-all duration-300 overflow-hidden">
                                <div class="p-8">
                                    <div class="flex justify-between items-center mb-6 text-slate-500">
                                        <a href="/categories/{{ $post->category->slug }}"
                                            class="group-hover:scale-105 transition-transform duration-300">
                                            <span
                                                class="{{ $post->category->color }} text-slate-700 text-xs font-semibold inline-flex items-center px-3 py-1.5 rounded-full border">
                                                {{ $post->category->name }}
                                            </span>
                                        </a>
                                        <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                                    </div>

                                    <h2
                                        class="mb-4 text-xl font-bold tracking-tight text-slate-900 group-hover:text-emerald-600 transition-colors duration-300">
                                        <a href="/posts/{{ $post['slug'] }}" class="block">{{ $post['title'] }}</a>
                                    </h2>

                                    <p class="mb-6 text-slate-600 leading-relaxed">
                                        {{ Str::limit(strip_tags($post->content), 120) }}
                                    </p>

                                    <div class="flex justify-between items-center">
                                        <a href="/authors/{{ $post->author->username }}"
                                            class="group-hover:scale-105 transition-transform duration-300">
                                            <div class="flex items-center space-x-3">
                                                <img class="w-8 h-8 rounded-full border-2 border-slate-200"
                                                    src="{{ $post->author->avatar ? asset($post->author->avatar) : asset('img/default-avatar.webp') }}"
                                                    alt="{{ $post->author->name }}" />
                                                <span class="font-medium text-sm text-slate-700">
                                                    {{ $post->author->name }}
                                                </span>
                                            </div>
                                        </a>
                                        <a href="/posts/{{ $post['slug'] }}"
                                            class="inline-flex items-center text-sm font-medium text-emerald-600 hover:text-emerald-700 transition-colors duration-300">
                                            Read More
                                            <svg class="ml-1 w-4 h-4 group-hover:translate-x-1 transition-transform duration-300"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    <div class="flex justify-center">
                        {{ $posts->links() }}
                    </div>
                @else
                    <!-- Empty State -->
                    <div class="text-center py-16">
                        <div class="w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-12 h-12 text-slate-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-900 mb-2">No articles found</h3>
                        <p class="text-slate-600 mb-6">Try adjusting your search terms or browse all articles.</p>
                        <a href="/posts"
                            class="inline-flex items-center px-6 py-3 bg-emerald-600 text-white font-medium rounded-lg hover:bg-emerald-700 transition-colors duration-300">
                            View All Articles
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Custom CSS for animations and utilities -->
    <style>
        @keyframes fade-in-up {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fade-in-up 0.8s ease-out;
        }

        html {
            scroll-behavior: smooth;
        }

        /* Custom line clamp for better text truncation */
        .text-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .text-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
</x-full-layout>
