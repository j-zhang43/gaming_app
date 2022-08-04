//Tabs
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
//Rock Paper Scissors Lizard Spock
let choices=["Rock","Paper","Scissor","Lizard","Spock"]
let randomChoice=Math.floor(Math.random()*5)+1
let playerChoice;
document.getElementById("submitBtnforRockPaperScissors").onclick  = function(){
    playerChoice = document.getElementById("choice").value;
    switch(randomChoice){
        case 1:
            randomChoice=choices[0];
            break;
        case 2:
            randomChoice=choices[1];
            break;
        case 3:
            randomChoice=choices[2];
            break;
        case 4:
            randomChoice=choices[3];
            break;
        case 5:
            randomChoice=choices[4];
            break;    
    }
    document.getElementById("computerChoice").innerHTML = `The computer choose ${randomChoice}`;
    winCondition();
}
function winCondition(){
    if(playerChoice=="Rock" && randomChoice==choices[0]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "It's a tie";
    }
    else if(playerChoice=="Rock" && randomChoice==choices[1]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You lost!";
    }
    else if(playerChoice=="Rock" && randomChoice==choices[2]){
       document.getElementById("resultforRockPaperScissors").innerHTML = "You win!";
    }
    else if(playerChoice=="Rock" && randomChoice==choices[3]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You win!";
    }
    else if(playerChoice=="Rock" && randomChoice==choices[4]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You lost!";
    }
    
    if(playerChoice=="Paper" && randomChoice==choices[0]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You win!";
    }
    else if(playerChoice=="Paper" && randomChoice==choices[1]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "It's a tie";
    }
    else if(playerChoice=="Paper" && randomChoice==choices[2]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You lost!";
    }
    else if(playerChoice=="Paper" && randomChoice==choices[3]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You lost";
    }
    else if(playerChoice=="Paper" && randomChoice==choices[4]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You win!";
    }
    
    if(playerChoice=="Scissor" && randomChoice==choices[0]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You lost!";
    }
    else if(playerChoice=="Scissor" && randomChoice==choices[1]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You win!";
    }
    else if(playerChoice=="Scissor" && randomChoice==choices[2]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "It's a tie";
    }
    else if(playerChoice=="Scissor" && randomChoice==choices[3]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You win!";
    }
    else if(playerChoice=="Scissor" && randomChoice==choices[4]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You lost!";
    }
    
    if(playerChoice=="Lizard" && randomChoice==choices[0]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You lost!";
    }
    else if(playerChoice=="Lizard" && randomChoice==choices[1]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You lost!";
    }
    else if(playerChoice=="Lizard" && randomChoice==choices[2]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "It's a tie";
    }
    else if(playerChoice=="Lizard" && randomChoice==choices[3]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You win!";
    }
    else if(playerChoice=="Lizard" && randomChoice==choices[4]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You win!";
    }
    
    if(playerChoice=="Spock" && randomChoice==choices[0]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You win!";
    }
    else if(playerChoice=="Spock" && randomChoice==choices[1]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You lost!";
    }
    else if(playerChoice=="Spock" && randomChoice==choices[2]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You win!";
    }
    else if(playerChoice=="Spock" && randomChoice==choices[3]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "You lost!";
    }
    else if(playerChoice=="Spock" && randomChoice==choices[4]){
        document.getElementById("resultforRockPaperScissors").innerHTML = "It's a tie!";
    }    
}
document.getElementById("resetBtnforRockPaperScissors").onclick = function(){
    randomChoice=Math.floor(Math.random()*5)+1
}
// tic tac toe
const cells = document.querySelectorAll(".cell");
const statusText = document.querySelector("#resultforTicTacToe");
const restartBtn = document.querySelector("#restartBtnforTicTacToe");
const winConditions = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];
let options = ["", "", "", "", "", "", "", "", ""];
let currentPlayer = "X";
let running = false;

initializeGame();

function initializeGame(){
    cells.forEach(cell => cell.addEventListener("click", cellClicked));
    restartBtn.addEventListener("click", restartGame);
    statusText.textContent = `${currentPlayer}'s turn`;
    running = true;
}
function cellClicked(){
    const cellIndex = this.getAttribute("cellIndex");

    if(options[cellIndex] != "" || !running){
        return;
    }

    updateCell(this, cellIndex);
    checkWinner();
}
function updateCell(cell, index){
    options[index] = currentPlayer;
    cell.textContent = currentPlayer;
}
function changePlayer(){
    currentPlayer = (currentPlayer == "X") ? "O" : "X";
    statusText.textContent = `${currentPlayer}'s turn`;
}
function checkWinner(){
    let roundWon = false;

    for(let i = 0; i < winConditions.length; i++){
        const condition = winConditions[i];
        const cellA = options[condition[0]];
        const cellB = options[condition[1]];
        const cellC = options[condition[2]];

        if(cellA == "" || cellB == "" || cellC == ""){
            continue;
        }
        if(cellA == cellB && cellB == cellC){
            roundWon = true;
            break;
        }
    }

    if(roundWon){
        statusText.textContent = `${currentPlayer} wins!`;
        running = false;
    }
    else if(!options.includes("")){
        statusText.textContent = `Draw!`;
        running = false;
    }
    else{
        changePlayer();
    }
}
function restartGame(){
    currentPlayer = "X";
    options = ["", "", "", "", "", "", "", "", ""];
    statusText.textContent = `${currentPlayer}'s turn`;
    cells.forEach(cell => cell.textContent = "");
    running = true;
}
//Mad Libs
document.getElementById("submitBtn").onclick = function (){
    let noun1= document.getElementById("noun1").value;
    let noun2= document.getElementById("noun2").value;
    let noun3= document.getElementById("noun3").value;
    let nounPlural= document.getElementById("nounPlural").value;
    let place= document.getElementById("place").value;
    let adjective= document.getElementById("adjective").value;
    story=`<h2>Be Kind</h2>
    Be kind to your ${noun1}-footed ${nounPlural} <br>
    For a duck may be somebody's ${noun2}, <br>
    Be kind to your ${nounPlural} in ${place} <br>
    Where the weather is always ${adjective}. <br><br>
    You may think that this is the ${noun3}, <br>
    Well it is.`
    document.getElementById("story").innerHTML=story
}