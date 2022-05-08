<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bs.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/> 
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        body {
            font-family: 'Poppins';font-size: 22px;
        }
        </style>
    <title>Landing Page</title>
</head>
<body onload="loading()">
    <section id="loading">
        <div class="loader-wrapper">
            <div class="loader">
                <div class="loader loader-inner"></div>
            </div>
        </div>
    </section>

    <section>
        <nav class="navbar fixed-top container1">
            <img class="float-left img-fluid logo" src="images/home/SIABDI.jpg" width="90-px" ><a href="landingpage"></a></img>
            <input type="checkbox" id="toggler">
            <label for="toggler"><i class="ri-menu-line"></i></label>
            <div class="menu">
              <ul class="list">
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="{{ url('/data') }}">Data</a></li>
              </ul>
            </div>
          </nav>
    </section>

    <div class="background-image position-relative overflow-hidden">
        <div class="position-absolute">
            <img src="images/home/bg1.jpg" width="126%" alt="">
        </div>

    <section id="about" class="carousel">
    <div class="container position-relative">
        <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/home/banner3.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/home/banner5.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/home/banner2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div>
</div>
    </section>

    <section class="background">
        <div class="container pb-4">
            <div class="siabdi">
                <img src="images/home/SIABDI.jpg" width="15%" alt="">
                <h4 class="pt-4" ><b>Semua data pengabdian masyarakat ada dalam satu aplikasi <br></b></h4>
                <h4 align=”center”>SIABDI adalah sebuah sistem informasi yang memuat seluruh data pengabdian masyarakat yang telah dilakukan oleh sivitas akademika Politeknik Elektronika Negeri Surabaya. SIABDI bertujuan untuk mempermudah dan mempercepat proses pengelolaan data oleh dosen juga P3M PENS</h4>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="parallax">
                <p>Dokumentasi 2018</p>
            </div>
        </div>
    </section>


    <section id="contact" class="pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="map" ></div>
                        </div>
                        <div class="col-md-6">
                            <h1 class="ms-4">
                                <b>Contact Us</b></h1>
                                <ul class="DataPens">
                                    <li> Jl. Raya ITS, Keputih, Kec. Sukolilo <br>
                                    Surabaya - Jawa Timur - Indonesia</li>
                                    <li>pens.ac.id</li>
                                    <li>Telf (031) 5947280</li>
                                </ul>
                                <div class="icons-wrapper">
                                    <i class="ri-instagram-line icon"></i>
                                    <i class="ri-facebook-circle-line icon"></i>
                                    <i class="ri-youtube-line icon"></i>
                                </div>
                        </div>
                        <div class="col-lg-12">
                            <p class="copyright">Copyright © 2022 POLITEKNIK ELEKTRONIKA NEGERI SURABAYA</p>
                        </div>
                    </div>
                </div>
            </div>
        
    
    </section>
     <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

    <script>
        let load;
        function loading(){
            load = setTimeout(masukHalaman,5000)
        }
        function masukHalaman(){
            document.getElementById('loading').style.display = "none"
        }
    </script>

    <script>
        const map = L.map('map').setView([-7.275644888212839, 112.7938093406499], 12);

        const tiles = L.tileLayer(
        "https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",
        {
          maxZoom: 18,
          attribution:
            'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery ©️ <a href="https://www.mapbox.com/">Mapbox</a>',
          id: "mapbox/streets-v11",
          tileSize: 512,
          zoomOffset: -1,
        }
      ).addTo(map);
      var marker = L.marker([-7.275644888212839, 112.7938093406499]).addTo(map);
      marker.bindPopup("<b>PENS</b>").openPopup();
	</script>

</body>
</html>