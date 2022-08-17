<?php
    header("Content-type: text/javascipt; charset: UTF-8");
?>
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
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
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
const cells = document.querySelectorAll(".cellForTic");
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
//connect 4
// DOM Elements
const allCells = document.querySelectorAll('.cell:not(.row-top)');
const topCells = document.querySelectorAll('.cell.row-top');
const resetButton = document.querySelector('.reset');
const statusSpan = document.querySelector('.status');

// columns
const column0 = [allCells[35], allCells[28], allCells[21], allCells[14], allCells[7], allCells[0], topCells[0]];
const column1 = [allCells[36], allCells[29], allCells[22], allCells[15], allCells[8], allCells[1], topCells[1]];
const column2 = [allCells[37], allCells[30], allCells[23], allCells[16], allCells[9], allCells[2], topCells[2]];
const column3 = [allCells[38], allCells[31], allCells[24], allCells[17], allCells[10], allCells[3], topCells[3]];
const column4 = [allCells[39], allCells[32], allCells[25], allCells[18], allCells[11], allCells[4], topCells[4]];
const column5 = [allCells[40], allCells[33], allCells[26], allCells[19], allCells[12], allCells[5], topCells[5]];
const column6 = [allCells[41], allCells[34], allCells[27], allCells[20], allCells[13], allCells[6], topCells[6]];
const columns = [column0, column1, column2, column3, column4, column5, column6];


// rows
const topRow = [topCells[0], topCells[1], topCells[2], topCells[3], topCells[4], topCells[5], topCells[6]];
const row0 = [allCells[0], allCells[1], allCells[2], allCells[3], allCells[4], allCells[5], allCells[6]];
const row1 = [allCells[7], allCells[8], allCells[9], allCells[10], allCells[11], allCells[12], allCells[13]];
const row2 = [allCells[14], allCells[15], allCells[16], allCells[17], allCells[18], allCells[19], allCells[20]];
const row3 = [allCells[21], allCells[22], allCells[23], allCells[24], allCells[25], allCells[26], allCells[27]];
const row4 = [allCells[28], allCells[29], allCells[30], allCells[31], allCells[32], allCells[33], allCells[34]];
const row5 = [allCells[35], allCells[36], allCells[37], allCells[38], allCells[39], allCells[40], allCells[41]];
const rows = [row0, row1, row2, row3, row4, row5, topRow];


// variables
let gameIsLive = true;
let yellowIsNext = true;


// Functions
const getClassListArray = (cell) => {
  const classList = cell.classList;
  return [...classList];
};

const getCellLocation = (cell) => {
  const classList = getClassListArray(cell);

  const rowClass = classList.find(className => className.includes('row'));
  const colClass = classList.find(className => className.includes('col'));
  const rowIndex = rowClass[4];
  const colIndex = colClass[4];
  const rowNumber = parseInt(rowIndex, 10);
  const colNumber = parseInt(colIndex, 10);

  return [rowNumber, colNumber];
};

const getFirstOpenCellForColumn = (colIndex) => {
  const column = columns[colIndex];
  const columnWithoutTop = column.slice(0, 6);

  for (const cell of columnWithoutTop) {
    const classList = getClassListArray(cell);
    if (!classList.includes('yellow') && !classList.includes('red')) {
      return cell;
    }
  }

  return null;
};

const clearColorFromTop = (colIndex) => {
  const topCell = topCells[colIndex];
  topCell.classList.remove('yellow');
  topCell.classList.remove('red');
};

const getColorOfCell = (cell) => {
  const classList = getClassListArray(cell);
  if (classList.includes('yellow')) return 'yellow';
  if (classList.includes('red')) return 'red';
  return null;
};

const checkWinningCells = (cells) => {
  if (cells.length < 4) return false;

  gameIsLive = false;
  for (const cell of cells) {
    cell.classList.add('win');
  }
  statusSpan.textContent = `${yellowIsNext ? 'Yellow' : 'Red'} has won!`
  return true;
};

const checkStatusOfGame = (cell) => {
  const color = getColorOfCell(cell);
  if (!color) return;
  const [rowIndex, colIndex] = getCellLocation(cell);

  // Check horizontally
  let winningCells = [cell];
  let rowToCheck = rowIndex;
  let colToCheck = colIndex - 1;
  while (colToCheck >= 0) {
    const cellToCheck = rows[rowToCheck][colToCheck];
    if (getColorOfCell(cellToCheck) === color) {
      winningCells.push(cellToCheck);
      colToCheck--;
    } else {
      break;
    }
  }
  colToCheck = colIndex + 1;
  while (colToCheck <= 6) {
    const cellToCheck = rows[rowToCheck][colToCheck];
    if (getColorOfCell(cellToCheck) === color) {
      winningCells.push(cellToCheck);
      colToCheck++;
    } else {
      break;
    }
  }
  let isWinningCombo = checkWinningCells(winningCells);
  if (isWinningCombo) return;

  // Check vertically
  winningCells = [cell];
  rowToCheck = rowIndex - 1;
  colToCheck = colIndex;
  while (rowToCheck >= 0) {
    const cellToCheck = rows[rowToCheck][colToCheck];
    if (getColorOfCell(cellToCheck) === color) {
      winningCells.push(cellToCheck);
      rowToCheck--;
    } else {
      break;
    }
  }
  rowToCheck = rowIndex + 1;
  while (rowToCheck <= 5) {
    const cellToCheck = rows[rowToCheck][colToCheck];
    if (getColorOfCell(cellToCheck) === color) {
      winningCells.push(cellToCheck);
      rowToCheck++;
    } else {
      break;
    }
  }
  isWinningCombo = checkWinningCells(winningCells);
  if (isWinningCombo) return;

  // Check diagonally /
  winningCells = [cell];
  rowToCheck = rowIndex + 1;
  colToCheck = colIndex - 1;
  while (colToCheck >= 0 && rowToCheck <= 5) {
    const cellToCheck = rows[rowToCheck][colToCheck];
    if (getColorOfCell(cellToCheck) === color) {
      winningCells.push(cellToCheck);
      rowToCheck++;
      colToCheck--;
    } else {
      break;
    }
  }
  rowToCheck = rowIndex - 1;
  colToCheck = colIndex + 1;
  while (colToCheck <= 6 && rowToCheck >= 0) {
    const cellToCheck = rows[rowToCheck][colToCheck];
    if (getColorOfCell(cellToCheck) === color) {
      winningCells.push(cellToCheck);
      rowToCheck--;
      colToCheck++;
    } else {
      break;
    }
  }
  isWinningCombo = checkWinningCells(winningCells);
  if (isWinningCombo) return;

  // Check diagonally \
  winningCells = [cell];
  rowToCheck = rowIndex - 1;
  colToCheck = colIndex - 1;
  while (colToCheck >= 0 && rowToCheck >= 0) {
    const cellToCheck = rows[rowToCheck][colToCheck];
    if (getColorOfCell(cellToCheck) === color) {
      winningCells.push(cellToCheck);
      rowToCheck--;
      colToCheck--;
    } else {
      break;
    }
  }
  rowToCheck = rowIndex + 1;
  colToCheck = colIndex + 1;
  while (colToCheck <= 6 && rowToCheck <= 5) {
    const cellToCheck = rows[rowToCheck][colToCheck];
    if (getColorOfCell(cellToCheck) === color) {
      winningCells.push(cellToCheck);
      rowToCheck++;
      colToCheck++;
    } else {
      break;
    }
  }
  isWinningCombo = checkWinningCells(winningCells);
  if (isWinningCombo) return;

  // Check to see if we have a tie
  const rowsWithoutTop = rows.slice(0, 6);
  for (const row of rowsWithoutTop) {
    for (const cell of row) {
      const classList = getClassListArray(cell);
      if (!classList.includes('yellow') && !classList.includes('red')) {
        return;
      }
    }
  }

  gameIsLive = false;
  statusSpan.textContent = "Game is a tie!";
};

// Event Handlers
const handleCellMouseOver = (e) => {
  if (!gameIsLive) return;
  const cell = e.target;
  const [rowIndex, colIndex] = getCellLocation(cell);

  const topCell = topCells[colIndex];
  topCell.classList.add(yellowIsNext ? 'yellow' : 'red');
};

const handleCellMouseOut = (e) => {
  const cell = e.target;
  const [rowIndex, colIndex] = getCellLocation(cell);
  clearColorFromTop(colIndex);
};

const handleCellClick = (e) => {
  if (!gameIsLive) return;
  const cell = e.target;
  const [rowIndex, colIndex] = getCellLocation(cell);

  const openCell = getFirstOpenCellForColumn(colIndex);

  if (!openCell) return;

  openCell.classList.add(yellowIsNext ? 'yellow' : 'red');
  checkStatusOfGame(openCell);

  yellowIsNext = !yellowIsNext;
  clearColorFromTop(colIndex);
  if (gameIsLive) {
    const topCell = topCells[colIndex];
    topCell.classList.add(yellowIsNext ? 'yellow' : 'red');
  }
};

// Adding Event Listeners
for (const row of rows) {
  for (const cell of row) {
    cell.addEventListener('mouseover', handleCellMouseOver);
    cell.addEventListener('mouseout', handleCellMouseOut);
    cell.addEventListener('click', handleCellClick);
  }
}

resetButton.addEventListener('click', () => {
  for (const row of rows) {
    for (const cell of row) {
      cell.classList.remove('red');
      cell.classList.remove('yellow');
      cell.classList.remove('win');
    }
  }
  gameIsLive = true;
  yellowIsNext = true;
  statusSpan.textContent = '';
});
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