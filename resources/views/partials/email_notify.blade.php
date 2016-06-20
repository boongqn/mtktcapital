<table >
	<tbody>
		<tr>
			<td>
				<h3>Thông tin mới yêu cầu kinh phí của khách hàng :</h3>

				<p>Tên khách hàng: {{ $name }}</p>
				<p>Địa chỉ E-mail: {{ $email }}</p>
				<p>Số điện thoại: {{ $phone }}</p>
				<p>Bang (state): {{ $state }}</p>
				<p>Đơn vị/doanh nghiệp (business) : {{ $business }}</p>
				<p>nghành nghề (industry): {{ $industry }}</p>
				<p>Bạn cần số tiền tài trợ bao nhiêu ? : {{ $q_money }} </p>
				<p>Mục đích tài trợ vốn bạn làm gì ? : {{ $q_fund }} </p>
				<p>Phạm vi số điểm tín dụng cá nhân... : {{ $q_credit }}</p>
				<p>Ghi chú : {{ $note }}</p>
			</td>
		</tr>
	</tbody>
</table>
