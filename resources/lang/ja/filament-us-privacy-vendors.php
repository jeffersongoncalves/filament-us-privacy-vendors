<?php

return [
    'resource' => [
        'label' => '委託先',
        'plural_label' => '委託先',
    ],

    'fields' => [
        'name' => '名称',
        'role' => '役割',
        'risk' => 'リスク',
        'services' => 'サービス',
        'business_purpose' => '処理の目的',
        'data_categories' => '開示する個人データ',
        'contact' => '連絡先',
        'dpa_signed_at' => '契約締結日',
        'dpa_expires_at' => '契約満了日',
        'dpa_checklist' => '契約の対象',
        'notes' => 'メモ',
        'issues' => '課題',
        'no_issues' => 'なし',
        'next_review' => '次回レビュー',
    ],

    'sections' => [
        'agreement' => '書面契約',
    ],

    'help' => [
        'business_purpose' => '契約に記載する処理の性質と目的。',
        'agreement' => 'すべての州が各処理者と以下の条項を含む拘束力のある契約を求めています。第三者には不要です。',
        'terminate' => 'その後、ベンダーは個人データの削除または返却を行う必要があります。',
    ],

    'filters' => [
        'active' => '有効',
    ],

    'roles' => [
        'processor' => '処理者',
        'third_party' => '第三者',
    ],

    'risks' => [
        'low' => '低',
        'medium' => '中',
        'high' => '高',
    ],

    'issues' => [
        'agreement_missing' => '署名済みの契約なし',
        'agreement_expired' => '契約期限切れ',
        'agreement_incomplete' => '契約が不完全',
        'review_due' => 'レビュー期限',
        'data_return_pending' => 'データ返却待ち',
    ],

    'checklist' => [
        'instructions' => 'データ処理の指示を定めている',
        'nature_and_purpose' => '処理の性質と目的を記載している',
        'data_types' => '処理する個人データの種類を列挙している',
        'duration' => '処理期間を定めている',
        'rights_and_obligations' => '双方の権利と義務を定めている',
        'confidentiality' => 'データを処理するすべての者に守秘義務を課している',
        'delete_or_return' => 'サービス終了時のデータの削除または返却を求めている',
        'compliance_information' => '法令遵守を示すために必要な情報を提供する',
        'assessments' => '合理的な評価や監査を認めるか、独立した監査報告書を提供する',
        'subcontractors' => '通知と異議申立ての機会を与えたうえで、再委託先に同じ義務を課している',
    ],

    'actions' => [
        'review' => 'レビュー済みにする',
        'terminate' => '取引を終了',
        'data_returned' => 'データ削除・返却済み',
    ],

    'notifications' => [
        'reviewed' => '委託先をレビューしました',
    ],
];
