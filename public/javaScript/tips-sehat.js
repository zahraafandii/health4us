document.querySelectorAll('.tips-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.style.transition = '0.25s ease';
    });
});