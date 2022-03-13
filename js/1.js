$(".e-list").slideUp(function() {
    $(".e-button").removeClass("open");
});

$(".e-button").on("click", function() {
    if ($(this).hasClass("open")) {
        $(".e-list").slideUp(function() {
            $(".e-button").removeClass("open");
        });
    } else {
        $(this).addClass("open");
        setTimeout(function() {
            $(".e-list").stop().slideDown();
        }, 200);
    }
});

/*msj*/
const frm = document.querySelector("#frm");

frm.addEventListener("submit", event => {
    event.preventDefault();
    const frm = event.target;
    const formData = {
        name: frm.name.value,
        phone: frm.phone.value,
        /*  email: frm.email.value,
          date: frm.date.value*/
    };

    const URL = `https://api.whatsapp.com/send?phone=5493412295930&text=Que tal NBS.STYLES quierolaremera de%20en color,${formData.name}%20y %20en%20talle,${formData.phone}%20gg%20&source=&data=`;

    window.open(URL, "_blank");
});