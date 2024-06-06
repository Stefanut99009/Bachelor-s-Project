const menu = document.querySelector(".menu")
const dropDown = document.querySelector(".drop-down")
dropDown.addEventListener("mouseenter", () => {
    menu.classList.remove("hidden")
})

menu.addEventListener("mouseleave", () => {
    menu.classList.add("hidden")
})

let video = document.querySelectorAll("video")


video.forEach(video => {
    video.muted=false;
    let playPromise = video.play()
    if(playPromise !== undefined) {
        playPromise.then(() => {
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    
                    if(entry.intersectionRatio !== 10 && !video.paused){
                        video.pause()
                    } else if (entry.intersectionRatio > 5 && video.paused) {
                        video.play()
                    }
                })
            }, {threshold: 0.5})
            observer.observe(video);
           
        })
    }
})