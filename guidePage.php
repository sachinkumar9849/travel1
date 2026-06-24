<?php include 'include/header.php'; ?>

<style>
/* Guide Page Styles */
body {
    background-color: #F8F9FA;
}
.guide-page {
    padding: 40px 0;
    font-family: 'Inter', sans-serif;
}
/* Top Progress Bar */
.progress-header {
    background: #fff;
    padding: 20px 0;
    border-bottom: 1px solid #EAEAEA;
    margin-bottom: 40px;
}
.progress-steps {
    display: flex;
    justify-content: space-between;
    max-width: 900px;
    margin: 0 auto;
    position: relative;
}
.progress-step {
    display: flex;
    align-items: center;
    gap: 10px;
    z-index: 2;
    background: #fff;
    padding: 0 10px;
}
.step-num {
    width: 24px;
    height: 24px;
    border-radius: 50%;
    background: #EAEAEA;
    color: #999;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: 600;
}
.step-num.active {
    background: #C79A42;
    color: #fff;
}
.step-text {
    font-size: 13px;
    font-weight: 500;
    color: #999;
}
.step-text.active {
    color: #C79A42;
    font-weight: 600;
}
.progress-line {
    position: absolute;
    top: 12px;
    left: 0;
    right: 0;
    height: 2px;
    background: #EAEAEA;
    z-index: 1;
}
.progress-line-active {
    position: absolute;
    top: 12px;
    left: 0;
    width: 25%;
    height: 2px;
    background: #C79A42;
    z-index: 1;
}

/* Step Card Styles */
.step-card {
    background: #fff;
    border-radius: 12px;
    border: 1px solid #EBEBEB;
    padding: 30px;
    margin-bottom: 25px;
    position: relative;
    box-shadow: 0 2px 10px rgba(0,0,0,0.02);
}
.step-card::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
}
.step-card.border-gold::before { background-color: #C79A42; }
.step-card.border-green::before { background-color: #00C853; }
.step-card.border-lightgreen::before { background-color: #A2E2A4; }
.step-card.border-blue::before { background-color: #4CB5F5; }
.step-card.border-darkgreen::before { background-color: #173A23; }

.step-label {
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 5px;
}
.step-label.text-gold { color: #C79A42; }
.step-label.text-green { color: #00C853; }
.step-label.text-blue { color: #4CB5F5; }

.step-title {
    font-size: 24px;
    font-weight: 700;
    color: #012A47;
    margin-bottom: 5px;
    font-family: 'Newsreader', serif;
}
.step-desc {
    font-size: 14px;
    color: #666;
    margin-bottom: 25px;
}

/* Selection Boxes */
.sel-box {
    border: 1px solid #EAEAEA;
    border-radius: 8px;
    padding: 15px;
    background: #fff;
    cursor: pointer;
    transition: all 0.2s;
    display: flex;
    align-items: center;
    gap: 15px;
    height: 100%;
}
.sel-box:hover {
    border-color: #C79A42;
}
.sel-box.active {
    background: #012A47;
    border-color: #C79A42;
    color: #fff;
}
.sel-box.active .sel-title, .sel-box.active .sel-desc {
    color: #fff;
}
.sel-icon {
    font-size: 24px;
    width: 40px;
    text-align: center;
}
.sel-info {
    flex: 1;
}
.sel-title {
    font-size: 15px;
    font-weight: 600;
    color: #012A47;
    margin-bottom: 2px;
}
.sel-desc {
    font-size: 12px;
    color: #888;
    line-height: 1.3;
}
.sel-check {
    color: #012A47;
    font-size: 18px;
    opacity: 0;
}
.sel-box.active .sel-check {
    opacity: 1;
    color: #fff;
}
.sel-box.active-light {
    border-color: #C79A42;
    background: #FDFBF7;
}

/* Custom Inputs */
.custom-input {
    border: 1px solid #EAEAEA;
    border-radius: 8px;
    padding: 12px 15px;
    font-size: 14px;
    color: #333;
    width: 100%;
    outline: none;
}
.custom-input:focus {
    border-color: #C79A42;
}
.input-label {
    font-size: 12px;
    color: #888;
    margin-bottom: 5px;
    display: block;
}

/* Buttons and Counters */
.btn-pill {
    border: 1px solid #EAEAEA;
    border-radius: 20px;
    padding: 8px 20px;
    background: #fff;
    color: #012A47;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    text-align: center;
}
.btn-pill.active {
    background: #C79A42;
    color: #fff;
    border-color: #C79A42;
}
.counter-box {
    display: flex;
    align-items: center;
    gap: 15px;
    background: #F8F9FA;
    border-radius: 8px;
    padding: 8px 15px;
    border: 1px solid #EAEAEA;
}
.counter-box.bg-gold {
    background: #C79A42;
    border-color: #C79A42;
    color: #fff;
}
.counter-btn {
    width: 28px;
    height: 28px;
    border-radius: 50%;
    border: none;
    background: #012A47;
    color: #fff;
    font-size: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}
.counter-box.bg-gold .counter-btn {
    background: #012A47;
}
.counter-box.bg-gold .counter-btn.plus {
    background: #fff;
    color: #C79A42;
}
.counter-val {
    font-size: 16px;
    font-weight: 600;
    min-width: 20px;
    text-align: center;
}

/* Difficulty Bars */
.diff-bar {
    height: 4px;
    background: #EAEAEA;
    border-radius: 2px;
    margin-top: 10px;
    overflow: hidden;
}
.diff-bar-fill {
    height: 100%;
}

/* Final Section */
.final-section {
    background: #012A47;
    padding: 50px 0;
    text-align: center;
    color: #fff;
}
.final-title {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 10px;
}
.final-desc {
    font-size: 16px;
    color: #EAEAEA;
    margin-bottom: 30px;
}
.email-form {
    max-width: 600px;
    margin: 0 auto;
    display: flex;
    gap: 15px;
}
.email-input {
    flex: 1;
    padding: 15px 20px;
    border-radius: 30px;
    border: none;
    font-size: 16px;
}
.btn-submit {
    background: #C79A42;
    color: #fff;
    border: none;
    border-radius: 30px;
    padding: 15px 30px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}
.privacy-text {
    font-size: 12px;
    color: #999;
    margin-top: 15px;
}

</style>

<div class="progress-header">
    <div class="container">
        <div class="progress-steps">
            <div class="progress-line"></div>
            <div class="progress-line-active"></div>
            <div class="progress-step">
                <div class="step-num active">1</div>
                <div class="step-text active">Trip Details</div>
            </div>
            <div class="progress-step">
                <div class="step-num">2</div>
                <div class="step-text">Preferences</div>
            </div>
            <div class="progress-step">
                <div class="step-num">3</div>
                <div class="step-text">Requirements</div>
            </div>
            <div class="progress-step">
                <div class="step-num">4</div>
                <div class="step-text">Your Plan</div>
            </div>
        </div>
    </div>
</div>

<main class="guide-page">
    <div class="container" style="max-width: 1000px;">
        
        <!-- STEP 1 -->
        <div class="step-card border-gold">
            <div class="step-label text-gold">STEP 1</div>
            <h3 class="step-title">Trip Duration & Dates</h3>
            <p class="step-desc">When are you planning to visit Nepal?</p>
            
            <div class="row align-items-center g-3">
                <div class="col-md-3">
                    <div class="custom-input" style="border-color: #C79A42; padding: 8px 15px;">
                        <span class="input-label">Arrival Date</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>dd / mm / yyyy</span>
                            <i class="fa-solid fa-plane-arrival text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-auto text-muted"><i class="fa-solid fa-arrow-right text-gold"></i></div>
                <div class="col-md-3">
                    <div class="custom-input" style="padding: 8px 15px;">
                        <span class="input-label">Departure Date</span>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>dd / mm / yyyy</span>
                            <i class="fa-solid fa-plane-departure text-muted"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 ms-auto">
                    <div class="d-flex flex-column gap-2">
                        <div class="btn-pill">1 Week</div>
                        <div class="btn-pill active">1 Week +</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-box bg-gold justify-content-between">
                        <span style="font-size: 14px; font-weight: 600;">No. Of Days</span>
                        <div class="d-flex align-items-center gap-2">
                            <button class="counter-btn"><i class="fa-solid fa-minus"></i></button>
                            <span class="counter-val">6</span>
                            <button class="counter-btn plus"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 2 -->
        <div class="step-card border-green">
            <div class="step-label text-green">STEP 2</div>
            <h3 class="step-title">Travel Type & Group Size</h3>
            <p class="step-desc">Who's joining you on this adventure?</p>
            
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="sel-box active">
                        <div class="sel-icon">🚶</div>
                        <div class="sel-info">
                            <div class="sel-title">Solo</div>
                            <div class="sel-desc">Just me</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box">
                        <div class="sel-icon">💑</div>
                        <div class="sel-info">
                            <div class="sel-title">Couple/ Family</div>
                            <div class="sel-desc">Partners travelers/ family trip</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box">
                        <div class="sel-icon">🏕️</div>
                        <div class="sel-info">
                            <div class="sel-title">Group</div>
                            <div class="sel-desc">3+ people</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="counter-box justify-content-between" style="height: 100%;">
                        <span style="font-size: 14px; color: #888;">Number of People</span>
                        <div class="d-flex align-items-center gap-2">
                            <button class="counter-btn"><i class="fa-solid fa-minus"></i></button>
                            <span class="counter-val" style="color:#012A47;">1</span>
                            <button class="counter-btn" style="background:#C79A42;"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 3 -->
        <div class="step-card border-gold">
            <div class="step-label text-gold">STEP 3</div>
            <h3 class="step-title">Activity Type</h3>
            <p class="step-desc">What kind of adventure excites you? (select all that apply)</p>
            
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="sel-box active-light">
                        <div class="sel-icon">🥾</div>
                        <div class="sel-info">
                            <div class="sel-title">Trekking</div>
                            <div class="sel-desc">Multi-day trails</div>
                        </div>
                        <i class="fa-solid fa-circle-check sel-check" style="opacity:1; color:#012A47;"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box">
                        <div class="sel-icon">🗺️</div>
                        <div class="sel-info">
                            <div class="sel-title">Tours</div>
                            <div class="sel-desc">Cultural heritage/ Jeep Tour</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box active-light" style="border-color:#012A47;">
                        <div class="sel-icon">⛰️</div>
                        <div class="sel-info">
                            <div class="sel-title">Peak Climbing</div>
                            <div class="sel-desc">mountaineering, alpinism</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box">
                        <div class="sel-icon">🚁</div>
                        <div class="sel-info">
                            <div class="sel-title">Helicopter Tour</div>
                            <div class="sel-desc">Aerial sightseeing</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 4 -->
        <div class="step-card border-gold">
            <div class="step-label text-gold">STEP 4</div>
            <h3 class="step-title">Difficulty Level</h3>
            <p class="step-desc">Choose based on your fitness and trekking experience.</p>
            
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="sel-box d-block">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="sel-icon" style="width:auto; font-size: 20px;">🌿</div>
                            <div class="sel-info">
                                <div class="sel-title" style="font-size:14px;">Easy</div>
                                <div class="sel-desc" style="font-size:11px;">Gentle trails</div>
                                <div class="sel-desc" style="font-size:10px; color:#aaa;">Beginners & seniors</div>
                            </div>
                        </div>
                        <div class="diff-bar"><div class="diff-bar-fill" style="width: 25%; background: #00C853;"></div></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box d-block">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="sel-icon" style="width:auto; font-size: 20px;">👶</div>
                            <div class="sel-info">
                                <div class="sel-title" style="font-size:14px;">Child-Friendly</div>
                                <div class="sel-desc" style="font-size:11px;">Short trails</div>
                                <div class="sel-desc" style="font-size:10px; color:#aaa;">Families with kids</div>
                            </div>
                        </div>
                        <div class="diff-bar"><div class="diff-bar-fill" style="width: 50%; background: #4CB5F5;"></div></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box d-block active-light">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="sel-icon" style="width:auto; font-size: 20px;">🏃</div>
                            <div class="sel-info">
                                <div class="sel-title" style="font-size:14px;">Moderate</div>
                                <div class="sel-desc" style="font-size:11px;">Some elevation</div>
                                <div class="sel-desc" style="font-size:10px; color:#aaa;">Good fitness needed</div>
                            </div>
                        </div>
                        <div class="diff-bar"><div class="diff-bar-fill" style="width: 75%; background: #C79A42;"></div></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box d-block">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="sel-icon" style="width:auto; font-size: 20px;">🧗</div>
                            <div class="sel-info">
                                <div class="sel-title" style="font-size:14px;">Challenging</div>
                                <div class="sel-desc" style="font-size:11px;">High altitude</div>
                                <div class="sel-desc" style="font-size:10px; color:#aaa;">Experienced trekkers</div>
                            </div>
                        </div>
                        <div class="diff-bar"><div class="diff-bar-fill" style="width: 100%; background: #FF3D00;"></div></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 5 -->
        <div class="step-card border-lightgreen" style="background:#F2FCF3;">
            <div class="step-label text-green">STEP 5</div>
            <h3 class="step-title">Budget Range</h3>
            <p class="step-desc">Per person, excluding international flights. All include accommodation & meals.</p>
            
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="sel-box d-block">
                        <span class="badge bg-success mb-2">Budget</span>
                        <div class="sel-title">Under $500</div>
                        <div class="sel-desc">Teahouse stays, local transport</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box d-block active-light">
                        <span class="badge bg-warning text-dark mb-2">Mid-Range</span>
                        <div class="sel-title">$5,00 - $5,000</div>
                        <div class="sel-desc">Comfortable lodges & guided tours</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box d-block">
                        <span class="badge bg-dark mb-2">Premium</span>
                        <div class="sel-title">$6,000 - $10,000</div>
                        <div class="sel-desc">Private guide, quality lodges</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box d-block">
                        <span class="badge bg-warning text-dark mb-2" style="background-color:#f8e6a0!important;">Luxury</span>
                        <div class="sel-title">Ask for Quotation</div>
                        <div class="sel-desc">Helicopter access, 5-star experience</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 6 -->
        <div class="step-card border-blue">
            <div class="step-label text-blue">STEP 6</div>
            <h3 class="step-title">Preferred Season / Travel Window</h3>
            <p class="step-desc">When would you ideally like to travel to Nepal?</p>
            
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="sel-box justify-content-between p-3">
                        <div class="d-flex align-items-center gap-2">
                            <div style="width:10px; height:10px; border-radius:50%; background:#00C853;"></div>
                            <div class="sel-title mb-0" style="font-size:14px;">Spring</div>
                            <div class="sel-desc" style="font-size:10px;">Mar-May</div>
                        </div>
                        <div class="sel-desc" style="font-size:10px;">Best trekking season</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box justify-content-between p-3">
                        <div class="d-flex align-items-center gap-2">
                            <div style="width:10px; height:10px; border-radius:50%; background:#4CB5F5;"></div>
                            <div class="sel-title mb-0" style="font-size:14px;">Monsoon</div>
                            <div class="sel-desc" style="font-size:10px;">Jun-Aug</div>
                        </div>
                        <div class="sel-desc" style="font-size:10px;">Lush, fewer crowds</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box justify-content-between p-3 active-light">
                        <div class="d-flex align-items-center gap-2">
                            <div style="width:10px; height:10px; border-radius:50%; background:#C79A42;"></div>
                            <div class="sel-title mb-0" style="font-size:14px;">Autumn</div>
                            <div class="sel-desc" style="font-size:10px;">Sep-Nov</div>
                        </div>
                        <div class="sel-desc" style="font-size:10px;">Peak season</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box justify-content-between p-3">
                        <div class="d-flex align-items-center gap-2">
                            <div style="width:10px; height:10px; border-radius:50%; background:#012A47;"></div>
                            <div class="sel-title mb-0" style="font-size:14px;">Winter</div>
                            <div class="sel-desc" style="font-size:10px;">Dec-Feb</div>
                        </div>
                        <div class="sel-desc" style="font-size:10px;">Cold, quiet trails</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 7 -->
        <div class="step-card border-darkgreen" style="background:#A3C2A4;">
            <div class="step-label text-dark" style="color:#012A47!important;">STEP 7</div>
            <h3 class="step-title">Accommodation Preference</h3>
            <p class="step-desc" style="color:#333;">What kind of accommodation suits your travel style?</p>
            
            <div class="row g-3">
                <div class="col-md-3">
                    <div class="sel-box active" style="background:#012A47;">
                        <div class="sel-icon">🏠</div>
                        <div class="sel-info">
                            <div class="sel-title text-white">Teahouse</div>
                            <div class="sel-desc text-light">Local guesthouses</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box">
                        <div class="sel-icon">🏨</div>
                        <div class="sel-info">
                            <div class="sel-title">Hotel</div>
                            <div class="sel-desc">within City and some trails only</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box">
                        <div class="sel-icon">🏰</div>
                        <div class="sel-info">
                            <div class="sel-title">Luxury Resort</div>
                            <div class="sel-desc">5-star experience</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box">
                        <div class="sel-icon">⛺</div>
                        <div class="sel-info">
                            <div class="sel-title">Camping</div>
                            <div class="sel-desc">Wilderness camping</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 8 -->
        <div class="step-card border-gold">
            <div class="step-label text-gold">STEP 8</div>
            <h3 class="step-title">Guide, Porter & Language Preference</h3>
            
            <div class="row g-3 mt-2">
                <div class="col-md-3">
                    <div class="sel-box p-3 align-items-center">
                        <input type="radio" name="guide" class="me-2">
                        <div class="sel-info">
                            <div class="sel-title mb-0" style="font-size:14px;">No Guide</div>
                            <div class="sel-desc" style="font-size:11px;">Self-guided trek</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box active p-3 align-items-center">
                        <input type="radio" name="guide" checked class="me-2">
                        <div class="sel-info">
                            <div class="sel-title text-white mb-0" style="font-size:14px;">Licensed Guide</div>
                            <div class="sel-desc text-light" style="font-size:11px;">NTB certified guide</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box p-3 align-items-center">
                        <input type="radio" name="language" class="me-2">
                        <div class="sel-info w-100">
                            <div class="sel-desc" style="font-size:11px;">Private Guide Language:</div>
                            <select class="form-select form-select-sm mt-1" style="border:none; padding:0; font-weight:600; color:#012A47; box-shadow:none;">
                                <option>English</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sel-box p-3 align-items-center justify-content-between">
                        <div class="sel-info">
                            <div class="sel-desc" style="font-size:11px;">Request a Porter?</div>
                            <div class="d-flex align-items-center gap-2 mt-1">
                                <div class="form-check form-switch m-0">
                                    <input class="form-check-input" type="checkbox" checked style="background-color:#00C853; border-color:#00C853; width:30px; height:15px;">
                                </div>
                                <span class="sel-title mb-0" style="font-size:14px;">Yes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 9 -->
        <div class="step-card border-gold">
            <div class="step-label text-gold">STEP 9</div>
            <h3 class="step-title">Special Requirements & Health Information</h3>
            <p class="step-desc">Help us tailor your trip for safety, comfort, and the best possible experience.</p>
            
            <div class="row g-4">
                <div class="col-md-6">
                    <span class="input-label fw-bold text-dark mb-2">Pre-Trip Requirements</span>
                    <textarea class="custom-input" rows="3" placeholder="E.g. Cradle for baby..."></textarea>
                </div>
                <div class="col-md-6">
                    <span class="input-label fw-bold text-dark mb-2">Health Conditions & Allergies</span>
                    <textarea class="custom-input" rows="3" placeholder="E.g. altitude sensitivity, asthma, nut allergy, mobility issues..."></textarea>
                </div>
            </div>
            
            <div class="mt-4">
                <span class="input-label fw-bold text-dark mb-2">Flag any concerns (select all that apply):</span>
                <div class="row g-2">
                    <div class="col-md-4">
                        <label class="d-flex align-items-center gap-2 text-muted" style="font-size:13px;"><input type="checkbox" class="form-check-input mt-0"> Fear of Heights</label>
                    </div>
                    <div class="col-md-4">
                        <label class="d-flex align-items-center gap-2 text-muted" style="font-size:13px;"><input type="checkbox" class="form-check-input mt-0"> Heart Conditions</label>
                    </div>
                    <div class="col-md-4">
                        <label class="d-flex align-items-center gap-2 text-muted" style="font-size:13px;"><input type="checkbox" class="form-check-input mt-0"> Pregnancy</label>
                    </div>
                    <div class="col-md-4">
                        <label class="d-flex align-items-center gap-2 text-muted" style="font-size:13px;"><input type="checkbox" class="form-check-input mt-0"> First High-Altitude Trip</label>
                    </div>
                    <div class="col-md-4">
                        <label class="d-flex align-items-center gap-2 text-muted" style="font-size:13px;"><input type="checkbox" class="form-check-input mt-0"> Chronic Medication</label>
                    </div>
                    <div class="col-md-4">
                        <label class="d-flex align-items-center gap-2 text-muted" style="font-size:13px;"><input type="checkbox" class="form-check-input mt-0"> No Concerns</label>
                    </div>
                </div>
            </div>
            
            <div class="mt-4">
                <span class="input-label fw-bold text-dark mb-2">Additional Requests / Specific Destinations</span>
                <input type="text" class="custom-input" placeholder="E.g. Must see Annapurna Base Camp, vegetarian meals, French-speaking guide...">
            </div>
        </div>

    </div>
</main>

<div class="final-section">
    <div class="container">
        <h2 class="final-title">You're One Step Away!</h2>
        <p class="final-desc">Enter your email address to receive your Personalised Nepal Itinerary</p>
        
        <form class="email-form">
            <div class="position-relative flex-grow-1">
                <i class="fa-regular fa-envelope position-absolute" style="left: 20px; top: 18px; color:#999;"></i>
                <input type="email" class="email-input w-100" placeholder="your@email.com" style="padding-left: 45px;">
            </div>
            <button type="submit" class="btn-submit">Get My Itinerary <i class="fa-solid fa-arrow-right ms-2"></i></button>
        </form>
        <div class="privacy-text">
            <i class="fa-solid fa-lock me-1"></i> No spam, ever. We respect your privacy.
        </div>
    </div>
</div>

<?php include 'include/footer.php'; ?>
