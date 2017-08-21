<!-- Code from jssor.com -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body style="padding:0px; margin:0px; background-color:#fff;font-family:'Open Sans',sans-serif,arial,helvetica,verdana">

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
    <style>
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb10 {
            position: absolute;
        }
        .jssorb10 div, .jssorb10 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('img/b10.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb10 div { background-position: -5px -4px; }
        .jssorb10 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb10 .av { background-position: -65px -4px; }
        .jssorb10 .dn, .jssorb10 .dn:hover { background-position: -95px -4px; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        .jssora03l.jssora03ldn      (disabled)
        .jssora03r.jssora03rdn      (disabled)
        */
        .jssora01l, .jssora01r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('img/a01.png') no-repeat;
            overflow: hidden;
        }
        .jssora01l { background-position: -3px -33px; }
        .jssora01r { background-position: -63px -33px; }
        .jssora01l:hover { background-position: -123px -33px; }
        .jssora01r:hover { background-position: -183px -33px; }
        .jssora01l.jssora03ldn { background-position: -243px -33px; }
        .jssora01r.jssora03rdn { background-position: -303px -33px; }
        .jssora01l.jssora03lds { background-position: -3px -33px; opacity: .3; pointer-events: none; }
        .jssora01r.jssora03rds { background-position: -63px -33px; opacity: .3; pointer-events: none; }
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:809px;height:150px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:809px;height:150px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/office.png" />
            </div>
            <div>
                <img data-u="image" src="img/R.jpeg" />
            </div>
            <div>
                <img data-u="image" src="img/sql.png" />
            </div>
            <div>
                <img data-u="image" src="img/visual.png" />
            </div>
            <div>
                <img data-u="image" src="img/java.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/c++.png" />
            </div>
            <div>
                <img data-u="image" src="img/c.png" />
            </div>
            <div>
                <img data-u="image" src="img/azure2.jpg" />
            </div>
            <a data-u="any" href="https://wordpress.org/plugins/jssor-slider/" style="display:none">wordpress banner rotator</a>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb10" style="bottom:10px;right:10px;">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:21px;height:21px;">
                <div data-u="numbertemplate"></div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora01l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora01r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
    <!-- #endregion Jssor Slider End -->
</body>
</html>

