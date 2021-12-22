var img=["architect.jpg","car wash.png","waiter.jpg","teacher.jpg","car mechanic.png"];
function highlight(num){
    document.getElementById("h1").style.backgroundColor='white';
    document.getElementById("h2").style.backgroundColor='white';
    document.getElementById("h3").style.backgroundColor='white';
    document.getElementById("h4").style.backgroundColor='white';
    document.getElementById("h5").style.backgroundColor='white';
    document.getElementById("h"+num).style.backgroundColor='var(--secondaryLight)';
    document.getElementById("puna").src="img/"+img[num-1];
}