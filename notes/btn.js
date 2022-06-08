const btn = document.querySelector('#btn');
let block = document.querySelector('.block');

document.getElementById("btn").addEventListener("click", function(){
    console.log('clicked');

    if(block.style.backgroundColor === 'red'){
        block.style.backgroundColor = 'green'
    }
    else if(block.style.backgroundColor === 'green'){
        block.style.backgroundColor = 'red'
    }
    
});
