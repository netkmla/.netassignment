<!DOCTYPE html>

<html>
  <style>

    <meta charset="utf-8">

    .test{
      display: flex;
      flex-direction: row;
      justify-content: space-around;
    }
    .test_1{
      display: flex;
      flex-direction: column;
      justify-content: space-around;
    }
    .space{
      margin-bottom:5px;
      margin-top:5px;
    }
    .result{
      color:red;
      border:none;
      font-size:15px;
    }
    .row_view{
      display : flex;
      flex-direction: row;
      justify-content: space-between;
    }

  </style>


  <body>
    <div class="test_1" align="middle">
      <div class="test space" >
        첫 번째 수
        <input type="number" id="first_number" value="">
      </div>
      <div class="test space" >
        연산자
        <input type="text" id="operator" value="">
      </div>
      <div class="test space" >
        두 번째 수
        <input type="number" id="second_number" value="">
      </div>
      <div class="test space">
         <button type="button" id="calculate" onclick="output()">계산</button>
      </div>
      <div class="test space">
        결과
        <input type="text" class="result " id="result" value="">
      </div>
    </div>
 </body>

 <script type="text/javascript">

 var temp;

 function output(){
 var first_number = document.getElementById("first_number").value;
 var operator = document.getElementById("operator").value;
 var second_number = document.getElementById("second_number").value;


  a=Number(first_number);
  b=Number(second_number);
  if(operator == '*')
  {
      temp = a * b ;
      document.getElementById("result").value = temp;
  }
  if(operator == '+')
  {
    temp = a + b;
    document.getElementById("result").value = temp;
  }
  if(operator == '-')
  {
    temp = a-b;
    document.getElementById("result").value = temp;
  }
  if(operator == '/')
  {
    temp = a / b;
    document.getElementById("result").value = temp;
  }

 }



 </script>
</html>
