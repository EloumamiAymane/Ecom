const products = document.getElementById('products')
const eventdisplaylist = document.getElementById('eventdisplaylist')
const iconpannel = document.getElementById('iconpannel')

eventdisplaylist.addEventListener('click',()=>{
    products.classList.toggle('displayP')
    iconpannel.classList.toggle('displayP')
})