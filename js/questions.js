var go = function(page) {
    return true;
}

questions = {

    question1: {
        question: "We continued our interest in all things 'pioneer' through which of the following?",
        answers: [
            "Abby registered for Farmhands Camp at the Kline Creek Farm in West Chicago.",
            "We made countless recipes from a Laura Ingalls Wilder website, and Abby presented her biography in class.",
            "We had a memorable day-long adventure at Old World Wisconsin.",
            "All of the above"
        ],
        correct: 3,
        buttons: [
            { label: "Go Back", action: go("intro") },
            { label: "Next Question", action: go(2) }
        ]
    },

    question2: {
        question: "What does four-year-old Grace do at the Early Childhood Center in Batavia?",
        answers: [
            "She discusses politics, money, and religion with local preschoolers.",
            "She rides roller coasters and goes on field trips to Chuck E. Cheese.",
            "She attends preschool on weekday afternoons to improve her speech and language skills.",
            "She updates her Twitter, Facebook and LinkedIn accounts."
        ],
        correct: 2,
        buttons: [
            { label: "Go Back", action: go(1) },
            { label: "Next Question", action: go(3) }
        ]
    },

    question3: {
        question: "What kind of party did we NOT host this past year?",
        answers: [
            "A birthday beach party in July",
            "A toga and keg party",
            "Countless tea parties with friends and American Girl dolls",
            "A New Year's Eve party for our church Life Group"
        ],
        correct: 1,
        buttons: [
            { label: "Go Back", action: go(2) },
            { label: "Next Question", action: go(4) }
        ]
    },
}
