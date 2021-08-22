import Toastify from "toastify-js";
import axios from "axios";
import cash from "cash-dom";
import Pristine from "pristinejs";

(function (cash) {
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
})(cash);
