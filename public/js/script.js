// list navigation
const listButton = document.querySelector('.list-button');
const listNavigation = document.querySelector('.list-navigation');
listButton.addEventListener('click', () => {
    listNavigation.style.display = 'block';
});
const listHidden = document.querySelectorAll('.list-hidden');
for(let i = 0; i < listHidden.length; i++) {
    listHidden[i].addEventListener('click', () => {
        listNavigation.style.display = 'none';
    });
}

// input label color
const inputForm = document.querySelectorAll('.input-form');
const inputLabel = document.querySelectorAll('.input-label');
for(let i = 0; i < inputForm.length || i < inputLabel.length; i++) {
    inputForm[i].addEventListener('focus', () => {
        inputLabel[i].style.color = '#E94F36';
    });

    inputForm[i].addEventListener('blur', () => {
        inputLabel[i].style.color = 'black';
    });
}

// list collor
const list1 = document.querySelector('.list-1');
const logo = document.querySelector('.logo');
const list2 = document.querySelector('.list-2');
const list3 = document.querySelector('.list-3');
const list4 = document.querySelector('.list-4');
list1.addEventListener('click', () => {
    list1.style.color = "#E94F36";
    list2.style.color = "black";
    list3.style.color = "black";
    list4.style.color = "black";
});
logo.addEventListener('click', () => {
    list1.style.color = "#E94F36";
    list2.style.color = "black";
    list3.style.color = "black";
    list4.style.color = "black";
    list5.style.color = "#E94F36";
    list6.style.color = "black";
    list7.style.color = "black";
    list8.style.color = "black";
    
});
list2.addEventListener('click', () => {
    list2.style.color = "#E94F36";
    list1.style.color = "black";
    list3.style.color = "black";
    list4.style.color = "black";
});
list3.addEventListener('click', () => {
    list3.style.color = "#E94F36";
    list1.style.color = "black";
    list2.style.color = "black";
    list4.style.color = "black";
});
list4.addEventListener('click', () => {
    list4.style.color = "#E94F36";
    list1.style.color = "black";
    list2.style.color = "black";
    list3.style.color = "black";
});

const list5 = document.querySelector('.list-5');
const list6 = document.querySelector('.list-6');
const list7 = document.querySelector('.list-7');
const list8 = document.querySelector('.list-8');
list5.addEventListener('click', () => {
    list5.style.color = "#E94F36";
    list6.style.color = "black";
    list7.style.color = "black";
    list8.style.color = "black";
});
list6.addEventListener('click', () => {
    list6.style.color = "#E94F36";
    list5.style.color = "black";
    list7.style.color = "black";
    list8.style.color = "black";
});
list7.addEventListener('click', () => {
    list7.style.color = "#E94F36";
    list5.style.color = "black";
    list6.style.color = "black";
    list8.style.color = "black";
});
list8.addEventListener('click', () => {
    list8.style.color = "#E94F36";
    list5.style.color = "black";
    list6.style.color = "black";
    list7.style.color = "black";
});

// lets talk
const letsTalkButton = document.querySelectorAll('.lets-talk-button');
const letsTalkOverlay = document.querySelector('.lets-talk-overlay');
const toClose = document.querySelector('.to-close');
for(let ltb = 0; ltb < letsTalkButton.length; ltb++) {
    letsTalkButton[ltb].addEventListener('click', () => {
        letsTalkOverlay.style.transform = 'translateY(0)';
        toClose.style.display = 'block';
    });
}
toClose.addEventListener('click', () => {
    letsTalkOverlay.style.transform = 'translateY(-110%)';
    toClose.style.display = 'none';
    alertDevelopmentProcesed.style.transform = 'translateY(-110%)';
});

// form services
const inputFormservices = document.querySelectorAll('.input-form-services');
const inputLabelServices = document.querySelectorAll('.input-label-services');
for(let ils = 0; ils < inputFormservices.length || ils < inputLabelServices.length; ils++) {
    inputFormservices[ils].addEventListener('focus', () => {
        inputLabelServices[ils].style.color = '#E94F36';
    });

    inputFormservices[ils].addEventListener('blur', () => {
        inputLabelServices[ils].style.color = '#F3F1EF';
    });
}

const buttonServices = document.querySelector('.button-services');
const servicesOverlay = document.querySelector('.services-overlay');
buttonServices.addEventListener('click', () => {
    servicesOverlay.style.display = 'flex';
});
const cancelServices = document.querySelector('.cancel-services');
cancelServices.addEventListener('click', () => {
    servicesOverlay.style.display = 'none';
});

// project overlay
const buttonDetailProject = document.querySelectorAll(".button-detail-project");
const projectOverlay = document.querySelectorAll(".project-overlay");
for(let po = 0; po < buttonDetailProject.length || po < projectOverlay.length; po++) {
    buttonDetailProject[po].addEventListener("click", () => {
        projectOverlay[po].style.display = 'flex';
    });
}

const bcp = document.querySelectorAll(".button-close-project");
for (let x = 0; x < bcp.length || x < projectOverlay.length; x++) {
    bcp[x].addEventListener("click", () => {
        projectOverlay[x].style.display = 'none'
    });
}

const developmentProcess = document.querySelectorAll('.development-process');
const alertDevelopmentProcesed = document.querySelector('.alert-development-procesed');
for(let dp = 0; dp < developmentProcess.length; dp++) {
    developmentProcess[dp].addEventListener('click', () => {
        alertDevelopmentProcesed.style.transform = 'translateY(0)';
        toClose.style.display = 'block';
    });
}

// youtube recomend
const youtubeRecomend = document.querySelector('.youtube-recomend');
const hideYoutube = document.querySelector('.hide-youtube');
function showVideo() {
    youtubeRecomend.style.display = 'flex';
}

setTimeout(showVideo, 10000); 

hideYoutube.addEventListener('click', () => {
    youtubeRecomend.style.display = 'none';
});

// session services 
const sessionServicesHide = document.querySelector('.session-services-hide');
const sessionServices = document.querySelector('.session-services');
sessionServicesHide.addEventListener('click', () => {
    sessionServices.style.transform = 'translateY(-110%)';
});