let hero = document.getElementById("hero");
let hero_content = document.querySelector(".hero-content");

// Menambahkan event listener untuk scroll
window.addEventListener("scroll", function () {
	// Menghitung persentase jarak scroll dari atas halaman
	var value = window.scrollY;

	// Mengatur posisi background hero sesuai dengan persentase jarak scroll
	hero.style.backgroundPositionY = value * 0.7 + "px";
	hero_content.style.marginTop = value * 0.6 + "px";
});

window.addEventListener("load", () => {
	window.innerHTML = `
		<div class="modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
		`;
});
