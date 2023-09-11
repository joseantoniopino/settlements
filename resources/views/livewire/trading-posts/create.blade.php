<div>
    <form wire:submit="save()" class="relative mx-auto h-auto mt-5 p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700 grid items-stretch grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 place-items-center">

        @foreach ($tradingPostData as $type => $data)
            <x-trading-posts.attribute wire:key="{{ $type }}" :data="$data" :type="$type" />
        @endforeach

        <div class="md:absolute flex md:right-0 md:bottom-0">
            <button type="submit" class="w-auto h-auto rounded text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 md:mr-10 md:mt-10 mb-3">
                {{ __('Save') }}
            </button>
        </div>

    </form>

</div>

