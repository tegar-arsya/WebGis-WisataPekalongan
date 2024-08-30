<div>

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="#">FAQs</a>
                        <span class="text-white mx-2">|</span>
                        <a class="text-white px-3" href="#">Help</a>
                        <span class="text-white mx-2">|</span>
                        <a class="text-white pl-3" href="#">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="#" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="#" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="#" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="#" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="#" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0"style="background-color: #3498db;">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary" style="font-family: Open Sans;">
                        <span class="text-primary">
                            <img src="{{ url('/') }}/pekalonganJPG.png" alt="Logo" style="height: 50px;">
                        </span>
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="#home" class="nav-item nav-link active"
                            style="color: #000000; transition: color 0.2s ease;">Home</a>
                        <a href="#visimisi" class="nav-item nav-link"
                            style="color: #000000; transition: color 0.2s ease;">Visi Misi</a>
                        <a href="#struktur" class="nav-item nav-link"
                            style="color: #000000; transition: color 0.2s ease;">Struktur Organisasi</a>
                        <a href="#infotanah" class="nav-item nav-link"
                            style="color: #000000; transition: color 0.2s ease;">Informasi Tanah</a>
                        <a href="#desa" class="nav-item nav-link"
                            style="color: #000000; transition: color 0.2s ease;">Data Desa/Kel.</a>
                        <a href="#lahan" class="nav-item nav-link"
                            style="color: #000000; transition: color 0.2s ease;">Data Lahan</a>
                        <a href="#potensi" class="nav-item nav-link"
                            style="color: #000000; transition: color 0.2s ease;">Peta Potensi</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div id="home" class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ url('/') }}/img/pekalongan.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Selamat datang di website</h4>
                            <h2 class="display-4 text-white mb-md-4 text-bold text-uppercase ">Wisata<br> Kabupaten
                                Pekalongan</h2>
                            {{-- <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Contact Info Start -->
    <div class="container-fluid contact-info mt-5 mb-4">
        <div class="container" style="padding: 0 30px;">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0"
                    style="height: 100px; padding: 20px;">
                    <div class="d-inline-flex">
                        <i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-bold" style="font-size: 18px;">Lokasi</h5>
                            <p class="m-0 text-white" style="font-size: 14px;"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0"
                    style="height: 100px; padding: 20px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-envelope text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-bold" style="font-size: 18px;">Email</h5>
                            <p class="m-0 text-white" style="font-size: 14px;">.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0"
                    style="height: 100px; padding: 20px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-phone-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-bold" style="font-size: 18px;">Telepon</h5>
                            <p class="m-0 text-white" style="font-size: 14px;"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->

    <!-- About Start -->
    <div id="visimisi" class="container-fluid py-5">
        <div class="container pt-0 pt-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="{{ url('/') }}/img/pekalongan.jpg" alt=""
                        style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3" style="letter-spacing: 2px;">
                        Tentang Visi Misi</h6>
                    <h1 class="mb-4" style="font-size: 36px; font-weight: bold;">Visi</h1>
                    <h5 class="font-weight-medium font-italic mb-5" style="color: #666; font-size: 20px;">"Menjadikan
                        Kolaka Timur Sejahtera Bersama Masyarakat Kolaka Timur yang Agamis, Maju, Mandiri dan
                        Berkeadilan"</h5>
                    <h1 class="mb-3" style="font-size: 36px; font-weight: bold;">Misi</h1>
                    <div class="row">
                        <div class="col-sm-12 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2" style="font-size: 20px;"></i>
                                <p class="text-secondary font-weight-medium m-0" style="font-size: 18px;">Penguatan
                                    Tata Kelola Pemerintahan yang Baik, Bersih dan Transparan Melayani Masyarakat</p>
                            </div>
                        </div>
                        <div class="col-sm-12 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2" style="font-size: 20px;"></i>
                                <p class="text-secondary font-weight-medium m-0" style="font-size: 18px;">Peningkatan
                                    Ekonomi Masyarakat dan Produktifitas Pertanian, Perkebunan, Penguatan UMKM,
                                    Koperasi, dan Pelaku Usaha</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div id="infotanah" class="container-fluid pt-5 pb-3">
    <div class="container">
        <h6 class="text-primary text-uppercase text-center font-weight-medium mb-3">Tentang</h6>
        <h1 class="display-4 text-center mb-5">Kategori</h1>
        <div class="row">
            @foreach ($kategoris as $kategori)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="bg-light text-center mb-2 pt-4 shadow-sm rounded kategori-card" 
                         data-kategori-id="{{ $kategori->id }}"
                         onclick="showKategoriMap({{ $kategori->id }}, '{{ $kategori->nama_kategori }}')">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-warning rounded-circle shadow mt-2 mb-4"
                            style="width: 200px; height: 200px; border: 15px solid #cd03ff;">
                            <h3 class="text-primary font-weight-bold">
                                {{ $kategori->nama_kategori }}
                            </h3>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Tambahkan modal untuk peta kategori -->
<div class="modal fade" id="kategoriMapModal" tabindex="-1" role="dialog" aria-labelledby="kategoriMapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kategoriMapModalLabel">Peta Wisata Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="kategoriMap" style="height: 400px;"></div>
            </div>
        </div>
    </div>
</div>
    <!-- Pricing Plan End -->

    <!-- Services Start -->
    <div id="desa" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-primary text-uppercase text-center font-weight-medium mb-3">Tentang</h6>
            <h1 class="display-4 text-center mb-5">Wisata</h1>
            <!-- Formulir Pencarian -->
            <div class="text-center mb-4">
                <input type="text" id="searchInput" class="form-control w-50 mx-auto"
                    placeholder="Cari wisata berdasarkan nama...">
            </div>
            <div class="row" id="wisataContainer">
                @foreach ($wisata as $wisata)
                    <div class="col-lg-3 col-md-6 pb-1 desas-item" data-nama="{{ $wisata->nama_wisata }}">
                        <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4 desa-card"
                            style="height: 400px; cursor: pointer;"
                            onclick="openModal(
                            '{{ $wisata->id }}',
                                '{{ $wisata->nama_wisata }}',
                                '{{ $wisata->nama_kategori }}',
                                `{{ addslashes($wisata->deskripsi) }}`,
                                  {{ json_encode(array_map('asset', $wisata->images)) }},
                                {{ $wisata->latitude }},
                                {{ $wisata->longitude }},
                            )">
                            
                            <div class="d-inline-flex align-items-center justify-content-center bg-success shadow rounded-circle mb-4 shadow"
                                style="width: 200px; height: 200px;">
                                @if(is_array($wisata->images) && count($wisata->images) > 0)
                                <!-- Loop through each image -->
                                <img src="{{ asset($wisata->images[0]) }}" class="img-fluid "
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            @endif
                            </div>
                            <h3 class="font-weight-bold m-0 mb-1 text-uppercase">{{ $wisata->nama_wisata }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="wisataModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle"
    aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle">Nama Wisata</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="carouselImages" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" id="modalImageContainer"></div>
                    <a class="carousel-control-prev" href="#carouselImages" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselImages" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
               
                <p><strong>Nama Wisata:</strong> <span id="modalNama"></span></p>
                <p><strong>Kategori:</strong> <span id="modalKategori"></span></p>
                <p><strong>Deskripsi:</strong> <span id="modalDeskripsi"></span></p>

                <div class="m-2" id="mapModal" style="height: 600px;" wire:ignore></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


    <!-- Services End -->



    <!-- Features Start -->
    <div id="lahan" class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h6 class="text-primary text-uppercase font-weight-medium mb-3">Tentang</h6>
                    <h1 class="mb-4 text-primary">Data Wisata</h1>
                    <p class="text-danger font-weight-bold">Berikut data wisata berdasarkan data pada wisata
                        kabupaten Pekalongan:</p>
                    <div class="row">
                        <h5 class="font-weight-bold text-success">Total Kategori Wisata:</h5>
                        <div class="col-sm-6 mb-4 d-flex">
                            <h1 class="text-danger" data-toggle="counter-up">{{ $kategoris->count() }} </h1>
                            <span class="text-center font-weight-bold align-items-center text-danger"
                                style="display:flex"> Kategori</span>
                        </div>
                        <h5 class="font-weight-bold text-success">Total Wisata:</h5>
                        <div class="col-sm-6 mb-4 d-flex">
                            <h1 class="text-danger" data-toggle="counter-up">{{ $wisata->count() }} </h1>
                            <span class="text-center font-weight-bold align-items-center text-danger"
                                style="display:flex"> Objek Wisata<sup></sup></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-light h-100 py-5 px-3">
                        <img src="pekalonganJPG.png"
                            alt="" class="img-fluid m-2" width="30%">
                        <img src="{{ asset('img/pekalongan.jpg') }}" alt="" class="img-fluid m-2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

    <!-- Pricing Plan Start -->
    <div id="potensi" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Tentang</h6>
            <h1 class="display-4 text-center mb-5">Peta Potensi</h1>
            <div class="row">
                <div class="col-lg-12 col-sm-12 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        {{-- peta --}}
                        <div class="m-2" id="map" style="height: 600px;" wire:ignore></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">Sistem Informasi Geografis Wisata
                Kabupaten Pekalongan</a>. All Rights Reserved. Designed by
            <a class="text-white font-weight-medium" href="#">#</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
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
                            '<button style="background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;" onclick="routeToMarker(' +
                            item.latitude + ', ' + item.longitude + ')">Route to here</button>'
                        );

                    markers.push(marker);
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
                                        iconUrl: '/location.png',
                                        iconSize: [32, 32],
                                        iconAnchor: [16, 32],
                                        popupAnchor: [0, -32]
                                    })
                                }).addTo(map).bindPopup('You are here');
                            }

                            // Update routing control or create it if it doesn't exist
                            if (routingControl) {
                                routingControl.getPlan().setWaypoints([L.latLng(userLocation), L.latLng(
                                    markerLocation)]);
                            } else {
                                routingControl = L.Routing.control({
                                    waypoints: [
                                        L.latLng(userLocation),
                                        L.latLng(markerLocation)
                                    ],
                                    routeWhileDragging: true,
                                    createMarker: function() {
                                        return null;
                                    }, // Disable default markers
                                    addWaypoints: false, // Disable adding waypoints
                                    show: false, // Disable showing detailed steps
                                    lineOptions: {
                                        styles: [{
                                            color: '#6FA1EC',
                                            weight: 4
                                        }]
                                    },
                                    router: L.Routing.osrmv1(),
                                    formatter: new L.Routing.Formatter(),
                                    summaryTemplate: function() {
                                        return '';
                                    }, // Empty summary
                                    containerClassName: '' // Ensure no additional container for summary
                                }).addTo(map);
                            }

                            // Adjust the map view to show both user location and destination
                            var bounds = L.latLngBounds([userLocation, markerLocation]);
                            map.fitBounds(bounds, {
                                padding: [50, 50]
                            });

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
    <script>
        function openModal(id, nama_wisata, nama_kategori, deskripsi, imageUrl, latitude, longitude) {
            document.getElementById('modalTitle').textContent = nama_wisata;
            document.getElementById('modalNama').textContent = nama_wisata;
            document.getElementById('modalKategori').textContent = nama_kategori;
            document.getElementById('modalDeskripsi').innerHTML = deskripsi.replace(/\n/g, '<br>');
            
            const modalImageContainer = document.getElementById('modalImageContainer');
            modalImageContainer.innerHTML = '';

            // Check if imageUrl is an array and contains images
            if (Array.isArray(imageUrl) && imageUrl.length > 0) {
            imageUrl.forEach(function(url, index) {
                const divElement = document.createElement('div');
                divElement.classList.add('carousel-item');
                if (index === 0) {
                    divElement.classList.add('active'); // Set the first image as active
                }

                const imgElement = document.createElement('img');
                imgElement.src = url;
                imgElement.classList.add('d-block', 'w-100');
                divElement.appendChild(imgElement);
                modalImageContainer.appendChild(divElement);
            });
        }
            $('#wisataModal').modal('show');

            $('#wisataModal').on('shown.bs.modal', function() {
                // Membuat map pada modal
                var mapModal = L.map('mapModal').setView([latitude, longitude], 15);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                }).addTo(mapModal);

                // Menambahkan marker pada map modal
                var markerModal = L.marker([latitude, longitude]).addTo(mapModal);
                markerModal.bindPopup(nama_wisata);

                // Menambahkan rute ke marker
                var userMarker = null;
                var routingControl = null;

                function routeToMarker(lat, lng) {
                    if (navigator.geolocation) {
                        navigator.geolocation.watchPosition(function(position) {
                            var userLat = position.coords.latitude;
                            var userLng = position.coords.longitude;

                            var userLocation = [userLat, userLng];
                            var markerLocation = [lat, lng];

                            if (userMarker) {
                                userMarker.setLatLng(userLocation);
                            } else {
                                userMarker = L.marker(userLocation, {
                                    icon: L.icon({
                                        iconUrl: '/location.png',
                                        iconSize: [32, 32],
                                        iconAnchor: [16, 32],
                                        popupAnchor: [0, -32]
                                    })
                                }).addTo(mapModal).bindPopup('You are here');
                            }

                            if (routingControl) {
                                routingControl.getPlan().setWaypoints([L.latLng(userLocation), L.latLng(
                                    markerLocation)]);
                            } else {
                                routingControl = L.Routing.control({
                                    waypoints: [
                                        L.latLng(userLocation),
                                        L.latLng(markerLocation)
                                    ],
                                    routeWhileDragging: true,
                                    createMarker: function() {
                                        return null;
                                    },
                                    addWaypoints: false,
                                    show: false,
                                    lineOptions: {
                                        styles: [{
                                            color: '#6FA1EC',
                                            weight: 4
                                        }]
                                    },
                                    router: L.Routing.osrmv1(),
                                    formatter: new L.Routing.Formatter(),
                                    summaryTemplate: function() {
                                        return '';
                                    },
                                    containerClassName: ''
                                }).addTo(mapModal);
                            }

                            var bounds = L.latLngBounds([userLocation, markerLocation]);
                            mapModal.fitBounds(bounds, {
                                padding: [50, 50]
                            });

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
                }

                routeToMarker(latitude, longitude);
            });
        }
        // Event listener untuk menutup modal dengan klik tombol close
        document.querySelector('.close').addEventListener('click', function() {
            $('#wisataModal').modal('hide');
        });

        // Event listener untuk tombol tutup modal di footer
        document.querySelector('.btn-secondary').addEventListener('click', function() {
            $('#wisataModal').modal('hide');
        });
        window.addEventListener('openModal', event => {
        $('#wisataModal').modal('show');

    });
    </script>
    <script>
        document.getElementById('searchInput').addEventListener('input', function() {
            var searchValue = this.value.toLowerCase();
            var wisataItems = document.querySelectorAll('#wisataContainer .desas-item');

            wisataItems.forEach(function(item) {
                var namaWisata = item.getAttribute('data-nama').toLowerCase();
                if (namaWisata.includes(searchValue)) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    </script>

</div>
