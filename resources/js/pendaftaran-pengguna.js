import Toastify from "toastify-js";
import axios from "axios";
import cash from "cash-dom";
import Pristine from "pristinejs";

(function (cash) {
    "use strict";

    async function register(pristine) {
        // Loading state
        cash("#btn-register")
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

            cash("#btn-register").html("Daftar");
        }

        // Post form
        let name = cash("#name").val();
        let email = cash("#email").val();
        let password = cash("#password").val();
        let password_confirmation = cash("#password_confirmation").val();
        let ic_number = cash("#ic_number").val();
        let phone_number = cash("#phone_number").val();
        let position = cash("#position").val();
        let department = cash("#department").val();
        let user_role = parseInt(cash("#user_role").val());

        const response = await axios.post(`users`, {
            name,
            email,
            password,
            password_confirmation,
            ic_number,
            phone_number,
            position,
            department,
            user_role,
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

            location.href = "/pendaftaran-pengguna";
        }
    }

    cash(".register-form").each(function () {
        let pristine = new Pristine(this, {
            classTo: "input-form",
            errorClass: "has-error",
            errorTextParent: "input-form",
            errorTextClass: "text-theme-24 mt-2",
        });

        pristine.addValidator(
            cash(this).find('input[id="password_confirmation"]')[0],
            function (value) {
                console.log(`value`, value);
                if (value.length || value === password) {
                    return true;
                }
                return false;
            },
            "This field is URL format only",
            2,
            false
        );

        cash(this).on("submit", function (e) {
            e.preventDefault();
            register(pristine);
        });
    });
})(cash);
