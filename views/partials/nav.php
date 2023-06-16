<header>
<nav class="sticky top-0 z-50 bg-slate-100 border-slate-200 px-2.5 font-sans text-sm capitalize 
                font-bold lg:px-6 py-2.5 dark:bg-slate-950">           
                <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="/" class="flex items-center">
                    <img src="/assets/images/logo/sautis-website-favicon-color.svg" class="mr-3 h-6 sm:h-9" alt="Sautis Logo" />
                    <span   class=" font-sans uppercase self-center text-lg font-semibold whitespace-nowrap
                    text-transparent dark:text-transparent bg-clip-text dark:bg-clip-text bg-gradient-to-l dark:bg-gradient-to-l
                    from-green-600 to-yellow-500 dark:from-green-500 dark:to-yellow-500 p-1">Sautis</span>
                </a>
                <div class="flex items-center lg:order-2">
                <button id="theme-toggle" type="button" class="text-slate-600 dark:hover:text-slate-600 rounded-full bg-no dark:text-slate-200
                 hover:bg-slate-300 dark:hover:bg-slate-300 focus:outline-none focus:ring-2 focus:ring-slate-300 
                  dark:focus:ring-slate-300 text-sm p-2 m-1">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                </button>
                <span class="text-slate-500 dark:text-slate-200 px-1 text-xl inline">|</span>
                    <a href="#" class="text-slate-800 hover:text-green-400 dark:text-slate-200 bg-slate-200
                     dark:bg-slate-600 hover:bg-slate-200 dark:hover:bg-slate-700  focus:ring-4 dark:hover:text-green-400
                     focus:ring-slate-400 dark:focus:ring-slate-800 font-medium rounded-lg text-xs px-2.5 py-1.5 mr-2 ml-2
                     focus:outline-none ">Log in | Join</a>

                    <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-slate-500 rounded-lg lg:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200 dark:text-slate-400 dark:hover:bg-slate-700 dark:focus:ring-slate-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </div>
               
                
                <div class=" hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                        <li>
                        <a href="/" class="<?= urlIs('/') ? '  text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100 hover:bg-slate-100 lg:hover:bg-transparent lg:border-0
                         lg:hover:text-green-500 lg:p-0 lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700">Home
                        </a>
                        </li>
                        <li>
                            <a href="/about"
                             class="<?= urlIs('/about') ? ' text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100
                             hover:bg-slate-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0
                               lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700">about
                              
                            </a>
                        </li>
                        <li>
                            <a href="/contact" 
                            class="<?= urlIs('/contact') ? ' text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100
                             hover:bg-slate-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0
                               lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700">contact
                            </a>
                        </li>
                        <li>
                            <a href="/services" 
                            class="<?= urlIs('/services') ? ' text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100
                             hover:bg-slate-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0
                               lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700">services
                               
                            </a>
                        </li>
                        <li>
                            <a href="/cases" 
                            class="<?= urlIs('/cases') ? ' text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100 hover:bg-slate-100 lg:hover:bg-transparent lg:border-0
                         lg:hover:text-green-500 lg:p-0 lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700">cases
                              
                            </a>
                        </li>
                        <li>
                            <a href="/portfolio"  
                            class="<?= urlIs('/portfolio') ? ' text-green-500 dark:text-green-400' : 'text-slate-700 dark:text-slate-400' ?>
                        block py-2 pr-4 pl-3 border-b border-slate-100 hover:bg-slate-100 lg:hover:bg-transparent lg:border-0 lg:hover:text-green-500 lg:p-0
                               lg:dark:hover:text-green-500 dark:hover:bg-slate-700 dark:hover:text-green-500 
                              lg:dark:hover:bg-transparent dark:border-slate-700">portfolio</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
