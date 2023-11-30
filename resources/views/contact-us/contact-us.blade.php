
@include('header.header')

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Contact Us</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"> Contact Us </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Contact Us  -->
<div class="contact-box-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-12">
                <div class="contact-form-right">
                    <h2>GET IN TOUCH</h2>
                    <form action="{{ route('contactus.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="subject" required data-error="Please enter your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message" name="message" rows="4" data-error="Write your message" required></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="submit-button text-center">
                                    <button class="btn hvr-hover" id="submit" type="submit">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                               <!-- Thông báo thành công -->
                                                @if(session('success'))
                                              <div class="alert alert-success">
                                         {{ session('success') }}
                                        </div>
                            @endif


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Gắn sự kiện click vào nút "Send Message"
    $('#submit').click(function(e) {
        e.preventDefault(); // Ngăn chặn hành vi mặc định của nút Submit

        // Lấy dữ liệu từ form
        var name = $('#name').val();
        var email = $('#email').val();
        var subject = $('#subject').val();
        var message = $('#message').val();

        // Kiểm tra dữ liệu có hợp lệ không (có thể thay đổi theo yêu cầu của bạn)
        if (name === '' || email === '' || subject === '' || message === '') {
            alert('Please fill in all fields');
            return;
        }

        // Gửi yêu cầu AJAX để cập nhật thông tin lên database
        $.ajax({
            url: "{{ route('contactus.store') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                "name": name,
                "email": email,
                "subject": subject,
                "message": message
            },
            success: function(response) {
                // Xử lý phản hồi thành công từ server
                $('#msgSubmit').removeClass('hidden').text('Your message has been sent successfully!');
                $('#name, #email, #subject, #message').val(''); // Xóa nội dung trong các trường input
            },
            error: function(xhr) {
                // Xử lý lỗi từ server
                alert('An error occurred. Please try again later.');
            }
        });
    });
});
</script>
<!-- End Cart -->

<!-- Start Instagram Feed  -->


<!-- End Instagram Feed  -->

@include('footer.footer')