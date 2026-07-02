<header x-data="{ open: false }" class="sticky top-0 z-50 border-b-[3px] border-ink bg-paper/95 backdrop-blur">
    <div class="mx-auto flex max-w-6xl items-center justify-between px-5 py-4">

        {{-- Logo / inisial --}}
        <a href="#home" class="brut-card flex h-11 w-11 rotate-[-3deg] items-center justify-center font-display text-lg">
            {{ collect(explode(' ', $profile['name']))->map(fn($w) => mb_substr($w, 0, 1))->join('') }}
        </a>

        {{-- Menu desktop: pojok kanan atas, gaya bracket dev --}}
        <nav class="hidden items-center gap-1 font-mono text-sm md:flex">
            <span class="text-ink/40">{{ '{' }}</span>
            <a href="#profile" class="px-3 py-1.5 uppercase tracking-wide hover:bg-yellow hover:shadow-brut-sm hover:border-[2px] hover:border-ink transition-all">Profile</a>
            <span class="text-ink/30">/</span>
            <a href="#about" class="px-3 py-1.5 uppercase tracking-wide hover:bg-pink hover:shadow-brut-sm hover:border-[2px] hover:border-ink transition-all">About</a>
            <span class="text-ink/30">/</span>
            <a href="#skills" class="px-3 py-1.5 uppercase tracking-wide hover:bg-mint hover:shadow-brut-sm hover:border-[2px] hover:border-ink transition-all">Skills</a>
            <span class="text-ink/30">/</span>
            <a href="#experience" class="px-3 py-1.5 uppercase tracking-wide hover:bg-pink hover:shadow-brut-sm hover:border-[2px] hover:border-ink transition-all">Experience</a>
            <span class="text-ink/30">/</span>
            <a href="#projects" class="px-3 py-1.5 uppercase tracking-wide hover:bg-blue hover:text-white hover:shadow-brut-sm hover:border-[2px] hover:border-ink transition-all">Projects</a>
            <span class="text-ink/30">/</span>
            <a href="#certificates" class="px-3 py-1.5 uppercase tracking-wide hover:bg-yellow hover:shadow-brut-sm hover:border-[2px] hover:border-ink transition-all">Certificates</a>
            <span class="text-ink/30">/</span>
            <a href="#contact" class="px-3 py-1.5 uppercase tracking-wide hover:bg-mint hover:shadow-brut-sm hover:border-[2px] hover:border-ink transition-all">Contact</a>
            <span class="text-ink/40">{{ '}' }}</span>
        </nav>

        {{-- Tombol hamburger untuk mobile --}}
        <button @click="open = !open" class="brut-card flex h-11 w-11 items-center justify-center md:hidden" aria-label="Buka menu">
            <span class="font-mono text-lg" x-text="open ? '×' : '≡'"></span>
        </button>
    </div>

    {{-- Menu mobile --}}
    <nav x-show="open" x-cloak x-transition class="border-t-[3px] border-ink bg-white px-5 py-4 font-mono text-sm md:hidden">
        <a href="#profile" @click="open=false" class="block border-b border-ink/10 py-3 uppercase tracking-wide">01. Profile</a>
        <a href="#about" @click="open=false" class="block border-b border-ink/10 py-3 uppercase tracking-wide">02. About</a>
        <a href="#skills" @click="open=false" class="block border-b border-ink/10 py-3 uppercase tracking-wide">03. Skills</a>
        <a href="#experience" @click="open=false" class="block border-b border-ink/10 py-3 uppercase tracking-wide">04. Experience</a>
        <a href="#projects" @click="open=false" class="block border-b border-ink/10 py-3 uppercase tracking-wide">05. Projects</a>
        <a href="#certificates" @click="open=false" class="block border-b border-ink/10 py-3 uppercase tracking-wide">06. Certificates</a>
        <a href="#contact" @click="open=false" class="block py-3 uppercase tracking-wide">07. Contact</a>
    </nav>
</header>
