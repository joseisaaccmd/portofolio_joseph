<section id="profile" class="scroll-mt-24 relative overflow-hidden border-b-[3px] border-ink px-5 py-16 sm:py-24">

    {{-- Dekorasi blob & tekstur ala poster neobrutalism --}}
    <div class="blob pointer-events-none absolute -left-16 -top-16 h-56 w-56 border-[3px] border-ink bg-mint/70"></div>
    <div class="blob-2 pointer-events-none absolute -right-20 bottom-0 h-64 w-64 border-[3px] border-ink bg-pink/60"></div>
    <div class="halftone-bg pointer-events-none absolute right-0 top-0 h-40 w-40"></div>

    <div class="mx-auto grid max-w-6xl items-center gap-12 md:grid-cols-2">

        {{-- Kiri: teks intro + terminal card --}}
        <div class="reveal">
            <span class="chip inline-block bg-mint">hello_world.php</span>

            <h1 class="section-title mt-5">
                Hai, saya <br>
                <span class="relative inline-block">
                    {{ $profile['name'] }}
                    <span class="absolute -bottom-2 left-0 -z-10 h-4 w-full bg-yellow"></span>
                </span>
            </h1>

            <p
                data-text="{{ strtoupper($profile['role']) }}"
                class="layered-text mt-3 font-display text-2xl uppercase tracking-wide sm:text-3xl"
            >{{ strtoupper($profile['role']) }}</p>

            <p class="mt-5 max-w-md text-lg text-ink/80">{{ $profile['tagline'] }}</p>

            <div class="mt-8 flex flex-wrap gap-3">
                <a href="#projects" class="brut-btn">Lihat Proyek</a>
                <a href="{{ $profile['cv_url'] }}" target="_blank" class="brut-btn-outline">Download CV</a>
            </div>

            {{-- Kartu ala terminal, sentuhan khas developer --}}
            <div class="brut-card mt-10 max-w-md overflow-hidden">
                <div class="flex items-center gap-1.5 border-b-[3px] border-ink bg-ink px-3 py-2">
                    <span class="h-2.5 w-2.5 rounded-full bg-pink"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-yellow"></span>
                    <span class="h-2.5 w-2.5 rounded-full bg-mint"></span>
                    <span class="ml-2 font-mono text-xs text-paper/70">profile.sh</span>
                </div>
                <div class="space-y-1 p-4 font-mono text-sm">
                    <p><span class="text-blue">$</span> whoami</p>
                    <p class="text-ink/70">{{ $profile['role'] }} based in {{ $profile['location'] }}</p>
                    <p class="mt-2"><span class="text-blue">$</span> status</p>
                    <p class="text-ink/70">open_to_work: <span class="text-pink">true</span></p>
                </div>
            </div>
        </div>

        {{-- Kanan: foto profil bergaya neobrutalism --}}
        <div class="relative mx-auto w-full max-w-sm reveal">
            <div class="absolute -right-4 -top-4 h-full w-full rotate-3 border-[3px] border-ink bg-yellow"></div>
            <div class="absolute -bottom-4 -left-4 h-full w-full -rotate-2 border-[3px] border-ink bg-blue"></div>
            <img
                src="{{ asset($profile['photo']) }}"
                alt="Foto {{ $profile['name'] }}"
                class="relative aspect-[3/4] w-full border-[3px] border-ink object-cover shadow-brut-lg"
            >

            {{-- Badge mengambang: tempat & tanggal lahir --}}
            <span class="chip float-badge absolute -left-6 top-6 rotate-[-4deg] bg-mint">
                📍 {{ $profile['birthplace'] }}
            </span>
            <span class="chip float-badge-slow absolute -right-6 top-1/3 rotate-[3deg] bg-pink">
                🎂 {{ $profile['birthdate'] }}
            </span>

            <span class="chip absolute -bottom-3 right-4 rotate-2 bg-pink">&lt;/available_for_hire&gt;</span>
            <span class="pointer-events-none absolute -left-8 -top-8 text-4xl text-blue float-badge">✦</span>
            <span class="pointer-events-none absolute -right-10 bottom-16 text-3xl text-pink float-badge-slow">★</span>

            {{-- Stempel bulat berputar, signature element ala poster neobrutalism --}}
            <svg viewBox="0 0 100 100" class="spin-stamp pointer-events-none absolute -right-10 -top-10 h-24 w-24 drop-shadow-[3px_3px_0_#141414]">
                <defs>
                    <path id="stampCircle" d="M 50,50 m -37,0 a 37,37 0 1,1 74,0 a 37,37 0 1,1 -74,0" />
                </defs>
                <circle cx="50" cy="50" r="48" fill="white" stroke="#141414" stroke-width="3" />
                <text font-size="7.2" font-family="'Space Mono', monospace" font-weight="700" fill="#141414" letter-spacing="1.5">
                    <textPath href="#stampCircle">• OPEN TO WORK • LET'S BUILD SOMETHING</textPath>
                </text>
                <circle cx="50" cy="50" r="15" fill="#FFCC00" stroke="#141414" stroke-width="2.5" />
                <text x="50" y="54" font-size="10" font-family="'Archivo Black', sans-serif" fill="#141414" text-anchor="middle">GO</text>
            </svg>
        </div>
    </div>
</section>
