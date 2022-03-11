<div>
    <form action="#" wire:submit.prevent="storePhoto" class="flex flex-col justify-between items-center">
        <img src="@if ($photo) {{ $photo->temporaryUrl() }} @else {{ auth()->user()->profilePhoto() }} @endif"
             alt="{{ auth()->user()->name }}" class="w-12 h-12 rounded-full mb-3">

        @if ($photo)
            <button type="submit" class="w-full text-xs text-indigo-500 block text-center cursor-pointer">
                Confirm
            </button>

            <button wire:click.prevent="$set('photo', null)" type="button" class="w-full text-xs text-indigo-500 block text-center cursor-pointer">
                Cancel
            </button>
        @else
            <label for="photo" class="w-full text-xs text-indigo-500 block text-center cursor-pointer">
                Change
            </label>
        @endif

        @error('photo')
            <span class="font-semibold text-red-500 text-xs mt-2">{{ $message }}</span>
        @enderror

        <input wire:model="photo" type="file" name="photo" id="photo" class="sr-only">
    </form>
</div>
