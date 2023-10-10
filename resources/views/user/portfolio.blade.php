@extends("main.main-layout")

@section("main-section")

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
      <div class="container">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
        </ol>
      </div>
    </nav>

    <!-- Main Wrapper Start -->
    <main id="content" class="main-content-wrapper overflow-hidden">
      <!-- Portfolio Start -->
      <div class="portfolio-area portfolio-blog-masonry">
        <div class="pb--30">
          <div class="text-center">
            <div class="portfolio-filters messonry-button">
              <button data-filter="*" class="is-checked">Filter All (22)</button>
              <button data-filter=".filter-company" class="">company (7)</button>
              <button data-filter=".filter-computer">computers (4)</button>
              <button data-filter=".filter-general">Gerneral (8)</button>
              <button data-filter=".filter-hipster">Hipster (12)</button>
              <button data-filter=".filter-food">Just Food (4)</button>
            </div>
          </div>
        </div>
        <div class="portfolio-wrapper mesonry-list row">

          <div class="resizer "></div>
          <div class=" portfolio-item portfolio-25 filter-company filter-computer">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio1.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio1.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-general filter-hipster">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio2.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio2.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-food filter-company">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio3.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio3.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-computer filter-hipster">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio4.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio4.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-general filter-hipster">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio5.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio5.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-computer">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio7.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio7.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-company filter-computer">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio7.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio7.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-general filter-hipster">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio8.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio8.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-food filter-company">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio9.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio9.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-food filter-hipster">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio18.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio18.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-company">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio11.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio11.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-computer">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio5.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio5.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-company filter-computer">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio12.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio12.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-general filter-hipster">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio13.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio13.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-food filter-company">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio14.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio14.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-computer filter-hipster">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio15.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio15.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-company">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio16.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio16.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-computer filter-hipster">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio17.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio17.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-company">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio18.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio18.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
          <div class=" portfolio-item portfolio-25 filter-general filter-hipster">
            <div class="portfolio">
              <div class="portfolio__image">
                <img src="image/others/portfolio/porfolio19.jpg" alt="Portfolio Image">
              </div>
              <div class="portfolio__content">
                <div class="portfolio__icon">
                  <a href="single-portfolio.html"><i class="fas fa-link"></i></a>
                  <a href="image/others/portfolio/porfolio19.jpg" class="popup-link"><i class="fa fa-search"></i></a>
                </div>
                <h4 class="portfolio__title">Coffee &amp; Cookie Time</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="portfolio-btn-group text-center">
          <a href="#" class="btn btn-portfolio">Load More (2)</a>
        </div>

      </div>
      <!-- Portfolio End -->
    </main>

@endSection
