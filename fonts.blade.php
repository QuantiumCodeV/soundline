@php
$fonts = [
    ['family' => 'jakarta', 'weight' => 200, 'style' => 'normal', 'file' => 'PlusJakartaSans-ExtraLight'],
    ['family' => 'jakarta', 'weight' => 200, 'style' => 'italic', 'file' => 'PlusJakartaSans-ExtraLightItalic'],
    ['family' => 'jakarta', 'weight' => 300, 'style' => 'normal', 'file' => 'PlusJakartaSans-Light'],
    ['family' => 'jakarta', 'weight' => 300, 'style' => 'italic', 'file' => 'PlusJakartaSans-LightItalic'],
    ['family' => 'jakarta', 'weight' => 400, 'style' => 'normal', 'file' => 'PlusJakartaSans-Regular'],
    ['family' => 'jakarta', 'weight' => 400, 'style' => 'italic', 'file' => 'PlusJakartaSans-Italic'],
    ['family' => 'jakarta', 'weight' => 500, 'style' => 'normal', 'file' => 'PlusJakartaSans-Medium'],
    ['family' => 'jakarta', 'weight' => 500, 'style' => 'italic', 'file' => 'PlusJakartaSans-MediumItalic'],
    ['family' => 'jakarta', 'weight' => 600, 'style' => 'normal', 'file' => 'PlusJakartaSans-SemiBold'],
    ['family' => 'jakarta', 'weight' => 600, 'style' => 'italic', 'file' => 'PlusJakartaSans-SemiBoldItalic'],
    ['family' => 'jakarta', 'weight' => 700, 'style' => 'normal', 'file' => 'PlusJakartaSans-Bold'],
    ['family' => 'jakarta', 'weight' => 700, 'style' => 'italic', 'file' => 'PlusJakartaSans-BoldItalic'],
    ['family' => 'jakarta', 'weight' => 800, 'style' => 'normal', 'file' => 'PlusJakartaSans-ExtraBold'],
    ['family' => 'jakarta', 'weight' => 800, 'style' => 'italic', 'file' => 'PlusJakartaSans-ExtraBoldItalic'],
    ['family' => 'listenup-title', 'weight' => 400, 'style' => 'normal', 'file' => 'ListenUpTitle-Regular'],
    ['family' => 'listenup-title', 'weight' => 400, 'style' => 'italic', 'file' => 'ListenUpTitle-RegularItalic'],
    ['family' => 'listenup-title', 'weight' => 500, 'style' => 'normal', 'file' => 'ListenUpTitle-Medium'],
    ['family' => 'listenup-title', 'weight' => 500, 'style' => 'italic', 'file' => 'ListenUpTitle-MediumItalic'],
    ['family' => 'listenup-title', 'weight' => 700, 'style' => 'normal', 'file' => 'ListenUpTitle-Bold'],
    ['family' => 'listenup-title', 'weight' => 700, 'style' => 'italic', 'file' => 'ListenUpTitle-BoldItalic'],
];
@endphp

<style>
    @foreach ($fonts as $font)
    @font-face {
        font-family: {{ $font['family'] }};
        font-weight: {{ $font['weight'] }};
        font-style: {{ $font['style'] }};
        src: url({{ asset("assets/{$font['file']}.woff2") }}) format("woff2");
    }
    @endforeach
</style>