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

	async function tambahAsrama(pristine) {
		// Loading state
		cash("#tambah-asrama")
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

			cash("#tambah-asrama").html("Tambah Asrama");
			return;
		}

		// Post form
		let kod_asrama = cash("#kod_asrama").val();
		let status = cash("#status").val();
		let kluster = cash("#kluster").val();

		const response = await axios.post(`asrama`, {
			kod_asrama,
			status,
			kluster,
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

			location.href = "/pendaftaran-asrama";
		}
	}

	cash(".tambah-asrama-form").each(function () {
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

		cash("#tambah-asrama").on("click", async function (e) {
			e.preventDefault();
			tambahAsrama(pristine);
		});

		cash(".tambah-asrama-form").on("keyup", function (e) {
			if (e.keyCode === 13) {
				e.preventDefault();
				tambahAsrama(pristine);
			}
		});
	});

	cash(".delete-asrama").on("click", async function (e) {
		let id = cash(e.currentTarget).attr("id");

		try {
			await axios.delete(`asrama/${id}`);

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

			location.href = "/pendaftaran-asrama";
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
	async function getAsrama() {
		const response = await axios.get(`asrama`);
		calendarData = response.data.map((d) => {
			const today = dayjs(new Date());
			const tarikh_akhir = dayjs(d.tarikh_akhir);
			return {
				title: d.kod_asrama,
				start: d.tarikh_mula,
				end: d.tarikh_akhir,
				color: tarikh_akhir.isBefore(today) ? "gray" : "blue",
			};
		});
	}

	await getAsrama();

	if (cash("#calendar-asrama").length) {
		let calendar = new Calendar(cash("#calendar-asrama")[0], {
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
