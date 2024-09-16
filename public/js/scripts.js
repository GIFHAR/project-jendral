document.addEventListener('DOMContentLoaded', () => {
    const gallery = document.querySelector('.image-gallery-keunggulanjendral');
    const points = document.querySelectorAll('.page-point');
    const images = document.querySelectorAll('.image-container-keunggulanjendral');
    const imagesPerPage = 3;
    const totalImages = images.length;
    const totalPages = Math.ceil(totalImages / imagesPerPage);

    function showPage(page) {
        const offset = (page - 1) * (100 / totalPages); // Calculate offset based on total number of pages
        gallery.style.transform = `translateX(-${offset}%)`;
        points.forEach(point => point.classList.remove('active'));
        points[page - 1].classList.add('active');
    }

    points.forEach(point => {
        point.addEventListener('click', () => {
            const page = parseInt(point.getAttribute('data-page'), 10);
            if (page >= 1 && page <= totalPages) {
                showPage(page);
            }
        });
    });

    showPage(1); // Initial display
});