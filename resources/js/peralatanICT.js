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

    cash(".delete-pengurusanict").on("click", async function (e) {
        let id = cash(e.currentTarget).attr("id");

        try {
            await axios.delete(`pengurusan-ict/${id}`);

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

            location.href = "/pengurusan-ict";
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

    // CALENDAR PART

    let calendarData;
    async function getPeralatanICT() {
        const response = await axios.get(`pengurusanict`);
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

    await getPeralatanICT();

    if (cash("#calendar-peralatan-ict").length) {
        let calendar = new Calendar(cash("#calendar-peralatan-ict")[0], {
            // eventClick: function (info) {
            //     var eventObj = info.event;
            //     alert("Clicked " + eventObj.title);
            // },
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
