/* =========================================================== **
*                           Tinymce config                      *
** =========================================================== */
/* Author    : Thierry CHARPENTIER                              *
*  Date      : 11.10.2018                                       *
*  Version   : V1R0                                             *
* ============================================================ */
tinymce.init({
  selector: 'textarea#editable',
  height: 100,
  theme: 'modern',
  language: "fr_FR",
  width:      '100%',
  plugins : "advlist",
  statusbar:  false,
	menubar:    true,
});

// Prevent bootstrap dialog from blocking focusin
$(document).on('focusin', function(e) {
    if ($(e.target).closest(".mce-window").length) {
		e.stopImmediatePropagation();
	}
});

$('#open').click(function() {
	$("#dialog").dialog({
		width: 800,
		modal: true
	});
});