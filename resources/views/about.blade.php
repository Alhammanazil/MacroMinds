<x-full-layout :title="$title">
    <!-- Hero Section -->
    <section
        class="bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 text-white h-screen flex items-center -mt-16 pt-16">
        <div class="w-full px-6 py-24 lg:py-32">
            <div class="max-w-4xl mx-auto text-center">
                <div class="animate-fade-in-up">
                    <p class="text-slate-400 text-sm font-medium tracking-wider uppercase mb-6">Ideas Beyond Trends</p>
                    <h1 class="text-6xl lg:text-8xl font-bold mb-8">
                        <span
                            class="bg-gradient-to-r from-emerald-400 via-blue-400 to-emerald-600 bg-clip-text text-transparent">
                            MacroMinds
                        </span>
                    </h1>
                    <p class="text-xl lg:text-2xl text-slate-300 leading-relaxed max-w-3xl mx-auto">
                        Where technology, economics, and culture converge. See the big picture through deep analysis and
                        global perspectives.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="bg-white py-32">
        <div class="px-6">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-20 items-center">
                    <div class="space-y-8">
                        <div>
                            <span class="text-emerald-600 text-sm font-semibold tracking-wider uppercase mb-4 block">
                                Our Mission
                            </span>
                            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">Connecting the Dots in a
                                Complex World</h2>
                            <p class="text-lg text-slate-600 mb-6 leading-relaxed">
                                MacroMinds explores the interconnected relationships between technology, economics, and
                                popular culture that define our modern world.
                            </p>
                            <p class="text-lg text-slate-600 mb-8 leading-relaxed">
                                We provide deep analysis and global perspectives on emerging trends, helping readers
                                understand the bigger picture beyond surface-level news.
                            </p>
                            <a href="/posts"
                                class="group inline-flex items-center px-8 py-4 bg-emerald-600 text-white font-medium rounded-xl hover:bg-emerald-700 transition-all duration-300 transform hover:scale-105">
                                Explore Insights
                                <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="lg:pl-8">
                        <div class="bg-gradient-to-br from-slate-50 to-emerald-50 rounded-3xl p-8 lg:p-12">
                            <h3 class="text-2xl font-bold text-slate-900 mb-8">Content Pillars</h3>
                            <div class="space-y-6">
                                <div class="flex items-start group">
                                    <div
                                        class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center mr-4 mt-1 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-slate-900 mb-2">Deep Analysis</h4>
                                        <p class="text-slate-600">Going beyond headlines to explore the macro
                                            implications of technological and economic developments</p>
                                    </div>
                                </div>
                                <div class="flex items-start group">
                                    <div
                                        class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4 mt-1 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-slate-900 mb-2">Global Perspective</h4>
                                        <p class="text-slate-600">Understanding how global trends in finance,
                                            technology, and culture interconnect and influence each other</p>
                                    </div>
                                </div>
                                <div class="flex items-start group">
                                    <div
                                        class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4 mt-1 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v18a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1h2a1 1 0 011 1v3m0 0h8m-8 0V4m8 3V4" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-slate-900 mb-2">Cultural Impact</h4>
                                        <p class="text-slate-600">Analyzing how entertainment and cultural phenomena
                                            drive economic and technological innovation</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-slate-50 to-blue-50 py-32">
        <div class="px-6">
            <div class="max-w-4xl mx-auto text-center">
                <span class="text-emerald-600 text-sm font-semibold tracking-wider uppercase mb-4 block">
                    Join the Conversation
                </span>
                <h2 class="text-5xl lg:text-6xl font-bold text-slate-900 mb-6">Ready to Think Bigger?</h2>
                <p class="text-xl text-slate-600 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Connect with MacroMinds and explore how global trends in technology, economics, and culture shape
                    our future.
                </p>
                <a href="/contact"
                    class="group inline-flex items-center px-10 py-5 bg-slate-900 text-white font-semibold rounded-xl hover:bg-slate-800 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                    Get in Touch
                    <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Custom CSS for animations -->
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
    </style>
</x-full-layout>
