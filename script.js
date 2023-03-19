const auth = document.querySelector("#auth");
const enrole = document.getElementById("enrole");
auth.addEventListener("mouseover", function () {
    enrole.style.color = "#76CDD8";
    enrole.style.backgroundColor = "transparent";
    auth.style.cursor = "pointer";
    auth.style.color = "white";
    auth.style.backgroundColor = "#76CDD8";
})

enrole.addEventListener("mouseover", function () {
    enrole.style.color = "white";
    enrole.style.backgroundColor = "#76CDD8";
    auth.style.cursor = "pointer";
    auth.style.color = "#76CDD8";
    auth.style.backgroundColor = "transparent";
})


const first = document.querySelector('.black');
const middle = document.querySelector('.middle');
const last = document.querySelector('.last');

const handleMouseOver = (event) =>{
    const isMiddle = event.target === first;
    middle.style.color = isMiddle ? "" : "white";
    middle.style.backgroundColor = isMiddle ? "" : "#1A2B3B";

    first.style.color = isMiddle ? "white" : "#1A2B3B" ;
    first.style.backgroundColor = isMiddle ? "#1A2B3B" : "transparent";
    
    last.style.color="";
    last.style.backgroundColor="";
}
last.addEventListener("mouseover", function(){
    last.style.color =  "white";
    last.style.backgroundColor = "#1A2B3B";

    middle.style.color = "#1A2B3B";
    middle.style.backgroundColor =  "white";
});
first.addEventListener("mouseover", handleMouseOver);
middle.addEventListener("mouseover", handleMouseOver);
