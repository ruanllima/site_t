document.addEventListener("DOMContentLoaded", function () {
    
    const observer_img = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("animate-fade-out");
                entry.target.classList.add("animate-fade-in-y");
                console.log("entrou");
                console.log(entry.target.classList);
                entry.target.classList.remove("opacity-0");
            }
            else{
                console.log("saiu");
                console.log(entry.target.classList);
                entry.target.classList.remove("animate-fade-in-y");
                entry.target.classList.add("animate-fade-out");
                entry.target.classList.add("opacity-0");
            }
        });
    }, { threshold: 0.3 });

    const observer_img_i = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("animate-fade-out");
                entry.target.classList.add("animate-fade-in-y-i");
                console.log("entrou");
                console.log(entry.target.classList);
                entry.target.classList.remove("opacity-0");
            }
            else{
                console.log("saiu");
                console.log(entry.target.classList);
                entry.target.classList.remove("animate-fade-in-y-i");
                entry.target.classList.add("animate-fade-out");
                entry.target.classList.add("opacity-0");
            }
        });
    }, { threshold: 0.3 });

    const observer_txt = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("animate-fade-out");
                entry.target.classList.add("animate-fade-in-x");
                console.log("entrou");
                console.log(entry.target.classList);
                entry.target.classList.remove("opacity-0");
            }
            else{
                console.log("saiu");
                console.log(entry.target.classList);
                entry.target.classList.remove("animate-fade-in-x");
                entry.target.classList.add("animate-fade-out");
                entry.target.classList.add("opacity-0");
            }
        });
    }, { threshold: 0.3 });

    const observer_txt_i = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("animate-fade-out");
                entry.target.classList.add("animate-fade-in-x-i");
                console.log("entrou");
                console.log(entry.target.classList);
                entry.target.classList.remove("opacity-0");
            }
            else{
                console.log("saiu");
                console.log(entry.target.classList);
                entry.target.classList.remove("animate-fade-in-x-i");
                entry.target.classList.add("animate-fade-out");
                entry.target.classList.add("opacity-0");
            }
        });
    }, { threshold: 0.3 });

    const observer_intro1 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("animate-fade-out");
                entry.target.classList.add("animate-fade-in-x-i");
                console.log("entrou");
                console.log(entry.target.classList);
                entry.target.classList.remove("opacity-0");
            }
            
        });
    }, { threshold: 0.2 });

    const observer_intro2 = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.remove("animate-fade-out");
                    entry.target.classList.add("animate-fade-in-scale");
                    entry.target.classList.remove("opacity-0");
                }, 1000)
            
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('[id="img"]').forEach(el => observer_img.observe(el));
    document.querySelectorAll('[id="txt"]').forEach(el => observer_txt.observe(el));
    document.querySelectorAll('[id="img-i"]').forEach(el => observer_img_i.observe(el));
    document.querySelectorAll('[id="txt-i"]').forEach(el => observer_txt_i.observe(el));
    document.querySelectorAll('[id="intro1"]').forEach(el => observer_intro1.observe(el));
    document.querySelectorAll('[id="intro2"]').forEach(el => observer_intro2.observe(el));
    
});