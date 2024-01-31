// 1. Palindrom

function cekPalindrom(kata){
    let frase = kata.replace(/[^A-Z0-9]+/ig, '').toLowerCase();
    // menghilangkan karakter spesial dan mengubah menjadi huruf kecil semua untuk mengabaikan besar kecilnya huruf
    // console.log(frase)
    let arrayFrase = frase.split('');
    arrayFrase = arrayFrase.reverse().join('');
    return arrayFrase == frase;
}

console.log(cekPalindrom("Katak"));
console.log(cekPalindrom("Kasur Ini Rusak"));
console.log(cekPalindrom("Level"));
console.log(cekPalindrom("Malam"));
console.log(cekPalindrom("A man, a plan, a canal, Panama!"));
console.log(cekPalindrom("Coding"));


