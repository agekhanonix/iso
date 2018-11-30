var map;                                                // Objet {map}
var markers = new Array();                              // The markers array
var divId = 'google-map';                               // The div where map will be insert
var fdc;                                                // The map background object
/* ---  GOOGLE-MAP INITIALIZATION           --- */
function initMap() {
    affProspects(99);
    /* ---   MAP MARKERS ACTUALIZATION   --- */
    var btn = document.getElementById('filter');
    btn.addEventListener('click', function() {
        filter = document.querySelector('input[name="select"]:checked').value;
        //affProspects(fdc.objectMap, filter);             // If filter=99 only TH.CHARPENTIER are displayed
        affProspects(filter);
    });
}
