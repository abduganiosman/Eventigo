var numberOfStars = 0;

function initialLoad()
{
	//upon loading the form, get the default rating from data-rating and process that
	document.addEventListener('DOMContentLoaded', function()
	{
		//loop through each star to add a click listener.
		var stars = document.querySelectorAll('.star');
		stars.forEach(function(star)
		{
			star.addEventListener('click', setRating); 
		});
		
		//this takes the default value from data-rating in the html and upon loading we dispatch a new click.
		var dataRating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
		var targetStar = stars[dataRating - 1]; //-1: array starts at 0
		targetStar.dispatchEvent(new MouseEvent('click')); 
	});	
}

//called whenever you click on a star
function setRating(ev)
{
	var clickedStar = ev.currentTarget; //the span that was just clicked
	var stars = document.querySelectorAll('.star');
	var currentMatches = false;
	
	//looping through however many stars selected and adding/removing rated class to the appropriate ones
	stars.forEach(function(star, index)
	{
		if(!currentMatches) {star.classList.add('rated');}
		else {star.classList.remove('rated');}
		
		//are we currently looking at the span that was clicked
		if(star === clickedStar)
		{
			currentMatches = true;
			numberOfStars = index + 1; //+1 since the array starts at 0
		}
	});
	
	document.querySelector('.stars').setAttribute('data-rating', numberOfStars); //update the data-rating in the html.
	document.getElementById("ratingNumber").value = numberOfStars;
}

/*
	Source: https://gist.github.com/prof3ssorSt3v3/29e623d441e8174ffaef17741a1bba14
	Date Accessed: 27th December 2018
*/

initialLoad();