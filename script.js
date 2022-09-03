const openModalButtons = document.querySelectorAll('[data-modal-target]')
const openModalButtons2 = document.querySelectorAll('[data-modal-target2]')
const openModalButtons3 = document.querySelectorAll('[data-modal-target3]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const closeModalButtons2 = document.querySelectorAll('[data-close-button2]')
const closeModalButtons3 = document.querySelectorAll('[data-close-button3]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {  //open on button
    button.addEventListener('click', () => {
        const modal = document.querySelector(button.dataset.modalTarget)
        openModal(modal)
    })
})

overlay.addEventListener('click', () => {   //close on overlay
    const modals = document.querySelectorAll('#modal.active')
    modals.forEach(modal => {
        closeModal(modal)
    })
})

closeModalButtons.forEach(button => {   //close on button
    button.addEventListener('click', () => {
        const modal = button.closest('#modal')
        closeModal(modal)
    })
})

function openModal(modal) { //funkcija
    if (modal == null) return
    modal.classList.add('active')
    overlay.classList.add('active')
}

function closeModal(modal) {  //funkcija
    if (modal == null) return
    modal.classList.remove('active')
    overlay.classList.remove('active')
}


// Next modal
openModalButtons2.forEach(button => {  //open on button
    button.addEventListener('click', () => {
        const modal2 = document.querySelector(button.dataset.modalTarget)
        openModal(modal2)
    })
})

overlay.addEventListener('click', () => {   //close on overlay
    const modals = document.querySelectorAll('#modal2.active')
    modals.forEach(modal2 => {
        closeModal(modal2)
    })
})

closeModalButtons2.forEach(button => {   //close on button
    button.addEventListener('click', () => {
        const modal2 = button.closest('#modal2')
        closeModal(modal2)
    })
})

function openModal2(modal2) { //funkcija
    if (modal2 == null) return
    modal2.classList.add('active')
    overlay.classList.add('active')
}

function closeModal2(modal2) {  //funkcija
    if (modal2 == null) return
    modal2.classList.remove('active')
    overlay.classList.remove('active')
}




// Next modal
openModalButtons3.forEach(button => {  //open on button
    button.addEventListener('click', () => {
        const modal3 = document.querySelector(button.dataset.modalTarget)
        openModal(modal3)
    })
})

overlay.addEventListener('click', () => {   //close on overlay
    const modals = document.querySelectorAll('#modal3.active')
    modals.forEach(modal3 => {
        closeModal(modal3)
    })
})

closeModalButtons3.forEach(button => {   //close on button
    button.addEventListener('click', () => {
        const modal3 = button.closest('#modal3')
        closeModal(modal3)
    })
})

function openModal3(modal3) { //funkcija
    if (modal2 == null) return
    modal3.classList.add('active')
    overlay.classList.add('active')
}

function closeModal2(modal3) {  //funkcija
    if (modal3 == null) return
    modal3.classList.remove('active')
    overlay.classList.remove('active')
}






// Image
function triggerClick(e) {
    document.querySelector('#profileImage').click();
  }
  function displayImage(e) {
    if (e.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e){
        document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
      }
      reader.readAsDataURL(e.files[0]);
    }
  }

  


