console.log("-----EXERCISE 1----")

let arrayBuah = ["apel", "jeruk", "semangka", "kelengkeng", "anggur"];
console.log(arrayBuah);

arrayBuah.push("mangga");
console.log(arrayBuah);

arrayBuah[1] = "mengkudu";
console.log(arrayBuah);

arrayBuah.pop()
console.log(arrayBuah);

console.log("-------------------")


console.log("-----EXERCISE 2----")

let siswaBFLP = {
    "nama_depan" : "Erlina Eka",
    "nama_belakang" : "Fitriani",
    "hobi" : ["tidur", "menonton film"],
    "angka_favorit" : 7,
    "memakai_kacamata" : true,
    "makanan_favorit" : ["gudeg", "mie gacoan"]
}

console.log(`${siswaBFLP["nama_depan"]} ${siswaBFLP["nama_belakang"]}`)
siswaBFLP["angka_favorit"] = 8;
console.log(siswaBFLP);

siswaBFLP["hobi"].push("coding");
console.log(siswaBFLP);

siswaBFLP["lulusan"] = "Hackiv8";
console.log(siswaBFLP);

 

let objectProperty = Object.keys(siswaBFLP);
console.log(`Properti pada object ${objectProperty}`);

let objectValue = Object.values(siswaBFLP);
console.log(`Value pada setiap property object ${objectValue}`)

for(var j = 0; j<Object.keys(siswaBFLP).length;j++){
    console.log(`${Object.keys(siswaBFLP)[j]} : ${Object.values(siswaBFLP)[j]}`)
}

// // cara lain
// for(let item in siswaBFLP){
//     console.log(`${item} : ${siswaBFLP[item]}`);
// }

console.log("-------------------")



console.log("-----EXERCISE 3----")
function dateNow(){
    let time = new Date();
    let tanggal = time.getDate();
    let bulan = time.getMonth();
    let tahun = time.getFullYear();
    return `${tanggal} ${bulan} ${tahun}`
}
console.log(dateNow());

console.log("---------------------")


console.log("-----EXERCISE 4----")
function oddEven(number){
    return typeof(number) != "number" ? "Invalid Data" : number%2==0 ? "genap" :  "ganjil"; 
}
console.log(oddEven(2));
console.log(oddEven(3));
console.log(oddEven(20));
console.log(oddEven(21));

console.log("---------------------")

