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
function updAudit(audit, question, client) {
    var value = $('input[name=opt'+question+']:checked').val();
    $.post("index.php?action=updAudit", {
        audit: audit,
        question: question,
        client: client,
        value: value
    });
}