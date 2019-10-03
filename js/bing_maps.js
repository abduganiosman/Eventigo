/*
  Source: https://www.bing.com/api/maps/sdk/mapcontrol/isdk/autosuggestuiwithoutmap#JS
  Date accessed: 15th March 2019
*/

var searchedLocation = "";

function loadMapScenario()
{
    Microsoft.Maps.loadModule('Microsoft.Maps.AutoSuggest', {
        callback: onLoad,
        errorCallback: onError
    });

    function onLoad()
    {
        var options = { maxResults: 5 }; //max 5 suggestions
        var manager = new Microsoft.Maps.AutosuggestManager(options);
        manager.attachAutosuggest('#searchBox', '#searchBoxContainer', selectedSuggestion); //output suggestions
    }

    function onError(message)
    {
        document.getElementById('printoutPanel').innerHTML = message;
    }

    //store suggestion in variable
    function selectedSuggestion(suggestionResult)
    {
        //document.getElementById('printoutPanel').innerHTML = 'Suggestion: ' + suggestionResult.formattedSuggestion;
        searchedLocation = suggestionResult.formattedSuggestion;
    }
}
