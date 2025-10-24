document.addEventListener("DOMContentLoaded", function () {
    // 🔹 Global state
    let currentSlideIndex = 0;
    let slidesData = [];

    // 🔹 Merge all slide arrays
    function rebuildSlidesData() {
        slidesData = [
            ...(window.slides1 || []),
            ...(window.slides2 || []),
            ...(window.slides3 || []),
            ...(window.slides4 || []),
        ];
        console.log("Slides merged. Total slides:", slidesData.length);
    }

    // 🔹 DOM Elements
    const container = document.getElementById("container_test");
    const buttonsContainer = document.getElementById("buttons");
    const returnButton = document.getElementById("returnButton");
    const homeButton = document.getElementById("homeButton");
    const closeButton = document.getElementById("closeButton");
    const nextButton = document.getElementById("nextButton");
    const bearButton = document.getElementById("bearButton");
    const mascot = document.getElementById("mascot");
    const vector1 = document.getElementById("vector1");
    const vector2 = document.getElementById("vector2");
    const title = document.getElementById("title");

    // 🔹 Show/Hide helper
    function toggleElement(element, show) {
        if (element) element.style.display = show ? "block" : "none";
    }

    // 🔹 Update UI per slide
    function updateSlideElements(slide) {
        toggleElement(vector1, slide.vector1 === true);
        toggleElement(vector2, slide.vector2 === true);
        toggleElement(mascot, slide.mascot === true);

        // Title logic
        if (slide.titleShow === true && slide.titleText) {
            title.style.display = "block";
            title.textContent = slide.titleText;
        } else {
            title.style.display = "none";
        }

        // Buttons logic
        if (slide.showButtons === true) {
            buttonsContainer.style.display = "flex";
            toggleElement(returnButton, slide.showReturnButton === true);
            toggleElement(homeButton, slide.showHomeButton === true);
            toggleElement(closeButton, slide.showCloseButton === true);
            toggleElement(nextButton, slide.NextButton === true);
            toggleElement(bearButton, slide.showBearButton === true);
        } else {
            buttonsContainer.style.display = "none";
        }
    }

    // 🔹 Render slide
    function renderSlide(index) {
        if (slidesData[index]) {
            const slide = slidesData[index];
            container.innerHTML = slide.content || "";
            updateSlideElements(slide);
            console.log(
                "Rendered slide:",
                slide.id,
                "Index:",
                currentSlideIndex
            );
        }
    }

    // 🔹 Navigation
    function nextSlide() {
        if (currentSlideIndex < slidesData.length - 1) {
            currentSlideIndex++;
            renderSlide(currentSlideIndex);
        } else {
            console.log("Reached last slide.");
        }
    }

    function previousSlide() {
        if (currentSlideIndex > 0) {
            currentSlideIndex--;
            renderSlide(currentSlideIndex);
        }
    }

    function goHome() {
        currentSlideIndex = 0;
        renderSlide(currentSlideIndex);
    }

    function closePresentationOrCustomAction() {
        const currentSlide = slidesData[currentSlideIndex];
        if (currentSlide && currentSlide.buttonText !== "X") {
            console.log("Custom action:", currentSlide.buttonText);
        } else {
            if (confirm("Are you sure you want to close the presentation?")) {
                window.close();
            }
        }
    }

    // 🔹 Button click events
    returnButton?.addEventListener("click", previousSlide);
    homeButton?.addEventListener("click", goHome);
    closeButton?.addEventListener("click", closePresentationOrCustomAction);
    nextButton?.addEventListener("click", nextSlide);
    bearButton?.addEventListener("click", nextSlide); //   Bear button behaves like Next

    // 🔹 Blade loader
    window.loadBlade = function (url, targetContainerId) {
        fetch(url)
            .then((response) => response.text())
            .then((html) => {
                const targetContainer =
                    document.getElementById(targetContainerId);
                if (targetContainer) {
                    targetContainer.innerHTML = html;

                    // Refresh slides after new load
                    rebuildSlidesData();

                    // Stay on current slide (fallback: reset to 0 if invalid)
                    if (!slidesData[currentSlideIndex]) {
                        currentSlideIndex = 0;
                    }
                    renderSlide(currentSlideIndex);
                }
            })
            .catch((error) => console.error("Error loading blade:", error));
    };

    // 🔹 Initial load
    rebuildSlidesData();
    if (slidesData.length > 0) renderSlide(currentSlideIndex);
});

// Debugging logs
console.log("slides1:", window.slides1?.length);
console.log("slides2:", window.slides2?.length);
console.log("slides3:", window.slides3?.length);
console.log("slides4:", window.slides4?.length);
