document.addEventListener('DOMContentLoaded', function() {
  document.getElementById('txtCCN').addEventListener('keyup', function() {
    var value = this.value;
    this.value = value.substring(0, 7) + value.substring(7, 15).replace(/\d/g, '*') 
                + value.substring(15);}, false);});