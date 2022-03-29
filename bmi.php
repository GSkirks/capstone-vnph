<style>
    a { text-decoration: none; }
  </style>
<div class="container">
<body a link="#009688" vlink="#009688">
  <div class="box">
    <h1>Get Your BMI</h1>
    <div class="content">
      <div class="input">
        <label for="height">Height(cm)</label>
        <input type="number" id="height">
      </div>
      <div class="input">
        <label for="weight">Weight(kg)</label>
        <input type="number" id="weight">
      </div>
      <button id="calculate">Calculate BMI</button>
    </div>
    
    <div class="result">
      <p>Your BMI is</p>
      <div id="result">00.00</div>
      <p class="comment"></p>
      <button><a href="index.php">Home</button></a>
    </div>
  </div>
</div>

<script>
    const btn = document.getElementById('calculate');

btn.addEventListener('click', function(){

    let height = document.querySelector('#height').value;
    let weight = document.querySelector('#weight').value;

    if(height == '' || weight == ''){
        alert('Please fill out the input fields!');
        return;
    }

   // BMI = weight in KG / (height in m * height in m)

   height = height / 100

   let BMI = (weight / (height * height));

   BMI = BMI.toFixed(2);

   document.querySelector('#result').innerHTML = BMI;

    let status = '';

    if(BMI < 18.5){
        status = "Underweight";
    } 
    if(BMI >=18.5 && BMI < 25){
        status = "Healthy";
    }
    if(BMI >=25 && BMI < 30){
        status = "Overweight";
    }
    if(BMI >=30){
        status = "Obese";
    }
    document.querySelector('.comment').innerHTML = `You are <span id="comment">${status}</span>`;

});
</script>






















<style>

button{
  font-size: 15px;
  padding:7px;
  border-radius: 4px;
  margin:-10px;
  color: #009688 ;
  position: relative;
  background: #fff;
  width: 10rem;
  border: none;
  outline: none;
  box-shadow:
  0 0.7px 4px rgba(0, 0, 0, 0.045),
  0 1.9px 11.1px rgba(0, 0, 0, 0.065),
  0 4.5px 26.8px rgba(0, 0, 0, 0.085),
  0 15px 89px rgba(0, 0, 0, 0.13);
}

/* #containerx{
  display: flex;
  align-items: center;
  justify-content: center;
  border: none;
  outline: none;
} */














    @import url("https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@700&family=Montserrat&display=swap");


*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}
body{
    height: 110vh;
    margin: 0;
    padding: 0;
    text-align: center;
    font-family: sans-serif;
    background: linear-gradient(rgba(0,0,0,0.5),#009688),url(images/banner.jpg);
    background-size: cover;
    background-position: center;
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    /* not sure -50% */
    background-color: #fff;
    transform: translate(-50%, -50%);
    border-radius: 10px;
    box-shadow: 1px 1px 20px #009688;
}
.box{
    min-width: 400px;
    background: #fff;
    border-radius: 38px;
    text-align: center;
    position: relative;
}
/* .box::before{
    width: 500px;
			position: absolute;
			top: 50%;
			left: 50%;
			background-color: #fff;
			transform: translate(-50%, -50%);
			padding: 20px;
			border-radius: 10px;
			box-shadow: 1px 1px 20px #009688;
} */
h1{
    font-weight: bold;
    font-size: 36px;
    padding: 30px 0;
}
.content{
    padding: 0 40px;
}
.input{
    background: #FFF;
    box-shadow: 0px 0px 95px -30px rgba(0,0,0,0.15);
    border-radius: 28px;
    padding: 20px 0;
    margin-bottom: 20px;
}
.input label{
    display: block;
    font-size: 18px;
    font-weight: 600;
    color: #000;
    margin-bottom: 20px;
}
.input input{
    outline: none;
    border: none;
    border-bottom: 1px solid #009688;
    width: 60%;
    text-align: center;
    font-size: 28px;
    font-family: 'Nunito', sans-serif;
}
button#calculate{
    font-family: 'Nunito', sans-serif;
    color: #FFF;
    background: #009688;
    font-size: 16px;
    border-radius: 12px;
    padding: 12px 0;
    width: 100%;
    outline: none;
    border: none;
    transition: background .2s ease;
}
button#calculate:hover{
    background: #009688;
}
.result{
    padding: 30px 20px;
}
.result p{
    font-weight: 600;
    font-size: 22px;
    color: #000;
    margin-bottom: 15px;
}
.result #result{
    font-size: 36px;
    font-weight: 900;
    color: #009688;
    background-color: #eaeaea;
    display: inline-block;
    padding: 7px 20px;
    border-radius: 55px;
    margin-bottom: 25px;
}
#comment{
    color: #009688;
    font-weight: 800;
}
</style>