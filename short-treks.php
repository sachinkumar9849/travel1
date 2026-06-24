<?php include 'include/header.php'; ?>

<style>
/* Short Treks Page Styles */
body {
    background-color: #F8F9FA;
    font-family: 'Inter', sans-serif;
}

/* Hero Banner */
.st-hero {
    background: #0D233A; /* Dark navy background */
    padding: 60px 0;
    color: #fff;
    position: relative;
    overflow: hidden;
}
/* Optional background decorative circles */
.st-hero::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -10%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0) 70%);
    border-radius: 50%;
}
.st-breadcrumbs {
    font-size: 12px;
    color: rgba(255,255,255,0.6);
    margin-bottom: 20px;
}
.st-breadcrumbs a {
    color: rgba(255,255,255,0.6);
    text-decoration: none;
}
.st-category {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #4CB5F5; /* light blue */
    text-transform: uppercase;
    margin-bottom: 10px;
}
.st-title {
    font-family: 'Newsreader', serif;
    font-size: 48px;
    font-weight: 500;
    margin-bottom: 20px;
}
.st-title span {
    font-style: italic;
    color: #C79A42; /* Gold */
}
.st-desc {
    font-size: 15px;
    line-height: 1.6;
    color: rgba(255,255,255,0.8);
    max-width: 500px;
}

/* Stat Boxes */
.st-stats-grid {
    display: flex;
    gap: 15px;
    justify-content: flex-end;
    align-items: center;
    height: 100%;
}
.st-stat-box {
    background: rgba(255,255,255,0.05);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    padding: 20px 15px;
    text-align: center;
    min-width: 100px;
}
.st-stat-val {
    font-family: 'Newsreader', serif;
    font-size: 28px;
    font-style: italic;
    color: #C79A42;
    margin-bottom: 5px;
    line-height: 1;
}
.st-stat-label {
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 1px;
    color: rgba(255,255,255,0.6);
    text-transform: uppercase;
}

/* Filter Bar */
.st-filter-bar {
    background: #fff;
    border-bottom: 1px solid #EAEAEA;
    padding: 15px 0;
    margin-bottom: 40px;
}
.st-filter-group {
    display: flex;
    align-items: center;
    gap: 15px;
}
.st-filter-label {
    font-size: 11px;
    font-weight: 700;
    color: #888;
    letter-spacing: 1px;
    text-transform: uppercase;
}
.st-filter-pills {
    display: flex;
    gap: 8px;
}
.st-pill {
    padding: 6px 16px;
    border-radius: 20px;
    border: 1px solid #EAEAEA;
    background: #fff;
    color: #333;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    transition: all 0.2s;
}
.st-pill:hover {
    border-color: #0D233A;
}
.st-pill.active {
    background: #0D233A;
    color: #fff;
    border-color: #0D233A;
}
.st-filter-divider {
    width: 1px;
    height: 24px;
    background: #EAEAEA;
    margin: 0 15px;
}
.st-sort-select {
    border: 1px solid #EAEAEA;
    border-radius: 20px;
    padding: 6px 16px;
    font-size: 13px;
    font-weight: 600;
    color: #333;
    outline: none;
    background: #fff;
    min-width: 150px;
}

/* Trek Cards */
.trek-card {
    background: #fff;
    border-radius: 12px;
    border: 1px solid #EBEBEB;
    overflow: hidden;
    transition: box-shadow 0.3s;
    height: 100%;
    display: flex;
    flex-direction: column;
}
.trek-card:hover {
    box-shadow: 0 8px 25px rgba(0,0,0,0.06);
}
.trek-img-wrap {
    position: relative;
    height: 220px;
    width: 100%;
}
/* Placeholder gradients for images based on screenshot */
.bg-brown { background: linear-gradient(to bottom, #7a6b58, #4a3e30); }
.bg-blue { background: linear-gradient(to bottom, #44566c, #263345); }
.bg-purple { background: linear-gradient(to bottom, #4e3b5e, #2b1f38); }
.bg-green1 { background: linear-gradient(to bottom, #59744f, #314529); }
.bg-green2 { background: linear-gradient(to bottom, #3b5e4a, #1f382a); }
.bg-brown2 { background: linear-gradient(to bottom, #825a4d, #4d3329); }

.trek-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    padding: 4px 10px;
    border-radius: 4px;
    font-size: 10px;
    font-weight: 700;
    color: #fff;
    letter-spacing: 1px;
    text-transform: uppercase;
    z-index: 2;
}
.badge-easy { background: #3A8B71; }
.badge-mod { background: #C79A42; }

.trek-body {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}
.trek-region {
    font-size: 10px;
    font-weight: 700;
    color: #3A8B71;
    letter-spacing: 1px;
    text-transform: uppercase;
    margin-bottom: 8px;
}
.trek-title {
    font-family: 'Newsreader', serif;
    font-size: 22px;
    font-weight: 600;
    color: #0D233A;
    margin-bottom: 12px;
    line-height: 1.3;
}
.trek-desc {
    font-size: 13px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    flex-grow: 1;
}
.trek-meta {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
}
.meta-item {
    font-size: 12px;
    font-weight: 600;
    color: #0D233A;
    display: flex;
    align-items: center;
    gap: 5px;
}
.meta-item i {
    color: #3A8B71;
}
.trek-seasons {
    display: flex;
    gap: 8px;
    margin-bottom: 25px;
    flex-wrap: wrap;
}
.season-pill {
    font-size: 10px;
    font-weight: 600;
    padding: 3px 10px;
    border-radius: 10px;
    background: #F4F4F4;
    color: #666;
}
.season-pill.s-spring { color: #3A8B71; background: #EAF4F1; }
.season-pill.s-autumn { color: #4CB5F5; background: #EDF7FE; }

.trek-footer {
    border-top: 1px solid #EAEAEA;
    padding-top: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.trek-price {
    font-size: 22px;
    font-weight: 700;
    color: #0D233A;
}
.trek-price span {
    font-size: 12px;
    font-weight: 500;
    color: #888;
}
.btn-view {
    background: #0D233A;
    color: #fff;
    border: none;
    padding: 8px 18px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    transition: background 0.2s;
}
.btn-view:hover {
    background: #1a3855;
    color: #fff;
}
</style>

<!-- Hero Banner -->
<section class="st-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="st-breadcrumbs">
                    <a href="#">Home</a> &rsaquo; <a href="#">Treks</a> &rsaquo; <strong>Short Treks</strong>
                </div>
                <div class="st-category">TREK CATEGORY</div>
                <h1 class="st-title">Short Treks <span>in Nepal</span></h1>
                <p class="st-desc">
                    Perfect for those with limited time — these 3 to 7-day treks deliver big Himalayan views, authentic village experiences, and unforgettable mountain moments without the long commitment.
                </p>
            </div>
            <div class="col-lg-5">
                <div class="st-stats-grid">
                    <div class="st-stat-box">
                        <div class="st-stat-val">12</div>
                        <div class="st-stat-label">TREKS</div>
                    </div>
                    <div class="st-stat-box">
                        <div class="st-stat-val">3–7</div>
                        <div class="st-stat-label">DAYS</div>
                    </div>
                    <div class="st-stat-box">
                        <div class="st-stat-val">$250</div>
                        <div class="st-stat-label">FROM (PP)</div>
                    </div>
                    <div class="st-stat-box">
                        <div class="st-stat-val">4,500</div>
                        <div class="st-stat-label">MAX ALT. (M)</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Filter Bar -->
<div class="st-filter-bar">
    <div class="container">
        <div class="d-flex align-items-center flex-wrap gap-3">
            
            <div class="st-filter-group">
                <span class="st-filter-label">DIFFICULTY</span>
                <div class="st-filter-pills">
                    <a href="#" class="st-pill active">All</a>
                    <a href="#" class="st-pill">Easy</a>
                    <a href="#" class="st-pill">Moderate</a>
                </div>
            </div>

            <div class="st-filter-divider d-none d-md-block"></div>

            <div class="st-filter-group">
                <span class="st-filter-label">DURATION</span>
                <div class="st-filter-pills">
                    <a href="#" class="st-pill active">All</a>
                    <a href="#" class="st-pill">1–3 Days</a>
                    <a href="#" class="st-pill">4–5 Days</a>
                    <a href="#" class="st-pill">6–7 Days</a>
                </div>
            </div>

            <div class="st-filter-divider d-none d-md-block"></div>

            <div class="st-filter-group ms-auto">
                <span class="st-filter-label">SORT</span>
                <select class="st-sort-select">
                    <option>Most Popular</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Duration: Short to Long</option>
                </select>
            </div>

        </div>
    </div>
</div>

<!-- Treks Grid -->
<main class="container pb-5">
    <div class="row g-4">
        
        <!-- Trek Card 1 -->
        <div class="col-lg-4 col-md-6">
            <div class="trek-card">
                <div class="trek-img-wrap bg-brown">
                    <span class="trek-badge badge-easy">EASY</span>
                </div>
                <div class="trek-body">
                    <div class="trek-region">ANNAPURNA REGION</div>
                    <h3 class="trek-title">Ghorepani Poon Hill Trek</h3>
                    <p class="trek-desc">Stunning sunrise views over Annapurna and Dhaulagiri ranges from the iconic Poon Hill viewpoint at 3,210m.</p>
                    
                    <div class="trek-meta">
                        <div class="meta-item"><i class="fa-regular fa-calendar"></i> 5 Days</div>
                        <div class="meta-item"><i class="fa-solid fa-mountain"></i> 3,210m</div>
                    </div>
                    
                    <div class="trek-seasons">
                        <span class="season-pill s-spring">Spring</span>
                        <span class="season-pill s-autumn">Autumn</span>
                        <span class="season-pill">Winter</span>
                    </div>
                    
                    <div class="trek-footer">
                        <div class="trek-price">$650 <span>/ person</span></div>
                        <a href="#" class="btn-view">View Trek <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trek Card 2 -->
        <div class="col-lg-4 col-md-6">
            <div class="trek-card">
                <div class="trek-img-wrap bg-blue">
                    <span class="trek-badge badge-mod">MODERATE</span>
                </div>
                <div class="trek-body">
                    <div class="trek-region">ANNAPURNA REGION</div>
                    <h3 class="trek-title">Mardi Himal Trek</h3>
                    <p class="trek-desc">An off-the-beaten-path gem offering intimate views of Machhapuchhre (Fishtail) through pristine forests and high ridges.</p>
                    
                    <div class="trek-meta">
                        <div class="meta-item"><i class="fa-regular fa-calendar"></i> 7 Days</div>
                        <div class="meta-item"><i class="fa-solid fa-mountain"></i> 4,500m</div>
                    </div>
                    
                    <div class="trek-seasons">
                        <span class="season-pill s-spring">Spring</span>
                        <span class="season-pill s-autumn">Autumn</span>
                        <span class="season-pill">Winter</span>
                    </div>
                    
                    <div class="trek-footer">
                        <div class="trek-price">$850 <span>/ person</span></div>
                        <a href="#" class="btn-view">View Trek <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trek Card 3 -->
        <div class="col-lg-4 col-md-6">
            <div class="trek-card">
                <div class="trek-img-wrap bg-purple">
                    <span class="trek-badge badge-mod">MODERATE</span>
                </div>
                <div class="trek-body">
                    <div class="trek-region">ANNAPURNA REGION</div>
                    <h3 class="trek-title">Khopra Ridge Trek</h3>
                    <p class="trek-desc">Panoramic Annapurna and Dhaulagiri views with far fewer trekkers than popular routes — a true hidden gem.</p>
                    
                    <div class="trek-meta">
                        <div class="meta-item"><i class="fa-regular fa-calendar"></i> 7 Days</div>
                        <div class="meta-item"><i class="fa-solid fa-mountain"></i> 3,660m</div>
                    </div>
                    
                    <div class="trek-seasons">
                        <span class="season-pill s-spring">Spring</span>
                        <span class="season-pill s-autumn">Autumn</span>
                        <span class="season-pill">Winter</span>
                    </div>
                    
                    <div class="trek-footer">
                        <div class="trek-price">$750 <span>/ person</span></div>
                        <a href="#" class="btn-view">View Trek <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trek Card 4 -->
        <div class="col-lg-4 col-md-6">
            <div class="trek-card">
                <div class="trek-img-wrap bg-green1">
                    <span class="trek-badge badge-easy">EASY</span>
                </div>
                <div class="trek-body">
                    <div class="trek-region">ANNAPURNA REGION</div>
                    <h3 class="trek-title">Australian Camp Trek</h3>
                    <p class="trek-desc">A gentle overnight trek perfect for beginners, offering sweeping views of the Annapurna range from a grassy meadow.</p>
                    
                    <div class="trek-meta">
                        <div class="meta-item"><i class="fa-regular fa-calendar"></i> 3 Days</div>
                        <div class="meta-item"><i class="fa-solid fa-mountain"></i> 2,060m</div>
                    </div>
                    
                    <div class="trek-seasons">
                        <span class="season-pill s-spring">Spring</span>
                        <span class="season-pill s-autumn">Autumn</span>
                        <span class="season-pill">Winter</span>
                        <span class="season-pill">Monsoon</span>
                    </div>
                    
                    <div class="trek-footer">
                        <div class="trek-price">$350 <span>/ person</span></div>
                        <a href="#" class="btn-view">View Trek <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trek Card 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="trek-card">
                <div class="trek-img-wrap bg-green2">
                    <span class="trek-badge badge-easy">EASY</span>
                </div>
                <div class="trek-body">
                    <div class="trek-region">ANNAPURNA REGION</div>
                    <h3 class="trek-title">Ghandruk Loop Trek</h3>
                    <p class="trek-desc">Explore the beautiful Gurung village of Ghandruk with stunning Annapurna South and Machhapuchhre views.</p>
                    
                    <div class="trek-meta">
                        <div class="meta-item"><i class="fa-regular fa-calendar"></i> 4 Days</div>
                        <div class="meta-item"><i class="fa-solid fa-mountain"></i> 2,012m</div>
                    </div>
                    
                    <div class="trek-seasons">
                        <span class="season-pill s-spring">Spring</span>
                        <span class="season-pill s-autumn">Autumn</span>
                        <span class="season-pill">Winter</span>
                    </div>
                    
                    <div class="trek-footer">
                        <div class="trek-price">$420 <span>/ person</span></div>
                        <a href="#" class="btn-view">View Trek <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trek Card 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="trek-card">
                <div class="trek-img-wrap bg-brown2">
                    <span class="trek-badge badge-easy">EASY</span>
                </div>
                <div class="trek-body">
                    <div class="trek-region">KATHMANDU VALLEY REGION</div>
                    <h3 class="trek-title">Chisapani Nagarkot Trek</h3>
                    <p class="trek-desc">A rewarding short trek near Kathmandu with panoramic Himalayan sunrises from Nagarkot and lush Shivapuri national park trails.</p>
                    
                    <div class="trek-meta">
                        <div class="meta-item"><i class="fa-regular fa-calendar"></i> 3 Days</div>
                        <div class="meta-item"><i class="fa-solid fa-mountain"></i> 2,175m</div>
                    </div>
                    
                    <div class="trek-seasons">
                        <span class="season-pill s-spring">Spring</span>
                        <span class="season-pill s-autumn">Autumn</span>
                        <span class="season-pill">Winter</span>
                    </div>
                    
                    <div class="trek-footer">
                        <div class="trek-price">$280 <span>/ person</span></div>
                        <a href="#" class="btn-view">View Trek <i class="fa-solid fa-arrow-right-long ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include 'include/footer.php'; ?>
