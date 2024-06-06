<?php 
return [
  'accepted' => ' :attribute は受け入れられる必要があります。',
  'active_url' => ' :attribute は有効な URL ではありません。',
  'after' => ' :attribute は :date より後の日付である必要があります。',
  'after_or_equal' => ' :attribute は :date 以降の日付である必要があります。',
  'alpha' => ' :attribute には文字のみを含めることができます。',
  'alpha_dash' => ' :attribute には文字、数字、ダッシュのみを含めることができます。',
  'alpha_num' => ' :attribute には文字と数字のみを含めることができます。',
  'array' => ' :attribute は配列でなければなりません。',
  'before' => ' :attribute は :date より前の日付である必要があります。',
  'before_or_equal' => ' :attribute は :date 以前の日付である必要があります。',
  'accepted_if' => ' :other が :value の場合、 :attribute フィールドは受け入れられる必要があります。',
  'ascii' => ' :attribute フィールドには、半角英数字と記号のみを含める必要があります。',
  'between' => [
    'numeric' => ' :attribute は :min と :max の間にある必要があります。',
    'file' => ' :attribute は :min ～ :max キロバイトでなければなりません。',
    'string' => ' :attribute は :min から :max までの文字でなければなりません。',
    'array' => ' :attribute には :min から :max までのアイテムが含まれている必要があります。',
  ],
  'boolean' => ' :attribute フィールドは true または false である必要があります。',
  'confirmed' => ' :attribute の確認は一致しません。',
  'date' => ' :attribute は有効な日付ではありません。',
  'date_format' => ' :attribute は形式 :format と一致しません。',
  'different' => ' :attribute と :other は異なっている必要があります。',
  'digits' => ' :attribute は :digits 桁でなければなりません。',
  'digits_between' => ' :attribute は :min から :max までの数字でなければなりません。',
  'dimensions' => ' :attribute の画像サイズが無効です。',
  'distinct' => ' :attribute フィールドに重複した値があります。',
  'email' => ' :attribute は有効な電子メール アドレスである必要があります。',
  'invalidEmail' => '有効なメールアドレスを入力してください。',
  'invalidEmailPassword' => 'メールアドレスとパスワードの組み合わせが正しくありません。',
  'exists' => '選択された :attribute は無効です。',
  'file' => ' :attribute はファイルである必要があります。',
  'filled' => ' :attribute フィールドには値が必要です。',
  'image' => ' :attribute は画像である必要があります。',
  'in' => '選択された :attribute は無効です。',
  'in_array' => ' :attribute フィールドは :other には存在しません。',
  'integer' => ' :attribute は整数でなければなりません。',
  'ip' => ' :attribute は有効な IP アドレスである必要があります。',
  'json' => ' :attribute は有効な JSON 文字列である必要があります。',
  'current_password' => 'パスワードが間違っています。',
  'date_equals' => ' :attribute フィールドは :date と等しい日付でなければなりません。',
  'decimal' => ' :attribute フィールドには小数点以下 2 桁が必要です。',
  'declined' => ' :attribute フィールドは拒否する必要があります。',
  'declined_if' => ' :other が :value の場合、 :attribute フィールドは拒否する必要があります。',
  'doesnt_end_with' => ' :attribute フィールドは次のいずれかで終わってはなりません: :values。',
  'doesnt_start_with' => ' :attribute フィールドは、次のいずれかで始まってはなりません: :values。',
  'ends_with' => ' :attribute フィールドは次のいずれかで終わる必要があります: :values。',
  'enum' => '選択された :attribute は無効です。',
  'gt' => [
    'array' => ' :attribute フィールドには :value を超える項目が必要です。',
    'file' => ' :attribute フィールドは :value キロバイトより大きくなければなりません。',
    'numeric' => ' :attribute フィールドは :value より大きくなければなりません。',
    'string' => ' :attribute フィールドは :value 文字より大きくなければなりません。',
  ],
  'gte' => [
    'array' => ' :attribute フィールドには :value 以上の項目が必要です。',
    'file' => ' :attribute フィールドは :value キロバイト以上である必要があります。',
    'numeric' => ' :attribute フィールドは :value 以上である必要があります。',
    'string' => ' :attribute フィールドは :value 文字以上である必要があります。',
  ],
  'ipv4' => ' :attribute フィールドは有効な IPv4 アドレスである必要があります。',
  'ipv6' => ' :attribute フィールドは有効な IPv6 アドレスである必要があります。',
  'lowercase' => ' :attribute フィールドは小文字である必要があります。',
  'lt' => [
    'array' => ' :attribute フィールドには :value 未満の項目が含まれている必要があります。',
    'file' => ' :attribute フィールドは :value キロバイト未満である必要があります。',
    'numeric' => ' :attribute フィールドは :value より小さくなければなりません。',
    'string' => ' :attribute フィールドは :value 文字未満である必要があります。',
  ],
  'lte' => [
    'array' => ' :attribute フィールドには :value を超える項目を含めることはできません。',
    'file' => ' :attribute フィールドは :value キロバイト以下である必要があります。',
    'numeric' => ' :attribute フィールドは :value 以下である必要があります。',
    'string' => ' :attribute フィールドは :value 文字以下である必要があります。',
  ],
  'mac_address' => ' :attribute フィールドは有効な MAC アドレスである必要があります。',
  'max' => [
    'numeric' => ' :attribute は :max を超えることはできません。',
    'file' => ' :attribute は :max キロバイトを超えることはできません。',
    'string' => ' :attribute は :max 文字を超えることはできません。',
    'array' => ' :attribute には :max を超えるアイテムを含めることはできません。',
  ],
  'max_digits' => ' :attribute フィールドには :max 桁を超える数字を含めることはできません。',
  'mimes' => ' :attribute は、 :values タイプのファイルである必要があります。',
  'mimetypes' => ' :attribute は、 :values タイプのファイルである必要があります。',
  'min' => [
    'numeric' => ' :attribute は少なくとも :min でなければなりません。',
    'file' => ' :attribute は少なくとも :min キロバイトでなければなりません。',
    'string' => ' :attribute は少なくとも :min 文字でなければなりません。',
    'array' => ' :attribute には少なくとも :min のアイテムが必要です。',
  ],
  'not_in' => '選択された :attribute は無効です。',
  'numeric' => ' :attribute は数値でなければなりません。',
  'present' => ' :attribute フィールドが存在する必要があります。',
  'regex' => ' :attribute 形式が無効です。',
  'required' => ' :attribute フィールドは必須です。',
  'required_if' => ' :other が :value の場合、 :attribute フィールドは必須です。',
  'required_unless' => ' :other が :values に含まれていない限り、 :attribute フィールドは必須です。',
  'required_with' => ' :values が存在する場合、 :attribute フィールドは必須です。',
  'required_with_all' => ' :values が存在する場合、 :attribute フィールドは必須です。',
  'required_without' => ' :values が存在しない場合、 :attribute フィールドは必須です。',
  'required_without_all' => ' :values が存在しない場合は、 :attribute フィールドが必要です。',
  'same' => ' :attribute と :other は一致する必要があります。',
  'min_digits' => ' :attribute フィールドには少なくとも :min 桁が必要です。',
  'missing' => ' :attribute フィールドが欠落している必要があります。',
  'missing_if' => ' :other が :value の場合、 :attribute フィールドは欠落している必要があります。',
  'missing_unless' => ' :other が :value でない限り、 :attribute フィールドは欠落している必要があります。',
  'missing_with' => ' :values が存在する場合、 :attribute フィールドは存在しない必要があります。',
  'missing_with_all' => ' :values が存在する場合、 :attribute フィールドは存在しない必要があります。',
  'multiple_of' => ' :attribute フィールドは :value の倍数でなければなりません。',
  'not_regex' => ' :attribute フィールドの形式が無効です。',
  'password' => [
    'letters' => ' :attribute フィールドには少なくとも 1 つの文字が含まれている必要があります。',
    'mixed' => ' :attribute フィールドには、少なくとも 1 つの大文字と 1 つの小文字が含まれている必要があります。',
    'numbers' => ' :attribute フィールドには少なくとも 1 つの数値が含まれている必要があります。',
    'symbols' => ' :attribute フィールドには少なくとも 1 つのシンボルが含まれている必要があります。',
    'uncompromised' => '指定された :attribute はデータ漏洩で出現しました。別の :attribute を選択してください。',
  ],
  'prohibited' => ' :attribute フィールドは禁止されています。',
  'prohibited_if' => ' :other が :value の場合、 :attribute フィールドは禁止されます。',
  'prohibited_unless' => ' :other が :values に含まれていない限り、 :attribute フィールドは禁止されます。',
  'prohibits' => ' :attribute フィールドは :other の存在を禁止します。',
  'required_array_keys' => ' :attribute フィールドには、 :values のエントリが含まれている必要があります。',
  'required_if_accepted' => ' :other が受け入れられる場合、 :attribute フィールドは必須です。',
  'size' => [
    'numeric' => ' :attribute は :size である必要があります。',
    'file' => ' :attribute は :size キロバイトである必要があります。',
    'string' => ' :attribute は :size 文字である必要があります。',
    'array' => ' :attribute には :size アイテムが含まれている必要があります。',
  ],
  'string' => ' :attribute は文字列である必要があります。',
  'timezone' => ' :attribute は有効なゾーンである必要があります。',
  'unique' => ' :attribute はすでに取られています。',
  'uploaded' => ' :attribute のアップロードに失敗しました。',
  'url' => ' :attribute 形式が無効です。',
  'email_domain' => ' :attribute は有効なドメインである必要があります。 gmail.com',
  'slack_webhook' => 'Webhook 形式が無効です。詳細については、こちらをご覧ください',
  'not_custom_fields' => '同じモジュールに同じラベル名を使用できないため、このラベルでカスタム フィールドを追加できません',
  'starts_with' => ' :attribute フィールドは、次のいずれかで始まる必要があります: :values。',
  'ulid' => ' :attribute フィールドは有効な ULID である必要があります。',
  'uppercase' => ' :attribute フィールドは大文字である必要があります。',
  'uuid' => ' :attribute フィールドは有効な UUID である必要があります。',
  'custom' => [
    'attribute-name' => [
      'rule-name' => 'カスタムメッセージ',
    ],
  ],
  'givenDataInvalid' => '指定されたデータは無効でした。',
  'attributes' => [
    'client_name' => 'クライアント名',
    'client_email' => 'クライアントの電子メール',
    'website' => 'Webサイト',
    'name' => '名前',
    'email' => 'Eメール',
    'password' => 'パスワード',
    'country' => '国',
    'mobile' => '携帯',
    'category_name' => '種別名',
    'title' => 'タイトル',
    'details' => '詳細',
    'user_id' => '従業員',
    'category_id' => 'カテゴリID',
    'file' => 'ファイル',
    'contact_name' => '連絡先',
    'import_file' => 'インポートファイル',
    'remind_time' => '時間を思い出させる',
    'next_follow_up_date' => '次回のフォローアップ日',
    'employee_id' => '従業員ID',
    'department' => '部門',
    'designation' => '指定',
    'hourly_rate' => '時給',
    'joining_date' => '入社日',
    'last_date' => '最後の日付',
    'date_of_birth' => '生年月日',
    'probation_end_date' => '試用期間終了日',
    'notice_period_start_date' => '通知期間の開始日',
    'notice_period_end_date' => '通知期間の終了日',
    'internship_end_date' => 'インターンシップ終了日',
    'contract_end_date' => '契約終了日',
    'relationship' => '関係',
    'award' => '賞',
    'given_to' => '与えられた',
    'award_date' => '受賞日',
    'multi_date' => 'マルチデート',
    'year' => '年',
    'month' => '月',
    'office_start_time' => 'オフィスの始業時間',
    'office_end_time' => 'オフィスの終了時間',
    'shift_short_code' => 'シフトショートコード',
    'color' => '色',
    'late_mark_duration' => 'レイトマーク期間',
    'clockin_in_day' => '一日の時計',
    'office_open_days' => 'オフィスの開庁日',
    'clock_in_time' => '時間通りの時計',
    'clock_out_time' => '退勤時間',
    'working_from' => 'から働く',
    'clock_in_ip' => 'IPの時計',
    'clock_out_ip' => 'IPをクロックアウトする',
    'designation_name' => '呼称名',
    'team_name' => 'チームの名前',
    'client_id' => 'クライアントID',
    'subject' => '主題',
    'amount' => '額',
    'contract_type' => '契約種類',
    'start_date' => '開始日',
    'first_name' => 'ファーストネーム',
    'last_name' => '苗字',
    'signature' => 'サイン',
    'image' => '画像',
    'comment' => 'コメント',
    'project_name' => 'プロジェクト名',
    'hours_allocated' => '割り当てられた時間',
    'deadline' => '締め切り',
    'project_budget' => 'プロジェクトの予算',
    'currency_id' => '通貨ID',
    'project_id' => 'プロジェクトID',
    'milestone_title' => 'マイルストーンのタイトル',
    'summary' => 'まとめ',
    'discussion_category' => 'ディスカッションカテゴリー',
    'description' => '説明',
    'priority' => '優先度',
    'due_date' => '期日',
    'repeat_cycles' => 'サイクルを繰り返す',
    'dependent_task_id' => '依存タスクID',
    'estimate_hours' => '推定時間',
    'estimate_minutes' => '分を見積もる',
    'note' => '注記',
    'memo' => 'メモ',
    'start_time' => '始まる時間',
    'end_time' => '終了時間',
    'valid_till' => 'まで有効',
    'sub_total' => '小計',
    'total' => '合計',
    'lead_id' => 'リードID',
    'estimate_number' => '推定数',
    'invoice_number' => '請求書番号',
    'issue_date' => '発行日',
    'shipping_address' => 'お届け先の住所',
    'day_of_week' => '曜日',
    'day_of_month' => '月の日',
    'cn_number' => 'CN番号',
    'invoice_id' => '請求書ID',
    'item_name' => '項目名',
    'purchase_date' => '購入日',
    'price' => '価格',
    'billing_cycle' => '請求サイクル',
    'paid_on' => '支払った',
    'transaction_id' => 'トランザクションID',
    'downloadable_file' => 'ダウンロード可能なファイル',
    'tax_name' => '税名',
    'rate_percent' => 'レートパーセント',
    'status' => '状態',
    'order_date' => '注文日',
    'ticket_subject' => 'チケットの件名',
    'ticket_description' => 'チケットの説明',
    'message' => 'メッセージ',
    'type' => 'タイプ',
    'channel_name' => 'チャンネル名',
    'event_name' => 'イベント名',
    'all_employees' => '全従業員',
    'where' => 'どこ',
    'event_link' => 'イベントリンク',
    'heading' => '見出し',
    'category' => 'カテゴリー',
    'company_name' => '会社名',
    'company_email' => '会社のメールアドレス',
    'company_phone' => '会社の電話',
    'location' => '位置',
    'address' => '住所',
    'allowed_file_types' => '許可されるファイルの種類',
    'allowed_file_size' => '許可されるファイルサイズ',
    'currency_name' => '通貨名',
    'currency_symbol' => '通貨記号',
    'usd_price' => '米ドル価格',
    'exchange_rate' => '為替レート',
    'currency_code' => '通貨コード',
    'invoice_prefix' => '請求書のプレフィックス',
    'estimate_prefix' => '推定プレフィックス',
    'credit_note_prefix' => 'クレジットノートのプレフィックス',
    'template' => 'テンプレート',
    'due_after' => '後の日付',
    'invoice_terms' => '請求書の条件',
    'app_name' => 'アプリ名',
    'code' => 'コード',
    'search_keyword' => '検索キーワード',
    'reply_heading' => '返信の見出し',
    'reply_text' => '返信テキスト',
    'send_reminder' => 'リマインダーを送信する',
    'remind_to' => 'リマインダーを送信する',
    'remind_type' => 'リマインドタイプ',
    'radius' => '半径',
    'alert_after' => '後に警告',
    'monthly_report_roles' => '月次報告書の役割',
    'type_name' => '型名',
    'leave_number' => '番号を残す',
    'monthly_limit' => '月間限度額',
    'label' => 'ラベル',
    'required' => '必須',
    'agent_name' => 'エージェント名',
    'primary_color' => '原色',
    'language_name' => '言語名',
    'language_code' => '言語コード',
    'flag' => 'フラグ',
    'additional_description' => '追加説明',
    'consent_description' => '同意の説明',
    'full_name' => 'フルネーム',
    'allow_email' => '電子メールを許可する',
    'email_domain' => 'メールドメイン',
    'external_link' => '外部リンク',
    'filename' => 'ファイル名',
    'task_id' => 'タスクID',
    'group_name' => 'グループ名',
    'column_name' => '列名',
    'label_color' => 'ラベルの色',
    'clientName' => 'クライアント名',
    'city' => '市',
    'state' => '州',
    'line1' => 'ライン1',
    'notetext' => 'メモのテキスト',
    'value' => '価値',
    'admin_id' => '管理者ID',
    'reason' => '理由',
    'leave_date' => '休暇日',
    'duration' => '間隔',
    'leave_type_id' => 'タイプIDを残す',
    'occassion' => '行事',
    'date' => '日付',
    'employee_shift_id' => '従業員のシフトID',
    'hour_of_day' => '一日の時間',
    'backup_after_days' => '数日後のバックアップ',
    'delete_backup_after_days' => '数日後にバックアップを削除する',
    'credit_note_id' => 'クレジットノートID',
    'billing_frequency' => '請求頻度',
    'billing_interval' => '請求間隔',
    'work_from_type' => 'タイプから作業する',
    'label_name' => 'レーベル名',
    'has_heading' => '見出しがあります',
    'notAllowed' => ' :attributeは許可されていません',
    'effective_after' => '有効期限後',
  ],
  'selectAtLeastOne' => '少なくとも 1 つ選択してください',
  'notAllowed' => ' :attributeは許可されていません',
];