let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

/* NAVBAR */

class MobileNavbar {
  constructor(mobileMenu, navList, navLinks) {
    this.mobileMenu = document.querySelector(mobileMenu);
    this.navList = document.querySelector(navList);
    this.navLinks = document.querySelectorAll(navLinks);
    this.activeClass = "active";

    this.handleClick = this.handleClick.bind(this);
  }

  animateLinks() {
    this.navLinks.forEach((link, index) => {
      link.style.animation
      ? (link.style.animation = "")
      : (link.style.animation = `navLinkFade 0.5s ease forwards ${
        index / 7 + 0.3
      }s`);
    });
  }

  handleClick() {
    this.navList.classList.toggle(this.activeClass);
    this.mobileMenu.classList.toggle(this.activeClass);
    this.animateLinks();
  }

  addClickEvent() {
    this.mobileMenu.addEventListener("click", this.handleClick);
  }

  init() {
    if (this.mobileMenu) {
      this.addClickEvent();
    }
    return this;
  }
}

const mobileNavbar = new MobileNavbar(
  ".mobile-menu",
  ".nav-list",
  ".nav-list li",
  );
mobileNavbar.init(),

 document.querySelector("#show-login").addEventListener("click",function(){

        document.querySelector(".popup").classList.add("active");

    });

    document.querySelector(".popup .close-btn").addEventListener("click",function(){

        document.querySelector(".popup").classList.remove("active");

    });

    /* POPUP LOGIN CLIENTE */

    document.querySelector("#show-accCli").addEventListener("click",function(){

        document.querySelector(".popup-cli").classList.add("active");
        document.querySelector(".popup").classList.remove("active");

    });

    document.querySelector(".popup-cli .close-btn-cli").addEventListener("click",function(){

        document.querySelector(".popup-cli").classList.remove("active");

    });

    document.querySelector("#show-cliregister").addEventListener("click",function(){

        document.querySelector(".popup-Cadcli").classList.add("active");
        document.querySelector(".popup-cli").classList.remove("active");

    });

    document.querySelector(".popup-Cadcli .close-btn-Cadcli").addEventListener("click",function(){

        document.querySelector(".popup-Cadcli").classList.remove("active");

    });


    /* POPUP LOGIN AFILIADO */

    document.querySelector("#show-accAfi").addEventListener("click",function(){

        document.querySelector(".popup-afi").classList.add("active");
        document.querySelector(".popup").classList.remove("active");

    });

    document.querySelector(".popup-afi .close-btn-afi").addEventListener("click",function(){

        document.querySelector(".popup-afi").classList.remove("active");

    });

    document.querySelector("#show-afiregister").addEventListener("click",function(){

        document.querySelector(".popup-Cadafi").classList.add("active");
        document.querySelector(".popup-afi").classList.remove("active");

    });

    document.querySelector(".popup-Cadafi .close-btn-Cadafi").addEventListener("click",function(){

        document.querySelector(".popup-Cadafi").classList.remove("active");

    });


    /* POPUP LOGIN PROFISSIONAL */

    document.querySelector("#show-accPro").addEventListener("click",function(){

        document.querySelector(".popup-pro").classList.add("active");
        document.querySelector(".popup").classList.remove("active");

    });

    document.querySelector(".popup-pro .close-btn-pro").addEventListener("click",function(){

        document.querySelector(".popup-pro").classList.remove("active");

    });

    document.querySelector("#show-proregister").addEventListener("click",function(){

        document.querySelector(".popup-Cadpro").classList.add("active");
        document.querySelector(".popup-pro").classList.remove("active");

    });

    document.querySelector(".popup-Cadpro .close-btn-Cadpro").addEventListener("click",function(){

        document.querySelector(".popup-Cadpro").classList.remove("active");

    });

  document.querySelector("show-excCli").addEventListener("click",function(){

          document.querySelector(".popup-excCli").classList.add("active");

      });

         document.querySelector(".popup-excCli .close-btnexcCli").addEventListener("click",function(){

          document.querySelector(".popup-excCli").classList.remove("active");

      });



      document.querySelector("#show-cart").addEventListener("click",function(){

          document.querySelector(".popup-showCart").classList.add("active");
      

      });

         document.querySelector(".popup-showCart btn-closeCart").addEventListener("click",function(){

          document.querySelector(".popup-showCart").classList.remove("active");

      });




         


