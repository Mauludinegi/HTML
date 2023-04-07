let first = 1;
let second = 1;
let third = 1;
let fourth = 1;
let fifth = 1;
let sixth = 1;

function displayFirst() {
    if(first % 2 == 1) {
      document.getElementById("first").style.display = "block";
    } else {
      document.getElementById("first").style.display = "none";
    }
    return first++;
  }

  function displaySecond() {
    if(second % 2 == 1) {
      document.getElementById("second").style.display = "block";
    } else {
      document.getElementById("second").style.display = "none";
    }
    return second++;
  }

  function displayThird() {
    if(third % 2 == 1) {
      document.getElementById("third").style.display = "block";
    } else {
      document.getElementById("third").style.display = "none";
    }
    return third++;
  }

  function displayFourth() {
    if(fourth % 2 == 1) {
      document.getElementById("fourth").style.display = "block";
    } else {
      document.getElementById("fourth").style.display = "none";
    }
    return fourth++;
  }

  function displayFifth() {
    if(fifth % 2 == 1) {
      document.getElementById("fifth").style.display = "block";
    } else {
      document.getElementById("fifth").style.display = "none";
    }
    return fifth++;
  }

  function displaySixth() {
    if(sixth % 2 == 1) {
      document.getElementById("sixth").style.display = "block";
    } else {
      document.getElementById("sixth").style.display = "none";
    }
    return sixth++;
  }


function display1() {
  document.getElementById("pay").style.display = "none";
}

document.getElementById("payment").addEventListener("click", function() {
  // Tampilkan SweetAlert
  Swal.fire({
      title: 'Are you sure?',
      text: "You will buy this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Success!',
          'Payment Success.',
          'success',
          )
          document.getElementById("pay").style.display = "none"
        }
      })
});
