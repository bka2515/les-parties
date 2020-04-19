<script>
     
     
     /*const inputs=document.getElementsByTagName("input");
     for (input of inputs){
         input.addEventListener("keyup", function(e){
           if (e.target.hasAttribute("error")) {
               var idDivError=e.target.getAttribute("error");
               document.getElementById(idDivError).innerText="";
           }
         })
     }*/
     document.getElementById("form-connexion").addEventListener("submit", function(e){
        
    
         const inputs=document.getElementsByTagName("input");
         var error=false;
         for (input of inputs) {
             if (!input.value){
             if (input.hasAttribute("error")) {
             idDivError=input.GetAttribute("error")
               document.getElementById(idDivError).innerText="Ce champs est obligatoire"
               
              }
            
         }
        
    } error=true;
})
</script>