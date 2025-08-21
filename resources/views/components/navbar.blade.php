      <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-200/20 transition-all duration-300"
          x-data="{ isOpen: false }">
          <div class="mx-auto max-w-6xl px-6">
              <div class="flex h-16 items-center justify-between">
                  <div class="flex items-center">
                      <div class="shrink-0">
                          <a href="/"
                              class="text-xl font-bold bg-gradient-to-r from-emerald-600 to-blue-600 bg-clip-text text-transparent hover:from-emerald-700 hover:to-blue-700 transition-all duration-300">
                              MacroMinds
                          </a>
                      </div>
                  </div>

                  <!-- Desktop Navigation -->
                  <div class="hidden md:block">
                      <div class="flex items-center space-x-8">
                          <x-my-nav-link href="/" :current="request()->is('/')"
                              class="text-sm font-medium text-slate-700 hover:text-slate-900 transition-colors duration-300">Home</x-my-nav-link>
                          <x-my-nav-link href="/posts" :current="request()->is('posts')"
                              class="text-sm font-medium text-slate-700 hover:text-slate-900 transition-colors duration-300">Blog</x-my-nav-link>
                          <x-my-nav-link href="/about" :current="request()->is('about')"
                              class="text-sm font-medium text-slate-700 hover:text-slate-900 transition-colors duration-300">About</x-my-nav-link>
                          <x-my-nav-link href="/contact" :current="request()->is('contact')"
                              class="text-sm font-medium text-slate-700 hover:text-slate-900 transition-colors duration-300">Contact</x-my-nav-link>
                      </div>
                  </div>

                  <div class="flex items-center space-x-4">
                      <!-- Profile dropdown (desktop only) -->
                      <div class="relative hidden md:block">
                          @if (Auth::check())
                              <button type="button" @click="isOpen = !isOpen"
                                  class="flex items-center space-x-2 rounded-full px-3 py-2 text-sm font-medium text-slate-700 hover:bg-slate-100 transition-colors duration-300"
                                  id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                  <img class="size-7 rounded-full"
                                      src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('img/default-avatar.webp') }}"
                                      alt="{{ Auth::user()->name }}" />
                                  <span class="hidden lg:block">{{ Auth::user()->name }}</span>
                                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M19 9l-7 7-7-7" />
                                  </svg>
                              </button>
                          @else
                              <div class="flex items-center space-x-1">
                                  <a href="/login"
                                      class="px-4 py-2 text-sm font-medium text-slate-700 hover:text-slate-900 transition-colors duration-300">Login</a>
                                  <span class="text-slate-400">|</span>
                                  <a href="/register"
                                      class="px-4 py-2 text-sm font-medium text-blue-600 hover:text-blue-700 transition-colors duration-300">Register</a>
                              </div>
                          @endif

                          @if (Auth::check())
                              <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
                                  x-transition:enter-start="opacity-0 translate-y-1"
                                  x-transition:enter-end="opacity-100 translate-y-0"
                                  x-transition:leave="transition ease-in duration-150"
                                  x-transition:leave-start="opacity-100 translate-y-0"
                                  x-transition:leave-end="opacity-0 translate-y-1" @click.away="isOpen = false"
                                  class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-lg bg-white py-1 shadow-lg ring-1 ring-black/5 border border-gray-200/20"
                                  role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button">
                                  <a href="/profile"
                                      class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 transition-colors duration-200"
                                      role="menuitem">Your Profile</a>
                                  <a href="/dashboard"
                                      class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50 transition-colors duration-200"
                                      role="menuitem">Dashboard</a>
                                  <hr class="border-gray-200/50 my-1">
                                  <form method="POST" action="/logout">
                                      @csrf
                                      <button type="submit"
                                          class="block w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors duration-200"
                                          role="menuitem">Log out</button>
                                  </form>
                              </div>
                          @endif
                      </div>

                      <!-- Hamburger button (mobile only) -->
                      <div class="md:hidden">
                          <button type="button" @click="isOpen = !isOpen"
                              class="inline-flex items-center justify-center rounded-md p-2 text-slate-700 hover:bg-slate-100 transition-colors duration-300"
                              aria-controls="mobile-menu" aria-expanded="false">
                              <span class="sr-only">Open main menu</span>
                              <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="size-6" fill="none"
                                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                              </svg>
                              <svg :class="{ 'hidden': !isOpen, 'block': isOpen }" class="size-6" fill="none"
                                  viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                              </svg>
                          </button>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Mobile menu -->
          <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
              x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100"
              x-transition:leave-end="opacity-0 scale-95"
              class="md:hidden border-t border-gray-200/20 bg-white/95 backdrop-blur-md" id="mobile-menu">
              <div class="space-y-1 px-6 pt-4 pb-6">
                  <x-my-nav-link class="block py-2" href="/" :current="request()->is('/')">Home</x-my-nav-link>
                  <x-my-nav-link class="block py-2" href="/posts" :current="request()->is('posts')">Blog</x-my-nav-link>
                  <x-my-nav-link class="block py-2" href="/about" :current="request()->is('about')">About</x-my-nav-link>
                  <x-my-nav-link class="block py-2" href="/contact" :current="request()->is('contact')">Contact</x-my-nav-link>

                  @if (Auth::check())
                      <hr class="border-gray-200/50 my-4">
                      <div class="flex items-center space-x-3 py-2">
                          <img class="size-8 rounded-full"
                              src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('img/default-avatar.webp') }}"
                              alt="{{ Auth::user()->name }}" />
                          <span class="text-sm font-medium text-slate-900">{{ Auth::user()->name }}</span>
                      </div>
                      <a href="/profile" class="block py-2 text-sm text-slate-700">Your Profile</a>
                      <a href="/dashboard" class="block py-2 text-sm text-slate-700">Dashboard</a>
                      <form method="POST" action="/logout" class="pt-2">
                          @csrf
                          <button type="submit" class="block py-2 text-sm text-red-600">Log out</button>
                      </form>
                  @else
                      <hr class="border-gray-200/50 my-4">
                      <a href="/login" class="block py-2 text-sm font-medium text-slate-700">Login</a>
                      <a href="/register" class="block py-2 text-sm font-medium text-blue-600">Register</a>
                  @endif
              </div>
          </div>
      </nav>
