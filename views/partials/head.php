<!DOCTYPE html>
<html lang="en" class="px-0 w-full min-w-screen-md mx-0 font-sans ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2e59257349.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logo/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/logo/site.webmanifest">
    <link rel="shortcut icon" href="/assets/images/logo/favicon.ico" type="image/x-icon">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title class="font-sans">Sautis </title>

    <style>
   

section {
  width: 100%;
}

.outer-wrapper {
  max-width: 100vw;
  overflow-x: scroll;
  position: relative;
  scrollbar-color: lightgreen #f7fafc;
  scrollbar-width: thin;
  -ms-overflow-style: none;
}

.pseduo-track {
  background-color: #f7fafc;
  height: 2px;
  width: 100%;
  position: relative;
  top: -3px;
  z-index: -10;
}

@media (any-hover: none) {
  .pseduo-track {
    display: none;
  }
}

.outer-wrapper::-webkit-scrollbar {
  height: 5px;
}

.outer-wrapper::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0);
}

.outer-wrapper::-webkit-scrollbar-thumb {
  height: 5px;
  background-color: #d5ac68;
}

.outer-wrapper::-webkit-scrollbar-thumb:hover {
  background-color: inherit;
}

.outer-wrapper::-webkit-scrollbar:vertical {
  display: none;
}

.inner-wrapper {
  display: flex;
  padding-bottom: 10px;
}

.pseudo-item {
  height: 300px;
  width: 369px;
  margin-right: 59px;
  flex-shrink: 0;
  background-color: inherit;
}

.pseudo-item:nth-of-type(2n) {
  background-color: inherit;
}

    @media screen and (max-width: 980px) {
        .button {
            display: none;
        }
    }

    @media screen and (min-width: 980px) {
        .button2 {
            display: none;
        }
    }

    @media screen and (max-width: 980px) {
        .sidebarPage {
            display: none;
        }
    }

    .scrollbar::-webkit-scrollbar {
        height: 4px;
    }

    .scrollbar::-webkit-scrollbar-thumb {
        background-color: rgba(156, 163, 175, 0.8);
        border-radius: 4px;
    }

    .scrollbar::-webkit-scrollbar-track {
        background-color: rgba(209, 213, 219, 0.5);
    }

    @keyframes ping {

        75%,
        100% {
            transform: scale(2);
            opacity: 0;
        }
    }

    /* Tailwind CSS */
.animateSpin {
  animation: spin 2s linear infinite;
}

@keyframes spin {
  100% { transform: rotate(360deg); }
}

    </style>

</head>

<body class="bg-white dark:bg-slate-950 h-100 w-full text-center text-slate-700 dark:text-slate-100 
 ">