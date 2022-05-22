burgger = document.querySelector('.burgger')
navbar = document.querySelector('.navbar')
logo = document.querySelector('.logo')
menu = document.querySelector('.menu')


burgger.addEventListener('click', ()=>{
    logo.classList.toggle('v_class_resp')
    menu.classList.toggle('v_class_resp')

    
    navbar.classList.toggle('h_nav_resp')
    
    
}                           
)

function myFunction() {
    var dots = document.getElementByClassname("dots");
    var moreText = document.getElementByClassname("more");
    var btnText = document.getElementByClassname("btn_btn-more");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }

function gotowhatsapp() {

        var vehicle = document.getElementById("vehicle").value;
        var fullhousehold = document.getElementById("fullhousehold").value;
        var someitems = document.getElementById("someitems").value;
        var office = document.getElementById("office").value;
        var name = document.getElementById("name").value;
        var phone = document.getElementById("phone").value;
        var relocationto = document.getElementById("relocationto").value;
        var relocationfrom = document.getElementById("relocationfrom").value;
        var relocationdate = document.getElementById("relocationdate").value;
        var movingItem = document.getElementById("movingItem").value;

        var url = "https://wa.me/919817326797?text="
            + "vehicle: " + vehicle + "%0a"
            + "FullHousehold: " + fullhousehold + "%0a"
            + "SomeItems: " + someitems + "%0a"
            + "OfficeOrOther: " + office + "%0a"
            + "Name: " + name + "%0a"
            + "Phone: " + phone + "%0a"
            + "RelocationTo: " + relocationto + "%0a"
            + "RelocationFrom: " + relocationfrom + "%0a"
            + "RelocationDate: " + relocationdate + "%0a"
            + "movingItem: " + movingItem ;

        window.open(url, '_blank').focus();





    }