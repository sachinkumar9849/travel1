<?php include "include/header.php" ?>

<!-- ============================================================
     1. HERO
     ============================================================ -->
<section class="nn-hero">
  <div class="nn-hero__overlay"></div>
  <div class="nn-hero__inner">
    <div class="nn-hero__search-wrap">
      <form class="nn-search" role="search" onsubmit="return false;">
        <input type="text" class="nn-search__input"
          placeholder="Search your trip &mdash; Everest, Annapurna, Mustang&hellip;" aria-label="Search your trip" />
        <button type="submit" class="nn-search__btn" aria-label="Search">
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </form>
      <a href="guidePage.php" class="nn-hero__cta">Confused?&nbsp;We Guide You <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>



  <ul class="nn-hero__features">
    <div class="nn-hero__badge" aria-label="10 Years of Excellence">
      <img src="image/10.svg" alt="">
    </div>
    <li class="nn-feature"><span class="nn-feature__icon"><i class="fa-solid fa-route"></i></span><span
        class="nn-feature__label">Customizable Itineraries</span></li>
    <li class="nn-feature"><span class="nn-feature__icon"><i class="fa-solid fa-person-hiking"></i></span><span
        class="nn-feature__label">Guided Adventures</span></li>
    <li class="nn-feature"><span class="nn-feature__icon"><i class="fa-solid fa-mountain-sun"></i></span><span
        class="nn-feature__label">Local Trails</span></li>
    <li class="nn-feature"><span class="nn-feature__icon"><i class="fa-solid fa-seedling"></i></span><span
        class="nn-feature__label">Eco-Friendly Travel</span></li>
  </ul>
</section>


<!-- ============================================================
     2. DESTINATIONS
     ============================================================ -->
<section class="nn-dest nn-sec">
  <div class="container">
    <div class="row align-items-start g-4 nn-dest__head">
      <div class="col-lg-7">
        <span class="nn-eyebrow"><span class="nn-eyebrow__line"></span>Destinations</span>
        <h2 class="nn-dest__title">Three countries, <em>one</em><br /><em class="nn-green-i">Himalayan ridge.</em></h2>
      </div>
      <div class="col-lg-4 offset-lg-1">
        <p class="nn-lead">We build trips across the central Himalaya &mdash; from the Annapurna teahouses to the
          Tibetan plateau and the monasteries of Bhutan. Pick a country, or let us thread two together.</p>
      </div>
    </div>

    <div class="nn-rel">
      <div class="swiper nn-dest-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <article class="nn-dcard nn-dcard--photo"
              style="background-image:url('https://images.unsplash.com/photo-1486911278844-a81c5267e227?auto=format&amp;fit=crop&amp;w=1000&amp;q=80');">
              <div class="nn-dcard__shade"></div>
              <div class="nn-dcard__body">
                <span class="nn-dcard__badge">Our Home</span>
                <h3 class="nn-dcard__title">Nepal</h3>
                <p class="nn-dcard__desc">Eight of the world's fourteen 8,000-metre peaks. Teahouse trails,
                  restricted-area treks, and the only country where you can summit at dawn and be in jungle by dinner.
                </p>
                <div class="nn-dcard__foot"><span class="nn-dcard__meta">62 Trips &middot; 9 Regions</span><a href="short-treks.php"
                    class="nn-dcard__view">View <span class="nn-dcard__arrow"><i
                        class="fa-solid fa-arrow-right"></i></span></a></div>
              </div>
            </article>
          </div>
          <div class="swiper-slide">
            <article class="nn-dcard nn-dcard--photo"
              style="background-image:url('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&amp;fit=crop&amp;w=1000&amp;q=80');">
              <div class="nn-dcard__shade"></div>
              <div class="nn-dcard__body">
                <span class="nn-dcard__badge">Permit Required</span>
                <h3 class="nn-dcard__title">Tibet</h3>
                <p class="nn-dcard__desc">The high plateau &mdash; Lhasa, Everest North Base Camp, Kailash kora. All
                  trips on our group-permit framework.</p>
                <div class="nn-dcard__foot"><span class="nn-dcard__meta">9 Trips</span><a href="short-treks.php"
                    class="nn-dcard__view">View <span class="nn-dcard__arrow"><i
                        class="fa-solid fa-arrow-right"></i></span></a></div>
              </div>
            </article>
          </div>
          <div class="swiper-slide">
            <article class="nn-dcard nn-dcard--solid">
              <div class="nn-dcard__body">
                <span class="nn-dcard__badge nn-dcard__badge--light">Slow Travel</span>
                <h3 class="nn-dcard__title">Bhutan</h3>
                <p class="nn-dcard__desc">Druk Path, Jomolhari, Tiger's Nest. A measured pace through dzongs,
                  prayer-flag passes, and the last Himalayan kingdom.</p>
                <div class="nn-dcard__foot"><span class="nn-dcard__meta">7 Trips</span><a href="short-treks.php"
                    class="nn-dcard__view">View <span class="nn-dcard__arrow"><i
                        class="fa-solid fa-arrow-right"></i></span></a></div>
              </div>
            </article>
          </div>
        </div>
      </div>
      <button class="nn-arrow nn-dest-prev" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="nn-arrow nn-dest-next" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div>
</section>


<!-- ============================================================
     3. OUR STORY
     ============================================================ -->
<section class="nn-sec nn-story">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <div class="nn-story__media">
          <img src="image/about.png" alt="The North Nepal team" />
          <div class="nn-story__founded"><span>Founded</span><strong>2015</strong></div>
        </div>
      </div>
      <div class="col-lg-6">
        <span class="nn-eyebrow"><span class="nn-eyebrow__line"></span>Our Story</span>
        <h2 class="nn-h2">Started by a guide. <em class="nn-green-i">Still run by guides.</em></h2>
        <blockquote class="nn-story__quote">&ldquo;I spent eleven years carrying loads for other people's companies
          before I started this one. North Nepal exists because the trekkers I walked with kept asking why the agency
          didn't just hire the guide directly. So we did.&rdquo;</blockquote>
        <p class="nn-body">Founded in 2015, North Nepal Travel &amp; Trek was the brainchild of Mohan Bhandari, the
          guide himself &mdash; envisioned to fill the gap that he encountered during his guiding days. Born out of this
          passion, North Nepal Trek is on a mission to provide authentic, high-value, and transformative journeys.</p>
        <p class="nn-body">Ten years on, we're a team of 22 guides, porters, cooks, and trip planners &mdash; and we
          still build every trek the way we did the first one: a phone call, a few questions, and a route drawn from
          twenty years of actually walking the trails.</p>
        <div class="nn-story__bottom">
          <a href="about.php" class="nn-btn nn-btn--outline">Read the Full Story <i class="fa-solid fa-arrow-right"></i></a>
          <div class="nn-sign"><strong>Mohan Raj Bhandari</strong><span>Managing Director</span></div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     4. BEST OF NORTH NEPAL (Most-loved journeys)
     ============================================================ -->
<section class="nn-sec nn-trips">
  <div class="container">
    <div class="row align-items-end g-4 mb-5">
      <div class="col-lg-5">
        <span class="nn-eyebrow"><span class="nn-eyebrow__line"></span>Our Most-Loved Journeys</span>
        <h2 class="nn-h2">Best of <em class="nn-green-i">North Nepal Trek.</em></h2>
        <p class="nn-lead mb-0">Five hand-picked routes from our 40+ trek catalogue &mdash; the ones our trekkers walk
          again and recommend most. Every itinerary is a starting point; we'll reshape it to fit you.</p>

      </div>
      <div class="col-lg-5">
      </div>
    </div>



    <div class="nn-rel">
      <div class="swiper nn-trip-swiper">
        <div class="swiper-wrapper">
          <?php
          $treks = [
            ['Everest Base Camp Trek', '14 days', '5,545m', '4.9', '142', 'The classic walk to the foot of the world\'s highest mountain &mdash; Sherpa villages, monasteries, Khumbu glacier.', '1,490', 'photo-1486911278844-a81c5267e227'],
            ['Manaslu Circuit Trek', '16 days', '5,160m', '4.9', '68', 'A restricted-area loop around the world\'s 8th highest peak. Tibetan villages, Larkya La pass, half the crowds.', '1,790', 'photo-1454496522488-7a8e488e8606'],
            ['Annapurna Sanctuary Short', '5 days', '3,210m', '4.8', '87', 'A condensed Annapurna for those short on time &mdash; Poon Hill sunrise, Gurung villages, rhododendron forest.', '690', 'photo-1506905925346-21bda4d32df4'],
            ['Langtang Valley Trek', '9 days', '3,870m', '4.8', '54', 'Closest Himalaya to Kathmandu. Yak pastures, Tamang villages, and the post-quake community we\'ve helped rebuild.', '990', 'photo-1470770841072-f978cf4d019e'],
            ['Annapurna Circuit Trek', '12 days', '5,416m', '4.9', '113', 'The grand traverse over Thorong La &mdash; apple orchards, high desert, and the holy town of Muktinath.', '1,290', 'photo-1544735716-392fe2489ffa'],
          ];
          foreach ($treks as $t): ?>
            <div class="swiper-slide">
              <article class="nn-tcard">
                <div class="nn-tcard__img"
                  style="background-image:url('https://images.unsplash.com/<?= $t[7] ?>?auto=format&amp;fit=crop&amp;w=800&amp;q=80');">
                  <span class="nn-tcard__tags"><span><i class="fa-regular fa-calendar"></i> <?= $t[1] ?></span><span><i
                        class="fa-solid fa-mountain"></i> <?= $t[2] ?></span></span>
                  <button class="nn-tcard__heart" aria-label="Save"><i class="fa-regular fa-heart"></i></button>
                </div>
                <div class="nn-tcard__body">
                  <h3 class="nn-tcard__title"><?= $t[0] ?></h3>
                  <div class="nn-tcard__rating"><span class="nn-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    <strong><?= $t[3] ?></strong> <span class="nn-muted">(<?= $t[4] ?>)</span>
                  </div>
                  <p class="nn-tcard__desc"><?= $t[5] ?></p>
                  <div class="nn-tcard__foot">
                    <span class="nn-price"><span>From</span> $<?= $t[6] ?> <small>pp</small></span>
                    <a href="package-detail.php" class="nn-link">View Itinerary <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <button class="nn-arrow nn-trip-prev" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="nn-arrow nn-trip-next" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div>
</section>


<!-- ============================================================
     5. EXPLORE BY REGION
     ============================================================ -->
<section class="nn-sec nn-region">
  <div class="container">
    <div class="row align-items-end g-4">
      <div class="col-lg-7">
        <span class="nn-eyebrow"><span class="nn-eyebrow__line"></span>Explore by Region</span>
        <h2 class="nn-h2">Nine valleys.<br />Nine<em class="nn-green-i"> entirely different worlds.</em></h2>
      </div>
      <div class="col-lg-5">
        <p class="nn-lead mb-0">Each region has its own pace, terrain, and culture. Pick by what you want the days to
          feel like &mdash; not by mountain name.</p>
      </div>
    </div>

    <div class="nn-tabs" data-tabs>
      <button class="nn-tab is-active">Everest</button>
      <button class="nn-tab">Annapurna</button>
      <button class="nn-tab">Dhaulagiri</button>
      <button class="nn-tab">Manaslu</button>
      <button class="nn-tab">Langtang</button>
      <button class="nn-tab">Kanchenjunga</button>
      <button class="nn-tab">West Nepal</button>
    </div>

    <div class="nn-region__grid">
      <?php
      $regions = [
        ['11 treks · ', ' Pokhara', 'photo-1486911278844-a81c5267e227'],
        ['Annapurna', '11 treks', 'photo-1544735716-392fe2489ffa'],
        ['Dhaulagiri', '5 treks', 'photo-1454496522488-7a8e488e8606'],
        ['Manaslu', '6 treks', 'photo-1506905925346-21bda4d32df4'],
        ['Langtang', '8 treks', 'photo-1470770841072-f978cf4d019e'],
      ];
      foreach ($regions as $r): ?>
        <a href="short-treks.php" class="nn-rcard"
          style="background-image:url('https://images.unsplash.com/<?= $r[2] ?>?auto=format&amp;fit=crop&amp;w=700&amp;q=80');">
          <span class="nn-rcard__shade"></span>
          <span class="nn-rcard__body"><span class="nn-rcard__name"><?= $r[0] ?></span><span
              class="nn-rcard__count"><?= $r[1] ?></span></span>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ============================================================
     6. TRIP PLANNER (dark)
     ============================================================ -->
<section class="nn-sec nn-planner">
  <div class="container">
    <div class="nn-planner__card">
      <div class="row g-5 align-items-center">
        <div class="col-lg-5">
          <span class="nn-eyebrow nn-eyebrow--light">&bull; TRIP PLANNER &bull;</span>
          <h2 class="nn-h2 nn-h2--light">Find your <em class="nn-blue-italic">perfect plan</em> <br>in few questions.
          </h2>
          <p class="nn-lead nn-lead--light">Not a quiz, exactly. More like the same three questions our trip planners
            ask everyone on the first phone call.</p>
          <div class="nn-planner__progress-steps">
            <span class="nn-progress-step is-active"></span>
            <span class="nn-progress-step"></span>
            <span class="nn-progress-step"></span>
          </div>
          <p class="nn-planner__hint">~30 seconds &bull; we won't ask for your email until the end</p>
        </div>
        <div class="col-lg-7">
          <h3 class="nn-quiz__q">What draws you to Nepal most?</h3>
          <div class="nn-quiz__opts">
            <button class="nn-opt">
              <div class="nn-opt__ico-wrap">
                <span class="nn-opt__ico">&#9968;</span>
              </div>
              <div class="nn-opt__content">
                <strong>Iconic summits</strong>
                <span>Everest, Annapurna &mdash; the mountains you grew up reading about.</span>
              </div>
            </button>
            <button class="nn-opt">
              <div class="nn-opt__ico-wrap">
                <span class="nn-opt__ico">&#128506;</span>
              </div>
              <div class="nn-opt__content">
                <strong>Off the main routes</strong>
                <span>Manaslu, Tsum, Upper Mustang. Fewer trekkers, more wildness.</span>
              </div>
            </button>
            <button class="nn-opt">
              <div class="nn-opt__ico-wrap">
                <span class="nn-opt__ico">&#9784;</span>
              </div>
              <div class="nn-opt__content">
                <strong>Villages &amp; culture</strong>
                <span>Monasteries, teahouses, family-run kitchens above 3,000m.</span>
              </div>
            </button>
            <button class="nn-opt">
              <div class="nn-opt__ico-wrap">
                <span class="nn-opt__ico">&#9889;</span>
              </div>
              <div class="nn-opt__content">
                <strong>A light first taste</strong>
                <span>Poon Hill, Ghorepani &mdash; short walks, big views, no altitude.</span>
              </div>
            </button>
          </div>
          <div class="nn-quiz__nav">
            <button class="nn-btn-back">&larr; Back</button>
            <button class="nn-btn-continue">Continue &rarr;</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     7. BEYOND THE TRAIL
     ============================================================ -->
<section class="nn-sec nn-beyond">
  <div class="container">
    <div class="row align-items-end g-4 mb-5">
      <div class="col-lg-7">
        <span class="nn-eyebrow"><span class="nn-eyebrow__line"></span>Beyond the Trail</span>
        <h2 class="nn-h2">More ways to <em class="nn-green-i">see Nepal.</em></h2>
      </div>
      <div class="col-lg-5">
        <p class="nn-lead mb-0">Not every traveller comes for the high passes. Add a few days &mdash; or build the whole
          trip around the temples, the cities and the lowland jungle.</p>
      </div>
    </div>


    <div class="row g-4">
      <?php
      $beyond = [
        ['Heritage Tour', '3-9 days', 'Easy', 'Seven UNESCO sites within the Kathmandu Valley alone &mdash; Boudhanath at dusk, Pashupatinath at dawn, Bhaktapur\'s potters\' square, the old Newari courtyards of Patan. Walked with a local historian, not a script.', 'Explore Heritage', 'photo-1582510003544-4d00b7f74220'],
        ['City to City Tour', '5-10 days', 'Easy', 'Kathmandu, Pokhara, Bandipur, Lumbini &mdash; the through-line of modern Nepal. Slow mornings in lakeside cafes, hidden Newari kitchens, rooftop sunsets over the Annapurnas. We book the rides, you keep the pace.', 'Explore Cities', 'photo-1524492412937-b28074a5d7da'],
        ['Wildlife Tour', '3-6 days', 'Easy', 'Chitwan and Bardia &mdash; one-horned rhino, sloth bear, and a real (if quiet) chance at a Bengal tiger. Dawn canoes on the Rapti, jungle walks with naturalist guides, nights in community lodges.', 'Explore Wildlife', 'photo-1549366021-9f761d450615'],
        ['Peak Climbing', '14-30 days', 'Expert', 'Eighteen NMA-permitted peaks between 5,500m and 6,500m &mdash; Island, Mera, Lobuche East, Pisang, Chulu. Full technical training in Kathmandu before departure, two-to-one Sherpa ratio on summit day.', 'Explore Climbing', 'photo-1454496522488-7a8e488e8606'],
      ];
      foreach ($beyond as $b): ?>
        <div class="col-md-6 col-xl-3">
          <article class="nn-bcard">
            <div class="nn-bcard__img"
              style="background-image:url('https://images.unsplash.com/<?= $b[5] ?>?auto=format&amp;fit=crop&amp;w=700&amp;q=80');">
              <span class="nn-bcard__chip"><?= $b[1] ?> &middot; <?= $b[2] ?></span>
            </div>
            <div class="nn-bcard__body">
              <h3 class="nn-bcard__title"><?= $b[0] ?></h3>
              <p class="nn-bcard__desc"><?= $b[3] ?></p>
              <a href="blog-detail.php" class="nn-link"><?= $b[4] ?> <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ============================================================
     8. HELI TOURS
     ============================================================ -->
<section class="nn-sec nn-heli">
  <div class="container">
    <div class="row align-items-end g-4 mb-5">
      <div class="col-lg-7">
        <span class="nn-eyebrow"><span class="nn-eyebrow__line"></span>Fly Above the Mountain</span>
        <h2 class="nn-h2">Helicopter tours <em class="nn-green-i">beyond the ordinary.</em></h2>
      </div>
      <div class="col-lg-5">
        <p class="nn-lead mb-0">The postcard views of the high Himalaya &mdash; without the two-week walk in. Lift off
          at dawn, stand among the giants by breakfast, home for dinner.</p>
      </div>
    </div>



    <div class="nn-rel">
      <div class="swiper nn-heli-swiper">
        <div class="swiper-wrapper">
          <?php
          $helis = [
            ['Everest Base Camp Heli Tour', '5 hours', '5,545m', '5.0', '62', 'Kathmandu to Kalapatthar and back &mdash; the postcard view of Everest without the 14-day walk in.', '1,800', 'photo-1486911278844-a81c5267e227'],
            ['Annapurna Base Camp Heli Tour', '1 day', '4,130m', '4.9', '38', 'Lift off from Pokhara at dawn and stand at the sanctuary by breakfast. The amphitheatre of peaks, all to yourself.', '1,290', 'photo-1544735716-392fe2489ffa'],
            ['Muktinath Heli Tour', '4 hours', '3,800m', '4.8', '24', 'The sacred Hindu-Buddhist temple of Muktinath, set behind the Annapurna range. Land, walk, return same day.', '1,200', 'photo-1506905925346-21bda4d32df4'],
            ['North ABC Heli Tour', '1 day', '4,380m', '4.9', '21', 'The newly opened northern approach to Annapurna Base Camp. Fewer crowds, dramatic ridge landings, same sanctuary view.', '1,490', 'photo-1470770841072-f978cf4d019e'],
          ];
          foreach ($helis as $h): ?>
            <div class="swiper-slide">
              <article class="nn-tcard">
                <div class="nn-tcard__img"
                  style="background-image:url('https://images.unsplash.com/<?= $h[7] ?>?auto=format&amp;fit=crop&amp;w=800&amp;q=80');">
                  <span class="nn-tcard__tags"><span><i class="fa-regular fa-clock"></i> <?= $h[1] ?></span><span><i
                        class="fa-solid fa-mountain"></i> <?= $h[2] ?></span></span>
                  <button class="nn-tcard__heart" aria-label="Save"><i class="fa-regular fa-heart"></i></button>
                </div>
                <div class="nn-tcard__body">
                  <h3 class="nn-tcard__title"><?= $h[0] ?></h3>
                  <div class="nn-tcard__rating"><span class="nn-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    <strong><?= $h[3] ?></strong> <span class="nn-muted">(<?= $h[4] ?>)</span>
                  </div>
                  <p class="nn-tcard__desc"><?= $h[5] ?></p>
                  <div class="nn-tcard__foot">
                    <span class="nn-price"><span>From</span> $<?= $h[6] ?> <small>pp</small></span>
                    <a href="everest-heli-tour.php" class="nn-link">View Itinerary <i class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <button class="nn-arrow nn-heli-prev" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="nn-arrow nn-heli-next" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div>
</section>


<!-- ============================================================
     9. OUR PROMISE (dark)
     ============================================================ -->
<section class="nn-sec nn-promise">
  <div class="container">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6">
        <span class="nn-promise__eyebrow">OUR PROMISE</span>
        <h2 class="nn-promise__title">Numbers we keep <br><em class="nn-promise__italic">even when nobody's</em>
          <br>watching.
        </h2>
      </div>
      <div class="col-lg-5 offset-lg-1">
        <p class="nn-promise__lead">Anyone can write &ldquo;ethical&rdquo; on a website. These are the four numbers we
          publish, audit annually, and will refund your deposit if we miss. They're not aspirational &mdash; they're the
          floor.</p>
      </div>
    </div>

    <div class="nn-promise__divider"></div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 nn-promise__stats">
      <?php
      $stats = [
        ['20', 'kg', 'Porter weight cap', 'Half the industry standard. Verified at every checkpoint by an independent IPPG monitor on every trek.'],
        ['+18', '%', 'Above TAAN-mandated wage', 'Year-round salary for guides &mdash; not just trek season. Includes paid training, insurance, and altitude evacuation cover.'],
        ['2', '%', 'Of every trek to community', 'Funds rural school lunches and trail-maintenance crews in Solukhumbu, Manaslu and Langtang. Spend publicly reported each March.'],
        ['100', '%', 'Refund if we miss the brief', 'If the trek didn\'t match the itinerary we built with you, we refund the difference &mdash; no arbitration, no asterisks. Asked 4 times in 10 years.'],
      ];
      foreach ($stats as $s): ?>
        <div class="col nn-promise__stat-col">
          <div class="nn-promise__stat">
            <div class="nn-promise__num"><?= $s[0] ?><span class="nn-promise__unit"><?= $s[1] ?></span></div>
            <h4 class="nn-promise__stat-title"><?= $s[2] ?></h4>
            <p class="nn-promise__stat-desc"><?= $s[3] ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="nn-promise__divider"></div>

    <div class="nn-promise__accreditation">
      <div class="nn-accred-item"><span class="nn-accred-dot"></span>Nepal Tourism Board &middot; Lic. 179</div>
      <div class="nn-accred-item"><span class="nn-accred-dot"></span>TAAN - Member 2342</div>
      <div class="nn-accred-item"><span class="nn-accred-dot"></span>International Porter Protection Group</div>
      <div class="nn-accred-item"><span class="nn-accred-dot"></span>Leave No Trace &middot; Master Educator</div>
      <div class="nn-accred-item"><span class="nn-accred-dot"></span>CIWEC Hospital &middot; Travel Medicine Partner
      </div>
    </div>
  </div>
</section>


<!-- ============================================================
     10. REVIEWS
     ============================================================ -->
<section class="nn-sec nn-reviews">
  <div class="container">
    <div class="row align-items-end g-4 mb-2">
      <div class="col-lg-8">
        <span class="nn-eyebrow"><span class="nn-eyebrow__line"></span>Reviews from the Trail</span>
        <h2 class="nn-h2">Hear it from those who've <em class="nn-green-i">walked with us.</em></h2>
      </div>
    </div>

    <div class="nn-rel">
      <div class="swiper nn-rev-swiper">
        <div class="swiper-wrapper">
          <!-- Video review -->
          <div class="swiper-slide">
            <article class="nn-vcard"
              style="background-image:url('https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&amp;fit=crop&amp;w=800&amp;q=80');">
              <span class="nn-vcard__shade"></span>
              <button class="nn-vcard__play" aria-label="Play"><i class="fa-solid fa-play"></i></button>
              <div class="nn-vcard__meta">
                <span class="nn-vcard__tag">Everest Base Camp &middot; 14 days</span>
                <strong>David &amp; Brother</strong><span>Australia &middot; April 2026</span>
              </div>
            </article>

          </div>
          <div class="swiper-slide">
            <article class="nn-vcard"
              style="background-image:url('https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&amp;fit=crop&amp;w=800&amp;q=80');">
              <span class="nn-vcard__shade"></span>
              <button class="nn-vcard__play" aria-label="Play"><i class="fa-solid fa-play"></i></button>
              <div class="nn-vcard__meta">
                <span class="nn-vcard__tag">Everest Base Camp &middot; 14 days</span>
                <strong>David &amp; Brother</strong><span>Australia &middot; April 2026</span>
              </div>
            </article>

          </div>
          <div class="swiper-slide">
            <article class="nn-vcard"
              style="background-image:url('https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&amp;fit=crop&amp;w=800&amp;q=80');">
              <span class="nn-vcard__shade"></span>
              <button class="nn-vcard__play" aria-label="Play"><i class="fa-solid fa-play"></i></button>
              <div class="nn-vcard__meta">
                <span class="nn-vcard__tag">Everest Base Camp &middot; 14 days</span>
                <strong>David &amp; Brother</strong><span>Australia &middot; April 2026</span>
              </div>
            </article>

          </div>
        </div>
      </div>
      <button class="nn-arrow nn-rev-prev" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="nn-arrow nn-rev-next" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div>
</section>


<!-- ============================================================
     10.5 TEXT REVIEWS
     ============================================================ -->
<section class="nn-sec nn-text-reviews">
  <div class="container">

    <!-- Tripadvisor Reviews -->
    <div class="nn-trev-group">
      <div class="nn-trev-header">
        <div class="nn-trev-header-ta">
          <i class="fa-brands fa-tripadvisor" style="color: #34E0A1;"></i> Tripadvisor
        </div>
        <div class="nn-trev-header-sub">
          <span class="nn-ta-circles">&#11044;&#11044;&#11044;&#11044;&#11044;</span> <a href="#">3393 reviews in
            TripAdvisor</a>
        </div>
      </div>

      <div class="nn-pr-block">
        <div class="nn-rel">
          <div class="swiper nn-trev-ta-swiper">
            <div class="swiper-wrapper">
              <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="swiper-slide">
                  <article class="nn-trev-card">
                    <div class="nn-trev-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <blockquote class="nn-trev-quote">
                      "Mohan answered every email within an hour for three weeks while we planned. Then on the trail our
                      guide Pemba caught my altitude sickness a day before I would have. They were ready for everything
                      before we knew to ask."
                    </blockquote>
                    <div class="nn-trev-divider"></div>
                    <div class="nn-trev-author">
                      <div class="nn-trev-avatar">A</div>
                      <div class="nn-trev-meta">
                        <span class="nn-trev-name">Aoife Walsh</span>
                        <span class="nn-trev-detail">Ireland &middot; Manaslu Circuit &middot; Mar 2026</span>
                      </div>
                    </div>
                  </article>
                </div>
              <?php endfor; ?>
            </div>
          </div>
          <button class="nn-arrow nn-ta-prev" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
          <button class="nn-arrow nn-ta-next" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
      </div>
    </div>

    <!-- Google Reviews -->
    <div class="nn-trev-group" style="margin-top: 60px;">
      <div class="nn-trev-header">
        <div class="nn-trev-header-go">
          <span
            style="display:inline-flex; align-items:center; justify-content:center; width:28px; height:28px; background:#fff; border-radius:50%; box-shadow:0 2px 4px rgba(0,0,0,0.1);"><i
              class="fa-brands fa-google" style="color: #4285F4; font-size:14px;"></i></span> Google Reviews
        </div>
        <div class="nn-trev-header-sub" style="display: flex; align-items: center; justify-content: center; gap: 6px;">
          5.0 Stars <span class="nn-go-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span> <span
            style="background:#f4f4f4; padding:3px 8px; border-radius:4px; font-size:11px; display:inline-flex; align-items:center; gap:4px; border: 1px solid #eaeaea;"><img
              src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" style="width: 12px;"
              alt="G"> <a href="#" style="text-decoration:none;">659 reviews</a></span>
        </div>
      </div>

      <div class="nn-pr-block">
        <div class="nn-rel">
          <div class="swiper nn-trev-go-swiper">
            <div class="swiper-wrapper">
              <?php for ($i = 0; $i < 4; $i++): ?>
                <div class="swiper-slide">
                  <article class="nn-trev-card">
                    <div class="nn-trev-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <blockquote class="nn-trev-quote">
                      "Mohan answered every email within an hour for three weeks while we planned. Then on the trail our
                      guide Pemba caught my altitude sickness a day before I would have. They were ready for everything
                      before we knew to ask."
                    </blockquote>
                    <div class="nn-trev-divider"></div>
                    <div class="nn-trev-author">
                      <div class="nn-trev-avatar">A</div>
                      <div class="nn-trev-meta">
                        <span class="nn-trev-name">Aoife Walsh</span>
                        <span class="nn-trev-detail">Ireland &middot; Manaslu Circuit &middot; Mar 2026</span>
                      </div>
                    </div>
                  </article>
                </div>
              <?php endfor; ?>
            </div>
          </div>
          <button class="nn-arrow nn-gr-prev" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
          <button class="nn-arrow nn-gr-next" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
      </div>
    </div>

  </div>
</section>


<!-- ============================================================
     11. INSTAGRAM
     ============================================================ -->
<section class="nn-sec nn-insta">
  <div class="container">
    <div class="nn-section-head-inline">
      <h2 class="nn-h2-serif">FOLLOW US ON INSTAGRAM</h2>
      <a href="#" class="nn-link-small">Follow Us</a>
    </div>

    <div class="nn-rel">
      <div class="swiper nn-ig-swiper">
        <div class="swiper-wrapper">
          <?php
          $posts = [
            ['photo-1486911278844-a81c5267e227', 'Machhapuchhre &mdash; the sacred mountain no one is allowed to climb &mdash; standing guard right behind our trekker. This is the moment that...', 'photo-1486911278844-a81c5267e227'],
            ['photo-1470770841072-f978cf4d019e', 'There\'s a version of Nepal that most travellers never get to see. Not from the trail, not from a viewpoint, not from a helicopter. But from eye-lev...', 'photo-1470770841072-f978cf4d019e'],
            ['photo-1544735716-392fe2489ffa', 'Five days into Mardi Himal and the morning broke clean. Our guide Pemba pointed to a ridge we hadn\'t planned to take &mdash; and that\'s how the best...', 'photo-1544735716-392fe2489ffa'],
          ];
          foreach ($posts as $p): ?>
            <div class="swiper-slide">
              <a href="#" class="nn-igcard-new">
                <div class="nn-igcard-new__img"
                  style="background-image:url('https://images.unsplash.com/<?= $p[0] ?>?auto=format&amp;fit=crop&amp;w=700&amp;q=80');">
                </div>
                <div class="nn-igcard-new__body">
                  <div class="nn-igcard-new__avatar">
                    <img src="https://images.unsplash.com/<?= $p[2] ?>?auto=format&amp;fit=crop&amp;w=100&amp;q=80"
                      alt="Avatar">
                  </div>
                  <p class="nn-igcard-new__text"><?= $p[1] ?></p>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <button class="nn-arrow nn-ig-prev" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="nn-arrow nn-ig-next" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div>
</section>


<!-- ============================================================
     12. BLOGS
     ============================================================ -->
<section class="nn-sec nn-blogs">
  <div class="container">
    <div class="nn-section-head-inline">
      <h2 class="nn-h2-serif" style="text-transform: none;">Blogs &amp; Daily Updates</h2>
      <a href="blog.php" class="nn-link-small">browse all</a>
    </div>

    <div class="nn-rel">
      <div class="swiper nn-blog-swiper">
        <div class="swiper-wrapper">
          <?php
          $blogs = [
            ['How to Complete Mardi Himal Trek in 3 Days', '2026.11.18', '7 min read', 'Pemba Sherpa', '&ldquo;The site made the right route feel obvious before we even messaged.&rdquo; &ldquo;The site made the right route feel obvious before we even messaged.&rdquo;', 'photo-1551632811-561732d1e306'],
            ['EBC vs Annapurna Base Camp &mdash; Which to Walk First?', '2026.11.18', '7 min read', 'Pemba Sherpa', 'A guide who has walked both routes 40+ times each weighs in on altitude, scenery, season, and which trek belongs at the top of your list.', 'photo-1454496522488-7a8e488e8606'],
            ['Packing for the Manaslu Circuit: A Real Guide\'s List', '2026.10.30', '4 min read', 'Sita Gurung', 'What to actually bring (and what you can skip) for 16 days at altitude. Compiled from 12 years of running this route.', 'photo-1506905925346-21bda4d32df4'],
          ];
          foreach ($blogs as $bl): ?>
            <div class="swiper-slide">
              <article class="nn-blog-new">
                <a href="blog-detail.php" class="nn-blog-new__img"
                  style="background-image:url('https://images.unsplash.com/<?= $bl[5] ?>?auto=format&amp;fit=crop&amp;w=700&amp;q=80');"></a>
                <div class="nn-blog-new__body">
                  <div class="nn-blog-new__meta">
                    <span class="nn-blog-new__date"><?= $bl[1] ?></span>
                    <span class="nn-blog-new__readtime"><i class="fa-regular fa-clock"></i> <?= $bl[2] ?></span>
                    <span class="nn-blog-new__author"><i class="fa-regular fa-user"></i> <?= $bl[3] ?></span>
                  </div>
                  <h3 class="nn-blog-new__title"><a href="blog-detail.php"><?= $bl[0] ?></a></h3>
                  <p class="nn-blog-new__excerpt"><?= $bl[4] ?></p>
                  <div class="nn-blog-new__foot">
                    <a href="blog-detail.php" class="nn-btn-outline-small">Read More</a>
                  </div>
                </div>
              </article>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <button class="nn-arrow nn-blog-prev" aria-label="Previous"><i class="fa-solid fa-arrow-left"></i></button>
      <button class="nn-arrow nn-blog-next" aria-label="Next"><i class="fa-solid fa-arrow-right"></i></button>
    </div>
  </div>
</section>


<!-- ============================================================
     13. ASSOCIATED / TRUST
     ============================================================ -->
<section class="nn-sec nn-trust-new bg-white">
  <div class="container text-center">
    <span class="nn-trust-new__eyebrow">RECOGNISED &middot; CERTIFIED &middot; TRUSTED</span>
    <h2 class="nn-trust-new__title">We are associated with</h2>
    <div class="nn-trust-new__divider"></div>
    <div class="nn-trust-new__logos">
      <!-- Using public URLs for the logos as placeholders, user should replace with their own local files if needed -->
      <img src="https://upload.wikimedia.org/wikipedia/commons/2/23/Emblem_of_Nepal.svg" alt="Government of Nepal"
        class="nn-trust-logo">
      <img
        src="https://upload.wikimedia.org/wikipedia/en/thumb/f/fa/Nepal_Tourism_Board_logo.svg/1200px-Nepal_Tourism_Board_logo.svg.png"
        alt="NTB" class="nn-trust-logo">
      <img src="https://www.taan.org.np/images/taan-logo.png" alt="TAAN" class="nn-trust-logo">
      <img src="https://www.nepalmountaineering.org/img/logo.png" alt="NMA" class="nn-trust-logo">
      <img src="https://placehold.co/150x80/transparent/4A5B53?text=VITOF-Nepal" alt="VITOF" class="nn-trust-logo">
    </div>
  </div>
</section>




<script>
  document.addEventListener('DOMContentLoaded', function () {
    var common = function (sel, prev, next) {
      return {
        slidesPerView: 1, spaceBetween: 24,
        navigation: { prevEl: prev, nextEl: next },
        breakpoints: { 576: { slidesPerView: 2 }, 992: { slidesPerView: 3 }, 1200: { slidesPerView: sel === '.nn-trip-swiper' || sel === '.nn-heli-swiper' ? 4 : 3 } }
      };
    };
    if (typeof Swiper !== 'undefined') {
      new Swiper('.nn-dest-swiper', { slidesPerView: 1, spaceBetween: 24, navigation: { prevEl: '.nn-dest-prev', nextEl: '.nn-dest-next' }, breakpoints: { 768: { slidesPerView: 2 }, 1100: { slidesPerView: 3 } } });
      new Swiper('.nn-trip-swiper', common('.nn-trip-swiper', '.nn-trip-prev', '.nn-trip-next'));
      new Swiper('.nn-heli-swiper', common('.nn-heli-swiper', '.nn-heli-prev', '.nn-heli-next'));
      new Swiper('.nn-rev-swiper', { slidesPerView: 1, spaceBetween: 24, navigation: { prevEl: '.nn-rev-prev', nextEl: '.nn-rev-next' }, breakpoints: { 768: { slidesPerView: 2 }, 1100: { slidesPerView: 3 } } });
      new Swiper('.nn-trev-ta-swiper', common('.nn-trev-ta-swiper', '.nn-ta-prev', '.nn-ta-next'));
      new Swiper('.nn-trev-go-swiper', common('.nn-trev-go-swiper', '.nn-gr-prev', '.nn-gr-next'));
      new Swiper('.nn-ig-swiper', common('.nn-ig-swiper', '.nn-ig-prev', '.nn-ig-next'));
      new Swiper('.nn-blog-swiper', common('.nn-blog-swiper', '.nn-blog-prev', '.nn-blog-next'));
    }

    // Simple tab + chip active toggling (visual)
    document.querySelectorAll('[data-tabs]').forEach(function (group) {
      group.querySelectorAll('.nn-tab').forEach(function (tab) {
        tab.addEventListener('click', function () {
          group.querySelectorAll('.nn-tab').forEach(function (t) { t.classList.remove('is-active'); });
          tab.classList.add('is-active');
        });
      });
    });
    document.querySelectorAll('.nn-chips').forEach(function (group) {
      group.querySelectorAll('.nn-chip').forEach(function (chip) {
        chip.addEventListener('click', function () {
          group.querySelectorAll('.nn-chip').forEach(function (c) { c.classList.remove('is-active'); });
          chip.classList.add('is-active');
        });
      });
    });

    // Scroll-reveal: fade + rise as elements enter the viewport (staggered per group)
    (function () {
      var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      if (reduce || !('IntersectionObserver' in window)) return;
      var sel = '.nn-eyebrow, .nn-h2, .nn-dest__title, .nn-lead, .nn-story__media, .nn-story__quote, .nn-feature, .nn-dcard, .nn-tcard, .nn-bcard, .nn-blog, .nn-rcard, .nn-igcard, .nn-vcard, .nn-qcard, .nn-stat, .nn-quiz, .nn-trust__logo';
      var items = [].slice.call(document.querySelectorAll(sel));
      var groups = typeof Map !== 'undefined' ? new Map() : null;
      items.forEach(function (el) {
        el.classList.add('nn-reveal');
        var g = el.closest('.swiper-wrapper, .row, .nn-region__grid, .nn-hero__features, .nn-trust__logos') || el.parentNode;
        var i = 0;
        if (groups) { i = groups.get(g) || 0; groups.set(g, i + 1); }
        el.style.transitionDelay = Math.min(i * 70, 350) + 'ms';
      });
      var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (e) {
          if (e.isIntersecting) { e.target.classList.add('is-visible'); io.unobserve(e.target); }
        });
      }, { threshold: 0.12, rootMargin: '0px 0px -7% 0px' });
      items.forEach(function (el) { io.observe(el); });
    })();

    // Wishlist heart toggle (outline <-> solid with a pop)
    document.querySelectorAll('.nn-tcard__heart').forEach(function (btn) {
      btn.addEventListener('click', function (e) {
        e.preventDefault();
        btn.classList.toggle('is-active');
        var ico = btn.querySelector('i');
        if (ico) { ico.classList.toggle('fa-regular'); ico.classList.toggle('fa-solid'); }
      });
    });
  });
</script>

<?php include "include/footer.php" ?>