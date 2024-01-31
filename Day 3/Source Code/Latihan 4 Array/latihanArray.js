// 1. Manipulasi Array
console.log("Manipulasi Array");
let myArray = [];

myArray.push('apple');
myArray.push('banana');
myArray.pop();
myArray.unshift('orange');
myArray.shift();

console.log(myArray);


// 2. Penggabungan Array
console.log("Penggabungan Array");
let firstArray = [1, 2, 3, 4];
let secondArray = [5, 6, 7, 8];

let concatArray = firstArray.concat(secondArray);
concatArray = concatArray.join(',');

console.log(concatArray);


// 3. Pengurutan Array
console.log("Pengurutan Array");
let numbers = [1,13,4,8,14,9,2];

console.log(`Ascending ${numbers.sort((a,b) => a-b)}`);
console.log(`Descending ${numbers.sort((a,b) => b-a)}`);

// 4. Pemotongan Array
console.log("Pemotongan Array");
let fruits = ['apple', 'banana', 'orange', 'grape', 'kiwi'];
fruits.splice(1,2);
console.log(fruits);


// 5. Pemisahan String menjadi Array
console.log("Pemisahan String menjadi Array");
let sentence = 'Hello,World,JavaScript';
let arraySentence = sentence.split(',');
console.log(arraySentence);