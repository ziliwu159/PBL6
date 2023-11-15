let count1 = 1;
let count2 = 1;
let count3 = 1;

document.getElementById("minus-1").onclick = function () {
  count1 -= 1;
  document.getElementById("quantity-1").innerHTML = count1;
};

document.getElementById("plus-1").onclick = function () {
  count1 += 1;
  document.getElementById("quantity-1").innerHTML = count1;
};

document.getElementById("minus-2").onclick = function () {
  count1 -= 1;
  document.getElementById("quantity-2").innerHTML = count1;
};

document.getElementById("plus-2").onclick = function () {
  count1 += 1;
  document.getElementById("quantity-2").innerHTML = count1;
};

document.getElementById("minus-3").onclick = function () {
  count1 -= 1;
  document.getElementById("quantity-3").innerHTML = count1;
};

document.getElementById("plus-3").onclick = function () {
  count1 += 1;
  document.getElementById("quantity-3").innerHTML = count1;
};

harga1 = 750000
harga2 = 300000
harga3 = 60000

totalharga = (harga1 * count1) +  (harga2 * count2) +  (harga3 * count3)

console.log(totalharga)
