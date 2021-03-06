<?php

return [
		'user-management' => [		'title' => 'Gestão de usuários',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissões',		'fields' => [			'title' => 'Título',		],	],
		'roles' => [		'title' => 'Funções',		'fields' => [			'title' => 'Título',			'permission' => 'Permissões',		],	],
		'users' => [		'title' => 'Usuários',		'fields' => [			'name' => 'Nome',			'email' => 'E-mail',			'password' => 'Senha',			'role' => 'Função',			'remember-token' => 'Lembrar Senha',			'team' => 'Equipe',			'approved' => 'Approved',			'created-by' => 'Created by',		],	],
		'user-actions' => [		'title' => 'Ações do usuário',		'created_at' => 'Time',		'fields' => [			'user' => 'Usuário',			'action' => 'Ação',			'action-model' => 'Modelo de ação',			'action-id' => 'ID de ação',		],	],
		'teams' => [		'title' => 'Teams',		'fields' => [			'name' => 'Name',		],	],
		'content-management' => [		'title' => 'Gestão de conteúdo',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Categorias',		'fields' => [			'title' => 'Categoria',			'slug' => 'Slug',		],	],
		'content-tags' => [		'title' => 'Tags',		'fields' => [			'title' => 'Tag',			'slug' => 'Slug',		],	],
		'content-pages' => [		'title' => 'Páginas',		'fields' => [			'title' => 'Título',			'category-id' => 'Categorias',			'tag-id' => 'Tags',			'page-text' => 'Texto',			'excerpt' => 'Resumo',			'featured-image' => 'Imagem em destaque',		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [		],	],
		'time-management' => [		'title' => 'Time management',		'fields' => [		],	],
		'time-work-types' => [		'title' => 'Work types',		'fields' => [			'name' => 'Name',		],	],
		'time-projects' => [		'title' => 'Projetos',		'fields' => [			'name' => 'Nome',		],	],
		'time-entries' => [		'title' => 'Entradas de tempo',		'fields' => [			'work-type' => 'Tipo de trabalho',			'project' => 'Projeto',			'start-time' => 'Tempo de início',			'end-time' => 'Tempo de final',			'created-by' => 'Created by',			'created-by-team' => 'Created by Team',		],	],
		'time-reports' => [		'title' => 'Relatórios',		'fields' => [		],	],
		'faq-management' => [		'title' => 'Gestão de FAQ',		'fields' => [		],	],
		'faq-categories' => [		'title' => 'Categorias',		'fields' => [			'title' => 'Categoria',		],	],
		'faq-questions' => [		'title' => 'Questões',		'fields' => [			'category' => 'Categoria',			'question-text' => 'Questão',			'answer-text' => 'Resposta',		],	],
		'basic-crm' => [		'title' => 'CRM Básico',		'fields' => [		],	],
		'crm-statuses' => [		'title' => 'Status',		'fields' => [			'title' => 'Título',		],	],
		'crm-customers' => [		'title' => 'Clientes',		'fields' => [			'first-name' => 'Primeiro nome',			'last-name' => 'Último nome',			'crm-status' => 'Estado',			'email' => 'E-mail',			'phone' => 'Telefone',			'address' => 'Endereço',			'skype' => 'Skype',			'website' => 'Website',			'description' => 'Descrição',		],	],
		'crm-notes' => [		'title' => 'Notas',		'fields' => [			'customer' => 'Cliente',			'note' => 'Notas',		],	],
		'crm-documents' => [		'title' => 'Documentos',		'fields' => [			'customer' => 'Cliente',			'name' => 'Título',			'description' => 'Descrição',			'file' => 'Arquivo',		],	],
		'expense-management' => [		'title' => 'Expense Management',		'fields' => [		],	],
		'expense-category' => [		'title' => 'Expense Categories',		'fields' => [			'name' => 'Name',		],	],
		'income-category' => [		'title' => 'Categorias de entrada',		'fields' => [			'name' => 'Name',		],	],
		'income' => [		'title' => 'Income',		'fields' => [			'income-category' => 'Income Category',			'entry-date' => 'Entry date',			'amount' => 'Amount',		],	],
		'expense' => [		'title' => 'Despesas',		'fields' => [			'expense-category' => 'Categoria de Despesa',			'entry-date' => 'Data de entrada',			'amount' => 'Quantidade',		],	],
		'monthly-report' => [		'title' => 'Relatório mensal',		'fields' => [		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [			'text' => 'Text',			'link' => 'Link',			'users' => 'Users',		],	],
		'assets-management' => [		'title' => 'Assets management',		'fields' => [		],	],
		'assets-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Title',		],	],
		'assets-statuses' => [		'title' => 'Statuses',		'fields' => [			'title' => 'Title',		],	],
		'assets-locations' => [		'title' => 'Locations',		'fields' => [			'title' => 'Title',		],	],
		'assets' => [		'title' => 'Assets',		'fields' => [			'category' => 'Category',			'serial-number' => 'Serial number',			'title' => 'Title',			'photo1' => 'Photo1',			'photo2' => 'Photo2',			'photo3' => 'Photo3',			'status' => 'Status',			'location' => 'Location',			'assigned-user' => 'Assigned (user)',			'notes' => 'Notes',		],	],
		'assets-history' => [		'title' => 'Assets history',		'created_at' => 'Time',		'fields' => [			'asset' => 'Asset',			'status' => 'Status',			'location' => 'Location',			'assigned-user' => 'Assigned (user)',		],	],
		'contact-management' => [		'title' => 'Contact management',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Companies',		'fields' => [			'name' => 'Company name',			'address' => 'Address',			'website' => 'Website',			'email' => 'Email',		],	],
		'contacts' => [		'title' => 'Contacts',		'fields' => [			'company' => 'Company',			'first-name' => 'First name',			'last-name' => 'Last name',			'phone1' => 'Phone 1',			'phone2' => 'Phone 2',			'email' => 'Email',			'skype' => 'Skype',			'address' => 'Address',		],	],
		'task-management' => [		'title' => 'Task management',		'fields' => [		],	],
		'task-statuses' => [		'title' => 'Statuses',		'fields' => [			'name' => 'Name',		],	],
		'task-tags' => [		'title' => 'Tags',		'fields' => [			'name' => 'Name',		],	],
		'tasks' => [		'title' => 'Tasks',		'fields' => [			'name' => 'Name',			'description' => 'Description',			'status' => 'Status',			'tag' => 'Tags',			'attachment' => 'Attachment',			'due-date' => 'Due date',			'user' => 'Assigned to',		],	],
		'task-calendar' => [		'title' => 'Calendar',		'fields' => [		],	],
		'client-management' => [		'title' => 'Client management',		'fields' => [		],	],
		'client-management-settings' => [		'title' => 'Client management settings',		'fields' => [		],	],
		'client-currencies' => [		'title' => 'Currencies',		'fields' => [			'title' => 'Title',			'code' => 'Code',			'main-currency' => 'Main currency',		],	],
		'client-transaction-types' => [		'title' => 'Transaction types',		'fields' => [			'title' => 'Title',		],	],
		'client-income-sources' => [		'title' => 'Income sources',		'fields' => [			'title' => 'Title',			'fee-percent' => 'Fee percent',		],	],
		'client-statuses' => [		'title' => 'Client statuses',		'fields' => [			'title' => 'Title',		],	],
		'client-project-statuses' => [		'title' => 'Project statuses',		'fields' => [			'title' => 'Title',		],	],
		'clients' => [		'title' => 'Clients',		'fields' => [			'first-name' => 'First name',			'last-name' => 'Last name',			'company-name' => 'Company',			'email' => 'Email',			'phone' => 'Phone',			'website' => 'Website',			'skype' => 'Skype',			'country' => 'Country',			'client-status' => 'Client status',		],	],
		'client-projects' => [		'title' => 'Projects',		'fields' => [			'title' => 'Title',			'client' => 'Client',			'description' => 'Description',			'date' => 'Start date',			'budget' => 'Budget',			'project-status' => 'Project status',		],	],
		'client-notes' => [		'title' => 'Notes',		'fields' => [			'project' => 'Project',			'text' => 'Note text',		],	],
		'client-documents' => [		'title' => 'Documents',		'fields' => [			'project' => 'Project',			'title' => 'Title',			'description' => 'Description',			'file' => 'File',		],	],
		'client-transactions' => [		'title' => 'Transactions',		'fields' => [			'project' => 'Project',			'transaction-type' => 'Transaction type',			'income-source' => 'Income source',			'title' => 'Title',			'description' => 'Description',			'amount' => 'Amount',			'currency' => 'Currency',			'transaction-date' => 'Transaction date',		],	],
		'client-reports' => [		'title' => 'Reports',		'fields' => [		],	],
	'app_create' => 'Create',
	'app_save' => 'Save',
	'app_edit' => 'Edit',
	'app_restore' => 'Restore',
	'app_permadel' => 'Delete Permanently',
	'app_all' => 'All',
	'app_trash' => 'Trash',
	'app_view' => 'View',
	'app_update' => 'Update',
	'app_list' => 'List',
	'app_no_entries_in_table' => 'No entries in table',
	'app_custom_controller_index' => 'Custom controller index.',
	'app_logout' => 'Logout',
	'app_add_new' => 'Add new',
	'app_are_you_sure' => 'Are you sure?',
	'app_back_to_list' => 'Back to list',
	'app_dashboard' => 'Dashboard',
	'app_delete' => 'Delete',
	'app_delete_selected' => 'Delete selected',
	'app_category' => 'Category',
	'app_categories' => 'Categories',
	'app_sample_category' => 'Sample category',
	'app_questions' => 'Questions',
	'app_question' => 'Question',
	'app_answer' => 'Answer',
	'app_sample_question' => 'Sample question',
	'app_sample_answer' => 'Sample answer',
	'app_faq_management' => 'FAQ Management',
	'app_administrator_can_create_other_users' => 'Administrator (can create other users)',
	'app_simple_user' => 'Simple user',
	'app_title' => 'Title',
	'app_roles' => 'Roles',
	'app_role' => 'Role',
	'app_user_management' => 'User management',
	'app_users' => 'Users',
	'app_user' => 'User',
	'app_name' => 'Name',
	'app_email' => 'Email',
	'app_password' => 'Password',
	'app_remember_token' => 'Remember token',
	'app_permissions' => 'Permissions',
	'app_user_actions' => 'User actions',
	'app_action' => 'Action',
	'app_action_model' => 'Action model',
	'app_action_id' => 'Action id',
	'app_time' => 'Time',
	'app_campaign' => 'Campaign',
	'app_campaigns' => 'Campaigns',
	'app_description' => 'Description',
	'app_valid_from' => 'Valid from',
	'app_valid_to' => 'Valid to',
	'app_discount_amount' => 'Discount amount',
	'app_discount_percent' => 'Discount percent',
	'app_coupons_amount' => 'Coupons amount',
	'app_coupons' => 'Coupons',
	'app_code' => 'Code',
	'app_redeem_time' => 'Redeem time',
	'app_coupon_management' => 'Coupon Management',
	'app_time_management' => 'Time management',
	'app_projects' => 'Projects',
	'app_reports' => 'Reports',
	'app_time_entries' => 'Time entries',
	'app_work_type' => 'Work type',
	'app_work_types' => 'Work types',
	'app_project' => 'Project',
	'app_start_time' => 'Start time',
	'app_end_time' => 'End time',
	'app_expense_category' => 'Expense Category',
	'app_expense_categories' => 'Expense Categories',
	'app_expense_management' => 'Expense Management',
	'app_expenses' => 'Expenses',
	'app_expense' => 'Expense',
	'app_entry_date' => 'Entry date',
	'app_amount' => 'Amount',
	'app_income_categories' => 'Income categories',
	'app_monthly_report' => 'Monthly report',
	'app_companies' => 'Companies',
	'app_company_name' => 'Company name',
	'app_address' => 'Address',
	'app_website' => 'Website',
	'app_contact_management' => 'Contact management',
	'app_contacts' => 'Contacts',
	'app_company' => 'Company',
	'app_first_name' => 'First name',
	'app_last_name' => 'Last name',
	'app_phone' => 'Phone',
	'app_phone1' => 'Phone 1',
	'app_phone2' => 'Phone 2',
	'app_skype' => 'Skype',
	'app_photo' => 'Photo (max 8mb)',
	'app_category_name' => 'Category name',
	'app_product_management' => 'Product management',
	'app_products' => 'Products',
	'app_product_name' => 'Product name',
	'app_price' => 'Price',
	'app_tags' => 'Tags',
	'app_tag' => 'Tag',
	'app_photo1' => 'Photo1',
	'app_photo2' => 'Photo2',
	'app_photo3' => 'Photo3',
	'app_calendar' => 'Calendar',
	'app_statuses' => 'Statuses',
	'app_task_management' => 'Task management',
	'app_tasks' => 'Tasks',
	'app_status' => 'Status',
	'app_attachment' => 'Attachment',
	'app_due_date' => 'Due date',
	'app_assigned_to' => 'Assigned to',
	'app_assets' => 'Assets',
	'app_asset' => 'Asset',
	'app_serial_number' => 'Serial number',
	'app_location' => 'Location',
	'app_locations' => 'Locations',
	'app_assigned_user' => 'Assigned (user)',
	'app_notes' => 'Notes',
	'app_assets_history' => 'Assets history',
	'app_assets_management' => 'Assets management',
	'app_slug' => 'Slug',
	'app_content_management' => 'Content management',
	'app_text' => 'Text',
	'app_excerpt' => 'Excerpt',
	'app_featured_image' => 'Featured image',
	'app_pages' => 'Pages',
	'app_axis' => 'Axis',
	'app_show' => 'Show',
	'app_group_by' => 'Group by',
	'app_chart_type' => 'Chart type',
	'app_create_new_report' => 'Create new report',
	'app_no_reports_yet' => 'No reports yet.',
	'app_created_at' => 'Created at',
	'app_updated_at' => 'Updated at',
	'app_deleted_at' => 'Deleted at',
	'app_reports_x_axis_field' => 'X-axis - please choose one of date/time fields',
	'app_reports_y_axis_field' => 'Y-axis - please choose one of number fields',
	'app_select_crud_placeholder' => 'Please select one of your CRUDs',
	'app_select_dt_placeholder' => 'Please select one of date/time fields',
	'app_aggregate_function_use' => 'Aggregate function to use',
	'app_x_axis_group_by' => 'X-axis group by',
	'app_x_axis_field' => 'X-axis field (date/time)',
	'app_y_axis_field' => 'Y-axis field',
	'app_integer_float_placeholder' => 'Please select one of integer/float fields',
	'app_change_notifications_field_1_label' => 'Send email notification to User',
	'app_change_notifications_field_2_label' => 'When Entry on CRUD',
	'app_select_users_placeholder' => 'Please select one of your Users',
	'app_is_created' => 'is created',
	'app_is_updated' => 'is updated',
	'app_is_deleted' => 'is deleted',
	'app_notifications' => 'Notifications',
	'app_notify_user' => 'Notify User',
	'app_when_crud' => 'When CRUD',
	'app_create_new_notification' => 'Create new Notification',
	'app_stripe_transactions' => 'Stripe Transactions',
	'app_upgrade_to_premium' => 'Upgrade to Premium',
	'app_messages' => 'Messages',
	'app_you_have_no_messages' => 'You have no messages.',
	'app_all_messages' => 'All Messages',
	'app_new_message' => 'New message',
	'app_outbox' => 'Outbox',
	'app_inbox' => 'Inbox',
	'app_recipient' => 'Recipient',
	'app_subject' => 'Subject',
	'app_message' => 'Message',
	'app_send' => 'Send',
	'app_reply' => 'Reply',
	'app_calendar_sources' => 'Calendar sources',
	'app_new_calendar_source' => 'Create new calendar source',
	'app_crud_title' => 'Crud title',
	'app_crud_date_field' => 'Crud date field',
	'app_prefix' => 'Prefix',
	'app_label_field' => 'Label field',
	'app_suffix' => 'Sufix',
	'app_no_calendar_sources' => 'No calendar sources yet.',
	'app_crud_event_field' => 'Event label field',
	'app_create_new_calendar_source' => 'Create new Calendar Source',
	'app_edit_calendar_source' => 'Edit Calendar Source',
	'app_client_management' => 'Client management',
	'app_client_management_settings' => 'Client management settings',
	'app_country' => 'Country',
	'app_client_status' => 'Client status',
	'app_clients' => 'Clients',
	'app_client_statuses' => 'Client statuses',
	'app_currencies' => 'Currencies',
	'app_main_currency' => 'Main currency',
	'app_documents' => 'Documents',
	'app_file' => 'File',
	'app_income_source' => 'Income source',
	'app_income_sources' => 'Income sources',
	'app_fee_percent' => 'Fee percent',
	'app_note_text' => 'Note text',
	'app_client' => 'Client',
	'app_start_date' => 'Start date',
	'app_budget' => 'Budget',
	'app_project_status' => 'Project status',
	'app_project_statuses' => 'Project statuses',
	'app_transactions' => 'Transactions',
	'app_transaction_types' => 'Transaction types',
	'app_transaction_type' => 'Transaction type',
	'app_transaction_date' => 'Transaction date',
	'app_currency' => 'Currency',
	'app_current_password' => 'Current password',
	'app_new_password' => 'New password',
	'app_password_confirm' => 'New password confirmation',
	'app_dashboard_text' => 'You are logged in!',
	'app_forgot_password' => 'Forgot your password?',
	'app_remember_me' => 'Remember me',
	'app_login' => 'Login',
	'app_change_password' => 'Change password',
	'app_csv' => 'CSV',
	'app_print' => 'Print',
	'app_excel' => 'Excel',
	'app_copy' => 'Copy',
	'app_colvis' => 'Column visibility',
	'app_pdf' => 'PDF',
	'app_reset_password' => 'Reset password',
	'app_reset_password_woops' => '<strong>Whoops!</strong> There were problems with input:',
	'app_email_line1' => 'You are receiving this email because we received a password reset request for your account.',
	'app_email_line2' => 'If you did not request a password reset, no further action is required.',
	'app_email_greet' => 'Hello',
	'app_email_regards' => 'Regards',
	'app_confirm_password' => 'Confirm password',
	'app_if_you_are_having_trouble' => 'If you’re having trouble clicking the',
	'app_copy_paste_url_bellow' => 'button, copy and paste the URL below into your web browser:',
	'app_please_select' => 'Please select',
	'app_register' => 'Register',
	'app_registration' => 'Registration',
	'app_not_approved_title' => 'You are not approved',
	'app_not_approved_p' => 'Your account is still not approved by administrator. Please, be patient and try again later.',
	'app_there_were_problems_with_input' => 'There were problems with input',
	'app_whoops' => 'Whoops!',
	'app_file_contains_header_row' => 'File contains header row?',
	'app_csvImport' => 'CSV Import',
	'app_csv_file_to_import' => 'CSV file to import',
	'app_parse_csv' => 'Parse CSV',
	'app_import_data' => 'Import data',
	'app_imported_rows_to_table' => 'Imported :rows rows to :table table',
	'app_subscription-billing' => 'Subscriptions',
	'app_subscription-payments' => 'Payments',
	'app_basic_crm' => 'Basic CRM',
	'app_customers' => 'Customers',
	'app_customer' => 'Customer',
	'app_select_all' => 'Select all',
	'app_deselect_all' => 'Deselect all',
	'app_team-management' => 'Teams',
	'app_team-management-singular' => 'Team',
	'global_title' => 'RPX',
];