@extends('app')


@section('content')
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
			['key' => "Bắt đầu một doanh nghiệp mới", 'value' => "Bắt đầu một doanh nghiệp mới"],
			['key' => "Vốn lưu động", 'value' => "Vốn lưu động"],
			['key' => "Mở rộng", 'value' => "Mở rộng"],
			['key' => "Cho thuê tài sản thiết b", 'value' => "Cho thuê tài sản thiết bị"],
			['key' => "Giảm nợ", 'value' => "Giảm nợ"],
			['key' => "Khác ...", 'value' => "Khác ..."]
		];
	}

	function q_credit() {
		return [
			['key' => "720+ (Xuất sắc)", 'value' => "720+ (Xuất sắc)"],
			['key' => "680 - 719 (Tuyệt)", 'value' => "680 - 719 (Tuyệt)"],
			['key' => "50 - 679 (Rất tốt)", 'value' => "50 - 679 (Rất tốt)"],
			['key' => "600 - 649 (Tạm được)", 'value' => "600 - 649 (Tạm được)"],
			['key' => "599 or Below (Not So Good)", 'value' => "599 or Below (Không tốt)"]
		];
	}

	function state() {
		return [
			['key' => "Việt Nam", 'value' => "VI"], 
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

	<div class="container fade_table">
		
		@include('partials.navbar_admin')

		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-push-3 ">


			@include('errors.flash_crud')


			{!!
				Form::open([ 'method' => 'PUT', 'route' => ['editInfoCustomer', $customer->id] ])
			!!}
			
				<div class="form-group">
					<label for="full_name" style="font-size: 13px;">Tên Khách hàng (name): </label>
					<input type="text" class="form-control" name="full_name" 
						value="{{ $customer->full_name }}"
					>
				</div>

				<div class="form-group">
					<label for="business" style="font-size: 13px;">Tên đơn vị/doanh nghiệp (business): </label>
					<input type="text" class="form-control" name="business" 
						value="{{ $customer->business  }}"
					>
				</div>
				
				<div class="form-group">
					<label for="industry" style="font-size: 13px;">Nghành nghề (industry)</label>
					<input type="text" class="form-control" name="industry" 
						value="{{ $customer->industry }}"
					>
				</div>

				<div class="form-group">
					<label for="phone" style="font-size: 13px;">Số điện thoại (telephone)</label>
					<input type="text" class="form-control" name="phone" 
						value="{{ $customer->phone }}"
					>
				</div>
				
				<div class="form-group">
					<label for="email" style="font-size: 13px;">Địa chỉ E-mail (email)</label>
					<input type="email" class="form-control" name="email" 
						value="{{ $customer->email }}"
					>
				</div>

				<div class="form-group">
					<label for="state" style="font-size: 13px;">Tiểu bang (state)</label>
					<select name="state" class="form-control" >
						@foreach( state() as $option)
							<option value ="{{ $option['key'] }}" 
								{{ ($customer->state === $option['key']) ? 'selected' : '' }}
							>
							{{ $option['value'] }}
							</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="q_money" style="font-size: 13px;">Bạn cần số tiền tài trợ bao nhiêu ?</label>
					<select name="q_money" class="form-control" >
						@foreach( q_money() as $option)
							<option value ="{{ $option['key'] }}" 
								{{ ($customer->q_money === $option['key']) ? 'selected' : '' }}
							>
							{{ $option['value'] }}
							</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="q_fund" style="font-size: 13px;">Mục đích tài trợ vốn bạn làm gì ?</label>
					<select name="q_fund" class="form-control" >
						@foreach( q_fund() as $option)
							<option value ="{{ $option['key'] }}" 
								{{ ($customer->q_fund === $option['key']) ? 'selected' : '' }}
							>
							{{ $option['value'] }}
							</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="q_credit" style="font-size: 13px;">Phạm vi số điểm tín dụng cá nhân...</label>
					<select name="q_credit" class="form-control" >
						@foreach( q_credit() as $option)
							<option value ="{{ $option['key'] }}" 
								{{ ($customer->q_credit === $option['key']) ? 'selected' : '' }}
							>
							{{ $option['value'] }}
							</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="note" style="font-size: 13px;">Ghi chú:</label>
					<textarea name="note" class="form-control" rows="3">{{ $customer->note }}</textarea>
				</div>


				<button type="submit" class="btn btn-warning">Update</button>
			</form>
		</div>

	</div>

@endsection