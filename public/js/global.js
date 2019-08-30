function addPage(url, content) {

    $.ajax({
        type: "post",
        url: url,
        success: function(response) {
            $(content).html(response);
        }
    });
}

addPage('view/reservation.php', '.actionContent');