function search(title){
    console.log(title);
    fetchSearchData(title);
}

function fetchSearchData(title){
	
	var formData = new FormData();
	formData.append('title', title)
	
    fetch('search.php', {
        method: 'POST',
        body: formData
    })  
    .then(res => res.json())
    .then(res => viewSearchResult(res))
    .catch(e => console.error('Error:' + e))
}


function viewSearchResult(data) {
    const dataViewer = document.querySelector('.box-container');
    
    dataViewer.innerHTML = "";

    for(let i=0; i<data.length; i++){

        console.log(data[i]);

        const div = document.createElement('div');
        
        div.innerHTML = `
                            <div class="box">
								<div class="icons">
                					<a href="description.php?id_manga=`+ data[i].id +`" class="fas fa-eye"></a>
            					</div>

                                <div class="image">
                                   <img src="`+ data[i].main_picturemedium +`"alt="">
                                </div>

                                <div class="content">
                                    <h3>`+data[i].title+`</h3>
                                    <div class="price">`+data[i].mean+`</div>
                                </div>
                            </div>
                        `;
        
        dataViewer.appendChild(div);
    }
}
