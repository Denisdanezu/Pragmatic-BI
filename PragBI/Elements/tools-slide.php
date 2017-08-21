<div class="size">
    <div class="container">

         <h2 class="title">Tools</h2>
        
        <p id="tools">Over the years, I worked with a large variety of programming languages, but I primarily use SQL, C# and R.</p>
        
        
        
        <!-- The sliders -->
        
<!-- Code from jssor.com -->
    
    <!-- #region Jssor Slider Begin -->
    <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-23.1.6.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
              
              
              $SlideDuration: 160,
              $SlideWidth: 180,
              $SlideSpacing: 20,
              $Cols: 5,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 2
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
   
        <!-- the actual sliders -->        
    
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:809px;height:150px;overflow:hidden;visibility:hidden;">
        
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);">
        </div>
        
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:809px;height:150px;overflow:hidden;">
            <div>
                <img data-u="image" src="Elements/img/office.png" />
            </div>
            <div>
                <img data-u="image" src="Elements/img/R.jpeg" />
            </div>
            <div>
                <img data-u="image" src="Elements/img/sql.png" />
            </div>
            <div>
                <img data-u="image" src="Elements/img/visual.png" />
            </div>
            <div>
                <img data-u="image" src="Elements/img/java.jpg" />
            </div>
            <div>
                <img data-u="image" src="Elements/img/c++.png" />
            </div>
            <div>
                <img data-u="image" src="Elements/img/c.png" />
            </div>
            <div>
                <img data-u="image" src="Elements/img/azure2.jpg" />
            </div>
            <a data-u="any" href="https://wordpress.org/plugins/jssor-slider/" style="display:none">wordpress banner rotator</a>
        </div>
        
       
        
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora01l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora01r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
    <!-- #endregion Jssor Slider End -->
    </div>
</div>