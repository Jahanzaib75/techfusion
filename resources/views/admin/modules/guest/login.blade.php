@extends('admin.master3')
@section('css')
@endsection
@section('content')
<div class="page">
			<div class="page-single">
				<div class="p-5">
					<div class="row">
						<div class="col mx-auto">
							<div class="row justify-content-center">
								<div class="col-lg-9 col-xl-8">
									<div class="card-group mb-0">
										<div class="card p-4">
											<div class="card-body">
												<div class="text-center title-style mb-6">
													<h1 class="mb-2">Login</h1>
													<hr>
													<p class="text-muted">Sign In to your account</p>
												</div>
                                                <form class="validationForm auth-login-form" action="javascript:void(0)" method="POST">
                                                    @csrf
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-user"></i>
                                                            </div>
                                                        </div>
                                                        <input type="text" name="email" class="form-control" placeholder="email address">
                                                    </div>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-lock"></i>
                                                            </div>
                                                        </div>
                                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-success btn-block px-4 submit_button">Login</button>
                                                        </div>
                                                        <div class="col-12 text-center">
                                                            <a href="{{ url('/' . $page='forgot-password-3')}}" class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
                                                        </div>
                                                    </div>
                                                </form>
											</div>
										</div>
										<div class="card text-white bg-success py-5 d-md-down-none page-content mt-0">
											<div class="text-center justify-content-center page-single-content">
												<div class="box">
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
													<div></div>
												</div>
												<img src="{{URL::asset('assets/images/png/login.png')}}" alt="img">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
@endsection
@section('js')
@endsection
