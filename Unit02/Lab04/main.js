/*
/ Author: your name
/ Date: today's date
/ File: main.js
/ Description: This file contains javascript code that displays a list of countries of a selected continent.
/*

/* Handle window onload event. It creates a selection list of seven continents.
*/


window.onload = function () {

	// load continents from an external json file
    let continents = JSON.parse(loadJSON("continents.json"));

    //create the drop down list for the continents
    let _html_select = "<option selected='selected' disabled='disabled'>Select a Continent </option>";
    for (let continent in continents) {
        _html_select += "<option value='" + continent + "'>" + continents[continent] + "</option>";
    }
    document.getElementById("continents").innerHTML = _html_select;

	
	//load countries data from an external json file.
    let cinfo =loadJSON("countries.json");
    let countries = JSON.parse(cinfo);

    
	//handle change event of the drop down list and call the display method.
        document.getElementById('continents').addEventListener("change",function(){
            let continent = this.value;

            display(countries,continent);

        });

}

/* This function takes a json object of countries and a continent as the parameters. 
*  It filters the json document with a continent then appends a row to
*  the div block for each country.
*/
function display(countries, continent) {
    document.getElementById('countries').innerHTML = "";

    for (var i in countries) {

        let name = countries[i].name;
        let capital = countries[i].capital;
        let currency = countries[i].currency.join(", ");
        let language = countries[i].languages.join(", ");
        let areaCode = countries[i].phone.join(", ");

        if(countries[i].continent !== continent){
            continue;
        }


        //create list
        let row = "<div class='row'>";
        row +="<div class='name'>" + name + "</div>";
        row +="<div class='capital'>" + capital + "</div>";
        row +="<div class='currency'>" + currency + "</div>";
        row +="<div class='language'>" + language + "</div>";
        row +="<div class='areaCode'>" + areaCode + "</div>";
        row +="</div>";
        

        document.getElementById('countries').innerHTML += row;
    }
}