var disinc = document.getElementById('disincr')
var inc = document.getElementById('incr')
var quantiter = document.getElementById('quantiter')

quantiter.value = 1


inc.addEventListener('click',()=>{
    quantiter.value++
})
disinc.addEventListener('click',()=>{
    if(quantiter.value > 1){
        quantiter.value--
    }
})