const mainSlide = new Swiper('.mainSlide', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },

    // 자동재생
    autoplay: {
      delay: 5000,
    },

    // spaceBetween:50, //=>swiper-slide 사이 공백값
    slidesPerView:"auto",// =>css에 지정한 슬라이더의 크기를 사용함
    // =>이값을 지정하지 않으면 기존의 값으로 지정됨

  });

  const previewSwiper = new Swiper('.previewSwiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },

    // 자동재생
    autoplay: {
      delay: 5000,
    },

    spaceBetween:20, //=>swiper-slide 사이 공백값
    slidesPerView:"auto",// =>css에 지정한 슬라이더의 크기를 사용함
    // =>이값을 지정하지 않으면 기존의 값으로 지정됨
    centeredSlides:true, //=>슬라이더 번호에 맞는 객체의 가로 중앙 정렬

  });