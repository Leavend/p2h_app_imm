"use strict";

/* ===== Enable Bootstrap Popover (on element  ====== */
const popoverTriggerList = document.querySelectorAll(
    '[data-bs-toggle="popover"]'
);
const popoverList = [...popoverTriggerList].map(
    (popoverTriggerEl) => new bootstrap.Popover(popoverTriggerEl)
);

/* ==== Enable Bootstrap Alert ====== */
//var alertList = document.querySelectorAll('.alert')
//alertList.forEach(function (alert) {
//  new bootstrap.Alert(alert)
//});

const alertList = document.querySelectorAll(".alert");
const alerts = [...alertList].map((element) => new bootstrap.Alert(element));

/* ===== Responsive Sidepanel ====== */
const sidePanelToggler = document.getElementById("sidepanel-toggler");
const sidePanel = document.getElementById("app-sidepanel");
const sidePanelDrop = document.getElementById("sidepanel-drop");
const sidePanelClose = document.getElementById("sidepanel-close");
const maincontent = document.getElementById("main-content");
const sidePanelinner = document.getElementById("resp");

window.addEventListener("load", function () {
    responsiveSidePanel();
});

window.addEventListener("resize", function () {
    responsiveSidePanel();
});

function responsiveSidePanel() {
    let w = window.innerWidth;
    if (w >= 1200) {
        // if larger
        //console.log('larger');
        sidePanel.classList.remove("sidepanel-hidden");
        sidePanel.classList.add("sidepanel-visible");
        sidePanel.classList.remove("responsive");
        maincontent.classList.remove("responsive");
        sidePanelinner.classList.remove("responsive");
    } else {
        // if smaller
        //console.log('smaller');
        sidePanel.classList.remove("sidepanel-visible");
        sidePanel.classList.add("sidepanel-hidden");
        sidePanel.classList.add("responsive");
        maincontent.classList.add("responsive");
        sidePanelinner.classList.add("responsive");
    }
}

sidePanelToggler.addEventListener("click", () => {
    if (sidePanel.classList.contains("sidepanel-visible")) {
        console.log("visible");
        sidePanel.classList.remove("sidepanel-visible");
        sidePanel.classList.add("sidepanel-hidden");
    } else {
        console.log("hidden");
        sidePanel.classList.remove("sidepanel-hidden");
        sidePanel.classList.add("sidepanel-visible");
    }
});

sidePanelClose.addEventListener("click", (e) => {
    e.preventDefault();
    sidePanelToggler.click();
});

sidePanelDrop.addEventListener("click", (e) => {
    sidePanelToggler.click();
});

/* ====== Mobile search ======= */
const searchMobileTrigger = document.querySelector(".search-mobile-trigger");
const searchBox = document.querySelector(".app-search-box");

searchMobileTrigger.addEventListener("click", () => {
    searchBox.classList.toggle("is-visible");

    let searchMobileTriggerIcon = document.querySelector(
        ".search-mobile-trigger-icon"
    );

    if (searchMobileTriggerIcon.classList.contains("fa-magnifying-glass")) {
        searchMobileTriggerIcon.classList.remove("fa-magnifying-glass");
        searchMobileTriggerIcon.classList.add("fa-xmark");
    } else {
        searchMobileTriggerIcon.classList.remove("fa-xmark");
        searchMobileTriggerIcon.classList.add("fa-magnifying-glass");
    }
});

// Function to handle checkbox selection for a row
function handleCheckboxSelection(rowId) {
    const checkboxes = document.querySelectorAll(`#${rowId} .form-check-input`);
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", () => {
            checkboxes.forEach((cb) => {
                if (cb !== checkbox) {
                    cb.checked = false;
                }
            });
        });
    });
}

// asas //

const header = document.getElementById("header-content");
const Toggler = document.getElementById("sidepanel-toggler");
const content = document.getElementById("main-content");
const respon = document.getElementById("brand-resp");
const navresp = document.getElementById("nav-resp");
const appresp = document.getElementById("app-nav-main");
const appnav = document.getElementById("menu-accordion");

Toggler.onclick = function () {
    header.classList.toggle("active");
    content.classList.toggle("active");
    respon.classList.toggle("responsive");
    navresp.classList.toggle("responsive");
    appresp.classList.toggle("responsive");
    appnav.classList.toggle("responsive");

    // Toggle the class for nav-icon as well
    const navIcons = document.querySelectorAll(".app-nav .nav-icon");
    navIcons.forEach((navIcon) => {
        navIcon.classList.toggle("responsive");
    });

    const navLink = document.querySelectorAll(".app-nav .nav-link");
    navLink.forEach((navLink) => {
        navLink.classList.toggle("responsive");
    });

    const navText = document.querySelectorAll(".app-nav .nav-link-text");
    navText.forEach((navText) => {
        navText.classList.toggle("responsive");
    });
    const sideApp = document.querySelectorAll("sidepanel-inner");
    sideApp.forEach((sideApp) => {
        sideApp.classList.toggle("responsive");
    });

    // const maincontent = document.querySelectorAll('.app-wrapper');
    // maincontent.forEach(maincontent => {
    //     maincontent.classList.toggle('responsive');
    // });
};
