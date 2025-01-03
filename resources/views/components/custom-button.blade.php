@if(is_object($valor))
    <a href="{{ $url . $valor->id }}" {{ $attributes->merge([
        'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest focus:outline-none focus:ring-2 focus:ring-offset-2 transition ease-in-out duration-150',
        'style' => 'background-color: yellow; display: inline-block; text-decoration: none;'
    ]) }}>
        {{ $slot }}
    </a>
@endif

