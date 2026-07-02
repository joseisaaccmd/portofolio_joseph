<section id="about" class="scroll-mt-24 relative overflow-hidden border-b-[3px] border-ink bg-mint/15 px-5 py-16 sm:py-24">
    <div class="halftone-bg pointer-events-none absolute -right-6 -top-6 h-40 w-40"></div>
    <span class="pointer-events-none absolute right-10 bottom-10 text-4xl text-yellow burst">✱</span>

    <div class="mx-auto max-w-6xl">
        <span class="chip reveal inline-block bg-white">01.5 — kenalan_dulu</span>
        <h2 class="section-title reveal mt-3">About Me</h2>

        <div class="mt-10 grid gap-10 lg:grid-cols-5">
            {{-- Bio --}}
            <div class="reveal lg:col-span-3">
                <p class="text-lg leading-relaxed text-ink/85">{{ $about['bio'] }}</p>

                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach ($about['focus'] as $focus)
                        <span class="chip bg-white">{{ $focus }}</span>
                    @endforeach
                </div>
            </div>

            {{-- Stat cards --}}
            <div class="grid grid-cols-2 gap-4 lg:col-span-2">
                @foreach ($stats as $i => $stat)
                    <div
                        class="brut-card reveal flex flex-col items-center justify-center gap-1 bg-{{ $stat['color'] }} p-5 text-center {{ $i % 2 === 0 ? '-rotate-2' : 'rotate-2' }}"
                        style="transition-delay: {{ $i * 90 }}ms"
                    >
                        <span class="font-display text-3xl sm:text-4xl">{{ $stat['value'] }}</span>
                        <span class="font-mono text-xs uppercase leading-tight text-ink/70">{{ $stat['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Services --}}
        <div class="mt-14 grid gap-6 sm:grid-cols-3">
            @foreach ($services as $i => $service)
                <div class="brut-card reveal p-6" style="transition-delay: {{ $i * 100 }}ms">
                    <span class="text-3xl">{{ $service['icon'] }}</span>
                    <h3 class="mt-3 font-display text-lg">{{ $service['title'] }}</h3>
                    <p class="mt-2 text-sm text-ink/75">{{ $service['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
