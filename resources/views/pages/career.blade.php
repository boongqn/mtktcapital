@extends('app')


@section('content')
	
	
	

    <div class="container">
        <h2>TUYỂN DỤNG</h2>
        <p></p>
    </div>

    <div class="container">
        <h3>Nhân viên kinh doanh</h3>
        <p style="font-size: 14px; text-align: justify; line-height: 24px;">Chúng tôi luôn tìm kiếm những cá nhân tài năng để tham gia phát triển công ty của chúng tôi. Chúng tôi hoạt động với một tốc độ nhanh nhanh và trong môi trường kinh doanh, nhưng cũng có một nền văn hóa gắn bó. Các ứng cử viên mà muốn xây dựng một sự nghiệp trong môi trường này được khuyến khích nộp đơn. Vai trò của nhân viên kinh doanh sẽ tập trung vào thăm dò và phát triển các mối quan hệ khách hàng mới. Đây là một cấp  độ cho vị trí khởi đầu vào công ty mà luôn sẵn sàng đổi mới pj có cách các doanh nghiệp có được tài chính.

        <br><br>

        Trách nhiệm công việc:<br>- Bạn sẽ thực hiện các cuộc gọi bán hàng ra bên ngoài cốt để giúp phát triển đơn hàng mới

        <br>- Thỏa thuận với khách hàng cũng như các liên lạc trong suốt toàn bộ quá trình ký kết

        <br>- Đôi khi bạn sẽ được yêu cầu giúp đỡ cũng như những nỗ lực khác.<br>

        <br>Một số kỹ năng cần thiết:

        <br>- Làm việc thoải mái trong một môi trường văn phòng năng động

        <br>- Bất kỳ kinh nghiệm nào tiếp thị qua điện thoại (hoặc quá trình làm việc có liên quan)

        <br>- Có kỹ năng giao tiếp và truyền đạt tốt<br></p>
        


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                @if(Session::has('msg'))
                   @include('errors.flash_career')
                @endif
            </div>
        </div>
        
       
        {!! Form::open([ 
            'method' => 'POST', 'files' => true, 'class' => 'form-horizontal', 
            'role' => 'form', 'route' => 'career'
        ]) !!}
            

            <input type="text" name="role_id" value="career" hidden="hidden" >
            <input type="text" name="active" value="1" hidden="hidden" >


            <div class="form-group {{ $errors->has('full_name') ? 'has-error' : ' ' }}">
                <label for="inputName" class="col-sm-3 control-label">Tên</label>
                <div class="col-sm-6">
                    <input type="text" name="full_name" class="form-control" placeholder="Họ và tên"  value="{{old('full_name')}}" >
                </div>
            </div>

            <div class="form-group {{ $errors->has('email') ? 'has-error' : ' ' }}">
                <label for="inputPassword3" class="col-sm-3 control-label">E-mail</label>
                <div class="col-sm-6">
                    <input type="text" name="email" class="form-control" placeholder="Địa chỉ email" value="{{old('email')}}" >
                </div>
            </div>

            <div class="form-group {{ $errors->has('file') ? 'has-error' : ' ' }}">
                <label for="exampleInputFile" class="col-sm-3 control-label">Tập tin</label>
                <div class="col-sm-6">
                    <input type="file" name="file" class="form-control file-input" >
                </div>
            </div>

            <div class="form-group">
                <div class=" col-sm-offset-3 col-sm-10">
                    <button type="submit" class="btn btn-primary">GỬI</button>
                </div>
            </div>

        {!! Form::close() !!}


    </div>



@endsection