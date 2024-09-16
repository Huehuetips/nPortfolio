<div class="h-full">
    <div class="flex border-b gap-x-3 justify-center flex-wrap">
        @foreach ($tabs as $index => $tab)
            <button wire:click="setActiveTab({{ $index }})" 
                    class="py-2 px-4 rounded-t-lg {{ $activeTab === $index ? 'bg-white border-l border-t border-r text-blue-700' : 'bg-gray-200 text-gray-700' }}">
                {{ $tab['title'] }}
            </button>
        @endforeach
    </div>
    <div class="h-[calc(100%-3rem)] p-8 bg-zinc-100 dark:bg-neutral-800">
        @if(isset($tabs[$activeTab]['component']))
            @if(str_starts_with($tabs[$activeTab]['component'], 'x-'))
                @php
                    $componentName = str_replace('x-', '', $tabs[$activeTab]['component']);
                @endphp
                <x-dynamic-component :component="$componentName" />
            @else
                @livewire($tabs[$activeTab]['component'], $tabs[$activeTab]['params'] ?? [], key($activeTab))
            @endif
        @else
            {!! $tabs[$activeTab]['content'] ?? '' !!}
        @endif
    </div>
</div>