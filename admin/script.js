$(document).ready(function(){
    $("#user-feedbacks").load('./get_user-feedback.php');
    $('#pin-form').submit(function(){
        let pin = $("input[name='pin']").val();

        $.ajax({
            type: "POST",
            url: "./index.php",
            data: {pin: pin},
            success: function(){
                $("input[name='pin']").val("");
            }
        });
    });
});