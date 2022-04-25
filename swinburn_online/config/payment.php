<?php

return [

    'namespace'    => env('PAYMENT_COMPONENT_NAMESPACE', 'payment-management'),

    'url_response' => "", //View trả về khi thanh toán thành không bạn có thể trỏ đến đường dẫn thông báo custom của bạn hoặc sử dụng đường dẫn mặc định như trên.

    'vnpay'        => [
        'vnp_Url'        => env('PAYMENT_COMPONENT_URL', 'http://sandbox.vnpayment.vn/paymentv2/vpcpay.html'),
        'vnp_ReturnUrl'  => env('PAYMENT_COMPONENT_RETURNURL', ''), //địa chỉ link website của bạn
        'vnp_HashSecret' => env('PAYMENT_COMPONENT_HASHSECRET', ''),
        'vnp_TmnCode'    => env('PAYMENT_COMPONENT_TMNCODE', ''),
    ],

];
