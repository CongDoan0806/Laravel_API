<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container">

    </div>
    <script>
        
async function  renderData(){
   
   try {
       const url = 'http://localhost:8000/api/data';
       const data = await fetch(url);
       const json = await data.json();
       if (!data.ok) {
           throw new Error(`Response status: ${data.status}`);
         }
       if(data.ok){
           const html = json.map(element => {
               return `
               <div class='course-item'>
                   <a href="../Detail_Product/Detail.html?id=${element.id}"> 
                   </a>
                   <h3>${element.name}</h3>
                   <p>${element.height}</p>
               </div>
               `
           });
            document.getElementById('container').innerHTML = html;
       }
      
  } catch (error) {
       console.log('Error', error)
  }
}
renderData()
    </script>
</body>
</html>