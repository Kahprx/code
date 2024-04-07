
document.addEventListener("DOMContentLoaded", function() {

    const sections = document.querySelectorAll('section');
    const windowHeight = window.innerHeight;

    // Lặp qua từng phần và kiểm tra vị trí
    sections.forEach(section => {
        const sectionTop = section.getBoundingClientRect().top;

        if (sectionTop < windowHeight) {
            section.classList.add('visible');
        } else {
            section.classList.remove('visible');
        }
    });

    // Lắng nghe sự kiện cuộn trang
    window.addEventListener('scroll', function() {
        sections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;

            if (sectionTop < windowHeight) {
                section.classList.add('visible');
            } else {
                section.classList.remove('visible');
            }
        });
    });
});
