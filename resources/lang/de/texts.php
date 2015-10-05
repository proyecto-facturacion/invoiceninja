<?php

return array(

  // client
  'organization' => 'Organisation',
  'name' => 'Name',
  'website' => 'Webseite',
  'work_phone' => 'Telefon',
  'address' => 'Adresse',
  'address1' => 'Straße',
  'address2' => 'Adresszusatz',
  'city' => 'Stadt',
  'state' => 'Bundesland',
  'postal_code' => 'Postleitzahl',
  'country_id' => 'Land',
  'contacts' => 'Kontakte',
  'first_name' => 'Vorname',
  'last_name' => 'Nachname',
  'phone' => 'Telefon',
  'email' => 'Email',
  'additional_info' => 'Zusätzliche Info',
  'payment_terms' => 'Zahlungsbedingungen',
  'currency_id' => 'Währung',
  'size_id' => 'Firmengröße',
  'industry_id' => 'Kategorie',
  'private_notes' => 'Notizen',

  // invoice
  'invoice' => 'Rechnung',
  'client' => 'Kunde',
  'invoice_date' => 'Rechnungsdatum',
  'due_date' => 'Fällig am',
  'invoice_number' => 'Rechnungsnummer',
  'invoice_number_short' => 'Rechnung #',
  'po_number' => 'Bestellnummer',
  'po_number_short' => 'BN #',
  'frequency_id' => 'Wie oft',
  'discount' => 'Rabatt',
  'taxes' => 'Steuern',
  'tax' => 'Steuer',
  'item' => 'Artikel',
  'description' => 'Beschreibung',
  'unit_cost' => 'Kosten pro Einheit',
  'quantity' => 'Menge',
  'line_total' => 'Summe',
  'subtotal' => 'Zwischensumme',
  'paid_to_date' => 'Bereits gezahlt',
  'balance_due' => 'Geschuldeter Betrag',
  'invoice_design_id' => 'Design',
  'terms' => 'Bedingungen',
  'your_invoice' => 'Ihre Rechnung',

  'remove_contact' => 'Kontakt löschen',
  'add_contact' => 'Kontakt hinzufügen',
  'create_new_client' => 'Einen neuen Kunden erstellen',
  'edit_client_details' => 'Kundendetails bearbeiten',
  'enable' => 'Aktivieren',
  'learn_more' => 'Mehr erfahren',
  'manage_rates' => 'Steuersätze verwalten',
  'note_to_client' => 'Notiz an den Kunden',
  'invoice_terms' => 'Zahlungsbedingungen',
  'save_as_default_terms' => 'Als Standardbedingungen speichern',
  'download_pdf' => 'PDF herunterladen',
  'pay_now' => 'Jetzt bezahlen',
  'save_invoice' => 'Rechnung speichern',
  'clone_invoice' => 'Rechnung duplizieren',
  'archive_invoice' => 'Rechnung archivieren',
  'delete_invoice' => 'Rechnung löschen',
  'email_invoice' => 'Rechnung versenden',
  'enter_payment' => 'Zahlung eingeben',
  'tax_rates' => 'Steuersätze',
  'rate' => 'Satz',
  'settings' => 'Einstellungen',
  'enable_invoice_tax' => 'Ermögliche das Bestimmen einer <strong>Rechnungssteuer</strong>',
  'enable_line_item_tax' => 'Ermögliche das Bestimmen von <strong>Steuern für Belegpositionen</strong>',

  // navigation
  'dashboard' => 'Dashboard',
  'clients' => 'Kunden',
  'invoices' => 'Rechnungen',
  'payments' => 'Zahlungen',
  'credits' => 'Guthaben',
  'history' => 'Verlauf',
  'search' => 'Suche',
  'sign_up' => 'Anmeldung',
  'guest' => 'Gast',
  'company_details' => 'Firmendaten',
  'online_payments' => 'Online-Zahlungen',
  'notifications' => 'Benachrichtigungen',
  'import_export' => 'Import/Export',
  'done' => 'Erledigt',
  'save' => 'Speichern',
  'create' => 'Erstellen',
  'upload' => 'Hochladen',
  'import' => 'Importieren',
  'download' => 'Downloaden',
  'cancel' => 'Abbrechen',
  'close' => 'Schließen',
  'provide_email' => 'Bitte gib eine gültige E-Mail-Adresse an',
  'powered_by' => 'Powered by',
  'no_items' => 'Keine Objekte',

  // recurring invoices
  'recurring_invoices' => 'Wiederkehrende Rechnungen',
  'recurring_help' => '<p>Sende deinem Kunden wöchentlich, zwei mal im Monat, monatlich, vierteljährlich oder jährlich automatisch die gleiche Rechnung.</p>
        <p>Benutze :MONTH, :QUARTER oder :YEAR für ein dynamisches Datum. Grundlegende Mathematik funktioniert genauso gut, zum Beispiel :MONTH-1.</p>
        <p>Beispiel zu dynamischen Rechnungs-Variabeln:</p>
        <ul>
          <li>"Fitnessstudio-Mitgliedschaft für den Monat :MONTH" => "Fitnessstudio-Mitgliedschaft für den Monat Juli"</li>
          <li>":YEAR+1 Jahresbeitrag" => "2015 Jahresbeitrag"</li>
          <li>"Vorschusszahlung für :QUARTER+1" => "Vorschusszahlung für Q2"</li>
        </ul>',

  // dashboard
  'in_total_revenue' => 'Gesamtumsatz',
  'billed_client' => 'abgerechneter Kunde',
  'billed_clients' => 'abgerechnete Kunden',
  'active_client' => 'aktiver Kunde',
  'active_clients' => 'aktive Kunden',
  'invoices_past_due' => 'Fällige Rechnungen',
  'upcoming_invoices' => 'Kommende Rechnungen',
  'average_invoice' => 'Durchschnittlicher Rechnungsbetrag',

  // list pages
  'archive' => 'archivieren',
  'delete' => 'löschen',
  'archive_client' => 'Kunde archivieren',
  'delete_client' => 'Kunde löschen',
  'archive_payment' => 'Zahlung archivieren',
  'delete_payment' => 'Zahlung löschen',
  'archive_credit' => 'Guthaben archivieren',
  'delete_credit' => 'Guthaben löschen',
  'show_archived_deleted' => 'Zeige archivierte/gelöschte',
  'filter' => 'Filter',
  'new_client' => 'Neuer Kunde',
  'new_invoice' => 'Neue Rechnung',
  'new_payment' => 'Neue Zahlung',
  'new_credit' => 'Neues Guthaben',
  'contact' => 'Kontakt',
  'date_created' => 'Erstellungsdatum',
  'last_login' => 'Letzter Login',
  'balance' => 'Saldo',
  'action' => 'Aktion',
  'status' => 'Status',
  'invoice_total' => 'Rechnungsbetrag',
  'frequency' => 'Häufigkeit',
  'start_date' => 'Startdatum',
  'end_date' => 'Enddatum',
  'transaction_reference' => 'Abwicklungsreferenz',
  'method' => 'Verfahren',
  'payment_amount' => 'Zahlungsbetrag',
  'payment_date' => 'Zahlungsdatum',
  'credit_amount' => 'Guthabenbetrag',
  'credit_balance' => 'Guthabenstand',
  'credit_date' => 'Guthabendatum',
  'empty_table' => 'Es sind keine Daten vorhanden',
  'select' => 'Wählen',
  'edit_client' => 'Kunde bearbeiten',
  'edit_invoice' => 'Rechnung bearbeiten',

  // client view page
  'create_invoice' => 'Rechnung erstellen',
  'enter_credit' => 'Guthaben eingeben',
  'last_logged_in' => 'Zuletzt eingeloggt',
  'details' => 'Details',
  'standing' => 'Aktueller Stand',
  'credit' => 'Guthaben',
  'activity' => 'Aktivität',
  'date' => 'Datum',
  'message' => 'Nachricht',
  'adjustment' => 'Anpassung',
  'are_you_sure' => 'Bist du dir sicher?',

  // payment pages
  'payment_type_id' => 'Zahlungsart',
  'amount' => 'Betrag',

  // account/company pages
  'work_email' => 'E-Mail',
  'language_id' => 'Sprache',
  'timezone_id' => 'Zeitzone',
  'date_format_id' => 'Datumsformat',
  'datetime_format_id' => 'Datums-/Zeitformat',
  'users' => 'Benutzer',
  'localization' => 'Lokalisierung',
  'remove_logo' => 'Logo entfernen',
  'logo_help' => 'Unterstützt: JPEG, GIF und PNG',
  'payment_gateway' => 'Zahlungseingang',
  'gateway_id' => 'Provider',
  'email_notifications' => 'E-Mail Benachrichtigungen',
  'email_sent' => 'Benachrichtigen, wenn eine Rechnung <strong>versendet</strong> wurde',
  'email_viewed' => 'Benachrichtigen, wenn eine Rechnung <strong>betrachtet</strong> wurde',
  'email_paid' => 'Benachrichtigen, wenn eine Rechnung <strong>bezahlt</strong> wurde',
  'site_updates' => 'Seiten Updates',
  'custom_messages' => 'Benutzerdefinierte Nachrichten',
  'default_invoice_terms' => 'Standard Rechnungsbedingungen',
  'default_email_footer' => 'Standard E-Mail Signatur',
  'import_clients' => 'Importiere Kundendaten',
  'csv_file' => 'Wähle CSV Datei',
  'export_clients' => 'Exportiere Kundendaten',
  'select_file' => 'Bitte wähle eine Datei',
  'first_row_headers' => 'Benutze erste Zeile als Kopfzeile',
  'column' => 'Spalte',
  'sample' => 'Beispiel',
  'import_to' => 'Importieren nach',
  'client_will_create' => 'Kunde wird erstellt',
  'clients_will_create' => 'Kunden werden erstellt',
  'email_settings' => 'E-Mail-Einstellungen',
  'pdf_email_attachment' => 'PDF an E-Mails anhängen',

  // application messages
  'created_client' => 'Kunde erfolgreich angelegt',
  'created_clients' => ':count Kunden erfolgreich angelegt',
  'updated_settings' => 'Einstellungen erfolgreich aktualisiert',
  'removed_logo' => 'Logo erfolgreich entfernt',
  'sent_message' => 'Nachricht erfolgreich versendet',
  'invoice_error' => 'Bitte stelle sicher, dass ein Kunde ausgewählt und alle Fehler behoben wurden',
  'limit_clients' => 'Entschuldige, das überschreitet das Limit von :count Kunden',
  'payment_error' => 'Es ist ein Fehler während der Zahlung aufgetreten. Bitte versuche es später noch einmal.',
  'registration_required' => 'Bitte melde dich an um eine Rechnung zu versenden',
  'confirmation_required' => 'Bitte bestätige deine E-Mail-Adresse',

  'updated_client' => 'Kunde erfolgreich aktualisiert',
  'created_client' => 'Kunde erfolgreich erstellt',
  'archived_client' => 'Kunde erfolgreich archiviert',
  'archived_clients' => ':count Kunden erfolgreich archiviert',
  'deleted_client' => 'Kunde erfolgreich gelöscht',
  'deleted_clients' => ':count Kunden erfolgreich gelöscht',

  'updated_invoice' => 'Rechnung erfolgreich aktualisiert',
  'created_invoice' => 'Rechnung erfolgreich erstellt',
  'cloned_invoice' => 'Rechnung erfolgreich dupliziert',
  'emailed_invoice' => 'Rechnung erfolgreich versendet',
  'and_created_client' => 'und Kunde erstellt',
  'archived_invoice' => 'Rechnung erfolgreich archiviert',
  'archived_invoices' => ':count Rechnungen erfolgreich archiviert',
  'deleted_invoice' => 'Rechnung erfolgreich gelöscht',
  'deleted_invoices' => ':count Rechnungen erfolgreich gelöscht',

  'created_payment' => 'Zahlung erfolgreich erstellt',
  'archived_payment' => 'Zahlung erfolgreich archiviert',
  'archived_payments' => ':count Zahlungen erfolgreich archiviert',
  'deleted_payment' => 'Zahlung erfolgreich gelöscht',
  'deleted_payments' => ':count Zahlungen erfolgreich gelöscht',
  'applied_payment' => 'Zahlung erfolgreich angewandt',

  'created_credit' => 'Guthaben erfolgreich erstellt',
  'archived_credit' => 'Guthaben erfolgreich archiviert',
  'archived_credits' => ':count Guthaben erfolgreich archiviert',
  'deleted_credit' => 'Guthaben erfolgreich gelöscht',
  'deleted_credits' => ':count Guthaben erfolgreich gelöscht',

  // Emails
  'confirmation_subject' => 'InvoiceNinja Kontobestätigung',
  'confirmation_header' => 'Kontobestätigung',
  'confirmation_message' => 'Bitte klicke auf den folgenden Link um dein Konto zu bestätigen.',
  'invoice_subject' => 'Neue Rechnung :invoice von :account',
  'invoice_message' => 'Um Ihre Rechnung über :amount einzusehen, klicken Sie bitte auf den folgenden Link:',
  'payment_subject' => 'Zahlungseingang',
  'payment_message' => 'Vielen Dank für Ihre Zahlung von :amount.',
  'email_salutation' => 'Sehr geehrte/r :name,',
  'email_signature' => 'Mit freundlichen Grüßen,',
  'email_from' => 'Das InvoiceNinja Team',
  'user_email_footer' => 'Um deine E-Mail-Benachrichtigungen anzupassen besuche bitte '.SITE_URL.'/company/notifications',
  'invoice_link_message' => 'Um deine Kundenrechnung anzuschauen, klicke auf den folgenden Link:',
  'notification_invoice_paid_subject' => 'Die Rechnung :invoice wurde von :client bezahlt.',
  'notification_invoice_sent_subject' => 'Die Rechnung :invoice wurde an :client versandt.',
  'notification_invoice_viewed_subject' => 'Die Rechnung :invoice wurde von :client angeschaut.',
  'notification_invoice_paid' => 'Eine Zahlung von :amount wurde von :client bezüglich Rechnung :invoice getätigt.',
  'notification_invoice_sent' => 'Dem Kunden :client wurde die Rechnung :invoice über :amount versandt.',
  'notification_invoice_viewed' => 'Der Kunde :client hat sich die Rechnung :invoice über :amount angesehen.',
  'reset_password' => 'Du kannst dein Passwort zurücksetzen, indem du auf den folgenden Link klickst:',
  'reset_password_footer' => 'Wenn du das Zurücksetzen des Passworts nicht beantragt hast, benachrichtige bitte unseren Support: ' . CONTACT_EMAIL,

  
  // Payment page
  'secure_payment' => 'Sichere Zahlung',
  'card_number' => 'Kartennummer',
  'expiration_month' => 'Ablaufmonat',
  'expiration_year' => 'Ablaufjahr',
  'cvv' => 'Kartenprüfziffer',

  // Security alerts
  'security' => array(
    'too_many_attempts' => 'Zu viele Versuche. Bitte probiere es in ein paar Minuten erneut.',
    'wrong_credentials' => 'Falsche E-Mail-Adresse oder falsches Passwort.',
    'confirmation' => 'Dein Konto wurde bestätigt!',
    'wrong_confirmation' => 'Falscher Bestätigungscode.',
    'password_forgot' => 'Weitere Informationen um das Passwort zurückzusetzen wurden dir per E-Mail zugeschickt.',
    'password_reset' => 'Dein Passwort wurde erfolgreich geändert.',
    'wrong_password_reset' => 'Ungültiges Passwort. Versuche es erneut',
  ),

  // Pro Plan
  'pro_plan' => [
    'remove_logo' => ':link, um das InvoiceNinja-Logo zu entfernen, indem du dem Pro Plan beitrittst',
    'remove_logo_link' => 'Klicke hier',
  ],

  'logout' => 'Ausloggen',
  'sign_up_to_save' => 'Melde dich an, um deine Arbeit zu speichern',
  'agree_to_terms' =>'Ich akzeptiere die InvoiceNinja :terms',
  'terms_of_service' => 'Service-Bedingungen',
  'email_taken' => 'Diese E-Mail-Adresse ist bereits registriert',
  'working' => 'Wird bearbeitet',
  'success' => 'Erfolg',
  'success_message' => 'Du hast dich erfolgreich registriert. Bitte besuche den Link in deiner Bestätigungsmail um deine E-Mail-Adresse zu verifizieren.',
  'erase_data' => 'Diese Aktion wird deine Daten dauerhaft löschen.',
  'password' => 'Passwort',
  'close' => 'Schließen',

  'pro_plan_product' => 'Pro Plan',
  'pro_plan_description' => 'Jahresmitgliedschaft beim Invoice Ninja Pro Plan.',
  'pro_plan_success' => 'Danke, dass Sie Invoice Ninja\'s Pro gewählt haben!<p/>&nbsp;<br/>
                          <b>Nächste Schritte</b>Eine bezahlbare Rechnung wurde an die Mailadresse,
                          welche mit Ihrem Account verbunden ist, geschickt. Um alle der umfangreichen 
                          Pro Funktionen freizuschalten, folgen Sie bitte den Anweisungen in der Rechnung um ein Jahr
                          die Pro Funktionen zu nutzen.
                          Sie finden die Rechnung nicht? Sie benötigen weitere Hilfe? Wir helfen gerne
                          -- schicken Sie uns doch eine Email an contact@invoice-ninja.com',

  'unsaved_changes' => 'Es liegen ungespeicherte Änderungen vor',
  'custom_fields' => 'Benutzerdefinierte Felder',
  'company_fields' => 'Firmenfelder',
  'client_fields' => 'Kundenfelder',
  'field_label' => 'Feldbezeichnung',
  'field_value' => 'Feldwert',
  'edit' => 'Bearbeiten',
  'set_name' => 'Den Firmennamen setzen',
  'view_as_recipient' => 'Als Empfänger betrachten',

  // product management
  'product' => 'Produkt',
  'products' => 'Produkte',
  'fill_products' => 'Produkte automatisch ausfüllen',
  'fill_products_help' => 'Beim Auswählen eines Produktes werden automatisch <strong>Beschreibung und Kosten ausgefüllt</strong>',
  'update_products' => 'Produkte automatisch aktualisieren',
  'update_products_help' => 'Beim Aktualisieren einer Rechnung werden die <strong>Produkte automatisch aktualisiert</strong>',
  'create_product' => 'Produkt erstellen',
  'edit_product' => 'Produkt bearbeiten',
  'archive_product' => 'Produkt archivieren',
  'updated_product' => 'Produkt erfolgreich aktualisiert',
  'created_product' => 'Produkt erfolgreich erstellt',
  'archived_product' => 'Produkt erfolgreich archiviert',
  'product_library' => 'Produktbibliothek',
  'pro_plan_custom_fields' => ':link um durch eine Pro-Mitgliedschaft erweiterte Felder zu aktivieren',

  'advanced_settings' => 'Erweiterte Einstellungen',
  'pro_plan_advanced_settings' => ':link um durch eine Pro-Mitgliedschaft erweiterte Einstellungen zu aktivieren',
  'invoice_design' => 'Rechnungsvorlage',
  'specify_colors' => 'Farben wählen',
  'specify_colors_label' => 'Wähle die in der Rechnung verwendeten Farben',

  'chart_builder' => 'Diagrammersteller',
  'ninja_email_footer' => 'Nutze :site um Kunden Rechnungen zu stellen und online bezahlt zu werden, kostenlos!',
  'go_pro' => 'Go Pro',

  // Quotes
  'quote' => 'Angebot',
  'quotes' => 'Angebote',
  'quote_number' => 'Angebotsnummer',
  'quote_number_short' => 'Angebot #',
  'quote_date' => 'Angebotsdatum',
  'quote_total' => 'Gesamtanzahl Angebote',
  'your_quote' => 'Ihr Angebot',
  'total' => 'Gesamt',
  'clone' => 'Duplizieren',

  'new_quote' => 'Neues Angebot',
  'create_quote' => 'Angebot erstellen',
  'edit_quote' => 'Angebot bearbeiten',
  'archive_quote' => 'Angebot archivieren',
  'delete_quote' => 'Angebot löschen',
  'save_quote' => 'Angebot speichern',
  'email_quote' => 'Angebot per E-Mail senden',
  'clone_quote' => 'Angebot duplizieren',
  'convert_to_invoice' => 'In Rechnung umwandeln',
  'view_invoice' => 'Rechnung anschauen',
  'view_quote' => 'Angebot anschauen',
  'view_client' => 'Kunde anschauen',

  'updated_quote' => 'Angebot erfolgreich aktualisiert',
  'created_quote' => 'Angebot erfolgreich erstellt',
  'cloned_quote' => 'Angebot erfolgreich dupliziert',
  'emailed_quote' => 'Angebot erfolgreich versendet',
  'archived_quote' => 'Angebot erfolgreich archiviert',
  'archived_quotes' => ':count Angebote erfolgreich archiviert',
  'deleted_quote' => 'Angebot erfolgreich gelöscht',
  'deleted_quotes' => ':count Angebote erfolgreich gelöscht',
  'converted_to_invoice' => 'Angebot erfolgreich in Rechnung umgewandelt',

  'quote_subject' => 'Neues Angebot von :account',
  'quote_message' => 'Klicken Sie auf den folgenden Link um das Angebot über :amount anzuschauen.',
  'quote_link_message' => 'Klicke auf den folgenden Link um das Angebot deines Kunden anzuschauen:',
  'notification_quote_sent_subject' => 'Angebot :invoice wurde an :client versendet',
  'notification_quote_viewed_subject' => 'Angebot :invoice wurde von :client angeschaut',
  'notification_quote_sent' => 'Der folgende Kunde :client erhielt das Angebot :invoice über :amount.',
  'notification_quote_viewed' => 'Der folgende Kunde :client hat sich das Angebot :client über :amount angesehen.',

  'session_expired' => 'Deine Sitzung ist abgelaufen.',

  'invoice_fields' => 'Rechnungsfelder',
  'invoice_options' => 'Rechnungsoptionen',
  'hide_quantity' => 'Menge verbergen',
  'hide_quantity_help' => 'Wenn deine Menge immer 1 beträgt, kannst du deine Rechnung einfach halten, indem du dieses Feld entfernst.',
  'hide_paid_to_date' => '"Bereits gezahlt" ausblenden',
  'hide_paid_to_date_help' => '"Bereits gezahlt" nur anzeigen, wenn eine Zahlung eingegangen ist.',

  'charge_taxes' => 'Steuern erheben',
  'user_management' => 'Benutzerverwaltung',
  'add_user' => 'Benutzer hinzufügen',
  'send_invite' => 'Einladung senden',
  'sent_invite' => 'Einladung erfolgreich gesendet',
  'updated_user' => 'Benutzer erfolgreich aktualisiert',
  'invitation_message' => 'Du wurdest von :invitor eingeladen.',
  'register_to_add_user' => 'Bitte registrieren, um einen Benutzer hinzuzufügen',
  'user_state' => 'Status',
  'edit_user' => 'Benutzer bearbeiten',
  'delete_user' => 'Benutzer löschen',
  'active' => 'Aktiv',
  'pending' => 'Ausstehend',
  'deleted_user' => 'Benutzer erfolgreich gelöscht',
  'limit_users' => 'Entschuldige, das würde das Limit von ' . MAX_NUM_USERS . ' Benutzern überschreiten',

  'confirm_email_invoice' => 'Bist du sicher, dass du diese Rechnung per E-Mail versenden möchtest?',
  'confirm_email_quote' => 'Bist du sicher, dass du dieses Angebot per E-Mail versenden möchtest',
  'confirm_recurring_email_invoice' => 'Wiederkehrende Rechnung ist aktiv. Bis du sicher, dass du diese Rechnung weiterhin als E-Mail verschicken möchtest?',

  'cancel_account' => 'Konto Kündigen',
  'cancel_account_message' => 'Warnung: Alle Daten werden unwiderruflich und vollständig gelöscht, es gibt kein zurück.',
  'go_back' => 'Zurück',

  'data_visualizations' => 'Datenvisualisierungen',
  'sample_data' => 'Beispieldaten werden angezeigt',
  'hide' => 'Verbergen',
  'new_version_available' => 'Eine neue Version von :releases_link ist verfügbar. Du benutzt v:user_version, die aktuelle ist v:latest_version',

  'invoice_settings' => 'Rechnungseinstellungen',
  'invoice_number_prefix' => 'Präfix für Rechnungsnummer',
  'invoice_number_counter' => 'Zähler für Rechnungsnummer',
  'quote_number_prefix' => 'Präfix für Angebotsnummer',
  'quote_number_counter' => 'Zähler für Angebotsnummer',
  'share_invoice_counter' => 'Zähler der Rechnung teilen',
  'invoice_issued_to' => 'Rechnung ausgestellt für',
  'invalid_counter' => 'Bitte setze, um Probleme zu vermeiden, entweder ein Rechnungs- oder Angebotspräfix.',
  'mark_sent' => 'Als gesendet markieren',

  'gateway_help_1' => ':link um sich bei Authorize.net anzumelden.',
  'gateway_help_2' => ':link um sich bei Authorize.net anzumelden.',
  'gateway_help_17' => ':link um deine PayPal API-Signatur zu erhalten.',
  'gateway_help_23' => 'Anmerkung: benutze deinen secret API key, nicht deinen publishable API key.',
  'gateway_help_27' => ':link um sich bei TwoCheckout anzumelden.',

  'more_designs' => 'Weitere Vorlagen',
  'more_designs_title' => 'Zusätzliche Rechnungsvorlagen',
  'more_designs_cloud_header' => 'Werde Pro-Mitglied für zusätzliche Rechnungsvorlagen',
  'more_designs_cloud_text' => '',
  'more_designs_self_host_header' => 'Erhalte 6 zusätzliche Rechnungsvorlagen für nur $'.INVOICE_DESIGNS_PRICE,
  'more_designs_self_host_text' => '',
  'buy' => 'Kaufen',
  'bought_designs' => 'Die zusätzliche Rechnungsvorlagen wurden erfolgreich hinzugefügt',
  'sent' => 'gesendet',
  
  'vat_number' => 'USt-IdNr.',
  'timesheets' => 'Zeittabellen',

  'payment_title' => 'Geben Sie Ihre Rechnungsadresse und Ihre Kreditkarteninformationen ein',
  'payment_cvv' => '*Dies ist die 3-4-stellige Nummer auf der Rückseite Ihrer Kreditkarte',
  'payment_footer1' => '*Die Rechnungsadresse muss mit der Adresse der Kreditkarte übereinstimmen.',
  'payment_footer2' => '*Bitte drücken Sie nur einmal auf "Jetzt bezahlen" - die  Verarbeitung der Transaktion kann bis zu einer Minute dauern.',

  'id_number' => 'ID-Nummer',
  'white_label_link' => 'Branding entfernen',
  'white_label_text' => 'Um das Invoice Ninja Logo auf der Kundenseite zu entfernen, kaufe bitte eine Lizenz für $'.WHITE_LABEL_PRICE,
  'white_label_header' => 'Branding entfernen',
  'bought_white_label' => 'Branding-freie Lizenz erfolgreich aktiviert',
  'white_labeled' => 'Branding entfernt',

  'restore' => 'Wiederherstellen',
  'restore_invoice' => 'Rechnung wiederherstellen',
  'restore_quote' => 'Angebot wiederherstellen',
  'restore_client' => 'Kunde wiederherstellen',
  'restore_credit' => 'Guthaben wiederherstellen',
  'restore_payment' => 'Zahlung wiederherstellen',

  'restored_invoice' => 'Rechnung erfolgreich wiederhergestellt',
  'restored_quote' => 'Angebot erfolgreich wiederhergestellt',
  'restored_client' => 'Kunde erfolgreich wiederhergestellt',
  'restored_payment' => 'Zahlung erfolgreich wiederhergestellt',
  'restored_credit' => 'Guthaben erfolgreich wiederhergestellt',

  'reason_for_canceling' => 'Hilf uns, unser Angebot zu verbessern, indem du uns mitteilst, weswegen du dich dazu entschieden hast, unseren Service nicht länger zu nutzen.',
  'discount_percent' => 'Prozent',
  'discount_amount' => 'Wert',

  'invoice_history' => 'Rechnungshistorie',
  'quote_history' => 'Angebotshistorie',
  'current_version' => 'Aktuelle Version',
  'select_versiony' => 'Version auswählen',
  'view_history' => 'Historie anzeigen',

  'edit_payment' => 'Zahlung bearbeiten',
  'updated_payment' => 'Zahlung erfolgreich aktualisiert',
  'deleted' => 'Gelöscht',
  'restore_user' => 'Benutzer wiederherstellen',
  'restored_user' => 'Benutzer erfolgreich wiederhergestellt',
  'show_deleted_users' => 'Zeige gelöschte Benutzer',
  'email_templates' => 'E-Mail Vorlagen',
  'invoice_email' => 'Rechnungsmail',
  'payment_email' => 'Zahlungsmail',
  'quote_email' => 'Angebotsmail',
  'reset_all' => 'Alle zurücksetzen',
  'approve' => 'Zustimmen',

  'token_billing_type_id' => 'Token Billing',
  'token_billing_help' => 'Ermöglicht Ihnen, Kreditkarten mit Ihrem Gateway zu speichern und diese zu einem späteren Zeitpunkt zu belasten.',
  'token_billing_1' => 'Deaktiviert',
  'token_billing_2' => 'Opt-in - Kontrollkästchen wird angezeigt ist aber nicht ausgewählt',
  'token_billing_3' => 'Opt-out - Kontrollkästchen wird angezeigt und ist ausgewählt',
  'token_billing_4' => 'Immer',
  'token_billing_checkbox' => 'Kreditkarteninformationen speichern',
  'view_in_stripe' => 'Auf Stripe anzeigen',
  'use_card_on_file' => 'Verwende gespeicherte Kreditkarte',
  'edit_payment_details' => 'Zahlungsdetails bearbeiten',
  'token_billing' => 'Kreditkarte merken',
  'token_billing_secure' => 'Die Daten werden sicher von :stripe_link gespeichert.',

  'support' => 'Support',
  'contact_information' => 'Kontakt-Informationen',
  '256_encryption' => '256-Bit-Verschlüsselung',
  'amount_due' => 'Fälliger Betrag',
  'billing_address' => 'Rechnungsadresse',
  'billing_method' => 'Abrechnungsmethode',
  'order_overview' => 'Bestellübersicht',
  'match_address' => '*Die Rechnungsadresse muss mit der Adresse der Kreditkarte übereinstimmen.',
  'click_once' => '*Bitte drücken Sie nur einmal auf "Jetzt bezahlen" - die  Verarbeitung der Transaktion kann bis zu einer Minute dauern.',

  'default_invoice_footer' => 'Standard-Fußzeile festlegen',
  'invoice_footer' => 'Fußzeile',
  'save_as_default_footer' => 'Als Standard-Fußzeile speichern',

  'token_management' => 'Token Verwaltung',
  'tokens' => 'Token',
  'add_token' => 'Token hinzufügen',
  'show_deleted_tokens' => 'Zeige gelöschte Token',
  'deleted_token' => 'Token erfolgreich gelöscht',
  'created_token' => 'Token erfolgreich erstellt',
  'updated_token' => 'Token erfolgreich aktualisiert',
  'edit_token' => 'Token bearbeiten',
  'delete_token' => 'Token löschen',
  'token' => 'Token',

  'add_gateway' => 'Zahlungsanbieter hinzufügen',
  'delete_gateway' => 'Zahlungsanbieter löschen',
  'edit_gateway' => 'Zahlungsanbieter bearbeiten',
  'updated_gateway' => 'Zahlungsanbieter aktualisiert',
  'created_gateway' => 'Zahlungsanbieter erfolgreich hinzugefügt',
  'deleted_gateway' => 'Zahlungsanbieter erfolgreich gelöscht',
  'pay_with_paypal' => 'PayPal',
  'pay_with_card' => 'Kreditkarte',

  'change_password' => 'Passwort ändern',
  'current_password' => 'Aktuelles Passwort',
  'new_password' => 'Neues Passwort',
  'confirm_password' => 'Passwort bestätigen',
  'password_error_incorrect' => 'Das aktuelle Passwort ist nicht korrekt.',
  'password_error_invalid' => 'Das neue Passwort ist ungültig.',
  'updated_password' => 'Passwort erfolgreich aktualisiert',

  'api_tokens' => 'API Token',
  'users_and_tokens' => 'Benutzer & Token',
  'account_login' => 'Konto Login',
  'recover_password' => 'Passwort wiederherstellen',
  'forgot_password' => 'Passwort vergessen?',
  'email_address' => 'E-Mail-Adresse',
  'lets_go' => "Auf geht's",
  'password_recovery' => 'Passwort-Wiederherstellung',
  'send_email' => 'E-Mail verschicken',
  'set_password' => 'Passwort festlegen',
  'converted' => 'Umgewandelt',

  'email_approved' => 'Per E-Mail benachrichtigen, wenn ein Angebot  <b>angenommen</b> wurde',
  'notification_quote_approved_subject' => 'Angebot :invoice wurde von :client angenommen.',
  'notification_quote_approved' => 'Der folgende Kunde :client nahm das Angebot :invoice über :amount an.',
  'resend_confirmation' => 'Bestätigungsmail erneut senden',
  'confirmation_resent' => 'Bestätigungsemail wurde erneut gesendet',

  'gateway_help_42' => ':link zum Registrieren auf BitPay.<br/>Hinweis: benutze einen Legacy API Key, keinen API token.',
  'payment_type_credit_card' => 'Kreditkarte',
  'payment_type_paypal' => 'PayPal',
  'payment_type_bitcoin' => 'Bitcoin',
  'knowledge_base' => 'FAQ',
  'partial' => 'Partiell',
  'partial_remaining' => ':partial von :balance',

  'more_fields' => 'Weitere Felder',
  'less_fields' => 'Weniger Felder',
  'client_name' => 'Kundenname',
  'pdf_settings' => 'PDF Einstellungen',
  'product_settings' => 'Produkt Einstellungen',
  'auto_wrap' => 'Automatischer Zeilenumbruch',
  'duplicate_post' => 'Achtung: Die vorherige Seite wurde zweimal abgeschickt. Das zweite Abschicken wurde ignoriert.',
  'view_documentation' => 'Dokumentation anzeigen',
  'app_title' => 'Kostenlose Online Open-Source Rechnungsausstellung',
  'app_description' => 'InvoiceNinja ist eine kostenlose, quelloffene Lösung für die Rechnungsstellung und Abrechnung von Kunden. Mit Invoice Ninja kannst du einfach schöne Rechnungen erstellen und verschicken, von jedem Gerät mit Internetzugang. Deine Kunden können die Rechnungen drucken, als PDF Datei herunterladen und sogar online im System bezahlen.',

  'rows' => 'Zeilen',
  'www' => 'www',
  'logo' => 'Logo',
  'subdomain' => 'Subdomain',
  'provide_name_or_email' => 'Bitte geben Sie einen Kontaktnamen oder eine E-Mail-Adresse an',
  'charts_and_reports' => 'Diagramme & Berichte',
  'chart' => 'Diagramm',
  'report' => 'Bericht',
  'group_by' => 'Gruppieren nach',
  'paid' => 'Bezahlt',
  'enable_report' => 'Bericht',
  'enable_chart' => 'Diagramm',
  'totals' => 'Summe',
  'run' => 'Ausführen',
  'export' => 'Exportieren',
  'documentation' => 'Dokumentation',
  'zapier' => 'Zapier <sup>Beta</sup>',
  'recurring' => 'Wiederkehrend',
  'last_invoice_sent' => 'Letzte Rechnung verschickt am :date',

  'processed_updates' => 'Update erfolgreich abgeschlossen',
  'tasks' => 'Zeiterfassung',
  'new_task' => 'Neue Aufgabe',
  'start_time' => 'Startzeit',
  'created_task' => 'Aufgabe erfolgreich erstellt',
  'updated_task' => 'Aufgabe erfolgreich aktualisiert',
  'edit_task' => 'Aufgabe bearbeiten',
  'archive_task' => 'Aufgabe archivieren',
  'restore_task' => 'Aufgabe wiederherstellen',
  'delete_task' => 'Aufgabe löschen',
  'stop_task' => 'Aufgabe Anhalten',
  'time' => 'Zeit',
  'start' => 'Starten',
  'stop' => 'Anhalten',
  'now' => 'Jetzt',
  'timer' => 'Zeitmesser',
  'manual' => 'Manuell',
  'date_and_time' => 'Datum & Uhrzeit',
  'second' => 'Sekunde',
  'seconds' => 'Sekunden',
  'minute' => 'Minute',
  'minutes' => 'Minuten',
  'hour' => 'Stunde',
  'hours' => 'Stunden',
  'task_details' => 'Aufgaben-Details',
  'duration' => 'Dauer',
  'end_time' => 'Endzeit',
  'end' => 'Ende',
  'invoiced' => 'In Rechnung gestellt',
  'logged' => 'Protokolliert',
  'running' => 'Läuft',
  'task_error_multiple_clients' => 'Die Aufgaben können nicht zu verschiedenen Kunden gehören',
  'task_error_running' => 'Bitte beenden Sie laufende Aufgaben zuerst',
  'task_error_invoiced' => 'Aufgaben wurden bereits in Rechnung gestellt',
  'restored_task' => 'Aufgabe erfolgreich wiederhergestellt',
  'archived_task' => 'Aufgabe erfolgreich archiviert',
  'archived_tasks' => ':count Aufgaben wurden erfolgreich archiviert',
  'deleted_task' => 'Aufgabe erfolgreich gelöscht',
  'deleted_tasks' => ':count Aufgaben wurden erfolgreich gelöscht',
  'create_task' => 'Aufgabe erstellen',
  'stopped_task' => 'Aufgabe erfolgreich angehalten',
  'invoice_task' => 'Aufgabe in Rechnung stellen',
  'invoice_labels' => 'Rechnung Spaltenüberschriften',
  'prefix' => 'Präfix',
  'counter' => 'Zähler',

  'payment_type_dwolla' => 'Dwolla',
  'gateway_help_43' => ':link zum Registrieren auf Dwolla.',
  'partial_value' => 'Muss größer als Null und kleiner als der Gesamtbetrag sein',
  'more_actions' => 'Weitere Aktionen',

  'pro_plan_title' => 'NINJA PRO',
  'pro_plan_call_to_action' => 'Jetzt Upgraden!',
  'pro_plan_feature1' => 'Unlimitierte Anzahl Kunden erstellen',
  'pro_plan_feature2' => 'Zugriff auf 10 schöne Rechnungsdesigns',
  'pro_plan_feature3' => 'Benutzerdefinierte URLs - "DeineFirma.InvoiceNinja.com"',
  'pro_plan_feature4' => '"Erstellt durch Invoice Ninja" entfernen',
  'pro_plan_feature5' => 'Multi-Benutzer Zugriff & Aktivitätstracking',
  'pro_plan_feature6' => 'Angebote & pro-forma Rechnungen erstellen',
  'pro_plan_feature7' => 'Rechungstitelfelder und Nummerierung anpassen',
  'pro_plan_feature8' => 'PDFs an E-Mails zu Kunden anhängen',

  'resume' => 'Fortfahren',
  'break_duration' => 'Pause',
  'edit_details' => 'Details bearbeiten',
  'work' => 'Arbeiten',
  'timezone_unset' => 'Bitte :link um deine Zeitzone zu setzen',
  'click_here' => 'hier klicken',

  'email_receipt' => 'Zahlungsbestätigung an Kunden per E-Mail senden',
  'created_payment_emailed_client' => 'Zahlung erfolgreich erstellt und Kunde per E-Mail benachrichtigt',
  'add_company' => 'Konto hinzufügen',
  'untitled' => 'Unbenannt',
  'new_company' => 'Neues Konto',
  'associated_accounts' => 'Konten erfolgreich verlinkt',
  'unlinked_account' => 'Konten erfolgreich getrennt',
  'login' => 'Login',
  'or' => 'oder',

  'email_error' => 'Es gab ein Problem beim Senden dieses E-Mails.',
  'confirm_recurring_timing' => 'Beachten Sie: E-Mails werden zu Beginn der Stunde gesendet.',
  'old_browser' => 'Bitte verwenden Sie einen <a href="'.OUTDATE_BROWSER_URL.'" target="_blank">neueren Browser</a>',
  'payment_terms_help' => 'Setzt das Standardfälligkeitsdatum',
  'unlink_account' => 'Konten Trennen',
  'unlink' => 'Trennen',
  'show_address' => 'Adresse Anzeigen',
  'show_address_help' => 'Verlange von Kunden ihre Rechnungsadresse anzugeben',
  'update_address' => 'Adresse Aktualisieren',
  'update_address_help' => 'Kundenadresse mit den gemachten Angaben aktualisieren',
  'times' => 'Zeiten',
  'set_now' => 'Auf Jetzt setzen',
  'dark_mode' => 'Dunkler Modus',
  'dark_mode_help' => 'Weißer Text auf schwarzem Hintergrund anzeigen',
  'add_to_invoice' => 'Zur Rechnung :invoice hinzufügen',
  'create_new_invoice' => 'Neue Rechnung erstellen',
  'task_errors' => 'Bitte korrigieren Sie alle überlappenden Zeiten',
  'from' => 'Von',
  'to' => 'An',
  'font_size' => 'Schriftgröße',
  'primary_color' => 'Primäre Farbe',
  'secondary_color' => 'Sekundäre Farbe',
  'customize_design' => 'Design Anpassen',

  'content' => 'Inhalt',
  'styles' => 'Stile',
  'defaults' => 'Standards',
  'margins' => 'Außenabstände',
  'header' => 'Kopfzeile',
  'footer' => 'Fußzeile',
  'custom' => 'Benutzerdefiniert',
  'invoice_to' => 'Rechnung an',
  'invoice_no' => 'Rechnung Nr.',
  'recent_payments' => 'Kürzliche Zahlungen',
  'outstanding' => 'Ausstehend',
  'manage_companies' => 'Unternehmen verwalten',
  'total_revenue' => 'Gesamteinnahmen',

  'current_user' => 'Aktueller Benutzer',
  'new_recurring_invoice' => 'Neue wiederkehrende Rechnung',
  'recurring_invoice' => 'Wiederkehrende Rechnung',
  'recurring_too_soon' => 'Es ist zu früh, um die nächste wiederkehrende Rechnung zu erstellen',
  'created_by_invoice' => 'Erstellt durch :invoice',
  'primary_user' => 'Primärer Benutzer',
  'help' => 'Hilfe',
  'customize_help' => '<p>We use <a href="http://pdfmake.org/" target="_blank">pdfmake</a> to define the invoice designs declaratively. The pdfmake <a href="http://pdfmake.org/playground.html" target="_blank">playground</a> provide\'s a great way to see the library in action.</p>
                        <p>You can access any invoice field by adding <code>Value</code> to the end. For example <code>$invoiceNumberValue</code> displays the invoice number.</p>
                        <p>To access a child property using dot notation. For example to show the client name you could use <code>$client.nameValue</code>.</p>
                        <p>If you need help figuring something out post a question to our <a href="https://www.invoiceninja.com/forums/forum/support/" target="_blank">support forum</a>.</p>',

  'invoice_due_date' => 'Due Date',
  'quote_due_date' => 'Valid Until',
  'valid_until' => 'Valid Until',
  'reset_terms' => 'Reset terms',
  'reset_footer' => 'Reset footer',
  'invoices_sent' => ':count invoice sent|:count invoices sent',
  'status_draft' => 'Entwurf',
  'status_sent' => 'Versandt',
  'status_viewed' => 'Angesehen',
  'status_partial' => 'Teilweise',
  'status_paid' => 'Bezahlt',
  'show_line_item_tax' => '<b>Steuern für Belegpositionen</b> in der jeweiligen Zeile anzeigen',

  'iframe_url' => 'Website',
  'iframe_url_help1' => 'Kopiere den folgenden Code in eine Seite auf deiner Website.',
  'iframe_url_help2' => 'You can test the feature by clicking \'View as recipient\' for an invoice.',

  'auto_bill' => 'Auto Bill',
  'military_time' => '24-Stunden-Zeit',
  'last_sent' => 'Zuletzt gesendet',

  'reminder_emails' => 'Erinnerungs-Emails',
  'templates_and_reminders' => 'Vorlagen & Erinnerungen',
  'subject' => 'Betreff',
  'body' => 'Inhalt',
  'first_reminder' => 'Erste Erinnerung',
  'second_reminder' => 'Zweite Erinnerung',
  'third_reminder' => 'Dritte Erinnerung',
  'num_days_reminder' => 'Tage nach Fälligkeit',
  'reminder_subject' => 'Erinnerung: Rechnung :invoice von :account',
  'reset' => 'Zurücksetzen',
  'invoice_not_found' => 'Die gewünschte Rechnung ist nicht verfügbar',

  'referral_program' => 'Referral Program',
  'referral_code' => 'Referral Code',
  'last_sent_on' => 'Zuletzt versandt am :date',

  'page_expire' => 'Diese Seite wird bald ablaufen, :click_here um weiter zu arbeiten',


);
