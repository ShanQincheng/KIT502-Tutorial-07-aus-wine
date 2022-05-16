/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/wines-index.js ***!
  \*************************************/
window.deleteWine = function (wineID) {
  var baseUrl = window.location.href;
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    type: 'Delete',
    url: baseUrl + '/' + wineID,
    // data: {ID: wineID}, //<-----this should be an object.
    // contentType:'application/json',  // <---add this
    // dataType: 'text',
    success: function success(msg) {
      console.log(msg);
      location.reload();
    },
    error: function error(xhr, status, _error) {
      alert(xhr);
    }
  });
};

window.editWine = function (wineNo) {
  var wineName = document.getElementById("name-wine-" + wineNo).textContent;
  var wineType = document.getElementById("type-wine-" + wineNo).textContent;
  var wineQuality = document.getElementById("qty-wine-" + wineNo).textContent;
  var winePrice = document.getElementById("price-wine-" + wineNo).textContent;
  var wineRegion = document.getElementById("region-wine-" + wineNo).textContent;
  var wineNameModal = document.getElementById("name-edit-wine");
  wineNameModal.value = wineName;
  var wineTypeModal = document.getElementById("type-edit-wine");
  wineTypeModal.value = wineType;
  var wineQtyModal = document.getElementById("qty-edit-wine");
  wineQtyModal.value = wineQuality;
  var winePriceModal = document.getElementById("price-edit-wine");
  winePriceModal.value = winePrice;
  var wineRegionModal = document.getElementById("region-edit-wine");
  wineRegionModal.value = wineRegion;
  var baseUrl = window.location.href;
  var formModal = document.getElementById("form-edit-wine");
  formModal.action = baseUrl + '/' + wineName;
};
/******/ })()
;