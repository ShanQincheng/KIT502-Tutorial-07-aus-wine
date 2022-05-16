window.deleteWine = function (wineID) {
    let baseUrl = window.location.href;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type:'Delete',
        url: baseUrl + '/' + wineID,
        // data: {ID: wineID}, //<-----this should be an object.
        // contentType:'application/json',  // <---add this
        // dataType: 'text',
        success:function(msg) {
        console.log(msg);
        location.reload();
},

    error: function(xhr, status, error){
    alert(xhr);
}
});
}

window.editWine = function(wineNo) {
    let wineName = document.getElementById("name-wine-" + wineNo).textContent;
    let wineType = document.getElementById("type-wine-" + wineNo).textContent;
    let wineQuality = document.getElementById("qty-wine-" + wineNo).textContent;
    let winePrice = document.getElementById("price-wine-" + wineNo).textContent;
    let wineRegion = document.getElementById("region-wine-" + wineNo).textContent;

    let wineNameModal = document.getElementById("name-edit-wine");
    wineNameModal.value = wineName;
    let wineTypeModal = document.getElementById("type-edit-wine");
    wineTypeModal.value = wineType;
    let wineQtyModal = document.getElementById("qty-edit-wine");
    wineQtyModal.value = wineQuality;
    let winePriceModal = document.getElementById("price-edit-wine");
    winePriceModal.value = winePrice;
    let wineRegionModal = document.getElementById("region-edit-wine");
    wineRegionModal.value = wineRegion;

    let baseUrl = window.location.href;
    let formModal = document.getElementById("form-edit-wine");
    formModal.action = baseUrl + '/' + wineName;
}