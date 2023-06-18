const myText = document.getElementById("myText");
const text = "Sautis Home";
let index = 0;

function typeWriter() {
  if (index < text.length) {
    myText.innerHTML += text.charAt(index);
    index++;
    gsap.delayedCall(0.15, typeWriter);
  }
}

typeWriter();
