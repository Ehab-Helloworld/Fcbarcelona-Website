function changeVideo(n) {
    var video = document.getElementById('video');
    var source = document.getElementById('source');


    switch (n) {

        case 1:
            source.setAttribute('src', 'images/y2mate.com - Football in Ultra HD 2160p 4k_1080p.mp4');
            video.load();
            video.play();
            changeText(1);
            break;

        case 2:
            source.setAttribute('src', 'images/y2mate.com - Barcelona vs Atletico Madrid IN ULTRA HD 4K_1080pFHR.mp4.mp4');
            video.load();
            video.play();
            changeText(2);

    }




}
function changecolor() {
    var element = document.body;
    element.classList.toggle("dark-mode")

}

function changeText(n) {
    switch (n) {
        case 1: document.getElementById("text").innerText = "Football in Ultra HD 2160p 4k_1080p";
            break;
        case 2:

            document.getElementById("text").innerText = "Barcelona vs Atletico Madrid IN ULTRA HD 4K_1080pFHR";
            break;
    }





}

// getElementById("text").innerHTML ;
// getElementById("text").innerHTML  = "Barcelona vs Atletico Madrid IN ULTRA HD 4K";