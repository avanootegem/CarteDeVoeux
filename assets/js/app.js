const text = document.querySelectorAll("#text path");

let time = 0;
for(let i = 0; i<text.length; i++) {
    const style = text[i].style;
    const dash = text[i].getTotalLength();

    style.animationName = "line-anim, fill";
    style.animationDuration = "0.1s";
    style.animationDelay = time+"s, "+(time+0.05)+"s";
    style.animationTimingFunction = "ease";
    style.animationFillMode = "forwards";
    time += 0.1;

    setTimeout(() => {
        style.animationName = "";
        style.animationDuration = "";
        style.animationDelay = "";
        style.animationTimingFunction = "";
        style.animationFillMode = "";

        style.fill = "rgb(200,200,200)";
    }, time*1000+100);
}