<section id="experience" class="scroll-mt-24 relative overflow-hidden border-b-[3px] border-ink bg-paper px-5 py-16 sm:py-24">
    <span class="pointer-events-none absolute right-10 top-8 text-4xl text-pink float-badge">✱</span>
    <div class="mx-auto max-w-6xl">
        <span class="chip reveal inline-block bg-white">04 — journey</span>
        <h2 class="section-title reveal mt-2">Experience</h2>

        <div class="mt-10 space-y-6">
            @foreach ($experiences as $i => $exp)
                <div class="brut-card reveal flex flex-col gap-4 p-6 sm:flex-row sm:items-start {{ $i % 2 === 0 ? '-rotate-1' : 'rotate-1' }}" style="transition-delay: {{ $i * 100 }}ms">
                    <span class="chip h-fit shrink-0 bg-blue text-white">{{ $exp['period'] }}</span>
                    <div>
                        <h3 class="font-display text-lg">{{ $exp['title'] }}</h3>
                        <p class="tag-mono mb-2">{{ $exp['place'] }}</p>
                        <p class="text-ink/80">{{ $exp['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
