"use strict";

/*
FAQ page
Applying JavaScript to the table cells to show each answers when the user click on each one of the questions.
*/



/*
    We locate the elements we need and store them in variables
*/
let tableChildren = document.querySelector('table').childNodes;
let tableRows = document.querySelectorAll('tr');
let questions = document.getElementsByClassName("question");
let answers = document.getElementsByClassName("answer");




/* 
    We make A eventHandler to handle the click event:
*/
let eventHandler = function(event){
    this.classList.toggle("clicked");
    
    var questions = this.nextElementSibling;
    
    if (questions.style.display === "block") {
        questions.style.display = "none";
    } else{
        questions.style.display = "block";
    }
}


/* 
We loop through all the tr elements with the className = 'questions'; to add the click event to them. 
*/
for(let i of questions){
    i.addEventListener('click', eventHandler);
}