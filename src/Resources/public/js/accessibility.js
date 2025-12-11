/* files/themore/assets/js/accessibility.js | last updated v1.3.2 (creation) */



let newsLists = document.querySelectorAll(".mod_newslist, .mod_calendar, .mod_eventlist, .mod_faqlist, .mod_login, .mod_lostPassword, .mod_registration, .content-accordion, .ce_form");
let currentUrl = window.location.origin + window.location.pathname + window.location.search;

newsLists.forEach((newsList, index) => {
    let skipId = `skipElement${index + 1}`;
    let skipLink = document.createElement("a");
    skipLink.href = `${currentUrl}#${skipId}`;
    skipLink.className = "invisible";
    skipLink.textContent = "Element Überspringen";
    
    let skipTarget = document.createElement("div");
    skipTarget.classList.add('skipToContainer')
    skipTarget.id = skipId;

    newsList.insertBefore(skipLink, newsList.firstChild);
    newsList.insertBefore(skipTarget, newsList.lastChild);

});

