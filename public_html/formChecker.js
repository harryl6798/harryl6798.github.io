function checkValid()
{
  let works=true;
  let pig = document.getElementsByName('Pig')[0].value;
  let cow = document.getElementsByName('Cow')[0].value;
  let chicken = document.getElementsByName('Chicken')[0].value;
  let userName = document.getElementsByName('Username')[0].value;
  let password = document.getElementsByName('Password')[0].value;
  let seven = document.getElementById('i');
  let overnight = document.getElementById('ii');
  let three = document.getElementById('iii');
  if(isNaN(pig)){
    alert("The value for pig is not a number");
    works=false;
  }
  if(isNaN(cow))  {
    alert("The value for cow is not a number");
    works=false;
  }
  if(isNaN(chicken))
  {
    alert("The value for chicken is not a number");
    works=false;
  }
  pig = parseInt(pig);
  cow = parseInt(cow);
  chicken = parseInt(chicken);
  
  if (pig<0) {
    alert("The value for pig is negative");
    works=false;
  }
  
  if (cow<0) {
    alert("The value for cow is negative");
    works=false;
  }

 if (chicken<0) {
    alert("The value for chicken is negative");
    works=false;
  }
  if(userName == "")
  {
    alert("Username is Empty");
    works=false;
  }
  if(password == ""){
    alert("Password is Empty");
    works=false;
  }
  if(!(seven.checked || overnight.checked || three.checked))
  {
    alert("Pick a Shipping Option");
    works=false;
  }
  if(pig==0 && cow==0 && chicken==0)
  {
    alert("You still have to buy something");
    works=false;
  }

  
return works;
}

function resetValues(){
  document.getElementsByName('Pig')[0].value = 0;
  document.getElementsByName('Cow')[0].value = 0;
  document.getElementsByName('Chicken')[0].value = 0;
  document.getElementsByName('Username')[0].value = "";
  document.getElementsByName('Password')[0].value = "";
}

