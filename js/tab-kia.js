let tabs = document.querySelectorAll('.toggle-tab'),
    contents = document.querySelectorAll('.tab-content');

tabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        contents.forEach((content) => {
            content.classList.remove('active-tab');
        });

        tabs.forEach((tab) => {
            tab.classList.remove('active-tab');
        });

        contents[index].classList.add('active-tab');
        tabs[index].classList.add('active-tab');
    });
});