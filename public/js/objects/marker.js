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
    arrMarkers = new Array(); 
    var infoBubble, infoBubble2;                           // Asociative array
    arrMarkers = { 1: 'red', 2: 'purple', 3: 'yellow', 4: 'orange', 5: 'green', 99: 'thick-blue'};
    icone = 'public/images/markers/iso-' + arrMarkers[mType] + '-marker.png';

    /* --- Marker contruction                      --- */
    var title = mSociety; 
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
                '<div class="panel-body">' +
                        '<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12">' +
                            '<h6 class="text-uppercase text-center"><span class="color-success">Infos société</span></h6>' +
                            '<p class="thin"><span class="color-thickblue">Adresse : </span>' + mStreet + ' ' + mAddr1 + '<br/>' +
                                mAddr2 + '</p>' +
                            '<p class="thin">' + mCP + ' ' + mCity + '</p>' +
                            '<p class="thin"><span class="color-thickblue">Latitude : </span>' + mLat + ' <span class="color-thickblue">Longitude : </span>' + mLng + '</p>' +
                            '<p class="thin"><span class="color-thickblue">Nbre de réponses au questionnaire : </span>' + mScore + '</p>' +
                        '</article>' +
                        '<article class="col-lg-12 col-md-12 col-sm-12 col-xs-12">' +
                            '<h6 class="text-uppercase text-center"><span class="color-success">Infos prospect</span></h6>' +
                            '<p class="thin"><span class="color-thickblue">Correspondant : </span>' + mFirstName + ' ' + mLastName + '</p>' +
                            '<p class="thin"><span class="color-thickblue">Tph : </span>' + mTel + ' <span class="color-thickblue">Mobile : </span>' + mMobile + '</p>' +
                            '<p class="thin"><span class="color-thickblue">Courriel : </span>' + mEmail + '</p>' +
                        '</article>' +
                    '</section>' +
                '</div>' +
            '</div>' +
        '</div>';
        
        objMarker.addListener('click', function() {
            infoBubble = new InfoBubble({
                maxWidth: 500,
                backgroundClassName: 'bubble',
                arrowStyle: 2,    
                shadowStyle: 1,
                padding: 5,
                backgroundColor: 'rgb(27,37,61)',
                borderRadius: 4,
                arrowSize: 10,
                borderWidth: 1,
                borderColor: '#1d253d',
                disableAutoPan: false,
                hideCloseButton: false,
                arrowPosition: 30,
            });
            infoBubble.open(mId, objMarker);
            var div = document.createElement('DIV');
            div.innerHTML = contentString;
            infoBubble.addTab('<span class="color-primary text-uppercase">' + mSociety + '</span>', contentString);
            google.maps.event.addListener(objMarker, 'click', function() {
                if (!infoBubble.isOpen()) {
                    infoBubble.open(mId, objMarker);
                }
            });
            google.maps.event.addDomListener(document.getElementById('update'),
                'click', updateStyles);
            google.maps.event.addDomListener(document.getElementById('add'),
                'click', addTab);
            google.maps.event.addDomListener(document.getElementById('update-tab'),
                'click', updateTab);
            google.maps.event.addDomListener(document.getElementById('remove'),
                'click', removeTab);
            google.maps.event.addDomListener(window, 'load', init);
            });
        function updateStyles() {
            var shadowStyle = document.getElementById('shadowstyle').value;
            infoBubble.setShadowStyle(shadowStyle);
            var padding = document.getElementById('padding').value;
            infoBubble.setPadding(padding);
            var borderRadius = document.getElementById('borderRadius').value;
            infoBubble.setBorderRadius(borderRadius);
            var borderWidth = document.getElementById('borderWidth').value;
            infoBubble.setBorderWidth(borderWidth);
            var borderColor = document.getElementById('borderColor').value;
            infoBubble.setBorderColor(borderColor);
            var backgroundColor = document.getElementById('backgroundColor').value;
            infoBubble.setBackgroundColor(backgroundColor);
            var maxWidth = document.getElementById('maxWidth').value;
            infoBubble.setMaxWidth(maxWidth);
            var maxHeight = document.getElementById('maxHeight').value;
            infoBubble.setMaxHeight(maxHeight);
            var minWidth = document.getElementById('minWidth').value;
            infoBubble.setMinWidth(minWidth);
            var minHeight = document.getElementById('minHeight').value;
            infoBubble.setMinHeight(minHeight);
            var arrowSize = document.getElementById('arrowSize').value;
            infoBubble.setArrowSize(arrowSize);
            var arrowPosition = document.getElementById('arrowPosition').value;
            infoBubble.setArrowPosition(arrowPosition);
            var arrowStyle = document.getElementById('arrowStyle').value;
            infoBubble.setArrowStyle(arrowStyle);
            var closeSrc = document.getElementById('closeSrc').value;
            infoBubble.setCloseSrc(closeSrc);
        }
        function addTab() {
            var title = document.getElementById('tab-title').value;
            var content = document.getElementById('tab-content').value;
            if (title !== '' && content !== '') {
            infoBubble.addTab(title, content);
            }
        }
        function updateTab() {
            var index = document.getElementById('tab-index-update').value;
            var title = document.getElementById('tab-title-update').value;
            var content = document.getElementById('tab-content-update').value;
            if (index) {
            infoBubble.updateTab(index, title, content);
            }
        }
        function removeTab() {
            var index = document.getElementById('tab-index').value;
            infoBubble.removeTab(index);
        }
    }
}
