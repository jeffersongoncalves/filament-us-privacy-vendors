<?php

return [
    'resource' => [
        'label' => 'Təchizatçı',
        'plural_label' => 'Təchizatçılar',
    ],

    'fields' => [
        'name' => 'Ad',
        'role' => 'Rol',
        'risk' => 'Risk',
        'services' => 'Xidmətlər',
        'business_purpose' => 'Emalın məqsədi',
        'data_categories' => 'Açıqlanan şəxsi məlumatlar',
        'contact' => 'Əlaqə',
        'dpa_signed_at' => 'Müqavilə imzalanıb',
        'dpa_expires_at' => 'Müqavilənin bitmə tarixi',
        'dpa_checklist' => 'Müqavilə əhatə edir',
        'notes' => 'Qeydlər',
        'issues' => 'Problemlər',
        'no_issues' => 'Yoxdur',
        'next_review' => 'Növbəti yoxlama',
    ],

    'sections' => [
        'agreement' => 'Yazılı müqavilə',
    ],

    'help' => [
        'business_purpose' => 'Müqavilənin təsvir etdiyi emalın xarakteri və məqsədi.',
        'agreement' => 'Hər ştat hər emal edənlə aşağıdakı şərtləri olan məcburi müqavilə tələb edir. Üçüncü tərəflərə lazım deyil.',
        'terminate' => 'Bundan sonra təchizatçı şəxsi məlumatları silməli və ya qaytarmalıdır.',
    ],

    'filters' => [
        'active' => 'Aktiv',
    ],

    'roles' => [
        'processor' => 'Emal edən',
        'third_party' => 'Üçüncü tərəf',
    ],

    'risks' => [
        'low' => 'Aşağı',
        'medium' => 'Orta',
        'high' => 'Yüksək',
    ],

    'issues' => [
        'agreement_missing' => 'İmzalanmış müqavilə yoxdur',
        'agreement_expired' => 'Müqavilənin müddəti bitib',
        'agreement_incomplete' => 'Müqavilə natamamdır',
        'review_due' => 'Yoxlama vaxtı çatıb',
        'data_return_pending' => 'Məlumatların qaytarılması gözlənilir',
    ],

    'checklist' => [
        'instructions' => 'Məlumatların emalı üçün təlimatları müəyyən edir',
        'nature_and_purpose' => 'Emalın xarakterini və məqsədini təsvir edir',
        'data_types' => 'Emal edilən şəxsi məlumat növlərini sadalayır',
        'duration' => 'Emalın müddətini göstərir',
        'rights_and_obligations' => 'Hər iki tərəfin hüquq və öhdəliklərini göstərir',
        'confidentiality' => 'Məlumatları emal edən hər kəsi məxfilik öhdəliyi ilə bağlayır',
        'delete_or_return' => 'Xidmətlər bitdikdə məlumatların silinməsini və ya qaytarılmasını tələb edir',
        'compliance_information' => 'Uyğunluğu sübut etmək üçün lazım olan məlumatları təqdim edir',
        'assessments' => 'Əsaslı qiymətləndirmələrə və ya auditlərə icazə verir, ya da müstəqil audit hesabatı təqdim edir',
        'subcontractors' => 'Subpodratçıları bildiriş və etiraz imkanından sonra eyni öhdəliklərlə bağlayır',
    ],

    'actions' => [
        'review' => 'Yoxlanılmış kimi qeyd et',
        'terminate' => 'Əlaqəni bitir',
        'data_returned' => 'Məlumatlar silindi və ya qaytarıldı',
    ],

    'notifications' => [
        'reviewed' => 'Təchizatçı yoxlanıldı',
    ],
];
