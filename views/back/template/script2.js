function controlCarte(){
    var i=0;
    
      let myform = document.getElementsByName('formajout');
      let myidCarte = document.getElementById('idCarte');
      let myidClient =document.getElementById('IdClient');

      if(document.formajout.idCarte.value==0)
            {
            alert("saisir l'identifiant de la carte: ");
              i++;
            }
            if(document.formajout.IdClient.value==0)
            {
              
              alert("saisir l'identifiant du client: ");
              i++;
    
            }
    
            if(document.formajout.type.value=="")
            {
              alert("saisir un type: ");
              i++;
    
            }
            
            if(document.formajout.nbPoints.value=="")
            {
              alert("saisir le nombre de points: ");
              i++;
    
            }
            if(document.formajout.DateEm.value=="")
            {
              alert("saisir la date d'emmission: ");
              i++;
    
            }
            if(document.formajout.DateExp.value=="")
            {
              alert("saisir la date d'expiration: ");
              i++;
    
            }
            if((myidCarte.value<10000000)||(myidCarte.value>99999999))
            {
             
            
            alert("introduire un identifiant à 8 chiffres: ");
            i++;
    
          }
          if((myidClient.value<10000000)||(myidClient.value>99999999))
          {
           
          
          alert("introduire un identifiant de client à 8 chiffres: ");
          i++;
    
        }
        
        
        
      }