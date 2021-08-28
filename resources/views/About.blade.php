@foreach ($Datakey as $CountryName)

{{-- Index --}}

{{-- {{$loop->index}} --}}

{{-- Loop Count --}}

{{-- {{$loop->count}} --}}

{{-- @if ($loop->even) --}}
{{-- @if ($loop->odd) --}}
{{-- @if ($loop->first) --}}
@if ($loop->last)

{{ $CountryName}}

@break

@endif


@endforeach
