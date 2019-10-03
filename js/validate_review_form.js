function validateReviewForm()
{
	//these fields are not required but we're filling them in for scripting/output purposes.
	var reviewerName = storeField("txtReviewerName");
	if(isEmpty(reviewerName))
	{
		changeValue("txtReviewerName", "Anonymous");
	}	
	var reviewTitle = storeField("txtReviewTitle");
	if(isEmpty(reviewTitle))
	{
		changeValue("txtReviewTitle", "N/A");
	}	
	var review = storeField("txtReview");
	if(isEmpty(review))
	{
		changeValue("txtReview", "N/A");
	}
	
	//output error if a product has not been selected for the review
	var productName = document.getElementById("product");
	var selectedTitle = productName.options[productName.selectedIndex].value;	
	if(selectedTitle == "pleaseSelect")
	{
		outputError("requiredProductName", "Please select a game title");
		return false;
	}
	else{removeError("requiredProductName", "*");}	
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

//change the text in a given field to a given value using it's ID.
function changeValue(elementID, newValue)
{
	document.getElementById(elementID).value = newValue;
}

//output error using ID element and the DOM
function outputError(elementID, message)
{
	document.getElementById(elementID).innerHTML = message;
	document.getElementById(elementID).style.backgroundColor = "blue";
	document.getElementById(elementID).style.color = "white";
}

//remove an error if it no longer applies
function removeError(elementID, replaceValue)
{
	outputError(elementID, replaceValue);
	document.getElementById(elementID).style.backgroundColor = null;
}