<?php

return [
    'resource' => [
        'label' => 'مورّد',
        'plural_label' => 'المورّدون',
    ],

    'fields' => [
        'name' => 'الاسم',
        'role' => 'الدور',
        'risk' => 'المخاطر',
        'services' => 'الخدمات',
        'business_purpose' => 'الغرض من المعالجة',
        'data_categories' => 'البيانات الشخصية المفصح عنها',
        'contact' => 'جهة الاتصال',
        'dpa_signed_at' => 'تاريخ توقيع العقد',
        'dpa_expires_at' => 'تاريخ انتهاء العقد',
        'dpa_checklist' => 'يغطي العقد',
        'notes' => 'ملاحظات',
        'issues' => 'المشكلات',
        'no_issues' => 'لا شيء',
        'next_review' => 'المراجعة التالية',
    ],

    'sections' => [
        'agreement' => 'العقد المكتوب',
    ],

    'help' => [
        'business_purpose' => 'طبيعة المعالجة والغرض منها كما يصفها العقد.',
        'agreement' => 'تشترط كل ولاية عقدًا ملزمًا مع كل معالج يتضمن الشروط أدناه. لا يحتاج الأطراف الثالثة إلى عقد.',
        'terminate' => 'سيكون على المورد بعد ذلك حذف البيانات الشخصية أو إعادتها.',
    ],

    'filters' => [
        'active' => 'نشط',
    ],

    'roles' => [
        'processor' => 'المعالج',
        'third_party' => 'طرف ثالث',
    ],

    'risks' => [
        'low' => 'منخفضة',
        'medium' => 'متوسطة',
        'high' => 'مرتفعة',
    ],

    'issues' => [
        'agreement_missing' => 'لا يوجد عقد موقع',
        'agreement_expired' => 'انتهت صلاحية العقد',
        'agreement_incomplete' => 'العقد غير مكتمل',
        'review_due' => 'المراجعة مستحقة',
        'data_return_pending' => 'إعادة البيانات معلّقة',
    ],

    'checklist' => [
        'instructions' => 'يحدد تعليمات معالجة البيانات',
        'nature_and_purpose' => 'يصف طبيعة المعالجة والغرض منها',
        'data_types' => 'يسرد أنواع البيانات الشخصية المعالجة',
        'duration' => 'يحدد مدة المعالجة',
        'rights_and_obligations' => 'يحدد حقوق والتزامات الطرفين',
        'confidentiality' => 'يُلزم كل شخص يعالج البيانات بواجب السرية',
        'delete_or_return' => 'يشترط حذف البيانات أو إعادتها عند انتهاء الخدمات',
        'compliance_information' => 'يتيح المعلومات اللازمة لإثبات الامتثال',
        'assessments' => 'يسمح بتقييمات أو عمليات تدقيق معقولة، أو يقدم تقرير تدقيق مستقل',
        'subcontractors' => 'يُلزم المتعاقدين من الباطن بالالتزامات نفسها، بعد الإخطار وإتاحة فرصة للاعتراض',
    ],

    'actions' => [
        'review' => 'تحديد كمراجَع',
        'terminate' => 'إنهاء العلاقة',
        'data_returned' => 'تم حذف البيانات أو إعادتها',
    ],

    'notifications' => [
        'reviewed' => 'تمت مراجعة المورّد',
    ],
];
