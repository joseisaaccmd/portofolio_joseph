<section id="skills" class="scroll-mt-24 relative overflow-hidden border-b-[3px] border-ink bg-blue/10 px-5 py-16 sm:py-24">
    <span class="pointer-events-none absolute right-8 top-10 text-4xl text-yellow float-badge">✦</span>
    <span class="pointer-events-none absolute left-6 bottom-10 text-3xl text-blue float-badge-slow">●</span>
    <div class="mx-auto max-w-6xl">
        <span class="chip reveal inline-block bg-white">03 — tech_stack</span>
        <h2 class="section-title reveal mt-2">Skills &amp; Tools</h2>

        <div class="mt-10 grid gap-x-10 gap-y-7 sm:grid-cols-2">
            @foreach ($skills as $i => $skill)
                <div class="reveal" style="transition-delay: {{ ($i % 4) * 80 }}ms">
                    <div class="mb-1.5 flex items-center justify-between font-mono text-sm">
                        <span class="flex items-center gap-2 font-semibold">
                            <span class="text-lg">{{ $skill['icon'] }}</span> {{ $skill['name'] }}
                        </span>
                        <span class="text-ink/50">{{ $skill['level'] }}%</span>
                    </div>
                    <div class="h-4 w-full border-[2.5px] border-ink bg-paper">
                        <div
                            class="h-full border-r-[2.5px] border-ink bg-{{ $skill['color'] }}"
                            style="width: {{ $skill['level'] }}%"
                        ></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
