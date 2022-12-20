const item = document.querySelectorAll('.vinyls__item');
const itemName = document.querySelectorAll('.vinyls__item .item__header');

console.log(itemName);

document.querySelector('#search').oninput = function(){
    let val = this.value.trim();
    let elasticItems = document.querySelectorAll('.vinyls__item .item__header');

    if(val!=''){
        elasticItems.forEach(function(elem){
            if(elem.innerText.search(val) == -1){
                elem.parentNode.style.display = "none";
            }
            else{
                elem.parentNode.style.display = "block";
            }
        });
    }
    else{
        elasticItems.forEach(function(elem){
            elem.parentNode.style.display = "block";
        });
    }
}