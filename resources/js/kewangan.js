
import cash from "cash-dom";

(async function (cash) {
    "use strict";

    cash('#print-laporan-kutipan-yuran').on("click", () => {
        cash('#print').html(cash('#report-div').html())
        .then(() => {
            window.print();
        });


        window.onafterprint = function(){
            cash('#print').html('');
        }
    });


})(cash);
