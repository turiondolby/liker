<div>
    <form action="">
         <img src="{{ auth()->user()->profilePhoto() }}" alt="{{ auth()->user()->name }}"
             class="w-12 h-12 rounded-full mb-3">

        <label for="photo" class="w-full text-xs text-indigo-500 block text-center cursor-pointer">
            Change
        </label>

        <input type="file" name="photo" id="photo" class="sr-only">

        {{--<button class="w-full text-xs text-indigo-500 block text-center cursor-pointer">
            Confirm
        </button>--}}
    </form>
</div>
