const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('header nav a').
forEach(link => {
    if(link.href.includes(`${activePage}`)){
        link.classList.add('active');
    }
})
const toP = document.querySelector(".top")
window.addEventListener("scroll",function(){
    const x = this.pageYOffset;
    if (x > 100) {
        document.querySelector(".top").classList.add("active")
    } else {
        document.querySelector(".top").classList.remove("active")
    }
})