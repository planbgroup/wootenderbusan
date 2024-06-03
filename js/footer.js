// footer.js

class FooterComponent {
  
    render() {
      const footerHTML = `
        <footer class="secPadding">
            <a class="botLogo" href="#">
                <img class="bottomLogo" src="../img/bottomLogo.svg" alt="푸터 로고">
            </a>
            <p class="footText gold">
                <span>상호명 : 우텐더 해운대</span>
                <span>사업자번호 : 489-55-00386</span>
                <span>대표자명 : 박한셈</span>
                <span>주소 : 부산광역시 해운대구 해운대로570번길 45 </span>
            </p>
            <div class="align">
                <div class="outMenu">
                    <a href="https://map.naver.com/p/entry/place/1175308104?lng=129.1590574&lat=35.1602296&placePath=%2Fbooking%3Fentry%3Dplt&entry=plt&searchType=place&c=15.00,0,0,0,dh" class="reservationIcon iconMenu">
                        <img src="../img/calendar.svg" alt="예약하기">
                    </a>
                    <a href="https://www.instagram.com/wootender_busan" class="instagramIcon iconMenu">
                        <img src="../img/Instagram.svg" alt="인스타그램">
                    </a>
                    <a href="https://blog.naver.com/wootenderbusan" class="blogIcon iconMenu">
                        <img src="../img/blog.svg" alt="블로그">
                    </a>
                </div>
                <span class="copyright">Copyright © 2024 The Wootender Haewoondae all right reserved. </span>    
            </div>
        </footer>
      `;
  
      const footerContainer = document.createElement('div');
      footerContainer.innerHTML = footerHTML;
      return footerContainer.firstElementChild;
    }
  }
  
  export default FooterComponent;
  