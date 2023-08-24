let suppr = document.getElementsByClassName('supprimer');

if (suppr) {
   for(let i=0;i<suppr.length;i++){
        suppr[i].addEventListener("click",(event)=>{
            if (!confirm("Êtes-vous sûr de vouloir supprimer cette ligne ?")==true) {
                event.preventDefault();
            }
        });
    } 
}