const tabLinks = document.querySelectorAll('.form-tab ul li a');
const tabContents = document.querySelectorAll('.form-content');

const switchTab = el => {
  tabLinks.forEach(tabLink => void tabLink.parentElement.classList.remove('active'));
  tabContents.forEach(tabContent => tabContent.classList.remove('active'));

  const elementId = el.getAttribute('data-tab-content');
  const tabLink = el.parentElement;
  const tabContent = document.querySelector(`.form-content#${elementId}`);

  tabLink.classList.add('active');
  tabContent.classList.add('active');
}

tabLinks.forEach(tabLink => {
  tabLink.addEventListener('click', e => {
    e.preventDefault();

    switchTab(e.target);
  });
});