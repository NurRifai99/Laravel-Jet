<div>
    <form wire:submit.prevent="store">
        <input type="text" wire:model="title" class="@error('title') is-invalid @enderror" placeholder="Masukkan Title">
        <textarea wire:model="content" class=" @error('content') is-invalid @enderror" rows="4" placeholder="Masukkan Konten"></textarea>

        <button type="submit">Kirim</button>
    </form>
</div>
