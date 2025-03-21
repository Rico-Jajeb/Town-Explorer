<script setup>
    import { onMounted } from "vue";
    import mapboxgl from "mapbox-gl";

    onMounted(() => {
    mapboxgl.accessToken =
        "pk.eyJ1IjoiamFqZWIiLCJhIjoiY204OG5najY0MDdtODJqcjFpanpqbDR3ciJ9.V4gFksUjJUd5b0saBnkdyw";

    const map = new mapboxgl.Map({
        container: "map", // Container ID
        style: "mapbox://styles/mapbox/satellite-streets-v12", // Map style
        center: [124.887476, 11.137066], // Starting position [lng, lat]
        zoom: 15, // Starting zoom
    });

    // Optional: Add navigation controls
    map.addControl(new mapboxgl.NavigationControl());


    });
</script>

<template>
    <h1>hello World</h1>
    <div id="map" class="h-96 w-96 m-auto">map</div>
</template>


