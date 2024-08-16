		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

		<!-- Bootstrap4 js-->
		<script src="{{URL::asset('assets/plugins/bootstrap/popper.min.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!--Othercharts js-->
		<script src="{{URL::asset('assets/plugins/othercharts/jquery.sparkline.min.js')}}"></script>

		<!-- Circle-progress js-->
		<script src="{{URL::asset('assets/js/circle-progress.min.js')}}"></script>

		<!-- Jquery-rating js-->
		<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

		<!--Sidemenu js-->
		<script src="{{URL::asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

		<!-- P-scroll js-->
		<script src="{{URL::asset('assets/plugins/p-scrollbar/p-scrollbar.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/p-scrollbar/p-scroll1.js')}}"></script>
		<script src="{{URL::asset('assets/plugins/p-scrollbar/p-scroll.js')}}"></script>

		@yield('js')
		<!-- Simplebar JS -->
		<script src="{{URL::asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
		<!-- Custom js-->
		<script src="{{URL::asset('assets/js/custom.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
     $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
		$(document).on("click", ".action_publish", function(event) {
				event.preventDefault();
				var id = $(this).attr('rel');
				var status = $(this).attr('status');
				$.ajax({
					type: 'POST',
					url: "{{url('admin/update-status')}}",
					data: {
						'id': id,
						'status': status
					},
					async: false,
					success: function(test_body) {
						location.reload();
					}
				});
			});

$(document).on('click', '.delete_record', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    
    swal({
            title: "Are you sure!",
            text: "You will not be able to recover this imaginary file!",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonColor : "#DD6B55",
            confirmButtonText: "Yes!",
            showCancelButton: true,
        },
        function() {
            $.ajax({
                type: "delete",
				url: "{{url('admin/delete')}}/" + id,
                data: {id:id,_token:CSRF_TOKEN},
                success: function (data) {
                        swal("Deleted!", "Product has been deleted.", "success");
						location.reload();
                    }         
            }); 
        });
 });
$(document).on('click', '.delete_qoute', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    
    swal({
            title: "Are you sure!",
            text: "You will not be able to recover this imaginary file!",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonColor : "#DD6B55",
            confirmButtonText: "Yes!",
            showCancelButton: true,
        },
        function() {
            $.ajax({
                type: "POST",
				url: "{{url('admin/delete_qoute')}}/" + id,
                data: {id:id,_token:CSRF_TOKEN},
                success: function (data) {
                        swal("Deleted!", "Product has been deleted.", "success");
						location.reload();
                    }         
            }); 
        });
});
</script>