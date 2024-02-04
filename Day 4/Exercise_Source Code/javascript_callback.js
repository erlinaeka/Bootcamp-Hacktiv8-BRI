console.log("---------EXERCISE 1-----------")

function fetchUserData(username, callbackFunction){
    fetch(`https://api.github.com/users/${username}`)
        .then((response) => {
            return response.json()
        })
        .then((data) => {
            callbackFunction(data);
        })
        .catch((error) => {
            console.log("Error:", error)
        });
}

function displayData(data){
    console.log(`Hallo ${data.login} dengan id ${data.id}`);
}

fetchUserData("erlinaeka", displayData);

console.log("------------------------------")




console.log("---------EXERCISE 2-----------")
function fetchDataPromise(username){
    return new Promise((resolve, reject)=>{
        fetch(`https://api.github.com/users/${username}`)
            .then((response)=>{
                return response.json();
            })
            .then((data)=>{
                // console.log(data);
                resolve(data);
            })
            .catch((error)=>{
                reject(error);
            })
    })
}

fetchDataPromise("erlinaeka")
    .then((respons) => {
        console.log(respons);
    })
    .catch((error)=>{
        console.log(error);
    })

console.log("------------------------------")

console.log("---------EXERCISE 3-----------")
function loadImage(imageUrl, successCallback, errorCallback) {
    // Membuat elemen img baru
    let divContainer = document.getElementById("container");
    let imageElement = document.createElement('img');
    // Menetapkan atribut src dengan URL yang diberikan
    imageElement.src = imageUrl;

    divContainer.appendChild(imageElement);
  
    // Menangani kejadian ketika gambar berhasil dimuat
    imageElement.onload = function() {
      if (typeof successCallback === 'function') {
        successCallback(imageElement);
      }
    };
  
    // Menangani kejadian ketika gambar gagal dimuat
    imageElement.onerror = function() {
      if (typeof errorCallback === 'function') {
        errorCallback(new Error('Gagal memuat gambar'));
      }
    };
  }
  
  // Contoh penggunaan
  let imageUrl = 'https://down-id.img.susercontent.com/file/id-11134207-7r990-ln191knlyikv91';
  
  // Callback untuk sukses
  function onSuccess(imageElement) {
    console.log('Gambar berhasil dimuat:', imageElement);
  }
  
  // Callback untuk kegagalan
  function onError(error) {
    console.error('Error:', error.message);
  }
  
  // Memanggil loadImage dengan callback
  loadImage(imageUrl, onSuccess, onError);

console.log("------------------------------")


console.log("---------EXERCISE 4-----------")

function loadImagePromise(imgUrl) {
  return new Promise(function(resolve, reject) {
    // Membuat elemen img baru
    let divContainer2 = document.getElementById("container");
    let imageElement2 = document.createElement('img');
    
    // Menetapkan atribut src dengan URL yang diberikan
    imageElement2.src = imageUrl;
    divContainer2.appendChild(imageElement2);

    // Menangani kejadian ketika gambar berhasil dimuat
    imageElement2.onload = function() {
      resolve(imageElement2);
    };

    // Menangani kejadian ketika gambar gagal dimuat
    imageElement2.onerror = function() {
      reject(new Error('Gagal memuat gambar'));
    };
  });
}

// Contoh penggunaan dengan Promise
let imgUrl = 'https://down-id.img.susercontent.com/file/id-11134207-7r990-ln191knlyikv91';

loadImagePromise(imgUrl)
  .then(function(imageElement) {
    console.log('Gambar berhasil dimuat:', imageElement);
  })
  .catch(function(error) {
    console.error('Error:', error.message);
  });

console.log("------------------------------")


console.log("---------EXERCISE 5-----------")
function fetchPosts() {
    return new Promise(function(resolve, reject) {
      fetch("https://jsonplaceholder.typicode.com/posts")
        .then(response => response.json())
        .then(posts => {
          resolve(posts);
        })
        .catch(error => {
          reject(error);
        });
    });
  }
  
  function fetchComments() {
    return new Promise(function(resolve, reject) {
      fetch("https://jsonplaceholder.typicode.com/comments")
        .then(response => response.json())
        .then(comments => {
          resolve(comments);
        })
        .catch(error => {
          reject(error);
        });
    });
  }
  
  // Chaining Promises
  fetchPosts()
    .then(function(posts) {
      console.log("Jumlah Posts:", posts.length);
      return fetchComments(); // Mengembalikan promise untuk comments
    })
    .then(function(comments) {
      console.log("Jumlah Comments:", comments.length);
    })
    .catch(function(error) {
      console.error("Error:", error);
    });

console.log("------------------------------")

