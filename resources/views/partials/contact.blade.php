<section id="contact" class="scroll-mt-24 relative overflow-hidden bg-ink px-5 py-16 text-paper sm:py-24">
    <div class="blob pointer-events-none absolute -right-16 -bottom-16 h-56 w-56 border-[3px] border-paper/40 bg-blue/20"></div>
    <div class="mx-auto max-w-3xl">
        <span class="tag-mono text-paper/50">07 — say_hello()</span>
        <h2 class="section-title reveal mt-2 text-paper">Let's Work Together</h2>
        <p class="mt-4 max-w-xl text-paper/70">
            Ada proyek, kerja sama, atau sekadar mau nanya-nanya soal kode? Isi form di bawah,
            atau hubungi langsung lewat email di <span class="text-yellow">{{ $profile['email'] }}</span>.
        </p>

        @if (session('success'))
            <div class="mt-6 border-[3px] border-mint bg-mint/10 px-4 py-3 font-mono text-sm text-mint">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.send') }}" class="mt-8 space-y-5">
            @csrf

            <div>
                <label for="name" class="tag-mono text-paper/60">Nama</label>
                <input
                    id="name" name="name" type="text" value="{{ old('name') }}"
                    class="mt-1.5 w-full border-[3px] border-paper bg-ink px-4 py-3 text-paper placeholder:text-paper/30 focus:bg-paper/5 focus:outline-none"
                    placeholder="Nama kamu"
                >
                @error('name') <p class="mt-1 font-mono text-xs text-pink">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="email" class="tag-mono text-paper/60">Email</label>
                <input
                    id="email" name="email" type="email" value="{{ old('email') }}"
                    class="mt-1.5 w-full border-[3px] border-paper bg-ink px-4 py-3 text-paper placeholder:text-paper/30 focus:bg-paper/5 focus:outline-none"
                    placeholder="email@contoh.com"
                >
                @error('email') <p class="mt-1 font-mono text-xs text-pink">{{ $message }}</p> @enderror
            </div>

            <div>
                <label for="message" class="tag-mono text-paper/60">Pesan</label>
                <textarea
                    id="message" name="message" rows="4"
                    class="mt-1.5 w-full border-[3px] border-paper bg-ink px-4 py-3 text-paper placeholder:text-paper/30 focus:bg-paper/5 focus:outline-none"
                    placeholder="Ceritakan proyekmu..."
                >{{ old('message') }}</textarea>
                @error('message') <p class="mt-1 font-mono text-xs text-pink">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="brut-btn">Kirim Pesan</button>
        </form>
    </div>
</section>
