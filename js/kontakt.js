let obj ={
    ul:document.querySelector('ul'),
    menuBar:document.querySelector('.menuBar'),
    root:document.querySelector('.root'),
    footer:document.querySelector('footer'),
    laz:false
}
obj.menuBar.addEventListener('click',()=>{
   

    if (obj.laz==false) {

        obj.ul.style.display='flex';
        obj.root.classList.add('moveInput');
        obj.footer.classList.add('moveFooter');
        obj.laz=true;
    }else if(obj.laz==true){
        obj.ul.style.display='none';
        obj.root.classList.remove('moveInput');
        obj.footer.classList.remove('moveFooter');
        obj.laz=false;


    }

    

   
  

})



function myFunction(x) {
    if (x.matches) { // If media query matches
      obj.ul.style.display='none';
      obj.menuBar.style.display='block';
      
     
     
    } else {
        obj.ul.style.display='inline-flex';
        obj.menuBar.style.display='none';
        obj.root.classList.remove('moveInput');
        obj.footer.classList.remove('moveFooter');
       
      
    }
  }
  
  var x = window.matchMedia("(max-width: 768px)")
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes



