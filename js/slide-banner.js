function slide() {
  let time = 10000;
  let currentImageIndex = 0;
  let images = document.querySelectorAll(".banner");
  let max = images.length;
  const btnSlide = document.querySelectorAll(".btn-slide-banner");

  if (max <= 1) {
    btnSlide.forEach(function (item, index) {
      if (index === 0) {
        item.classList.add("hidden");
      }
    });
  }

  images.forEach(function (item, index) {
    if (index === 0) {
      item.classList.add("selected");
    }
  });

  btnSlide.forEach(function (item, index) {
    if (index === 0) {
      item.classList.add("active");
    }
  });

  btnSlide.forEach(function (item) {
    item.addEventListener("click", function () {
      images.forEach(function (img) {
        img.classList.remove("selected");
      });
      item.previousElementSibling.classList.add("selected");
      btnSlide.forEach(function (btn) {
        btn.classList.remove("active");
      });
      item.classList.add("active");
    });
  });

  function nextImage() {
    images[currentImageIndex].classList.remove("selected");

    currentImageIndex++;
    if (currentImageIndex >= max) {
      currentImageIndex = 0;
    }
    images[currentImageIndex].classList.add("selected");

    btnSlide.forEach(function (item) {
      if (item.previousElementSibling.classList.contains("selected")) {
        btnSlide.forEach(function (btn) {
          btn.classList.remove("active");
        });
        item.classList.add("active");
      }
    });
  }

  function startSlide() {
    setInterval(() => {
      nextImage();
    }, time);
  }

  window.addEventListener("load", startSlide);
}

slide();