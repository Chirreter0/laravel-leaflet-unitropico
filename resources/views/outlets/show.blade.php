@extends('layouts.app')

@section('title', __('outlet.detail'))

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">{{ __('outlet.detail') }}</div>
            <div class="card-body">
                <table class="table table-sm">
                    <tbody>
                        <tr><td>{{ __('outlet.name') }}</td><td>{{ $outlet->name }}</td></tr>
                        <tr><td>{{ __('outlet.address') }}</td><td>{{ $outlet->address }}</td></tr>
                        <tr><td>{{ __('outlet.latitude') }}</td><td>{{ $outlet->latitude }}</td></tr>
                        <tr><td>{{ __('outlet.longitude') }}</td><td>{{ $outlet->longitude }}</td></tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                @can('update', $outlet)
                    <a href="{{ route('outlets.edit', $outlet) }}" id="edit-outlet-{{ $outlet->id }}" class="btn btn-warning">{{ __('outlet.edit') }}</a>
                @endcan
                @if(auth()->check())
                    <a href="{{ route('outlets.index') }}" class="btn btn-link">{{ __('outlet.back_to_index') }}</a>
                @else
                    <a href="{{ route('outlet_map.index') }}" class="btn btn-link">{{ __('outlet.back_to_index') }}</a>
                @endif
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">{{ trans('outlet.location') }}</div>
            @if ($outlet->coordinate)
            <div class="card-body" id="mapid"></div>
            @else
            <div class="card-body">{{ __('outlet.no_coordinate') }}</div>
            @endif
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>

<style>
    #mapid { height: 400px; }
</style>
@endsection
@push('scripts')
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>

<script>
    var map = L.map('mapid').setView([{{ $outlet->latitude }}, {{ $outlet->longitude }}], {{ config('leaflet.detail_zoom_level') }});

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([{{ $outlet->latitude }}, {{ $outlet->longitude }}]).addTo(map)
        .bindPopup('{!! $outlet->map_popup_content !!}');
</script>
@endpush
