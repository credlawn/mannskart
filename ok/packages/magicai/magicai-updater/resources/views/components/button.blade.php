@if($permission)
    <x-button
        id="submit-buttong"
        variant="ghost-shadow"
        class="w-full"
        size="lg"
        type="submit"
    >
        {{ $text }}
    </x-button>
@else
    <x-button
        class="w-full"
        size="lg"
        type="submit"
        disabled
    >
        {{ $text }}
    </x-button>
@endif
