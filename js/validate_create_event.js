//checking if required fields have been fulfilled correctly and outputting error messages if they have not.
function validateCreateEvent()
{
	//event name validation
	var eventName = storeField("txtEventName");
	if(isEmpty(eventName))
	{
		outputError("requiredEventName", "Please enter an event name...");
		return false;
	}
	else{removeError("requiredEventName", "")}

	//genre validation
	var genre = document.getElementById("genre");
	var selectedGenre = genre.options[genre.selectedIndex].value;
	if(selectedGenre == "pleaseSelect")
	{
		outputError("requiredGenre", "Please select a genre for your event...");
		return false;
	}
	else{removeError("requiredGenre", "");}

	var locationSearch = storeField("searchBox");
	if(isEmpty(locationSearch))
	{
		outputError("requiredLocation", "Please enter a location using the provided search facility...");
		return false;
	}
	else{removeError("requiredLocation", "");}

	var description = storeField("txtDescription");
	if(isEmpty(description))
	{
		changeValue("txtDescription", "N/A");
	}
}

//return the value of a field in the form.
function storeField(elementID)
{
	return document.getElementById(elementID).value;
}

//return true if a field has not been filled in
function isEmpty(fieldName)
{
	if (fieldName==null || fieldName=="")
	{
		return true;
	}
}

function checkMorethanZero(val){
	if (val<=0){
		alert("Enter a value More than zero");
		document.getElementById('txtNumberOfTickets').value = 1;
	}
}

//change the text in a given field to a given value using it's ID.
function changeValue(elementID, newValue)
{
	document.getElementById(elementID).value = newValue;
}

//output error using ID element and the DOM
function outputError(elementID, message)
{
	document.getElementById(elementID).innerHTML = message;
}

//remove an error if it no longer applies
function removeError(elementID, replaceValue)
{
	outputError(elementID, replaceValue);
}
