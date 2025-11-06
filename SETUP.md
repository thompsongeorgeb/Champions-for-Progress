# Champions for Progress - Setup Guide

Complete step-by-step guide to set up the Champions for Progress WordPress website.

## Table of Contents
1. [Prerequisites](#prerequisites)
2. [Domain & Hosting Setup](#domain--hosting-setup)
3. [WordPress Installation](#wordpress-installation)
4. [Theme Installation](#theme-installation)
5. [Plugin Installation](#plugin-installation)
6. [Payment Gateway Configuration](#payment-gateway-configuration)
7. [Membership Setup](#membership-setup)
8. [Business Directory Setup](#business-directory-setup)
9. [Job Board Setup](#job-board-setup)
10. [Prayer Call Section](#prayer-call-section)
11. [Final Configuration](#final-configuration)

---

## Prerequisites

Before starting, you'll need:
- [ ] Domain name (e.g., championsforprogress.org)
- [ ] Hosting account (recommended: WP Engine)
- [ ] Stripe account for payment processing
- [ ] PayPal Business account (optional)
- [ ] Zoom account for prayer calls
- [ ] Gmail/Google Workspace for business email

---

## Domain & Hosting Setup

### Step 1: Purchase Domain Name
1. Go to [Namecheap](https://www.namecheap.com) or [GoDaddy](https://www.godaddy.com)
2. Search for your desired domain (e.g., championsforprogress.org)
3. Purchase domain ($12-15/year)
4. Keep registrar login credentials safe

### Step 2: Set Up Hosting
1. Sign up for [WP Engine](https://wpengine.com) Startup Plan ($25/month)
2. During signup, enter your domain name
3. Wait for account activation (usually immediate)
4. Note your WP Engine login credentials

### Step 3: Connect Domain to Hosting
1. Log into your domain registrar
2. Find DNS settings
3. Update nameservers to WP Engine's nameservers (provided in WP Engine dashboard)
4. Wait 24-48 hours for DNS propagation

---

## WordPress Installation

### Step 1: Access WP Engine Dashboard
1. Log into [WP Engine portal](https://my.wpengine.com)
2. Click on your site name
3. Find "WordPress Admin" link

### Step 2: Upload WordPress Files
If using this GitHub repository:

```bash
# Clone this repository
git clone https://github.com/[your-username]/champions-for-progress.git

# Or download as ZIP and extract
```

**Option A: Upload via WP Engine (Recommended)**
1. In WP Engine portal, go to "SFTP/SSH" section
2. Get SFTP credentials
3. Use FileZilla or Cyberduck to connect
4. Upload WordPress files to `/sites/[yoursite]/wp-content/` directory

**Option B: Fresh WordPress Install**
1. WP Engine usually has WordPress pre-installed
2. Skip to theme installation

### Step 3: Complete WordPress Installation
1. Visit your domain (e.g., https://championsforprogress.org)
2. Select language
3. Enter site information:
   - Site Title: "Champions for Progress"
   - Admin Username: (choose secure username)
   - Admin Password: (use strong password)
   - Admin Email: your email
4. Click "Install WordPress"
5. Save login credentials securely

---

## Theme Installation

### Step 1: Install Champions for Progress Theme
1. Log into WordPress Admin (yourdomain.com/wp-admin)
2. Go to **Appearance → Themes**
3. Click **Add New → Upload Theme**
4. Upload `/wp-content/themes/champions-for-progress` folder as ZIP
5. Click **Activate**

### Step 2: (Optional) Install Astra Pro
If you purchased Astra Pro:
1. Download Astra Pro from purchase email
2. Go to **Appearance → Themes → Add New → Upload**
3. Upload and activate Astra Pro
4. Activate Champions for Progress as child theme (or use Astra directly)

### Step 3: Configure Basic Settings
1. Go to **Settings → General**
2. Set:
   - Site Title: "Champions for Progress"
   - Tagline: "Christian Business Directory & Job Board"
   - Timezone: "Los Angeles"
3. Go to **Settings → Permalink**
4. Select "Post name" structure
5. Click **Save Changes**

---

## Plugin Installation

### Required Plugins

#### 1. Paid Memberships Pro
1. Go to **Plugins → Add New**
2. Search "Paid Memberships Pro"
3. Install and activate FREE version first
4. Go to **Memberships → Settings**
5. Enter license key (after purchasing Plus plan from paidmembershipspro.com)

#### 2. GeoDirectory
1. Go to **Plugins → Add New**
2. Search "GeoDirectory"
3. Install and activate FREE version
4. Purchase Business plan from [wpgeodirectory.com](https://wpgeodirectory.com)
5. Install premium addons via **GeoDirectory → Addons**

#### 3. WP Job Manager
1. Go to **Plugins → Add New**
2. Search "WP Job Manager"
3. Install and activate
4. Purchase premium bundle from [wpjobmanager.com](https://wpjobmanager.com)
5. Install premium addons

#### 4. Additional Recommended Plugins
- **Wordfence Security** (Free) - Security and firewall
- **UpdraftPlus** (Free) - Backups
- **WP Mail SMTP** (Free) - Email delivery
- **Yoast SEO** (Free) - SEO optimization

### Plugin Installation Order
1. ✅ Paid Memberships Pro
2. ✅ GeoDirectory
3. ✅ WP Job Manager
4. ✅ Wordfence Security
5. ✅ UpdraftPlus
6. ✅ WP Mail SMTP

---

## Payment Gateway Configuration

### Stripe Setup (Primary Gateway)

#### Step 1: Create Stripe Account
1. Go to [stripe.com](https://stripe.com)
2. Sign up for account
3. Complete business verification
4. Navigate to **Developers → API Keys**

#### Step 2: Configure Stripe in PMPro
1. In WordPress: **Memberships → Settings → Payment Gateway**
2. Select "Stripe"
3. Enter API keys:
   - **Publishable Key**: pk_live_xxxxx (from Stripe dashboard)
   - **Secret Key**: sk_live_xxxxx (from Stripe dashboard)
4. For testing, use test keys (pk_test_ and sk_test_)
5. Click **Save Settings**

### PayPal Setup (Secondary Gateway)

#### Step 1: Create PayPal Business Account
1. Go to [paypal.com/business](https://www.paypal.com/business)
2. Sign up for Business account
3. Complete verification

#### Step 2: Configure PayPal in PMPro
1. In WordPress: **Memberships → Settings → Payment Gateway**
2. Select "PayPal Express"
3. Enter PayPal email address
4. Enable "PayPal Standard" for backup
5. Click **Save Settings**

---

## Membership Setup

### Step 1: Create Membership Levels

1. Go to **Memberships → Membership Levels**
2. Click **Add New Level**

#### Basic Business Listing
- Name: "Basic Business Listing"
- Description: "Essential business profile with contact information"
- Billing Details:
  - Price: $29.00
  - Billing Frequency: Monthly
  - Recurring: Yes
  - Billing Cycle: 1 Month
- Click **Save Level**

#### Premium Business Listing
- Name: "Premium Business Listing"
- Description: "Featured listing with photos and social media"
- Price: $49.00
- Billing Frequency: Monthly
- Recurring: Yes

#### Platinum Business Listing
- Name: "Platinum Business Listing"
- Description: "Premium features with job posting credits"
- Price: $99.00
- Billing Frequency: Monthly
- Recurring: Yes

### Step 2: Configure Membership Pages
1. Go to **Memberships → Pages**
2. PMPro auto-creates pages, verify:
   - Membership Levels page
   - Membership Checkout page
   - Membership Account page
   - Membership Billing page
   - Membership Cancel page
3. Customize page content if needed

### Step 3: Email Settings
1. Go to **Memberships → Settings → Email**
2. Configure email templates:
   - Welcome email
   - Payment confirmation
   - Payment failed
   - Membership expired
3. Set sender name: "Champions for Progress"
4. Set sender email: info@championsforprogress.org

---

## Business Directory Setup

### Step 1: Configure GeoDirectory

1. Go to **GeoDirectory → Settings**
2. General Settings:
   - Default Location: Inglewood, CA
   - Distance Unit: Miles
   - Map Provider: Google Maps

#### Step 2: Set Up Google Maps API
1. Go to [Google Cloud Console](https://console.cloud.google.com)
2. Create new project
3. Enable Maps JavaScript API
4. Create API key
5. In WordPress: **GeoDirectory → Settings → Google Maps**
6. Enter API key
7. Set default location: Inglewood, California

### Step 3: Create Business Categories
1. Go to **GeoDirectory → Places → Categories**
2. Add categories:
   - Professional Services
   - Healthcare
   - Construction & Trades
   - Retail & Shopping
   - Food & Restaurants
   - Technology
   - Ministry & Church Services
   - Education
   - Real Estate
   - Finance & Insurance

### Step 4: Configure Custom Fields
1. Go to **GeoDirectory → Places → Custom Fields**
2. Add fields:
   - Business Name (Text)
   - Business Description (Textarea)
   - Phone Number (Phone)
   - Email (Email)
   - Website URL (URL)
   - Address (Address)
   - Business Hours (Custom field)
   - Social Media Links (URL fields)
   - Logo Upload (File)
   - Photo Gallery (Images)

### Step 5: Integrate with Paid Memberships Pro
1. Go to **GeoDirectory → Settings → Membership**
2. Enable PMPro integration
3. Map membership levels to listing features:
   - Basic: 1 category, standard listing
   - Premium: 3 categories, featured listing, 10 photos
   - Platinum: Unlimited, homepage featured, video

---

## Job Board Setup

### Step 1: Configure WP Job Manager
1. Go to **Job Listings → Settings**
2. General Settings:
   - Date Format: Default
   - Google Maps API Key: (same as GeoDirectory)

### Step 2: Create Job Categories
1. Go to **Job Listings → Categories**
2. Add parent category: "General Employment"
   - Office & Administrative
   - Sales & Marketing
   - Healthcare
   - Technology
   - Skilled Trades
   - Hospitality
   - Education
3. Add parent category: "Church & Ministry"
   - Pastoral
   - Youth Ministry
   - Music & Worship
   - Administrative
   - Facilities

### Step 3: Create Location Tags
1. Go to **Job Listings → Job Regions** (if addon installed)
2. Add locations:
   - LA Area
     - Inglewood
     - South Los Angeles
     - Long Beach
   - California (Other)
   - Nationwide
   - Remote

### Step 4: Configure Job Submission
1. Go to **Job Listings → Settings → Job Submission**
2. Settings:
   - Enable job submission: Yes
   - Require login: No (but enable moderation)
   - Moderate new listings: Yes (IMPORTANT!)
   - Listing duration: 30 days
   - Allow editing: Yes

### Step 5: Set Up Moderation Workflow
1. Go to **Settings → Discussion**
2. Enable email notifications for new submissions
3. Set admin email to receive notifications
4. Create pending jobs page (admins only)

---

## Prayer Call Section

### Step 1: Create Beyond Job Check Page
1. Go to **Pages → Add New**
2. Title: "Beyond Job Check"
3. Add content:

```
Welcome to Beyond Job Check - our weekly prayer call for job seekers.

Every Wednesday at 12:00 PM Pacific Time, we come together in prayer
to support those seeking employment and to celebrate victories in the job search journey.

[zoom_link url="YOUR_ZOOM_LINK_HERE" text="Join Prayer Call on Zoom"]

## What to Expect
- Opening prayer
- Job search testimonies
- Prayer requests
- Group prayer
- Encouragement and fellowship

## How to Join
1. Click the Zoom link above at 12:00 PM PST on Wednesdays
2. Have your prayer requests ready
3. Be prepared to encourage others

We look forward to praying with you!
```

4. Publish page

### Step 2: Set Up Recurring Zoom Meeting
1. Log into [zoom.us](https://zoom.us)
2. Click **Schedule a Meeting**
3. Settings:
   - Topic: "Beyond Job Check Prayer Call"
   - Recurring meeting: Yes
   - Recurrence: Weekly, Wednesday
   - Time: 12:00 PM Pacific
   - Duration: 1 hour
4. Save meeting
5. Copy meeting URL

### Step 3: Add Zoom Link to Page
1. Edit "Beyond Job Check" page
2. Replace `YOUR_ZOOM_LINK_HERE` with actual Zoom URL
3. Update page

---

## Final Configuration

### Step 1: Create Navigation Menus
1. Go to **Appearance → Menus**
2. Create "Primary Menu":
   - Home
   - Business Directory
   - Job Board
   - Beyond Job Check
   - Membership (Join Now)
   - About
   - Contact
3. Assign to "Primary" location

### Step 2: Create Essential Pages
1. **Home Page** - Welcome and overview
2. **About Page** - Mission and vision
3. **Contact Page** - Contact form
4. **Privacy Policy** - Required for payments
5. **Terms of Service** - Membership terms
6. **Refund Policy** - Payment terms

### Step 3: Configure Homepage
1. Go to **Settings → Reading**
2. Select "A static page"
3. Choose your Home page
4. Save changes

### Step 4: Set Up Email (Google Workspace)
1. Purchase Google Workspace ($6/user/month)
2. Set up accounts:
   - info@championsforprogress.org
   - support@championsforprogress.org
   - admin@championsforprogress.org
3. Configure WP Mail SMTP:
   - Go to **WP Mail SMTP → Settings**
   - Select "Gmail"
   - Connect Google account
   - Test email delivery

### Step 5: Security Configuration

#### Wordfence Setup
1. Go to **Wordfence → All Options**
2. Enable:
   - Firewall (Extended Protection)
   - Malware scanning
   - Two-factor authentication for admins
   - Login security

#### UpdraftPlus Setup
1. Go to **Settings → UpdraftPlus Backups**
2. Click **Settings**
3. Configure:
   - Backup schedule: Daily
   - Remote storage: Google Drive or Dropbox
   - Files to backup: All
   - Database backup: Yes
4. Run manual backup test

### Step 6: SSL Certificate
1. WP Engine includes free SSL
2. Go to WP Engine dashboard
3. Enable SSL for your domain
4. Force HTTPS:
   - In WordPress: Install "Really Simple SSL" plugin
   - Activate and configure

### Step 7: Testing

#### Test Membership Sign-Up
1. Open incognito browser
2. Visit membership page
3. Sign up for Basic plan (use test mode)
4. Complete payment with test card: 4242 4242 4242 4242
5. Verify:
   - ✅ Payment processed
   - ✅ Account created
   - ✅ Welcome email received
   - ✅ Access to business submission

#### Test Business Listing
1. As logged-in member, submit business listing
2. Verify:
   - ✅ Form works correctly
   - ✅ All fields save properly
   - ✅ Listing appears in directory
   - ✅ Search and filters work

#### Test Job Posting
1. As visitor, submit job posting
2. Verify:
   - ✅ Submission goes to pending (moderation)
   - ✅ Admin receives notification
   - ✅ Admin can approve/reject
   - ✅ Approved jobs appear on job board

#### Test Prayer Call Page
1. Visit Beyond Job Check page
2. Verify:
   - ✅ Content displays correctly
   - ✅ Zoom link works
   - ✅ Correct meeting information

---

## Launch Checklist

Before going live:

### Technical
- [ ] All plugins activated and licensed
- [ ] Payment gateways tested (test mode)
- [ ] SSL certificate active (HTTPS)
- [ ] Backups configured and tested
- [ ] Email delivery tested
- [ ] Forms tested (contact, prayer request)
- [ ] Mobile responsiveness checked
- [ ] Page load speed optimized

### Content
- [ ] All pages created and published
- [ ] Navigation menus configured
- [ ] Membership levels created
- [ ] Business categories set up
- [ ] Job categories set up
- [ ] Sample business listings added
- [ ] Sample job postings added
- [ ] Images and logos uploaded

### Legal & Compliance
- [ ] Privacy Policy published
- [ ] Terms of Service published
- [ ] Refund Policy published
- [ ] Cookie consent banner (GDPR)
- [ ] Payment terms clear

### Marketing
- [ ] Google Analytics installed
- [ ] Facebook pixel (optional)
- [ ] Social media accounts created
- [ ] Launch email prepared
- [ ] Church partnerships confirmed

### Go Live
- [ ] Switch payment gateways to LIVE mode
- [ ] Announce to mailing list
- [ ] Post on social media
- [ ] Notify church community
- [ ] Monitor for issues

---

## Post-Launch Tasks

### Week 1
- Monitor for bugs and errors
- Respond to user feedback
- Track sign-ups and conversions
- Test all user flows again

### Month 1
- Review analytics
- Optimize based on user behavior
- Gather member testimonials
- Adjust pricing if needed

### Ongoing
- Weekly: Moderate job postings
- Weekly: Update prayer call info
- Monthly: Review security reports
- Monthly: Check backup integrity
- Quarterly: Update plugins and WordPress
- Quarterly: Review membership pricing

---

## Troubleshooting

### Common Issues

#### Payment Not Processing
- Check Stripe/PayPal API keys
- Verify SSL certificate
- Check PMPro error logs
- Test in sandbox mode first

#### Business Listings Not Showing
- Check GeoDirectory settings
- Verify membership integration
- Clear cache
- Check user permissions

#### Job Submissions Not Going to Pending
- Check WP Job Manager settings
- Verify moderation is enabled
- Check email notifications
- Review user roles

#### Emails Not Sending
- Test WP Mail SMTP connection
- Check Google Workspace settings
- Verify DNS records (SPF, DKIM)
- Check spam folders

---

## Support Resources

- **Paid Memberships Pro**: https://www.paidmembershipspro.com/documentation/
- **GeoDirectory**: https://docs.wpgeodirectory.com/
- **WP Job Manager**: https://wpjobmanager.com/documentation/
- **WP Engine**: https://wpengine.com/support/
- **WordPress**: https://wordpress.org/support/

---

## Next Steps

Once setup is complete:
1. Review [PLUGINS.md](./PLUGINS.md) for advanced configuration
2. Customize theme in **Appearance → Customize**
3. Add content and sample listings
4. Invite beta testers
5. Launch marketing campaign

---

**Setup Complete!** 🎉

Your Champions for Progress website is now ready to serve the Christian business community.
