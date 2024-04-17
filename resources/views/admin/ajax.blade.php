<script>
    $(function(){
        //xoa khach hang
        $('.delete-customer').on('click',function(e){
            e.preventDefault();
            let url = "{{route('customer.delete')}}";
            let id = $(this).attr('data-id');
            let data = {
                id: id,
            }
            swalQuestion('Thông báo xóa thông tin khách hàng!','<span class="fs-16">Bạn có muốn xóa thông tin khách hàng này không?</span>', function(alert){
                if(alert){
                    getAjax(url,data,'json',function(noti){
                        if(noti.res == 'success'){
                            swalNotification(noti.title,noti.text,noti.icon, function(alert){
                                if(alert){
                                    location.reload();
                                }
                            })
                        }
                    });
                }
            })
        })
        //xoa bao gia
        $('.delete-quote').on('click',function(e){
            e.preventDefault();
            let url = "{{route('quote.delete')}}";
            let id = $(this).attr('data-id');
            let data = {
                id: id,
            }
            swalQuestion('Thông báo xóa thông tin báo giá!','<span class="fs-16">Bạn có muốn xóa thông tin báo giá này không?</span>', function(alert){
                if(alert){
                    getAjax(url,data,'json',function(noti){
                        if(noti.res == 'success'){
                            swalNotification(noti.title,noti.text,noti.icon, function(alert){
                                if(alert){
                                    location.reload();
                                }
                            })
                        }
                    });
                }
            })
        })
        //xoa hop dong
        $('.delete-contract').on('click',function(e){
            e.preventDefault();
            let url = "{{route('contract.delete')}}";
            let id = $(this).attr('data-id');
            let data = {
                id: id,
            }
            swalQuestion('Thông báo xóa thông tin hợp đồng!','<span class="fs-16">Bạn có muốn xóa thông tin hợp đồng này không?</span>', function(alert){
                if(alert){
                    getAjax(url,data,'json',function(noti){
                        if(noti.res == 'success'){
                            swalNotification(noti.title,noti.text,noti.icon, function(alert){
                                if(alert){
                                    location.reload();
                                }
                            })
                        }
                    });
                }
            })
        })
        //xoa ho so thanh toan
        $('.delete-payment').on('click',function(e){
            e.preventDefault();
            let url = "{{route('payment.delete')}}";
            let id = $(this).attr('data-id');
            let data = {
                id: id,
            }
            swalQuestion('Thông báo xóa thông tin hồ sơ thanh toán!','<span class="fs-16">Bạn có muốn xóa thông tin hồ sơ thanh toán này không?</span>', function(alert){
                if(alert){
                    getAjax(url,data,'json',function(noti){
                        if(noti.res == 'success'){
                            swalNotification(noti.title,noti.text,noti.icon, function(alert){
                                if(alert){
                                    location.reload();
                                }
                            })
                        }
                    });
                }
            })
        })
    });
</script>
@if(request()->is('admin/payment/insert'))
<script>
    new AutoNumeric('#soTien', {
        digitGroupSeparator: '.',
        decimalCharacter: ',',
        decimalPlaces: 0, // Điều chỉnh số lượng chữ số thập phân theo nhu cầu
        minimumValue: '0',
        allowDecimalPadding: true // Giữ nguyên giá trị này
    });
</script>
@elseif(request()->is('admin/payment/edit'))
<script>
new AutoNumeric('#soTienMoi', {
    digitGroupSeparator: '.',
    decimalCharacter: ',',
    decimalPlaces: 0, // Điều chỉnh số lượng chữ số thập phân theo nhu cầu
    minimumValue: '0',
    allowDecimalPadding: true // Giữ nguyên giá trị này
});
</script>
@endif
