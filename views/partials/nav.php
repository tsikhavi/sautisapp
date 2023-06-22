<header>
    <nav class="sticky top-0 z-50 bg-white border-slate-200 px-2.5 font-sans text-sm capitalize 
                font-bold lg:px-6 py-5 dark:bg-slate-950">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="/" class="flex items-center">
            <div class="h-8 w-8 m-2">
                <img src="/assets/images/logo/sautis-website-favicon-black.svg" alt="Light mode" class="block dark:hidden" />
                <img src="/assets/images/logo/sautis-website-favicon-white.svg" alt="Dark mode" class="hidden dark:block" />
                
                </div>
                <!--
                <p class=" inline font-sans uppercase self-center text-lg font-semibold whitespace-nowrap text-slate-700 dark:text-slate-300 p-1">Sautis</p>    
-->
            </a>
            <div class="flex items-center lg:order-2">
                <button id="theme-toggle" type="button" class="text-slate-600 dark:hover:text-slate-600 rounded-full bg-no dark:text-slate-200
                 hover:bg-slate-300 dark:hover:bg-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-300 
                  dark:focus:ring-slate-300 text-sm p-2 m-1">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <span class="text-slate-500 dark:text-slate-200 px-1 text-xl inline">|</span>

   <!-- ====== Modal Section Start -->
   <section x-data="{modalOpen: false}">
  <div class="container mx-auto py-auto">
    <button
      @click="modalOpen = true"
      class="bg-inherite rounded-full py-3 px-6  text-base font-medium text-inherit
      inline-flex items-center justify-center  mb-2  
                   sm:w-auto sm:mb-0
                 w-full md:w-auto bg-slate-100 dark:bg-slate-200 text-slate-700 dark:text-slate-700 
            hover:bg-slate-900 hover:text-slate-300 dark:hover:text-slate-200 border-none active:text-green-600 dark:active:text-green-600
             place-items-center mt-4 md:mt-0 focus:outline-none dark:hover:bg-slate-900 active:ring-green-600 
            focus:ring-2 focus:ring-green-600 dark:focus:ring-green-600  focus:ring-opacity-50
      
      "
    >
      Login
    </button>
  </div>
  <div
    x-show="modalOpen"
    x-transition
    class="fixed top-0 left-0 flex h-full min-h-screen w-full items-center justify-center bg-white dark:bg-slate-950 bg-opacity-90 px-4 py-5 z-50"

  >
    <div
      @click.outside="modalOpen = false"
      class="w-full max-w-[570px] rounded-[20px] bg-inherit py-12 px-8 text-base text-inherit text-center md:py-[60px] md:px-[70px]"
    >
      <h3 class="text-dark pb-2 text-xl font-bold sm:text-2xl">
        Your Message Sent Successfully
      </h3>
      <span
        class="bg-primary mx-auto mb-6 inline-block h-1 w-[90px] rounded"
      ></span>
      <p class="text-body-color mb-10 text-base leading-relaxed">
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text ever
        since
      </p>
      <div class="-mx-3 flex flex-wrap">
        <div class="w-1/2 px-3">
          <button
            @click="modalOpen = false"
            class="text-dark block w-full rounded-lg border border-[#E9EDF9] p-3 text-center text-base font-medium transition hover:border-red-600 hover:bg-red-600 hover:text-"
          >
            Cancel
          </button>
        </div>
        <div class="w-1/2 px-3">
          <button
            class="text-dark block w-full rounded-lg border border-[#E9EDF9] p-3 text-center text-base font-medium transition hover:border-green-600 hover:bg-green-600 hover:text-slate-100"
          >
            View Details
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ====== Modal Section End -->

               

                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-slate-500 rounded-lg lg:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200 dark:text-slate-400 dark:hover:bg-slate-700 dark:focus:ring-slate-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>


            <div class=" hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/" class="<?= urlIs('/') ? '  text-green-800 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100 hover:bg-slate-100 lg:hover:bg-transparent lg:border-0
                         lg:hover:text-green-500 lg:p-0 lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 text-sm 
                              lg:dark:hover:bg-transparent dark:border-slate-700">Home
                        </a>
                    </li>
                    <li>
                        <a href="/about" class="<?= urlIs('/about') ? ' text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100 text-sm
                             hover:bg-slate-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0
                               lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700">about

                        </a>
                    </li>
                    <li>
                        <a href="/contact" class="<?= urlIs('/contact') ? ' text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100 text-sm
                             hover:bg-slate-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0
                               lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700">contact
                        </a>
                    </li>
                    <li>
                        <a href="/services" class="<?= urlIs('/services') ? ' text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100 text-sm
                             hover:bg-slate-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0
                               lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700">services

                        </a>
                    </li>
                    <li>
                        <a href="/cases" class="<?= urlIs('/cases') ? ' text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100 hover:bg-slate-100 lg:hover:bg-transparent lg:border-0
                         lg:hover:text-green-500 lg:p-0 lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700 text-sm">cases

                        </a>
                    </li>
                    <li>
                        <a href="/portfolio" class="<?= urlIs('/portfolio') ? ' text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100 hover:bg-slate-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0
                               lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700 text-sm">portfolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>