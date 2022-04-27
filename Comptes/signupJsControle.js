 
function cherkfunction(){
    if(document.getElementById("mdp1").value == document.getElementById("mdp2").value){
        document.getElementById("mdp2").style.border = '2px solid green'
    }else{
        document.getElementById("mdp2").style.border = '2px solid red'}
}