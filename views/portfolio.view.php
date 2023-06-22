<?php


require_once 'partials/head.php';

$heading = 'Sautis Portfolio';

require_once 'partials/nav.php';

require_once 'partials/banner.php';


 ?>  

<main>
    
    <!-- ====== Portfolio Section Start -->
<section
  x-data="
        {
          showCards: 'all',
          activeClasses: 'bg-primary text-white',
          inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
        }
      "
  class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]"
>
  <div class="container mx-auto">
    <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
        <div class="mx-auto mb-[60px] max-w-[510px] text-center">
          <span class="text-primary mb-2 block text-lg font-semibold">
            Our Portfolio
          </span>
          <h2
            class="text-dark mb-4 text-3xl font-bold sm:text-4xl md:text-[40px]"
          >
            Our Recent Projects
          </h2>
          <p class="text-body-color text-base">
            There are many variations of passages of Lorem Ipsum available but
            the majority have suffered alteration in some form.
          </p>
        </div>
      </div>
    </div>
    <div class="-mx-4 flex flex-wrap justify-center">
      <div class="w-full px-4">
        <ul class="mb-12 flex flex-wrap justify-center space-x-1">
          <li class="mb-1">
            <button
              @click="showCards = 'all' "
              :class="showCards == 'all' ? activeClasses : inactiveClasses "
              class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
            >
              All Projects
            </button>
          </li>
          <li class="mb-1">
            <button
              @click="showCards = 'branding' "
              :class="showCards == 'branding' ? activeClasses : inactiveClasses "
              class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
            >
              Branding
            </button>
          </li>
          <li class="mb-1">
            <button
              @click="showCards = 'design' "
              :class="showCards == 'design' ? activeClasses : inactiveClasses "
              class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
            >
              Design
            </button>
          </li>
          <li class="mb-1">
            <button
              @click="showCards = 'marketing' "
              :class="showCards == 'marketing' ? activeClasses : inactiveClasses "
              class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
            >
              Marketing
            </button>
          </li>
          <li class="mb-1">
            <button
              @click="showCards = 'development' "
              :class="showCards == 'development' ? activeClasses : inactiveClasses "
              class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8"
            >
              Development
            </button>
          </li>
        </ul>
      </div>
    </div>
    <div class="-mx-4 flex flex-wrap">
      <div
        :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
        class="w-full px-4 md:w-1/2 xl:w-1/3"
      >
        <div class="relative mb-12">
          <div class="overflow-hidden rounded-lg">
            <img
              src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-01.jpg"
              alt="portfolio"
              class="w-full"
            />
          </div>
          <div
            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
          >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Branding
            </span>
            <h3 class="text-dark mb-4 text-xl font-bold">Branding Design</h3>
            <a
              href="javascript:void(0)"
              class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-white"
            >
              View Details
            </a>
          </div>
        </div>
      </div>
      <div
        :class="showCards == 'all' || showCards == 'marketing' ? 'block' : 'hidden' "
        class="w-full px-4 md:w-1/2 xl:w-1/3"
      >
        <div class="relative mb-12">
          <div class="overflow-hidden rounded-lg">
            <img
              src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-02.jpg"
              alt="portfolio"
              class="w-full"
            />
          </div>
          <div
            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
          >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Marketing
            </span>
            <h3 class="text-dark mb-4 text-xl font-bold">
              Best Marketing tips
            </h3>
            <a
              href="javascript:void(0)"
              class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-white"
            >
              View Details
            </a>
          </div>
        </div>
      </div>
      <div
        :class="showCards == 'all' || showCards == 'development' ? 'block' : 'hidden' "
        class="w-full px-4 md:w-1/2 xl:w-1/3"
      >
        <div class="relative mb-12">
          <div class="overflow-hidden rounded-lg">
            <img
              src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-03.jpg"
              alt="portfolio"
              class="w-full"
            />
          </div>
          <div
            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
          >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Development
            </span>
            <h3 class="text-dark mb-4 text-xl font-bold">Web Design Trend</h3>
            <a
              href="javascript:void(0)"
              class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-white"
            >
              View Details
            </a>
          </div>
        </div>
      </div>
      <div
        :class="showCards == 'all' || showCards == 'design' ? 'block' : 'hidden' "
        class="w-full px-4 md:w-1/2 xl:w-1/3"
      >
        <div class="relative mb-12">
          <div class="overflow-hidden rounded-lg">
            <img
              src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-04.jpg"
              alt="portfolio"
              class="w-full"
            />
          </div>
          <div
            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
          >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Design
            </span>
            <h3 class="text-dark mb-4 text-xl font-bold">
              Business Card Design
            </h3>
            <a
              href="javascript:void(0)"
              class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-white"
            >
              View Details
            </a>
          </div>
        </div>
      </div>
      <div
        :class="showCards == 'all' || showCards == 'marketing' ? 'block' : 'hidden' "
        class="w-full px-4 md:w-1/2 xl:w-1/3"
      >
        <div class="relative mb-12">
          <div class="overflow-hidden rounded-lg">
            <img
              src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-05.jpg"
              alt="portfolio"
              class="w-full"
            />
          </div>
          <div
            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
          >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Marketing
            </span>
            <h3 class="text-dark mb-4 text-xl font-bold">Digital marketing</h3>
            <a
              href="javascript:void(0)"
              class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-white"
            >
              View Details
            </a>
          </div>
        </div>
      </div>
      <div
        :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
        class="w-full px-4 md:w-1/2 xl:w-1/3"
      >
        <div class="relative mb-12">
          <div class="overflow-hidden rounded-lg">
            <img
              src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-06.jpg"
              alt="portfolio"
              class="w-full"
            />
          </div>
          <div
            class="relative z-10 mx-7 -mt-20 rounded-lg bg-white py-9 px-3 text-center shadow-lg"
          >
            <span class="text-primary mb-2 block text-sm font-semibold">
              Branding
            </span>
            <h3 class="text-dark mb-4 text-xl font-bold">Creative Agency</h3>
            <a
              href="javascript:void(0)"
              class="text-body-color hover:bg-primary hover:border-primary inline-block rounded-md border py-3 px-7 text-sm font-semibold transition hover:text-white"
            >
              View Details
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Portfolio Section End -->

  
    
</main>
<?php
require_once 'partials/footer.php';
?>