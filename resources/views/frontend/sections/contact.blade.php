{{-- <section class="contact-area section-padding" id="contact-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 text-center">
				<div class="section-title">
					<h3 class="title">Lets Work Together</h3>
					<div class="desc">
						<p>Earum quos animi numquam excepturi eveniet explicabo repellendus rem esse.
							Quae quasi
							odio enim.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<!-- Contact-Form -->
				<form class="contact-form" id="contact-form">
					<div class="row">
						<div class="col-md-4">
							<div class="form-box">
								<input type="text" name="form-name" id="name" class="input-box"
									placeholder="Name">
								<label for="form-name" class="icon lb-name"><i class="fal fa-user"></i></label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-box">
								<input type="text" name="form-email" id="email" class="input-box"
									placeholder="Email">
								<label for="form-email" class="icon lb-email"><i
										class="fal fa-envelope"></i></label>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-box">
								<input type="text" name="form-subject" id="subject" class="input-box"
									placeholder="Subject">
								<label for="form-subject" class="icon lb-subject"><i
										class="fal fa-check-square"></i></label>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-box">
								<textarea class="input-box" id="message" placeholder="Message" cols="30"
									rows="4" name="form-message"></textarea>
								<label for="form-message" class="icon lb-message"><i
										class="fal fa-edit"></i></label>
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-box">
								<button class="button-primary mouse-dir" type="submit" id="submit_btn">Send Now <span
										class="dir-part"></span></button>
							</div>
						</div>
					</div>
				</form>
				<!-- Contact-Form / -->
			</div>
		</div>
	</div>
</section>




@push('scripts')
<script>
	$(document).ready(function() {

		// CSRF token সেট করা
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		// ফর্ম সাবমিশন ইভেন্ট হ্যান্ডলার
		$(document).on('submit', '#contact-form', function(e){
			e.preventDefault();

			let form = $(this);

			$.ajax({
				type: "POST",
				url: "{{ route('contact') }}",
				data: form.serialize(),

				beforeSend:function(){
					$('#submit_btn').prop("disable",true);
					$('#submit_btn').text('Loading....');
				},

				success: function(response){
					console.log(response);
					// success message দেখাতে চাইলে এখানে toastr/swal ব্যবহার করতে পারো
					toastr.success('Message sent successfully!');
					form.trigger("reset");
				},
				error: function(response){
					if(response.status === 422){
						let errors = response.responseJSON.errors;

						$.each(errors, function(key, val){
							toastr.error(val[0]); // error message দেখাবে
						});
					} else {
						toastr.error('Something went wrong!');
					}
				}
			});
		});
	});
</script>
@endpush


{{-- @push('scripts')
	<script>
		$(document).ready(function(){

		// csrf token
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});


		$(document).on('submit', '#contact-form', function(e){
			e.preventDefault();

			$.ajax({
				type: "POST",
				url:"{{ route('contact') }}",
				data: $(this).serialize(),

				success: function(response){
					console.log(response);
				}

				error:function(response){
					if(response.status == 422){
						let errorsMessage = $.parseJSON(response.responseText);

						$.each(errorsMessage.errors,function(key,val){
							console.log(val[0]);
							toaster.success(val[0]);
						})
					}
				}
			})
		})

		})
	</script>
@endpush --}} --}}
