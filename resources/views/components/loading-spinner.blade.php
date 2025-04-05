<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hidden"
    {{ $attributes->merge(['wire:loading.class.remove' => 'hidden']) }}>
    <th scope="row" colspan="{{$colspan}}">
        <div class="flex flex-row gap-2 justify-center px-6 py-3">
            <div class="w-4 h-4 rounded-full bg-blue-700 animate-bounce"></div>
            <div class="w-4 h-4 rounded-full bg-blue-700 animate-bounce [animation-delay:-.3s]"></div>
            <div class="w-4 h-4 rounded-full bg-blue-700 animate-bounce [animation-delay:-.5s]"></div>
        </div>
    </th>
</tr>
