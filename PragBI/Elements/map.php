<div class="row size" >
    <div class="container">
        <div class="col-xs-12 col-md-12 col-lg-12">
    
            <div id="map" style="width:100%;height:500px"></div>

                        <script>
                        function myMap() {
                            var mapCanvas = document.getElementById("map");
                            var myCenter = new google.maps.LatLng(56.152946, 10.187922); 
                            var mapOptions = {center: myCenter, zoom: 15};
                            var map = new google.maps.Map(mapCanvas, mapOptions);
                            var marker = new google.maps.Marker({position:myCenter});
                            marker.setMap(map);
                        }
                        </script>
                        
                        <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
        </div>             
    </div>
</div>