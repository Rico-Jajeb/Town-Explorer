<script setup>
    import { onMounted } from "vue";
    import mapboxgl from "mapbox-gl";

    onMounted(() => {
    mapboxgl.accessToken =
        "pk.eyJ1IjoiamFqZWIiLCJhIjoiY204OG5najY0MDdtODJqcjFpanpqbDR3ciJ9.V4gFksUjJUd5b0saBnkdyw";

    const map = new mapboxgl.Map({
        container: "map", // Container ID
        style: "mapbox://styles/mapbox/streets-v11", // Map style
        center: [-74.5, 40], // Starting position [lng, lat]
        zoom: 9, // Starting zoom
    });

    // Optional: Add navigation controls
    map.addControl(new mapboxgl.NavigationControl());
    });
</script>

<template>
    <h1>hello World</h1>
    <div id="map">map</div>
</template>


