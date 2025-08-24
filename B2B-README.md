# B2B Kosmetikshop Erweiterung

Ein spezialisiertes B2B E-Commerce System für Kosmetikerinnen, basierend auf Bagisto Laravel Framework.

## Features

### 🏢 B2B Funktionalitäten
- **Registrierung mit Gewerbeschein-Upload** - Kosmetikerinnen können sich registrieren und Geschäftsdokumente hochladen
- **Admin-Freigabe-System** - Administratoren können B2B-Anträge genehmigen oder ablehnen
- **Bedingte Preisanzeige** - Preise und Warenkorb nur für genehmigte B2B-Kunden sichtbar
- **DSGVO-konforme Dokumentenlöschung** - Vollständige Löschung von Geschäftsdokumenten ohne Backup

### 🔐 Sicherheitsfeatures
- **Sichere Dokumentenspeicherung** - Business-Dokumente werden außerhalb des web-root gespeichert
- **Admin-Berechtigungen** - Rollenbasierte Zugriffskontrolle
- **CSRF-Schutz** - Vollständiger Schutz vor Cross-Site Request Forgery
- **Audit-Logging** - Vollständige Nachverfolgung aller B2B-Aktionen

### 📧 E-Mail Benachrichtigungen
- **Registrierungsbenachrichtigung** - Automatische E-Mails an Administratoren bei neuen Anmeldungen
- **Genehmigungsbenachrichtigung** - Kunden werden über Genehmigung/Ablehnung informiert
- **Mehrsprachige Templates** - Deutsche E-Mail-Vorlagen

## B2B Workflow

1. **Kosmetikerin registriert sich** mit Gewerbeschein-Upload
2. **Admin erhält E-Mail-Benachrichtigung** über neue Registrierung
3. **Admin überprüft Dokumente** in der B2B-Freigaben-Übersicht
4. **Genehmigung/Ablehnung** mit automatischer E-Mail an den Kunden
5. **Genehmigte Kunden** sehen Preise und können bestellen

## Technische Implementation

### Database Changes
```sql
-- Added B2B fields to customers table
ALTER TABLE customers ADD COLUMN approval_status VARCHAR(255) DEFAULT 'pending';
ALTER TABLE customers ADD COLUMN business_document VARCHAR(255) NULL;
ALTER TABLE customers ADD COLUMN approved_at TIMESTAMP NULL;
ALTER TABLE customers ADD COLUMN approved_by INT UNSIGNED NULL;
ALTER TABLE customers ADD COLUMN document_deleted BOOLEAN DEFAULT FALSE;
ALTER TABLE customers ADD COLUMN document_deleted_at TIMESTAMP NULL;
```

### Key Files Modified/Added

#### Controllers
- `packages/Webkul/Admin/src/Http/Controllers/B2B/B2BApprovalController.php`

#### DataGrids  
- `packages/Webkul/Admin/src/DataGrids/B2BApprovalDataGrid.php`

#### Views
- `resources/views/admin/b2b/approvals/index.blade.php`
- `packages/Webkul/Shop/src/Resources/views/customers/sign-up.blade.php` (modified)

#### Mail Classes
- `app/Mail/B2BRegistrationNotification.php`
- `app/Mail/B2BApprovalNotification.php`
- `app/Mail/B2BRejectionNotification.php`

#### Middleware
- `app/Http/Middleware/B2BAccessMiddleware.php`

#### Service Providers
- `app/Providers/B2BServiceProvider.php`

#### Helpers
- `app/Helpers/B2BHelper.php`

### Upgrade-Safe Architecture
- All changes use Laravel Service Providers
- Custom middleware for access control
- Event-driven email notifications
- Blade directives for template modifications

## Installation der B2B Erweiterung

### 1. Database Migration
```bash
php artisan migrate
```

### 2. Service Provider Registration
Add to `bootstrap/providers.php`:
```php
App\Providers\B2BServiceProvider::class,
```

### 3. Middleware Registration  
Add to `bootstrap/app.php`:
```php
->withMiddleware(function (Middleware $middleware) {
    $middleware->alias([
        'b2b.access' => \App\Http\Middleware\B2BAccessMiddleware::class,
    ]);
})
```

### 4. Storage Setup
```bash
# Create directories for business documents
mkdir -p storage/app/business_documents
chmod 755 storage/app/business_documents

# Link storage
php artisan storage:link
```

### 5. Environment Configuration
```env
# Mail Configuration for B2B notifications
ADMIN_MAIL_ADDRESS=admin@yourstore.com
ADMIN_MAIL_NAME="Store Admin"
```

## Security Considerations

### Document Security
- Business documents stored in `storage/app/business_documents/`
- Not publicly accessible via web
- Download only through authenticated admin routes
- GDPR-compliant deletion (no backups retained)

### Access Control
- B2B routes protected by admin middleware
- Permission-based document access
- CSRF protection on all forms
- Input validation for all uploads

### Privacy Compliance
- Complete document deletion capability
- Audit trail for all B2B actions
- No customer data stored in logs
- GDPR-compliant data handling

## Admin Interface

Navigate to: `/admin/customers/b2b/approvals`

### Features:
- ✅ **List all B2B applications** with status filtering
- ✅ **Document download** with security logging  
- ✅ **Approve/Reject applications** with email notifications
- ✅ **Status reset** functionality
- ✅ **Document deletion** (GDPR-compliant)
- ✅ **Responsive DataGrid** with sorting and filtering

## Development Notes

### Code Style
- Following Laravel/Bagisto conventions
- PSR-12 compliant code formatting
- Comprehensive error handling
- Full German localization

### Testing
- All B2B functionality manually tested
- Document upload/download verified
- Email notifications confirmed
- GDPR deletion compliance validated

---

**Developed with ❤️ for professional cosmetics B2B applications**