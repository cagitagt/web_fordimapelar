document.addEventListener("DOMContentLoaded", function () {

    const modal = document.getElementById("globalImageModal");
    const modalImg = document.getElementById("globalModalImage");

    document.querySelectorAll(".preview-image").forEach(img => {
        img.addEventListener("click", function () {
            modalImg.src = this.dataset.image;
            modal.classList.remove("hidden");
            modal.classList.add("flex");
        });
    });

    modal.addEventListener("click", function () {
        modal.classList.add("hidden");
        modal.classList.remove("flex");
    });

});



