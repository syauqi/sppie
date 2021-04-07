@extends('includes.master')

@push('css')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
    integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
    crossorigin="" />
<link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
<link rel="stylesheet" type="text/css"
    href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
<link rel="stylesheet" type="text/css"
    href="https://cdn-geoweb.s3.amazonaws.com/esri-leaflet-geocoder/0.0.1-beta.5/esri-leaflet-geocoder.css">
<link rel="stylesheet" href="{{ asset('assets/css/leaflet-search.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/leaflet/rounting/leaflet-routing-machine.css') }}">
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' rel='stylesheet' />

<style>
    #mapid {
        height: 500px;
    }

    .map-section {
        box-shadow:
            0 1.7px 1.7px rgba(0, 0, 0, 0.011),
            0 3.9px 3.9px rgba(0, 0, 0, 0.016),
            0 6.7px 6.7px rgba(0, 0, 0, 0.02),
            0 10.3px 10.3px rgba(0, 0, 0, 0.023),
            0 15.2px 15.2px rgba(0, 0, 0, 0.027),
            0 22.3px 22.3px rgba(0, 0, 0, 0.03),
            0 33.5px 33.5px rgba(0, 0, 0, 0.034),
            0 53.4px 53.4px rgba(0, 0, 0, 0.039),
            0 100px 100px rgba(0, 0, 0, 0.05);
    }

    .position-dropdown {
        z-index: 999;
        background-color: rgba(255, 255, 255, 0.5);
        padding: 10px;
    }

    .leaflet-routing-add-waypoint {
        display: none;
    }

    .leaflet-routing-geocoder input {
        pointer-events: none;
    }

    img.leaflet-marker-icon.leaflet-zoom-animated.leaflet-interactive.leaflet-marker-draggable {
        display: none;
    }
</style>
@endpush

@section('content')
<section class="mt-5">
    <div class="container">
        <section class="content">
            <div class="row">
                <div class="col-md-10 text-start">
                    <p data-aos="fade-up" data-aos-duration="1000" class="text-primary label-top">PETA PUSAKA</p>
                    <h1 class="fw-bold" data-aos="fade-up" data-aos-duration="1200">PETA PENYEBARAN SEKOLAH</h1>
                    <hr data-aos="fade-up" data-aos-duration="1400" width="50%" class="d-sm-block d-none" />
                    <p data-aos="fade-up" data-aos-duration="1600">
                        Berikut merupakan map yang telah kami sediakan dalam rangka memudahkan pengunjung melihat
                        laporan yang telah dilaporkan dan juga melihat banyak peta sekolah di Jawa Barat
                    </p>
                    <a href="#" data-aos="fade-up" data-aos-duration="1800"
                        class="btn btn-outline-primary px-4 py-2">Jelajahi ▾</a>
                </div>
            </div>
        </section>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 ">
                <div class="map-area">
                    <div class="dropdown-map">
                        <div class="col-md-12" style="position: absolute;margin-top: 10px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 position-dropdown">
                                        <div class="form-group">
                                            <select class="form-control" id="kabupaten">
                                                <option>Kabupaten</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control mt-2" id="kecamatan" style="display: none;">
                                                <option value="">Kecamatan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control mt-2" id="desa" style="display: none;">
                                                <option value="">Desa</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="map-section" id="mapid">
                    </div>
                    <div class="col-md-12 pt-4"">
                        <div class=" row">
                        <div class="col-md-12">
                            <span>
                                <img src="{{url('main-assets/images/marker/icon_sdlb.png')}}" width="12px"
                                    class="img-fluid" alt="" srcset="" />
                                <p class="d-inline ms-1" style="font-size:14px">SDLB |</p>
                            </span>
                            <span> <img src="{{url('main-assets/images/marker/icon_slb.png')}}" width="12px"
                                    class="img-fluid" alt="" srcset="" />
                                <span class="d-inline ms-1" style="font-size:14px">SLB |</span></span>
                            <span><img src="{{url('main-assets/images/marker/icon_sma.png')}}" width="12px"
                                    class="img-fluid" alt="" srcset="" />
                                <p class="d-inline ms-1" style="font-size:14px">SMA |</p>
                            </span>
                            <span>
                                <img src="{{url('main-assets/images/marker/icon_smk.png')}}" width="12px"
                                    class="img-fluid" alt="" srcset="" />
                                <p class="d-inline ms-1" style="font-size:14px">SMK |</p>
                            </span>
                            <span>
                                <img src="{{url('main-assets/images/marker/icon_smtk.png')}}" width="12px"
                                    class="img-fluid" alt="" srcset="" />
                                <p class="d-inline ms-1" style="font-size:14px">SMTK |</p>
                            </span>
                            <span>
                                <img src="{{url('main-assets/images/marker/icon_spksma.png')}}" width="12px"
                                    class="img-fluid" alt="" srcset="" />
                                <p class="d-inline ms-1" style="font-size:14px">SPKSMA</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection

@push('script')
<script src="{{ asset('/vendor/leaflet/leaflet.js') }}"></script>
<script src="{{ asset('/vendor/leaflet/esri-leaflet.js') }}"></script>
<script src="{{ asset('/vendor/leaflet/spin.min.js') }}"></script>
<script src="{{ asset('/vendor/leaflet/leaflet.spin.min.js') }}"></script>
<script src="{{ asset('/vendor/leaflet/leaflet.markercluster.js') }}"></script>
<script src="{{ asset('/vendor/leaflet/subgroup.js') }}"></script>
<script src="{{ asset('/vendor/leaflet/geocoder.js') }}"></script>
<script src="{{ asset('assets/js/leaflet-search.js') }}"></script>
<script src="{{ asset('/vendor/leaflet/fuse.min.js') }}"></script>
<script src="{{ asset('/vendor/leaflet/rounting/leaflet-routing-machine.js') }}"></script>
<script src="{{ asset('/vendor/leaflet/rounting/Control.Geocoder.js') }}"></script>
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var kabupaten,kecamatan,desa;
    var directionMode = false;
    var directionMarker = 0;
    $(document).ready(function(){

        get_kabupaten();
        $('#kabupaten').on('change',function(){
            $('#kecamatan').val('');
            $('#desa').val('');
            if($(this).val() == null || $(this).val() == ''){
                $('#kecamatan').slideUp();
                $('#desa').slideUp();
                $('#kecamatan').val('');
                $('#desa').val('');
            }else{
                get_kecamatan();
                $('#kecamatan').slideDown();
                $('#desa').slideUp();
            }
            set_val_kabupaten();
            set_val_kecamatan();
            set_val_desa();
            map_filtered();
        })

        $('#kecamatan').on('change',function(){
            $('#desa').val('');
            if($(this).val() == null || $(this).val() == ''){
                $('#desa').slideUp();
                $('#desa').val('');
            }else{
                get_desa();
                $('#desa').slideDown();
            }
            set_val_kabupaten();
            set_val_kecamatan();
            set_val_desa();
            map_filtered();
        })

        $('#desa').on('change',function(){
            set_val_kabupaten();
            set_val_kecamatan();
            set_val_desa();
            map_filtered();
        });
    })

    function get_kabupaten(){
        $.ajax({
            url:'{{ url('/get_kabupaten') }}',
            dataType:"json",
            success:function(result){
                var option = '<option value="" selected>Kabupaten</option>';
                for(var i = 0; i< result.length;i++){
                    var data = result[i].kabupaten;
                    option += '<option value="'+data+'">'+data+'</option>';
                }
                $('#kabupaten').html(option);
            },
            error:function(x,y,z){
                alert('Terjadi Sebuah Kesalahan.');
            }
        })
    }

    function get_kecamatan(){
        var nama_kab = $('#kabupaten').val();
        $.ajax({
            url:'{{ url('/get_kecamatan') }}',
            type:"post",
            dataType:"json",
            data:{nama_kab:nama_kab},
            success:function(result){
                var option = '<option value="" selected>Kecamatan</option>';
                for(var i = 0; i< result.length;i++){
                    var data = result[i].kecamatan;
                    option += '<option value="'+data+'">'+data+'</option>';
                }
                $('#kecamatan').html(option);
            }
        })
    }

    function get_desa(){
        var nama_kec = $('#kecamatan').val();
        $.ajax({
            url:'{{ url('/get_desa') }}',
            type:"post",
            dataType:"json",
            data:{nama_kec:nama_kec},
            success:function(result){
                var option = '<option value="" selected>Desa</option>';
                for(var i = 0; i< result.length;i++){
                    var data = result[i].desa;
                    option += '<option value="'+data+'">'+data+'</option>';
                }
                $('#desa').html(option);
            }
        })
    }


    var sdlb = "{{ asset('main-assets/images/marker/icon_sdlb.png') }}",
            slb = "{{ asset('main-assets/images/marker/icon_slb.png') }}",
            sma = "{{ asset('main-assets/images/marker/icon_sma.png') }}",
            smk = "{{ asset('main-assets/images/marker/icon_smk.png') }}",
            smtk = "{{ asset('main-assets/images/marker/icon_smtk.png') }}",
            spksma = "{{ asset('main-assets/images/marker/icon_spksma.png') }}";

        //initialize variable
        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 20,
                attribution: '&copy; <a href="http://disdik.jabarprov.go.id/">Disdik Jawa Barat</a>  '
            }),
        latlng = L.latLng(-6.8454612, 107.6895576);

        var map = L.map('mapid', {center: latlng, zoom: 8, layers: [tiles],fullscreenControl: {
            pseudoFullscreen: false}
        });


        var mylayer = L.featureGroup();
        var layerControl = {
        "Aktifkan Mode Petunjuk Arah": mylayer, // opsi untuk show/hide direction mode
        }
        var directionControl = L.control.layers('', layerControl, {position: 'topright', collapsed: false}).addTo(map);


        //define base icon features
        var MapIcon = L.Icon.extend({
            options: {
                iconSize: [25, 41],
                iconAnchor: [12, 40],
                popupAnchor: [2, -10]
            }
        });

        //define custom icons
        var icon_sdlb = new MapIcon({
            iconUrl: sdlb
        }),
        icon_slb = new MapIcon({
            iconUrl: slb
        }),
        icon_sma = new MapIcon({
            iconUrl: sma
        }),
        icon_smk = new MapIcon({
            iconUrl: smk
        }),
        icon_smtk = new MapIcon({
            iconUrl: smtk
        }),
        icon_spksma = new MapIcon({
            iconUrl: spksma
        });

        var icons = {
            "SDLB": icon_sdlb,
            "SLB": icon_slb,
            "SMA": icon_sma,
            "SMK": icon_smk,
            "SMTK": icon_smtk,
            "SPK SMA": icon_spksma
        };
        var data_array = [];

        // var layersControl = L.control.layers(null, null).addTo(map);
        var parentGroup = L.markerClusterGroup().addTo(map);

        map.addControl(new L.Control.Search({
            layer: parentGroup,
            propertyName:'title',
            marker:{
                animate:false
            }
        }).on('search:locationfound', function (e) {
                map.setView(e.latlng,16);
                e.layer.openPopup()
                $('#searchtext9').val('')
			})
        );

        //adding an array to hold all marker locations and names
        var bulk_list = [];

        //output sample names of points in the zoom box
        map.on("boxzoomend", function (e) {
            for (var i = 0; i < bulk_list.length; i++) {
                if (e.boxZoomBounds.contains(bulk_list.latlng[i])) {

                }
            }
        });

        function keSini(lat,lng){
            var latlng = L.latLng(lat,lng)
            control.spliceWaypoints(control.getWaypoints().length - 1, 1, latlng);
            map.closePopup();

        }

        function dariSini(lat,lng){
            var latlng = L.latLng(lat,lng)
            control.spliceWaypoints(0, 1, latlng);
            map.closePopup();
        }

        var control = L.Routing.control({
            waypoints: [
                // L.latLng(-7.32337, 108.326685),
                // L.latLng(-7.3214, 108.3457)
            ],
            router: new L.Routing.osrmv1({
                language: 'id'
            }),
            geocoder: L.Control.Geocoder.nominatim(),
            // reverseWaypoints: true,
            // showAlternatives: true,
            altLineoptions:{
                styles:[
                    {color:'black',opacity:0.15,weight:9},
                    {color:'white',opacity:0.8,weight:6},
                    {color:'blue',opacity:0.5,weight:2}
                ]
            }
        }).on('routingstart',function(e){
            map.spin(true)
        }).on('routesfound',function(e){
            map.spin(false)
        }).on('routingerror',function(e){
            map.spin(false)
            alert('terjadi kesalahan pada server')
        })
        control.addTo(map)


        map.on("layeradd layerremove", function(e){
            if(map.hasLayer(mylayer)){
                directionMode = true;
            }else{
                
                directionMode = false;
            }
        })

        map_filtered();
        function map_filtered(){
            parentGroup.clearLayers();
            map.spin(true);
            $.ajax({
                url:'{{ url('/get_sekolah') }}',
                type:"post",
                dataType:"json",
                data:{
                    kabupaten : get_val_kabupaten(),
                    kecamatan : get_val_kecamatan(),
                    desa : get_val_desa(),
                },
                success:function(json){
                    map.spin(false);
                    var count = Object.keys(json).length
                    data_array = [];

                    json.forEach(element => {
                        var id = element.id
                        var title = element.nama_sekolah
                        var latitude = element.latitude
                        var longitude = element.longitude
                        var alamat = element.alamat
                        var bentuk_pendidikan = element.bentuk_pendidikan
                        var url = `{{ url('/detail-sekolah/${id}') }}`;
                        var m = L.marker(L.latLng(latitude, longitude),{ title: title,icon:icons[bentuk_pendidikan] });
                        m.bindPopup(title + "<br>" + alamat + "<br>" +"<button onclick='return dariSini("+latitude+","+longitude+")'>Dari sini</button>" + "<button onclick='return keSini("+latitude+","+longitude+")'>Kesini</button>" + "<br>" + "<a href="+url+">Selengkapnya</a>");
                        // parentGroup.addLayer(m);

                        if(get_val_kabupaten() != '' && get_val_kecamatan() == '' && get_val_desa() == ''){
                            if(count > 0){
                                map.setView([latitude,longitude],9)
                            }
                        }else if(get_val_kabupaten() != '' && get_val_kecamatan() != '' && get_val_desa() == ''){
                            if(count > 0){
                                map.setView([latitude,longitude],9)
                            }
                        }else if(get_val_kecamatan() != '' && get_val_desa() != null){
                            map.setView([latitude,longitude],10)
                        }else{
                            map.setView(latlng, 8)
                        }

                        data_array.push(m);
                        m.on("click", function(e){
                            if(directionMode == true){
                                map.closePopup();
                                if(directionMarker == 2) directionMarker = 0;

                                const latLng = e.latlng;
                                control.spliceWaypoints(directionMarker, 1, latLng);
                                directionMarker++;
                            }else{
                                console.log(directionMode, e)
                            }
                        })
                    });

                    parentGroup.addLayers(data_array);

                    map.on('locationfound', function(ev){

                        // var m = L.marker(ev.latlng,{icon:Food});
                        // parentGroup.addLayer(m);
                    })
                },
                error:function(x,y,z){
                    alert('Terjadi Sebuah Kesalahan');
                    map.spin(false);
                }
            });
            return false;
        }

        function get_val_kabupaten(){
            return kabupaten;
        }

        function get_val_kecamatan(){
            return kecamatan;
        }
        function get_val_desa(){
            return desa;
        }

        function set_val_kabupaten(){
            kabupaten = $('#kabupaten').val();
        }

        function set_val_kecamatan(){
            kecamatan = $('#kecamatan').val();
        }

        function set_val_desa(){
            desa = $('#desa').val();
        }


</script>
@endpush
