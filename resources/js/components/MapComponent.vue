<template>
    <div id="map" style="height: 500px;"><p>dadada</p></div>
  </template>
  
  <script>
  import L from 'leaflet';
  
  export default {
    mounted() {
      this.initializeMap();
    },
    methods: {
      initializeMap() {
        const map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          maxZoom: 19,
        }).addTo(map);
  
        this.addFogOfWar(map);
      },
      addFogOfWar(map) {
        const fogLayer = L.canvasOverlay().addTo(map);
  
        fogLayer.draw = function() {
          const ctx = this.getCanvas().getContext('2d');
          ctx.fillStyle = 'rgba(0, 0, 0, 0.5)';
          ctx.fillRect(0, 0, this.getCanvas().width, this.getCanvas().height);
  
          // Example of clearing a small circle
          ctx.clearRect(200, 200, 50, 50);
        };
      }
    }
  };
  </script>
  
  <style scoped>
  #map {
    height: 100%;
  }
  </style>
  