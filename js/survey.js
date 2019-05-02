var surveyValueChanged = function (sender, options) {
    var el = document.getElementById(options.name);
    if (el) {
        el.value = options.value;
    }
};

var defaultThemeColors = Survey
    .StylesManager
    .ThemeColors["default"];
    defaultThemeColors["$main-color"] = "#67badb";
    defaultThemeColors["$main-hover-color"] = "#639bed";
    defaultThemeColors["$text-color"] = "#141414";
    defaultThemeColors["$header-color"] = "#7ff07f";
    defaultThemeColors["$header-background-color"] = "#4a4a4a";
    defaultThemeColors["$body-container-background-color"] = "#f8f8f8";

Survey
    .StylesManager
    .applyTheme();
var json = {
    questions: [
        {
            type: "text",
            isRequired: true,
            name: "fname",
            title: "Your first name:"
        }, {
            type: "text",
            isRequired: true,
            name: "lname",
            title: "Your last name:"
        }, {
            type: "text",
            isRequired: true,
            name: "email",
            title: "Your e-mail"
        }, {
            type: "text",
            isRequired: true,
            name: "city",
            title: "What city are you in right now?"
        }, {
            type: "text",
            isRequired: true,
            name: "state",
            title: "What US state are you in right now? (If you're not in the US, please put what country you are in)"
        }, {
            type: "radiogroup",
            name: "been",
            title: "Have you ever been to Walt Disney World before?",
            isRequired: true,
            colCount: 2,
            choices: ["Yes", "No"]
        }, {
            type: "radiogroup",
            name: "go",
            title: "Do you think you would go to Walt Disney World in the future?",
            isRequired: true,
            colCount: 2,
            choices: ["Yes", "No"]
        }, {
            type: "radiogroup",
            name: "park",
            title: "Which Walt Disney World Park is your favorite?",
            isRequired: true,
            colCount: 2,
            choices: ["Magic Kingdom","Epcot","Hollywood Studios","Animal Kingdom", "I'm not sure"]
        }, {
            type: "comment",
            name: "open",
            title: "Any general comments about Walt Disney World that you would like to share?",
        }
    ]
};


window.survey = new Survey.Model(json);

survey

    .onComplete

    .add(function (result) {

            var dataS = JSON.stringify(result.data);

            // Turning JSON string into onjects

            var jsonP = JSON.parse(dataS);

            var dataR = "result: " + dataS;

            var first = jsonP["fname"];

            var last = jsonP["lname"];

            var email = jsonP["email"];

            var city = jsonP["city"];

            var state = jsonP["state"];

            var hasbeen = jsonP["been"];

            var wouldgo = jsonP["go"];

            var favorite = jsonP["park"];

            var comment = jsonP["open"];

            //var choice= jsonP.car[0]; checkbox, array is used 

            var email = jsonP["email"];

            $.ajax({

                url: "dbphp/postme.php",

                type: "POST",

                data: { first: first, last: last, email: email, city: city, state: state, hasbeen: hasbeen, wouldgo: wouldgo, favorite: favorite, comment: comment }       

            })

        document

            //.querySelector('#surveyResult')

            //.innerHTML = dataS;

    });

$("#surveyElement").Survey({model: survey, onValueChanged: surveyValueChanged});