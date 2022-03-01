import Toastify from "toastify-js";
import axios from "axios";
import cash from "cash-dom";

(async function (cash) {
    "use strict";
    cash('document').ready(() => {

        cash('#save-kutipan-yuran').on('click', () => {
            if (cash('select[name="yuran_program').val() == -1) {
                errorToast('Sila Pilih Yuran Program');
                return false;
            };

            let tarikhBayaran = {};
            let noResit = {};

            cash('.tarikh-bayaran').each((index, elem) => {
                tarikhBayaran[cash(elem).data('id')] = cash(elem).val();
            });
            cash('.no-resit').each((index, elem) => {
                noResit[cash(elem).data('id')] = cash(elem).val();
            });

            axios.put('/kutipan-yuran/update/' + cash('#save-kutipan-yuran').data('id'), {
                fee: cash('select[name="yuran_program"]').val(),
                is_free_b40: cash('input[name="is_free_b40"]').is(':checked'),
                tarikhBayaran: tarikhBayaran,
                noResit: noResit
            }).then((response) => {
                successToast('Maklumat Bayaran Berjaya Disimpan').then(() => {
                    window.location.href = window.location.origin + '/kutipan-yuran';
                });
            });
        });

        cash('select[name="yuran_program"]').on('change', () => {
            changeBayaran();
        });

        cash('input[name="is_free_b40"]').on('change', () => {
            if(cash('input[name="is_free_b40"]').is(':checked')) {
                cash('.bayaran-b40').html('PERCUMA');
            } else {
                cash('.bayaran-b40').html(cash('select[name="yuran_program"]').val());
            }
        });
    });

    async function errorToast(message) {
        let toast = cash("#failed-notification-content").clone();
        toast.find('.toast-text').html(message);
        Toastify({
            node: toast.removeClass("hidden")[0],
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true,
        }).showToast();

        await helper.delay(3000);
    }

    async function successToast(message) {
        let toast = cash("#success-notification-content").clone();
        toast.find('.toast-text').html(message);
        Toastify({
            node: toast.removeClass("hidden")[0],
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "top",
            position: "right",
            stopOnFocus: true,
        }).showToast();

        await helper.delay(3000);
    }

    function changeBayaran() {
        if(!cash('input[name="is_free_b40"]').is(':checked')) {
            cash('.bayaran-b40').html(cash('select[name="yuran_program"]').val());
        }
        cash('.bayaran').html(cash('select[name="yuran_program"]').val());
    }

})(cash);
