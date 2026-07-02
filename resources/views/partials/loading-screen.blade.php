<div id="loading-screen" class="fixed inset-0 z-[999] flex flex-col items-center justify-center bg-blue">
    {{-- Background papan catur khas neobrutalism --}}
    <div class="checker-bg pointer-events-none absolute inset-0"></div>

    {{-- Sticker dekoratif --}}
    <span class="pointer-events-none absolute left-8 top-10 h-10 w-10 rotate-12 bg-pink border-[3px] border-ink"></span>
    <span class="pointer-events-none absolute right-10 top-16 text-5xl text-yellow burst">✦</span>
    <span class="pointer-events-none absolute bottom-16 left-14 h-3 w-16 -rotate-6 bg-mint border-[3px] border-ink"></span>
    <span class="pointer-events-none absolute bottom-24 right-16 text-4xl text-pink burst">✱</span>

    <div class="relative z-10 flex flex-col items-center px-6">

        {{-- Ucapan selamat datang --}}
        <p
            data-text="WELCOME"
            class="layered-text font-display text-4xl uppercase tracking-wide text-white sm:text-6xl"
        >WELCOME</p>
        <p class="chip mt-4 mb-6 bg-yellow rotate-[-2deg]">loading_portfolio.exe</p>

        {{-- Track tempat chibi jalan --}}
        <div class="relative h-32 w-72 overflow-hidden border-[3px] border-ink bg-white shadow-brut-lg sm:w-96">
            <div class="absolute bottom-0 h-2 w-full bg-ink/10"></div>

            {{-- Chibi versi CSS: kaki beneran melangkah, warna senada karya kamu --}}
            <div id="chibi-walker" class="chibi-walk absolute bottom-2 left-0">
                <div class="chibi">
                    <div class="chibi-wing"></div>
                    <div class="chibi-hair"></div>
                    <div class="chibi-head"></div>
                    <div class="chibi-body"></div>
                    <div class="chibi-leg chibi-leg-l"></div>
                    <div class="chibi-leg chibi-leg-r"></div>
                </div>
            </div>
        </div>

        {{-- Progress bar --}}
        <div class="mt-7 h-6 w-72 border-[3px] border-ink bg-white shadow-brut-sm sm:w-96">
            <div id="loading-bar" class="h-full bg-yellow transition-[width] duration-150" style="width: 0%"></div>
        </div>
        <p id="loading-percent" class="mt-3 font-mono text-sm text-white">0%</p>
    </div>
</div>
