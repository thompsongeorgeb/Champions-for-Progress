# Plugin Configuration Guide

Detailed configuration for each plugin used in Champions for Progress.

## Table of Contents
1. [Paid Memberships Pro](#paid-memberships-pro)
2. [GeoDirectory](#geodirectory)
3. [WP Job Manager](#wp-job-manager)
4. [Security & Optimization](#security--optimization)

---

## Paid Memberships Pro

### Overview
Handles all membership and payment functionality for business listings.

### Configuration Steps

#### 1. License Activation
1. Purchase PMPro Plus from [paidmembershipspro.com](https://www.paidmembershipspro.com)
2. Go to **Memberships → Settings → Licenses**
3. Enter license key
4. Click **Activate**

#### 2. Payment Gateway Settings
Go to **Memberships → Settings → Payment Gateway & SSL**

**Stripe Configuration:**
```
Gateway: Stripe
Currency: USD
Tax Rate: 0 (or your local rate)
Stripe Mode: Test (then switch to Live)
Publishable Key: pk_live_xxxxx
Secret Key: sk_live_xxxxx
```

**PayPal Configuration:**
```
Gateway: PayPal Express
PayPal Email: payments@championsforprogress.org
Currency: USD
```

#### 3. Membership Levels

**Basic Business Listing:**
```
Level Name: Basic Business Listing
Description: Essential business profile with contact information
Initial Payment: $29.00
Recurring: Yes
Billing Amount: $29.00
Cycle: 1 Month(s)
Billing Limit: 0 (unlimited)
Trial: No
Custom Level: No
Disable New Signups: No
```

**Premium Business Listing:**
```
Level Name: Premium Business Listing
Description: Featured listing with photos and social media
Initial Payment: $49.00
Recurring: Yes
Billing Amount: $49.00
Cycle: 1 Month(s)
Additional features via level settings page
```

**Platinum Business Listing:**
```
Level Name: Platinum Business Listing
Description: Premium features with job posting credits
Initial Payment: $99.00
Recurring: Yes
Billing Amount: $99.00
Cycle: 1 Month(s)
```

#### 4. Email Templates

**Welcome Email:**
```
Subject: Welcome to Champions for Progress!
Body:
Dear [user_display_name],

Welcome to Champions for Progress! Your [membership_level_name] membership is now active.

You can now:
- Create and manage your business listing
- Access our business directory
- Connect with other Christian businesses
- Apply for jobs in our job board

Manage your membership: [membership_account_url]

Blessings,
Champions for Progress Team

[sitename] | [siteurl]
```

**Payment Confirmation:**
```
Subject: Payment Received - Thank You!
Body:
Dear [user_display_name],

Thank you! We've received your payment of [billing_amount] for [membership_level_name].

Payment Date: [billing_date]
Next Payment: [billing_next_date]

View invoice: [account_invoices_url]

Questions? Contact us at support@championsforprogress.org

Blessings,
Champions for Progress Team
```

#### 5. Pages Configuration

Required pages (auto-created by PMPro):
- Membership Checkout (`/membership-checkout/`)
- Membership Account (`/membership-account/`)
- Membership Levels (`/membership-levels/`)
- Membership Billing (`/membership-billing/`)
- Membership Invoice (`/membership-invoice/`)
- Membership Cancel (`/membership-cancel/`)
- Membership Confirmation (`/membership-confirmation/`)

Customize these pages:
1. Go to **Pages**
2. Edit each membership page
3. Add relevant content and styling
4. Add church-related imagery

#### 6. Advanced Settings

**Restrict Content by Membership:**
1. Edit any page/post
2. Scroll to "Require Membership" metabox
3. Select which levels can view

**Membership Levels Page:**
- Customize at **Memberships → Settings → Advanced**
- Add custom pricing table
- Add "Most Popular" badges

---

## GeoDirectory

### Overview
Powers the business directory with advanced search and filtering.

### Configuration Steps

#### 1. General Settings
Go to **GeoDirectory → Settings → General**

```
Default Location: Inglewood, California
Default Country: United States
Search Radius: 25 miles
Distance Unit: Miles
Map Provider: Google Maps
```

#### 2. Google Maps Setup

**Get API Key:**
1. Go to [Google Cloud Console](https://console.cloud.google.com)
2. Create project: "Champions for Progress"
3. Enable APIs:
   - Maps JavaScript API
   - Places API
   - Geocoding API
4. Create credentials → API Key
5. Restrict key to your domain

**Configure in WordPress:**
```
GeoDirectory → Settings → Google Maps
API Key: [your-key]
Default Location: 33.9616° N, 118.3531° W (Inglewood)
Default Zoom: 12
Map Style: Standard (or custom)
```

#### 3. Post Types

**Places (Businesses):**
```
Post Type: Places (gd_place)
Labels:
  - Singular: Business
  - Plural: Businesses
  - Add New: Add Business
Enable: Yes
Has Archive: Yes
Archive Slug: /businesses/
Single Slug: /business/[postname]/
```

#### 4. Categories

Create hierarchy:
```
Professional Services
├── Legal Services
├── Accounting & Finance
├── Consulting
└── Marketing & Design

Healthcare
├── Medical Practices
├── Dental Services
├── Mental Health
└── Alternative Medicine

Ministry & Church Services
├── Churches
├── Christian Counseling
├── Ministry Resources
└── Faith-Based Organizations

(etc.)
```

#### 5. Custom Fields

**Standard Fields:**
- Business Name (Text, Required)
- Description (Textarea, Required)
- Phone (Phone, Required)
- Email (Email, Required)
- Website (URL)
- Address (Address, Required for LA businesses)
- Category (Taxonomy, Required)

**Custom Fields to Add:**
```
Field Name: Business Hours
Type: Text
Description: e.g., Mon-Fri 9AM-5PM
Required: No

Field Name: Year Established
Type: Number
Description: What year was your business founded?
Required: No

Field Name: Services Offered
Type: Multiselect
Options: (varies by category)
Required: No

Field Name: Instagram
Type: URL
Description: Instagram profile URL
Required: No

Field Name: Facebook
Type: URL
Description: Facebook page URL
Required: No

Field Name: LinkedIn
Type: URL
Description: LinkedIn company page
Required: No

Field Name: Logo
Type: File Upload
Description: Upload your business logo
Required: No
Max Size: 2MB

Field Name: Gallery
Type: File Upload (Multiple)
Description: Upload business photos
Required: No
Max Files: 10 (Basic), 20 (Premium), Unlimited (Platinum)
```

#### 6. PMPro Integration

**Membership Level Restrictions:**
```
Basic Level:
- Can add: 1 listing
- Categories: 1
- Photos: 3
- Featured: No
- Video: No

Premium Level:
- Can add: 1 listing
- Categories: 3
- Photos: 10
- Featured: Yes
- Video: No

Platinum Level:
- Can add: 1 listing
- Categories: Unlimited
- Photos: Unlimited
- Featured: Yes (Priority)
- Video: Yes
```

Configure at: **GeoDirectory → Settings → Membership**

#### 7. Search & Filter Settings

**Search Form:**
```
Enable: Yes
Show on: Archive pages, Home page
Fields:
- Keyword search
- Category dropdown
- Location/Radius
- Advanced filters (toggle)
```

**Advanced Filters:**
- Services offered
- Year established
- Open now
- Featured listings first

---

## WP Job Manager

### Overview
Complete job board solution with moderation and applications.

### Configuration Steps

#### 1. General Settings
Go to **Job Listings → Settings**

```
Date Format: Relative (e.g., "2 days ago")
Google Maps API Key: [same as GeoDirectory]
Account Required: No (but track applications)
Account Creation: Automatic for job seekers
Account Role: Job Seeker (custom role)
```

#### 2. Job Submission Settings

**Submission Form:**
```
Enable Job Submission: Yes
Require Login: No
Moderate New Listings: Yes (IMPORTANT!)
Listing Duration: 30 days
Allow Editing: Yes
Allow Republishing: No
```

**Required Fields:**
- Job Title
- Job Description
- Location
- Job Type (Full-time, Part-time, etc.)
- Category (General vs Church/Ministry)
- Application Email/URL

**Optional Fields:**
- Company Name
- Company Logo
- Company Website
- Salary Range
- Experience Level

#### 3. Job Categories

**Setup Categories:**
```
General Employment (Parent)
├── Office & Administrative
├── Sales & Marketing
├── Healthcare
├── Technology
├── Skilled Trades
├── Hospitality
├── Education
└── Other

Church & Ministry (Parent)
├── Pastoral Positions
├── Youth Ministry
├── Music & Worship
├── Administrative
├── Facilities & Maintenance
└── Volunteer Coordinator
```

**Category Meta:**
- Add descriptions to each category
- Add category-specific fields
- Set different listing durations

#### 4. Location Setup

**Job Regions (if addon installed):**
```
LA Area (Parent)
├── Inglewood
├── South Los Angeles
├── Compton
├── Long Beach
└── Greater LA

California (Parent)
├── Northern California
├── Central California
└── Southern California (excl. LA)

Nationwide
Remote
```

#### 5. Custom Fields for Champions

**Add via Settings → Custom Fields:**

```
Field: Job Source
Type: Select
Options:
  - Internal (Church/Member)
  - External (General)
Description: Identify church-posted jobs
Required: No (admin only)

Field: Ministry Alignment
Type: Checkbox
Label: This is a ministry or church-related position
Required: No

Field: Christian Environment
Type: Checkbox
Label: Christian workplace environment
Required: No

Field: Experience Required
Type: Select
Options:
  - Entry Level
  - 1-3 years
  - 3-5 years
  - 5+ years
  - Management
Required: Yes
```

#### 6. Application Management

**Application Settings:**
```
Method: Email (default)
Alternative: Application form (requires addon)
Collect: Name, Email, Resume, Cover Letter
Notification: Send to job poster
Admin Copy: Yes
```

**Application Addons:**
- WP Job Manager - Applications ($39/year)
- WP Job Manager - Resumes ($39/year)
- WP Job Manager - Job Alerts ($39/year)

#### 7. Moderation Workflow

**Set Up Moderation:**
1. All jobs go to "Pending" status
2. Admin receives email notification
3. Admin reviews job posting:
   - Check for spam
   - Verify legitimacy
   - Categorize correctly (Internal/External)
   - Tag location properly
4. Approve or reject with reason

**Email Notifications:**
```
To Admin (New Submission):
Subject: New Job Posted - Requires Approval
Body: A new job "[job_title]" has been submitted and requires your review.

To Poster (Approved):
Subject: Your Job Posting is Now Live
Body: Great news! Your job "[job_title]" has been approved and is now visible.

To Poster (Rejected):
Subject: Job Posting Not Approved
Body: Unfortunately, your job "[job_title]" did not meet our guidelines.
Reason: [admin message]
```

#### 8. Job Alerts (Email Subscriptions)

If using Job Alerts addon:
```
Enable: Yes
Frequency Options:
  - Daily digest
  - Weekly digest
  - Instant alerts
Filters:
  - Category
  - Location
  - Keywords
```

---

## Security & Optimization

### Wordfence Security

**Configuration:**
```
Firewall:
  - Protection Level: Extended
  - Learning Mode: Disabled (after 1 week)
  - Rate Limiting: Enabled
    - Max requests: 4 per minute
    - Throttle after: 3 failed logins

Scanning:
  - Schedule: Daily at 3:00 AM
  - Scan: Core files, themes, plugins
  - Check for malware: Yes
  - Email alerts: Admin only

Login Security:
  - Two-factor auth: Required for admins
  - CAPTCHA: On login and registration
  - Limit login attempts: 5 tries
  - Lockout duration: 30 minutes
```

### UpdraftPlus Backup

**Backup Schedule:**
```
Files:
  - Frequency: Weekly (Sundays 2:00 AM)
  - Include: Themes, Plugins, Uploads
  - Exclude: Cache, Logs

Database:
  - Frequency: Daily (2:00 AM)
  - Include: All tables

Remote Storage:
  - Primary: Google Drive
  - Backup: Dropbox
  - Retention: 30 days
```

### WP Mail SMTP

**Google Workspace Setup:**
```
Mailer: Gmail
From Email: info@championsforprogress.org
From Name: Champions for Progress
Auth: OAuth 2.0
Client ID: [from Google Console]
Client Secret: [from Google Console]
Authorized Redirect URI: [provided by plugin]
```

### Caching (WP Rocket - Optional)

**Recommended Settings:**
```
Cache:
  - Enable for logged-in users: No
  - Mobile cache: Yes
  - Cache lifespan: 24 hours

File Optimization:
  - Minify CSS: Yes
  - Minify JS: Yes
  - Defer JS loading: Yes
  - Critical CSS: Auto-generate

Media:
  - LazyLoad images: Yes
  - LazyLoad iframes: Yes
  - WebP images: Yes (if supported)

CDN:
  - Enable if using Cloudflare: Yes
```

---

## Troubleshooting

### PMPro Issues

**Payments not processing:**
- Switch to test mode
- Use test card: 4242 4242 4242 4242
- Check error logs: **Memberships → Reports → Debugging**
- Verify SSL certificate is active

**Members can't access content:**
- Check level restrictions on content
- Verify user has active membership
- Check for expired subscription
- Clear cache

### GeoDirectory Issues

**Listings not showing on map:**
- Verify Google Maps API key
- Check API quotas in Google Console
- Enable billing in Google Cloud
- Verify location geocoding

**Search not working:**
- Clear GeoDirectory cache
- Rebuild search index: **GeoDirectory → Tools → Recount**
- Check category assignments
- Test with simple keyword

### WP Job Manager Issues

**Jobs not appearing:**
- Check listing status (Pending vs Published)
- Verify job expiration date
- Check category assignment
- Clear cache

**Applications not received:**
- Test email delivery
- Check spam folder
- Verify WP Mail SMTP
- Check application email address

---

## Advanced Customizations

### Code Snippets

Add to theme's `functions.php` or use Code Snippets plugin:

**Modify PMPro checkout:**
```php
// Add custom field to checkout
function champions_pmpro_checkout_field() {
    ?>
    <div class="pmpro_checkout-field">
        <label for="church_name">Church Name (Optional)</label>
        <input type="text" name="church_name" id="church_name" />
    </div>
    <?php
}
add_action('pmpro_checkout_after_billing_fields', 'champions_pmpro_checkout_field');
```

**Customize job listing display:**
```php
// Add custom badge for church jobs
function champions_church_job_badge($job) {
    $is_ministry = get_post_meta($job->ID, '_ministry_alignment', true);
    if ($is_ministry) {
        echo '<span class="church-job-badge">Ministry Position</span>';
    }
}
add_action('single_job_listing_start', 'champions_church_job_badge');
```

---

## Plugin Update Schedule

- **Major Updates**: Test on staging first
- **Security Updates**: Apply immediately
- **Feature Updates**: Review changelog, test on staging
- **Update Day**: First Sunday of each month

---

## Support Contacts

- **PMPro**: support@paidmembershipspro.com
- **GeoDirectory**: https://wpgeodirectory.com/support/
- **WP Job Manager**: https://wpjobmanager.com/support/
- **WP Engine**: https://wpengine.com/support/

---

This completes the plugin configuration guide. For setup instructions, see [SETUP.md](./SETUP.md).
