document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".js-bootbox-alert-smartadmin").forEach(function(elem) {
        elem.addEventListener("click", function(event) {
            event.preventDefault(); // Mencegah perilaku default

            initApp.playSound('/admin/media/sound', 'messagebox')

            var elem = this;
            var title = elem.getAttribute("data-title");
            var message = elem.getAttribute("data-message");
            //var confirmUrl = elem.getAttribute("data-confirm-url");
            var autoRedirectUrl = elem.getAttribute("data-auto-redirect-url");
            var secondsLeft = 10; // Waktu dalam detik

            // Fungsi untuk memperbarui tampilan timer
            function updateTimerDisplay() {
                document.getElementById("timer-display").innerText = "Otomatis selama "+secondsLeft + " detik";
                secondsLeft--;

                if (secondsLeft < 0) {
                    clearTimeout(autoRedirectTimer);
                    window.location.href = autoRedirectUrl; // Lakukan perpindahan otomatis di sini jika diperlukan
                }
            }

            // Timer untuk update timer display
            var timerInterval = setInterval(updateTimerDisplay, 1000);

            // Konfigurasi untuk bootbox
            bootbox.confirm({
                title: "<i class='fal fa-times-circle text-danger mr-2'></i> <span class='text-danger fw-300'><strong>"+title+"</strong></span>",
                message: "<span class='text-danger fw-900 font-italic'>Peringatan: </span><strong>"+message+"</strong><br><br> <span class='text-info fw-300 font-italic fs-nano' id='timer-display'></span>",
                buttons: {
                    confirm: {
                        label: 'Ya',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'Tidak',
                        className: 'btn-danger'
                    }
                },
                className: "modal-alert",
                closeButton: false,
                callback: function (result) {
                    clearInterval(timerInterval); // Hentikan update timer
                    clearTimeout(autoRedirectTimer); // Batalkan timer saat tombol diklik
                    if (result) {
                        window.location.href = autoRedirectUrl; // Gunakan URL dinamis
                    } else {
                        console.log("Action cancelled.");
                    }
                }
            });

            // Timer untuk redirect otomatis
            var autoRedirectTimer = setTimeout(function() {
                clearInterval(timerInterval); // Hentikan update timer
                window.location.href = autoRedirectUrl; // Gunakan URL dinamis
            }, secondsLeft * 1000); // Convert detik menjadi milidetik
        });
    });
});
