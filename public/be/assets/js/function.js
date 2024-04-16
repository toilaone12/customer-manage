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

function swalQuestion(title, html, callback){
    Swal.fire({
        title: title,
        icon: 'info',
        html: html,
        showCancelButton: true,
        confirmButtonText:
            '<i class="fa-solid fa-check"></i> Có',
        confirmButtonAriaLabel: 'Đã xóa thành công!',
        cancelButtonText:
            '<i class="fa-solid fa-xmark"></i> Không',
        cancelButtonAriaLabel: 'Đã hủy bỏ'
    }).then((result) => {
        // console.log(arr);
        if(result.isConfirmed){
            callback(true);
        }else{
            callback(false);
        }
    });
}

function swalNotification(title,text,icon,callback){
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showCancelButton: false,
        confirmButtonText: 'Xác nhận',
    }).then((res) => {
        if(res.isConfirmed){
            callback(true);
        }
    });
}
