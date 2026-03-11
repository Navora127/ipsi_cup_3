# PROJECT PLAN - IPSI CUP 3 Website Enhancement

## Information Gathered:
1. **Current State**: Single HTML file (`index`) with Supabase integration for athlete registration
2. **Existing Features**:
   - Hero section with countdown timer
   - News section (placeholder - "COMING UP")
   - Admin panel for viewing athletes
   - Registration form for athletes
   - Checkout system (basic)
   - Receipt/download functionality
   - Mobile hamburger menu (partial)
3. **Supabase Configuration**: Already configured with URL and key
4. **Images**: Logo and chairman photo present

## Required Enhancements:

### 1. NEWS MANAGEMENT SYSTEM (Admin Panel)
- Add news management to admin panel
- Features: Add, Edit, Delete news
- Fields: Title, Content, Image/Poster, Date
- Display on "Berita/News" page
- Sort by newest date
- Images stored in: `/uploads/news/`
- Allowed formats: JPG, JPEG, PNG

### 2. UNIQUE PAYMENT CODE SYSTEM
- Auto-generate payment code on CHECKOUT
- Format: IPSI-2026-XXXXX (5 random characters)
- Unique for each official registration
- Store with registration data
- Display on payment page AND receipt

### 3. PAYMENT REMINDER PAGE (After Checkout)
- Show after CHECKOUT button pressed
- Bank transfer instructions:
  - BANK BRI
  - Account: XXXXXXXX
  - Account Name: Panitia IPSI CUP
- Display unique payment code
- Add Google Form link for proof of payment upload
- Link: https://s.id/KlikBuktiTF

### 4. PAYMENT CONFIRMATION FLOW
- Step 1: Participant views payment reminder
- Step 2: Upload proof via Google Form
- Step 3: Click confirmation button
- Step 4: Download receipt button appears AFTER confirmation

### 5. RECEIPT/STRUK ENHANCEMENT
- Display:
  - Official Name
  - Contingent Name (Perguruan)
  - Number of Athletes
  - Total Payment
  - Payment Code
  - Registration Date
  - Athlete List

- **Auto-pagination** (max 5 athletes per page):
  - 1-5 athletes → 1 page
  - 6-10 athletes → 2 pages
  - 11-15 athletes → 3 pages
  - etc.

- **Print Layout**:
  - Landscape format
  - Clean athlete table
  - Smaller warning box
  - Proportional fonts
  - No cut-off elements
  - Header on each page

### 6. RESPONSIVE DESIGN FIXES
- All devices: Smartphone, Tablet, Laptop, Desktop
- Requirements:
  - Layout adjusts to screen size
  - No text/table overflow
  - Registration form neat on small screens
  - Tables scrollable on mobile
  - Images/posters responsive
  - Hamburger menu on small screens
- Use: Flexbox, CSS Grid, Tailwind responsive classes

---

## File Structure to Create/Modify:

```
ipsicup3/
├── index (MAJOR UPDATE - main HTML file)
├── uploads/
│   └── news/ (for news images)
├── admin/
│   └── news-manager.html (news management page - OPTIONAL, can be in main admin)
└── PROJECT_PLAN.md (this file)
```

---

## Plan - File Level Changes:

### 1. index (MAJOR UPDATE)
**Add/Modify Sections:**
- [ ] News section in admin panel
- [ ] News display section (Berita)
- [ ] Payment code generation system
- [ ] Payment reminder modal/page
- [ ] Payment confirmation flow
- [ ] Enhanced receipt with pagination
- [ ] Complete responsive design

### 2. uploads/news/ (CREATE)
- Create folder for news images

### 3. Documentation
- How to activate admin news features
- Payment code system explanation
- Payment confirmation flow
- Receipt pagination system
- Responsive design features

---

## Implementation Steps:

1. **Backup current index.html**
2. **Update Supabase tables structure for news**
3. **Add news management functions in admin**
4. **Implement payment code generation**
5. **Create payment reminder page**
6. **Implement payment confirmation flow**
7. **Enhance receipt with pagination**
8. **Fix all responsive design issues**
9. **Test all new features**
10. **Create documentation**

---

## Status: 🔄 PENDING IMPLEMENTATION

