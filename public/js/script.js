let videoContainers = document.getElementsByClassName("videoContainer");


for(let vc of videoContainers){
    let src = vc.dataset.src;


    let video = document.createElement("video");
    video.className = "video"
    video.src = src;

    vc.appendChild(video);


    let controls = document.createElement("div");
    controls.className = "control";

    controls.appendChild(createBtn("./IMG/play.png" , play , video));
    controls.appendChild(createBtn("./IMG/stop.png" , stop , video));
    controls.appendChild(createBtn("./IMG/rapidovoltar.png" , dec , video));
    controls.appendChild(createBtn("./IMG/rapidofrente.png" , enc , video));
    controls.appendChild(createBtn("./IMG/voltar.png" , retroceder , video));
    controls.appendChild(createBtn("./IMG/frente.png" , avancar , video));


    vc.appendChild(controls);

    vc.addEventListener("mouseenter" , showControl);
    vc.addEventListener("mouseleave" , hideControl);

}


function showControl(e){
    let container = e.target;
    let children = container.children;

    let control = children[children.length - 1];

    control.style.display = "block";
}


function hideControl(e){
    let container = e.target;
    let children = container.children;

    let control = children[children.length - 1];

    control.style.display = "none";
}

function createBtn(ImgSrc , f , video){
    let btn = document.createElement("img");
    btn.className = "btn" ;
    btn.src = ImgSrc;
    btn.addEventListener("click" , f.bind(video))

    return btn;
}


let vid = document.getElementById("myVideo");

function play(e) {

    if(this.paused){
        e.target.src = "./IMG/pause.png"
        this.play();
    }else{
        e.target.src = "./IMG/play.png"

        this.pause();
    }
}

function pause() {
    this.pause();
}


function stop(){
    this.pause();
    this.currentTime = 0 ;
}

function dec(){
    this.playbackRate += 0.10;
}

function enc(){
    this.playbackRate -= 0.10;
}


function retroceder(){
    this.currentTime -= 0.20;
}

function avancar(){
    this.currentTime += 0.20;
}
