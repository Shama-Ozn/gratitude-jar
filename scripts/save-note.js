$(function(){

    $('#btnSave').click(function() {
        let note = $("#note").val();
        $.ajax({
            url: "backend/saveNote.php",
            method: "POST",
            data: {note: note},
            success: function(data){
                if (data == 1) {
                    $("#note").val("")
                    Swal.fire({
                        type: 'success',
                        title: 'Created!',
                        text: 'Note is created!',
                        showConfirmButton: false,
                        width: '88rem',
                    });
                } else {
                    Swal.fire({
                        type: 'warning',
                        title: 'Not created!',
                        text: 'Note not created due to an error!',
                        showConfirmButton: false,
                        width: '88rem',
                    });
                }
            }
        })
        
    })

    $('#random-note').click(function() {
        $.ajax({
            url: "backend/getNote.php",
            method: "GET",
            data: {},
            success: function(data){
                $("#picked-note-text").html(`<p style='color #fff !important; font-size: 30px; font-weight: bold'>${data}</p>`)
            }
        })

        $(".content").toggle(); 
    })
    $('.close-btn').click(function() {
        $(".content").toggle(); 
    })

})