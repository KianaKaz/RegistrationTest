$('#add').on('submit',function () {
    var that = $(this),
        contents=that.serialize();
    $.ajax({
        url:'https://37f32cl571.execute-api.eu-central-1.amazonaws.com/default/wunderfleet-recruiting-backend-dev-save-payment-data',
        dataType:'json',
        type:'post',
        data:'contents',
        success:function (data) {

            console.log(data);
        }
    });
    return false
});