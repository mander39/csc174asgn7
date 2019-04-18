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
            type: "radiogroup",
            name: "car",
            title: "What car do you drive?",
            isRequired: true,
            colCount: 4,
            choices: ["None","Subaru","Chevy","Volkswagen","Nissan","Audi","Jeep","BMW","GMC",
                      "Dodge","Ford","Toyota","Honda","Hyundai","Acura","Chrysler","KIA",
                      "Lexus","Volvo","Mini","Suzuki","Mitsubishi","Mazda","Infiniti","Fiat",
                      "Mercedes-Benz","Land Rover","Other"]
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
            var firstname = jsonP["fname"];
            var lastname = jsonP["lname"];
            var phone = jsonP["car"];
            //var phone= jsonP.car[0]; checkbox, array is used 
            var email = jsonP["email"];
            $.ajax({
                type: "POST",
                url: "postme.php",
                data: { firstname: firstname, lastname: lastname, phone: phone, email: email }       
            })
        document
            //.querySelector('#surveyResult')
            //.innerHTML = dataS;
    });
$("#surveyElement").Survey({model: survey, onValueChanged: surveyValueChanged});