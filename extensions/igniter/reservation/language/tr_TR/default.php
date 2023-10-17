<?php

return [
    'text_tab_general' => 'Genel',
    'text_component_title' => 'Modern Bileşen',
    'text_component_desc' => 'Rezervasyon formunu görüntüle',

    'text_heading' => 'Bir masa rezerve et',
    'text_success_heading' => 'Rezervasyon Onayı',
    'text_time_heading' => 'Saat Seç',
    'text_reservation' => 'Rezervasyonlarım',
    'text_heading_success' => 'Rezervasyon Onayı',
    'text_no_table' => 'Yerel restoranınızda masa yok.',
    'text_find_msg' => 'Rezervasyon için bir masa bulmak için lütfen aşağıdaki formu kullanın',
    'text_time_msg' => '%s misafir için %s üzerinde mevcut rezervasyon zaman dilimleri',
    'text_no_time_slot' => '<span class="text-danger">Rezervasyon zaman aralığı yok, lütfen masa ayrıntılarınızı kontrol etmek için geri dönün.</span>',
    'text_location_closed' => 'Üzgünüm, kapalıyız, çalışma saatlerinde geri dönün',
    'text_date_format' => '%D, %M %j, %Y',
    'text_person' => 'Kişi',
    'text_people' => 'İnsanlar',

    'text_subject' => 'Masa rezerve edildi. - %s',
    'text_greetings' => 'Teşekkür ederiz %s',
    'text_success_message' => '%s adresindeki rezervasyonunuz %s için %s için rezerve edildi.<br />Bizimle çevrimiçi rezervasyon yaptığınız için teşekkür ederiz!',

    'label_status' => 'Durum',
    'label_location' => 'Konum',
    'label_guest_num' => 'Ziyaretçi sayısı',
    'label_date' => 'Tarih',
    'label_time' => 'Zaman',
    'label_occasion' => 'Fırsat',
    'label_select' => ' - lütfen seçiniz - ',

    'label_first_name' => 'Ad',
    'label_last_name' => 'Soyad',
    'label_email' => 'E-posta adresi',
    'label_confirm_email' => 'E-posta adresini onayla',
    'label_telephone' => 'Telefon',
    'label_comment' => 'Özel İstekler',

    'button_find_table' => 'Tablo Bul',
    'button_select_time' => 'Saat Seç',
    'button_change' => 'Ayrıntıları değiştir',
    'button_reset' => 'Sıfırla',

    'button_find_again' => 'Tekrar Masa Bul',
    'button_reservation' => 'Rezervasyonu Tamamla',

    'error_invalid_location' => 'Seçilen konum geçersiz.',
    'error_invalid_date' => 'Tarih bugünden sonra olmalıdır, sadece gelecekteki rezervasyonlarınızı yapabilirsiniz!',
    'error_invalid_datetime' => 'Selected reservation date time is invalid',
    'error_invalid_time' => 'Restoran açılış saati arasında zaman olmalı!',

    'alert_reservation_disabled' => 'Üzgünüz, kaydolma devre dışı bırakıldı. Lütfen site yöneticisiyle irtibata geçin.',
    'alert_no_table_available' => 'Seçilen konumda belirtilen sayıda konuk için tablo bulunamadı.',
    'alert_fully_booked' => 'Seçilen tarih ve saat için tamamen doluyuz, lütfen farklı bir tarih veya saat seçin.',

    'activity_reservation_created_title' => 'Yeni rezervasyon.',
    'activity_reservation_created' => '<b>:properties.full_name</b> bir rezervasyon oluşturdu.',

    'reservations' => [
        'component_title' => 'Hesap Rezervasyonları Bileşeni',
        'component_desc' => 'Hesap rezervasyonlarını görüntüler ve yönetir',
        'text_heading' => 'Son Rezervasyonlar',
        'text_my_account' => 'Hesabım',
        'text_view_heading' => 'Rezervasyon Görünümüm',
        'text_empty' => 'Rezervasyon(lar) yok.',

        'column_id' => 'Rezervasyon Kimliği',
        'column_status' => 'Durum',
        'column_location' => 'Konum',
        'column_date' => 'Saat - Tarih',
        'column_table' => 'Masa adı',
        'column_guest' => 'Misafir Numarası',
        'column_occasion' => 'Fırsat',
        'column_telephone' => 'Telefon',
        'column_comment' => 'Yorum Yap',

        'button_reserve' => 'Rezervasyon yap',
        'button_cancel' => 'Cancel Reservation',
        'button_back' => 'Geri',
        'btn_view' => 'Görünüm',

        'alert_cancel_success' => 'Reservation successfully canceled.',
        'alert_cancel_failed' => 'Unable to cancel reservation, please contact us.',
    ],
];
