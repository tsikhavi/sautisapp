<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<main>

    <div
        class="flex items-center mt-0 flex-col justify-center lg:flex-row py-10 px-6 md:px-24 md:py-10 lg:py-10 gap-16 lg:gap-28">
        <div class="w-full lg:w-1/2">
            <h1 class="button2 flex-inline py-4 text-3xl lg:text-4xl font-extrabold text-slate-700 dark:text-slate-100">
                Error  
                <i class="fa-regular fa-circle-question fa-spin fa-spin-reverse px-2 text-slate-600 font-extrabold"></i>
            </h1>

            <img class="" src="assets/images/404-bg-red.png" alt="404-error-with-a-cute-animal" />
            <p class="text-sm text-slate-700 dark:text-slate-200 ">Image Source:
                <a class="text-gray-500 hover:text-gray-400 underline text-xs px-1" href="https://storyset.com/web"
                    alt="Creative Commons License Attribute">
                    Web illustrations by Storyset</a>
            </p>
            <button onclick="goBack()" class="flex-inline bg-slate-700 dark:bg-red-500 my-4 rounded-full py-2.5 px-5  text-slate-100 hover:bg-slate-600 dark:hover:bg-slate-700 focus:outline-none 
                focus:ring-2 focus:ring-slate-600 focus:ring-opacity-50 "><i
                    class="fa-solid fa-angle-left px-1 inline"></i>Go Back</button>
            <button class="button2 flex-inline my-4 rounded-full px-5 py-2.5 bg-green-600 text-white hover:bg-slate-700 dark:hover:bg-slate-700 focus:outline-none 
                focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50">Homepage<i
                    class="fa-solid fa-house-user px-1 "></i>
            </button>

        </div>
        <div class="button lg:w-1/2">
            <h1 class="flex-inline py-4 text-3xl lg:text-4xl font-extrabold text-slate-700 dark:text-slate-100"
                >Error <span class="p-2"id="typed"></span>

            </h1>
            <h2 class="flex-inline py-4 text-3xl lg:text-4xl font-extrabold text-slate-700 dark:text-slate-100">
                Sautis - Empowering Your Digital Presence
                <span class="relative inline h-3 w-3">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span>
                </span>
            </h2>
            <p class="py-4 text-base text-gray-800 dark:text-white">
                The requested content is unavailable. It may have been removed, or there might be an error in the link
                you entered.
            </p>
            <p class="py-2 text-base text-gray-800 dark:text-white">
                We apologize for any inconvenience caused. To navigate to the desired destination, kindly visit our
                homepage. </p>
            <a href="/">
                <div class=" mx-4">
                    <button class="flex-inline my-4 rounded-full px-5 py-2.5 bg-red-600 text-white hover:bg-slate-700 dark:hover:bg-slate-700 focus:outline-none 
                focus:ring-2 focus:ring-gray-600 focus:ring-opacity-50">
                        Go to The Homepage<i class="fa-solid fa-house-user px-1 "></i></button>

                </div>

            </a>
        </div>

    </div>

</main>

<?php require('partials/footer.php') ?>