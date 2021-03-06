/* =========================================================== **
*       PRINCIPAL FUNCTIONS OF THE APPLICATION                  *
** =========================================================== */
/* Author    : Thierry CHARPENTIER                              *
*  Date      : 25.10.2018                                       *
*  Version   : V1R0                                             *
* ============================================================ */

window.addEventListener("load", function(){
    var elExpands = document.querySelectorAll('[data-expand]');
    var elLoading = document.querySelector("[data-loading]");
    elLoading.setAttribute("data-loading","complete");
    for(var i=0; i<elExpands.length; i++) {
        elExpands[i].addEventListener("click", function(){
            if(this.getAttribute('data-expand') != "open") {
                this.setAttribute("data-expand", "open");
            } else {
                this.setAttribute("data-expand", "");
            }
        });
    }
});
function updAudit(questionId) {
    var questionValue = $('input[name=opt'+questionId+']:checked').val();
    var prospectId = document.getElementById('sessionId').value;
    var auditDate = document.getElementById('auditDate').value;
    var auditId = document.getElementById('auditId').value;

    $.post("index.php?action=updAudit", {
        auditId: auditId,
        prospectId: prospectId,
        auditDate: auditDate,
        questionId: questionId,
        questionValue: questionValue
    })
        .done(function() { 
            showNotes4Graphe(auditId, prospectId);
        })
        .fail(function() { alert( "La réponse à la question Q"+questionId+" n'a pas été enregistrée !");});
}
function prepareImg() {
    var canvas = document.getElementById('myChart');
    document.getElementById('image').value = canvas.toDataURL();
}
