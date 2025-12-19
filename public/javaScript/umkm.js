document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.umkm-cat');
    const cards = document.querySelectorAll('.umkm-card');

    function filterCards(filterKeyword) {
        if (!filterKeyword) return; // Keamanan jika data-filter kosong

        cards.forEach(card => {
            const kategoriKartu = card.getAttribute('data-kategori').toLowerCase().trim();
            const filter = filterKeyword.toLowerCase().trim();

            if (filter === 'all') {
                card.style.display = ''; // Menghapus display: none, kembali ke CSS asli (biasanya block/inline-block)
            } else if (kategoriKartu.includes(filter) || filter.includes(kategoriKartu)) {
                card.style.display = ''; // Kembali ke default CSS
            } else {
                card.style.display = 'none'; // Sembunyikan
            }
        });
    }

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            buttons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            
            const filter = btn.getAttribute('data-filter');
            filterCards(filter);
        });
    });

    // Jalankan filter saat halaman dimuat
    const initialActiveBtn = document.querySelector('.umkm-cat.active');
    if (initialActiveBtn) {
        filterCards(initialActiveBtn.getAttribute('data-filter'));
    }
});