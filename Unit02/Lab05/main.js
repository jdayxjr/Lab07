/* Author: your name
 * Date: today's date
 * Name: main.js
 * Description: this is the javascript file for handling client-side scripting.
 */

/******************************************************************************
 * Handle key press event.
 * This function makes asynchronous HTTP request using the XMLHttpRequest object.
 * It passes a name to population.php for processing.
 *****************************************************************************/
function handlekeyup(e) {

    //retrieve user input from the text box
    let name = trim(document.getElementById('name').value);
    if(name == "") {
        error("");
        return;
    }
    }
	
    //add your code here to process ajax requests and handle server's responses

        //create the request
        let xml = new XMLHttpRequest();

        //open request
        xml.open('GET', 'population.php?=name' + name, true);

        xhr.onload = function (){

            let population = JSON.parse(xhr.responseText);
            if (population["error"]){
                clear();
                error(population["error"]);
            }
            else{
                error("");
                display(population);
            }


}

/*
 * This function accepts a JSON object containing population information
 * and display it in an HTML table. This function get invoked by the handlekeyup function
 * when the country/region name is found in the database.
 * 
 */
function display(population) {
    //add your code here to retrieve data from an JSON object and then display them
    let name = trim(document.getElementById('name').value);

    let row = "";
    for (let count in population){
        if (count == "metadata"){
            continue;
        }

    let countryPop = population[count][name];
        let worldPop = population[count]["World"];

        row += `
     <div class=’row’>;
    <div>Year</div>;
    <div>Country population</div>;
    <div>World population</div>;
        </div>;
            `
}
    document.getElementById('population-results').innerHTML=row;

/*
 * This function clears the population. The function is invoked by the handlekeyup function if
 * the country name a user has entered is not found in the database.
 */
function clear() {
    //add your code here to clear the population data
document.getElementById('population-results').innerHTML ='';


}

//This function displays an error message in the div block with the id of "message".
function error(message) {
    //add your code here to display an error message.
    document.getElementById('message').innerHTML = message;
}

/*
* A home-made trim function that removes leading and
 * trailing whitespace characters from a string
 */
function trim(str) {
    return str.replace(/^\s\s*/, '').replace(/\s\s*$/, '');
}

/*
* A home-made function that displays a number with commas as thousands separators
 */
function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}