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
        var contentString = '<div class="container-fluid">' +
            '<div class="panel panel-info">' +
                '<div class="panel-heading">' +
                    '<h5 class="text-center text-uppercase">' + mSociety + '</h5>' +
                '</div>' +
                '<div class="panel-body">' +
                    '<section class="row-fluid">' +
                        '<article class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' +
                            '<h6 class="text-uppercase text-center thin">Infos société</h6>' +
                            '<p class="thin"><strong>Adresse : </strong>' + mStreet + ' ' + mAddr1 + '<br/>' +
                                mAddr2 + '</p>' +
                            '<p class="thin">' + mCP + ' ' + mCity + '</p>' +
                            '<p class="thin"><strong>Latitude : </strong>' + mLat + ' <strong>Longitude : </strong>' + mLng + '</p>' +
                            '<p class="thin"><strong>Nbre de réponses au questionnaire : </strong>' + mScore + '</p>' +
                        '</article>' +
                        '<article class="col-lg-6 col-md-6 col-sm-12 col-xs-12">' +
                            '<h6 class="text-uppercase text-center thin">Infos prospect</h6>' +
                            '<p class="thin">' + mFirstName + ' ' + mLastName + '</p>' +
                            '<p class="thin"><strong>Tph : </strong>' + mTel + ' <strong>Mobile : </strong>' + mMobile + '</p>' +
                            '<p class="thin"><strong>Courriel : </strong>' + mEmail + '</p>' +
                        '</article>' +
                    '</section>';
        if(mScore >= 50) {
            contentString += '<section class="row-fluid">' +
                        '<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12">' +
                            '<h6 class="text-uppercase text-center thin">Actions recommandées</h6>' + 
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
