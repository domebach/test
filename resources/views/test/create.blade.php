<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <h1>Create a new Test</h1>

   <form method="POST" action="/test">
       {{ csrf_field() }}
       <div>
           <input type="text" name="name" placeholder="Test name">
       </div>

       <div>
           <input type="text" name="age" placeholder="Test age">
       </div>

       <div>
           <button type="submit">Create Test</button>
       </div>
   </form>
</body>
</html>
