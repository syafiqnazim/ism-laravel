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
        if(event.target.value == "") return false;
        axios.get('rating-penceramah/list-program/' + event.target.value)
        .then((response) => {
            let str = '<option value="">Pilih Satu</option>';
            response.data.forEach(element => {
                str += `<option value="${element.id}">${element.nama_kursus}</option>`
            });
            cash('#tajuk_program').html(str);
        });
    });

    cash("#tajuk_program").on('change', async (event) => {
        if(event.target.value == "") return false;
        axios.get('rating-penceramah/list-penceramah/' + event.target.value)
        .then((response) => {
            let str = '<option value="">Pilih Satu</option>';
            response.data.forEach(element => {
                str += `<option value="${element.id}">${element.name}</option>`
            });
            cash('#nama_penceramah').html(str);
        });
    });

    cash("#nama_penceramah").on('change', async (event) => {
        if(event.target.value == "") return false;
        axios.get('rating-penceramah/list-submodul/' + event.target.value + '/' + cash("#tajuk_program").val())
        .then((response) => {
            let str = '';
            let count = 1;
            response.data.forEach(element => {
                str += `<tr>
                            <td class="py-3 border-2 border-gray-400">${count}</td>
                            <td class="py-3 border-2 border-gray-400">${element.nama_submodul}</td>
                            <td class="py-3 border-2 border-gray-400">
                                <div class="col-span-1 input-form">
                                    <div class="flex flex-row items-start justify-center space-x-3">
                                        <div>
                                            <input type="radio" id="rate_modul_${count}_1" name="rate_modul_${count}" value="1" data-pristine-required>
                                            <label for="rate_modul_${count}_1">1</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_modul_${count}_2" name="rate_modul_${count}" value="2" data-pristine-required>
                                            <label for="rate_modul_${count}_2">2</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_modul_${count}_3" name="rate_modul_${count}" value="3" data-pristine-required>
                                            <label for="rate_modul_${count}_3">3</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_modul_${count}_4" name="rate_modul_${count}" value="4" data-pristine-required>
                                            <label for="rate_modul_${count}_4">4</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_modul_${count}_5" name="rate_modul_${count}" value="5" data-pristine-required>
                                            <label for="rate_modul_${count}_5">5</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_modul_${count}_6" name="rate_modul_${count}" value="6" data-pristine-required>
                                            <label for="rate_modul_${count}_6">6</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_modul_${count}_7" name="rate_modul_${count}" value="7" data-pristine-required>
                                            <label for="rate_modul_${count}_7">7</label><br>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        <tr>`;
                count++;
            });
            cash('#modul_rate_section').html(str);
        });
    });

    let pristine = new Pristine(cash("#rate-penceramah-form"), {
        classTo: "input-form",
        errorClass: "has-error",
        errorTextParent: "input-form",
        errorTextClass: "text-theme-24 mt-2",
    });

    cash("#rate-penceramah").on("click", async function (e) {
        e.preventDefault();
        ratePenceramah(pristine);
    });

    cash(".rate-penceramah-form").on("keyup", function (e) {
        if (e.keyCode === 13) {
            e.preventDefault();
            ratePenceramah(pristine);
        }
    });

    async function ratePenceramah(pristine) {
        cash("#rate-penceramah")
            .html(
                '<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>'
            )
            .svgLoader();

        let valid = pristine.validate();

        if (!valid) {
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

            cash("#rate-penceramah").html("Rate Penceramah");
            return;
        }

        // Post form
        var formData = new FormData(cash('#rate-penceramah-form'))
        const response = await axios.post(`rate-penceramah`, {
        });

        if (response.status === 201) {
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

            location.href = "/pendaftaran-kursus";
        }
    }
    
})(cash);
