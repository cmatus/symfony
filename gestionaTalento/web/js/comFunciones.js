/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

function winProgress(wins, winId, mode) {          
    //var wins = new dhtmlXWindows();
    if (mode===1) {
        wins.window(winId).progressOn();
    } else {        
        wins.window(winId).progressOff();
    }
}

function numericTextBox(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
//    alert(charCode);
    if (charCode === 0) {
        return false;
    }
    //                          Punto                Letra c      Letra v               Letra z            Letra x
    if (charCode === 188 || charCode === 46 || charCode === 99 || charCode === 118 || charCode === 120 || charCode === 122) {
        return true;
    } //  ==,
    if (charCode > 31 && (charCode < 48 || charCode > 57) || charCode == 188) {
        return false;
    }
    return true;
}
