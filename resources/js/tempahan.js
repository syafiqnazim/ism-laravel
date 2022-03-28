
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

    cash('#klusterTempahanMakanMinum').on('change', (e) => {
        let klusterId = cash(e.target).val();
        axios.get('rating-penceramah/list-program/' + klusterId)
            .then(response => {
                var html = `<option value="-1">Pilih Satu</option>`;
                response.data.forEach(element => {
                    html += `<option value="${element.id}">${element.nama_kursus}</option>`;
                });
                document.getElementById('programTempahanMakanMinum').innerHTML = html;
            });
    })
})(cash);
