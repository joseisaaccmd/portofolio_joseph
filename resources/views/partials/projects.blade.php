<section id="projects" class="scroll-mt-24 relative overflow-hidden border-b-[3px] border-ink bg-white px-5 py-16 sm:py-24">
    <span class="pointer-events-none absolute left-10 top-8 text-4xl text-pink float-badge-slow">★</span>
    <span class="pointer-events-none absolute right-10 bottom-8 text-3xl text-mint float-badge">✦</span>
    <div class="mx-auto max-w-6xl">
        <span class="chip reveal inline-block bg-white">05 — selected_work</span>
        <h2 class="section-title reveal mt-2">Projects</h2>

        <div class="mt-10 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($projects as $i => $project)
                <a
                    href="{{ $project['link'] }}"
                    target="_blank"
                    class="brut-card reveal relative group flex flex-col overflow-hidden p-5 transition-transform duration-150 hover:-translate-x-1 hover:-translate-y-1 hover:shadow-brut-lg"
                    style="transition-delay: {{ $i * 100 }}ms"
                >
                    @if ($i === 0)
                        <span class="absolute -right-9 top-4 rotate-45 border-y-[2px] border-ink bg-ink px-9 py-1 font-mono text-[10px] uppercase tracking-widest text-paper">Featured</span>
                    @endif

                    <div class="stripe-pattern relative mb-4 flex h-32 items-center justify-center overflow-hidden border-[3px] border-ink bg-{{ $project['color'] }}">
                        <span class="absolute left-2 top-2 border-[2px] border-ink bg-white px-2 py-0.5 font-display text-xs">{{ sprintf('%02d', $i + 1) }}</span>
                        <span class="font-mono text-xs text-ink/70">&lt;project preview&gt;</span>
                    </div>
                    <h3 class="font-display text-lg">{{ $project['title'] }}</h3>
                    <p class="mt-2 flex-1 text-sm text-ink/80">{{ $project['desc'] }}</p>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($project['stack'] as $tech)
                            <span class="chip">{{ $tech }}</span>
                        @endforeach
                    </div>
                    <span class="mt-4 font-mono text-sm underline decoration-2 underline-offset-4 group-hover:text-blue">Lihat detail →</span>
                </a>
            @endforeach
        </div>
    </div>
</section>
