let obj ={
    ul:document.querySelector('ul'),
    menuBar:document.querySelector('.menuBar'),
    picture:document.getElementById('img'),
    laz:false
 
   
}


obj.menuBar.addEventListener('click',()=>{
   

    if (obj.laz==false) {

        obj.ul.style.display='flex';
        obj.picture.classList.add('pictureDruga');
        obj.laz=true;
    }else if(obj.laz==true){
        obj.ul.style.display='none';
        obj.picture.classList.remove('pictureDruga');
        obj.laz=false;


    }

    

   
  

})













function myFunction(x) {
    if (x.matches) { // If media query matches
      obj.ul.style.display='none';
      obj.menuBar.style.display='block';
     
    } else {
        obj.ul.style.display='inline-flex';
        obj.picture.classList.remove('pictureDruga');
        obj.menuBar.style.display='none';

      
    }
  }
  
  var x = window.matchMedia("(max-width: 768px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes