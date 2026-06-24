<?php include 'include/header.php'; ?>

<style>
    /* Team Section Styles */
    .team-section {
        background-color: #fff;
        padding: 80px 0;
    }

    .team-section-title {
        font-family: 'Newsreader', serif;
        color: #012A47;
        font-size: 32px;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    .team-card {
        background: #fff;
        border: 1px solid #EBEBEB;
        border-radius: 12px;

        height: 100%;
        transition: box-shadow 0.3s ease;
    }

    .team-card:hover {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    }

    .team-img-wrap {
        width: 100%;
        aspect-ratio: 4/5;
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 15px;
        background-color: #e9ecef;
    }

    .team-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .team-info {
        padding: 0px 10px 10px 13px;
    }

    .team-name {
        color: #012A47;
        font-family: 'Newsreader', serif;
        font-size: 20px;
        font-weight: 700;
        margin-bottom: 5px;
    }

    .team-role {
        color: #2F8876;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-bottom: 0;
    }
</style>

<main class="team-page">
    <section class="heli-banner-section">
        <img src="image/team/teamBg.png" alt="Everest Helicopter Tour Banner" class="heli-banner-img">

    </section>
    <section class="team-section">
        <div class="container">
            <h2 class="team-section-title text-center">OUR ENERGETIC FAMILY MEMBER</h2>

            <div class="row g-4">
                <!-- Team Member 1 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-card">
                        <div class="team-img-wrap">
                            <img src="image/team/team1.svg" alt="Mohan Raj Bhandari" class="img-fluid team-img">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Mohan Raj Bhandari</h4>
                            <p class="team-role">FOUNDER/MANAGING DIRECTOR</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-card">
                        <div class="team-img-wrap">
                            <img src="image/team/team1.svg" alt="Ganesh Adhikari" class="img-fluid team-img">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Ganesh Adhikari</h4>
                            <p class="team-role">MARKETING OFFICER</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-card">
                        <div class="team-img-wrap">
                            <img src="image/team/team1.svg" alt="Nandika Thapa" class="img-fluid team-img">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Nandika Thapa</h4>
                            <p class="team-role">SOCIAL MEDIA MANAGER</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-card">
                        <div class="team-img-wrap">
                            <img src="image/team/team1.svg" alt="Jeewan Tamang" class="img-fluid team-img">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Jeewan Tamang</h4>
                            <p class="team-role">GUIDE AND CLIMBER</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-card">
                        <div class="team-img-wrap">
                            <img src="image/team/team1.svg" alt="Mohan Raj Bhandari" class="img-fluid team-img">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Mohan Raj Bhandari</h4>
                            <p class="team-role">FOUNDER/MANAGING DIRECTOR</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 6 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-card">
                        <div class="team-img-wrap">
                            <img src="image/team/team1.svg" alt="Ganesh Adhikari" class="img-fluid team-img">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Ganesh Adhikari</h4>
                            <p class="team-role">MARKETING OFFICER</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 7 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-card">
                        <div class="team-img-wrap">
                            <img src="image/team/team1.svg" alt="Nandika Thapa" class="img-fluid team-img">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Nandika Thapa</h4>
                            <p class="team-role">SOCIAL MEDIA MANAGER</p>
                        </div>
                    </div>
                </div>

                <!-- Team Member 8 -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="team-card">
                        <div class="team-img-wrap">
                            <img src="image/team/team1.svg" alt="Jeewan Tamang" class="img-fluid team-img">
                        </div>
                        <div class="team-info">
                            <h4 class="team-name">Jeewan Tamang</h4>
                            <p class="team-role">GUIDE AND CLIMBER</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'include/footer.php'; ?>