function getOrderByName() {
    console.log("hi);
}

var productContainer;
if (localStorage.getItem("productsData") == null) {
    productContainer = [];
}
else {
    productContainer = JSON.parse(localStorage.getItem("productsData"));
    displayProduct();
}
function addProduct() {
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
// $(".item").click(swapImg) 
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
        <div class="imgContainer col-md-2 m-3">
        <div class="product`+ i + ` ">
        
            <img src="images/1.jpg" class=" img-fluid w-100" id="mainImg`+ i + `">
            <img src="images/1.jpg" class="w-25 p-2 item float-left">
            <img src="images/2.jpg" class="w-25 p-2 item float-left">
            <img src="images/3.jpg" class="w-25 p-2 item float-left">
            <img src="images/4.jpg" class="w-25 p-2 item float-left">

            <h4 >`+ productContainer[i].name + ` <span class=" badge badge-primary ">` + productContainer[i].category + `</span></h4>
            <p>`+ productContainer[i].desc + `</p>
            <div class="price">`+ productContainer[i].price + `</div>
            </div>
    </div>`;

    }
    document.getElementById("productsRowProduct").innerHTML = temp;
    $(".item").click(swapImg) 
}
function searchProducts(term) {
    var temp = ``;
    for (var i = 0; i < productContainer.length; i++) {
        if (productContainer[i].name.toLowerCase().includes(term.toLowerCase())) {
            temp += `<div class="imgContainer col-md-3 mb-5">
            <div class="product`+ i + ` ">
            
                <img src="images/1.jpg" class=" img-fluid w-100" id="mainImg`+ i + `">
                <img src="images/1.jpg" class="w-25 p-2 item float-left">
                <img src="images/2.jpg" class="w-25 p-2 item float-left">
                <img src="images/3.jpg" class="w-25 p-2 item float-left">
                <img src="images/4.jpg" class="w-25 p-2 item float-left">
    
                <h4>`+ productContainer[i].name + ` <span class=" badge badge-primary ">` + productContainer[i].category + `</span></h4>
                <p>`+ productContainer[i].desc + `</p>
                <div class="price">`+ productContainer[i].price + `</div>
                </div>
        </div>`;
        }
    }
    

    

    document.getElementById("productsRowProduct").innerHTML = temp;

    $(".item").click(swapImg) 
    
}
$("#btnUp").click(function () {
    $("body , html").animate({ scrollTop: '0' }, 800);
})