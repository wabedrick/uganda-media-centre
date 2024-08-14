new Swiper(".hero-carousel-swiper", {
  loop: true,
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },
});

new Swiper(".latest-releases-swiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 16,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 16,
    },
  },
});

new Swiper(".news-updates-swiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 16,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 16,
    },
  },
});

// new Swiper(".media-release-swiper", {
//   slidesPerView: 1,
//   spaceBetween: 0,
//   autoplay: {
//     delay: 4500,
//     disableOnInteraction: false,
//   },
//   breakpoints: {
//     640: {
//       slidesPerView: 2,
//       spaceBetween: 20,
//     },
//     1280: {
//       slidesPerView: 3,
//       spaceBetween: 24,
//     },
//     1536: {
//       slidesPerView: 4,
//       spaceBetween: 24,
//     },
//   },
// });

new Swiper(".related-articles-swiper", {
  slidesPerView: 1,
  spaceBetween: 0,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 16,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 16,
    },
  },
});

new Swiper(".testimonial-swiper", {
  slidesPerView: 1,
  autoHeight: true,
  spaceBetween: 0,
  autoplay: {
    delay: 3500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".testimonial-swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 3,
      spaceBetween: 24,
    },
  },
});

var urlParams = new URLSearchParams(window.location.search);
var categorySearch = urlParams.get("category");

(function () {
  if (!Element.prototype.closest) {
    if (!Element.prototype.matches) {
      Element.prototype.matches =
        Element.prototype.msMatchesSelector ||
        Element.prototype.webkitMatchesSelector;
    }
    Element.prototype.closest = function (s) {
      var el = this;
      var ancestor = this;
      if (!document.documentElement.contains(el)) return null;
      do {
        if (ancestor.matches(s)) return ancestor;
        ancestor = ancestor.parentElement;
      } while (ancestor !== null);
      return null;
    };
  }

  function trapFocus(element) {
    var focusableEls = element.querySelectorAll(
      'a[href]:not([disabled]), button:not([disabled]), textarea:not([disabled]), input[type="text"]:not([disabled]), input[type="radio"]:not([disabled]), input[type="checkbox"]:not([disabled]), select:not([disabled])'
    );
    var firstFocusableEl = focusableEls[0];
    var lastFocusableEl = focusableEls[focusableEls.length - 1];
    var KEYCODE_TAB = 9;

    element.addEventListener("keydown", function (e) {
      var isTabPressed = e.key === "Tab" || e.keyCode === KEYCODE_TAB;

      if (!isTabPressed) {
        return;
      }

      if (e.shiftKey) {
        if (document.activeElement === firstFocusableEl) {
          lastFocusableEl.focus();
          e.preventDefault();
        }
      } else {
        if (document.activeElement === lastFocusableEl) {
          firstFocusableEl.focus();
          e.preventDefault();
        }
      }
    });
  }

  var settings = {
    speedOpen: 50,
    speedClose: 350,
    activeClass: "is-active",
    visibleClass: "is-visible",
    selectorTarget: "[data-drawer-target]",
    selectorTrigger: "[data-drawer-trigger]",
    selectorClose: "[data-drawer-close]",
  };

  var toggleAccessibility = function (event) {
    if (event.getAttribute("aria-expanded") === "true") {
      event.setAttribute("aria-expanded", false);
    } else {
      event.setAttribute("aria-expanded", true);
    }
  };

  var openDrawer = function (trigger) {
    var target = document.getElementById(trigger.getAttribute("aria-controls"));

    target.classList.add(settings.activeClass);
    document.documentElement.style.overflow = "hidden";
    toggleAccessibility(trigger);
    setTimeout(function () {
      target.classList.add(settings.visibleClass);
      trapFocus(target);
    }, settings.speedOpen);
  };

  var closeDrawer = function (event) {
    var closestParent = event.closest(settings.selectorTarget),
      childrenTrigger = document.querySelector(
        '[aria-controls="' + closestParent.id + '"'
      );
    closestParent.classList.remove(settings.visibleClass);
    document.documentElement.style.overflow = "";
    toggleAccessibility(childrenTrigger);
    setTimeout(function () {
      closestParent.classList.remove(settings.activeClass);
    }, settings.speedClose);
  };
  var clickHandler = function (event) {
    var toggle = event.target,
      open = toggle.closest(settings.selectorTrigger),
      close = toggle.closest(settings.selectorClose);
    if (open) {
      openDrawer(open);
    }
    if (close) {
      closeDrawer(close);
    }
    if (open || close) {
      event.preventDefault();
    }
  };
  var keydownHandler = function (event) {
    if (event.key === "Escape" || event.keyCode === 27) {
      var drawers = document.querySelectorAll(settings.selectorTarget),
        i;
      for (i = 0; i < drawers.length; ++i) {
        if (drawers[i].classList.contains(settings.activeClass)) {
          closeDrawer(drawers[i]);
        }
      }
    }
  };

  document.addEventListener("click", clickHandler, false);
  document.addEventListener("keydown", keydownHandler, false);

  const allDropdownAnchorTags = document.querySelectorAll(".dropdown a");

  allDropdownAnchorTags.forEach((anchor, i) => {
    const anchorTitle = anchor.textContent ?? "";
    const anchorHref = anchor.href ?? "";

    if (
      anchorHref.includes("#") ||
      anchor.target === "_blank" ||
      anchor.classList.contains("anchor-link")
    )
      return;

    let anchorSlug = anchorTitle.replace(" ", "+").toLowerCase();
    anchor.href = `${anchorHref}?category=${anchorSlug}`;

    if (!!categorySearch === false) return;

    if (categorySearch.replace(" ", "+").toLowerCase() === anchorSlug) {
      anchor.classList.add("active");
    } else {
      anchor.classList.remove("active");
    }
  });

  var accordions = document.querySelectorAll(".accordion-item:not(.link)");

  var openAccordion = (accordion) => {
    const accordionBody = accordion.querySelector(".accordion-item__body");
    accordion.classList.add("active");
    accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
  };

  var closeAccordion = (accordion) => {
    const accordionBody = accordion.querySelector(".accordion-item__body");
    accordion.classList.remove("active");
    accordionBody.style.maxHeight = null;
  };

  accordions.forEach((accordion) => {
    const intro = accordion.querySelector(".accordion-item__header");
    const accordionBody = accordion.querySelector(".accordion-item__body");

    intro.onclick = () => {
      if (accordionBody.style.maxHeight) {
        closeAccordion(accordion);
      } else {
        accordions.forEach((accordion) => closeAccordion(accordion));
        openAccordion(accordion);
      }
    };
  });

  document.addEventListener("DOMContentLoaded", () => {
    let bodyOfAllActiveAccordions = document.querySelectorAll(
      ".accordion-item.active .accordion-item__body"
    );
    bodyOfAllActiveAccordions.forEach((accordionBody) => {
      accordionBody.style.maxHeight = accordionBody.scrollHeight + "px";
    });
  });

  var currentYearElement = document.querySelector("#current-year");

  currentYearElement.textContent = new Date().getFullYear();
})();
