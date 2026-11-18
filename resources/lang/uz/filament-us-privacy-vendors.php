<?php

return [
    'resource' => [
        'label' => 'Yetkazib beruvchi',
        'plural_label' => 'Yetkazib beruvchilar',
    ],

    'fields' => [
        'name' => 'Nomi',
        'role' => 'Rol',
        'risk' => 'Xavf',
        'services' => 'Xizmatlar',
        'business_purpose' => 'Ishlov berish maqsadi',
        'data_categories' => 'Oshkor qilingan shaxsiy ma\'lumotlar',
        'contact' => 'Aloqa',
        'dpa_signed_at' => 'Shartnoma imzolangan',
        'dpa_expires_at' => 'Shartnoma tugaydi',
        'dpa_checklist' => 'Shartnoma qamrab oladi',
        'notes' => 'Izohlar',
        'issues' => 'Muammolar',
        'no_issues' => 'Yo\'q',
        'next_review' => 'Keyingi tekshiruv',
    ],

    'sections' => [
        'agreement' => 'Yozma shartnoma',
    ],

    'help' => [
        'business_purpose' => 'Shartnomada tavsiflangan ishlov berishning tabiati va maqsadi.',
        'agreement' => 'Har bir shtat har bir ishlovchi bilan quyidagi shartlarga ega majburiy shartnomani talab qiladi. Uchinchi shaxslarga kerak emas.',
        'terminate' => 'Shundan so\'ng yetkazib beruvchi shaxsiy ma\'lumotlarni o\'chirishi yoki qaytarishi kerak.',
    ],

    'filters' => [
        'active' => 'Faol',
    ],

    'roles' => [
        'processor' => 'Ishlovchi',
        'third_party' => 'Uchinchi tomon',
    ],

    'risks' => [
        'low' => 'Past',
        'medium' => 'O\'rta',
        'high' => 'Yuqori',
    ],

    'issues' => [
        'agreement_missing' => 'Imzolangan shartnoma yo\'q',
        'agreement_expired' => 'Shartnoma muddati tugagan',
        'agreement_incomplete' => 'Shartnoma to\'liq emas',
        'review_due' => 'Tekshiruv vaqti keldi',
        'data_return_pending' => 'Ma\'lumotlarni qaytarish kutilmoqda',
    ],

    'checklist' => [
        'instructions' => 'Ma\'lumotlarni ishlash bo\'yicha ko\'rsatmalarni belgilaydi',
        'nature_and_purpose' => 'Ishlov berishning tabiati va maqsadini tavsiflaydi',
        'data_types' => 'Ishlanadigan shaxsiy ma\'lumotlar turlarini sanab o\'tadi',
        'duration' => 'Ishlov berish muddatini ko\'rsatadi',
        'rights_and_obligations' => 'Ikkala tomonning huquq va majburiyatlarini belgilaydi',
        'confidentiality' => 'Ma\'lumotlarni ishlaydigan har bir shaxsni maxfiylik majburiyati bilan bog\'laydi',
        'delete_or_return' => 'Xizmatlar tugagach ma\'lumotlarni o\'chirish yoki qaytarishni talab qiladi',
        'compliance_information' => 'Muvofiqlikni ko\'rsatish uchun zarur ma\'lumotlarni taqdim etadi',
        'assessments' => 'Oqilona baholash yoki auditlarga ruxsat beradi yoki mustaqil audit hisobotini taqdim etadi',
        'subcontractors' => 'Subpudratchilarni xabarnoma va e\'tiroz imkoniyatidan so\'ng xuddi shu majburiyatlar bilan bog\'laydi',
    ],

    'actions' => [
        'review' => 'Tekshirilgan deb belgilash',
        'terminate' => 'Hamkorlikni tugatish',
        'data_returned' => 'Ma\'lumotlar o\'chirildi yoki qaytarildi',
    ],

    'notifications' => [
        'reviewed' => 'Yetkazib beruvchi tekshirildi',
    ],
];
