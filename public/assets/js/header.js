document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuButton = document.getElementById("mobile-menu");
  const navLinks = document.getElementById("nav-links");

  mobileMenuButton.addEventListener("click", function () {
    navLinks.classList.toggle("active");
    mobileMenuButton.classList.toggle("open");
  });

  // Change header background on scroll
  window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    header.classList.toggle("scrolled", window.scrollY > 50);
  });

  // Handle dropdown menu visibility on click (for touch devices)
  document.querySelectorAll(".dropdown > a").forEach(function (dropdownToggle) {
    dropdownToggle.addEventListener("click", function (event) {
      event.preventDefault();
      const dropdownMenu = this.nextElementSibling;
      const isVisible = dropdownMenu.style.display === "block";

      // Hide all other dropdowns
      document.querySelectorAll(".dropdown-menu").forEach((menu) => {
        if (menu !== dropdownMenu) {
          menu.style.display = "none";
          menu.style.opacity = "0";
          menu.style.visibility = "hidden";
          menu.style.transform = "translateY(10px)";
        }
      });

      // Toggle the clicked dropdown
      dropdownMenu.style.display = isVisible ? "none" : "block";
      dropdownMenu.style.opacity = isVisible ? "0" : "1";
      dropdownMenu.style.visibility = isVisible ? "hidden" : "visible";
      dropdownMenu.style.transform = isVisible
        ? "translateY(10px)"
        : "translateY(0)";
    });
  });

  // Close dropdowns when clicking outside
  document.addEventListener("click", function (event) {
    if (!event.target.closest(".dropdown")) {
      document.querySelectorAll(".dropdown-menu").forEach((menu) => {
        menu.style.display = "none";
        menu.style.opacity = "0";
        menu.style.visibility = "hidden";
        menu.style.transform = "translateY(10px)";
      });
    }
  });
});

$(".button--bubble").each(function () {
  var $circlesTopLeft = $(this).parent().find(".circle.top-left");
  var $circlesBottomRight = $(this).parent().find(".circle.bottom-right");

  var tl = new TimelineLite();
  var tl2 = new TimelineLite();

  var btTl = new TimelineLite({ paused: true });

  tl.to($circlesTopLeft, 1.2, {
    x: -25,
    y: -25,
    scaleY: 2,
    ease: SlowMo.ease.config(0.1, 0.7, false),
  });
  tl.to($circlesTopLeft.eq(0), 0.1, { scale: 0.2, x: "+=6", y: "-=2" });
  tl.to(
    $circlesTopLeft.eq(1),
    0.1,
    { scaleX: 1, scaleY: 0.8, x: "-=10", y: "-=7" },
    "-=0.1"
  );
  tl.to(
    $circlesTopLeft.eq(2),
    0.1,
    { scale: 0.2, x: "-=15", y: "+=6" },
    "-=0.1"
  );
  tl.to($circlesTopLeft.eq(0), 1, {
    scale: 0,
    x: "-=5",
    y: "-=15",
    opacity: 0,
  });
  tl.to(
    $circlesTopLeft.eq(1),
    1,
    { scaleX: 0.4, scaleY: 0.4, x: "-=10", y: "-=10", opacity: 0 },
    "-=1"
  );
  tl.to(
    $circlesTopLeft.eq(2),
    1,
    { scale: 0, x: "-=15", y: "+=5", opacity: 0 },
    "-=1"
  );

  var tlBt1 = new TimelineLite();
  var tlBt2 = new TimelineLite();

  tlBt1.set($circlesTopLeft, { x: 0, y: 0, rotation: -45 });
  tlBt1.add(tl);

  tl2.set($circlesBottomRight, { x: 0, y: 0 });
  tl2.to($circlesBottomRight, 1.1, {
    x: 30,
    y: 30,
    ease: SlowMo.ease.config(0.1, 0.7, false),
  });
  tl2.to($circlesBottomRight.eq(0), 0.1, { scale: 0.2, x: "-=6", y: "+=3" });
  tl2.to(
    $circlesBottomRight.eq(1),
    0.1,
    { scale: 0.8, x: "+=7", y: "+=3" },
    "-=0.1"
  );
  tl2.to(
    $circlesBottomRight.eq(2),
    0.1,
    { scale: 0.2, x: "+=15", y: "-=6" },
    "-=0.2"
  );
  tl2.to($circlesBottomRight.eq(0), 1, {
    scale: 0,
    x: "+=5",
    y: "+=15",
    opacity: 0,
  });
  tl2.to(
    $circlesBottomRight.eq(1),
    1,
    { scale: 0.4, x: "+=7", y: "+=7", opacity: 0 },
    "-=1"
  );
  tl2.to(
    $circlesBottomRight.eq(2),
    1,
    { scale: 0, x: "+=15", y: "-=5", opacity: 0 },
    "-=1"
  );

  tlBt2.set($circlesBottomRight, { x: 0, y: 0, rotation: 45 });
  tlBt2.add(tl2);

  btTl.add(tlBt1);
  btTl.to(
    $(this).parent().find(".button.effect-button"),
    0.8,
    { scaleY: 1.1 },
    0.1
  );
  btTl.add(tlBt2, 0.2);
  btTl.to(
    $(this).parent().find(".button.effect-button"),
    1.8,
    { scale: 1, ease: Elastic.easeOut.config(1.2, 0.4) },
    1.2
  );

  btTl.timeScale(2.6);

  $(this).on("mouseover", function () {
    btTl.restart();
  });
});
