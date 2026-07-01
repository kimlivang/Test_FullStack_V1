<?php $__env->startSection('title', isset($selectedCategory) && isset($categories[$selectedCategory]) ? $categories[$selectedCategory]['name'] . ' - Digital Store' : 'All Categories - Digital Store'); ?>

<?php
// Define categories data
$categories = [
    'windows-os' => [
        'name' => 'Windows OS',
        'icon' => 'bi-windows',
        'desc' => 'Upgrade or activate Windows 10/11 Pro and Home with official, genuine lifetime licenses.',
        'color' => '#14b8a6',
        'bg_glow' => 'rgba(20, 184, 166, 0.15)',
        'count' => 2
    ],
    'office-suite' => [
        'name' => 'Office Suite',
        'icon' => 'bi-microsoft',
        'desc' => 'Boost productivity with Microsoft Office suites, lifetime keys, and cloud subscription solutions.',
        'color' => '#6366f1',
        'bg_glow' => 'rgba(99, 102, 241, 0.15)',
        'count' => 3
    ],
    'vpn-security' => [
        'name' => 'VPN & Security',
        'icon' => 'bi-shield-lock',
        'desc' => 'Secure your digital presence with top-tier virtual private networks and antivirus suites.',
        'color' => '#f43f5e',
        'bg_glow' => 'rgba(244, 63, 94, 0.15)',
        'count' => 2
    ],
    'ai-tools' => [
        'name' => 'AI Tools',
        'icon' => 'bi-robot',
        'desc' => 'Harness the power of AI with premium accounts for writing, art generation, and chat assistants.',
        'color' => '#a855f7',
        'bg_glow' => 'rgba(168, 85, 247, 0.15)',
        'count' => 2
    ],
    'design-tools' => [
        'name' => 'Design Tools',
        'icon' => 'bi-palette',
        'desc' => 'Create gorgeous vectors, layouts, and web mockups using industry-leading premium design applications.',
        'color' => '#ec4899',
        'bg_glow' => 'rgba(236, 72, 153, 0.15)',
        'count' => 2
    ],
    'developer' => [
        'name' => 'Developer',
        'icon' => 'bi-code-slash',
        'desc' => 'Enhance your engineering workflow with premium coding assistants, IDEs, and database managers.',
        'color' => '#22c55e',
        'bg_glow' => 'rgba(34, 197, 94, 0.15)',
        'count' => 2
    ],
    'gaming' => [
        'name' => 'Gaming',
        'icon' => 'bi-controller',
        'desc' => 'Access absolute gaming entertainment with monthly passes, currency top-ups, and game keys.',
        'color' => '#f97316',
        'bg_glow' => 'rgba(249, 115, 22, 0.15)',
        'count' => 2
    ]
];

// Define products list categorized
$products = [
    'windows-os' => [
        [
            'title' => 'Windows 11 Pro Genuine License',
            'desc' => 'Supports all languages, lifetime activation, genuine digital retail key.',
            'price' => 19.99,
            'badge' => 'Popular',
            'icon' => 'bi-windows',
            'class' => 'accent'
        ],
        [
            'title' => 'Windows 10 Pro Retail Activation Key',
            'desc' => 'Activate your Windows 10 OS instantly with 100% genuine lifetime retail key.',
            'price' => 14.99,
            'badge' => 'Stable',
            'icon' => 'bi-windows',
            'class' => ''
        ]
    ],
    'office-suite' => [
        [
            'title' => 'Microsoft Office 365 Professional Plus 2026',
            'desc' => 'Full offline installer, genuine lifetime license, 1 PC. Instant email delivery.',
            'price' => 29.99,
            'badge' => 'Best Seller',
            'icon' => 'bi-microsoft',
            'class' => ''
        ],
        [
            'title' => 'Microsoft Office 2021 Home & Business',
            'desc' => 'Permanent activation for Mac and Windows. Supports Microsoft Account binding.',
            'price' => 39.99,
            'badge' => 'Premium',
            'icon' => 'bi-file-earmark-word-fill',
            'class' => 'accent'
        ],
        [
            'title' => 'Adobe Acrobat Pro DC 2026 Lifetime',
            'desc' => 'Full premium PDF editor, edit text/images, convert to Word, lifetime license key.',
            'price' => 24.99,
            'badge' => 'Utility',
            'icon' => 'bi-filetype-pdf',
            'class' => 'warning'
        ]
    ],
    'vpn-security' => [
        [
            'title' => 'NordVPN 1-Year Premium Subscription',
            'desc' => 'High speed VPN with 6000+ servers worldwide. Support 6 devices simultaneously.',
            'price' => 24.99,
            'badge' => 'Safe Guard',
            'icon' => 'bi-shield-check',
            'class' => ''
        ],
        [
            'title' => 'Malwarebytes Premium 1-Year License Key',
            'desc' => 'Real-time protection against malware, ransomware, and malicious websites.',
            'price' => 12.99,
            'badge' => 'Essential',
            'icon' => 'bi-virus',
            'class' => 'warning'
        ]
    ],
    'ai-tools' => [
        [
            'title' => 'ChatGPT Plus 1-Year Premium Subscription',
            'desc' => 'Priority access, GPT-4, DALL·E, browsing, plugins – 12 months.',
            'price' => 49.99,
            'badge' => 'Hot',
            'icon' => 'bi-robot',
            'class' => 'purple'
        ],
        [
            'title' => 'Midjourney v6 1-Month Pro Subscription',
            'desc' => 'Fast image generations, relaxed mode, commercial usage rights unlocked.',
            'price' => 19.99,
            'badge' => 'Creative',
            'icon' => 'bi-image',
            'class' => 'accent'
        ]
    ],
    'design-tools' => [
        [
            'title' => 'Canva Pro 1-Year Premium Subscription',
            'desc' => 'Full access to millions of templates, premium assets, branding kits, and backgrounds.',
            'price' => 15.99,
            'badge' => 'Popular',
            'icon' => 'bi-palette',
            'class' => 'purple'
        ],
        [
            'title' => 'Figma Professional 1-Year Editor License',
            'desc' => 'Design collaboratively. Unlimited files, projects, and custom team libraries.',
            'price' => 29.99,
            'badge' => 'Standard',
            'icon' => 'bi-vector-pen',
            'class' => 'accent'
        ]
    ],
    'developer' => [
        [
            'title' => 'GitHub Copilot 1-Year Premium Subscription',
            'desc' => 'Your AI pair programmer. Unlocks autocomplete, chat assistant in IDEs.',
            'price' => 39.99,
            'badge' => 'For Devs',
            'icon' => 'bi-code-slash',
            'class' => 'accent'
        ],
        [
            'title' => 'JetBrains All Products Pack 1-Year Personal',
            'desc' => 'Get IntelliJ IDEA, WebStorm, PyCharm, Rider, ReSharper and more in one pack.',
            'price' => 59.99,
            'badge' => 'Premium Pack',
            'icon' => 'bi-cpu',
            'class' => ''
        ]
    ],
    'gaming' => [
        [
            'title' => 'Xbox Game Pass Ultimate 3-Month Membership',
            'desc' => 'Play hundreds of high-quality games on PC, console, and cloud. Includes EA Play.',
            'price' => 19.99,
            'badge' => 'Top Value',
            'icon' => 'bi-controller',
            'class' => 'warning'
        ],
        [
            'title' => 'PlayStation Plus Essential 12-Month Membership',
            'desc' => 'Access online multiplayer, monthly games, and exclusive store discounts.',
            'price' => 39.99,
            'badge' => 'Official Key',
            'icon' => 'bi-playstation',
            'class' => 'accent'
        ]
    ]
];

$selectedKey = $selectedCategory;
$isCategorySelected = !empty($selectedKey) && isset($categories[$selectedKey]);

// Set active category title and meta
if ($isCategorySelected) {
    $activeCategoryName = $categories[$selectedKey]['name'];
    $activeCategoryColor = $categories[$selectedKey]['color'];
    $activeCategoryGlow = $categories[$selectedKey]['bg_glow'];
    $filteredProductsList = $products[$selectedKey] ?? [];
} else {
    $activeCategoryName = 'All Categories';
    $activeCategoryColor = '#6366f1';
    $activeCategoryGlow = 'rgba(99, 102, 241, 0.15)';
    // Merge all products
    $filteredProductsList = [];
    foreach ($products as $catKey => $catProducts) {
        $filteredProductsList = array_merge($filteredProductsList, $catProducts);
    }
}

$productCount = count($filteredProductsList);
?>

<?php $__env->startSection('content'); ?>


<nav aria-label="breadcrumb" class="breadcrumb-section">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo e(route('categories')); ?>">Categories</a></li>
      <?php if($isCategorySelected): ?>
        <li class="breadcrumb-item active" aria-current="page" style="color:white;"><?php echo e($activeCategoryName); ?></li>
      <?php else: ?>
        <li class="breadcrumb-item active" aria-current="page" style="color:white;">All</li>
      <?php endif; ?>
    </ol>
  </div>
</nav>


<section class="section-padding category-layout-section">
  <div class="container">
    <div class="row g-4">
      
      
      <div class="col-lg-3">
        <div class="sidebar-panel p-4">
          <h5 class="sidebar-heading mb-3">
            <i class="bi bi-grid-fill me-2"></i>Categories
          </h5>
          <div class="list-group list-group-sidebar gap-2">
            
            <a href="<?php echo e(route('categories')); ?>" 
               class="list-group-item list-group-item-action d-flex align-items-center justify-content-between py-2.5 px-3 <?php echo e(!$isCategorySelected ? 'active' : ''); ?>">
              <span><i class="bi bi-collection me-2"></i> All Categories</span>
              <span class="badge rounded-pill bg-dark-pill"><?php echo e(count(Arr::collapse($products))); ?></span>
            </a>
            
            
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slug => $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(route('categories', $slug)); ?>" 
                 class="list-group-item list-group-item-action d-flex align-items-center justify-content-between py-2.5 px-3 <?php echo e($selectedKey === $slug ? 'active' : ''); ?>">
                <span><i class="bi <?php echo e($cat['icon']); ?> me-2"></i> <?php echo e($cat['name']); ?></span>
                <span class="badge rounded-pill bg-dark-pill"><?php echo e($cat['count']); ?></span>
              </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>

      
      <div class="col-lg-9">
        
        
        <div class="category-header-wrap mb-4" style="--cat-accent-color: <?php echo e($activeCategoryColor); ?>; --cat-accent-glow: <?php echo e($activeCategoryGlow); ?>;">
          <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start align-items-sm-center border-bottom border-secondary-subtle pb-3 mb-2">
            <div>
              <h2 class="category-main-title mb-1"><?php echo e($activeCategoryName); ?></h2>
              <p class="product-count-label text-secondary small mb-0" id="total-count-text">
                <span id="filtered-count"><?php echo e($productCount); ?></span> Products Found
              </p>
            </div>
            <?php if($isCategorySelected): ?>
              <span class="badge-cat-pill d-none d-sm-inline-block" style="background: <?php echo e($activeCategoryGlow); ?>; color: <?php echo e($activeCategoryColor); ?>;">
                Active Category Folder
              </span>
            <?php endif; ?>
          </div>
        </div>

        
        <div class="controls-card p-3 mb-4">
          <div class="row g-3">
            
            <div class="col-md-8">
              <div class="search-input-wrapper">
                <input type="text" id="live-product-search" class="form-control form-control-custom" placeholder="Search in <?php echo e($activeCategoryName); ?>...">
                <i class="bi bi-search search-icon-btn"></i>
              </div>
            </div>
            
            <div class="col-md-4">
              <div class="sort-select-wrapper">
                <select class="form-select form-select-custom" id="sort-order-select">
                  <option value="default" selected>Sort By: Default</option>
                  <option value="price-asc">Price: Low to High</option>
                  <option value="price-desc">Price: High to Low</option>
                  <option value="title-asc">Alphabetical: A-Z</option>
                </select>
                <i class="bi bi-sort-down sort-icon-btn"></i>
              </div>
            </div>
          </div>
        </div>

        
        <div class="products-grid-container mb-5" id="products-list-wrapper">
          <div class="row g-4" id="products-list-row">
            <?php $__empty_1 = true; $__currentLoopData = $filteredProductsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
              <div class="col-12 col-md-6 product-showcase-card-wrapper" 
                   data-price="<?php echo e($prod['price']); ?>" 
                   data-title="<?php echo e($prod['title']); ?>" 
                   data-index="<?php echo e($idx); ?>">
                <div class="product-premium-card h-100 d-flex flex-column">
                  <div class="product-card-top p-3 d-flex align-items-start justify-content-between">
                    <div class="product-card-icon <?php echo e($prod['class']); ?>" style="background: <?php echo e($activeCategoryGlow); ?>; color: <?php echo e($activeCategoryColor); ?>;">
                      <i class="bi <?php echo e($prod['icon']); ?>"></i>
                    </div>
                    <?php if(!empty($prod['badge'])): ?>
                      <span class="product-card-badge"><?php echo e($prod['badge']); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="product-card-body px-4 pb-3 flex-grow-1">
                    <h4 class="product-card-title mb-2"><?php echo e($prod['title']); ?></h4>
                    <p class="product-card-desc text-secondary small mb-0"><?php echo e($prod['desc']); ?></p>
                  </div>
                  <div class="product-card-footer p-4 d-flex align-items-center justify-content-between mt-auto">
                    <div class="product-card-price">$<?php echo e(number_format($prod['price'], 2)); ?></div>
                    <div class="product-card-buttons d-flex gap-2">
                      <a href="#" class="btn btn-outline-premium" title="View Details"><i class="bi bi-eye"></i></a>
                      <a href="#" class="btn btn-primary-premium"><i class="bi bi-cart-plus me-1"></i> Buy</a>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
              <div class="col-12 text-center py-5" id="no-products-div">
                <i class="bi bi-inbox text-secondary" style="font-size: 3rem;"></i>
                <h5 class="text-secondary mt-3">No software products found matching criteria.</h5>
              </div>
            <?php endif; ?>
          </div>
        </div>

        
        <nav aria-label="Product navigation" class="pagination-navigation d-flex justify-content-center mb-4" id="pagination-outer">
          <ul class="pagination pagination-custom gap-2" id="pagination-ul">
            
          </ul>
        </nav>

      </div>
    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
  :root {
    --bg-color: #0b0f19;
    --panel-border: rgba(255, 255, 255, 0.08);
    --panel-border-hover: rgba(255, 255, 255, 0.16);
    --text-primary: #f8fafc;
    --text-secondary: #a7b0c0;
    
    --color-primary: #6366f1;
    --color-secondary: #14b8a6;
    
    --gradient-primary: linear-gradient(135deg, #6366f1 0%, #14b8a6 100%);
    --gradient-accent: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
    --transition-smooth: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    
    --radius-card: 1.25rem;
    --radius-btn: 0.75rem;
  }

  body {
    background-color: var(--bg-color);
    color: var(--text-primary);
  }

  /* ---------- BREADCRUMB ---------- */
  .breadcrumb-section {
    background: transparent;
    padding: 1.5rem 0 0.5rem;
    margin: 0;
  }
  .breadcrumb {
    margin-bottom: 0;
    background: transparent;
    padding: 0;
  }
  .breadcrumb-item a {
    color: var(--text-secondary);
    text-decoration: none;
    font-size: 0.9rem;
    transition: var(--transition-smooth);
  }
  .breadcrumb-item a:hover {
    color: var(--color-secondary);
  }
  .breadcrumb-item.active {
    color: var(--text-primary);
    font-size: 0.9rem;
    font-weight: 500;
  }
  .breadcrumb-item + .breadcrumb-item::before {
    color: rgba(255, 255, 255, 0.2) !important;
  }

  /* ---------- SIDEBAR PANEL ---------- */
  .sidebar-panel {
    background: rgba(17, 24, 39, 0.6);
    border: 1px solid var(--panel-border);
    border-radius: var(--radius-card);
    backdrop-filter: blur(8px);
    position: sticky;
    top: 100px;
  }

  .sidebar-heading {
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 1.15rem;
    color: var(--text-primary);
    border-bottom: 1px solid rgba(255, 255, 255, 0.06);
    padding-bottom: 0.75rem;
  }

  .list-group-sidebar .list-group-item {
    background: transparent;
    border: 1px solid transparent;
    color: var(--text-secondary);
    border-radius: 10px !important;
    font-family: 'Outfit', sans-serif;
    font-weight: 500;
    font-size: 0.95rem;
    transition: var(--transition-smooth);
  }

  .list-group-sidebar .list-group-item:hover {
    background: rgba(255, 255, 255, 0.04);
    color: var(--text-primary);
    transform: translateX(3px);
  }

  .list-group-sidebar .list-group-item.active {
    background: var(--gradient-primary);
    border-color: transparent;
    color: white;
    box-shadow: 0 4px 15px rgba(99, 102, 241, 0.25);
  }

  .bg-dark-pill {
    background: rgba(0, 0, 0, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.05);
    color: var(--text-secondary);
    font-size: 0.75rem;
  }

  .list-group-item.active .bg-dark-pill {
    background: rgba(255, 255, 255, 0.2);
    color: white;
    border-color: transparent;
  }

  /* ---------- CATEGORY HEADER ---------- */
  .category-header-wrap {
    position: relative;
  }

  .category-main-title {
    font-family: 'Outfit', sans-serif;
    font-weight: 800;
    font-size: 1.8rem;
    color: var(--text-primary);
    background: linear-gradient(135deg, #ffffff 0%, #a7b0c0 100%);
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .badge-cat-pill {
    font-family: 'Outfit', sans-serif;
    padding: 0.25rem 0.85rem;
    border-radius: 99px;
    font-weight: 700;
    font-size: 0.7rem;
    letter-spacing: 0.8px;
    border: 1px solid rgba(255, 255, 255, 0.05);
  }

  /* ---------- CONTROLS: SEARCH & SORT ---------- */
  .controls-card {
    background: rgba(17, 24, 39, 0.45);
    border: 1px solid var(--panel-border);
    border-radius: var(--radius-card);
    backdrop-filter: blur(12px);
  }

  .search-input-wrapper, .sort-select-wrapper {
    position: relative;
  }

  .search-icon-btn, .sort-icon-btn {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #64748b;
    font-size: 1rem;
    pointer-events: none;
  }

  .form-control-custom, .form-select-custom {
    background-color: #111827;
    border: 1px solid var(--panel-border);
    color: white;
    border-radius: 12px;
    padding: 0.75rem 1rem 0.75rem 3rem;
    font-size: 0.9rem;
    transition: var(--transition-smooth);
  }

  .form-select-custom {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23a7b0c0' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
    background-position: right 1.25rem center;
    background-size: 16px 12px;
  }

  .form-control-custom:focus, .form-select-custom:focus {
    background-color: #111827;
    border-color: var(--color-primary);
    box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.2);
    outline: none;
    color: white;
  }

  .form-select-custom option {
    background-color: #111827;
    color: white;
  }

  /* ---------- PRODUCT PREMIUM CARD ---------- */
  .product-premium-card {
    background: rgba(17, 24, 39, 0.6);
    border: 1px solid var(--panel-border);
    border-radius: var(--radius-card);
    transition: var(--transition-smooth);
    position: relative;
    overflow: hidden;
  }

  .product-premium-card:hover {
    background: rgba(26, 34, 54, 0.85);
    border-color: var(--panel-border-hover);
    transform: translateY(-4px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4), inset 0 0 20px rgba(255, 255, 255, 0.02);
  }

  .product-card-icon {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    border: 1px solid rgba(255, 255, 255, 0.05);
  }

  .product-card-icon.accent { color: var(--color-secondary); }
  .product-card-icon.warning { color: var(--color-warning); }
  .product-card-icon.purple  { color: #a855f7; }

  .product-card-badge {
    font-size: 0.6rem;
    font-weight: 700;
    text-transform: uppercase;
    background: rgba(255, 255, 255, 0.06);
    padding: 0.2rem 0.6rem;
    border-radius: 6px;
    color: var(--text-secondary);
    border: 1px solid var(--panel-border);
  }

  .product-card-title {
    font-family: 'Outfit', sans-serif;
    font-weight: 700;
    font-size: 1.15rem;
    color: #9bb83c;
  }

  .product-card-desc {
    line-height: 1.5;
  }

  .product-card-price {
    font-family: 'Outfit', sans-serif;
    font-weight: 800;
    font-size: 1.35rem;
    color: #34d399;
  }

  .btn-outline-premium {
    border: 1px solid var(--panel-border);
    color: var(--text-secondary);
    border-radius: var(--radius-btn);
    transition: var(--transition-smooth);
    padding: 0.5rem 0.8rem;
  }
  .btn-outline-premium:hover {
    background: rgba(255, 255, 255, 0.06);
    color: white;
  }

  .btn-primary-premium {
    background: var(--gradient-primary);
    color: white;
    border: none;
    border-radius: var(--radius-btn);
    font-weight: 600;
    font-size: 0.9rem;
    padding: 0.5rem 1.25rem;
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
    transition: var(--transition-smooth);
  }
  .btn-primary-premium:hover {
    box-shadow: 0 6px 18px rgba(99, 102, 241, 0.4);
    transform: translateY(-1px);
    color: white;
  }

  /* ---------- PAGINATION ---------- */
  .pagination-custom .page-link {
    background-color: rgba(17, 24, 39, 0.6);
    border: 1px solid var(--panel-border);
    color: var(--text-secondary);
    font-family: 'Outfit', sans-serif;
    font-weight: 600;
    padding: 0.6rem 1.1rem;
    border-radius: 10px;
    transition: var(--transition-smooth);
  }

  .pagination-custom .page-link:hover {
    background-color: rgba(26, 34, 54, 0.85);
    color: white;
    border-color: var(--color-primary);
  }

  .pagination-custom .page-item.active .page-link {
    background: var(--gradient-primary);
    border-color: transparent;
    color: white;
    box-shadow: 0 4px 12px rgba(99, 102, 241, 0.25);
  }

  .pagination-custom .page-item.disabled .page-link {
    background-color: rgba(17, 24, 39, 0.2);
    border-color: rgba(255, 255, 255, 0.03);
    color: var(--text-muted);
  }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('live-product-search');
    const sortSelect = document.getElementById('sort-order-select');
    const productsContainer = document.getElementById('products-list-row');
    const productWrappers = Array.from(document.querySelectorAll('.product-showcase-card-wrapper'));
    const paginationUl = document.getElementById('pagination-ul');
    const filteredCountText = document.getElementById('filtered-count');

    const ITEMS_PER_PAGE = 4;
    let currentPage = 1;
    let visibleWrappers = [...productWrappers];

    // 1. Filter, Sort and Paginate Main Loop
    function updateProductDisplay() {
        const query = searchInput.value.toLowerCase().trim();
        
        // Step A: Search Filter
        visibleWrappers = productWrappers.filter(card => {
            const title = card.getAttribute('data-title').toLowerCase();
            const desc = card.querySelector('.product-card-desc').textContent.toLowerCase();
            return title.includes(query) || desc.includes(query);
        });

        // Update product found count label
        filteredCountText.textContent = visibleWrappers.length;

        // Step B: Sort
        const sortValue = sortSelect.value;
        if (sortValue === 'price-asc') {
            visibleWrappers.sort((a, b) => parseFloat(a.getAttribute('data-price')) - parseFloat(b.getAttribute('data-price')));
        } else if (sortValue === 'price-desc') {
            visibleWrappers.sort((a, b) => parseFloat(b.getAttribute('data-price')) - parseFloat(a.getAttribute('data-price')));
        } else if (sortValue === 'title-asc') {
            visibleWrappers.sort((a, b) => a.getAttribute('data-title').localeCompare(b.getAttribute('data-title')));
        } else {
            // default sorting by initial index
            visibleWrappers.sort((a, b) => parseInt(a.getAttribute('data-index')) - parseInt(b.getAttribute('data-index')));
        }

        // Hide all products first
        productWrappers.forEach(card => card.style.display = 'none');

        // Step C: Paginate
        const totalItems = visibleWrappers.length;
        const totalPages = Math.ceil(totalItems / ITEMS_PER_PAGE) || 1;

        if (currentPage > totalPages) {
            currentPage = totalPages;
        }

        const startIndex = (currentPage - 1) * ITEMS_PER_PAGE;
        const endIndex = startIndex + ITEMS_PER_PAGE;

        // Show items for the current page
        const itemsToDisplay = visibleWrappers.slice(startIndex, endIndex);
        itemsToDisplay.forEach(card => {
            card.style.display = '';
            productsContainer.appendChild(card); // Keep domestic ordering in container
        });

        // Render Pagination Controls
        renderPagination(totalPages);
    }

    // 2. Render dynamic pagination controls
    function renderPagination(totalPages) {
        paginationUl.innerHTML = '';

        if (totalPages <= 1) {
            return; // No need for pagination if only 1 page
        }

        // Previous button
        const prevLi = document.createElement('li');
        prevLi.className = `page-item ${currentPage === 1 ? 'disabled' : ''}`;
        prevLi.innerHTML = `<a class="page-link" href="#" aria-label="Previous"><i class="bi bi-chevron-left"></i></a>`;
        if (currentPage > 1) {
            prevLi.addEventListener('click', (e) => {
                e.preventDefault();
                currentPage--;
                updateProductDisplay();
                window.scrollTo({ top: 180, behavior: 'smooth' });
            });
        }
        paginationUl.appendChild(prevLi);

        // Page Numbers
        for (let i = 1; i <= totalPages; i++) {
            const pageLi = document.createElement('li');
            pageLi.className = `page-item ${currentPage === i ? 'active' : ''}`;
            pageLi.innerHTML = `<a class="page-link" href="#">${i}</a>`;
            pageLi.addEventListener('click', (e) => {
                e.preventDefault();
                currentPage = i;
                updateProductDisplay();
                window.scrollTo({ top: 180, behavior: 'smooth' });
            });
            paginationUl.appendChild(pageLi);
        }

        // Next button
        const nextLi = document.createElement('li');
        nextLi.className = `page-item ${currentPage === totalPages ? 'disabled' : ''}`;
        nextLi.innerHTML = `<a class="page-link" href="#" aria-label="Next"><i class="bi bi-chevron-right"></i></a>`;
        if (currentPage < totalPages) {
            nextLi.addEventListener('click', (e) => {
                e.preventDefault();
                currentPage++;
                updateProductDisplay();
                window.scrollTo({ top: 180, behavior: 'smooth' });
            });
        }
        paginationUl.appendChild(nextLi);
    }

    // Event Listeners
    if (searchInput) {
        searchInput.addEventListener('input', () => {
            currentPage = 1; // Reset to page 1 on search
            updateProductDisplay();
        });
    }
    if (sortSelect) {
        sortSelect.addEventListener('change', () => {
            currentPage = 1; // Reset to page 1 on sort
            updateProductDisplay();
        });
    }

    // Initial render
    updateProductDisplay();
});
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.MainLayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\user1\Desktop\ShopLicSoft\resources\views/pages/Category.blade.php ENDPATH**/ ?>