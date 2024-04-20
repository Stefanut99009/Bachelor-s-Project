const sidebar = document.querySelector('.sidebar');
const test = document.querySelector('.test');

sidebar.addEventListener('mouseenter', function() {
    test.style.transition = 'left 1.5s ease, width 1.5s ease';
    test.style.left = '251px';
    test.style.width = 'calc(100% - 271px)';
});

sidebar.addEventListener('mouseleave', function() {
    test.style.transition = 'left 1.5s ease, width 1.5s ease';
    test.style.left = '90px';
    test.style.width = 'calc(100% - 110px)';
});