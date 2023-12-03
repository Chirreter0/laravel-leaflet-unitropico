@extends('layouts.app')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Unitropico-mapa</title>

    @section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
          crossorigin=""/>
    <link rel="stylesheet" href="./css/syle.css">
    <link rel="stylesheet" href="dist/leaflet-control-credits.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
    @endsection
</head>
<body>
<div id="map"></div>

@push('scripts')
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
<script type="text/javascript" src="dist/leaflet-control-credits.js"> </script>
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

<script>
    // Creamos el mapa
    var map = L.map('map').setView([{{ config('leaflet.map_center_latitude') }}, {{ config('leaflet.map_center_longitude') }}], {{ config('leaflet.zoom_level') }});

    // Render, zoom y atribucion
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);

    // Marcas
    var markers = L.markerClusterGroup();

    axios.get('{{ route('api.outlets.index') }}')
        .then(function (response) {
            var marker = L.geoJSON(response.data, {
                pointToLayer: function(geoJsonPoint, latlng) {
                    return L.marker(latlng).bindPopup(function (layer) {
                        return layer.feature.properties.address;
                    });
                }
            });
            markers.addLayer(marker);
        })
        .catch(function (error) {
            console.log(error);
        });
    map.addLayer(markers);



    // Traer geolocalizacion
    navigator.geolocation.watchPosition(success,error);

    function success(pos) {
        const lat = pos.coords.latitude;
        const lon = pos.coords.longitude;
        const accuracy = pos.coords.accuracy;

        L.marker([lat,lon]).addTo(map);
        L.circle([lat,lon],{radius: accuracy}).addTo(map);

    }

    function error(err) {
        if (err.code === 1) {
            alert("Activa el acceso a la Geolocalizacion")
        }else{
            alert("No se puede traer la Geolocalizacion")
        }
    }

    // Crear creditos
    credits = L.controlCredits({
        imageurl: './escudo.png',
        imagealt: 'Unitropico creditos',
        tooltip: 'Hecho por Unitropico - Ing Sistemas',
        width: '56px',
        height: '93px',
        expandcontent: 'Mapa Interactivo<br/>por <a href="https://www.unitropico.edu.co/" target="_blank">Unitropico</a>',
    }).addTo(map);
</script>
@endpush
</body>
</html>
