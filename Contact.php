<script src="js/jss.js"></script>
<script src="js/collapse.js"></script>
<link rel="stylesheet" href="css/contactcss.css">
</head>
<body>
  <form id="myform"  onsubmit="return validate()" method="post">

  <h3>Registration Form</h3>

  <div id="inputs">


    <label for="name">Name</label>
    <input type="text" id="name" placeholder="name" title="Please enter your first name."/>
    <br/>


    <label for="phone">Phone number</label>
    <input type="text" id="phone" placeholder="phone number" title="Please enter your phone number." />
    <br/>


    <label for="email">Email</label>
    <input type="text" id="email" placeholder="email" title="Please enter your email."  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$" required/>
    <br/>


    <label for="body">Message</label>
    <textarea id="message" placeholder="message" title="What's on your mind?"></textarea>
    <br/>

  </div>

      <input class="submit" type="submit" onclick="return confirm('Are you sure?')" />

</form>
</body>
</html>
