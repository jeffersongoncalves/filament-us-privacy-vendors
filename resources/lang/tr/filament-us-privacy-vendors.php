<?php

return [
    'resource' => [
        'label' => 'Tedarikçi',
        'plural_label' => 'Tedarikçiler',
    ],

    'fields' => [
        'name' => 'Ad',
        'role' => 'Rol',
        'risk' => 'Risk',
        'services' => 'Hizmetler',
        'business_purpose' => 'İşlemenin amacı',
        'data_categories' => 'Açıklanan kişisel veriler',
        'contact' => 'İletişim',
        'dpa_signed_at' => 'Sözleşme imza tarihi',
        'dpa_expires_at' => 'Sözleşme bitiş tarihi',
        'dpa_checklist' => 'Sözleşme kapsamı',
        'notes' => 'Notlar',
        'issues' => 'Eksikler',
        'no_issues' => 'Yok',
        'next_review' => 'Sonraki inceleme',
    ],

    'sections' => [
        'agreement' => 'Yazılı sözleşme',
    ],

    'help' => [
        'business_purpose' => 'Sözleşmenin tanımladığı işlemenin niteliği ve amacı.',
        'agreement' => 'Her eyalet her veri işleyenle aşağıdaki şartları içeren bağlayıcı bir sözleşme ister. Üçüncü taraflar için gerekmez.',
        'terminate' => 'Tedarikçi bundan sonra kişisel verileri silmek veya iade etmekle yükümlü olur.',
    ],

    'filters' => [
        'active' => 'Aktif',
    ],

    'roles' => [
        'processor' => 'Veri işleyen',
        'third_party' => 'Üçüncü taraf',
    ],

    'risks' => [
        'low' => 'Düşük',
        'medium' => 'Orta',
        'high' => 'Yüksek',
    ],

    'issues' => [
        'agreement_missing' => 'İmzalı sözleşme yok',
        'agreement_expired' => 'Sözleşmenin süresi doldu',
        'agreement_incomplete' => 'Sözleşme eksik',
        'review_due' => 'İnceleme zamanı geldi',
        'data_return_pending' => 'Veri iadesi bekleniyor',
    ],

    'checklist' => [
        'instructions' => 'Verilerin işlenmesine ilişkin talimatları belirler',
        'nature_and_purpose' => 'İşlemenin niteliğini ve amacını açıklar',
        'data_types' => 'İşlenen kişisel veri türlerini listeler',
        'duration' => 'İşlemenin süresini belirtir',
        'rights_and_obligations' => 'Her iki tarafın hak ve yükümlülüklerini belirtir',
        'confidentiality' => 'Verileri işleyen herkesi gizlilik yükümlülüğüne bağlar',
        'delete_or_return' => 'Hizmetlerin sonunda verilerin silinmesini veya iadesini şart koşar',
        'compliance_information' => 'Uyumu göstermek için gereken bilgileri sağlar',
        'assessments' => 'Makul değerlendirmelere veya denetimlere izin verir ya da bağımsız denetim raporu sunar',
        'subcontractors' => 'Alt yüklenicileri bildirim ve itiraz fırsatından sonra aynı yükümlülüklere bağlar',
    ],

    'actions' => [
        'review' => 'İncelendi olarak işaretle',
        'terminate' => 'İlişkiyi sonlandır',
        'data_returned' => 'Veriler silindi veya iade edildi',
    ],

    'notifications' => [
        'reviewed' => 'Tedarikçi incelendi',
    ],
];
