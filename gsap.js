gsap.from(".nav",{
    y:-200,
    opacity:0,
    duration:0.5,
})

gsap.from(".title",{
    y:250,
    opacity:0,  
    duration:1,
})

gsap.from(".btn-form",{
    y:-250,
    opacity:0,  
    duration:1,
    ease: "power2.inOut"
})

const button = document.querySelector(".btn-form");
    button.addEventListener("click", () => {    
        gsap.to(".modal", {
            y: 200,
            opacity: 1,
            duration: 1,
            ease: "power2.inOut"
        });
    })