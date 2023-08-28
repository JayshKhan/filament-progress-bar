@php use function Filament\Support\prepare_inherited_attributes; @endphp
@php
    //   get the Values Fro The Functions
@endphp

@props([
'value' => 0, // Default progress value (0-100)
'max' => 100, // Maximum progress value
'bgColor' => 'bg-blue-500', // Background color
'textColor' => 'text-white', // Text color
])
<x-dynamic-component :component="$getFieldWrapperView()" :field="$field">
    <x-filament::input.wrapper
        :disabled="$isDisabled"
        :inline-prefix="$isPrefixInline"
        :inline-suffix="$isSuffixInline"
        :prefix="$prefixLabel"
        :prefix-actions="$prefixActions"
        :prefix-icon="$prefixIcon"
        :suffix="$suffixLabel"
        :suffix-actions="$suffixActions"
        :suffix-icon="$suffixIcon"
        :valid="! $errors->has($statePath)"
        class="fi-fo-text-input"
        :attributes="
            prepare_inherited_attributes($getExtraAttributeBag())
                ->class(['overflow-hidden'])
        "
    >


        <div class="relative pt-1">
            <div class="flex mb-2 items-center justify-between">
                <div>
                    <span class="text-xs font-semibold inline-block py-1 {{ $textColor }}">{{ $slot }}</span>
                </div>
                <div class="text-right">
                    <span
                        class="text-xs font-semibold inline-block text-{{ $value <= 50 ? 'white' : 'black' }} {{ $textColor }}">{{ $value }}%</span>
                </div>
            </div>
            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded {{ $bgColor }}">
                <div style="width:{{ $value }}%"
                     class="shadow-none flex flex-col text-center whitespace-nowrap {{ $textColor }}"></div>
            </div>
        </div>

    </x-filament::input.wrapper>
</x-dynamic-component>
