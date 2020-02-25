require('./bootstrap');

import $ from "jquery";
import Tools from "./Tools";

$(function (){
    let number = Tools.example();
    console.log(number)
});
