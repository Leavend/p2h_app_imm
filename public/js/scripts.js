/*!
* Start Bootstrap - Creative v7.0.7 (https://startbootstrap.com/theme/creative)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-creative/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Function to handle checkbox selection for a row
    function handleCheckboxSelection(rowId) {
        const checkboxes = document.querySelectorAll(`#${rowId} .form-check-input`);
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', () => {
                checkboxes.forEach(cb => {
                    if (cb !== checkbox) {
                        cb.checked = false;
                    }
                });
            });
        });
    }

    // Call the function for each row
    handleCheckboxSelection('inlineRadio1_row1');
    handleCheckboxSelection('inlineRadio1_row2');
    handleCheckboxSelection('inlineRadio1_row3');
    handleCheckboxSelection('inlineRadio1_row4');
    handleCheckboxSelection('inlineRadio1_row5');
    handleCheckboxSelection('inlineRadio1_row6');
    handleCheckboxSelection('inlineRadio1_row7');
    handleCheckboxSelection('inlineRadio1_row8');
    handleCheckboxSelection('inlineRadio1_row9');
    handleCheckboxSelection('inlineRadio1_row10');
    handleCheckboxSelection('inlineRadio1_row11');
    // Add more calls for other rows if needed
    
    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

    // Activate SimpleLightbox plugin for portfolio items
    new SimpleLightbox({
        elements: '#portfolio a.portfolio-box'
    });

});
