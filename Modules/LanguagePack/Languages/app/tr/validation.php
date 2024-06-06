<?php 
return [
  'accepted' => ' :attribute kabul edilmelidir.',
  'active_url' => ' :attribute geçerli bir URL değil.',
  'after' => ' :attribute, :date\'den sonraki bir tarih olmalıdır.',
  'after_or_equal' => ' :attribute, :date\'den sonraki veya ona eşit bir tarih olmalıdır.',
  'alpha' => ' :attribute yalnızca harfler içerebilir.',
  'alpha_dash' => ' :attribute yalnızca harf, rakam ve tire içerebilir.',
  'alpha_num' => ' :attribute yalnızca harf ve rakam içerebilir.',
  'array' => ' :attribute bir dizi olmalıdır.',
  'before' => ' :attribute, :date\'den önceki bir tarih olmalıdır.',
  'before_or_equal' => ' :attribute, :date\'den önce veya ona eşit bir tarih olmalıdır.',
  'accepted_if' => ' :other, :value olduğunda :attribute alanı kabul edilmelidir.',
  'ascii' => ' :attribute alanı yalnızca tek baytlık alfasayısal karakterler ve simgeler içermelidir.',
  'between' => [
    'numeric' => ' :attribute, :min ile :max arasında olmalıdır.',
    'file' => ' :attribute, :min ile :max kilobayt arasında olmalıdır.',
    'string' => ' :attribute, :min ile :max karakterleri arasında olmalıdır.',
    'array' => ' :attribute\'de :min ile :max arasında öğe bulunmalıdır.',
  ],
  'boolean' => ' :attribute alanı doğru veya yanlış olmalıdır.',
  'confirmed' => ' :attribute onayı eşleşmiyor.',
  'date' => ' :attribute geçerli bir tarih değil.',
  'date_format' => ' :attribute, :format formatıyla eşleşmiyor.',
  'different' => ' :attribute ve :other farklı olmalıdır.',
  'digits' => ' :attribute, :digits haneli olmalıdır.',
  'digits_between' => ' :attribute, :min ile :max rakamları arasında olmalıdır.',
  'dimensions' => ' :attribute geçersiz resim boyutlarına sahip.',
  'distinct' => ' :attribute alanı yinelenen bir değere sahip.',
  'email' => ' :attribute geçerli bir e-posta adresi olmalıdır.',
  'invalidEmail' => 'Geçerli bir e.',
  'invalidEmailPassword' => 'E-posta ve şifre kombinasyonu doğru değil.',
  'exists' => 'Seçilen :attribute geçersiz.',
  'file' => ' :attribute bir dosya olmalıdır.',
  'filled' => ' :attribute alanının bir değeri olmalıdır.',
  'image' => ' :attribute bir resim olmalıdır.',
  'in' => 'Seçilen :attribute geçersiz.',
  'in_array' => ' :attribute alanı :other\'de mevcut değildir.',
  'integer' => ' :attribute bir tamsayı olmalıdır.',
  'ip' => ' :attribute geçerli bir IP adresi olmalıdır.',
  'json' => ' :attribute geçerli bir JSON dizesi olmalıdır.',
  'current_password' => 'Şifre yanlış.',
  'date_equals' => ' :attribute alanı :date\'ye eşit bir tarih olmalıdır.',
  'decimal' => ' :attribute alanında :decimal ondalık basamak bulunmalıdır.',
  'declined' => ' :attribute alanı reddedilmelidir.',
  'declined_if' => ' :other, :value olduğunda :attribute alanı reddedilmelidir.',
  'doesnt_end_with' => ' :attribute alanı aşağıdakilerden biriyle bitmemelidir: :values.',
  'doesnt_start_with' => ' :attribute alanı aşağıdakilerden biriyle başlamamalıdır: :values.',
  'ends_with' => ' :attribute alanı aşağıdakilerden biriyle bitmelidir: :values.',
  'enum' => 'Seçilen :attribute geçersiz.',
  'gt' => [
    'array' => ' :attribute alanında :value\'den fazla öğe bulunmalıdır.',
    'file' => ' :attribute alanı :value kilobayttan büyük olmalıdır.',
    'numeric' => ' :attribute alanı :value\'den büyük olmalıdır.',
    'string' => ' :attribute alanı :value karakterden büyük olmalıdır.',
  ],
  'gte' => [
    'array' => ' :attribute alanında :value veya daha fazla öğe bulunmalıdır.',
    'file' => ' :attribute alanı :value kilobayttan büyük veya ona eşit olmalıdır.',
    'numeric' => ' :attribute alanı :value\'den büyük veya ona eşit olmalıdır.',
    'string' => ' :attribute alanı :value karakterden büyük veya ona eşit olmalıdır.',
  ],
  'ipv4' => ' :attribute alanı geçerli bir IPv4 adresi olmalıdır.',
  'ipv6' => ' :attribute alanı geçerli bir IPv6 adresi olmalıdır.',
  'lowercase' => ' :attribute alanı küçük harf olmalıdır.',
  'lt' => [
    'array' => ' :attribute alanında :value\'den az öğe bulunmalıdır.',
    'file' => ' :attribute alanı :value kilobayttan küçük olmalıdır.',
    'numeric' => ' :attribute alanı :value\'den küçük olmalıdır.',
    'string' => ' :attribute alanı :value karakterden kısa olmalıdır.',
  ],
  'lte' => [
    'array' => ' :attribute alanında :value\'den fazla öğe bulunmamalıdır.',
    'file' => ' :attribute alanı :value kilobayta eşit veya bundan küçük olmalıdır.',
    'numeric' => ' :attribute alanı :value\'den küçük veya ona eşit olmalıdır.',
    'string' => ' :attribute alanı :value karakterden küçük veya ona eşit olmalıdır.',
  ],
  'mac_address' => ' :attribute alanı geçerli bir MAC adresi olmalıdır.',
  'max' => [
    'numeric' => ' :attribute, :max\'den büyük olamaz.',
    'file' => ' :attribute, :max kilobayttan büyük olamaz.',
    'string' => ' :attribute, :max karakterden büyük olamaz.',
    'array' => ' :attribute\'de :max\'den fazla öğe bulunamaz.',
  ],
  'max_digits' => ' :attribute alanı :max rakamından fazla olmamalıdır.',
  'mimes' => ' :attribute, şu türde bir dosya olmalıdır: :values.',
  'mimetypes' => ' :attribute, şu türde bir dosya olmalıdır: :values.',
  'min' => [
    'numeric' => ' :attribute en az :min olmalıdır.',
    'file' => ' :attribute en az :min kilobayt olmalıdır.',
    'string' => ' :attribute en az :min karakterden oluşmalıdır.',
    'array' => ' :attribute\'de en az :min öğe bulunmalıdır.',
  ],
  'not_in' => 'Seçilen :attribute geçersiz.',
  'numeric' => ' :attribute bir sayı olmalıdır.',
  'present' => ' :attribute alanının mevcut olması gerekir.',
  'regex' => ' :attribute biçimi geçersiz.',
  'required' => ' :attribute alanı zorunludur.',
  'required_if' => ' :other, :value olduğunda :attribute alanı gereklidir.',
  'required_unless' => ' :other, :values\'ün içinde olmadığı sürece :attribute alanı gereklidir.',
  'required_with' => ' :values mevcut olduğunda :attribute alanı gereklidir.',
  'required_with_all' => ' :values mevcut olduğunda :attribute alanı gereklidir.',
  'required_without' => ' :values mevcut olmadığında :attribute alanı gereklidir.',
  'required_without_all' => ' :values\'den hiçbiri mevcut olmadığında :attribute alanı gereklidir.',
  'same' => ' :attribute ve :other eşleşmelidir.',
  'min_digits' => ' :attribute alanı en az :min haneli olmalıdır.',
  'missing' => ' :attribute alanı eksik olmalıdır.',
  'missing_if' => ' :other, :value olduğunda :attribute alanı eksik olmalıdır.',
  'missing_unless' => ' :other, :value olmadığı sürece :attribute alanı eksik olmalıdır.',
  'missing_with' => ' :values mevcut olduğunda :attribute alanı eksik olmalıdır.',
  'missing_with_all' => ' :values mevcut olduğunda :attribute alanı eksik olmalıdır.',
  'multiple_of' => ' :attribute alanı :value\'nin katı olmalıdır.',
  'not_regex' => ' :attribute alan formatı geçersiz.',
  'password' => [
    'letters' => ' :attribute alanı en az bir harf içermelidir.',
    'mixed' => ' :attribute alanı en az bir büyük harf ve bir küçük harf içermelidir.',
    'numbers' => ' :attribute alanı en az bir sayı içermelidir.',
    'symbols' => ' :attribute alanı en az bir sembol içermelidir.',
    'uncompromised' => 'Verilen :attribute bir veri sızıntısında ortaya çıktı. Lütfen farklı bir :attribute seçin.',
  ],
  'prohibited' => ' :attribute alanı yasaktır.',
  'prohibited_if' => ' :other, :value olduğunda :attribute alanı yasaktır.',
  'prohibited_unless' => ' :other, :values\'ün içinde olmadığı sürece :attribute alanı yasaktır.',
  'prohibits' => ' :attribute alanı :other\'nin mevcut olmasını yasaklar.',
  'required_array_keys' => ' :attribute alanı aşağıdakiler için girişler içermelidir: :values.',
  'required_if_accepted' => ' :other kabul edildiğinde :attribute alanı zorunludur.',
  'size' => [
    'numeric' => ' :attribute :size olmalıdır.',
    'file' => ' :attribute, :size kilobayt olmalıdır.',
    'string' => ' :attribute, :size karakterden oluşmalıdır.',
    'array' => ' :attribute, :size öğe içermelidir.',
  ],
  'string' => ' :attribute bir dize olmalıdır.',
  'timezone' => ' :attribute geçerli bir bölge olmalıdır.',
  'unique' => ' :attribute zaten alınmış.',
  'uploaded' => ' :attribute yüklenemedi.',
  'url' => ' :attribute biçimi geçersiz.',
  'email_domain' => ' :attribute geçerli bir alan adı olmalıdır; gmail.com',
  'slack_webhook' => 'Webhook biçimi geçersiz. Daha fazla bilgi için lütfen burayı ziyaret edin',
  'not_custom_fields' => 'Bu etiketle özel alanı ekleyemezsiniz',
  'starts_with' => ' :attribute alanı aşağıdakilerden biriyle başlamalıdır: :values.',
  'ulid' => ' :attribute alanı geçerli bir ULID olmalıdır.',
  'uppercase' => ' :attribute alanı büyük harf olmalıdır.',
  'uuid' => ' :attribute alanı geçerli bir UUID olmalıdır.',
  'custom' => [
    'attribute-name' => [
      'rule-name' => 'özel mesaj',
    ],
  ],
  'givenDataInvalid' => 'Verilen veriler geçersizdi.',
  'attributes' => [
    'client_name' => 'Müşteri Adı',
    'client_email' => 'müşteri e-postası',
    'website' => 'İnternet sitesi',
    'name' => 'isim',
    'email' => 'e-posta',
    'password' => 'şifre',
    'country' => 'ülke',
    'mobile' => 'mobil',
    'category_name' => 'Kategori adı',
    'title' => 'başlık',
    'details' => 'detaylar',
    'user_id' => 'çalışan',
    'category_id' => 'kimlik kategorisi',
    'file' => 'dosya',
    'contact_name' => 'iletişim adı',
    'import_file' => 'önemli dosya',
    'remind_time' => 'zamanı hatırlat',
    'next_follow_up_date' => 'sonraki takip tarihi',
    'employee_id' => 'Çalışan kimliği',
    'department' => 'departman',
    'designation' => 'atama',
    'hourly_rate' => 'saatlik ücret',
    'joining_date' => 'katılma tarihi',
    'last_date' => 'son tarih',
    'date_of_birth' => 'doğum tarihi',
    'probation_end_date' => 'denetimli serbestlik bitiş tarihi',
    'notice_period_start_date' => 'ihbar süresinin başlangıç ​​tarihi',
    'notice_period_end_date' => 'ihbar süresinin bitiş tarihi',
    'internship_end_date' => 'staj bitiş tarihi',
    'contract_end_date' => 'sözleşme bitiş tarihi',
    'relationship' => 'ilişki',
    'award' => 'ödül',
    'given_to' => 'verilen',
    'award_date' => 'ödül Tarihi',
    'multi_date' => 'çoklu tarih',
    'year' => 'yıl',
    'month' => 'ay',
    'office_start_time' => 'ofis başlangıç ​​zamanı',
    'office_end_time' => 'ofis bitiş zamanı',
    'shift_short_code' => 'kısa kod kaydırma',
    'color' => 'renk',
    'late_mark_duration' => 'geç işaret süresi',
    'clockin_in_day' => 'bir günde saat',
    'office_open_days' => 'ofisin açık olduğu günler',
    'clock_in_time' => 'zamanında saat',
    'clock_out_time' => 'çıkış zamanı',
    'working_from' => 'den çalışmak',
    'clock_in_ip' => 'IP\'deki saat',
    'clock_out_ip' => 'IP\'yi kapat',
    'designation_name' => 'atama adı',
    'team_name' => 'Takım adı',
    'client_id' => 'Müşteri Kimliği',
    'subject' => 'ders',
    'amount' => 'miktar',
    'contract_type' => 'sözleşme tipi',
    'start_date' => 'Başlangıç ​​tarihi',
    'first_name' => 'ilk adı',
    'last_name' => 'soy isim',
    'signature' => 'imza',
    'image' => 'görüntü',
    'comment' => 'Yorum',
    'project_name' => 'proje Adı',
    'hours_allocated' => 'tahsis edilen saatler',
    'deadline' => 'son teslim tarihi',
    'project_budget' => 'proje bütçesi',
    'currency_id' => 'para birimi kimliği',
    'project_id' => 'proje kimliği',
    'milestone_title' => 'kilometre taşı başlığı',
    'summary' => 'özet',
    'discussion_category' => 'tartışma kategorisi',
    'description' => 'Tanım',
    'priority' => 'öncelik',
    'due_date' => 'bitiş tarihi',
    'repeat_cycles' => 'döngüleri tekrarla',
    'dependent_task_id' => 'bağımlı görev kimliği',
    'estimate_hours' => 'tahmini saatler',
    'estimate_minutes' => 'dakikaları tahmin et',
    'note' => 'Not',
    'memo' => 'hafıza',
    'start_time' => 'Başlangıç ​​saati',
    'end_time' => 'bitiş zamanı',
    'valid_till' => 'kadar geçerli',
    'sub_total' => 'ara toplam',
    'total' => 'Toplam',
    'lead_id' => 'potansiyel müşteri kimliği',
    'estimate_number' => 'tahmin numarası',
    'invoice_number' => 'fatura numarası',
    'issue_date' => 'Veriliş tarihi',
    'shipping_address' => 'Gönderi Adresi',
    'day_of_week' => 'haftanın günü',
    'day_of_month' => 'ayın günü',
    'cn_number' => 'cn numarası',
    'invoice_id' => 'fatura kimliği',
    'item_name' => 'öğe adı',
    'purchase_date' => 'Satınalma tarihi',
    'price' => 'fiyat',
    'billing_cycle' => 'fatura döngüsü',
    'paid_on' => 'ödenmiş',
    'transaction_id' => 'İşlem Kimliği',
    'downloadable_file' => 'indirilebilir dosya',
    'tax_name' => 'vergi adı',
    'rate_percent' => 'oran yüzde',
    'status' => 'durum',
    'order_date' => 'sipariş tarihi',
    'ticket_subject' => 'bilet konusu',
    'ticket_description' => 'bilet açıklaması',
    'message' => 'İleti',
    'type' => 'tip',
    'channel_name' => 'Kanal ismi',
    'event_name' => 'etkinlik adı',
    'all_employees' => 'tüm çalışanlar',
    'where' => 'Neresi',
    'event_link' => 'etkinlik bağlantısı',
    'heading' => 'başlık',
    'category' => 'kategori',
    'company_name' => 'Firma Adı',
    'company_email' => 'şirket e-postası',
    'company_phone' => 'şirket telefonu',
    'location' => 'konum',
    'address' => 'adres',
    'allowed_file_types' => 'izin verilen dosya türleri',
    'allowed_file_size' => 'izin verilen dosya boyutu',
    'currency_name' => 'para birimi adı',
    'currency_symbol' => 'para birimi simgesi',
    'usd_price' => 'usd_price',
    'exchange_rate' => 'Döviz kuru',
    'currency_code' => 'para birimi kodu',
    'invoice_prefix' => 'fatura öneki',
    'estimate_prefix' => 'tahmin öneki',
    'credit_note_prefix' => 'kredi notu öneki',
    'template' => 'şablon',
    'due_after' => 'sonraki tarih',
    'invoice_terms' => 'fatura koşulları',
    'app_name' => 'uygulama ismi',
    'code' => 'kod',
    'search_keyword' => 'Anahtarkelime Ara',
    'reply_heading' => 'cevap başlığı',
    'reply_text' => 'cevap metni',
    'send_reminder' => 'hatırlatıcıyı gönder',
    'remind_to' => 'hatırlatıcıyı gönder',
    'remind_type' => 'hatırlatma türü',
    'radius' => 'yarıçap',
    'alert_after' => 'sonra uyarı',
    'monthly_report_roles' => 'aylık rapor rolleri',
    'type_name' => 'adı yazın',
    'leave_number' => 'numarayı bırak',
    'monthly_limit' => 'aylık limit',
    'label' => 'etiket',
    'required' => 'gerekli',
    'agent_name' => 'ajan adı',
    'primary_color' => 'ana renk',
    'language_name' => 'dil adı',
    'language_code' => 'dil kodu',
    'flag' => 'bayrak',
    'additional_description' => 'Ek açıklama',
    'consent_description' => 'izin açıklaması',
    'full_name' => 'Ad Soyad',
    'allow_email' => 'e-postaya izin ver',
    'email_domain' => 'e-posta alanı',
    'external_link' => 'harici bağlantı',
    'filename' => 'dosya adı',
    'task_id' => 'görev kimliği',
    'group_name' => 'grup ismi',
    'column_name' => 'sütun adı',
    'label_color' => 'etiket rengi',
    'clientName' => 'Müşteri Adı',
    'city' => 'şehir',
    'state' => 'durum',
    'line1' => 'satır 1',
    'notetext' => 'not metni',
    'value' => 'değer',
    'admin_id' => 'yönetici kimliği',
    'reason' => 'sebep',
    'leave_date' => 'ayrılış tarihi',
    'duration' => 'süre',
    'leave_type_id' => 'tip kimliğini bırak',
    'occassion' => 'fırsat',
    'date' => 'tarih',
    'employee_shift_id' => 'çalışan vardiya kimliği',
    'hour_of_day' => 'günün bir saati',
    'backup_after_days' => 'günler sonra yedekleme',
    'delete_backup_after_days' => 'gün sonra yedeklemeyi sil',
    'credit_note_id' => 'kredi notu kimliği',
    'billing_frequency' => 'faturalandırma sıklığı',
    'billing_interval' => 'faturalandırma aralığı',
    'work_from_type' => 'türden çalışma',
    'label_name' => 'etiket adı',
    'has_heading' => 'başlığı var',
    'notAllowed' => ' :attribute\'e izin verilmiyor',
    'effective_after' => 'Geçerlilik Süresi:',
  ],
  'selectAtLeastOne' => 'En az birini seçin',
  'notAllowed' => ' :attribute\'e izin verilmiyor',
];