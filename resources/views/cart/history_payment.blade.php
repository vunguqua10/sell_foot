<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch sử thanh toán</title>
    <style>

        #payment-history {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div id="payment-history">
        <h1>Lịch sử thanh toán</h1>
        <ul id="payment-list">
            <table>
                <thead>
                    <tr>
                        <th><h1>âs</h1></th>
                        <th><h1>âs</h1></th>
                        <th><h1>âs</h1></th>
                        <th><h1>âs</h1></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><h1>aaaa</h1> </td>
                        <td><h1>bbbb</h1></td>
                        <td><h1>cccc</h1></td>
                        <td><h1>dddd</h1></td>
                        <td><h1>eeee</h1></td>
                    </tr>
                </tbody>
            </table>
        </ul>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Gọi hàm để lấy dữ liệu thanh toán và hiển thị nó
            fetchPaymentHistory();
        });

        function fetchPaymentHistory() {
            // Sử dụng XMLHttpRequest hoặc Fetch API để gửi yêu cầu đến máy chủ và nhận dữ liệu thanh toán

            // Giả sử dữ liệu trả về từ máy chủ có định dạng JSON
            var paymentData = [
                { id: 1, amount: 50, date: '2023-11-12' },
                { id: 2, amount: 30, date: '2023-11-13' },
                // Thêm dữ liệu thanh toán khác nếu cần
            ];

            displayPaymentHistory(paymentData);
        }

        function displayPaymentHistory(paymentData) {
            var paymentList = document.getElementById("payment-list");

            paymentData.forEach(function (payment) {
                var listItem = document.createElement("li");
                listItem.textContent = `Thanh toán #${payment.id}: $${payment.amount} vào ngày ${payment.date}`;
                paymentList.appendChild(listItem);
            });
        }
    </script>
</body>
</html>
