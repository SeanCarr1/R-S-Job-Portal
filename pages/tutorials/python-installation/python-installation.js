// JS for tab switching in Python Installation tutorial
const tabs = document.querySelectorAll('.tutorial-tab');
const tabContents = document.querySelectorAll('.tutorial-tab-content');
tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    tabContents.forEach(tc => tc.classList.remove('active'));
    document.querySelector('.tutorial-tab-' + tab.dataset.tab).classList.add('active');
  });
});
