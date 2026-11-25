<header id="site-header" class="site-header py-4 md:py-5" x-data="{ open: false }" @keydown.escape.window="open = false" @resize.window="if (window.innerWidth >= 1024) open = false">
    <div class="mx-auto px-6 md:px-12 flex items-center justify-between">
        <!-- Brand Logo -->
        <a href="{{ route('home') }}" @click="open = false" class="relative z-50 transition-transform duration-200 hover:opacity-85" aria-label="wi2 will トップへ">
            <img class="h-12 md:h-16 w-auto object-contain" src="{{ asset('images/brand.png') }}" alt="株式会社wi2 will" />
        </a>

        <!-- Desktop Navigation (lg and above) -->
        <nav aria-label="メインナビゲーション" class="hidden lg:flex items-center gap-3">
            <ul class="nav-pill-container m-0">
                <li><a href="{{ route('philosophy') }}" class="nav-pill-btn">理念</a></li>
                <li><a href="{{ route('business') }}" class="nav-pill-btn">事業内容</a></li>
                <li><a href="{{ route('company-profile') }}" class="nav-pill-btn">会社概要</a></li>
                <li><a href="{{ route('recruit') }}" class="nav-pill-btn">採用情報</a></li>
                <li>
                    <a href="#english" class="nav-pill-btn">
                        <x-lucide-globe class="size-3.5 mt-0.5 text-gray-500" />
                        English
                    </a>
                </li>
            </ul>

            <a href="{{ route('contact') }}" class="nav-pill-btn-cta">お問い合わせ</a>
        </nav>

        <!-- Mobile Menu Trigger Button (below lg) -->
        <div class="lg:hidden">
            <button type="button" class="mobile-toggle-btn" :class="{ 'is-open': open }" @click="open = !open" aria-controls="mobile-menu" :aria-expanded="open" :aria-label="open ? 'メニューを閉じる' : 'メニューを開く'">
                <span class="hamburger-line top-line"></span>
                <span class="hamburger-line bottom-line"></span>
            </button>
        </div>
    </div>

    <!-- Creative Full-Screen Mobile Menu Overlay -->
    <div id="mobile-menu" class="mobile-menu-overlay lg:hidden" :class="{ 'is-open': open }" :aria-hidden="!open" @click="if ($event.target.closest('a')) open = false">
        <!-- Decorative Ambient Glows -->
        <div class="pointer-events-none absolute -top-24 -right-24 size-72 rounded-full bg-brand-orange/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-24 -left-24 size-72 rounded-full bg-brand-yellow/15 blur-3xl"></div>

        <div class="relative flex flex-col justify-between h-full px-6 pt-28 pb-10">
            <nav aria-label="モバイルナビゲーション">
                <ul class="flex flex-col gap-5 m-0 p-0 list-none">
                    <li class="mobile-nav-item" style="--delay: 0.05s;">
                        <a href="#business" class="mobile-nav-link">
                            <span class="mobile-nav-num">01</span>
                            <span class="mobile-nav-text">事業内容</span>
                            <span class="mobile-nav-sub">BUSINESS</span>
                        </a>
                    </li>
                    <li class="mobile-nav-item" style="--delay: 0.12s;">
                        <a href="#about" class="mobile-nav-link">
                            <span class="mobile-nav-num">02</span>
                            <span class="mobile-nav-text">企業情報</span>
                            <span class="mobile-nav-sub">ABOUT US</span>
                        </a>
                    </li>
                    <li class="mobile-nav-item" style="--delay: 0.19s;">
                        <a href="#recruit" class="mobile-nav-link">
                            <span class="mobile-nav-num">03</span>
                            <span class="mobile-nav-text">採用情報</span>
                            <span class="mobile-nav-sub">RECRUIT</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="mobile-nav-item flex flex-col gap-4 pt-6 border-t border-white/15" style="--delay: 0.26s;">
                <a href="#contact" class="mobile-cta-btn">
                    <span>お問い合わせ</span>
                    <span class="size-8 rounded-full bg-white/20 flex items-center justify-center">
                        <x-lucide-arrow-right class="size-4 text-white" />
                    </span>
                </a>

                <div class="flex items-center justify-between text-sm text-brand-cream/80 px-2">
                    <a href="#english" class="inline-flex items-center gap-2 py-1 hover:text-brand-yellow transition-colors">
                        <x-lucide-globe class="size-4 text-brand-yellow" />
                        <span class="font-medium tracking-wider">English</span>
                    </a>
                    <span class="text-xs tracking-widest uppercase opacity-60 font-display">wi2 will Inc.</span>
                </div>
            </div>
        </div>
    </div>
</header>
