$(document).ready(function(){
    // Máscara CEP
    $('.cep').mask('00000-000');

    // Autocomplete CEP
    $('#cep').focusout(function(e){
        e.preventDefault(); // Quando estiver dentro de um form, NÃO ESQUECER!!
        $.ajax({
            url: 'https://viacep.com.br/ws/'+$("#cep").val()+'/json/unicode/',
            method: "get",
            dataType: "json",

            success: function(resultado){
                $("#rua").val(resultado.logradouro);
                $("#cidade").val(resultado.localidade);
                $("#estado").val(resultado.uf);
            },
            error: function(){
                $("#rua").val("");
                $("#cidade").val("");
                $("#estado").val("");
            },
        });
    });
});

class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
        this.mobileMenu = document.querySelector(mobileMenu);
        this.navList = document.querySelector(navList);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick = this.handleClick.bind(this);
    }

    handleClick() {
        this.navList.classList.toggle(this.activeClass);
        this.mobileMenu.classList.toggle(this.activeClass);
    }
  
    addClickEvent() {
        this.mobileMenu.addEventListener("click", this.handleClick);
        this.navLinks.forEach((link) =>
            link.addEventListener("click", this.handleClick),
        );
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
mobileNavbar.init()


function menuToggle() {
    var toggleMenu = document.querySelector('.logout_menu');
    toggleMenu.classList.toggle('active');
}