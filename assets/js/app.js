
// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('dark');
} else {
    document.documentElement.classList.remove('dark')
}


const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

// Change the icons inside the button based on previous settings
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
themeToggleLightIcon.classList.remove('hidden');
} else {
themeToggleDarkIcon.classList.remove('hidden');
}

const themeToggleBtn = document.getElementById('theme-toggle');

themeToggleBtn.addEventListener('click', function() {

// toggle icons inside button
themeToggleDarkIcon.classList.toggle('hidden');
themeToggleLightIcon.classList.toggle('hidden');

// if set via local storage previously
if (localStorage.getItem('color-theme')) {
    if (localStorage.getItem('color-theme') === 'light') {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
    } else {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('color-theme', 'light');
    }

// if NOT set via local storage previously
} else {
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('color-theme', 'light');
    } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('color-theme', 'dark');
    }
}

});

const backToTop = document.getElementById('backToTop');

  // Show/hide back to top button based on scroll position
  window.addEventListener('scroll', function() {
    if (window.scrollY > 0) {
      backToTop.classList.remove('hidden');
    } else {
      backToTop.classList.add('hidden');
    }
  });

  // Scroll to top on click
  backToTop.addEventListener('click', function(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  //go back button
  function goBack() {
    window.history.back();
    }

//sidebar
    const sideBar = document.getElementById("mobile-nav");
    const openSidebar = document.getElementById("openSideBar");
    const closeSidebar = document.getElementById("closeSideBar");
    sideBar.style.transform = "translateX(-260px)";

    function sidebarHandler(flag) {
        if (flag) {
            sideBar.style.transform = "translateX(0px)";
            openSidebar.classList.add("hidden");
            closeSidebar.classList.remove("hidden");
        } else {
            sideBar.style.transform = "translateX(-260px)";
            closeSidebar.classList.add("hidden");
            openSidebar.classList.remove("hidden");
        }
    }