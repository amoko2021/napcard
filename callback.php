<?php
// callback post thông thường. cần đổi post này liên hệ admin doithe1s còn mặc định sẽ trả post json(có file callback json mẫu)
if (isset($_GET)) {
    if (isset($_GET['callback_sign'])) {
        ///Chỗ này để lưu lại biến post sang cho dễ làm, chạy web thực nhớ bỏ đi
       /*  $file = @fopen('napthe_log.txt', 'a');
         if ($file)
        {
         $data = $_GET['status'] . "|" . $_GET['message'] . "\n";
         fwrite($file, $data);
            }*/

        /// status = 1 ==> thẻ đúng
        /// status = 2 ==> thẻ sai mệnh giá
        /// status = 3 ==> thẻ lỗi
        /// status = 99 ==> thẻ chờ xử lý

        //// Kết quả trả về sẽ có các trường như sau:
        $partner_key = 'e8b39b84bb4fce7234510878094edaaa';// key của quý khách tại doithe1s

        $callback_sign = md5($partner_key . $_GET['code'] . $_GET['serial']);
        if ($_GET['callback_sign'] == $callback_sign) {

            $getdata['status'] = $_GET['status']; // Trạng thái thẻ
            $getdata['message'] = $_GET['message']; // thông báo kèm theo thẻ
            $getdata['request_id'] = $_GET['request_id'];   /// Mã giao dịch của bạn
            $getdata['trans_id'] = $_GET['trans_id'];   /// Mã giao dịch của doithe1s.vn
            $getdata['declared_value'] = $_GET['declared_value'];  /// Mệnh giá mà bạn khai báo 
            $getdata['value'] = $_GET['value'];  /// Mệnh giá thực tế của thẻ
            $getdata['card_received_amount'] = $_GET['card_received_amount'];  /// Mệnh giá nhận được
            $getdata['amount'] = $_GET['amount'];   /// Số tiền bạn nhận về (VND)
            $getdata['code'] = $_GET['code'];   /// Mã nạp
            $getdata['serial'] = $_GET['serial'];  /// Serial thẻ
            $getdata['telco'] = $_GET['telco'];   /// Nhà mạng
            $getdata['chietkhau'] = $_GET['chietkhau'];   /// chiết khấu thẻ
            print_r($getdata);
        }

    }


}

?>