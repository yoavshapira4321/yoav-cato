const down_arrows = document.querySelectorAll('.main_container .grid_container .card .down-pointing-arrow');
const column = document.querySelectorAll('.column');
const more = document.querySelectorAll('.more');



console.log(more);
down_arrows.forEach((down_arrow, index) => {
    down_arrow.addEventListener("click",function(){
        column[index+1].classList.toggle('active');
        more[index].classList.toggle('active');
        console.log(more[index+1]);

        down_arrow.classList.toggle('arrow-active');






    })
});





