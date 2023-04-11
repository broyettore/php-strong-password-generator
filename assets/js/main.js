'use strict';


const formResult = document.querySelector(".result");
const reset = document.querySelector(".reset");

reset.addEventListener("click", () => formResult.value === "");

