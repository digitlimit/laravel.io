@props(['name', 'value' => null])

<x-forms.inputs.input
    type="email"
    name="{{ $name }}"
    :value="$value"
    {{ $attributes }}
/>
