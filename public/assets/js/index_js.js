
var productContainer;
if (localStorage.getItem("productsData") == null) {
    productContainer = [];
}
else {
    productContainer = JSON.parse(localStorage.getItem("productsData"));
    displayProduct();
}
function addProduct() {
    window.alert("hi");
    var productName = document.getElementById("productNameInp").value;
    var productPrice = document.getElementById("ProductPriceInp").value;
    var productCategory = document.getElementById("ProductCategoryInp").value;
    var productDesc = document.getElementById("ProductDescInp").value;
    var product = {
        name: productName,
        price: productPrice,
        category: productCategory,
        desc: productDesc
    }
    productContainer.push(product);
    localStorage.setItem("productsData", JSON.stringify(productContainer));
    displayProduct();
}
function swapImg(e){
    var x = $(this).parent().attr('class');
    var imgSrc = $(this).attr("src");
    myImage = Array.from(document.querySelectorAll("." + x + " img"));
    console.log(myImage);
    $("#"+myImage[0].id).attr("src",imgSrc);
    console.log();
}
function displayProduct() {
    var temp = "";
    for (var i = 0; i < productContainer.length; i++) {

        temp += `
        <div class="imgContainer col-md-3 mb-5">
        <div class="product`+ i + ` ">
        
            <img src="images/1.jpg" class=" img-fluid w-100" id="mainImg`+ i + `">
            <img src="images/1.jpg" class="w-25 p-2 item float-left">
            <img src="images/2.jpg" class="w-25 p-2 item float-left">
            <img src="images/3.jpg" class="w-25 p-2 item float-left">
            <img src="images/4.jpg" class="w-25 p-2 item float-left">

            <h4>`+ productContainer[i].name + ` <span class=" badge badge-primary ">` + productContainer[i].category + `</span></h4>
            <p>`+ productContainer[i].desc + `</p>
            <div class="price">`+ productContainer[i].price + `</div>
            <button onclick="deleteProduct(`+ i + `)" class = "btn btn-outline-danger">delete</button>
            <button onclick="updateProduct(`+ i + `)" class = "btn btn-outline-warning">update</button>
            </div>
    </div>`;

    }
    document.getElementById("productsRow").innerHTML = temp;
    $(".item").click(swapImg) 

}
function searchProducts(term) {
    var temp = ``;
    for (var i = 0; i < productContainer.length; i++) {
        if (productContainer[i].name.toLowerCase().includes(term.toLowerCase())) {
            temp += `<div class="col-md-3">
        <div class="product">
            <img src="images/1.jpg" class=" img-fluid">
            <h4>`+ productContainer[i].name + ` <span class=" badge badge-primary ">` + productContainer[i].category + `</span></h4>
            <p>`+ productContainer[i].desc + `</p>
            <div class="price">`+ productContainer[i].price + `</div>
        </div>
    </div>`;
        }
    }
    document.getElementById("productsRow").innerHTML = temp;
    $(".item").click(swapImg) 


}
function deleteProduct(index) {
    productContainer.splice(index, 1);
    localStorage.setItem("productsData", JSON.stringify(productContainer));
    displayProduct();
}
function updateProduct(index) {
    var temp = `
    <div class="lightbox-container d-flex justify-content-center align-items-center">
    <div class=" container text-center">
    <div class="form-group">
    <label style="color:white">ProductName</label>
    <input id="productNameUpdate" class="form-control">
    <small class="text-muted">must be 8-20 character</small>
</div>
<div class="form-group">
    <label style="color:white">ProductPrice</label>
    <input id="ProductPriceUpdate" class="form-control">
    <small class="text-muted">must be 8-20 character</small>
</div>
<div class="form-group">
    <label style="color:white">ProductCategory</label>
    <input id="ProductCategoryUpdate" class="form-control">
    <small class="text-muted">must be 8-20 character</small>
</div>
<div class="form-group">
    <label style="color:white">ProductDesc</label>
    <textarea id="ProductDescUpdate" class="form-control"></textarea>
    <small class="text-muted">must be 8-20 character</small>
</div>
<button onclick="update(`+ index + `)" class="btn btn-outline-info">updateProduct</button>
    </div>
    </div>`;
    console.log(temp);
    document.getElementById("productsRow").innerHTML = temp;
    $(".item").click(swapImg) 

}
function update(index) {
    productContainer[index].name = document.getElementById("productNameUpdate").value;
    productContainer[index].price = document.getElementById("ProductPriceUpdate").value;
    productContainer[index].category = document.getElementById("ProductCategoryUpdate").value;
    productContainer[index].desc = document.getElementById("ProductDescUpdate").value;
    localStorage.setItem("productsData", JSON.stringify(productContainer));
    displayProduct();
}

$("#btnUp").click(function () {
    $("body , html").animate({ scrollTop: '0' }, 800);
})