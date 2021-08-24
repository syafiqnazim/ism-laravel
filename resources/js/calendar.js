import { Calendar } from "@fullcalendar/core";
import interactionPlugin, { Draggable } from "@fullcalendar/interaction";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import listPlugin from "@fullcalendar/list";

(function (cash) {
    if (cash("#calendar").length) {
        if (cash("#calendar-events").length) {
            new Draggable(cash("#calendar-events")[0], {
                itemSelector: ".event",
                eventData: function (eventEl) {
                    return {
                        title: cash(eventEl).find(".event__title").html(),
                        duration: {
                            days: parseInt(
                                cash(eventEl).find(".event__days").text()
                            ),
                        },
                    };
                },
            });
        }

        let calendar = new Calendar(cash("#calendar")[0], {
            plugins: [
                interactionPlugin,
                dayGridPlugin,
                timeGridPlugin,
                listPlugin,
            ],
            droppable: true,
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,timeGridWeek,timeGridDay,listWeek",
            },
            initialDate: "2021-01-12",
            navLinks: true,
            editable: true,
            dayMaxEvents: true,
            events: [
                {
                    title: "Kursus Pengurusan Kewangan",
                    start: "2021-01-05",
                    end: "2021-01-08",
                    color: "red",
                },
                {
                    title: "Kursus Pembangunan Ihsan",
                    start: "2021-01-11",
                    end: "2021-01-15",
                    color: "green",
                },
                {
                    title: "Kursus Sukarelawan",
                    start: "2021-01-17",
                    end: "2021-01-21",
                },
                {
                    title: "Kursus Kewanitaan",
                    start: "2021-01-21",
                    end: "2021-01-24",
                },
                {
                    title: "Program Hari Keluarga",
                    start: "2021-01-24",
                    end: "2021-01-27",
                },
            ],
            // eventColor: "red",
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
