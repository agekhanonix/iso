/* =========================================================== **
*       PRINCIPAL FUNCTIONS OF THE APPLICATION                  *
** =========================================================== */
/* Author    : Thierry CHARPENTIER                              *
*  Date      : 25.10.2018                                       *
*  Version   : V1R0                                             *
* ============================================================ */
window.addEventListener("load", function(){
    var elLoading = document.querySelector("[data-loading]");
    var elExpands = document.querySelectorAll('[data-expand]');
    
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
function updAudit(auditId, prospectId, auditDate, questionId) {
    var questionValue = $('input[name=opt'+questionId+']:checked').val();
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