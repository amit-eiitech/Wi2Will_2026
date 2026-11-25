@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <section class="hero-section relative mt-36 px-12">
        <div class="relative z-1 flex gap-12">
            <!-- Background video -->
            <div class="w-full xl:w-3/4 relative">
                <!-- Rotating Circular Text -->
                <div class="about-orbit absolute -top-20 -right-16 z-0 w-42.5 h-42.5 pointer-events-none">
                    <svg viewBox="0 0 170 170" class="w-full h-full overflow-visible">
                        <defs>
                            <path id="about-circle-path" d="M 85,85 m -65,0 a 65,65 0 1,1 130,0 a 65,65 0 1,1 -130,0" />
                        </defs>

                        <text fill="#F2733F" font-size="14" font-weight="700" letter-spacing="2">
                            <textPath href="#about-circle-path" startOffset="0%" textLength="408" lengthAdjust="spacing">・PEOPLE・IDEAS・POSSIBILITIES</textPath>
                        </text>
                    </svg>
                </div>

                <img class="hero-arrow-top absolute -left-40 -top-10 z-2 opacity-30 w-100" src="{{ asset('images/arrow-1-filled.svg') }}" alt="">
                <img class="hero-arrow-bottom absolute -right-20 -bottom-40 opacity-80 z-2 w-160" src="{{ asset('images/arrow-1-filled.svg') }}" alt="">

                <video class="relative z-1 w-full h-full object-cover rounded-[3rem]" src="https://media.istockphoto.com/id/2186098531/ja/%E3%83%93%E3%83%87%E3%82%AA/%E6%8B%B3%E3%83%9D%E3%83%B3%E3%83%97%E3%82%92%E3%81%99%E3%82%8B%E3%82%A2%E3%82%B8%E3%82%A2%E3%81%AE%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%E3%83%9E%E3%83%B3.mp4?s=mp4-640x640-is&k=20&c=SKq2KvTsb_NkY2CYr4aB7joqLyWUpJKoBel4y52czJ4=" alt="" autoplay muted loop></video>
                {{-- <img class="w-full h-full object-cover rounded-[4rem]" src="{{ asset('images/team-3.jpg') }}" alt=""> --}}
            </div>

            <div class="w-full xl:w-1/4 flex flex-col justify-center">
                <div class="eyebrow">WITH INNOVATION</div>
                <h1 class="letter-reveal text-7xl font-bold leading-tight italic mb-6">全ての人に<br>感動を</h1> {{-- <h2 class="reveal-up text-3xl font-bold mb-8">全ての人に感動を</h2> --}}
                <p class="reveal-up text-md leading-loose">営業活動中の組織のつなぎとして、 もしくは転職活動中のスキルアップとして 自分の実力をフル活用して働けます。 安心な教育体制と高いインセンティブで プラスできる環境をwi2 willが提供します。 あなたも「wi2 will」を有効活用しませんか？</p>
                <a href="#contact" class="btn-primary mt-12">
                    <span class="icon">
                        <x-lucide-chevron-right />
                    </span>
                    探索する
                </a>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="relative pt-32 px-12 w-full">
        {{-- <img class="absolute z-0 top-0 right-[10vw] w-[15vw] opacity-10" src="src/assets/images/graphic-1.svg" alt="" /> --}}
        {{-- <div class="absolute z-1 right-30 bottom-0 text-[clamp(9rem,12vw,12rem)] text-outlined max-w-4xl font-black font-display leading-none pointer-events-none">WHAT'S WI2WILL</div> --}}

        <div class="relative z-5 w-full max-w-7xl mx-auto flex flex-col">
            <img class="absolute z-2 bottom-0 right-0 max-h-[65vh]" src="{{ asset('images/team-4.png') }}" alt="" />

            <!-- Main Heading -->
            <div class="eyebrow">ABOUT US</div>
            <h2 class="letter-reveal relative z-10 text-6xl font-bold font-display leading-none tracking-widest mb-12">私たちについて</h2>

            <div class="max-w-md">
                <!-- Sub-heading -->
                <h3 class="reveal-up text-2xl font-bold mb-12">人と企業の可能性をつなぎ、新しい価値を創造する。</h3>
                <p class="reveal-up text-md leading-loose mb-8">ウィズウィルは、人材サービスを軸に、研修・教育、営業支援、プロモーション支援などを通じて、企業と現場の双方を支える事業を展開しています。</p>
                <p class="reveal-up text-md leading-loose mb-12">私たちは、単にご要望に応えるだけではありません。現場で何が起きているのか、その先にどんな課題があるのかを捉え、一歩先の提案と行動につなげます。</p>

                <!-- CTA -->
                <a href="#contact" class="btn-primary">
                    <span class="icon"><x-lucide-chevron-right /></span>
                    詳細はこちら
                </a>
            </div>
        </div>
    </section>

    <section class="relative z-10 bg-linear-130 from-yellow-300 to-orange-400 -skew-y-7 h-60"></section>

    <!-- BUSINESS -->
    <section id="business" class="relative pt-48 pb-32 px-12 w-full">
        <img class="absolute -left-40 top-[15%] z-0 opacity-30 w-[50vw]" src="{{ asset('images/arrow-1-filled.svg') }}" alt="">
        <img class="absolute -right-40 bottom-10 z-0 opacity-10 w-[50vw]" src="{{ asset('images/arrow-1-filled.svg') }}" alt="">

        <div class="w-full max-w-7xl mx-auto relative z-1">
            <div class="px-12 mx-auto">
                <div class="eyebrow">BUSINESS</div>
                <h2 class="letter-reveal relative z-10 text-6xl font-bold font-display leading-none tracking-widest mb-12">事業紹介</h2>
            </div>

            <!-- MARQUEES -->
            <div class="w-full">
                <div class="business-rows flex flex-col gap-40 max-w-[75vw] ms-auto">
                    <!-- 01 MOBILE -->
                    <div class="business-row" data-direction="left" data-speed="300">
                        <div class="business-marquee">
                            <div class="business-track">
                                <div class="business-images">
                                    <img src="{{ asset('images/car-1.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-2.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-3.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-4.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="w-120">
                            <div class="text-xs tracking-widest text-orange-500 flex gap-2.5 items-center mb-2">
                                <x-lucide-square-arrow-right class="size-4" />
                                MOBILE BUSINESS
                            </div>
                            <h3 class="text-3xl font-semibold mb-4">モバイル事業</h3>
                            <p class="text-md leading-loose mb-4">家電量販店や携帯ショップでの販売活動を、スタッフの育成から現場への配置まで一貫してサポート。質の高い接客と提案力で、企業の販売促進に貢献します。</p>
                            <a href="" class="btn-primary">
                                <span class="icon"><x-lucide-chevron-right /></span>
                                詳しく見る
                            </a>
                        </div>
                    </div>

                    <!-- 02 PROMOTION -->
                    <div class="business-row flex-row-reverse" data-direction="right" data-speed="300">
                        <div class="business-marquee">
                            <div class="business-track">
                                <div class="business-images">
                                    <img src="{{ asset('images/car-5.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-6.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-7.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-8.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="w-120">
                            <div class="text-xs tracking-widest text-orange-500 flex gap-2.5 items-center mb-2">
                                <x-lucide-square-arrow-right class="size-4" />
                                PROMOTIONAL ACTIVITIES
                            </div>
                            <h3 class="text-3xl font-semibold mb-4">プロモーション事業</h3>
                            <p class="text-md leading-loose mb-4">商品発表会や展示会、販売キャンペーンなどに、経験豊富なスタッフを手配。現場の運営からお客様へのアプローチまで、企業の販促活動をサポートします。</p>
                            <a href="" class="btn-primary">
                                <span class="icon"><x-lucide-chevron-right /></span>
                                詳しく見る
                            </a>
                        </div>
                    </div>

                    <!-- 03 TRAINING -->
                    <div class="business-row" data-direction="left" data-speed="300">
                        <div class="business-marquee">
                            <div class="business-track">
                                <div class="business-images">
                                    <img src="{{ asset('images/car-1.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-2.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-3.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-4.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="w-120">
                            <div class="text-xs tracking-widest text-orange-500 flex gap-2.5 items-center mb-2">
                                <x-lucide-square-arrow-right class="size-4" />
                                TRAINING PROGRAMS
                            </div>
                            <h3 class="text-3xl font-semibold mb-4">研修事業</h3>
                            <p class="text-md leading-loose mb-4">実践的な研修と独自の育成メソッドで、一人ひとりのスキルアップを支援。人材の成長を、組織全体の成果につなげます。</p>
                            <a href="" class="btn-primary">
                                <span class="icon"><x-lucide-chevron-right /></span>
                                詳しく見る
                            </a>
                        </div>
                    </div>

                    <!-- 04 SYSTEM ENGINEER -->
                    <div class="business-row flex-row-reverse" data-direction="right" data-speed="300">
                        <div class="business-marquee">
                            <div class="business-track">
                                <div class="business-images">
                                    <img src="{{ asset('images/car-5.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-6.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-7.jpg') }}" alt="" />
                                    <img src="{{ asset('images/car-8.jpg') }}" alt="" />
                                </div>
                            </div>
                        </div>

                        <div class="w-120">
                            <div class="text-xs tracking-widest text-orange-500 flex gap-2.5 items-center mb-2">
                                <x-lucide-square-arrow-right class="size-4" />
                                SYSTEM ENGINEERING
                            </div>
                            <h3 class="text-3xl font-semibold mb-4">システムエンジニア事業</h3>
                            <p class="text-md leading-loose mb-4">企業の社内システムやITインフラの運用・保守を担当。確かな技術と継続的なサポートで、安定したシステム環境を守ります。</p>
                            <a href="" class="btn-primary">
                                <span class="icon"><x-lucide-chevron-right /></span>
                                詳しく見る
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section id="services" class="bg-[#e85d04] relative py-32 px-12 w-full">
        <div class="w-full max-w-7xl mx-auto">
            <div class="relative flex">
                <a href="" class="block relative w-1/2 aspect-4/3 group">
                    <div class="absolute inset-0 z-0">
                        <img class="w-full h-full object-cover" src="https://media.istockphoto.com/id/2212248317/ja/%E3%82%B9%E3%83%88%E3%83%83%E3%82%AF%E3%83%95%E3%82%A9%E3%83%88/%E7%8F%BE%E4%BB%A3%E3%81%AE%E3%82%AA%E3%83%95%E3%82%A3%E3%82%B9%E3%81%A7%E5%BE%AE%E7%AC%91%E3%82%80%E8%87%AA%E4%BF%A1%E3%81%AB%E6%BA%80%E3%81%A1%E3%81%9F%E3%82%A2%E3%82%B8%E3%82%A2%E3%81%AE%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%E3%82%A6%E3%83%BC%E3%83%9E%E3%83%B3.jpg?s=2048x2048&w=is&k=20&c=sH_bhr7pzHuo_Fa2GA0hlcZTlwCbo-5kGc_Dj05PRi8=" alt="">
                    </div>
                    <div class="relative z-1 w-full h-full flex items-center justify-center bg-amber-300/80 transition-colors duration-300 group-hover:bg-amber-300/30">
                        <span class="text-white text-6xl font-bold transition-all duration-300 group-hover:tracking-wider">FOR BUSINESSES</span>
                    </div>
                </a>
                <a href="" class="block relative w-1/2 group">
                    <div class="absolute inset-0 z-0">
                        <img class="w-full h-full object-cover" src="https://media.istockphoto.com/id/1412239096/ja/%E3%82%B9%E3%83%88%E3%83%83%E3%82%AF%E3%83%95%E3%82%A9%E3%83%88/%E3%82%BF%E3%83%96%E3%83%AC%E3%83%83%E3%83%88%E3%81%A7%E6%B3%A8%E6%96%87%E3%82%92%E3%83%81%E3%82%A7%E3%83%83%E3%82%AF%E3%81%99%E3%82%8B%E9%AD%85%E5%8A%9B%E7%9A%84%E3%81%AA%E3%82%A2%E3%82%B8%E3%82%A2%E3%81%AE%E8%B5%B7%E6%A5%AD%E5%AE%B6%E3%83%93%E3%82%B8%E3%83%8D%E3%82%B9%E3%82%A6%E3%83%BC%E3%83%9E%E3%83%B3.jpg?s=2048x2048&w=is&k=20&c=6dTFW1Cl63OeZKVB-ILWa_yv1h5Y2IcKxlpaNLammsw=" alt="">
                    </div>
                    <div class="relative z-1 w-full h-full flex items-center justify-center bg-blue-900/80 transition-colors duration-300 group-hover:bg-blue-900/30">
                        <span class="text-white text-6xl font-bold transition-all duration-300 group-hover:tracking-wider">FOR JOB SEEKERS</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- NEWS -->
    <section id="news" class="relative py-32 px-12 w-full">
        <div class="w-full max-w-7xl mx-auto flex">
            <div class="w-2/5 px-12">
                <div class="eyebrow">Notice</div>
                <h2 class="letter-reveal relative z-10 text-6xl font-bold font-display leading-none tracking-widest mb-12">お知らせ</h2>
            </div>

            <div class="w-3/5">
                @for ($i = 0; $i < 4; $i++)
                    <a href="#" class="flex items-center border-b border-gray-200 py-6 transition-colors duration-300 hover:bg-gray-100 group">
                        <span class="w-36 text-sm px-3">2026.11.25</span>
                        <span class="grow">新しいウェブサイトを公開しました</span>
                        <span class="px-3"><x-lucide-chevrons-right class="size-5 text-gray-400 transition-all duration-300 group-hover:text-brand-orange group-hover:translate-x-0.5" /></span>
                    </a>
                @endfor
            </div>
        </div>
    </section>
@endsection
