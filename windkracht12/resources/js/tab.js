const tabButtons = document.querySelectorAll('span.button-tab')
const tabs = document.querySelectorAll('div.button-group-tab')
let timeoutId

tabButtons.forEach(button => {
  button.addEventListener('click', (e) => {
    document.querySelector('span.button-tab.active').classList.remove('active')

    let button = e.target,
      targetGroup = button.getAttribute('data-target')

    setHeight('div.button-group-tab#' + targetGroup)
    button.classList.add('active')
  })
})

function setHeight(target) {
  const targetEl = document.querySelector(target)
  let height = 0

  document.querySelectorAll(target + '> *').forEach((el) => {
    height = height + el.getBoundingClientRect().height
  })

  let activeGroup = document.querySelector('div.button-group-tab.active')

  if (activeGroup) {
    activeGroup.style.height = 0
    activeGroup.classList.remove('active')
  }

  if (timeoutId) {
    clearTimeout(timeoutId)
  }

  timeoutId = setTimeout(() => {
    targetEl.style.height = 'calc(1rem + ' + height + 'px)'
    targetEl.classList.add('active')
  }, 500)
}