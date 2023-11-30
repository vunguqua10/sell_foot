@include('header.header')

<div class="col-md-12 col-lg-12">
    <div class="order-box">
        <div class="title-left">
            <h3>Your Payment History</h3>
        </div>

        @if (isset($user) && count($paymentHistories) > 0 )
        {{-- <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>UserName</th>
                    <th>Payment_amount</th>
                    <th>Payment_method</th>
                    <th>Payment_date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paymentHistories as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><a href="">{{ $item->username }}</a></td>
                        <td>{{ $item->payment_amount }}đ</td>
                        <td>{{ $item->payment_method }}</td>
                        <td>{{ $item->payment_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}
        <table class="table">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>UserName</th>
                    <th>Payment_amount</th>
                    <th>Payment_method</th>
                    <th>Payment_date</th>
                    <th>Actions</th> <!-- Cột Actions -->
                </tr>
            </thead>
            <tbody>
                @foreach($paymentHistories as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td><a href="">{{ $item->username }}</a></td>
                        <td>{{ $item->payment_amount }}đ</td>
                        <td>{{ $item->payment_method }}</td>
                        <td>{{ $item->payment_date }}</td>
                        <td>
                            <form id="delete-form-{{ $item->id }}" action="{{ route('payment-history.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $item->id }})">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination-payment-history" style="text-align: center">
            {{ $paymentHistories->links() }}
        </div>
        <hr>
    @else
        <p style="text-align: center">No payment history available.</p>
    @endif
    </div>
</div>

@include('footer.footer')
{{-- <script>
    function confirmDelete(itemId) {
        var confirmation = confirm('Bạn có chắc chắn muốn xóa sản phẩm khỏi lịch sử thanh toán?');
        if (confirmation) {
            document.getElementById('delete-form-' + itemId).submit();
        }
    }
</script> --}}
<script>
    function confirmDelete(itemId) {
        var confirmation = confirm('Bạn có chắc chắn muốn xóa sản phẩm khỏi lịch sử thanh toán?');
        if (confirmation) {
            checkProductExistence(itemId);
        }
    }

    function checkProductExistence(itemId) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                var response = JSON.parse(this.responseText);
                if (response.exists) {
                    document.getElementById('delete-form-' + itemId).submit();
                } else {
                    alert('Sản phẩm không tồn tại.');
                    window.location.reload();
                }
            }
        };
        xhttp.open('GET', '/payment-history/check-existence/' + itemId, true);
        xhttp.send();
    }
</script>
