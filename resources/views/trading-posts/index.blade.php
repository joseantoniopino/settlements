<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ Str::title(__('custom.trading_posts')) }}
        </h2>
    </x-slot>

    <div class="relative overflow-x-auto mt-5 flex justify-center items-center">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mx-3">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    @lang('Nombre')
                </th>
                <th scope="col" class="px-6 py-3">
                    @lang('Descripción')
                </th>
                <th scope="col" class="px-6 py-3">
                    @lang('Origen')
                </th>
                <th scope="col" class="px-6 py-3">
                    @lang('Especialidad')
                </th>
                <th scope="col" class="px-6 py-3">
                    @lang('Antigüedad')
                </th>
                <th scope="col" class="px-6 py-3">
                    @lang('Estado')
                </th>
                <th scope="col" class="px-6 py-3">
                    @lang('Afluencia de visitantes')
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($tradingPosts as $tradingPost)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $tradingPost->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $tradingPost->description }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $tradingPostData['origin']['results'][$tradingPost->origin]['description'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $tradingPostData['specialty']['results'][$tradingPost->specialty]['description'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $tradingPostData['age']['results'][$tradingPost->age]['description'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $tradingPostData['condition']['results'][$tradingPost->condition]['description'] }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $tradingPostData['visitor_traffic']['results'][$tradingPost->visitor_traffic]['description'] }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
