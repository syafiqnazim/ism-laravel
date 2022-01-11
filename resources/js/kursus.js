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
import dayjs from "dayjs";

(async function (cash) {
    "use strict";

    async function tambahKursus(pristine) {
        // Loading state
        cash("#tambah-kursus")
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

            cash("#tambah-kursus").html("Tambah Kursus");
            return;
        }

        // Post form
        let nama_kursus = cash("#nama_kursus").val();
        let kapasiti = cash("#kapasiti").val();
        let kluster = cash("#kluster").val();
        let peruntukan = cash("#peruntukan").val();

        const response = await axios.post(`kursus`, {
            nama_kursus,
            kapasiti,
            kluster,
            peruntukan,
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

    cash(".tambah-kursus-form").each(function () {
        let pristine = new Pristine(this, {
            classTo: "input-form",
            errorClass: "has-error",
            errorTextParent: "input-form",
            errorTextClass: "text-theme-24 mt-2",
        });

        pristine.addValidator(
            cash(this).find('select[id="kluster"]')[0],
            function (value) {
                if (value === "0") {
                    return false;
                }
                return true;
            },
            "Sila pilih salah satu.",
            2,
            false
        );

        cash("#tambah-kursus").on("click", async function (e) {
            e.preventDefault();
            tambahKursus(pristine);
        });

        cash(".tambah-kursus-form").on("keyup", function (e) {
            if (e.keyCode === 13) {
                e.preventDefault();
                tambahKursus(pristine);
            }
        });
    });

    cash(".delete-kursus").on("click", async function (e) {
        let id = cash(e.currentTarget).attr("id");

        try {
            await axios.delete(`kursus/${id}`);

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

    // Rating Kursus

    cash(".delete-rating-kursus").on("click", async function (e) {
        let id = cash(e.currentTarget).attr("id");

        try {
            await axios.delete(`rating-kursus/${id}`);

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

            location.href = "/rating-kursus";
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

    cash('#rate_kursus_kluster').on('change', (event) => {
        if(event.target.value == "") return false;
        axios.get('rating-penceramah/list-program/' + event.target.value)
        .then((response) => {
            let str = '<option value="">Pilih Satu</option>';
            response.data.forEach(element => {
                str += `<option value="${element.id}">${element.nama_kursus}</option>`
            });
            cash('#rate_kursus_program').html(str);
        });
    });

    cash('#rate_kursus_program').on('change', (event) => {
        if(event.target.value == "") return false;
        axios.get('rating-kursus/list-submodul/' + event.target.value)
        .then((response) => {
            let str = '';
            let count = 1;
            response.data.forEach(element => {
                str += `<tr class="${count%2?'':'bg-gray-300'}">
                            <input type="hidden" name="modul_${count}_id" value="${element.id}" />
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
            cash('#rate_kursus_modul_rate_section').html(str);
        });
        axios.get('rating-kursus/list-objektif/' + event.target.value)
        .then((response) => {
            let str = '';
            let count = 1;
            response.data.forEach(element => {
                str += `<tr class="${count%2?'':'bg-gray-300'}">
                            <input type="hidden" name="objektif_${count}_id" value="${element.id}" />
                            <td class="py-3 border-2 border-gray-400">${count}</td>
                            <td class="py-3 border-2 border-gray-400">${element.objektif_kursus}</td>
                            <td class="py-3 border-2 border-gray-400">
                                <div class="col-span-1 input-form">
                                    <div class="flex flex-row items-start justify-center space-x-3">
                                        <div>
                                            <input type="radio" id="rate_objektif_${count}_1" name="rate_objektif_${count}" value="1" data-pristine-required>
                                            <label for="rate_objektif_${count}_1">1</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_objektif_${count}_2" name="rate_objektif_${count}" value="2" data-pristine-required>
                                            <label for="rate_objektif_${count}_2">2</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_objektif_${count}_3" name="rate_objektif_${count}" value="3" data-pristine-required>
                                            <label for="rate_objektif_${count}_3">3</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_objektif_${count}_4" name="rate_objektif_${count}" value="4" data-pristine-required>
                                            <label for="rate_objektif_${count}_4">4</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_objektif_${count}_5" name="rate_objektif_${count}" value="5" data-pristine-required>
                                            <label for="rate_objektif_${count}_5">5</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_objektif_${count}_6" name="rate_objektif_${count}" value="6" data-pristine-required>
                                            <label for="rate_objektif_${count}_6">6</label><br>
                                        </div>
                                        <div>
                                            <input type="radio" id="rate_objektif_${count}_7" name="rate_objektif_${count}" value="7" data-pristine-required>
                                            <label for="rate_objektif_${count}_7">7</label><br>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        <tr>`;
                count++;
            });
            cash('#rate_kursus_objektif_rate_section').html(str);
        });
    });

    cash('#rate-kursus-form').on('submit', function(event) {
        event.preventDefault();
        rateKursus(initPristine(event.target));
    });

    cash('.edit-kursus-form').on('submit', function(event) {
        event.preventDefault();
        updateRatingKursus(initPristine(event.target), event.target);
    });

    async function updateRatingKursus(pristine, form) {
        cash(".update-rating-kursus")
            .html(
                '<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>'
            )
            .svgLoader();

        let valid = pristine.validate();

        if (!valid) {
            failedToast();

            cash(".update-rating-kursus").html("Tukar Maklumat");
            return;
        }

        // Post form
        var formData = new FormData(form);
        var data = {};
        for (var [key, value] of formData.entries()) { 
            data[key] = value;
        }
        const response = await axios.put(`rating-kursus/${cash(form).data('id')}`, data);
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

            location.href = "/rating-kursus";
        } else {
            failedToast();
            cash(".update-rating-kursus").html("Tukar Maklumat");
        }
    }

    async function rateKursus(pristine) {
        cash("#rate-kursus")
            .html(
                '<i data-loading-icon="oval" data-color="white" class="w-5 h-5 mx-auto"></i>'
            )
            .svgLoader();

        let valid = pristine.validate();

        if (!valid) {
            failedToast();

            cash("#rate-kursus").html("Rate Kursus");
            return;
        }

        // Post form
        var formData = new FormData(document.getElementById('rate-kursus-form'))
        const response = await axios.post(`rating-kursus`, formData);
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

            location.href = "/rating-kursus";
        } else {
            failedToast();
            cash("#rate-kursus").html("Rate Kursus");
        }
    }

    function initPristine(form) {
        let pristine = new Pristine(form, {
            classTo: "input-form",
            errorClass: "has-error",
            errorTextParent: "input-form",
            errorTextClass: "text-theme-24 mt-2",
        });

        return pristine;
    }

    function failedToast() {
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

    // CALENDAR PART

    let calendarData;
    async function getKursus() {
        const response = await axios.get(`kursus`);
        calendarData = response.data.map((d) => {
            const today = dayjs(new Date());
            const tarikh_akhir = dayjs(d.tarikh_akhir);
            return {
                title: d.nama_kursus,
                start: d.tarikh_mula,
                end: d.tarikh_akhir,
                color: tarikh_akhir.isBefore(today) ? "gray" : "blue",
            };
        });
    }

    await getKursus();

    if (cash("#calendar-kursus").length) {
        let calendar = new Calendar(cash("#calendar-kursus")[0], {
            eventClick: function (info) {
                var eventObj = info.event;
                alert("Clicked " + eventObj.title);
            },
            plugins: [
                interactionPlugin,
                dayGridPlugin,
                timeGridPlugin,
                listPlugin,
                momentPlugin,
            ],
            titleFormat: "D MMM YYYY",
            droppable: false,
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
            },
            navLinks: true,
            editable: false,
            dayMaxEvents: true,
            events: calendarData,
            drop: function (info) {
                if (
                    cash("#checkbox-events").length &&
                    cash("#checkbox-events")[0].checked
                ) {
                    cash(info.draggedEl).parent().remove();

                    if (cash("#calendar-events").children().length == 1) {
                        cash("#calendar-no-events").removeClass("hidden");
                    }
                }
            },
        });
        calendar.render();
    }
})(cash);
