const buttons = document.querySelectorAll("button");

buttons.forEach((button) => {
  button.addEventListener("click", () => {
    const faq = button.nextElementSibling;
    const img = button.children[1];

    faq.classList.toggle("show");
    img.classList.toggle("rotate");
  });
});
