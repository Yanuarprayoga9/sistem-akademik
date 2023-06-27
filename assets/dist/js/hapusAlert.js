function confirmModal(message, callback) {
    var confirmIndex = true;

    var newMessage = message.replace(/(?:\r\n|\r|\n)/g, "<br>");
    $('#modal_confirm_dialog_body').html("" + newMessage + "");
    $('#modal_confirm_dialog').modal('show');

    $('#confirm_cancle').on("click", function() {
        if(confirmIndex) {
            callback(false);
            $('#modal_confirm_dialog').modal('hide');
            confirmIndex = false;
        }
    });

    $('#confirm_ok').on("click", function() {
        if(confirmIndex) {
            callback(true);
            $('#modal_confirm_dialog').modal('hide');
            confirmIndex = false;
        }
    });
}