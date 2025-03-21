<script setup>
import { onMounted, onUnmounted, ref } from "vue";
import mapboxgl from "mapbox-gl";

let map = null; // Store map instance
let userMarker = null; // Store user location marker
const userLocation = ref(null); // Store user coordinates

onMounted(() => {
    mapboxgl.accessToken = "pk.eyJ1IjoiamFqZWIiLCJhIjoiY204OG5najY0MDdtODJqcjFpanpqbDR3ciJ9.V4gFksUjJUd5b0saBnkdyw";

    map = new mapboxgl.Map({
        container: "map",
        style: "mapbox://styles/mapbox/satellite-streets-v12",
        center: [124.887476, 11.137066], // Default center
        zoom: 15,
    });

    map.on("load", () => {
        console.log("Map has loaded!");
        map.addControl(new mapboxgl.NavigationControl());
    });
});

// Function to get user location
const getUserLocation = () => {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const { latitude, longitude } = position.coords;
                userLocation.value = [longitude, latitude];

                // Resize the map before setting the new center
                map.resize();

                // Add or update marker
                if (userMarker) {
                    userMarker.setLngLat(userLocation.value);
                } else {
                    userMarker = new mapboxgl.Marker({ color: "red" })
                        .setLngLat(userLocation.value)
                        .addTo(map);
                }

                // Adjust map bounds to fit the user marker inside the small map area
                map.fitBounds(
                    [userLocation.value, userLocation.value], // Fit around the user location
                    { padding: 50, maxZoom: 15, duration: 1000 } // Ensure the marker is visible
                );
            },
            (error) => {
                console.error("Error getting location:", error);
                alert("Unable to retrieve your location.");
            }
        );
    } else {
        alert("Geolocation is not supported by your browser.");
    }
};

// Cleanup when component unmounts
onUnmounted(() => {
    if (map) {
        map.remove();
        map = null;
    }
});
</script>

<template>
    <h1 class="text-center text-xl font-bold mb-4">Mapbox User Location</h1>
    
    <div class="flex flex-col items-center">
        <!-- Button to get user location -->
        <button 
            @click="getUserLocation" 
            class="mb-4 px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition"
        >
            Get My Location
        </button>

        <!-- Map container with constrained size -->
        <div id="map" class="h-96 w-96 border border-gray-300 rounded-lg shadow bg-red-700"></div>
    </div>
</template>
