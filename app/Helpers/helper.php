<?php 

namespace App\Helpers;

/**
* 
*/
class Helper
{

	public static function q_money() {
		return [
			['key' => "$0 - $10,000", 'value'=>"$0 - $10,000"],
			['key' => "$10,000 - $50,000", 'value'=>"$10,000 - $50,000"],
			['key' => "$50,000 - $100,000", 'value'=>"$50,000 - $100,000"],
			['key' => "$100,000 - $200,000", 'value'=>"100,000 - $200,000"],
			['key' => "$200,000 - $500,000", 'value'=>"$200,000 - $500,000"],
			['key' => "$500,000+", 'value' => "$500,000s"]
		];
	}

	public static function q_fund() {
		return [
			['key' => "Startup", 'value' => "Bắt đầu một doanh nghiệp mới"],
			['key' => "Working Capital", 'value' => "Vốn lưu động"],
			['key' => "Expansion", 'value' => "Mở rộng"],
			['key' => "Equipment Leases", 'value' => "Cho thuê tài sản thiết bị "],
			['key' => "Debt Consolidation", 'value' => "Giảm nợ"],
			['key' => "Other", 'value' => "Khác ..."]
		];
	}

	public static function q_credit() {
		return [
			['key' => "720+ (Excellent)", 'value' => "720+ (Xuất sắc)"],
			['key' => "680 - 719 (Great)", 'value' => "680 - 719 (Tuyệt)"],
			['key' => "50 - 679 (Good)", 'value' => "50 - 679 (Tốt)"],
			['key' => "600 - 649 (Ok)", 'value' => "600 - 649 (Được)"],
			['key' => "599 or Below (Not So Good)", 'value' => "599 or Below (Không tốt)"]
		];
	}

	public static function state() {
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

	public static function validateReactToken($request) { 
		if(!$request->token && $request->token != md5('token_ajax')) {  return abort(404);  } 
	}

}


// Validate ajax json [token] => not token return view 404  dcc14441052fab9aa84ce78d7fd657d6
