@include('header.header')

<div class="col-md-12 col-lg-12">
    <div class="order-box">
        <div class="title-left">
            <h3>Your Payment History</h3>
        </div>

        @if (isset($user) && count($paymentHistories) > 0 && count($productsPaginated) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>UserName</th>
                    <th>payment_amount</th>
                    <th>payment_method</th>
                    <th>payment_date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productsPaginated as $item)
                    <tr>
                        <td><a href="">{{ $item->username }}</a></td>
                        <td>{{ $item->payment_amount }}đ</td>
                        <td>{{ $item->payment_method }}</td>
                        <td>{{ $item->payment_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr>
    @else
        <p style="text-align: center">No payment history available.</p>
    @endif
    </div>
    {{ $productsPaginated->links('custompagination') }}
</div>

@include('footer.footer')
