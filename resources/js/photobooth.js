document.addEventListener("DOMContentLoaded", function () {

    var video = document.getElementById("video");
    var captureBtn = document.getElementById("capture-btn");
    var photosContainer = document.getElementById("photos");
    var timerInput = document.getElementById("timer");
    var selectedFrame = document.querySelector(".frame-option").src;
    var framePreview = document.getElementById("frame-preview");

    // frame
    document.querySelectorAll(".frame-option").forEach(function (frame) {
        frame.addEventListener("click", function () {
            document.querySelectorAll(".frame-option")
                .forEach(f => f.classList.remove("active"));

            frame.classList.add("active");
            selectedFrame = frame.src;
            framePreview.src = frame.src;
        });
    });

    navigator.mediaDevices.getUserMedia({ video: true })
        .then(function (stream) {
            video.srcObject = stream;
        })
        .catch(function (err) {
            alert("Camera access denied!");
            console.error(err);
        });

    captureBtn.addEventListener("click", function () {
        var timer = parseInt(timerInput.value);

        if (timer && timer > 0) {
            captureBtn.disabled = true;

            var countdown = setInterval(function () {
                captureBtn.textContent = "Capture (" + timer + ")";
                timer--;

                if (timer < 0) {
                    clearInterval(countdown);
                    captureBtn.textContent = "Capture";
                    captureBtn.disabled = false;
                    capturePhoto();
                }
            }, 1000);
        } else {
            capturePhoto();
        }
    });

    function capturePhoto() {
        var canvas = document.createElement("canvas");
        var context = canvas.getContext("2d");

        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;

        context.translate(canvas.width, 0);
        context.scale(-1, 1);
        context.drawImage(video, 0, 0, canvas.width, canvas.height);
        context.setTransform(1, 0, 0, 1, 0, 0);

        var frameImg = new Image();
        frameImg.src = selectedFrame;

        frameImg.onload = function () {
            context.drawImage(frameImg, 0, 0, canvas.width, canvas.height);
            addPhotoToGallery(canvas.toDataURL("image/png"));
        };
    }

    function addPhotoToGallery(dataURL) {
        var photoDiv = document.createElement("div");
        photoDiv.classList.add("photo");

        var img = document.createElement("img");
        img.src = dataURL;

        var downloadBtn = document.createElement("button");
        downloadBtn.textContent = "Download";
        downloadBtn.onclick = function () {
            var a = document.createElement("a");
            a.href = dataURL;
            a.download = "photo.png";
            a.click();
        };

        photoDiv.appendChild(img);
        photoDiv.appendChild(downloadBtn);
        photosContainer.appendChild(photoDiv);
    }

});
