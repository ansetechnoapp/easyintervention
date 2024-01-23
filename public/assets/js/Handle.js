/* const boxes = document.querySelectorAll('#show_content');
boxes.forEach(box => {    
  box.addEventListener('click', function handleClick() {

    let content = box.lastElementChild;
        if (content.style.display === 'none') {
            content.style.display = 'block'
        } else {
            content.style.display = 'none'
        }
  });
});

 */
handleClick = (id) => { 
    const BtnClick = document.querySelector(id);
    let content = BtnClick.lastElementChild;
          if (content.style.display === 'none') {
              content.style.display = 'block'
          } else {
              content.style.display = 'none'
          }
  }
 handleImgProfil = ()=>{
  
    let content =  document.querySelector('#profilDisplay');
          if (content.style.display === 'none') {
              content.style.display = 'block'
          } else {
              content.style.display = 'none'
          }
 }
