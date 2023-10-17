<?php

return [
    'text_title' => 'Hesabım',

    'text_heading' => 'Hesap',
    'text_account' => 'Hesabım',
    'text_edit_details' => 'Detayları Düzenle',
    'text_address' => 'Adres Defteri',
    'text_orders' => 'Son Siparişler',
    'text_reservations' => 'Son Rezervasyonlar',
    'text_inbox' => 'Gelen Kutum',
    'text_welcome' => 'Hoşgeldiniz %s',
    'text_cart_summary' => '%s öğeniz var: %s',
    'text_change_password' => 'Şifre Değiştir',
    'text_order' => 'ŞİMDİ SİPARİŞ VER',
    'text_checkout' => 'ŞİMDİ KONTROL ET',
    'text_edit' => 'DÜZENLE',
    'text_set_default' => 'VARSAYILAN YAP',
    'text_default_address' => 'Varsayılan Adresim',
    'text_no_default_address' => 'Varsayılan adres yok',
    'text_no_orders' => 'Gösterilecek sipariş yok.',
    'text_no_reservations' => 'Gösterilecek herhangi bir rezervasyon yok.',
    'text_no_inbox' => 'Gösterilecek mesaj yok',
    'text_no_cart_items' => 'Sepetinize hiçbir menü eklenmedi.',

    'text_logout' => 'Çıkış Yap',
    'text_logged_in' => 'Zaten bir hesabınız var mı ? <a href="%s"> Buradan giriş yapın</a>',
    'text_logged_out' => 'Tekrar hoş geldiniz <b>%s</b>, Siz Değil misiniz? <a href="javascript:;" data-request="%s">Çıkış</a>',

    'label_heading' => 'Başlık',
    'label_template' => 'Eposta Şablonu',
    'label_send_to' => 'Gönderilen',
    'label_send_to_staff_group' => 'Personel Grubuna Gönder',
    'label_send_to_custom' => 'E-posta Adresine Gönder',

    'column_date' => 'Tarih / Saat',
    'column_subject' => 'Konu',

    'alert_logout_success' => 'Başarıyla çıkış yapıldı.',

    'text_send_to_restaurant' => 'Kurtarma e-posta adresi',
    'text_send_to_location' => 'Konum e-posta adresi (varsa)',
    'text_send_to_staff_email' => 'Konum e-posta adresi (varsa)',
    'text_send_to_customer_email' => 'Müşteri e-posta adresi (varsa)',
    'text_send_to_custom' => 'Belirli e-posta adresi',
    'text_send_to_staff_group' => 'Personel Grubu',

    'login' => [
        'label_password' => 'Şifre',
        'label_password_confirm' => 'Şifreyi Onayla',
        'label_remember' => 'Beni hatırla',
        'label_activation' => 'Aktivasyon Kodu',
        'label_newsletter' => 'Beni e-postayla güncel tut.',
        'label_terms' => 'Şartlar ve Koşullar </a> \'da (Çerez Kullanımı da dahil olmak üzere). "Katılıyorum" a tıklayarak. <a href="%s" data-toggle="modal" data-target="#terms-modal">\'a katılırsınız. ',
        'label_i_agree' => 'Kabul ediyorum',
        'label_subscribe' => 'Abone ol',

        'button_terms_agree' => 'Kabul Ediyorum',
        'button_subscribe' => 'Abone ol',
        'button_login' => 'Giriş Yap',
        'button_register' => 'Kayıt Ol',

        'error_email_exist' => 'Bu e-posta adresinin zaten bir hesabı var, lütfen giriş yapın',

        'alert_logout_success' => 'Başarıyla çıkış yapıldı.',
        'alert_expired_login' => 'Oturumunun süresi doldu, lütfen giriş yap.',
        'alert_invalid_login' => 'Kullanıcı adı ve şifre bulunamadı!',
        'alert_account_created' => 'Hesap başarıyla oluşturuldu, aşağıdan giriş yapın!',
        'alert_account_activation' => 'E-posta adresinize bir aktivasyon e-postası gönderilecektir.',
        'alert_registration_disabled' => 'Kayıt şu anda site yöneticisi tarafından devre dışı bırakılmıştır.',

        'activity_registered_account_title' => 'Müşteri Kayıtlı',
        'activity_registered_account' => '<b>:properties.full_name</b> bir rezervasyon oluşturdu.',
    ],

    'session' => [
        'component_title' => 'Oturum Bileşeni',
        'component_desc' => 'Bir sayfaya yetkilendirme oturumu ekler ve sayfa erişimini kısıtlar.',
    ],

    'account' => [
        'component_title' => 'Hesap Bileşeni',
        'component_desc' => 'Hesap panosunu görüntüle',
        'text_heading' => 'Adres Defteri',
        'text_my_account' => 'Hesabım',
        'text_edit_heading' => 'Adres Defteri Düzenle',
        'text_no_address' => 'Herhangi bir kayıtlı adresiniz yok',
        'text_edit' => 'DÜZENLE',
        'text_delete' => 'SİL',

        'button_back' => 'Geri',
        'button_add' => 'Yeni adres ekleyin',
        'button_update' => 'Adresini Güncelle',

        'label_address_1' => 'Adres 1',
        'label_address_2' => 'Adres 2',
        'label_city' => 'Şehir',
        'label_state' => 'Semt',
        'label_postcode' => 'Posta Kodu',
        'label_country' => 'Ülke',

        'alert_updated_success' => 'Adres Ayarları başarıyla güncellendi',
        'alert_deleted_success' => 'Küçük resimler başarıyla silindi.',
    ],
    'reset' => [
        'component_title' => 'Parola Sıfırlama Bileşeni',
        'component_desc' => 'Şifre sıfırlama formunu görüntüler',

        'text_heading' => 'Hesap Şifresi Sıfırlama',
        'text_summary' => 'Hesabınıza giriş yapmak için kullandığınız e-posta adresi Size yeni bir şifre ile bir e-posta göndereceğiz.',

        'label_email' => 'E-posta adresi',
        'label_password' => 'Şifre',
        'label_password_confirm' => 'Şifreyi tekrar girin',
        'label_code' => 'Sıfırlama Kodu',

        'button_login' => 'Oturum Aç',
        'button_reset' => 'Şifreyi Yenile',

        'alert_reset_success' => 'Parola Sıfırlama Başarılı',
        'alert_reset_request_success' => 'Şifre sıfırlama isteği başarıyla tamamlandı, lütfen nasıl devam edeceğinizi öğrenmek için e-postanızı kontrol edin.',
        'alert_reset_error' => '<p class="alert-error">Şifre sıfırlama başarısız, e-posta bulunamadı veya yanlış bilgi girildi.</p>',
        'alert_reset_failed' => 'Parola sıfırlama başarısız, sıfırlama kodu geçersiz veya süresi dolmuş.',
        'alert_activation_failed' => 'Ayarlanamadı, lütfen tekrar deneyin.',
        'alert_no_email_match' => 'Eşleşen bir e-posta adresi yok',
    ],
    'addressbook' => [
        'component_title' => 'Hesap Adres Defteri Bileşeni',
        'component_desc' => 'Hesap rezervasyonlarını görüntüler ve yönetir',
    ],
    'settings' => [
        'component_title' => 'Hesap Rezervasyonları Bileşeni',
        'component_desc' => 'Hesap ayarlarını yönetir',
        'text_heading' => 'Detaylarım',
        'text_details' => 'Detaylarını düzenle',
        'text_password_heading' => 'Şifre değiştir',

        'button_subscribe' => 'Abone ol',
        'button_back' => 'Geri',
        'button_save' => 'Detayları Kaydet',

        'label_first_name' => 'Ad',
        'label_last_name' => 'Soyad',
        'label_email' => 'E-posta adresi',
        'label_password' => 'Yeni Şifre',
        'label_password_confirm' => 'Yeni Şifre Onayı',
        'label_old_password' => 'Eski Şifre',
        'label_telephone' => 'Telefon',
        'label_s_question' => 'Güvenlik Sorusu',
        'label_s_answer' => 'Güvenlik Yanıtı',
        'label_newsletter' => 'Beni e-postayla güncel tut.',

        'error_password' => 'Girdiğiniz %sler eşleşmiyor.',

        'alert_updated_success' => 'Profil ayrıntıları başarılı olarak güncellendi',
    ],
];
