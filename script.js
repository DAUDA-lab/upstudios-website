const texts = [
  "Capturing Precious Moments",
  "Your Story Through Our Lens",
  "Make Every Moment Count"
];
let i = 0;
setInterval(() => {
  document.getElementById("rotating-text").innerText = texts[i];
  i = (i + 1) % texts.length;
}, 5000);
