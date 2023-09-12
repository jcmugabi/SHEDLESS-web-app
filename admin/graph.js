var chart = document.getElementById("staffanalysis").getContext("2d");
fetch('fetch.php')
.then(res=>res.json())
.then((data)=>{
  //  console.log(data);
  const addresses=[];
  const values=[];

    for(let key in data){
      addresses.push(key);
      values.push(data[key]);
    }

    const newChart = new Chart(chart, {
        type: 'line',
        data: {
          //inserting the labels here
           labels:addresses,
           datasets: [{
           label: "NUMBER OF STAFF",
           lineTension:0.3,
           //inserting the labels values here
           data: values,
           borderColor:'blue',
           backgroundColor: ['#04392a', '#abf', '#2ce', '#3d2', '#0ef','#000','#fff','#ffa'],
           hoverOffset: 5,
           barThickness:30,
           }],
        },
        options: {
          elements: {
             center: {
                text: 'ssuuna',
           color: '#FF6384', // Default is #000000
           fontStyle: 'Arial', // Default is Arial
           sidePadding: 20 // Defualt is 20 (as a percentage)
             },
          },
          scales:{
            x:{
                grid:{
                    display:false
                },
                title:{
                    text:'REGIONS',
                    color:'green',
                    display:true,
                    padding:{
                        top:20
                    },
                    font:{
                        size:30
                    }
                }
            },
            y:{
                grid:{
                    display:false
                },
                title:{
                    text:'NUMBER OF STAFF',
                    color:'green',
                    display:true,
                   font:{
                    size:20
                   }
                }
            }  
                },
           //centerText: "Recovered Items",
              responsive: false,
              plugins: {
                 legend: {
                    display: false,
                 }
              },
              cutout:'80%',
           },
    
           
     });

}).catch((err)=>{
    console.log(err);
});
