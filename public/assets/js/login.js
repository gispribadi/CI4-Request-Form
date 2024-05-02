// LOGIN PAGE
const loginBtn = document.getElementById("login");
const signinBtn = document.getElementById("sigin");

loginBtn.addEventListener("click", (e) => {
    let parent = e.target.parentNode.parentNode;
    if (parent) {
        Array.from(parent.classList).find((element) => {
            if (element !== "slide-up") {
                parent.classList.add("slide-up");
            } else {
                if (signinBtn && signinBtn.parentNode) {
                    signinBtn.parentNode.classList.add("slide-up");
                }
                parent.classList.remove("slide-up");
            }
        });
    }
});

signinBtn.addEventListener("click", (e) => {
    let parent = e.target.parentNode;
    if (parent) {
        Array.from(parent.classList).find((element) => {
            if (element !== "slide-up") {
                parent.classList.add("slide-up");
            } else {
                if (loginBtn && loginBtn.parentNode && loginBtn.parentNode.parentNode) {
                    loginBtn.parentNode.parentNode.classList.add("slide-up");
                }
                parent.classList.remove("slide-up");
            }
        });
    }
});


document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('signGuest').addEventListener('click', function (event) {
        event.preventDefault();

        var guestModal = new bootstrap.Modal(document.getElementById('guestModal'));

        guestModal.show();
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Periksa apakah ada modal dengan id 'errorModal' dalam dokumen
    var errorModal = document.getElementById('errorModal');
    
    // Jika modal ditemukan, tampilkan modal
    if (errorModal) {
        var modal = new bootstrap.Modal(errorModal);
        modal.show();
    }
});

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('guestNIK').addEventListener('keypress', function (event) {
        if (event.key === 'Enter') {
            var nikValue = this.value.trim();

            var nikList = ['123456', '789012', '345678'];

            if (nikList.includes(nikValue)) {
                console.log('NIK cocok:', nikValue);
            } else {
                console.log('NIK tidak cocok:', nikValue);
            }
        }
    });

    document.getElementById('enterGuestBtn').addEventListener('click', function () {
        var nikValue = document.getElementById('guestNIK').value.trim();

        var nikList = ['123456', '789012', '345678'];

        if (nikList.includes(nikValue)) {
            var guestNIKInput = document.getElementById('guestNIK');
            var popover = new bootstrap.Popover(guestNIKInput, {
                container: 'body',
                placement: 'top',
                title: 'Succes!',
                content: 'Welcome Employe'
            });
            popover.show();
            
            setTimeout(function () {
                window.location.href = '/';
            }, 500);
        } else {
            document.getElementById('guestNIK').value = '';

            var guestNIKInput = document.getElementById('guestNIK');
            var popover = new bootstrap.Popover(guestNIKInput, {
                container: 'body',
                placement: 'top',
                title: 'Alert!',
                content: 'NIK not found'
            });
            popover.show();
        }
    });
});
