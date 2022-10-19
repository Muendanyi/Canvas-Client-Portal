//----------------Buttons variables-----------------//
var access_btn = document.getElementById("access-btn");
var metrics_btn = document.getElementById("metrics-btn");
var freshdesk_btn = document.getElementById("freshdesk-btn");

//---------------div Images------------------------------//
var access_img = document.getElementById("access-control-img");
var metric_usage_img = document.getElementById("metrics-usage-img");
var freshdesk_img = document.getElementById("freshdesk-img");

//-----------------Section Varibales------------------------//
var metric_usage_sec = document.getElementById("metrics-usage-sec");
var freshdesk_sec = document.getElementById("freshdesk-sec");
var access_sec = document.getElementById("access-control-sec");

function onload(){
    document.getElementById("metrics-usage-img").style.display = "none";
    document.getElementById("freshdesk-img").style.display = 'none';
    document.getElementById("metrics-usage-sec").style.display = 'none';
    document.getElementById("freshdesk-sec").style.display = 'none';
}


document.getElementById("metrics-btn").addEventListener('click', function dispaly(){
    metric_usage_img.style.display = 'block'
    access_img.style.display = 'none'
    freshdesk_img.style.display = 'none'

    metric_usage_sec.style.display = 'block'
    access_sec.style.display = 'none'
    freshdesk_sec.style.display = 'none'

})

document.getElementById("access-btn").addEventListener('click', function dispaly(){
    metric_usage_img.style.display = 'none'
    access_img.style.display = 'block'
    freshdesk_img.style.display = 'none'

    metric_usage_sec.style.display = 'none'
    access_sec.style.display = 'block'
    freshdesk_sec.style.display = 'none'

})

document.getElementById("freshdesk-btn").addEventListener('click', function dispaly(){
    metric_usage_img.style.display = 'none'
    access_img.style.display = 'none'
    freshdesk_img.style.display = 'block'

    metric_usage_sec.style.display = 'none'
    access_sec.style.display = 'none'
    freshdesk_sec.style.display = 'block'

})

var element = document.getElementsById('report.PowerBI-report'); //Report = Report containerid
var report = powerbi.get(element);
report.fullscreen();