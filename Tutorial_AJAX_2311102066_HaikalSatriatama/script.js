let api = "api.php";

function loadMenu(){

fetch(api)
.then(res => res.json())
.then(data => {

let menu = data.coffees;

let html = "";

menu.forEach((item,index)=>{

html += `
<tr>
<td>${index+1}</td>
<td>${item.nama_produk}</td>
<td>${item.hot}</td>
<td>${item.ice_m}</td>
<td>${item.ice_l}</td>
<td>
<button onclick="hapusMenu(${index})">Delete</button>
</td>
</tr>
`;

});

document.getElementById("dataMenu").innerHTML = html;

});

}

// POST
function tambahMenu(){

let nama = document.getElementById("nama").value;
let hot = document.getElementById("hot").value;
let icem = document.getElementById("icem").value;
let icel = document.getElementById("icel").value;

fetch(api,{
method:"POST",
headers:{
"Content-Type":"application/json"
},
body:JSON.stringify({
nama_produk:nama,
hot:hot,
ice_m:icem,
ice_l:icel
})
})
.then(res=>res.json())
.then(data=>{
loadMenu();
});

}

// PUT
function updateMenu(){

let nama = document.getElementById("nama").value;
let hot = document.getElementById("hot").value;
let icem = document.getElementById("icem").value;
let icel = document.getElementById("icel").value;

fetch(api+"?id=0",{
method:"PUT",
headers:{
"Content-Type":"application/json"
},
body:JSON.stringify({
nama_produk:nama,
hot:hot,
ice_m:icem,
ice_l:icel
})
})
.then(res=>res.json())
.then(data=>{
loadMenu();
});

}

// DELETE
function hapusMenu(id){

fetch(api+"?id="+id,{
method:"DELETE"
})
.then(res=>res.json())
.then(data=>{
loadMenu();
});

}