<footer class="border-t-[3px] border-ink bg-ink text-paper">
    <div class="mx-auto flex max-w-6xl flex-col items-center gap-4 px-5 py-10 text-center sm:flex-row sm:justify-between sm:text-left">
        <div>
            <p class="font-display text-lg">{{ $profile['name'] }}</p>
            <p class="tag-mono text-paper/50">&copy; {{ date('Y') }} — dibuat dengan Laravel &amp; secangkir kopi</p>
        </div>
        <div class="flex gap-3 font-mono text-sm">
            <a href="{{ $profile['github'] }}" target="_blank" class="border-[2px] border-paper px-3 py-1.5 hover:bg-paper hover:text-ink transition-colors">GitHub</a>
            <a href="{{ $profile['linkedin'] }}" target="_blank" class="border-[2px] border-paper px-3 py-1.5 hover:bg-paper hover:text-ink transition-colors">LinkedIn</a>
            <a href="{{ $profile['instagram'] }}" target="_blank" class="border-[2px] border-paper px-3 py-1.5 hover:bg-paper hover:text-ink transition-colors">Instagram</a>
        </div>
    </div>
</footer>
