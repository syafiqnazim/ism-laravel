import Toastify from "toastify-js";
import axios from "axios";
import cash from "cash-dom";
import Pristine from "pristinejs";

(function (cash) {
    "use strict";

    cash(".delete-button").on("click", async function (e) {
        let id = cash(e.currentTarget).attr("id");

        try {
            await axios.delete(`users/${id}`);

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

            location.href = "/senarai-pengguna";
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
