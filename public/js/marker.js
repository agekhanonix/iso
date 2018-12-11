/* =================================================== **
*                GMAP MARKER OBJECT                     *
** =================================================== */
/* Auteur    : Thierry CHARPENTIER                      *
*  Date      : 29.07.2018                               *
*  Version   : V1R0                                     *
*
* ==================================================== */

function GMarker(mId, mSociety, mStreet, mAddr1, mAddr2, mCP, mCity, mLat, mLng, mScore, mTel, mMobile, mEmail, mType, mFirstName, mLastName) {
    /* --- The icon choice depend on the type --- */
    arrMarkers = new Array();                            // Asociative array
    arrMarkers = { 1: 'red', 2: 'purple', 3: 'yellow', 4: 'orange', 5: 'green', 99: 'thick-blue'};
    icone = 'public/images/markers/iso-' + arrMarkers[mType] + '-marker.png';

    /* --- Marker contruction                      --- */
    var title = mSociety; 
        /*'Lat : ' + mLat + ' Lng : ' + mLng + "\r\n" +
        'Adresse : ' + mStreet + ', ' + mAddr1 + "\r\n" +
        mAddr2 + "\r\n" +
        mCP + " " + mCity + "\r\n" +
        'Tel : ' + mTel + "\r\n" +
        'Mobile : ' + mMobile + "\r\n" +
        'Courriel : ' + mEmail + "\r\n\r\n" +
        'Nb réponses aux questions : ' + mScore;*/
    var geopoint = new google.maps.LatLng(mLat, mLng);
    var objMarker = new google.maps.Marker({
        position: geopoint,
        map: mId,
        title: title,
        icon: icone
    });
    if(mType !== 99) {
        var contentString = '<p>test</p>';
        if(mScore > 60) {
            contentString += '<section class="row-fluid">' +
                        '<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 infowindow">' +
                            '<h6 class="text-uppercase text-center infowindow">Actions recommandées</h6>' + 
                        '</article>' +
                    '</section>';
        }
        contentString +='</div>' +
            '</div>' +
        '</div>';
        var ficheSignaletique = new google.maps.InfoWindow({content: contentString});
        objMarker.addListener('click', function() {
            ficheSignaletique.open(mId, objMarker);
        });
    }
}
