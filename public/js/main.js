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
    /*this.setTimeout(function() {
        var elCards = document.querySelectorAll('.card'); 
        for(var i=0; i<elCards.length; i++) {
            elCards[i].style.visibility = "visible";
        }
    }, 3000);*/
});