/**
 * clip 클래스 화면 노출 시 active 클래스 추가
 */
document.addEventListener("DOMContentLoaded", function () {
  const targets = document.querySelectorAll(".clip__");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("active");
        } else {
          entry.target.classList.remove("active");
        }
      });
    },
    {
      threshold: 0.2, // 요소가 10% 이상 보일 때 클래스 추가
    }
  );

  targets.forEach((target) => {
    observer.observe(target);
  });
});

/**
 * Works 페이지 select박스 노출 자바스크립트
 */

function moveToSection() {
  const selectBox = document.getElementById("moveSelect");
  const selectedValue = selectBox.value;

  if (selectedValue) {
    const section = document.getElementById(selectedValue);
    if (section) {
      section.scrollIntoView({
        behavior: "smooth",
      });
    }
  }
}

document.addEventListener("scroll", function () {
  var selectWr = document.getElementById("selectWr");
  var categoryWrap = document.getElementById("category_Wrap");

  var selectWrPosition = selectWr.getBoundingClientRect();
  var categoryWrapPosition = categoryWrap.getBoundingClientRect();

  if (
    selectWrPosition.top >= categoryWrapPosition.top &&
    selectWrPosition.bottom <= categoryWrapPosition.bottom
  ) {
    selectWr.classList.add("active");
  } else {
    selectWr.classList.remove("active");
  }
});



/**
 * 헤더 스크롤 시 숨김 / 마우스 상단 이동 및 스크롤 작동 시 노출
 */
$(function () {
  let lastScrollTop = 0,
    menuWrapper = document.getElementById("header__");
  window.addEventListener(
    "scroll",
    function () {
      let e = window.pageYOffset || document.documentElement.scrollTop;
      e > lastScrollTop && e > 100
        ? (menuWrapper.style.transform = "translateY(-100%)")
        : (menuWrapper.style.transform = "translateY(0)"),
        (lastScrollTop = e <= 0 ? 0 : e);
    },
    { passive: !0 }
  ),
    window.addEventListener(
      "mousemove",
      function (e) {
        e.clientY <= 100 && (menuWrapper.style.transform = "translateY(0)");
      },
      { passive: !0 }
    );
});



/**
 * 헤더 스위치 버튼 클릭 시 배경색 변환
 */
$(function () {
  let $switch = $(".switch__");
  let $icon = $(".anm2");
  let $body = $("body");

  $switch.on("click", function () {
    $body.toggleClass("black");
    $icon.toggleClass("change");
  });
});



/**
 * GSAP 자바스크립트
 */
$(function () {
  const hide = (item) => {
    gsap.set(item, { autoAlpha: 0 });
  };

  gsap.utils.toArray(".trsText_").forEach((item) => {
    hide(item);

    ScrollTrigger.create({
      trigger: item,
      start: "top 80%",
      end: "bottom 20%",
      markers: false,
      onEnter: () => {
        animate(item);
      },
    });
  });

  const animate = (item) => {
    let x = 0;
    let y = 0;
    let delay = item.dataset.delay;

    if (item.classList.contains("trsText_")) {
      (y = 0), (y = 100);
    }

    gsap.fromTo(
      item,
      { autoAlpha: 0, x: x, y: y },
      {
        autoAlpha: 1,
        x: 0,
        y: 0,
        delay: delay,
        duration: 3,
        overwrite: "auto",
        ease: "expo",
      } //overwrite : 이벤트한 값이 한번만 작동할 수 있게 하는 명령어
    );
  };
});



/**
 * Swiper 슬라이드 자바스크립트
 */
$(function () {
  var swiper = new Swiper(".fm_swiper", {
    observer: true,
    observeParents: true,
    slidesPerView: 5,
    loop: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    speed: 5000,
    slidesOffsetAfter: 10,
    loopAdditionalSlides: 1,

    breakpoints: {
      320: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1240: {
        slidesPerView: 4,
      },
      1790: {
        slidesPerView: 5,
      },
    },
  });
});

/**
 * 마우스 아이콘 변경 효과
 */
$(function () {
  const cursor = document.querySelector(".cursor");
  let mouseX = 0,
    mouseY = 0;

  function animate() {
    (cursor.style.left = mouseX - cursor.offsetWidth / 2 + "px"),
      (cursor.style.top = mouseY - cursor.offsetHeight / 2 + "px"),
      requestAnimationFrame(animate);
  }
  document.addEventListener("mousemove", (e) => {
    (mouseX = e.clientX), (mouseY = e.clientY);
  }),
    animate();
  const links = document.querySelectorAll('a:not([target="_blank"])');
  links.forEach(
    (e) => {
      e.addEventListener(
        "mouseover",
        () => {
          (cursor.style.opacity = 1),
            (cursor.style.width = "90px"),
            (cursor.style.height = "90px");
        },
        {
          passive: !0,
        }
      ),
        e.addEventListener("mouseout", () => {
          (cursor.style.opacity = 0.2),
            (cursor.style.width = "15px"),
            (cursor.style.height = "15px");
        });
    },
    {
      passive: !0,
    }
  );
  const externallinks = document.querySelectorAll(
    'a[target="_blank"], .navigation svg, .navigation a, #menu a, .imglink, .footerlogo, .footerlinks a'
  );
  externallinks.forEach((e) => {
    e.addEventListener(
      "mouseover",
      () => {
        (cursor.style.opacity = 1),
          (cursor.style.width = "90px"),
          (cursor.style.height = "90px");
      },
      {
        passive: !0,
      }
    ),
      e.addEventListener(
        "mouseout",
        () => {
          (cursor.style.opacity = 0.2),
            (cursor.style.width = "15px"),
            (cursor.style.height = "15px");
        },
        {
          passive: !0,
        }
      );
  });
  const anchorlinks = document.querySelectorAll('a[href^="#"]');
  anchorlinks.forEach((e) => {
    e.addEventListener(
      "mouseover",
      () => {
        (cursor.style.opacity = 1),
          (cursor.style.width = "90px"),
          (cursor.style.height = "90px");
      },
      {
        passive: !0,
      }
    ),
      e.addEventListener(
        "mouseout",
        () => {
          (cursor.style.opacity = 0.2),
            (cursor.style.width = "15px"),
            (cursor.style.height = "15px");
        },
        {
          passive: !0,
        }
      );
  });
});
