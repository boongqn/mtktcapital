@extends('app')


@section('content')
	<style type="text/css">
		.form_apply .form-control {
			height: initial;
		}
	</style>


	<?php 
		function q_money() {
			return [
				['key' => "$0 - $10,000", 'value'=>"$0 - $10,000"],
				['key' => "$10,000 - $50,000", 'value'=>"$10,000 - $50,000"],
				['key' => "$50,000 - $100,000", 'value'=>"$50,000 - $100,000"],
				['key' => "$100,000 - $200,000", 'value'=>"100,000 - $200,000"],
				['key' => "$200,000 - $500,000", 'value'=>"$200,000 - $500,000"],
				['key' => "$500,000+", 'value' => "$500,000s"]
			];
		}

		function q_fund() {
			return [
				['key' => "Startup", 'value' => "Bắt đầu một doanh nghiệp mới"],
				['key' => "Working Capital", 'value' => "Vốn lưu động"],
				['key' => "Expansion", 'value' => "Mở rộng"],
				['key' => "Equipment Leases", 'value' => "Cho thuê tài sản thiết bị "],
				['key' => "Debt Consolidation", 'value' => "Giảm nợ"],
				['key' => "Other", 'value' => "Khác ..."]
			];
		}

		function q_credit() {
			return [
				['key' => "720+ (Excellent)", 'value' => "720+ (Xuất sắc)"],
				['key' => "680 - 719 (Great)", 'value' => "680 - 719 (Tuyệt)"],
				['key' => "50 - 679 (Good)", 'value' => "50 - 679 (Tốt)"],
				['key' => "600 - 649 (Ok)", 'value' => "600 - 649 (Được)"],
				['key' => "599 or Below (Not So Good)", 'value' => "599 or Below (Không tốt)"]
			];
		}

		function state() {
			return [
				['key' => "VietNamese", 'value' => "VI"], 
				['key' => "Alabama", 'value' => "AL"], 
				['key' => "Alaska", 'value' => "AK"], 
				['key' => "Arizona", 'value' => "AZ"], 
				['key' => "Arkansas", 'value' => "AR"],
				['key' => "California", 'value' => "CA"], 
				['key' => "Colorado", 'value' => "CO"], 
				['key' => "Connecticut", 'value' => "CT"], 
				['key' => "Delaware", 'value' => "DE"],  
				['key' => "District Of Columbia", 'value' => "DC"],
				['key' => "Florida", 'value' => "FL"], 
				['key' => "Georgia", 'value' => "GA"], 
				['key' => "Hawaii", 'value' => "HI"],
				['key' => "Idaho", 'value' => "ID"], 
				['key' => "Illinois", 'value' => "IL"], 
				['key' => "Indiana", 'value' => "IN"], 
				['key' => "Iowa", 'value' => "IA"], 
				['key' => "Kansas", 'value' => "KS"], 
				['key' => "Kentucky", 'value' => "KY"], 
				['key' => "Louisiana", 'value' => "LA"], 
				['key' => "Maine", 'value' => "ME"], 
				['key' => "Maryland", 'value' => "MD"], 
				['key' => "Massachusetts", 'value' => "MA"], 
				['key' => "Michigan", 'value' => "MI"], 
				['key' => "Minnesota", 'value' => "MN"], 
				['key' => "Mississippi", 'value' => "MS"], 
				['key' => "Missouri", 'value' => "MO"], 
				['key' => "Montana", 'value' => "MT"], 
				['key' => "Nebraska", 'value' => "NE"], 
				['key' => "New Hampshire", 'value' => "NH"], 
				['key' => "New Jersey", 'value' => "NJ"], 
				['key' => "New Mexico", 'value' => "NM"], 
				['key' => "New York", 'value' => "NY"], 
				['key' => "North Carolina", 'value' => "NC"], 
				['key' => "North Dakota", 'value' => "ND"], 
				['key' => "Ohio", 'value' => "OH"], 
				['key' => "Oklahoma", 'value' => "OK"], 
				['key' => "Oregon", 'value' => "OR"], 
				['key' => "Pennsylvania", 'value' => "PA"], 
				['key' => "Rhode Island", 'value' => "RI"], 
				['key' => "South Carolina", 'value' => "SC"], 
				['key' => "South Dakota", 'value' => "SD"], 
				['key' => "Tennessee", 'value' => "TN"], 
				['key' => "Texas", 'value' => "TX"], 
				['key' => "Utah", 'value' => "UT"], 
				['key' => "Vermont", 'value' => "VT"], 
				['key' => "Virginia", 'value' => "VA"], 
				['key' => "Washington", 'value' => "WA"], 
				['key' => "West Virginia", 'value' => "WV"], 
				['key' => "Wyoming", 'value' => "WY"] 
			];
		}

	?>




	

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
								@foreach( state() as $option)
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
								@foreach( q_money() as $option)
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
								@foreach( q_fund() as $option)
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
								@foreach( q_credit() as $option)
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