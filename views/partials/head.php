<!DOCTYPE html>
<html lang="en" class="px-0 w-full min-w-screen-md mx-0 font-sans ">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/2e59257349.js" crossorigin="anonymous"></script>
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/logo/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/logo/site.webmanifest">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
    <link rel="shortcut icon" href="/assets/images/logo/favicon.ico" type="image/x-icon">
    <title class="font-sans">Sautis </title>

    <style>
   

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

    #myText {

        clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
    }
    @keyframes ping {
  75%, 100% {
    transform: scale(2);
    opacity: 0;
  }
}
.line {
  width: 100%;
  max-width: 800px;
  height: 8px;
  margin: 0 0 10px 0;
  position: relative;
  display: inline-block;
  background-color: rgba(255,255,255,1);
}


/* Not great browser support :(
html {
  scroll-behavior: smooth;
} 
*/
nav {
  position: fixed;
  top: 10px;
  right: 10px;
  background: black;
  padding: 0px 10px;
}
nav a {
  color: white;
  font-size: 1.3em;
  line-height: 1.7;
  text-decoration: none;
}
nav a:hover {
  text-decoration: underline;
}

nav a.active {
  color: red;
}

    </style>

</head>

<body class="bg-white dark:bg-slate-950 h-100 w-full text-center text-slate-700 dark:text-slate-100  ">
  