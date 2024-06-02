// header.js

class HeaderComponent {
    constructor(backgroundColor = 'white') {
      this.backgroundColor = backgroundColor;
    }
  
    render() {
      const headerHTML = `
        <header class="${this.backgroundColor}">
          <h1 class="logo">
            <a href="#">
              <img src="../img/_logo.png" alt="우텐더 해운대">
            </a>
          </h1>
          <nav class="PCMenu">
            <ul class="inMenu">
              <li class="topMenu">
                <a href="#">Menu</a>
              </li>
              <li class="topMenu">
                <a href="#">Room</a>
              </li>
              <li class="topMenu">
                <a href="#">Conference</a>
              </li>
              <li class="topMenu">
                <a href="#">Contact Us</a>
              </li>
            </ul>
            <div class="outMenu">
              <a href="https://map.naver.com/p/entry/place/1175308104?lng=129.1590574&lat=35.1602296&placePath=%2Fbooking%3Fentry%3Dplt&entry=plt&searchType=place&c=15.00,0,0,0,dh" class="reservationIcon iconMenu">
                <img src="./img/calendar.svg" alt="예약하기">
              </a>
              <a href="https://www.instagram.com/wootender_busan" class="instagramIcon iconMenu">
                <img src="./img/Instagram.svg" alt="인스타그램">
              </a>
              <a href="https://blog.naver.com/wootenderbusan" class="blogIcon iconMenu">
                <img src="./img/blog.svg" alt="블로그">
              </a>
            </div>
          </nav>
        </header>
      `;
  
      const tempContainer = document.createElement('div');
      tempContainer.innerHTML = headerHTML;
      return tempContainer.firstElementChild;
    }
  }
  
  export default HeaderComponent;
  