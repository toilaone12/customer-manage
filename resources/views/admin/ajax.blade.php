<script>
    $(function(){
        $('.delete-customer').on('click',function(e){
            e.preventDefault();
            let url = "{{route('customer.delete')}}";
            let id = $(this).attr('data-id');
            let data = {
                id: id,
            }
            getAjax(url,data,'json',function(data){
                console.log(data);
            })
        })
    });
</script>
