
function controlClient(){
var i=0;

  let myform = document.getElementsByName('formajout');
  let error= document.getElementById('error1');
  let myid = document.getElementById('id');
  let mycin =document.getElementById('cin');
  let myemail=document.getElementById('email');
  
  if(document.formajout.id.value==0)
        {
         
        
        alert("saisir votre identifiant: ");
          i++;

        }
        if(document.formajout.cin.value==0)
        {
          
          alert("saisir votre CIN: ");
          i++;

        }

        if(document.formajout.nom.value=="")
        {
          alert("saisir votre nom: ");
          i++;

        }
        
        if(document.formajout.prenom.value=="")
        {
          alert("saisir votre prenom: ");
          i++;

        }
        if(document.formajout.email.value=="")
        {
          alert("saisir votre email: ");
          i++;

        }
        if(document.formajout.adresse.value=="")
        {
          alert("saisir votre adresse: ");
          i++;

        }
        if(document.formajout.dateNaiss.value=="")
        {
          alert("saisir votre date de naissance: ");
          i++;

        }
        if((myid.value<10000000)||(myid.value>99999999))
        {
         
        
        alert("introduire un identifiant à 8 chiffres: ");
        i++;

      }
      if((mycin.value<10000000)||(mycin.value>99999999))
      {
       
      
      alert("introduire un numero de cin à 8 chiffres: ");
      i++;

    }
    
    if(!myemail.value.match("@gmail.com"))
      {
      alert("introduire un format valide d'email: ");
      i++

    }
    
    
  }