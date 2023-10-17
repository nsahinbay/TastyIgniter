<?php

return [
    'text_this_payment' => 'bu ödeme yöntemi',
    'text_save_card_profile' => 'Kart ayrıntılarını sonraya saklayın.',
    'text_refund_title' => 'İade %s',
    'text_refund_full' => 'Tam Geri Ödeme',
    'text_refund_partial' => 'Kısmi Geri Ödeme',

    'label_order_fee_type' => 'Ek Ücret Türü',
    'label_order_fee' => 'Ek ücretler',
    'label_order_total' => 'Minimum Toplamı',
    'label_order_status' => 'Siparişin durumu',
    'label_refund_type' => 'Para İadesi Türü',
    'label_refund_amount' => 'Kısmi Tutarı Geri Ödeme',

    'button_delete_card' => 'Delete and use a different card.',
    'button_refund' => 'Geri öde',

    'alert_min_total' => 'Sipariş toplamı, %s için minimum sipariş toplamının altında.',
    'alert_min_order_total' => '%s ile ödeme yapmak için %s veya daha fazla harcamanız gerekiyor.',
    'alert_order_fee' => '%s ile ödeme yaptığınızda %s ek ücret alınır.',
    'alert_missing_applicable_fee' => '%s ödemesi için ek ücret eksik.',

    'help_order_total' => 'Bu ödeme metodunun aktif olması için toplam sipariş tutarını giriniz.',
    'help_order_fee' => 'Bu ödeme ağ geçidi aktif hale geldiğinde sipariş toplamına ek ücret',
    'help_order_status' => 'Bu ödeme yöntemi kullanıldığında varsayılan sipariş durumu.',

    'cod' => [
        'text_tab_general' => 'Genel',
        'text_payment_title' => 'Teslimatta Nakit Ödeme',
        'text_payment_desc' => 'Ödeme sırasında teslimatta nakit kabul edin',

        'label_title' => 'Başlık',
        'label_status' => 'Durum',
        'label_priority' => 'Öncelik',
    ],

    'paypal' => [
        'text_tab_general' => 'Genel',
        'text_payment_title' => 'PayPal Express',
        'text_payment_desc' => 'Müşterilerinizin PayPal kullanarak ödeme yapmasını sağlar',

        'text_sandbox' => 'Sandbox',
        'text_go_live' => 'Canlı Yayına Geç',
        'text_sale' => 'SATIŞ',
        'text_authorization' => 'YETKİ',

        'label_title' => 'Başlık',
        'label_api_user' => 'API Kullanıcı Adı',
        'label_api_pass' => 'API Şifresi',
        'label_api_signature' => 'API İmza',
        'label_api_mode' => 'Mod',
        'label_api_action' => 'Ödeme Faaliyeti',
        'label_priority' => 'Öncelik',
        'label_status' => 'Durum',

        'alert_error_server' => '<p class="alert-danger">Maalesef bir hata oluştu, lütfen tekrar deneyin</p>',
    ],

    'authorize_net_aim' => [
        'text_payment_title' => 'Authorize.Net (AIM)',
        'text_payment_desc' => 'Authorize.Net üzerinden kredi kartı ödemelerini kabul edin',
        'text_go_live' => 'Authorize.Net üzerinden kredi kartı ödemelerini kabul edin',
        'text_test' => 'Deneme',
        'text_test_live' => 'Test/Canlı',
        'text_sale' => 'SATIŞ',
        'text_auth_only' => 'Yetkilendirme ...',
        'text_auth_capture' => 'Provizyon al ve Ödemeyi Al',
        'text_visa' => 'Visa',
        'text_mastercard' => 'MasterCard',
        'text_american_express' => 'American Express',
        'text_jcb' => 'JCB',
        'text_diners_club' => 'Diners Club',

        'label_title' => 'Başlık',
        'label_api_login_id' => 'API Giriş No',
        'label_client_key' => 'Client key',
        'label_transaction_key' => 'İşlem Anahtarı',
        'label_transaction_mode' => 'İşlem Modu',
        'label_transaction_type' => 'İşlem Türü',
        'label_accepted_cards' => 'Kabul Edilen Kartlar',
        'label_priority' => 'Öncelik',
        'label_status' => 'Durum',

        'alert_acceptable_cards' => 'Sadece %s kabul ediyoruz',
    ],

    'stripe' => [
        'text_tab_general' => 'Genel',
        'text_payment_title' => 'Stripe Ödeme',
        'text_payment_desc' => 'Authorize.Net üzerinden kredi kartı ödemelerini kabul edin',
        'text_credit_or_debit' => 'Kredi kartı veya banka kartı',

        'text_auth_only' => 'Yetkilendirme ...',
        'text_auth_capture' => 'Provizyon al ve Ödemeyi Al',
        'text_description' => 'Square\'i kullanarak Kredi Kartı ile ödeme yapın',
        'text_live' => 'Canlı',
        'text_test' => 'Deneme',
        'text_stripe_charge_description' => '%s %s için ücret',
        'text_payment_status' => 'Ödeme %s (%s)',

        'label_title' => 'Başlık',
        'label_description' => 'Açıklama',
        'label_transaction_mode' => 'İşlem Modu',
        'label_transaction_type' => 'İşlem Türü',
        'label_test_secret_key' => 'Gizli anahtarı dene',
        'label_test_publishable_key' => 'Yayınlanabilir anahtarı test et',
        'label_live_secret_key' => 'Canlı gizli anahtar',
        'label_live_publishable_key' => 'Canlı yayınlanabilir anahtar',
        'label_priority' => 'Öncelik',
        'label_status' => 'Durum',
    ],

    'mollie' => [
        'text_payment_title' => 'Mollie ödeme',
        'text_payment_desc' => 'Authorize.Net üzerinden kredi kartı ödemelerini kabul edin',

        'text_live' => 'Canlı',
        'text_test' => 'Deneme',
        'text_description' => 'Square\'i kullanarak Kredi Kartı ile ödeme yapın',
        'text_payment_status' => 'Ödeme %s (%s)',

        'label_transaction_mode' => 'İşlem Modu',
        'label_test_api_key' => 'Test API Anahtarı',
        'label_live_api_key' => 'Canlı API anahtarı',
    ],

    'square' => [
        'text_payment_title' => 'Stripe Ödeme',
        'text_payment_desc' => 'Authorize.Net üzerinden kredi kartı ödemelerini kabul edin',

        'text_description' => 'Square\'i kullanarak Kredi Kartı ile ödeme yapın',
        'text_live' => 'Canlı',
        'text_test' => 'Deneme',
        'text_payment_status' => 'Ödeme %s (%s)',

        'label_title' => 'Başlık',
        'label_description' => 'Açıklama',
        'label_transaction_mode' => 'İşlem Modu',
        'label_test_app_id' => 'Uygulama Kimliğini Test Et',
        'label_test_access_token' => 'Kişisel Erişim Belirteci',
        'label_test_location_id' => 'Uygulama Kimliğini Test Et',
        'label_live_app_id' => 'Uygulama Kimliğini Test Et',
        'label_live_access_token' => 'Kişisel Erişim Belirteci',
        'label_live_location_id' => 'Canlı Konum',

        'help_square' => 'Kare API Anahtarlarını <a href="https://developer.squareup.com">buradan</a> edinin',
    ],
];
