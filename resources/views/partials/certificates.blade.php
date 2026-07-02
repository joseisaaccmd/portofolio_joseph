<section id="certificates" class="scroll-mt-24 relative overflow-hidden border-b-[3px] border-ink bg-yellow/10 px-5 py-16 sm:py-24">
    <div class="halftone-bg pointer-events-none absolute left-0 bottom-0 h-32 w-32"></div>
    <span class="pointer-events-none absolute right-12 top-10 text-3xl text-pink float-badge-slow">★</span>
    <div class="mx-auto max-w-6xl">
        <span class="chip reveal inline-block bg-white">06 — proof_of_learning</span>
        <h2 class="section-title reveal mt-2">Certificates</h2>

        <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($certificates as $i => $cert)
                <div class="brut-card reveal p-5" style="transition-delay: {{ $i * 100 }}ms">
                    <div class="mb-3 flex items-center justify-between">
                        <span class="chip bg-yellow">{{ $cert['year'] }}</span>
                        <span class="font-mono text-xl">🏆</span>
                    </div>
                    <h3 class="font-display text-base leading-snug">{{ $cert['title'] }}</h3>
                    <p class="tag-mono mt-2">{{ $cert['issuer'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
