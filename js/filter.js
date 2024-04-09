const tbody = document.querySelector("#tbody");




fetch("finder.php")
        .then((response) => {
            if(!response.ok){ 
                throw new Error("Something went wrong!");
            }

            return response.json(); // Parse the JSON data.
        })
        .then((data) => {
             // This is where you handle what to do with the response.
             
             
             data = data.filter( element => element.alcalino == "1");
             
             
             console.log(data);


             data = data.filter( element => element.neutro == "1");


             console.log(data);

        })
       
