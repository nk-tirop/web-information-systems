const login = document.getElementById("login");
const register = document.getElementById("register");
const username = document.getElementById("username");
const password = document.getElementById("password");
const email = document.getElementById("email");

// handle submission

function handleSubmit(e) {
  e.preventDefault();

  // validation

  if (username.value === "") alert("Input username");
  else if (password.value === "") alert("Input correct password");
  else if (email.value === "") alert("Input email");
  else if (!email.value.includes("@")) alert("Input valid email");
  else {
    // handle actual submission
    alert("Submit");
  }
}

login.addEventListener("click", handleSubmit);
register.addEventListener("click", handleSubmit);
