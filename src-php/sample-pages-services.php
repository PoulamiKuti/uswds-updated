<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>City Government - RFPMart + USWDS</title>
    <meta name="description" content="Explore city government departments, leadership, services, and public resources in one place." />

    <?php require_once '1_head.php'; ?>
</head>

<body>
    <?php require_once '2_nav.php'; ?>

    <main id="main-content">
    <section class="usa-hero bg-primary-lighter" style="background-image: url('images/webp/bg-city-gov.webp');" aria-label="Services Introduction">
        <div class="grid-container">
        <div class="usa-hero__callout maxw-mobile-lg">
            <nav class="usa-breadcrumb bg-transparent" aria-label="Breadcrumbs">
                <ul class="usa-breadcrumb__list">
                    <li class="usa-breadcrumb__list-item">
                        <a href="./" class="usa-breadcrumb__link">
                            <span class="text-base-lightest hover:text-base-light">Home</span>
                        </a>
                    </li>
                    <li class="usa-breadcrumb__list-item">
                        <a href="#" class="usa-breadcrumb__link">
                            <span class="text-base-lightest hover:text-base-light">Services</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <h1 class="usa-hero__heading margin-top-1 text-base-lightest">City Services</h1>
            <p>Access essential services provided by the City of RFPMart.</p>
        </div>
        </div>
    </section>
    <section class="usa-section grid-container">
  <div class="margin-bottom-4 border-bottom-05">
    <h2 class="font-heading-xl">Service Categories</h2>
  </div>

  <div class="grid-row grid-gap-3">
    <!-- Residents -->
    <div class="tablet:grid-col-4 margin-bottom-2">
      <a href="#" class="usa-card usa-card--hover  text-no-underline">
        <div class="usa-card__container">
          <div class="usa-card__header">
            <h3 class="usa-card__heading">
              🏠 Residents
            </h3>
          </div>
          <div class="usa-card__body">
            <ul class="usa-list">
              <li>Utilities & bills</li>
              <li>Housing services</li>
              <li>Waste management</li>
            </ul>
          </div>
          <div class="usa-card__footer">
            <span class="usa-link">Explore resident services →</span>
          </div>
        </div>
      </a>
    </div>

    <!-- Businesses -->
    <div class="tablet:grid-col-4  margin-bottom-2">
      <a href="#" class="usa-card usa-card--hover  text-no-underline">
        <div class="usa-card__container">
          <div class="usa-card__header">
            <h3 class="usa-card__heading">
              🏢 Businesses
            </h3>
          </div>
          <div class="usa-card__body">
            <ul class="usa-list">
              <li>Licenses & permits</li>
              <li>Zoning</li>
              <li>Economic development</li>
            </ul>
          </div>
          <div class="usa-card__footer">
            <span class="usa-link">Explore business services →</span>
          </div>
        </div>
      </a>
    </div>

    <!-- Visitors -->
        <div class="tablet:grid-col-4  margin-bottom-2">
        <a href="#" class="usa-card usa-card--hover  text-no-underline">
            <div class="usa-card__container">
            <div class="usa-card__header">
                <h3 class="usa-card__heading">
                🧭 Visitors
                </h3>
            </div>
            <div class="usa-card__body">
                <ul class="usa-list">
                <li>Transportation</li>
                <li>Events & tourism</li>
                <li>City information</li>
                </ul>
            </div>
            <div class="usa-card__footer">
                <span class="usa-link">Explore visitor services →</span>
            </div>
            </div>
        </a>
        </div>
    </div>
</section>
<section class="usa-section">
  <div class="grid-container">
    <div class="margin-bottom-4 border-bottom-05">
      <h2 class="font-heading-xl">How City Services Work</h2>
    </div>
      <p class="font-body-md line-height-sans-5">
        A simple guide to help you complete services smoothly.
      </p>
    <div class="grid-row grid-gap-4 text-center">
      <div class="tablet:grid-col-3  margin-bottom-2">
        <div class="border-top-1 border-primary bg-primary-lighter padding-4">
            <h3 class="font-heading-md">1. Find</h3>
            <p>Search or browse services by category.</p>
        </div>
      </div>

      <div class="tablet:grid-col-3  margin-bottom-2">
        <div class="border-top-1 border-primary bg-primary-lighter padding-4">
            <h3 class="font-heading-md">2. Apply</h3>
            <p>Submit requests or applications online.</p>
        </div>
      </div>

      <div class="tablet:grid-col-3  margin-bottom-2">
        <div class="border-top-1 border-primary bg-primary-lighter padding-4">
            <h3 class="font-heading-md">3. Track</h3>
            <p>Check status and receive updates.</p>
        </div>
      </div>

      <div class="tablet:grid-col-3  margin-bottom-2">
        <div class="border-top-1 border-primary bg-primary-lighter padding-4">
            <h3 class="font-heading-md">4. Complete</h3>
            <p>Get confirmation or service delivery.</p>
        </div>
      </div>
    </div>
  </div>
</section>


    <section class="usa-section bg-base-lightest">
        <div class="grid-container">
            <div class="grid-row grid-gap-4 flex-align-center">
            <div class="tablet:grid-col-8">
                <h2 class="font-heading-xl">Need help finding a service?</h2>
                <p>Our support team can help guide you to the right department.</p>
            </div>
            <div class="tablet:grid-col-4">
                <a href="contact.html" class="usa-button width-full">Contact Support</a>
            </div>
        </div>
        </div>
    </section>

    </main>

    <?php require_once 'utility-popular-services.php'; ?>

    <?php require_once '9_footer.php'; ?>

    <script src="uswds/dist/js/uswds.min.js"></script>
</body>

</html>