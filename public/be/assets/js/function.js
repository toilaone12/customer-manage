function getAjax(url,data,dataType, success){
    $.ajax({
        method: "GET",
        url: url,
        data: data,
        dataType: dataType,
        success: success,
        error: function(error){
            console.log(error);
        }
    })
}

function postAjax(url,data,dataType,isFormData,success){
    $.ajax({
        method: "POST",
        url: url,
        data: data,
        header: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        processData: isFormData ? false : true,
        contentType: isFormData ? false : 'application/x-www-form-urlencoded',
        dataType: dataType,
        success: success,
        error: function(error){
            console.log(error);
        }
    })
}
