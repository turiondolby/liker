<div>
    <form wire:submit.prevent="storePost">
        <div class="mb-3">
            <label for="body" class="sr-only">Post body</label>
            <textarea wire:model.defer="body" id="body" cols="30" rows="3"
                      class="w-full border-2 border-gray-200 rounded-lg @error('body') border-red-500 @enderror"
                      placeholder="Share something..."></textarea>

            @error('body')
            <span class="font-semibold text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="h-10 px-4 text-center text-white bg-indigo-500 rounded-lg font-medium font-semibold">Post</button>
    </form>
</div>
