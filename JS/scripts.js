let collapseLinks = document.querySelectorAll(".collapse_link");

for (let collapseLink of collapseLinks) {
    collapseLink.addEventListener("click", () => {

        let collapseElement = document.querySelector("#" + collapseLink.dataset.collapseBlockId);

        if (collapseElement.style.display === "none") {
            collapseElement.style.display = "block";
            collapseLink.innerHTML = "&uArr;";
        } else {
            collapseElement.style.display = "none";
            collapseLink.innerHTML = "&uArr;";
        }
    });
}