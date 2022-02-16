// const startQuizButton = document.getElementById("startQuiz");
// const endQuizButton = document.getElementById("endQuiz");
// const myInfoBoxes = document.getElementsByClassName("info-box");

// startQuizButton.addEventListener("click", function() {
//     console.log("clicked");
//     console.log(myInfoBoxes[0]);
//     myInfoBoxes[0].style.display = "block";
//     startQuizButton.style.display = "none";
// });

// endQuizButton.addEventListener('click', function() {
//     startQuizButton.style.display = "block";
//     myInfoBoxes[0].style.display = "none";
// })

// function range(a, b) {
//     return function(num) {
//         if (num >= a && num <= b) {
//             return "It lies in the range"
//         } else {
//             return "It doesnot lie in the range"
//         }

//     }
// }
// const Range = range(50, 100);
// console.log(Range(60));
// console.log(Range(40));



// // for each loop in javascript
// const numbers = [10, 20, 30, 40, 50];
// numbers.forEach(function(num) {
//     console.log(num * 2);

// })

// function printTriple(n) {
//     console.log(n * 3);

// }
// numbers.forEach(printTriple);



//return if the number is 100 or sum of the number is 100 otherwise false using javascript fumction
// function checkIt(a, b) {
//     if (a + b === 100 || (a === 100 && b === 0) || (a === 0 && b === 100)) {
//         return "true";
//     } else {
//         return "error";
//     }

// }
// console.log(checkIt(10, 0));
// console.log(checkIt(50, 50));
// console.log(checkIt(100, 40));
// console.log(checkIt(100, 0));
// console.log(checkIt(0, 0));
// console.log(checkIt(100, 0));


// string template literals
// const Books = [{
//         title: "Java Programming",
//         authors: ["santosh", "niraj"],
//         rating: 3.3,
//     },
//     {
//         title: "C Programming",
//         authors: ["nita", "shree"],
//         rating: 3.9,
//     },
//     {
//         title: " C# Programming",
//         authors: ["santosh", "niraj"],
//         rating: 3.6,
//     },
// ]
// Books.forEach(function(b) {
//     console.log(`
// <ul>
// <li>title:${b.title}</li>
// <li>title:${b.author}</li>
// <li>title:${b.rating}</li>
//     `)
// })
console.log("heelo");
const myp = document.getElementById("myp");
myp.innerHTML = "claa"
const myp = document.getElementById("mydiv");
const myp = document.getElementById("myp2");
const myp = document.getElementById("mydiv2");
myp.addEventListener("click", function() { mydiv.style.background = "lightblue" });
// myp.onclick = function() { mydiv.style.background = "lightblue" };