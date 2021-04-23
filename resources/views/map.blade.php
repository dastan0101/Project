<!DOCTYPE html>
<html>
<head>
    <title>Examples. Setting a custom placemark image</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=447827c2-69e1-432f-98d0-7a05bc34852c" type="text/javascript"></script>
    <script src="icon_customImage.js" type="text/javascript"></script>
    
</head>
<body>
<div id="map" style="width: 600px; height: 400px"></div>

<script type="text/javascript">
    ymaps.ready(function () {
        var myMap = new ymaps.Map("map", {
                center: [43.430515,68.274710],
                zoom: 9
            }, {
                searchControlProvider: "yandex#search"
            }),

            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                "<div style='color: #FFFFFF; font-weight: bold;'>$[properties.iconContent]</div>"
            ),

            myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                hintContent: "Заңғар-М",
                balloonContent: "Заңғар-М мектебі"
            }, {
                iconLayout: "default#image",
                iconImageHref: "https://img2.pngio.com/local-tour-svg-png-icon-free-download-175952-onlinewebfontscom-local-png-980_976.png",
                iconImageSize: [30, 42],
                iconImageOffset: [-5, -38]
            }),

            myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
                hintContent: "Заңғар-М",
                balloonContent: "Заңғар-М мектебі",
                iconContent: "13"
            });
            

        myMap.geoObjects
            .add(myPlacemark)
    });
</script>
</body>
</html>
