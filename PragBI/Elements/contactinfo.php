<!-- the first div establishes the background box -->
<div class="row size green-top">
    
    <!-- the secong div arranges the elements in a container -->
    <div class="container">
        
    <!-- Logo and title -->
    
    <div class="pragbilogo">
    <img src="Elements/pragbilogo.png" alt="XXX"  class="col-xs-12 col-md-12 col-lg-12 "></div>
    <div class="pragbititle">
    <img src="Elements/pragbititle.png" alt="XXX"  class="col-xs-12 col-md-12 col-lg-12 "></div>
        
        <!--Contact information-->
        <div class="contact-left">
        <article class="col-xs-12 col-md-6 col-lg-6">
        <br>
        <p>Pragmatic BI ApS</p>
        <p>Steen Dybboe</p>
        <p>Åhusene 4, -9, -3,</p> 
        <p>8000 Aarhus C,</p>
        <p>Danmark</p>
            </article></div>
        
        <div class="contact-right">
        <article class="col-xs-12 col-md-6 col-lg-6">
        <br>
        <p><a class="textlink link1" href="mailto:steen@pragbi.dk">steen@pragbi.dk</a></p>
        <p>+45 42 606 202</p>
        <p>CVR: 36974133</p>
        <p><a href="https://dk.linkedin.com/in/dybboe" target="_blank">LinkedIn</a></p>
            </article></div>
        
        <!--Map-->
    <div id="map"></div>
    <script>
      function initMap() {
        var location = {lat: 56.153121, lng: 10.188768};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: location
        });
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3LPlhX6XHIid-WfCHt--QaAIo8bx6-2M&callback=initMap">
    </script>
    </div>
</div>