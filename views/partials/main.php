<!-- component -->
<section class="pt-24 pb-24 bg-inherit rounded-full ">
    <div class="px-5 mx-0 max-w-7xl">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
            <h1 class="animate__animated animate__zoomIn animate__delay-1s mb-8 text-4xl text-center font-extrabold leading-none tracking-normal
             text-slate-500 dark:text-slate-300 md:text-6xl md:tracking-tight">
                <span>Looking to </span> <span class="block w-full py-2 text-transparent bg-clip-text leading-12 
                bg-gradient-to-r from-green-500 to-yellow-400 lg:inline">build a buzz </span> <span>around your
                    product?</span>
            </h1>
            <p
                class="animate__animated animate__fadeInLeft animate__delay-2s px-0 mb-8 text-lg text-center text-slate-600 dark:text-slate-400 md:text-xl lg:px-24">
                Start gaining the traction you've always wanted with our next-level templates and designs. Crafted to
                help you tell your story.
            </p>
            <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
                <a href="#_" class="inline-flex items-center justify-center  mb-2 text-lg 
                   sm:w-auto sm:mb-0
                 w-full md:w-auto bg-slate-800 dark:bg-slate-800 text-slate-50 dark:text-slate-300 px-8 py-4 
            rounded-md hover:bg-slate-900 hover:text-slate-200 dark:hover:text-slate-200 border-none active:text-green-600 dark:active:text-green-600
             place-items-center font-semibold mt-4 md:mt-0 focus:outline-none dark:hover:bg-slate-900 active:ring-green-600 
            focus:ring-2 focus:ring-green-600 dark:focus:ring-green-600  focus:ring-opacity-50
                 
                 
                 ">
                    Get Started
                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="#_"
                    class="inline-flex items-center justify-center  mb-2 text-lg 
                   sm:w-auto sm:mb-0
                 w-full md:w-auto bg-slate-100 dark:bg-slate-200 text-slate-700 dark:text-slate-700 px-8 py-4 
            rounded-md hover:bg-slate-900 hover:text-slate-300 dark:hover:text-slate-200 border-none active:text-green-600 dark:active:text-green-600
             place-items-center font-semibold mt-4 md:mt-0 focus:outline-none dark:hover:bg-slate-900 active:ring-green-600 
            focus:ring-2 focus:ring-green-600 dark:focus:ring-green-600  focus:ring-opacity-50">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                        </path>
                    </svg>
                </a>
             

            </div>
        </div>
        <div class=" w-full mx-auto mt-20 text-center md:w-10/12">
            <div class="relative z-0 w-full mt-8">
                <div class="relative overflow-hidden shadow-2xl">
                    <div
                        class="flex items-center flex-none px-4 bg-slate-300 dark:bg-slate-900  rounded-b-none h-11 rounded-xl">
                        <div class="flex space-x-1.5 bg-transparent">
                            <div class="w-3 h-3 border-2 border-slate-200 dark:border-slate-500 rounded-full"></div>
                            <div class="w-3 h-3 border-2 border-slate-200 dark:border-slate-500  rounded-full"></div>
                            <div class="w-3 h-3 border-2 border-slate-200 dark:border-slate-500  rounded-full"></div>
                        </div>
                    </div>
                    <section id="my-section">
                        <img class="h-full w-auto my-5 mx-5 pr-10 animate__bounce"
                            src="/assets/images/logo/logo-main.png">
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
const section = document.querySelector('#my-section');
const img = section.querySelector('img');

const observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting) {
        img.classList.add('animate__animated');
    } else {
        img.classList.remove('animate__animated');
    }
});

observer.observe(section);
</script>


<!-- HTML
<a href="#" id="rotate-image">
  <img class="h-20 w-auto" src="assets/images/404-bg-red.png" alt="Image">
</a>
<script>
    // JavaScript
const rotateImage = () => {
  const image = document.querySelector('#rotate-image img');
  image.classList.add('animateSpin', 'duration-300');
  setTimeout(() => {
    image.classList.remove('animate-spin', 'duration-3000');
  }, 3000);
};

document.querySelector('#rotate-image').addEventListener('click', rotateImage);

</script>
 -->