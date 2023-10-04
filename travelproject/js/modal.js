function ShowModal(modalElement, modal) {
  const element = document.getElementById(modalElement)
  if (!element) return
  element.addEventListener('click', () => {
    const myModal = new window.bootstrap.Modal(document.getElementById(modal))
    myModal.show()
  })
}

;(() => {
  ShowModal('modalBoxUp', 'modalsignup')
  ShowModal('modalBoxSign', 'lightbox')
  ShowModal('modalSupport', 'support')
  ShowModal('BookSign', 'lightbox')
})()
