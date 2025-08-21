<x-full-layout :title="'Home'">
    <!-- Hero Section -->
    <section
        class="bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 text-white h-screen flex items-center -mt-16 pt-16">
        <div class="w-full px-6 py-24 lg:py-32">
            <div class="text-center max-w-5xl mx-auto">
                <div class="animate-fade-in-up">
                    <p
                        class="text-slate-400 text-sm font-medium tracking-wider uppercase mb-6 animate-fade-in delay-100">
                        Where Technology, Economy & Culture Collide
                    </p>
                    <h1 class="text-6xl lg:text-8xl font-bold mb-8 animate-fade-in delay-200">
                        <span
                            class="bg-gradient-to-r from-emerald-400 via-blue-400 to-emerald-600 bg-clip-text text-transparent">
                            MacroMinds
                        </span>
                    </h1>
                    <p
                        class="text-xl lg:text-2xl text-slate-300 mb-12 leading-relaxed max-w-3xl mx-auto animate-fade-in delay-300">
                        See the big picture. Explore deep insights on technology, economics, and pop culture that shape
                        our modern world.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center animate-fade-in delay-400">
                        <a href="/posts"
                            class="group inline-flex items-center px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-xl transition-all duration-300 transform hover:scale-105 hover:shadow-2xl hover:shadow-emerald-500/25">
                            Explore Insights
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                        <a href="/about"
                            class="inline-flex items-center px-8 py-4 border border-slate-600 text-slate-300 hover:text-white hover:border-slate-500 font-medium rounded-xl transition-all duration-300 transform hover:scale-105">
                            Our Vision
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white py-32">
        <div class="px-6">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-20">
                    <span class="text-emerald-600 text-sm font-semibold tracking-wider uppercase mb-4 block">
                        Content Categories
                    </span>
                    <h2 class="text-5xl lg:text-6xl font-bold text-slate-900 mb-6">See the Big Picture</h2>
                    <p class="text-xl text-slate-600 max-w-2xl mx-auto leading-relaxed">
                        Deep insights across technology, economics, and culture - exploring the connections that shape
                        our world.
                    </p>
                </div>
                <div class="grid md:grid-cols-3 gap-12">
                    <div
                        class="group text-center p-8 rounded-2xl hover:bg-slate-50 transition-all duration-500 hover:scale-105">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Technology & Innovation</h3>
                        <p class="text-slate-600 leading-relaxed">Deep dives into AI, blockchain, fintech, and emerging
                            technologies that are reshaping industries and society.</p>
                    </div>
                    <div
                        class="group text-center p-8 rounded-2xl hover:bg-slate-50 transition-all duration-500 hover:scale-105">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-blue-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Economics & Finance</h3>
                        <p class="text-slate-600 leading-relaxed">Macroeconomic analysis, investment insights, and
                            financial trends in the digital age.</p>
                    </div>
                    <div
                        class="group text-center p-8 rounded-2xl hover:bg-slate-50 transition-all duration-500 hover:scale-105">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m0 0V1a1 1 0 011-1h2a1 1 0 011 1v18a1 1 0 01-1 1H4a1 1 0 01-1-1V4a1 1 0 011-1h2a1 1 0 011 1v3m0 0h8m-8 0V4m8 3V4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">Pop Culture Analysis</h3>
                        <p class="text-slate-600 leading-relaxed">How entertainment, media, and cultural trends
                            influence economics, technology, and society at large.</p>
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
                    Ideas Beyond Trends
                </span>
                <h2 class="text-5xl lg:text-6xl font-bold text-slate-900 mb-6">
                    Ready to Think Big?
                </h2>
                <p class="text-xl text-slate-600 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Join MacroMinds community and explore perspectives that connect technology, economics, and culture
                    in meaningful ways.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center">
                    <a href="/posts"
                        class="group inline-flex items-center px-10 py-5 bg-slate-900 text-white font-semibold rounded-xl hover:bg-slate-800 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl">
                        Explore Articles
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/about"
                        class="inline-flex items-center px-10 py-5 border-2 border-emerald-300 text-emerald-700 font-semibold rounded-xl hover:border-emerald-400 hover:bg-emerald-50 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                        Our Mission
                    </a>
                </div>
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

        .animate-fade-in {
            animation: fade-in-up 0.8s ease-out;
        }

        .delay-100 {
            animation-delay: 0.1s;
            animation-fill-mode: both;
        }

        .delay-200 {
            animation-delay: 0.2s;
            animation-fill-mode: both;
        }

        .delay-300 {
            animation-delay: 0.3s;
            animation-fill-mode: both;
        }

        .delay-400 {
            animation-delay: 0.4s;
            animation-fill-mode: both;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }
    </style>
</x-full-layout>
