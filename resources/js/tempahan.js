
import axios from "axios";
import cash from "cash-dom";

(function (cash) {
    cash('#programTempahanMakanMinum').on('change', (e) => {
        let kursusId = cash(e.target).val();
        axios.get(`tempahan-makan-minum/${kursusId}/kursus`)
        .then((response) => {
            console.log(cash('#report-div'));
            cash('#report-div').html(response.data);
        })
        .catch((err) => {
            console.error(err);
        });
    });
}) (cash);
