<?php
/**
 * Front Page Template (Troutshop)
 */
get_header();

$ts = get_stylesheet_directory_uri();
?>

<div id="ecwid_product_browser_scroller"></div>

<div id="page-wrapper">
  <header>
    <nav>
      <ul id="mobile-nav">
        <li>
          <a href="#" id="mobile-nav-trigger">Menu</a>
          <ul class="subnav">
            <li><a href="/" class="nav-home" title="Home">Home</a></li>
            <li><a href="/shop">Shop</a></li>
            <li><a href="/blog/latest-articles">Latest News</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="/shipping-and-returns">Shipping &amp; Returns</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/retailers">Retailers</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </li>
      </ul>

      <ul id="main-nav">
        <li><a href="/" class="nav-home" title="Home"><span class="icon-squid"></span></a></li>
        <li><a href="/shop">Shop</a></li>
        <li>
          <a href="#" class="subnav-toggle">News</a>
          <ul class="subnav">
            <li><a href="/blog/latest-articles">Latest News</a></li>
            <li><a href="/articles">Articles</a></li>
            <li><a href="https://communityminiaturesproject.com/" target="_blank" rel="noopener">Community Minis</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="subnav-toggle">About</a>
          <ul class="subnav">
            <li><a href="/about">About Bad Squiddo Games</a></li>
            <li><a href="/shipping-and-returns">Shipping &amp; Returns</a></li>
            <li><a href="/retailers">Retailers</a></li>
          </ul>
        </li>
        <li><a href="/events">Events</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>

      <ul id="right-nav" class="hidden-xs">
        <li><a href="https://bsky.app/profile/badsquiddogames.bsky.social" title="Bad Squiddo Games on Twitter" target="_blank" rel="noopener"><span class="icon-bluesky"></span></a></li>
        <li><a href="https://www.facebook.com/TheDiceBagLady/" title="Bad Squiddo Games on Facebook" target="_blank" rel="noopener"><span class="icon-facebook"></span></a></li>
        <li><a href="https://www.youtube.com/channel/UCg9FbveRbyvs7y23sMafqtQ" title="Bad Squiddo Games on Youtube" target="_blank" rel="noopener"><span class="icon-youtube"></span></a></li>
        <li><a href="https://www.instagram.com/badsquiddogames/" title="Bad Squiddo Games on Instagram" target="_blank" rel="noopener"><span class="icon-instagram"></span></a></li>
      </ul>

      <div id="right-nav-minicart">
        <div class="ec-cart-widget"></div>
        <div>
          <script data-cfasync="false" type="text/javascript" src="https://app.ecwid.com/script.js?10152787&data_platform=code&data_date=2024-11-21" charset="utf-8"></script>
          <script type="text/javascript">Ecwid.init();</script>
        </div>
      </div>
    </nav>

    <span id="nav-overlay"></span>
    <a href="/" title="Home">
      <img src="<?php echo esc_url($ts); ?>/assets/images/logo-bad-squiddo.png" class="header-logo" title="Bad Squiddo Games" alt="Bad Squiddo Games">
    </a>
  </header>

  <div id="content-wrapper" class="nav-blur">

    <div id="hero" class="squid-silhouette-left">
      <div id="heroSlider">

        <div class="item">
          <picture>
            <source srcset="https://badsquiddogames.com/images/uploads/1/winter_hero__large.jpg" media="(min-width: 768px)">
            <source srcset="https://badsquiddogames.com/images/uploads/1/winter_hero__medium.jpg" media="(min-width: 480px)">
            <img srcset="https://badsquiddogames.com/images/uploads/1/winter_hero__small.jpg" alt="Alles für die Forellenjagd">
          </picture>
          <span class="slider-overlay"></span>
          <div class="hero-title">
            <p>Alles für die Forellenjagd</p>
            <a href="https://badsquiddogames.com/blog/xmas-opening-shipping" class="btn btn-lg" title="Alles für die Forellenjagd">Details</a>
          </div>
        </div>

        <div class="item">
          <picture>
            <source srcset="https://badsquiddogames.com/images/uploads/1/hero_cold_ww2__large.jpg" media="(min-width: 768px)">
            <source srcset="https://badsquiddogames.com/images/uploads/1/hero_cold_ww2__medium.jpg" media="(min-width: 480px)">
            <img srcset="https://badsquiddogames.com/images/uploads/1/hero_cold_ww2__small.jpg" alt="Tis the season for... more minis!">
          </picture>
          <span class="slider-overlay"></span>
          <div class="hero-title">
            <p>Tis the season for... more minis!</p>
            <a href="https://badsquiddogames.com/shop" class="btn btn-lg" title="Tis the season for... more minis!">Details</a>
          </div>
        </div>

        <div class="item">
          <picture>
            <source srcset="https://badsquiddogames.com/images/uploads/1/pirates_hero__large.jpg" media="(min-width: 768px)">
            <source srcset="https://badsquiddogames.com/images/uploads/1/pirates_hero__medium.jpg" media="(min-width: 480px)">
            <img srcset="https://badsquiddogames.com/images/uploads/1/pirates_hero__small.jpg" alt="Historical Pirate Queens Ahoy">
          </picture>
          <span class="slider-overlay"></span>
          <div class="hero-title">
            <p>Historical Pirate Queens Ahoy</p>
            <a href="https://badsquiddogames.com/shop#!/Latest-Releases/c/22056044/offset=0&amp;sort=addedTimeDesc" class="btn btn-lg" title="Historical Pirate Queens Ahoy">Details</a>
          </div>
        </div>

        <div class="item">
          <picture>
            <source srcset="https://badsquiddogames.com/images/uploads/1/merch_hero_copy__large.jpg" media="(min-width: 768px)">
            <source srcset="https://badsquiddogames.com/images/uploads/1/merch_hero_copy__medium.jpg" media="(min-width: 480px)">
            <img srcset="https://badsquiddogames.com/images/uploads/1/merch_hero_copy__small.jpg" alt="Sweet Merch!">
          </picture>
          <span class="slider-overlay"></span>
          <div class="hero-title">
            <p>Sweet Merch!</p>
            <a href="https://www.redbubble.com/people/badsquiddogames/shop" class="btn btn-lg" title="Sweet Merch!">Details</a>
          </div>
        </div>

      </div>

      <svg version="1.1" class="squid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 599.791 70.006" enable-background="new 0 0 599.791 70.006" xml:space="preserve">
        <path fill="#FFFFFF" d="M594.04,49.217c-11.497-1.713-21.466-1.369-43.821,0c-16.115,0.987-27.672,0.842-48.058,3.591
c-62.663,8.448-105.91-0.837-142.006-5.535c-48.809-6.354-125.484-3.193-205.663,8.347c-14.197,2.044-28.507,4.08-43.217,5.982
c2.987-1.257,5.997-2.501,8.846-3.844c10.53-4.965,20.605-6.935,30.442-7.127c14.004-0.272,27.75-0.267,41.869-0.667
c17.822-0.505,36.655-2.804,57.054-8.278c6.677-1.794,12.717-4.034,17.39-7.473c-0.289-0.926-0.579-1.853-0.868-2.78
c-4.997-1.494-11.244-0.744-19.448,1.601c-5.914,1.689-12.457,2.685-17.982,3.054c-22.098,1.482-42.033,0.634-57.502-3.303
c-20.917-5.324-49.548,1-76.839,16.818c-11.824,6.855-22.393,14.398-34.177,17.144c-12.549,2.426-19.939,2.031-26.255,2.468
c0.001-0.014-6.207-0.214-8.535-3.382c-3.246-3.802-0.616-12.518-0.283-14.17c0.587-1.912,1.183-3.822,1.734-5.736
c1.889-6.565,7.878-21.579,7.492-28.218C33.49,5.305,24.216-0.843,8.981,0.093C4.396,0.375,1,1.908,0,2.117v67.889h463.637
c27.47-3,56.474-6.871,87.5-8.607c18.11-1.014,30.807-1.727,45.064-4.336C599.968,56.168,602.72,49.217,594.04,49.217z
M9.783,38.991c0-4.268,3.403-7.728,7.602-7.728c4.198,0,7.601,3.46,7.601,7.728c0,1.53-0.443,2.954-1.199,4.153
c0.139-0.397,0.218-0.823,0.218-1.269c0-2.134-1.733-3.863-3.873-3.863s-3.873,1.729-3.873,3.863s1.733,3.863,3.873,3.863
c0.474,0,0.926-0.09,1.345-0.243c-1.183,0.77-2.584,1.222-4.093,1.222C13.186,46.718,9.783,43.258,9.783,38.991z"/>
      </svg>
    </div>

    <div class="container-fluid padding-top padding-bottom-wave bkg-white btn-graphic-container">
      <div class="row padding-bottom">
        <div class="col-xs-6 col-sm-3 bkg-white">
          <a href="/shop" class="btn-graphic-lg color-secondary" title="">
            <div>
              <img src="<?php echo esc_url($ts); ?>/assets/images/btn-shop.png" class="img-responsive bkg-primary" title="" alt="Buy female miniatures">
            </div>
            <p>Shop</p>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 bkg-white">
          <a href="https://communityminiaturesproject.com/" class="btn-graphic-lg color-secondary" title="" target="_blank" rel="noopener">
            <div>
              <img src="<?php echo esc_url($ts); ?>/assets/images/btn-community-minis.png" class="img-responsive bkg-tertiary" title="" alt="Community Minis">
            </div>
            <p class="small">Community Minis</p>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 bkg-white">
          <a href="/blog/latest-articles" class="btn-graphic-lg color-secondary" title="">
            <div>
              <img src="<?php echo esc_url($ts); ?>/assets/images/btn-news.png" class="img-responsive bkg-primary" title="" alt="Miniatures news">
            </div>
            <p>News</p>
          </a>
        </div>
        <div class="col-xs-6 col-sm-3 bkg-white">
          <a href="/about" class="btn-graphic-lg color-secondary" title="">
            <div>
              <img src="<?php echo esc_url($ts); ?>/assets/images/btn-about-2.png" class="img-responsive bkg-tertiary" title="" alt="About Bad Squiddo Games">
            </div>
            <p>About</p>
          </a>
        </div>
      </div>
    </div>

    <div class="container-fluid bkg-primary padding-top padding-bottom-double squid-silhouette-right wave-left">
      <svg version="1.1" class="wave" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 118.691" enable-background="new 0 0 1920 118.691" xml:space="preserve">
        <path fill="#12ab9c" d="M1901,61.424c-32,9.072-65,14.742-98,21.546c-5,0.566-10,1.701-15,2.268c-67,12.475-134,20.463-204,26.133
c-12,0.568-23,1.32-35,2.32c-3,0-7,0-10,0c-171,9-342-5.154-501-41.443c-74-17.576-145-35.179-223-47.652c-22-3.97-43-6.25-65-9.652
c-19-2.268-37-4.541-56-6.243c-16-1.134-30-2.838-46-3.972c-16-0.567-31-2.27-47-2.837c-12-0.567-25-1.135-37-1.135
c-39-1.701-77-1.134-116-1.134c-18,0.567-35,1.133-53,1.701c-11,0.567-21,1.134-32,1.701c-36,2.835-70,4.536-106,9.639
c-14,1.701-28,2.268-42,4.536c-16,2.835-32,4.536-48,6.804c-27,3.969-53,9.072-79,14.175c-21,3.969-42,6.804-62,12.474
c-8,2.835-17,3.97-26,6.237v61.803h1920c0,0,0-41.177,0-61.803C1914,58.589,1907,59.723,1901,61.424z"/>
      </svg>

      <div class="row pull-up">
        <div class="col-md-6">
          <h1 class="underline bkg-primary">New Arrivals</h1>
          <p>Brand new releases! See the latest in the Bad Squiddo Shop. Click <a href="https://badsquiddogames.com/shop#!/Latest-Releases/c/22056044/offset=0&amp;sort=addedTimeDesc">HERE</a> for more.</p>
        </div>
      </div>

      <div class="row padding-top padding-bottom">
        <div class="col-xs-6 col-sm-3">
          <div class="ecwid-SingleProduct">
            <a href="https://badsquiddogames.com/shop#!/Odette-Samson/p/800861851">
              <img src="https://badsquiddogames.com/images/uploads/odette_thumb.jpg" title="">
            </a>
            <div class="ecwid-title">Odette Samson</div>
            <div class="ecwid-price" itemprop="price">£5.00</div>
            <a href="https://badsquiddogames.com/shop#!/Odette-Samson/p/800861851" title="View" class="btn">View</a>
          </div>
        </div>

        <div class="col-xs-6 col-sm-3">
          <div class="ecwid-SingleProduct">
            <a href="https://badsquiddogames.com/shop#!/Simone-Segouin/p/800861848">
              <img src="https://badsquiddogames.com/images/uploads/thumb_simone.jpg" title="">
            </a>
            <div class="ecwid-title">Simone Segouin</div>
            <div class="ecwid-price" itemprop="price">£5.00</div>
            <a href="https://badsquiddogames.com/shop#!/Simone-Segouin/p/800861848" title="View" class="btn">View</a>
          </div>
        </div>

        <div class="col-xs-6 col-sm-3">
          <div class="ecwid-SingleProduct">
            <a href="https://badsquiddogames.com/shop#!/Pearl-Witherington/p/800863769">
              <img src="https://badsquiddogames.com/images/uploads/thumb_pearl.jpg" title="">
            </a>
            <div class="ecwid-title">Pearl Witherington</div>
            <div class="ecwid-price" itemprop="price">£5.00</div>
            <a href="https://badsquiddogames.com/shop#!/Pearl-Witherington/p/800863769" title="View" class="btn">View</a>
          </div>
        </div>

        <div class="col-xs-6 col-sm-3">
          <div class="ecwid-SingleProduct">
            <a href="https://badsquiddogames.com/shop#!/Zoya-Kosmodemyanskaya/p/800863766">
              <img src="https://badsquiddogames.com/images/uploads/thumb_zoya.jpg" title="">
            </a>
            <div class="ecwid-title">Zoya Kosmodemyanskaya</div>
            <div class="ecwid-price" itemprop="price">£5.00</div>
            <a href="https://badsquiddogames.com/shop#!/Zoya-Kosmodemyanskaya/p/800863766" title="View" class="btn">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bkg-secondary padding-bottom squid-silhouette-right wave-left">
      <svg version="1.1" class="wave" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 118.691" enable-background="new 0 0 1920 118.691" xml:space="preserve">
        <path fill="#8454b2" d="M1901,61.424c-32,9.072-65,14.742-98,21.546c-5,0.566-10,1.701-15,2.268c-67,12.475-134,20.463-204,26.133
c-12,0.568-23,1.32-35,2.32c-3,0-7,0-10,0c-171,9-342-5.154-501-41.443c-74-17.576-145-35.179-223-47.652c-22-3.97-43-6.25-65-9.652
c-19-2.268-37-4.541-56-6.243c-16-1.134-30-2.838-46-3.972c-16-0.567-31-2.27-47-2.837c-12-0.567-25-1.135-37-1.135
c-39-1.701-77-1.134-116-1.134c-18,0.567-35,1.133-53,1.701c-11,0.567-21,1.134-32,1.701c-36,2.835-70,4.536-106,9.639
c-14,1.701-28,2.268-42,4.536c-16,2.835-32,4.536-48,6.804c-27,3.969-53,9.072-79,14.175c-21,3.969-42,6.804-62,12.474
c-8,2.835-17,3.97-26,6.237v61.803h1920c0,0,0-41.177,0-61.803C1914,58.589,1907,59.723,1901,61.424z"/>
      </svg>

      <div class="row padding-top padding-bottom">
        <div class="col-sm-5 col-sm-offset-2">
          <h1 class="underline bkg-secondary">Mini of the Week</h1>
          <p>This high quality A5 card (with envelope!) makes a perfect gift for the gamer in your life who appears to have everything. They will be able to browse the web shop for whatever they fancy, or even hold onto it til something new comes out.</p>
          <p>It lasts for two years so you have plenty of time to use it. You can even treat your future self if you’re feeling particularly flush from pay day or selling that latest load of half painted lead mountain, then later on when there is a cool new release, it’ll be a present to yourself.</p>
          <p>Available for any budget, just pull the drop down box to choose from £10, £20, £50 or £100.</p>
          <p>Personalised message available for no extra charge.</p>
        </div>
        <div class="col-sm-3">
          <div class="ecwid-SingleProduct">
            <a href="https://badsquiddogames.com/shop#!/Gift-Card-Choose-Value/p/125840803">
              <img src="https://badsquiddogames.com/images/uploads/christmas_gift_card_ad.jpg" title="">
            </a>
            <div class="ecwid-title">Gift Card</div>
            <div class="ecwid-price" itemprop="price">£10-£100</div>
            <a href="https://badsquiddogames.com/shop#!/Gift-Card-Choose-Value/p/125840803" title="View" class="btn">View</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid bkg-white padding-top padding-bottom-double squid-silhouette-right wave-left">
      <svg version="1.1" class="wave" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 118.691" enable-background="new 0 0 1920 118.691" xml:space="preserve">
        <path fill="#ffffff" d="M1901,61.424c-32,9.072-65,14.742-98,21.546c-5,0.566-10,1.701-15,2.268c-67,12.475-134,20.463-204,26.133
c-12,0.568-23,1.32-35,2.32c-3,0-7,0-10,0c-171,9-342-5.154-501-41.443c-74-17.576-145-35.179-223-47.652c-22-3.97-43-6.25-65-9.652
c-19-2.268-37-4.541-56-6.243c-16-1.134-30-2.838-46-3.972c-16-0.567-31-2.27-47-2.837c-12-0.567-25-1.135-37-1.135
c-39-1.701-77-1.134-116-1.134c-18,0.567-35,1.133-53,1.701c-11,0.567-21,1.134-32,1.701c-36,2.835-70,4.536-106,9.639
c-14,1.701-28,2.268-42,4.536c-16,2.835-32,4.536-48,6.804c-27,3.969-53,9.072-79,14.175c-21,3.969-42,6.804-62,12.474
c-8,2.835-17,3.97-26,6.237v61.803h1920c0,0,0-41.177,0-61.803C1914,58.589,1907,59.723,1901,61.424z"/>
      </svg>

      <svg version="1.1" class="squid" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 599.791 70.006" enable-background="new 0 0 599.791 70.006" xml:space="preserve">
        <path fill="#8454b2" d="M3.59,57.062c14.258,2.609,26.954,3.322,45.064,4.336c31.026,1.736,60.03,5.607,87.5,8.607H600V2.117
c-1-0.209-4.5-1.742-9.085-2.024c-15.235-0.936-24.562,5.212-25.282,17.615c-0.387,6.64,5.577,21.653,7.466,28.218
c0.551,1.914,1.133,3.824,1.72,5.736c0.333,1.652,2.957,10.368-0.289,14.17c-2.329,3.168-8.54,3.368-8.539,3.382
c-6.315-0.437-13.707-0.042-26.256-2.468c-11.784-2.745-22.354-10.288-34.179-17.144c-27.291-15.817-55.923-22.142-76.839-16.818
c-15.47,3.937-35.405,4.786-57.503,3.303c-5.525-0.369-12.069-1.365-17.982-3.054c-8.204-2.345-14.451-3.095-19.448-1.601
c-0.289,0.928-0.578,1.854-0.867,2.78c4.673,3.438,10.713,5.679,17.39,7.473c20.399,5.475,39.231,7.773,57.054,8.278
c14.119,0.4,27.865,0.395,41.869,0.667c9.836,0.192,19.912,2.162,30.441,7.127c2.85,1.343,5.859,2.587,8.846,3.844
c-14.709-1.902-29.02-3.938-43.217-5.982c-80.18-11.54-156.854-14.7-205.663-8.347c-36.096,4.698-79.343,13.983-142.006,5.535
c-20.386-2.749-31.942-2.604-48.058-3.591c-22.355-1.369-32.324-1.713-43.821,0C-2.929,49.217-0.177,56.168,3.59,57.062z
M582.406,46.718c-1.509,0-2.91-0.452-4.094-1.222c0.42,0.153,0.872,0.243,1.346,0.243c2.139,0,3.873-1.729,3.873-3.863
s-1.734-3.863-3.873-3.863s-3.873,1.729-3.873,3.863c0,0.445,0.08,0.871,0.219,1.269c-0.756-1.199-1.199-2.623-1.199-4.153
c0-4.268,3.403-7.728,7.602-7.728c4.199,0,7.602,3.46,7.602,7.728C590.008,43.258,586.605,46.718,582.406,46.718z"/>
      </svg>

      <div class="row padding-bottom body-text">
        <div class="col-sm-8 col-sm-offset-2">
          <p>If you want all the latest Bad Squiddo Games news straight into you inbox, then we recommend signing up to our <a href="https://us14.campaign-archive.com/home/?u=1a0d046d0be2b583aa915009c&id=15968b51b6" title="Mailchimp" target="_blank" rel="noopener">Newsletter.</a></p>
        </div>

        <div class="col-sm-2 col-sm-offset-2 hidden-xs text-center padding-top">
          <a href="/blog/xmas-opening-shipping" title="Read More">
            <picture>
              <source srcset="https://badsquiddogames.com/images/uploads/90/xmas_baggy-2__large.jpg" media="(min-width: 768px)">
              <img srcset="https://badsquiddogames.com/images/uploads/90/xmas_baggy-2__medium.jpg" class="img-responsive" alt="Xmas baggy-2">
            </picture>
          </a>
        </div>
        <div class="col-sm-6">
          <h2 class="underline bkg-white">Alles für die Forellenjagd</h2>
          <p>19/12/25</p>
          <p>We are out of office from 24th Dec - 5th January. Last pre-Christmas shipping date is 23rd December. The shop will be open during this time, just everything will be shipped on return...</p>
          <br>
          <a href="/blog/xmas-opening-shipping" class="btn" title="Alles für die Forellenjagd">Read More</a>
        </div>

        <div class="col-sm-2 col-sm-offset-2 hidden-xs text-center padding-top">
          <a href="/blog/krakon-games-in-stock" title="Read More">
            <picture>
              <source srcset="https://badsquiddogames.com/images/uploads/89/sad-jelly-1-2__large.jpg" media="(min-width: 768px)">
              <img srcset="https://badsquiddogames.com/images/uploads/89/sad-jelly-1-2__medium.jpg" class="img-responsive" alt="Sad-jelly-1-2">
            </picture>
          </a>
        </div>
        <div class="col-sm-6">
          <h2 class="underline bkg-white">Krakon Games in Stock</h2>
          <p>8/12/25</p>
          <p>Hey gang! Somehow we’re nearing mid December and I have no idea how that has happened...</p>
          <br>
          <a href="/blog/krakon-games-in-stock" class="btn" title="Krakon Games in Stock">Read More</a>
        </div>

        <div class="col-sm-2 col-sm-offset-2 hidden-xs text-center padding-top">
          <a href="/blog/new-and-lovely-goodies" title="Read More">
            <picture>
              <source srcset="https://badsquiddogames.com/images/uploads/88/sky-2__large.jpg" media="(min-width: 768px)">
              <img srcset="https://badsquiddogames.com/images/uploads/88/sky-2__medium.jpg" class="img-responsive" alt="Sky-2">
            </picture>
          </a>
        </div>
        <div class="col-sm-6">
          <h2 class="underline bkg-white">New and Lovely Goodies!</h2>
          <p>18/11/25</p>
          <p>Hey, what’s up? Let’s dive into some cool news! KICKSTARTER SHIPPING…</p>
          <br>
          <a href="/blog/new-and-lovely-goodies" class="btn" title="New and Lovely Goodies!">Read More</a>
        </div>
      </div>
    </div>

    <div class="container-fluid bkg-secondary padding-top padding-bottom-wave text-center">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="underline bkg-secondary">Get In Touch</h2>
          <ul class="get-in-touch">
            <li><a href="/cdn-cgi/l/email-protection#1b72757d745b797a7f686a6e727f7f747c7a767e6835787476" class="icon-envelope" title="Email Bad Squiddo Games"></a></li>
            <li><a href="https://bsky.app/profile/badsquiddogames.bsky.social" class="icon-bluesky" title="Bluesky" target="_blank" rel="noopener"></a></li>
            <li><a href="https://www.facebook.com/TheDiceBagLady/" class="icon-facebook" title="Facebook" target="_blank" rel="noopener"></a></li>
            <li><a href="https://www.youtube.com/channel/UCg9FbveRbyvs7y23sMafqtQ" class="icon-youtube" title="Youtube" target="_blank" rel="noopener"></a></li>
            <li><a href="https://www.instagram.com/badsquiddogames/" class="icon-instagram" title="Instagram" target="_blank" rel="noopener"></a></li>
          </ul>
        </div>
      </div>
    </div>

    <footer class="text-center">
      <div class="container-fluid bkg-dark padding-top padding-bottom wave-left">
        <svg version="1.1" class="wave" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 118.691" enable-background="new 0 0 1920 118.691" xml:space="preserve">
          <path fill="#333333" d="M1901,61.424c-32,9.072-65,14.742-98,21.546c-5,0.566-10,1.701-15,2.268c-67,12.475-134,20.463-204,26.133
c-12,0.568-23,1.32-35,2.32c-3,0-7,0-10,0c-171,9-342-5.154-501-41.443c-74-17.576-145-35.179-223-47.652c-22-3.97-43-6.25-65-9.652
c-19-2.268-37-4.541-56-6.243c-16-1.134-30-2.838-46-3.972c-16-0.567-31-2.27-47-2.837c-12-0.567-25-1.135-37-1.135
c-39-1.701-77-1.134-116-1.134c-18,0.567-35,1.133-53,1.701c-11,0.567-21,1.134-32,1.701c-36,2.835-70,4.536-106,9.639
c-14,1.701-28,2.268-42,4.536c-16,2.835-32,4.536-48,6.804c-27,3.969-53,9.072-79,14.175c-21,3.969-42,6.804-62,12.474
c-8,2.835-17,3.97-26,6.237v61.803h1920c0,0,0-41.177,0-61.803C1914,58.589,1907,59.723,1901,61.424z"/>
        </svg>

        <div class="row">
          <div class="col-sm-6 bkg-black">
            <h3 class="underline bkg-black">Join the Newsletter!</h3>
            <form action="//badsquiddogames.us14.list-manage.com/subscribe/post?u=1a0d046d0be2b583aa915009c&amp;id=15968b51b6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="form-inline validate" target="_blank" novalidate>
              <div id="mc_embed_signup_scroll">
                <p>If you pop your name and email address into the form below, you will receive all the latest news and updates straight into your inbox, as well as subscriber exclusive offers and competitions.</p>
                <div class="form-group">
                  <input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="Your name">
                </div>
                <div class="form-group">
                  <input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="Email">
                </div>
                <div id="mce-responses" class="clear">
                  <div class="response" id="mce-error-response" style="display:none"></div>
                  <div class="response" id="mce-success-response" style="display:none"></div>
                </div>
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input type="text" name="b_1a0d046d0be2b583aa915009c_15968b51b6" tabindex="-1" value="">
                </div>
                <button type="submit" class="btn">Join Up!</button>
              </div>
            </form>
          </div>

          <div class="col-sm-6">
            <h3 class="underline bkg-dark">Useful Information</h3>
            <ul class="large footer-links">
              <li><a href="/shipping-and-returns" title="Shipping &amp; Returns">Shipping &amp; Returns</a></li>
              <li><a href="/legal" title="Legal">Legal</a></li>
              <li><a href="/faq" title="FAQ">FAQ</a></li>
              <li><a href="/contact" title="Contact Bad Squiddo Games">Contact</a></li>
              <li><a href="/about" title="About Bad Squiddo Games">About</a></li>
              <li><a href="/links" title="Links">Links</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container-fluid bkg-black padding-top-half padding-bottom-half">
        <div class="row">
          <div class="col-sm-12">
            <p>&copy; 2026 Bad Squiddo Games. All rights reserved. VAT No. GB 316 6995 66. Website by <a href="http://cloudlevel.me" title="Cloudlevel" target="_blank" rel="noopener">Cloudlevel</a>.</p>
          </div>
        </div>
      </div>
    </footer>

  </div><!-- /#content-wrapper -->
</div><!-- /#page-wrapper -->

<?php get_footer(); ?>


