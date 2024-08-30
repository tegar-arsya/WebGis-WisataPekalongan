<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Peta Potensi') }}</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                {{-- map1 --}}
                                <div id="map" style="width: 100%; height: 600px;" wire:ignore></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @push('scripts')
    <script>
        document.addEventListener('livewire:load', () => {
            var map = L.map('map').setView([-6.904759363959541, 109.67295744148764], 10);
    
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
    
            var customIcon = L.icon({
                iconUrl: '/marker.png',
                iconSize: [32, 32],
                iconAnchor: [16, 32],
                popupAnchor: [0, -32]
            });
    
            var petas = {!! json_encode($petas->toArray()) !!};
            var markers = [];
    
            petas.forEach(function(item) {
                var marker = L.marker([item.latitude, item.longitude], {
                    title: item.nama_wisata,
                    icon: customIcon
                }).addTo(map)
                .bindPopup(
                    '<b>ID:</b> ' + item.id + '<br>' +
                    '<b>Wisata:</b> ' + item.nama_wisata + '<br>' +
                    '<b>Kategori:</b> ' + item.nama_kategori + '<br>' +
                    '<b>Deskripsi:</b>' + item.deskripsi + '<br>' +
                    '<button onclick="routeToMarker(' + item.latitude + ', ' + item.longitude + ')">Route to here</button>'
                );
    
                markers.push(marker);
            });
    
            map.pm.addControls({
                position: 'topleft',
                drawCircle: false,
                drawMarker: false,
                drawPolyline: false,
                drawRectangle: false,
                drawCircleMarker: false,
                drawPolygon: false,
                cutPolygon: false,
                editMode: false,
                dragMode: false,
                removalMode: false,
            });
    
            var userMarker = null;
            var routingControl = null;
    
            // Function to route from user's location to the selected marker
            window.routeToMarker = function(lat, lng) {
                if (navigator.geolocation) {
                    // Watch the user's position in real-time
                    var watchId = navigator.geolocation.watchPosition(function(position) {
                        var userLat = position.coords.latitude;
                        var userLng = position.coords.longitude;
    
                        var userLocation = [userLat, userLng];
                        var markerLocation = [lat, lng];
    
                        // Update user marker or create it if it doesn't exist
                        if (userMarker) {
                            userMarker.setLatLng(userLocation);
                        } else {
                            userMarker = L.marker(userLocation, {
                                icon: L.icon({
                                    iconUrl: '/user-location.png',
                                    iconSize: [32, 32],
                                    iconAnchor: [16, 32],
                                    popupAnchor: [0, -32]
                                })
                            }).addTo(map).bindPopup('You are here');
                        }
    
                        // Update routing control or create it if it doesn't exist
                        if (routingControl) {
                            routingControl.getPlan().setWaypoints([L.latLng(userLocation), L.latLng(markerLocation)]);
                        } else {
                            routingControl = L.Routing.control({
                                waypoints: [
                                    L.latLng(userLocation),
                                    L.latLng(markerLocation)
                                ],
                                routeWhileDragging: true,
                                createMarker: function() { return null; }, // Disable default markers
                                addWaypoints: false, // Disable adding waypoints
                                show: false, // Disable showing detailed steps
                                lineOptions: {
                                    styles: [{ color: '#6FA1EC', weight: 4 }]
                                },
                                router: L.Routing.osrmv1(),
                                formatter: new L.Routing.Formatter(),
                                summaryTemplate: function() { return ''; }, // Empty summary
                                containerClassName: '' // Ensure no additional container for summary
                            }).addTo(map);
                        }
    
                        // Adjust the map view to show both user location and destination
                        var bounds = L.latLngBounds([userLocation, markerLocation]);
                        map.fitBounds(bounds, { padding: [50, 50] });
    
                    }, function(error) {
                        console.error('Error getting location: ', error);
                    }, {
                        enableHighAccuracy: true,
                        maximumAge: 10000,
                        timeout: 5000
                    });
                } else {
                    alert("Geolocation is not supported by this browser.");
                }
            };
    
            // Hide the Leaflet routing machine UI
            var style = document.createElement('style');
            style.innerHTML = '.leaflet-routing-container { display: none !important; }';
            document.head.appendChild(style);

        });
    </script>
    
    
    @endpush
    


    @push('head')
<link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
@endpush
@push('scripts')
<script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
@endpush

</div>