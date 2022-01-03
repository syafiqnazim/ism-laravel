import Toastify from "toastify-js";
import axios from "axios";
import cash from "cash-dom";
import Pristine from "pristinejs";
import { Calendar } from "@fullcalendar/core";
import interactionPlugin from "@fullcalendar/interaction";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";
import momentPlugin from "@fullcalendar/moment";

(async function (cash) {
    "use strict";

    cash(".delete-penceramah").on("click", async function (e) {
        let id = cash(e.currentTarget).attr("id");

        try {
            await axios.delete(`penceramah/${id}`);

            Toastify({
                node: cash("#success-notification-content")
                    .clone()
                    .removeClass("hidden")[0],
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            }).showToast();

            await helper.delay(3000);

            location.href = "/profil-penceramah";
        } catch (error) {
            Toastify({
                node: cash("#failed-notification-content")
                    .clone()
                    .removeClass("hidden")[0],
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            }).showToast();
        }
    });

    cash("#nama_kluster").on('change', async (event) => {
        axios.get('rating-penceramah/list-program/' + event.target.value)
        .then((response) => {
            let str = '<option>Pilih Satu</option>';
            response.data.forEach(element => {
                str += `<option value="${element.id}">${element.nama_submodul}</option>`
            });
            cash('#tajuk_program').html(str);
        });
    });

    cash("#tajuk_program").on('change', async (event) => {
        axios.get('rating-penceramah/list-penceramah/' + event.target.value)
        .then((response) => {
            let str = '<option>Pilih Satu</option>';
            response.data.forEach(element => {
                str += `<option value="${element.id}">${element.name}</option>`
            });
            cash('#nama_penceramah').html(str);
        });
    });
})(cash);
