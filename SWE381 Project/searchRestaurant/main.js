function search(restaurant) {
    console.log(restaurant);
    fetchSearchData(restaurant);
}

function fetchSearchData(restaurant){
    fetch('search.php',{method:'POST',body: new URLSearchParams('restaurant='+ restaurant)})
    .then(res => res.json())
    .then(res => viewSearchResult(res))
    .catch(e=> console.error('Error: ' + e))
}
function viewSearchResult(data){
    const dataList = document.getElementById("dataList");
    dataList.innerHTML = "";

    for(let i =0;i< data.length; i++){
        const li = document.createElement("li");
        li.innerHTML = data[i]["restaurant"];
        dataList.appendChild(li);
    }
}

