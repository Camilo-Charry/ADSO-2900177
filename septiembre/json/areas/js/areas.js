function realizarTodasOperaciones(){

    let pantalla= document.getElementById("resultado")

    fetch('libreria/calcular.php',{
        method: 'POST',
        headers:{
            'content-Type':'application/json'
        },
        body: JSON.stringify({
            base: 24,
            altura: 10,
            lado: 10
        })
    })
    .then(response => response.json())
    .then(data =>{
        if(data.error){
            alert(data.error);
        }else{
            pantalla.innerHTML=`
            <div>
                <h2>Area del cuadrado</h1>
                <div> 
                    areaCuadrado= lado^2
                </div>
                <br>
                <div> 
                    lado: <span>${data.areaCuadrado.lado}</span>
                </div>
                <div>
                    area: <span>${data.areaCuadrado.area}</span>
                </div>

            </div>
            <div>
                <h2>Area del rectangulo</h1>
                <div> 
                    areaRectangulo= base * altura
                </div>
                <br>
                <div> 
                    base: <span>${data.areaRectangulo.base}</span>
                </div>
                <div> 
                    altura: <span>${data.areaRectangulo.altura}</span>
                </div>
                <div>
                    area: <span>${data.areaRectangulo.area}</span>
                </div>

            </div>
            <div>
                <h2>Area del Triangulo</h1>
                <div> 
                    areaTriangulo= (base * altura) /2
                </div>
                <br>
                <div> 
                    base: <span>${data.areaTriangulo.base}</span>
                </div>
                <div> 
                    altura: <span>${data.areaTriangulo.altura}</span>
                </div>
                <div>
                    area: <span>${data.areaTriangulo.area}</span>
                </div>

            </div>
            `;
            
        }
    })
    .catch(error => console.error('Error:',error));
}
realizarTodasOperaciones()
