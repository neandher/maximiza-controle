var Inputmask = {
    init: function () {
        $(".maskPhoneNumber").inputmask("mask", {
            mask: "(999) 999-99999",
        });

        $(".maskCnpj").inputmask("mask", {
            "mask": "99.999.999/9999-99",
        });

        $(".maskCep").inputmask("mask", {
            "mask": "99999-999",
        });
    }
};
jQuery(document).ready(function () {
    Inputmask.init()
});