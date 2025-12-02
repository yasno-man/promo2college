ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
        center: [59.937017, 30.203902],
        zoom: 16
    }, {
        controls: []
    });

    var myPlacemark = new ymaps.Placemark([59.937017, 30.203902], {
        balloonContent: "Мой офис находится здесь: бул. Александра Грина, 1, Санкт-Петербургэтаж 4, офис 749"
    }, {
        preset: 'islands#redDotIcon'
    });
    myMap.geoObjects.add(myPlacemark);
}