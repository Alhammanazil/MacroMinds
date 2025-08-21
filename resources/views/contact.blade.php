<x-full-layout :title="$title">
    <!-- Hero Section -->
    <section
        class="bg-gradient-to-b from-slate-900 via-slate-800 to-slate-900 text-white h-screen flex items-center -mt-16 pt-16">
        <div class="w-full px-6 py-24 lg:py-32">
            <div class="max-w-4xl mx-auto text-center">
                <div class="animate-fade-in-up">
                    <p class="text-slate-400 text-sm font-medium tracking-wider uppercase mb-6">Connect With Us</p>
                    <h1 class="text-6xl lg:text-8xl font-bold mb-8">
                        <span
                            class="bg-gradient-to-r from-emerald-400 via-blue-400 to-emerald-600 bg-clip-text text-transparent">
                            Contact
                        </span>
                    </h1>
                    <p class="text-xl lg:text-2xl text-slate-300 leading-relaxed max-w-3xl mx-auto">
                        Ready to collaborate on big ideas? Let's explore opportunities in technology, economics, and
                        cultural analysis together.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="bg-white py-32">
        <div class="px-6">
            <div class="max-w-6xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-20">
                    <!-- Contact Form -->
                    <div>
                        <div class="mb-12">
                            <span class="text-emerald-600 text-sm font-semibold tracking-wider uppercase mb-4 block">
                                Connect & Collaborate
                            </span>
                            <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">Share Your Vision</h2>
                            <p class="text-lg text-slate-600 leading-relaxed">
                                Whether you're interested in contributing insights, partnership opportunities, or
                                content collaboration - we'd love to hear from you.
                            </p>
                        </div>
                        <form class="space-y-8">
                            <div>
                                <label for="name" class="block text-sm font-semibold text-slate-900 mb-3">Full
                                    Name</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-6 py-4 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg placeholder-slate-400"
                                    placeholder="Your full name">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-semibold text-slate-900 mb-3">Email
                                    Address</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-6 py-4 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg placeholder-slate-400"
                                    placeholder="your.email@example.com">
                            </div>
                            <div>
                                <label for="subject"
                                    class="block text-sm font-semibold text-slate-900 mb-3">Subject</label>
                                <input type="text" id="subject" name="subject"
                                    class="w-full px-6 py-4 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg placeholder-slate-400"
                                    placeholder="What's this about?">
                            </div>
                            <div>
                                <label for="message"
                                    class="block text-sm font-semibold text-slate-900 mb-3">Message</label>
                                <textarea id="message" name="message" rows="6"
                                    class="w-full px-6 py-4 border border-slate-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg placeholder-slate-400 resize-none"
                                    placeholder="Tell us more about your project or inquiry..."></textarea>
                            </div>
                            <button type="submit"
                                class="group w-full py-5 px-8 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 focus:ring-4 focus:ring-emerald-200 transition-all duration-300 transform hover:scale-105 hover:shadow-xl text-lg">
                                Send Message
                                <svg class="w-5 h-5 ml-2 inline-block group-hover:translate-x-1 transition-transform duration-300"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Contact Information -->
                    <div class="lg:pl-8">
                        <div class="bg-gradient-to-br from-slate-50 to-emerald-50 rounded-3xl p-8 lg:p-12 h-full">
                            <h3 class="text-2xl font-bold text-slate-900 mb-8">Connect With MacroMinds</h3>
                            <div class="space-y-8">
                                <div class="flex items-start group">
                                    <div
                                        class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-slate-900 mb-2">Email</h4>
                                        <p class="text-slate-600">hello@macrominds.com</p>
                                        <p class="text-sm text-slate-500 mt-1">We reply within 24 hours</p>
                                    </div>
                                </div>
                                <div class="flex items-start group">
                                    <div
                                        class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-slate-900 mb-2">Phone</h4>
                                        <p class="text-slate-600">+1 (555) 123-4567</p>
                                        <p class="text-sm text-slate-500 mt-1">Mon-Fri 9AM-6PM EST</p>
                                    </div>
                                </div>
                                <div class="flex items-start group">
                                    <div
                                        class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-semibold text-slate-900 mb-2">Location</h4>
                                        <p class="text-slate-600">Jakarta, Indonesia</p>
                                        <p class="text-sm text-slate-500 mt-1">GMT+7 Timezone</p>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-12 pt-8 border-t border-slate-200">
                                <h4 class="text-lg font-semibold text-slate-900 mb-6">Follow Us</h4>
                                <div class="flex space-x-4">
                                    <a href="#"
                                        class="group w-12 h-12 bg-white rounded-xl flex items-center justify-center hover:bg-blue-600 transition-all duration-300 shadow-sm hover:shadow-lg">
                                        <svg class="w-5 h-5 text-slate-600 group-hover:text-white transition-colors duration-300"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="group w-12 h-12 bg-white rounded-xl flex items-center justify-center hover:bg-blue-600 transition-all duration-300 shadow-sm hover:shadow-lg">
                                        <svg class="w-5 h-5 text-slate-600 group-hover:text-white transition-colors duration-300"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                        class="group w-12 h-12 bg-white rounded-xl flex items-center justify-center hover:bg-blue-600 transition-all duration-300 shadow-sm hover:shadow-lg">
                                        <svg class="w-5 h-5 text-slate-600 group-hover:text-white transition-colors duration-300"
                                            fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bg-gradient-to-r from-slate-50 to-emerald-50 py-32">
        <div class="px-6">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-16">
                    <span class="text-emerald-600 text-sm font-semibold tracking-wider uppercase mb-4 block">
                        Common Questions
                    </span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-slate-900 mb-6">Frequently Asked Questions</h2>
                    <p class="text-lg text-slate-600 max-w-2xl mx-auto">
                        Learn more about MacroMinds, our content approach, and collaboration opportunities.
                    </p>
                </div>
                <div class="space-y-6">
                    <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-emerald-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900 mb-3">What makes MacroMinds different?
                                </h3>
                                <p class="text-slate-600 leading-relaxed">We focus on the big picture connections
                                    between technology, economics, and culture. Our analysis goes beyond surface-level
                                    trends to explore how these domains influence each other on a global scale.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900 mb-3">Can I contribute content to
                                    MacroMinds?</h3>
                                <p class="text-slate-600 leading-relaxed">Yes! We welcome expert contributors who can
                                    provide deep insights into technology trends, economic analysis, or cultural
                                    phenomena. Contact us with your expertise and article ideas for consideration.</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-sm hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold text-slate-900 mb-3">What partnership opportunities
                                    are available?</h3>
                                <p class="text-slate-600 leading-relaxed">We're open to strategic partnerships with
                                    research institutions, think tanks, and organizations focused on technology
                                    innovation, economic research, or cultural analysis. Let's discuss how we can
                                    collaborate.</p>
                            </div>
                        </div>
                    </div>
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

        html {
            scroll-behavior: smooth;
        }
    </style>
</x-full-layout>
