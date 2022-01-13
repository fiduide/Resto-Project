function Notify(message, stats) {
    $(document).ready(function () {
        $("#toastContainer").append(`
            <div class="toast fade" style="position: fixed; bottom: 100px; right: 30px; z-index: 1;  min-width:300px;">
                <div class="toast-header">
                    <img src="public/img/logo/logo_fond_vide.png" style="width: 50px"class="rounded mr-2" alt="...">
                <strong class="mr-auto">Pizza Lab</strong>
                <small>moins d'une minute</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="toast-body text-center">
                ${message}
                </div>
            </div>
        </div>
        `)
        $('.toast').addClass('show');
        setTimeout(() => {
            $('.toast').toggle('fade hide');
        }, 3000);
    });
}