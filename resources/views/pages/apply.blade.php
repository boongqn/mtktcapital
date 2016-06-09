@extends('app')


@section('content')
	<style type="text/css">
		.form_apply .form-control {
			height: initial;
		}
	</style>

	<div class="container">
		
		<br><br><br>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="row">
				@if(Session::has('msg'))
			       @include('errors.flash_apply')
			    @endif
			</div>
		</div>
		


		{!! Form::open([
			'method'=>'POST', 'class' => 'form_apply', 'route' => 'apply.store'
		]) !!}
				
				
        		

				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
	                <div>
                        <h3 class="p2contact" align="left">Thông Tin Liên Hệ</h3>


						<input type="text" name="role_id" value="apply" hidden="hidden" >

                        <div class="form-group 
                        	{{ $errors->has('first_name') ? 'has-error' : '' }}"
                        >
                        	<input class="form-control input-sm" name="first_name"
	                            placeholder="Tên của bạn (Bắt buộc)" type="text"
	                            value="{{ old('first_name') }}" 
	                        >
                        </div>


                        	<div style="clear:both;"></div>
						

						<div class="form-group 
                        	{{ $errors->has('last_name') ? 'has-error' : '' }}"
						>
                        	<input class="form-control input-sm" name="last_name"
	                            placeholder="Họ của bạn (Bắt buộc)" type="text" 
                        		value="{{ old('last_name') }}" 
	                        >
                        </div>

                       		<div style="clear:both;"></div>

                        <div  class="form-group 
                        	{{ $errors->has('business') ? 'has-error' : '' }}"
                        >
                        	<input class="form-control input-sm" name="business"
	                            placeholder="Tên doanh nghiệp (Bắt buộc)" type="text"
	                            value="{{ old('business') }}" 
	                        >
                        </div>

                       		<div style="clear:both;"></div>


                        <div class="form-group 
                        	{{ $errors->has('industry') ? 'has-error' : '' }}"
                        >
                        	<input class="form-control input-sm" name="industry"
	                            placeholder="Nghành nghề (Bắt buộc)"  type="text"
	                            value="{{ old('industry') }}" 
	                        >
                        </div>


                        	<div style="clear:both;"></div>

                        <div class="form-group 
                        	{{ $errors->has('phone') ? 'has-error' : '' }}"
                        >
                        	<input class="form-control input-sm" name="phone"
	                            placeholder="Số điện thoại  (Bắt buộc)"  type="text"
	                            value="{{ old('phone') }}" 
	                        >
                        </div>

                        	<div style="clear:both;"></div>

                        <div class="form-group 
                        	{{ $errors->has('email') ? 'has-error' : '' }}"
                        >
                        	<input class="form-control input-sm" name="email"
	                            placeholder="Địa chỉ email  (Bắt buộc)"  type="text"
	                            value="{{ old('email') }}" 
	                        >
                        </div>

                        <div style="clear:both;"></div>
                        <div style="clear:both;"></div>
						
                        <div class="form-group 
                        	{{ $errors->has('state') ? 'has-error' : '' }}"
                        >
                            <select id="state" name="state" class="form-control" style="font-size: 18px;" 
                            >
								<option value ="">Tiểu bang</option>
								@foreach( \App\Helpers\Helper::state() as $option)
									<option value ="{{ $option['key'] }}" 
										{{ old('state') === $option['key'] ? 'selected' : '' }}
									>
									{{ $option['value'] }}
									</option>
								@endforeach
							</select>
                        </div> <!-- End  select -->


	                </div>
				</div>
				
						

				<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 float-right" >
	                <div>
	                    <h3 class="p2contact" align="left">Câu Hỏi Tài Trợ</h3>
							
							
	                    <div class="form-group 
	                        {{ $errors->has('q_money') ? 'has-error' : '' }}"
	                    >
	                        <select name="q_money"  class="form-control" style="font-size: 18px;" >
								<option value ="">Bạn cần số tiền tài trợ bao nhiêu ?</option>
								@foreach( \App\Helpers\Helper::q_money() as $option)
									<option value ="{{ $option['key'] }}" 
										{{ old('q_money') === $option['key'] ? 'selected' : '' }}
									>
									{{ $option['value'] }}
									</option>
								@endforeach
	                        </select>
	                    </div>
	                    <!-- End select -->

	                    <div style="clear:both;"></div>



	                    <div class="form-group 
	                        {{ $errors->has('q_fund') ? 'has-error' : '' }}"
	                    >
	                        <select name="q_fund"  class="form-control" style="font-size: 18px;" >
								<option value ="">Mục đích tài trợ vốn bạn làm gì ?</option>
								@foreach( \App\Helpers\Helper::q_fund() as $option)
									<option value ="{{ $option['key'] }}" 
										{{ old('q_fund') === $option['key'] ? 'selected' : '' }}
									>
									{{ $option['value'] }}
									</option>
								@endforeach
	                        </select>
	                    </div>


	                    <div style="clear:both;"></div>



	                    <div class="form-group 
	                        {{ $errors->has('q_credit') ? 'has-error' : '' }}"
	                    >	
	                        <select name="q_credit" class="form-control" style="font-size: 18px;" >	
								<option value="">Phạm vi số điểm tín dụng cá nhân...</option>
								@foreach( \App\Helpers\Helper::q_credit() as $option)
									<option value ="{{ $option['key'] }}" 
										{{ old('q_credit') === $option['key'] ? 'selected' : '' }}
									>
									{{ $option['value'] }}
									</option>
								@endforeach
	                        </select>
	                    </div>



	                    <div class="form-group">

	                        <textarea cols="50" rows="5" name="note" class="form-control" placeholder="Ghi chú"></textarea>

	                    </div>
	                </div>
				</div>

	                
	            <div style="clear:both;"></div> <hr>

	            <div style="margin-left:25px">
	            	<input type="submit" key="SUBMIT" value="Xác nhận">
	            </div>



           

            
        {!! Form::close() !!}


    </div><!-- /.container -->



@endsection