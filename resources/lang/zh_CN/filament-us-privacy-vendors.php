<?php

return [
    'resource' => [
        'label' => '供应商',
        'plural_label' => '供应商',
    ],

    'fields' => [
        'name' => '名称',
        'role' => '角色',
        'risk' => '风险',
        'services' => '服务',
        'business_purpose' => '处理目的',
        'data_categories' => '披露的个人数据',
        'contact' => '联系方式',
        'dpa_signed_at' => '合同签署日期',
        'dpa_expires_at' => '合同到期日期',
        'dpa_checklist' => '合同涵盖',
        'notes' => '备注',
        'issues' => '问题',
        'no_issues' => '无',
        'next_review' => '下次审查',
    ],

    'sections' => [
        'agreement' => '书面合同',
    ],

    'help' => [
        'business_purpose' => '合同所述处理的性质和目的。',
        'agreement' => '每个州都要求与每个处理者签订包含以下条款的有约束力的合同。第三方无需合同。',
        'terminate' => '之后供应商须删除或返还个人数据。',
    ],

    'filters' => [
        'active' => '有效',
    ],

    'roles' => [
        'processor' => '处理者',
        'third_party' => '第三方',
    ],

    'risks' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'issues' => [
        'agreement_missing' => '没有已签署的合同',
        'agreement_expired' => '合同已过期',
        'agreement_incomplete' => '合同不完整',
        'review_due' => '需要审查',
        'data_return_pending' => '数据返还待处理',
    ],

    'checklist' => [
        'instructions' => '规定数据处理指示',
        'nature_and_purpose' => '说明处理的性质和目的',
        'data_types' => '列出所处理的个人数据类型',
        'duration' => '说明处理期限',
        'rights_and_obligations' => '规定双方的权利和义务',
        'confidentiality' => '要求处理数据的每个人负有保密义务',
        'delete_or_return' => '要求在服务结束时删除或返还数据',
        'compliance_information' => '提供证明合规所需的信息',
        'assessments' => '允许合理的评估或审计，或提供独立审计报告',
        'subcontractors' => '在通知并给予异议机会后，要求分包方承担相同义务',
    ],

    'actions' => [
        'review' => '标记为已审查',
        'terminate' => '终止合作',
        'data_returned' => '数据已删除或返还',
    ],

    'notifications' => [
        'reviewed' => '供应商已审查',
    ],
];
