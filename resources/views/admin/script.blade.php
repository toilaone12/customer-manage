<script src="{{asset('be/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('be/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('be/assets/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('be/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('be/assets/js/off-canvas.js')}}"></script>
<script src="{{asset('be/assets/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('be/assets/js/template.js')}}"></script>
<script src="{{asset('be/assets/js/settings.js')}}"></script>
<script src="{{asset('be/assets/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('be/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
<script src="{{asset('be/assets/js/dashboard.js')}}"></script>
<script src="{{asset('be/assets/js/proBanner.js')}}"></script>
<script src="{{asset('be/assets/js/function.js')}}"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let table = new DataTable('#myTable',{
        responsive: true,
        scrollX: true, // Kích hoạt cuộn ngang
        language: {
            processing: "Đang xử lý...",
            search: "Tìm kiếm:",
            lengthMenu: "Hiển thị _MENU_ mục",
            info: "Hiển thị _START_ đến _END_ của _TOTAL_ mục",
            infoEmpty: "Hiển thị 0 đến 0 của 0 mục",
            infoFiltered: "(lọc từ _MAX_ mục)",
            infoPostFix: "",
            loadingRecords: "Đang tải...",
            zeroRecords: "Không tìm thấy kết quả nào phù hợp",
            emptyTable: "Không có dữ liệu",
            paginate: {
                first: "Đầu",
                previous: "Trước",
                next: "Sau",
                last: "Cuối"
            },
            aria: {
                sortAscending: ": sắp xếp tăng dần",
                sortDescending: ": sắp xếp giảm dần"
            }
        }
    });
</script>
@include('admin.ajax')
