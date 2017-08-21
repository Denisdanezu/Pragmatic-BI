<!-- Dummy html -->

<!-- First part is the buttons to activate the text -->
<div class="row size">
    <div class="container" id="dummy-size">
        
        <h2 id="dummy-title2">Learn more about what I do</h2>
        
      <div class="col-xs-4 col-md-4 col-lg-4 w3-container">
        <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('BI');">
            <h3 class="dummy-title">Business Intelligence</h3>
        </a>
      </div>
      <div class="col-xs-4 col-md-4 col-lg-4 w3-container">
        <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('BigData');">
            <h3 class="dummy-title" style="padding-top:45px;">Big Data</h3>
        </a>
      </div>
      <div class="col-xs-4 col-md-4 col-lg-4 w3-container">
        <a href="javascript:void(0)" class="w3-hover-opacity" onclick="openImg('Dataware');">
            <h3 class="dummy-title">Data Warehouse</h3>
        </a>
      </div>
    </div>

    <br>
    
<!-- Second part is the written content. The onclick in the end of all element is to remove it when pressing another button. A close button can be added by putting something within the <span></span> -->
<div class="container">    
    <div id="BI" class="picture dummy-text w3-display-container" style="display:none">
        <h3>Business Intelligence</h3>
        <p>Business intelligence is analyzing the big data and making sense of it. With some smart choices, you can explore and analyze the data and use it to better your company.</p>
      <span onclick="this.parentElement.style.display='none'" 
      class="w3-display-topright w3-button w3-transparent w3-text-white"></span>
    </div>

    <div id="BigData" class="picture dummy-text w3-display-container" style="display:none">
        <h3>Big Data</h3>
      <p>More and more devices are getting connected to the internet, constantly updating billions of data items. All this data is useful for company developments as they will both know more about users and products. This is big data. However, with a constantly increasing data collection, the data gets hard to understand and analyze.</p>
      <span onclick="this.parentElement.style.display='none'" 
      class="w3-display-topright w3-button w3-transparent"></span>
    </div>

    <div id="Dataware" class="picture dummy-text w3-display-container" style="display:none">
        <h3>Data Warehouse</h3>
      <p>A Data Warehouse is a place to store and cataloging the data. By organizing and preparing the continuously updating data, the data warehouse is a strong tool to stay on top of the information.</p>
      <span onclick="this.parentElement.style.display='none'" 
      class="w3-display-topright w3-button w3-transparent w3-text-white"></span>
    </div>

<!-- javascript to enable interaction -->
<script>
function openImg(imgName) {
  var i, x;
  x = document.getElementsByClassName("picture");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  document.getElementById(imgName).style.display = "block";
}
</script>
    
    </div>
</div>