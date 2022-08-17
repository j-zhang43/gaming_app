<?php
    header("Content-type: text/css; charset: UTF-8");
?>
* {
    align-items: center;
    margin: 0;
    padding: 0;
    text-align: center;
    font-family: Arial, Helvetica, sans-serif!important;
}
html, body {
  height: 100%;
  margin: 0;
}
/*tabs*/
.tab {
    overflow: hidden;
    border: 1px solid #040404;
    background-color: #040404;
    padding-left: 50px;
    height: 65px;
}
#statesUserName {
    font-size: 14px;
    position: relative;
    top: 12px;
    left: 300px;
    color: white;
}
#logout {
    float: right !important;
}
#logoutLink{
    color: lightblue;
}
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    color: white;
}
.tab button:hover {
    background-color: gray;
}
.tabcontent {
    display: none;
    padding: 6px 12px;
    border-top: none;
    height: 100%;
    background-color: #FAF9F6;
}
/*tic tac toe*/
.cellForTic{
    width: 75px;
    height: 75px;
    border: 2px solid;
    box-shadow: 0 0 0 2px;
    line-height: 75px;
    font-size: 50px;
    cursor: pointer;
}
#cellContainer{
    display: grid;
    grid-template-columns: repeat(3, auto);
    width: 225px;
    margin: auto;
}
#restartBtnforTicTacToe{
    background-color: #4370F1;
    border-radius: 5px;
    border: none;
    color: white;
    cursor: pointer;
    font-size: 12px;
    font-weight: bold;
    padding: 7px 10px;
    text-transform: uppercase;
}
/*rock paper scissors*/
#submitBtnforRockPaperScissors{
    background-color: #4370F1;
    border-radius: 5px;
    border: none;
    color: white;
    cursor: pointer;
    font-size: 12px;
    font-weight: bold;
    padding: 5px 10px;
    text-transform: uppercase;
}
#resetBtnforRockPaperScissors{
    background-color: #4370F1;
    border-radius: 5px;
    border: none;
    color: white;
    cursor: pointer;
    font-size: 12px;
    font-weight: bold;
    padding: 5px 10px;
    text-transform: uppercase;
}
/* connect 4 */
.game-board {
    position: relative;
    bottom: 10rem;
    left: 12rem;
    padding: 10rem;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    grid-template-rows: repeat(7, 1fr);
    height: 700px;
    margin: 10px 0 25px;
    width: 700px;
}
.cell {
    align-items: center;
    background: #4370F1;
    display: flex;
    height: 100px;
    justify-content: center;
    width: 100px;
}
.cell::after {
    background: #FAF9F6;
    border-radius: 50%;
    border: 3px solid black;
    content: '';
    cursor: pointer;
    height: 75px;
    width: 75px;
}
.cell:not(.row-top).red::after {
    background: red;
}
.cell:not(.row-top).yellow::after {
    background: yellow;
}
.cell:not(.row-top).red.win {
    background: red;
}
.cell:not(.row-top).yellow.win {
    background: yellow;
}

.cell.row-top {
    background: #FAF9F6;
}

.cell.row-top::after {
    border: none;
}

.cell.row-top.red::after {
    background: red;
    border: 3px solid black;
}

.cell.row-top.yellow::after {
    background: yellow;
    border: 3px solid black;
}
.footer {
    align-items: center;
    display: flex;
    justify-content: space-between;
    width: 700px;
}
.reset {
    position: relative;
    left: 40rem;
    bottom: 15rem;
    background-color: #4370F1;
    border-radius: 5px;
    border: none;
    color: white;
    cursor: pointer;
    display: block;
    font-size: 16px;
    font-weight: bold;
    padding: 15px 30px;
    text-transform: uppercase;
}
.reset:hover {
    background-color: #1D50F1;
}

.reset:active {
    background-color: #4d7ef1;
}
.status {
    border: 2px black;
    border-radius: 10px;
    display: block;
    font-size: 20px;
}
.status {
    position: relative;
    left: 20rem;
    bottom: 15rem;
}
/* mad libs */
#submitBtn{
    background-color: #4370F1;
    border-radius: 5px;
    border: none;
    color: white;
    cursor: pointer;
    font-size: 12px;
    font-weight: bold;
    padding: 5px 10px;
    text-transform: uppercase;
}
