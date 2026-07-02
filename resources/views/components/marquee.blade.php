@props(['bg' => 'yellow', 'text' => 'WEB DEVELOPER'])

<div {{ $attributes->merge(['class' => "marquee border-y-[3px] border-ink bg-$bg py-3"]) }}>
    <div class="marquee-track flex w-max items-center gap-6 font-display text-lg uppercase tracking-wide text-ink sm:text-xl">
        @for ($i = 0; $i < 2; $i++)
            <span class="flex items-center gap-6 shrink-0">
                @foreach (explode('•', $text) as $chunk)
                    @if (trim($chunk) !== '')
                        <span class="shrink-0">{{ trim($chunk) }}</span>
                        <span class="shrink-0 text-xl">✦</span>
                    @endif
                @endforeach
            </span>
        @endfor
    </div>
</div>
